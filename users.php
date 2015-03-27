<?php
class Users {
    private user_id;
    private user_name;
    private email;

    public function __construct($user_name) 
    {
	$this->user_name = $user_name;
    }

    public function getName() 
    {
	return $this->user_name;
    }

    public function setName() 
    {

    }
}
