<?php

// controllers/homepage.php

require_once($_SERVER['DOCUMENT_ROOT'] . '/mvc-openclassrooms/blog/src/model.php');

function homepage() {



    $posts = getPosts();

    require($_SERVER['DOCUMENT_ROOT'] . '/mvc-openclassrooms/blog/templates/homepage.php');

}