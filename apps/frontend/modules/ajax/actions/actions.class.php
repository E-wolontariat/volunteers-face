<?php


class ajaxActions extends sfActions
{

  protected function forgeFoundation(sfWebRequest $request) {
    $foundation = new Foundation();
    $foundation->setName($request->getParameter('name', ''));
    $foundation->setAddressLine1($request->getParameter('address_line1', ''));
    $foundation->setAddressLine2($request->getParameter('address_line2', ''));
    $foundation->setEmail($request->getParameter('email', ''));
    $foundation->setPhone($request->getParameter('phone', ''));
    $foundation->setDescription($request->getParameter('description', ''));
    $foundation->save();
    return $foundation;
  }

  public function executeIspagefan(sfWebRequest $request) {
	  if($request->isXmlHttpRequest()) {
	  	  $return = array('success'=>1, 'is_fan'=>Facebook::get()->isPageFan());
		  echo json_encode($return);
	  } 
	  die();
  }
  
  public function executeSave(sfWebRequest $request) {
  	if($request->isXmlHttpRequest()) {
		
		$answer = $request->getParameter('answer', null);
		
		$round = RoundPeer::getCurrent();
		$user = Facebook::get()->getUser();
		
		if(is_null($answer)) {
			$return['success'] = '0';
			$return['message'] = 'Sorry but the answer you sent is empty.';
			echo json_encode($return);
			die();
		}
		
		if(is_null($user)) {
			$return['success'] = '0';
			$return['message'] = 'Sorry but you need to send answer throught our app on facebook.';
			echo json_encode($return);
			die();
		}
		
		if(is_null($round)) {
			$return['success'] = '0';
			$return['message'] = 'Sorry but our little competition is finished.';
			echo json_encode($return);
			die();
		}
		
		$user->addNewAnswer($answer, $round);
		
		$return['success'] = 1;
		echo json_encode($return);
		die();
	}
  }

   public function executeAddpage(sfWebRequest $request) {
  	$page_id = $request->getParameter('page_id', false);
  	$facebook = Facebook::get();

  	if(!is_null(PagePeer::getByFacebookId($page_id))) {

	  	echo json_encode(array("success"=>1));
	  	die();
  	}
   	
   	$token = $facebook->getLongToken();
   	$facebook->getUser()->setLongToken($facebook->getToken());
   	$facebook->getUser()->save();

    $user_pages = $facebook->getPages($page_id);

    if($user_pages) {

        $foundation = $this->forgeFoundation($request);
    	$page = new Page();
    	$user_id = $facebook->getUser()->getId();
        $page->setUserId($user_id);
    	$page->setFoundationId($foundation.getId());
    	$page->setAccessToken($user_pages['access_token']);
    	$page->setFacebookId($page_id);
    	$page->save();

    	//$this->processForm($request, $this->form);	
    }
 
  	echo json_encode(array("success"=>1));
  	die();
  }


   public function executeAddevent(sfWebRequest $request) {
  	$event_id = $request->getParameter('event_id', false);
  	$facebook = Facebook::get();

  	if(!is_null(UserEventPeer::getByFacebookId($event_id))) {
  		
	  	echo json_encode(array("success"=>1));
	  	die();
  	}
   	
   	$token = $facebook->getLongToken();

   	$facebook->getUser()->setLongToken($facebook->getToken());
   	$facebook->getUser()->save();


    $user_events = $facebook->getUserEvents($event_id);

    if($user_events) {
   
        $foundation = $this->forgeFoundation($request);
    	$event = new UserEvent();
    	$user_id = $facebook->getUser()->getId();
        $event->setUserId($user_id);
    	$event->setFoundationId($foundation.getId());
    	$event->setFacebookEventId($event_id);
    	$event->save();

    	//$this->processForm($request, $this->form);	
    }
 
  	echo json_encode(array("success"=>1));
  	die();
  }

  public function executeJoin(sfWebRequest $request) {
  	$event_id = $request->getParameter('event_id', false);
  	
  	$data = Facebook::get()->attend($event_id);

  	$share_data = Facebook::get()->shareAsPage($event_id);
  	var_dump($share_data); die();

  	echo json_encode(array("success"=>(int)$data));
  	die();
  }
}	
