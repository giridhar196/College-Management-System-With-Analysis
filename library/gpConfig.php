<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '46631718690-ldgmr3gv1nk3uc6m8bukfbbpg02lm5ji.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'mofG8Qq-XIRd1osAg_5oRSpE'; //Google client secret
$redirectURL = 'http://library.ssmobiles.co.in/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('CMS');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>