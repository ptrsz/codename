<html>
    <?php include("struct/header.php")?>
    <section class="register">
        <h1>codename . login</h1>
        <form method="post" action="index.php">
            <div class="reg_section personal_info">
                <input type="text" name="name" value="" placeholder="name">
            </div>
            <div class="reg_section password">
                <h3>Your Password</h3>
                <input type="password" name="password" value="" placeholder="password">
            </div>
            <p class="submit"><input type="submit" name="login" value="log in"></p>
        </form>
    </section>

</html>