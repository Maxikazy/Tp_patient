<?php

require_once('connexion_bdd.php');

function infoVoyage($id)
{
    global $connexion;
    $patient = []

    $requestPatient = "SELECT `id`, `nom`, `prenom`, `email`, `age`, `poid`, `taille`
                    FROM `patient` "
    $resultPatient = $connexion->prepare($requestPatient);
    $resultPatient->bind_param("i", $id);
    $resultPatient->execute();
    $resultPatient->bind_result($id, $nom, $prenom, $email, $age, $poid, $taille);

    if (!$resultPatient) {
        return null;
    } else {
        $c = 1;
        while ($resultPatient->fetch()) {
            $jour['planing'] = $planning_jour;
            $jour['depart'] = $heure_depart;
            $jour['arrivee'] = $heure_arrivee;
            $jour['villedepart'] = $villedepart;
            $jour['idvillearrivee'] = $id_ville_arrivee;
            $voyage['jour'.$c] = $jour;
            $c += 1;
        }
        return $voyage;
    }
}

