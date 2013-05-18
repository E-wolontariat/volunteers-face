<?php
require_once(dirname(__FILE__).'/vendor/guzzle.phar');
use Guzzle\Http\Client;

class Facebook {
	protected static $instance = null;
	protected $canvasUrl = null;
	protected $facebookUrl = null;
	protected $appId;
	protected $appSecret;
	protected $user = null;
	protected $facebookUserId = null;
	protected $isSll = false;
	protected $graphUrl = "https://graph.facebook.com";
	protected $fbClient = null;
	protected $signedRequest = null;
	protected $token;
	protected $previousPage = null;
	
	private function __construct() {
		$this->fbClient = new Client($this->graphUrl);
		$this->setAppSecret(sfConfig::get('fb_app_secret'));
		$this->setAppId(sfConfig::get('fb_app_id'));
		$this->setFanpageId(sfConfig::get('fb_fanpage'));
		$this->setIsSsl();
		$this->setFacebookUrl($this->createFacebookUrl());
		$this->setCanvasUrl($this->createCanvasUrl());
		$signedRequest = sfContext::getInstance()->getRequest()->getParameter('signed_request', null);
		$this->setSignedRequest($signedRequest);
		$this->decodeSignedRequest();
	}
	
	public function getAccessUrl($redirect_uri = null, $additional_permissions = null) {
		if(is_null($redirect_uri)) {
			$redirect_uri = $this->getFacebookUrl();
		} else {
			$redirect_uri = $this->getFacebookUrl()."/".$redirect_uri;
		}
		$url = "https://graph.facebook.com/oauth/authorize?client_id=".$this->getAppId()."&redirect_uri=".$redirect_uri."&scope=email,rsvp_event,user_birthday,user_location,user_likes".((!is_null($additional_permissions))?",manage_pages":"");
		return $url;
	}
	
	public static function get() {
		if(self::$instance==null)
			self::$instance = new Facebook();
		return self::$instance;
	}

	public function getPages($id) {
		$data = $this->execute("/accounts");
		if(is_array($data) && isset($data['data'])) {
			$data = $data['data'];
			foreach($data as $page) {
				if(is_array($page)) {

					if($page['id']==$id) {
						if(isset($page['perms'])) {
							if(in_array("ADMINISTER", $page['perms'])) {
								return $page;
							}
						}
					}
				}
			}
		}
		return false;
	}
	
	public function getToken() {
		return $this->token;
	}
	
	protected function setToken($value) {
		$this->token = $value;
	}
	
	public function getAppId() {
		return $this->appId;
	}
	
	protected function setAppId($value) {
		$this->appId = $value;
	}

	public function getAppSecret() {
		return $this->appSecret;
	}
	
	protected function setAppSecret($value) {
		$this->appSecret = $value;
	}

	public function getFacebookUrl() {
		return $this->facebookUrl;
	}

	public function getPermissions() {
		$data = $this->execute('/permissions', true);
		return $data;
	}

	public function checkPermissions($permissions) {
		$data = $this->getPermissions();
		if(is_array($data) && isset($data['data'])) {
			if(is_array($data['data'])) {
				$data = reset($data['data']);
				$givenPermissions = explode(",", $permissions);
				$diffrences = array_diff($givenPermissions, $data);
				if(count($diffrences) ==0)
					return true;

			}
		} 
		return false;
	}


	
	protected function setFacebookUrl($url) {
		
		$this->facebookUrl = $url;
	}
	
	protected function createFacebookUrl() {
		$namespace = sfConfig::get("fb_namespace");
		$url = "http://apps.facebook.com/".$namespace."/";
		$url = $this->sslUrl($url);
		return $url;
	}
	
	public function getCanvasUrl() {
		return $this->canvasUrl;
	}
	
	protected function setCanvasUrl($url) {
		$this->canvasUrl = $url;
	}
	
	protected function createCanvasUrl() {
		$url = sfConfig::get("fb_canvas_url");
		$url = str_replace("https://", "", $url);
		$url = str_replace("http://", "", $url);
		$url = "http://".$url;
		$url = $this->sslUrl($url);
		return $url;
	}
	
