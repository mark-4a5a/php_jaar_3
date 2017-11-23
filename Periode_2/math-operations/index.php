<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Math Operations</title>
    <link rel="stylesheet" type="text/css" href="math.css">
  </head>
  <body>
    <?php 
      require_once "math.php"; 
      $add = new Add(array(3, 6,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1));
      echo $add->addSum();
      echo "<br>";
      $minus = new Minus(array(10, 5,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1));
      echo $minus->minusSum();
      echo "<br>";
      $multiply = new Multiply(array(6, 8,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1));
      echo $multiply->multiplySum();
      echo "<br>";
    ?>
  </body>
</html>