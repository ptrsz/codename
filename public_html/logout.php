<?php
unset($_SESSION['userid']);
unset($_SESSION['password']);
if(!isset($_SESSION['userid'])){
   include_once("struct/header.php");
    ?>
    <h2>Sikeres kijelentkezes.</h2>
    <?php
   include_once("struct/footer.php");
}
?>