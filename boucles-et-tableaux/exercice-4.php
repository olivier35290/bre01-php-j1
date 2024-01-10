<?php

//Parcourez le tableau users et affichez le nom et prénom de chacun des utilisateurs en sautant une ligne entre chaque utilisateur.

$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];

foreach ($users as $user) {
	echo "{$user['firstName']} {$user['lastName']}<br>";
}


?>
