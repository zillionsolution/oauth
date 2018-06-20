<?php

// required autoload file
require '../vendor/autoload.php';
require '../src/oAuth/Instagram.php';

// initializing auth library
$app_key = '';
$app_secret = '';
$callback = '';

// initializing library
$instagram = new oAuth\Instagram($app_key, $app_secret, $callback);

// redirect to login page
echo '<a href="' . $instagram->getLoginUrl() . '">Login with Instagram</a>';
