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
    $password != "" &&
    strlen($password) >= 8 &&
    preg_match('/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z !"#$%&\'()*+,-.\/:;<=>?@\[\\\\\]^_`{|}~]{8,255}/', $password)) {

    //

    $sqlQuery = "SELECT pseudo, password FROM user WHERE pseudo = ?";

    $checkUser = $bdd->prepare($sqlQuery);
    $checkUser->execute([$pseudo]);
    $resultQuery = $checkUser->fetchAll();

    $sqlQuery = "SELECT pseudo FROM user WHERE pseudo = ?";

    $checkUser = $bdd->prepare($sqlQuery);
    $checkUser->execute([$pseudo]);
    $resultQuery = $checkUser->fetchAll();


    if($resultQuery == []) {
        $addUser = $bdd->prepare("INSERT INTO user(pseudo, password) VALUES (?, ?)");
        $addUser->execute([$pseudo, password_hash($password, PASSWORD_DEFAULT)]);
        $resulMSG = "Success, utilisateur ajouté !";

    } else {
        $resulMSG = "Utilisateur existant !";

    }

} else {

    $resulMSG = "Remplissez tout les champs <br> MDP : longueur minimum de 8 caractères et 1 majuscule requis";

}

echo $resulMSG;



