<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shell Game</title>
        <link rel="stylesheet" type="text/css" href="shell-game.css">
    </head>
    <body>
        <?php 
            require_once "class/class.ball.php";
            require_once "class/class.cup.php";
            require_once "class/class.player.php";
            require_once "view/view.php";

            $player = new Player('Mark');
            echo $player->show();
            $cup = new Cup();
            echo $cup->show();
            $ball = new Ball('blue');
            echo $ball->show();  
        ?>
    </body>
</html>