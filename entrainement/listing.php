
<?php

    function phone($type) {
        $phones = [];
        $nb = rand(1, 20);
     for ($i = 1; $i <=$nb; $i++ ){

         $phones[] = $type . " " . marque() . " " . $i;

     }

     return $phones;

    }

    function marque() {

        $marques = [
            "Samsung",
            "Sony",
            "Xiaomi",
            "Pocco",
            "Apple",
            "Huawai",
            "ZTE",
            "LG",
            "Wiko",
            "Crosscall",
            "Alcatel",
            "Emporia"];

        return $marques[rand(1, count($marques)-1)];


    }


