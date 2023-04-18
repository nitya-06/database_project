<?php
ini_set('display_errors', 1);
error_reporting(-1);
session_start();
 unset($_SESSION['name']);
 unset($_SESSION['email']);
 unset($_SESSION['person']);
 unset($_SESSION['password']);
 session_destroy();
session_destroy();
$_SESSION['logged_in'] = false;

header("Location: login.php")
?>