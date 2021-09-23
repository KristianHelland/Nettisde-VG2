<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8"> <!-- æøå -->
  <title>Teknologiforståelse</title>
  <link rel="stylesheet" type="text/CSS" href="../CSS/minstil.css">
</head>
<body>
  <div class="grid-container">
    <div class="header">Teknologiforståelse</div>
      <div class="menu">
        <div class="dropdown">
         <button class="dropbtn">Fag</button>
           <div class="dropdown-content">
           <a href="../index.php">Forside</a>
            <a href="../HTML/produksjonoghistoriefortelling.html">Produksjon og Historiefortelling</a>
            <a href="../HTML/konseptutviklingogprogramering.html">Konseptutvikling og Programering</a>
            <a href="../PHP/databasepanel.php">Databasepanel</a>
          </div>
        </div> 
      </div>
    <div class="hovedvindu">
    <a href="https://asvgit.com/kyoto/sql.php">Graf av tempraturmåling</a>
    <?php 
    include '../PHP/vaer.php';
    ?>      
    </div>
  </div>
</body>
</html>