	public function getUser() {
		return $this->user;
	}
	
	protected function setUser($value) {
			$this->user = $value;
	}
	
	public function getFacebookUserId() {
		return $this->facebookUserId;
	}
	
	protected function setFacebookUserId($value=null) {
		$this->facebookUserId = $value;
		
	}
	
	public function getFanpageId() {
		return $this->fanpageId;
	}
	
	protected function setFanpageId($value) {
		 $this->fanpageId = $value;
	}
	
	public function getPreviousPage() {
		return $this->previousPage;
	}
	
	public function setPreviousPage($value) {
		
		if(is_null($this->previousPage))
			$this->previousPage = $value;
	}
	
	public function isPageFan() {

		$return = $this->execute("/likes/".$this->getFanpageId());
		if(isset($return['data']) && count($return['data'])>0) {
			return true;
		}
		return false;
	}
	
	public function getSignedRequest() {
		return $this->signedRequest;
	}
	
	protected function setSignedRequest($signedRequest) {
		$this->signedRequest = $signedRequest;
	}
	
	public function getIsSsl() {
		return $this->isSsl;
	}
	
	protected function setIsSsl() {
		$this->isSsl = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443);
	}
		
	protected function decodeSignedRequest() {
		$signedRequest = $this->signedRequest;
		if(!is_null($signedRequest)) {
			$data = $this->parseSignedRequest($signedRequest);
			if(isset($data['oauth_token'])) {
				$this->setToken($data['oauth_token']);
				$this->setFacebookUserId($data['user_id']);
				$user = UserPeer::getByFacebookId($this->getFacebookUserId());
				$this->setUser($user);	
				
				if(is_null($user)) {
					$user = new User();
					$user->setFacebookId($this->getFacebookUserId());
				}
				
				$userData = $this->execute();
				
				$user->setFirstName($userData['first_name']);
				$user->setLastName($userData['last_name']);
				$user->setGender($userData['gender']=='male');
				if(isset($userData['phone']))
					$user->setPhone($userData['phone']);
				if(isset($userData['email']))
					$user->setEmail($userData['email']);
				$user->setLastIp($_SERVER['REMOTE_ADDR']);
				$user->save();
				$this->setUser($user);			
			}

		}
	}
	
	protected function parseSignedRequest($signed_request) {
	  list($encoded_sig, $payload) = explode('.', $signed_request, 2); 
	  $sig = $this->base64UrlDecode($encoded_sig);
	  $data = json_decode($this->base64UrlDecode($payload), true);
	  return $data;
	}

	protected function base64UrlDecode($input) {
	  return base64_decode(strtr($input, '-_', '+/'));
	}
	
	protected function sslUrl($url) {
		if($this->isSsl)
			return str_replace("http://", "https://", $url);
		return $url;
	}

	public function getLongToken() {
		$data = '/oauth/access_token?client_id='.$this->getAppId()."&client_secret=".$this->getAppSecret()."&grant_type=fb_exchange_token&fb_exchange_token=".$this->getToken();
		
		$request = $this->fbClient->get($data);
		$response = $request->send();
		
		$token = $response->getBody(true);
		$token = str_replace("access_token=", "", $token);
		$this->setToken($token);
		return true;
	}
	
	protected function execute($parameters = null, $useId = true) {
		
		if(is_null($parameters)) {
			$url = $this->getFacebookUserId()."?access_token=".$this->getToken();
		} else {
			$joinParameterWith = "&";
			if(strpos($parameters, "?")===false)
				$joinParameterWith = "?";
			$url = $this->getFacebookUserId().$parameters.$joinParameterWith."access_token=".$this->getToken();
		}
		
		
		$request = $this->fbClient->get($url);
		$response = $request->send();
		$jsonResponse = $response->json();
		return $jsonResponse;
	}
	
	public function getPageEvents($pageId, $access_token) {
		$url = $pageId."/events/?access_token=".$access_token;
		$request = $this->fbClient->get($url);
		$response = $request->send();
		$jsonResponse = $response->json();

		if(isset($jsonResponse['data'])) {
			return $jsonResponse['data'];
		}

		return array();
	}	
	
}
?>