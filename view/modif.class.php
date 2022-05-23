<?php
require_once('../Controller/connexion_bdd.php');

class modifpatient
{
    public function __construct($nom, $prenom,$email,$age,$poid,$taille)
    {
        global $connexion;

        $requete1 = "UPDATE `patient` SET `nom`= ?,`prenom`= ?,`email`= ?,`age`= ?,`poid`= ? ,`taille`= ? WHERE id=? ";
        $result1 = $connexion->prepare($requete1);
        $result1->bind_param("ssssiii", $nom, $prenom,$email,$age,intval($poid),intval($taille));
        $result1->execute();
    }
}

?>

