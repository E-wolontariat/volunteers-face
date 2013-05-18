<?php


class profileActions extends sfActions
{

  public function executeIndex(sfWebRequest $request)
  {
    $this->events = PagePeer::parsePages();
      

  }
  public function executePermission(sfWebRequest $request) {
  	
  }
  
  public function executeAnswer(sfWebRequest $request) {
  	  
  }
  
  public function executeLike(sfWebRequest $request) {
  	
  }
  
  public function executeSent(sfWebRequest $request) {
	 
	  
  }
  
  public function executeIsover(sfWebRequest $request) {
	 
	  
  }
  
  
  
}	
