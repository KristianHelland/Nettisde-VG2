<?php

    // Tilkoblingiformasjon
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "nettbutikk";

    // Opprette en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
    // Sjekk om koblingen virker
    if ($kobling->connect_error) {
    die("Noe gikk galt: " . $kobling->connect_error);
    } // Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");

    $sql = "SELECT * FROM nettbutikk.varer";

    $resultat = $kobling->query($sql);

    while ($rad = $resultat->fetch_assoc()) {
        $VN = $rad["vareNavn"];
        $PRS = $rad["pris"];
        $ATL = $rad["antall"];
        $IMG = $rad["bilde"];

        echo "<div class='card'>";
            echo "<img class='card-img' src='$IMG' alt='U fakked up man'>";
                echo "<div class='card-interface'>";
                echo "<div class='prod-info'>";
                    echo "<h3 >$VN</h3>";
                    echo "<p>$PRS kr</p>";
                    echo "<p>$ATL på lager</p>";
                echo "</div>";
            echo "<button class='buy-button'><i class='material-icons'>shopping_cart</i></button>";
                echo "</div>";
        echo "</div>";
    }
?>