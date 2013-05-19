<?php


class profileActions extends sfActions
{

  public function executeIndex(sfWebRequest $request)
  {
    $this->foundationId = $request->getParameter('foundation_id', false);

    $pagesEvents = PagePeer::parsePages();
    $userEvents = UserEventPeer::getAll();

    $this->events = array_merge($pagesEvents, $userEvents);
    $facebook = Facebook::get();

    
    $this->events = array_filter($this->events, function($event) use ($facebook) {
      if(!$event->getIsPublic()) { 

        if(!$event->getIsInvited()) {
          return false;
        }
      }
      return true;
    });

    usort($this->events, function($a, $b) use($facebook) {
      $date1 = null;
      $date2 = null;

      if(!is_null($a->getStart())) {
        $date1 = $a->getStart();
      }
      if(is_null($a->getEnd())) {
        $date1 = $a->getEnd();
      }


      if(!is_null($b->getStart())) {
        $date2 = $b->getStart();
      }
      if(is_null($b->getEnd())) {
        $date2 = $b->getEnd();
      }

      if ($date1 == $date2) {
          return 0;
      }
      return ($date1 < $date2) ? -1 : 1;
    });

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
