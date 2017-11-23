<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Math Operations</title>
    <link rel="stylesheet" type="text/css" href="dice.css">
  </head>
  <body>
    <?php 
      require_once "dice.php"; 
      $diceNormal = new DiceNormal();
      echo "<img src='images/" . $diceNormal->roll() . "' class='img'/>";
      $diceInverted = new DiceInverted();
      echo "<img src='images/" . $diceInverted->roll() . "' class='img'/>";
      $dicePerspective = new DicePerspective();
      echo "<img src='images/" . $dicePerspective->roll() . "' class='img'/>";
    ?>
  </body>
</html>