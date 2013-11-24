<?php

ini_set('default_charset','utf-8');

$connect = mysql_connect("localhost","root","root");

if(!$connect) {
    die("Database connection error");
}
$sel_db = mysql_select_db("codename");
if(!$sel_db){
    die("sel db error");
}

mysql_query("SET NAMES 'utf8'", $connect);
/**$query = "SELECT * FROM users";
$result = mysql_query($query) or die('Gond van.');
**/
?>