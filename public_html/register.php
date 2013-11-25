<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>codename.reg</title>
    <link rel="stylesheet" href="css/register.css">

</head>

<?php
    include_once("../resources/database/dbconnect.php");
    include_once("../resources/classes/User.php");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];


    $user = new User($firstname,$lastname,$email,$age,$gender,$pass);

    mysql_query("INSERT INTO users (firstname,lastname,email,age,gender,password) VALUES ('alma','körte','nincs','nemkell');",$connect);
    mysql_close($connect);
    header($_SERVER['PHP_SELF']);
?>

<body>
<div class="container">
    <section class="register">
        <h1>codename . reg</h1>
        <form method="post" action="signup.php">
            <div class="reg_section personal_info">
                <h3>Info</h3>
                <input type="text" name="firstname" value="" placeholder="firstname">
                <input type="text" name="lastname" value="" placeholder="lastnametname">
                <input type="text" name="email" value="" placeholder="email">
                <input type="text" name="age" value="" placeholder="age">
                <input type="text" name="gender" value="" placeholder="gender">
            </div>
            <div class="reg_section password">
                <h3>Your Password</h3>
                <input type="password" name="password" value="" placeholder="password">
            </div>
            <p class="submit"><input type="submit" name="commit" value="sign up"></p>
        </form>
    </section>
</div>

</body>
</html>