<?php


class FacebookFilterBackend extends sfFilter
{
	
	public function execute($filterChain){  
		$user = sfContext::getInstance()->getUser();
		$currentAction = sfContext::getInstance()->getModuleName().'/'.sfContext::getInstance()->getActionName();
		$facebook = Facebook::get();
		
		if($user->isAuthenticated()) {
		
			if(is_null($facebook->getSignedRequest()) || $facebook->checkPermissions("email,rsvp_event,user_birthday,user_location,user_likes,manage_pages")) {
				if($currentAction!="app/permission") {
					
					//sfContext::getInstance()->getController()->redirect('app/permission');
					die();	
				}
			}
		}

      	$filterChain->execute($filterChain);      
	} 
	

	 
}
