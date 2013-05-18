<?php

require_once dirname(__FILE__).'/../lib/pageGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/pageGeneratorHelper.class.php';

/**
 * page actions.
 *
 * @package    facebook-answers
 * @subpackage page
 * @author     Jakub Dziwoki
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class pageActions extends autoPageActions
{
	public function executeCreate(sfWebRequest $request)
	{
	    $this->form = $this->configuration->getForm();
	    $this->Page = $this->form->getObject();

	    $facebook = Facebook::get();
	   	$dataFacebook = $request->getParameter('page');
	   	$token = $facebook->getLongToken();
	    $user_pages = $facebook->getPages($dataFacebook['facebook_id']);
	    if($user_pages) {

	    	
	    	$dataFacebook['access_token'] = $user_pages['access_token'];
	    	

	    	$page = new Page();
	    	$user_id = $facebook->getUser()->getId();
	    	$page->setUserId($user_id);
	    	$page->setAccessToken($dataFacebook['access_token']);
	    	$page->setFacebookId($dataFacebook['facebook_id']);
	    	$page->save();

	    	//$this->processForm($request, $this->form);	
	    }
	    	
	    $this->forward("page", "index");
	    die();

	    // /$this->setTemplate('new');
	}

}
