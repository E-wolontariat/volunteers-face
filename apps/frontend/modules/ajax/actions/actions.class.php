<?php


class ajaxActions extends sfActions
{
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
}	
