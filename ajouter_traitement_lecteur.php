<?php
    // ajouter_traitement_ lecteur.php
    require "connexion.php";
 
    $id = $_POST["id"];
    $nom= $_POST["nom"];
    $prenom = $_POST["prenom"];
	$telephone=  $_POST["telephone"];
 
    $sql = "INSERT INTO lecteur (id, nom, prenom,telephone)
            VALUES ('$id', '$nom', '$prenom','$telephone')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "lecteur ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>
