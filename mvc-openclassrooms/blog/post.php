<?php
// post.php

require('src/model.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $identifier = $_GET['id'];
} else {
    echo 'Erreur : aucun identifiant de billet envoyé';

    die;
}

$post = getPost($identifier);
$comments = getComments($identifier);

require($_SERVER['DOCUMENT_ROOT'] . '/mvc-openclassrooms/blog/templates/post.php');