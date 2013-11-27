<?php
/**
 * Created by JetBrains PhpStorm.
 * User: szombat
 * Date: 26/11/13
 * Time: 10:16
 * To change this template use File | Settings | File Templates.
 */

require_once("../resources/libraries/facebook.php");
require_once("../resources/libraries/base_facebook.php");

$facebook = new Facebook(array(
   'appId' => '606539356048599',
   'secret' => '15bb7b8dcf2165be44b553051cc3d1c7',
));

$user = $facebook->getUser();

if($user)
    try{
        $user_profile = $facebook->api('/me');

    } catch (FacebookApiException $e){
        error_log($e);
        $e->getMessage();
        $user = null;
    }
if(!$user){
    $logInUrl = $facebook->getLoginUrl();

} else $logOutUrl = $facebook->getLogoutUrl();
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Nincs." />
    <meta name="keywords" content="Azse." />
    <meta name="author" content="Vannak." />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>codename.</title>
</head>
<body>
    <?php if($user): ?>
        <a href="<?php echo $logOutUrl; ?>">Log Out</a>
        <div id="welcome">
            <h2>Szevasz, <?php echo $user_profile['name'] ?></h2>
            <p>Acces granted.</p>
        </div>
    <?php else: ?>
        <a href="<?php echo $logInUrl; ?>">Log In</a>

    <?php endif ?>


</body>