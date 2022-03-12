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
 $IDV = $_POST["idvarer"];
 $VN = $_POST["vareNavn"];
 $PRS = $_POST["pris"];
 $ATL = $_POST["antall"];

 $sql = "SELECT *
 from nettbutikk.varer";

$resultat = $kobling->query($sql);
//selve tabellen
echo "<table>"; // Starter tabellen
echo "<tr>"; // Lager en rad med overskrifter
echo "<th>VareID</th>";
echo "<th>Vare</th>";
echo "<th>Pris</th>";
echo "<th>Antall</th>";


//info i tabellen
while($rad = $resultat->fetch_assoc()) {
    $IDV= $rad["idvarer"];
    $VN= $rad["vareNavn"];
    $PRS = $rad["pris"];
    $ATL = $rad["antall"];
   
    echo "<tr>";
    echo "<td>$IDV</td>";
    echo "<td>$VN</td>";
    echo "<td>$PRS</td>";
    echo "<td>$ATL</td>";
   
    echo "</tr>";
   }
    echo "</table>"; // Avslutter tabellen

?>




