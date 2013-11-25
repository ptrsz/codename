<?php

session_start();
include_once("../resources/database/dbconnect.php");


$userid = (isset($_POST['userid']) ? $_POST['userid'] : $_SESSION['userid']);
$password = (isset($_POST['password']) ? $_POST['password'] : $_SESSION['password']);



if( !isset($userid)){
    ?>
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title> Please Log In for Access </title>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        </head>
        <body>
            <h1> Login Required </h1>
            <p>
                <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
                email: <input type="text" name="userid" size="8" /><br />
                password: <input type="password" name="password" SIZE="8" /><br />
                <input type="submit" value="Log in" />
                </form>
            </p>
        </body>
    </html>
    <?php
    exit;
}

$_SESSION['userid'] = $userid;
$_SESSION['password'] = $password;

if(!validUser($userid,$password)){
    unset($_SESSION['userid']);
    unset($_SESSION['password']);
    ?>
    <html>
        Access Denied.
        <a href="accesscontrol.php">Login page</a>
    </html>
    <?php
    exit;
}




