<?php 

class MyClass
{
	private $firstName;
	
	private $lastName;
	
	private $city;
	
	public function __construct ()
	{
	
	}
   
	function toString() 
	{
		return($this->firstName . ' ' .$this->lastName);
	}
	
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}
	
	public function getFirstName()
	{
		return $this->firstName;
	}
	
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}
	
	public function getLastName()
	{
		return $this->lastName;
	}
}

asdfasdf
asdf asdfasdf asdfasdf asdf
asdf
