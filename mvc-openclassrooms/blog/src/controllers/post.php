<?php
// controllers/post.php

require_once($_SERVER['DOCUMENT_ROOT'] . '/mvc-openclassrooms/blog/src/model.php');

function post(string $identifier)
{

    $post = getPost($identifier);
    $comments = getComments($identifier);

    require($_SERVER['DOCUMENT_ROOT'] . '/mvc-openclassrooms/blog/templates/post.php');


}