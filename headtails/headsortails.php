<?php
$result = mt_rand(1,4);
echo '<head>';
if($result == 1){
    echo '<title>Head</title><link rel="icon" type="image/png" href="favicon-32x32-head.png" sizes="32x32" />';
}elseif($result == 2){
    echo '<title>Tails</title><link rel="icon" type="image/png" href="favicon-32x32-tails.png" sizes="32x32" />';
} else {
    echo '<title>Error</title><link rel="icon" type="image/png" href="favicon-32x32-error.png" sizes="32x32" />';
}
echo '<style>
    body {
        font-family: Arial;
    }
    </style></head>
    <center>';

if($result === 1){
    echo '<h1>Head!</h1>';
}elseif($result === 2){
    echo '<h1>Tails!</h1>';
} else {
    echo '<h1>Error</h1>';
}

echo '<br>';

switch($result){
    case 1:
        echo '<img src="head.png">';
        break;
    case 2:
        echo '<img src="tails.png">'; 
        break;
    default:
        echo '<img src="error.png">';
        break;
}
echo '</center>';
?>
