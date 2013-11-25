<?php include("../../resources/error_functions.php") ?>
<div id="footer">
    <h3>
        Lenne mit vedeni lenne jogvedelem.
    </h3>
    if($user->loggedIn()){
        <a href="logout.php">Logout</a>
    } else
    <a href="login.php">Login</a>
</div>