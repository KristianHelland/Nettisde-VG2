<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> <!-- æøå -->
  <title>databasepanel</title>
  <link rel="stylesheet" type="text/CSS" href="../CSS/minstil.css">
</head>
<body>

<div class="grid-container">
  <div class="header">Kristian Helland</div>
  <div class="menu">
    <div class="dropdown">
      <button class="dropbtn">Fag</button>
        <div class="dropdown-content">
          <a href="../index.php">Forside</a>
          <a href="../HTML/produksjonoghistoriefortelling.html">Produksjon og Historiefortelling</a>
          <a href="../HTML/konseptutviklingogprogramering.html">Konseptutvikling og Programmering</a>
          <a href="../PHP/Teknologiforståelse.php">Teknologiforståelse</a>
        </div>
      </div> 
    </div>
    <div class="menu">
    <div class="dropdown">
     <button class="dropbtn">Prosjekter</button>
       <div class="dropdown-content">
       <a href="../HTML/konseptutviklingogprogramering.html">Videoer</a>
      </div>
    </div> 
  </div>
  <div class="hovedvindu">
   <?php 
    include 'database.php';
    include 'Oversikt2.php';
    ?>
  </div>
</div>
        
</body>

</html>