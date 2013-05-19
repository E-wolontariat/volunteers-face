<?php



/**
 * Skeleton subclass for performing query and update operations on the 'user' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.6 on:
 *
 * Sat Jan  5 11:53:55 2013
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class UserPeer extends BaseUserPeer {
	public static function getByFacebookId($id) {
		if(is_null($id))
			return null;
		
		$c = new Criteria();
		$c->add(UserPeer::FACEBOOK_ID, $id);
		$row = self::doSelectOne($c);
		return $row;
	} 



} // UserPeer
