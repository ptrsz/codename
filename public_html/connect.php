    <?php include("struct/header.php")?>
    <?php
        require("../resources/facebook/facebook.php");
        $facebook = new Facebook(array(
            'appId' => '606539356048599',
            'secret' => '15bb7b8dcf2165be44b553051cc3d1c7',
        ));
        $user = $facebook->getUser();

        if($user) {
            try{
                $user_profile = $facebook->api('/me');
            } catch (FacebookApiException $e) {
                error_log($e);
                $user = null;
            }
        }

        if($user) {
            $logoutUrl = $facebook->getLogoutUrl();
        } else {
            $loginUrl = $facebook->getLoginUrl();
            $statusUrl = $facebook->getLoginStatusUrl();
        }
    ?>
<html>
    <body>
    <h1>php-sdk</h1>

    <?php if ($user): ?>
        <a href="<?php echo $logoutUrl; ?>">Logout</a>
    <?php else: ?>
        <div>
            Check the login status using OAuth 2.0 handled by the PHP SDK:
            <a href="<?php echo $statusUrl; ?>">Check the login status</a>
        </div>
        <div>
            Login using OAuth 2.0 handled by the PHP SDK:
            <a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
        </div>
    <?php endif ?>

    <h3>PHP Session</h3>
    <pre><?php print_r($_SESSION); ?></pre>

    <?php if ($user): ?>
        <h3>You</h3>
        <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

        <h3>Your User Object (/me)</h3>
        <pre><?php print_r($user_profile); ?></pre>
    <?php else: ?>
        <strong><em>You are not Connected.</em></strong>
    <?php endif ?>

    <h3>Public profile of Naitik</h3>
    <img src="https://graph.facebook.com/naitik/picture">
    <?php echo $naitik['name']; ?>
    </body>

    <?php include("struct/footer.php")?>
</html>