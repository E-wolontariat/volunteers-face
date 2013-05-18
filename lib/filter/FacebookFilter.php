<?php


class FacebookFilter extends sfFilter
{
	
	public function execute($filterChain){  
		$releasedActions = array();
		$releasedActions[] = 'app/permission';
		$releasedActions[] = 'app/index';
		
		$releasedFromLikeActions = array();
		$releasedFromLikeActions[] = 'app/permission';
		$releasedFromLikeActions[] = 'app/index';
		$releasedFromLikeActions[] = 'app/like';
		
		$releasedFromRoundOver = array();
		$releasedFromRoundOver[] = 'app/permission';
		$releasedFromRoundOver[] = 'app/index';
		$releasedFromRoundOver[] = 'app/like';
		$releasedFromRoundOver[] = 'app/isover';
		
		$currentAction = sfContext::getInstance()->getModuleName().'/'.sfContext::getInstance()->getActionName();
		
		$is_released = in_array($currentAction, $releasedActions);
		$is_releasedFromLike = in_array($currentAction, $releasedFromLikeActions);
		$is_releasedFromRoundOver = in_array($currentAction, $releasedFromRoundOver);
		
		$facebook = Facebook::get();
		
		$previousPage = sfContext::getInstance()->getRequest()->getParameter('previousAction', null);
		if($previousPage == $currentAction) {
			$previousPage = 'app/index';
		}
		$facebook->setPreviousPage($previousPage);
		
		if(!$is_released) {
			if(is_null($facebook->getFacebookUserId())) {
				sfContext::getInstance()->getController()->redirect('app/permission');
				die();
			}
		}
		
		if(!$is_releasedFromLike) {
			if(!($facebook->isPageFan())) {
				sfContext::getInstance()->getRequest()->setParameter('previousAction', $currentAction);
				sfContext::getInstance()->getController()->forward('app', 'like');
				die();	
			}
		}
		
		if(!$is_releasedFromRoundOver) {
			$round = RoundPeer::getCurrent(); 
			if($round == null) {
				sfContext::getInstance()->getController()->forward('app', 'isover');
				die();
			}
		}
		
      	$filterChain->execute($filterChain);      
	} 
	

	 
}
