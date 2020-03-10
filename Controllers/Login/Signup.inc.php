<?php

include '../../Model/Login/Login.class.php';

$for_login = new Login('users');

if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {

    $check_status = $for_login->signup($_POST['username'], $_POST['password']);
   
    if ($check_status) {
       echo "success";
    }
 }