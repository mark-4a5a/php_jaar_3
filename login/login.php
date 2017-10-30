<?php
$_SESSION['username'] = '';
$_SESSION['password'] = '';

session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if($_SESSION['username'] == 'open' && $_SESSION['password'] == 'sesame'){
    echo 'You are logged in';
    echo '<button>Logout</button>';
} else {
?>
<form method="post">
    Username:<input type="text" name="username">
    <br>
    Password:<input type="password" name="password">
    <br>
    <input type="submit" name="Login">
</form>
<?php
}
?>  