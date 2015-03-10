<?php

class Employee
{
    public function __toString()
    {
	return 'This class is: ' . __CLASS__;
    }
}

$user = new Employee();
echo $user;
