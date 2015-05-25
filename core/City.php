<?php 

class City
{
	private $name;
	
	private $country;
	
	private $users = [];
	
	public function __construct ($cityName)
	{
		$this->setName($cityName);
	}
   
	function __toString() 
	{
		return($this->name . ' ' . $this->country);
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setCountry($country)
	{
		$this->country = $country;
	}
	
	public function getCountry()
	{
		return $this->country;
	}
	
	public function addUsers($user)
	{
		$this->users[] = $user;
	}
	
	public function getUsers()
	{
		return $this->users;
	}
	
	
}
