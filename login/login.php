<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
if($_SESSION['username'] == 'open' && $_SESSION['password'] == 'sesame'){
    header('Location:loggedIn.php');
}
?>
<form method="post">
    Username:<input type="text" name="username">
    <br>
    Password:<input type="password" name="password">
    <br>
    <input type="submit" name="Login">
</form>