<?php
echo '<style>
        body {
            background-image: url("https://i.pinimg.com/originals/81/6d/fd/816dfd710806e20aa40a7cd8c76d2e2d.jpg");
            font-family: Arial;
            color: white;
            margin-top: 6%;
        }
    </style>';

echo '<center>';

echo '<h1>Tafel van 5 </h1><br>';
for ($a = 0; $a <= 10; $a++){
    echo '5 x ' . $a . ' = ' . $a * 5 . '<br>';
}
echo '<br>';

$x = 0;
while ($x <= 10) {
    echo '5 x ' . $x . ' = ' . $x * 5 . '<br>';
    $x++;
}

echo '</center>';
?>