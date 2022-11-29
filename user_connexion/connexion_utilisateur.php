<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="formulaire">

    <a href="../index.php">Retour à l'accueil</a>

    <form action="login.php" method="post">

        <h2>Connexion et contrôle utilisateur</h2>

        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo"><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" name="valider" value="VALIDATION">

        <a href="new_utilisateur.php">Formulaire Inscription</a>

    </form>

</div>

</body>
</html>
