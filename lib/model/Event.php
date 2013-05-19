<?php
class Event {
	protected $_name;
	protected $_start;
	protected $_end;
	protected $_timezone;
	protected $_location;
	protected $_facebook_id;
	protected $_picture;
	protected $_description;
	protected $_page;
	protected $_is_follow;
	protected $_user;
	protected $_is_invited;
	protected $_is_public;

	public function setName($value) {
		$this->_name = $value;
	}

	public function getName() {
		return $this->_name;
	}

	public function setStart($value) {
		$value = date('Y-m-d', strtotime($value));
		$this->_start = $value;
	}

	public function getStart() {
		return $this->_start;
	}

	public function setEnd($value) {
		$value = date('Y-m-d', strtotime($value));
		$this->_end = $value;
	}

	public function getEnd() {
		return $this->_end;
	}

	public function setTimezone($value) {
		$this->_timezone = $value;
	}

	public function getTimezone() {
		return $this->_timezone;
	}

	public function setLocation($value) {
		$this->_location = $value;
	}

	public function getLocation() {
		return $this->_location;
	}

	public function setFacebookId($value) {
		$this->_facebook_id = $value;
	}

	public function getFacebookId() {
		return $this->_facebook_id;
	}

	public function setPicture($value) {
		$this->_picture = $value;
	}

	public function getPicture() {
		return $this->_picture;
	}

	public function setDescription($value) {
		$this->_description = $value;
	}

	public function getDescription() {
		return $this->_description;
	}

	public function setPage($value) {
		$this->_page = $value;
	}

	public function getPage() {
		return $this->_page;
	}

		public function setIsFollow($value) {
		$this->_is_follow = $value;
	}

	public function getIsFollow() {
		return $this->_is_follow;
	}

	public function setUser($value) {
		$this->_user = $value;
	}

	public function getUser() {
		return $this->_user;
	}

	public function setIsPublic($value) {
		$this->_is_invited = $value;
	}

	public function getIsPublic() {
		return $this->_is_invited;
	}

	public function setIsInvited($value) {
		$this->_is_invited = $value;
	}

	public function getIsInvited() {
		return $this->_is_invited;
	}




}