<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>codename.reg</title>
    <link rel="stylesheet" href="css/register.css">

</head>

<body>
<div class="container">
    <section class="register">
        <h1>codename . reg</h1>
        <form method="post" action="signup.php">
            <div class="reg_section personal_info">
                <h3>Info</h3>
                <input type="text" name="username" value="" placeholder="name">
                <input type="text" name="email" value="" placeholder="age">
                <input type="text" name="email" value="" placeholder="gender">
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