<?php
    session_start();
    $_SESSION['user'] = '';
    include 'Controllers/Login/Login.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel='stylesheet' href='Views/Includes/style.inc.css'>
    
    <? include 'Views/Components/Links/Links.inc.php'; ?>

    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Php Test</title>

</head>

<body>
    <div class="login-container">
        <form name="login-form" action="#" method="post">
            <div class="form-group">
                <label for="username-input">UserName</label>
                <input type="text" class="form-control" id="login-user-name" name="username">
            </div>

            <div class="form-group">
                <lable for="password-input">Password</lable>
                <input type="password" class="form-control" id="login-password" name="password"> 
            </div>

            <button class="btn btn-primary" type="submit" name="login">Login</button>
        </form>
    </div>
</body>

</html>
