<?php

$servername = 'localhost';
$bddUsername = 'root';
$bddPassword = '';

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

$bdd = new PDO("mysql:host=$servername;dbname=account", $bddUsername, $bddPassword);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(
    $pseudo != "" &&
    $password != "") {
    $sqlQuery = "SELECT pseudo, password FROM user WHERE pseudo = ?";
    $checkUser = $bdd->prepare($sqlQuery);
    $checkUser->execute([$pseudo]);
    $resultQuery = $checkUser->fetchAll();

    if (count($resultQuery) == 0) {

        $resulMSG = "! Erreur, identifiant ou mot de passe";

    } else {

        $passwordHash =  $resultQuery[0][1];

        if (password_verify($password,$passwordHash)) {
            $resulMSG = "Connexion réussie <br>";
        } else {

            $resulMSG = "Mot de passe erroné <br>";
        }

    }

} else {

    $resulMSG = "Remplissez tout les champs <br> MDP : longueur minimum de 8 caractères et 1 majuscule requis";

}


echo $resulMSG;



