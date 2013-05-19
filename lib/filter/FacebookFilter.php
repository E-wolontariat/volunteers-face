<?php


class FacebookFilter extends sfFilter
{
	
	public function execute($filterChain){  
		$releasedActions = array();
		$releasedActions[] = 'app/permission';
		$releasedActions[] = 'app/index';

		
		$currentAction = sfContext::getInstance()->getModuleName().'/'.sfContext::getInstance()->getActionName();
		
		$is_released = in_array($currentAction, $releasedActions);
		
		$facebook = Facebook::get();
		
		$previousPage = sfContext::getInstance()->getRequest()->getParameter('previousAction', null);
		if($previousPage == $currentAction) {
			$previousPage = 'app/index';
		}
		$facebook->setPreviousPage($previousPage);
		
		if(!$is_released) {
			if(is_null($facebook->getFacebookUserId()) || $facebook->checkPermissions('email,rsvp_event,user_birthday,user_location,publish_stream,user_likes')) {
				sfContext::getInstance()->getController()->redirect('app/permission');
				die();
			}
		}
	

		
      	$filterChain->execute($filterChain);      
	} 
	

	 
}
