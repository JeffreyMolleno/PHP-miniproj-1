<?php

include '../../Model/Login/Login.class.php';

$for_login = new Login('users');

if (isset($_POST['username']) && isset($_POST['password'])) {

   $check_status = $for_login->check_user($_POST['username'], $_POST['password']);

   if ($check_status && $_SESSION['user']) {
      echo "success";
   }
}
