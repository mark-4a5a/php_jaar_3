<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Snipit</title>
    <link rel="stylesheet" type="text/css" href="snipit.css">
  </head>
  <body>
    <?php 
      require_once "snipit.php"; 
      $warwick = new Warwick;
      echo $warwick->getHTML();

      $zyra = new Zyra;
      echo $zyra->getHTML();

      $veigar = new Veigar;
      echo $veigar->getHTML();

      $veigar->walk();
      echo "<br>";
      $veigar->jump();
      echo "<br>";
      $zyra->swim();
      echo "<br>";
    ?>
  </body>
</html>