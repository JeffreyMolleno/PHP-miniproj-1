<?php

if(isset($_GET['logout'])){
    $_SESSION['user'] = '';
}

if ($_SESSION['user'] === '') {
    echo "<script>window.location.href = '  /phptest/index.php';</script>";
}
 
