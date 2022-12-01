
<?php

$racine = $_SERVER['DOCUMENT_ROOT'] . "/";

require_once($racine . 'mvc/app/app.php');

$nbAffiche = rand(1,50)

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MODEL VIEW CONTROLLER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>MVC - Model View Controler</h1>


<div class="cards">

    <h2>Nombre d'affiche : <?= $nbAffiche ?></h2>
    <?php

   for($i=1; $i<= $nbAffiche; $i++) {

       $type = categorie();
       $url = "https://api.lorem.space/image/" . $type . "?w=150&h=220";

       echo "<div class='type'>$type<img class='card' src='$url'></div>";
       

    }


    ?>

</div>


</body>
</html>