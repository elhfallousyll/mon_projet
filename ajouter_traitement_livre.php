<?php
    // ajouter_traitement_ livre.php
    require "connexion.php";
 
    $id = $_POST["id"];
    $titre = $_POST["titre"];
    $auteur = $_POST["auteur"];
	$annee=  $_POST["annee"];
 
    $sql = "INSERT INTO livre (id, titre, auteur,annee)
            VALUES ('$id', '$titre', '$auteur','$annee')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "livre ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>
