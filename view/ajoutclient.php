<?php
require_once('../Controller/connexion_bdd.php');
session_start();

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = $_POST['date1'] . '/' . $_POST['date2'] . '/' . $_POST['date3'];
$email = $_POST['email'];
$taille = $_POST['taille'];
$poid = $_POST['pois'];

$insert = "INSERT INTO `patient` (nom, prenom, email, age, poid, taille) VALUES (?,?,?,?,?,?)";
$insert = $connexion->prepare($insert);
$insert -> bind_param("ssssii", $nom,$prenom,$email,$age,intval($poid),intval($taille));
$insert -> execute();
var_dump($insert);
header('location: admin.php');
die();

