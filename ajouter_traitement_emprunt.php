<?php
    // ajouter_traitement_ emprunt.php
    require "connexion.php";
 
    $id = $_POST["id"];
    $id_livre = $_POST["id_livre"];
    $id_lecteur = $_POST["id_lecteur"];
	$date_emprunt=  $_POST["date_emprunt"];
 
    $sql = "INSERT INTO emprunt (id, id_livre, id_lecteur,date_emprunt)
            VALUES ('$id', '$id_livre', '$id_lecteur','$date_emprunt')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "emprunt ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>