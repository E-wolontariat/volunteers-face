<?php


class profileActions extends sfActions
{

  public function executeIndex(sfWebRequest $request)
  {
    $this->events = PagePeer::parsePages();
    $this->pages = PagePeer::getPages();
      

  }

  public function executeAdd(sfWebRequest $request) {

  }

  public function executeAddpage(sfWebRequest $request) {
    
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
