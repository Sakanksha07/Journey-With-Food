<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '766569464387-fu7k9d8q8kirhv7ciarei56gtsr37ug5.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'Nht9ANaamnZDYYkS6MXEX6yN'; //Google client secret
$redirectURL = 'http://localhost/sak/NSP%202nd%20yr/new.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>