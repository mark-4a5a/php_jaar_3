<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Gebruikers</title>
    <link rel="stylesheet" type="text/css" href="gebruikers.css">
  </head>
  <body>
    <?php 
      require_once "gebruikers.php"; 
      $tomas = new NormalUser(' tomas', 'legend32');
      echo $tomas->getUsername();
      echo $tomas->getPassword();
      echo $tomas->changePassword('legend12', 'legend33');
      echo $tomas->getPassword();
      echo $tomas->changePassword('legend32', 'legend33');
      echo $tomas->getPassword();
      echo $tomas->doNormalUserStuff();

      echo "<br>";

      $anna = new SuperUser('anna', 'whatevah96');
      echo $anna->getUsername();
      echo $anna->getPassword();
      echo $anna->doSuperviserStuff();
      echo $anna->passwordCheck('dweewrernrgounrgonrniorgionroin');
      echo $anna->passwordCheck('whatevah96');
    ?>
  </body>
</html>