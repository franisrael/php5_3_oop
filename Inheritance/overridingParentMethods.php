<?php

/*
 *
 */

class Member {
	public $username = "";
	protected $loggedIn = false;

	public function get_name() {
		return $this->username;
	}

	public function login() {
		$this->loggedIn = true; 
	}
	public function logout() {
		$this->loggedIn = false;
	}
	public function isLog() {
		return $this->loggedIn;
	}
}

class Administrator extends Member {
	public function login() {
		$this->loggedIn = true;
		echo "Log entry: $this->username logged in ".$this->loggedIn."<br>";
	}
}

// Create a new member and log them in
$member = new Member();
$member->username = "Fred";
echo "Usuario ".$member->get_name()."<br>";
$member->login();
echo "User ".$member->username." is logged ".($member->isLog() ? "Yes" : "No")."<br>";
$member->logout();
echo "User ".$member->username." is logged ".($member->isLog() ? "Yes" : "No")."<br>";
$member2 = new Member;
$member2->username = "Iria";
echo "Usuario ".$member2->get_name()."<br>";
// Create a new administrator and log them in
$admin = new Administrator;
$admin->username = "Mary";
$admin->login();
echo "Admin ".$admin->get_name()." is login ".($admin->isLog() ? "Yes" : "No")."<br>";
$admin->logout();
echo "Admin ".$admin->get_name()." is login ".($admin->isLog() ? "Yes" : "No")."<br>";