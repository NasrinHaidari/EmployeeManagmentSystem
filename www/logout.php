<?php
setcookie('userName',$_COOKIE['userName'],time() -3600);
setcookie('password',$_COOKIE['password'],time() -3600);

ob_clean();
session_start();

unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['type']);

unset($_SESSION['select']);
unset($_SESSION['insert']);
unset($_SESSION['delete']);
unset($_SESSION['updata']);
unset($_SESSION['key']);


session_destroy();
header("location: ../login.php");
exit();

?>