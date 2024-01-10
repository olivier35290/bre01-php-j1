<?php

//Utilisez l'injection de variable et le tableau associatif $user pour afficher une phrase qui dit Je suis Barack Obama, le 44ème président des USA.

$user = [
	"firstName" => "Barack",
	"lastName" => "Obama"
];

echo "Je suis {$user['firstName']} {$user['lastName']}, le 44ème président des USA.";

?>
