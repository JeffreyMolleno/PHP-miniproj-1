<?php
include 'Model/Login/Login.class.php';

$for_login = new Login('users');

if (!empty($_POST['username']) && !empty($_POST['password'])) {
   $for_login->check_user($_POST['username'], $_POST['password']);
}

if ($_SESSION['user']) {
   echo "<script>window.location.href = 'Views/Pages/MainPage.php';</script>";
}


