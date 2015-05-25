<?php 

require_once('User.php');
require_once('City.php');

$c = new City('Rome');
$c1 = new City('Monaco');
$cities = [$c, $c1];

$u = new User();
$u->setFirstName('Billy');
$u->setLastName('Thomson');
$c->addUsers($u);

$u2 = new User();
$u2->setFirstName('Ethan');
$u2->setLastName('Anderson');
$c->addUsers($u2);

$u3 = new User();
$u3->setFirstName('Morgan');
$u3->setLastName('Hunter');
$c1->addUsers($u3);

//-----------------------------------------------------------------------------------------------------

foreach ($cities as $city) {
	echo $city->getName() .'<br />';
	
	echo '<ul>';
	
	foreach($city->getUsers() as $user) {
		echo '<li>';
		echo $user->getFirstName() .' '. $user->getLastName();
		echo '</li>';
	}
	
	echo '</ul>';
}
