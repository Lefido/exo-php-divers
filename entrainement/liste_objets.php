<a href="../index.php" class="accueil">Retour à l'accueil</a>

<div class="objet">

    <a href="/entrainement/index.php?telephone=show">Téléphones</a>

    <div class="element">

    <?php
        if(isset($_GET["telephone"])){
            if($_GET["telephone"] = "show"){
                include("./listing.php");
                $tab = phone("Téléphone");
                foreach ($tab as $phoneNumber) {
                    echo "<button>$phoneNumber</button>";
                }
            }
        }
    ?>

    </div>

    <a href="/entrainement/index.php?montre=show">Montres connectées</a>

    <div class="element">

    <?php
    if(isset($_GET["montre"])){
        if($_GET["montre"] = "show"){
            include("./listing.php");
            $listing = phone("Montre connectée");
            foreach ($listing as $element) {
                echo "<button>$element</button>";
            }
        }
    }
    ?>

    </div>

    <a href="/entrainement/index.php?bluetooth=show">Ecouteurs bluetooth</a>

    <div class="element">

    <?php
    if(isset($_GET["bluetooth"])){
        if($_GET["bluetooth"] = "show"){
            include("./listing.php");
            $listing = phone("Ecouteur bluetooth");
            foreach ($listing as $element) {
                echo "<button>$element</button>";
            }
        }
    }
    ?>

    </div>

    <a href="/entrainement/index.php?filaire=show">Ecouteurs Filaires</a>

    <div class="element">

    <?php
    if(isset($_GET["filaire"])){
        if($_GET["filaire"] = "show"){
            include("./listing.php");
            $listing = phone("Ecouteur filaire");
            foreach ($listing as $element) {
                echo "<button>$element</button>";
            }
        }
    }
    ?>

    </div>

    <a href="/entrainement/index.php?android=show">Box android</a>

    <div class="element">

    <?php
    if(isset($_GET["android"])){
        if($_GET["android"] = "show"){
            include("./listing.php");
            $listing = phone("Box Android");
            foreach ($listing as $element) {
                echo "<button>$element</button>";
            }
        }
    }
    ?>

    </div>


</div>

</body>
</html>
