<?php

if ($_SESSION['user'] === '' || isset($_GET['logout'])) {
    echo "<script>window.location.href = '/phptest/index.php';</script>";
}
 
