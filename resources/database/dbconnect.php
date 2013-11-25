<?php
$db_user = "root";
$db_password = "root";
$db_host = "localhost";

function dbconnect($db_table){
    global $db_user,$db_pass,$db_host;
    $connect = mysql_connect("localhost","root","root");
    if(!$connect) {
        die("Database connection error");
    }
    $sel_db = mysql_select_db($db_table);
    if(!$sel_db){
        die("sel db error");
    }
    mysql_query("SET NAMES 'utf8'", $connect);
    return $connect;

}
function validUser($userid,$password){
    $userid = mysql_real_escape_string($userid);
    $password = mysql_real_escape_string($password);
    $connect = dbconnect("codename");

    $ask = "SELECT * FROM users WHERE email='".$userid."' AND password='".$password."'";
    $query = mysql_query($ask,$connect);

    if(!$query){
        echo "error during check";
    }
    if (mysql_num_rows($query) == 1) {
        return true;
    } else return false;
}

function loggenIn(){

}
?>