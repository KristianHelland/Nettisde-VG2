<?php

    // Tilkoblingiformasjon
    $tjener = "127.0.0.1";
    $brukernavn = "root";
    $passord = "root";
    $database = "nettbutikk";

    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

    $kobling->set_charset("utf8");

    $FN = $_POST["fornavn"];
    $EN = $_POST["etternavn"];
    $EP = $_POST["epost"];
    $PO = $_POST["password"];

    $sql = "INSERT INTO nettbutikk.kunde (fornavn, etternavn, epost, passord)
    VALUES ('$FN', '$EN', '$EP', '$PO')";
    if($kobling->query($sql)) {
        echo "Account was made successfully";
        echo "<script>
            let cData = ['$FN', '$EN', '$EP', '$PO']
            localStorage['data'] = JSON.stringify(cData);
        </script>";
        echo "<a href='index.php'>Frontside</a>";
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
