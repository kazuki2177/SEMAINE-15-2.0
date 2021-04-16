<?php

    function valid_donnees($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }
?>
<!-- trim enleve les espaces , strpslash enleve les slash et anti-slash et htmlspecial ramplace les chevrons "<" ">" par des lettre genre a -->

$id = valid_donnees($_POST['id']);
$ref = valid_donnees($_POST['ref']);
$categorie = valid_donnees($_POST['categorie']);
$image = valid_donnees($_POST['image']);
$libelle = valid_donnees($_POST['libelle']);
$exampleFormControlTextarea1 = valid_donnees($_POST['exampleFormControlTextarea1']);
$prix = valid_donnees($_POST['prix']);
$stock = valid_donnees($_POST['stock']);
$couleur = valid_donnees($_POST['couleur']);
$date = valid_donnees($_POST['date']);