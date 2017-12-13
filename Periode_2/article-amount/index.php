<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Article Amount</title>
    <link rel="stylesheet" type="text/css" href="article-amount.css">
  </head>
  <body>
    <?php 
      require_once "article-amount.php"; 
      $a1 = new Article('A1');
      echo $a1->getArticleInfo();
      echo "<br>";
      $a2 = new Article('A2');
      echo $a2->getArticleInfo();
    ?>
  </body>
</html>