<?php


function categorie()
{

    $cat = [
        'movie',
        'game',
        'album',
        'book'
    ];

//    var_dump($cat);

    return $cat[rand(0, count($cat) -1)];
}

