<?php
session_start();

$_SESSION[];

session_destroy();

setcookie(PHP_SESSION_ID(),"", time() -3500,"/");

header("Location: login.php");
exit();

?>