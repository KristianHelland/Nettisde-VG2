    <?php
if(isset($_POST["leggtil"]))
{

 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "min_database";

 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
 die("Noe gikk galt: " . $kobling->connect_error);
}
 // Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
 // Lagrer skjemafeltene i enklere navn
 $AID = $_POST["ArtikkelID"];
 $Kilde = $_POST["Kilde"];
 $ABeskrivelse = $_POST["Beskrivelse"];
 $sql = "INSERT INTO artikkel (ArtikkelID, Kilde, Beskrivelse) VALUES ('$AID',
'$Kilde', '$ABeskrivelse')";

}
?>




