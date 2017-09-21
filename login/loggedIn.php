<?php
session_start();
if($_SESSION['username'] == 'open' && $_SESSION['password'] == 'sesame'){
    
} else {
    header('Location:login.php');
}
?>
You are logged in