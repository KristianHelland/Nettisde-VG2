<?php
// TODO Fix to work for the create thing
// Tilkoblingiformasjon
$tjener = "127.0.0.1";
$brukernavn = "root";
$passord = "root";
$database = "shop";

$kobling = new mysqli($tjener,$brukernavn,$passord,$database);

$kobling->set_charset("utf8");

$EM = $_POST["email"];
$PAS = $_POST["password"];

$sql = "select * FROM user where email = '$EM' and password = '$PAS'";

$resultat = $kobling->query($sql);

while ($rad = $resultat->fetch_assoc()) {
    $BID = $rad["idbruker"];
    $FN = $rad["fornavn"];
    $EN = $rad["etternavn"];
    $EP = $rad["epost"];
    $PO = $rad["password"];


    echo "<script>data=[
        data [$BID, $FN, $EN, $EP, $PO];
localStorage["data"] = JSON.stringify(data);  
    ]</script>";
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!isset($REM)) {
        echo "Your e-mail or password is wrong.";
    } else {
        echo "<script> window.location.href = '/index.php'; </script>";
    }
}