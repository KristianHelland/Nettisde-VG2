
<?php

 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "nettbutikk";

 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
 die("Noe gikk galt: " . $kobling->connect_error);
}
 // Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
 // Lagrer skjemafeltene i enklere navn

 $IDO = $_POST["idordre"];
 $SUM = $_POST["sum"];


 $sql = "SELECT * from nettbutikk.ordre";
 
 if($kobling->query($sql)) {
 echo "Spørringen $sql ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error).";
 }

 $resultat = $kobling->query($sql);
//selve tabellen
echo "<table>"; // Starter tabellen
echo "<tr>"; // Lager en rad med overskrifter
echo "<th>OrdreID</th>";
echo "<th>Dato</th>";
echo "<th>Sum</th>";
echo "<th>KundeID</th>";
echo "<th>Postnummer</th>";


//info i tabellen
while($rad = $resultat->fetch_assoc()) {
    $IDO= $rad["idordre"];
    $D= $rad["dato"];
    $SUM = $rad["sum"];
    $KID = $rad["kunde_idkunde"];
    $PNR = $rad["poststed_postNr"];
   
    echo "<tr>";
    echo "<td>$IDO</td>";
    echo "<td>$D</td>";
    echo "<td>$SUM</td>";
    echo "<td>$KID</td>";
    echo "<td>$PNR</td>";
   
    echo "</tr>";
   }
    echo "</table>"; // Avslutter tabellen

?>