<?php
	$connexion = new mysqli("localhost", "root", "", "tp_patient");
	$connexion->set_charset("utf8");

	if ($connexion->connect_error) {
		printf("Erreur : Connexion impossible : ". $connexion->connect_error);
		exit();
	} 	


?>