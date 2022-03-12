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
 $FN = $_POST["fornavn"];
 $EN = $_POST["etternavn"];
 $PO = $_POST["passord"];
 $EP = $_POST["epost"];


 $sql = "SELECT *
 from nettbutikk.kunde";

$resultat = $kobling->query($sql);
//selve tabellen
echo "<table>"; // Starter tabellen
echo "<tr>"; // Lager en rad med overskrifter
echo "<th>Fornavn</th>";
echo "<th>Etternavn</th>";
echo "<th>Passord</th>";
echo "<th>e-post</th>";


//info i tabellen
while($rad = $resultat->fetch_assoc()) {
    $KID= $rad["idkunde"];
    $FN= $rad["fornavn"];
    $EN = $rad["etternavn"];
    $PO = $rad["passord"];
    $EP = $rad["epost"];
   
    echo "<tr>";
    echo "<td>$FN</td>";
    echo "<td>$EN</td>";
    echo "<td>$PO</td>";
    echo "<td>$EP</td>";
   
    echo "</tr>";
   }
    echo "</table>"; // Avslutter tabellen
?>


    


