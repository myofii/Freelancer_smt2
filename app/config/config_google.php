<?php
require_once 'vendor/autoload.php';
  
session_start();
  
$client = new Google_Client();
$client->setAuthConfigFile('client_secret.json');
$client->setRedirectUri("http://localhost/Freelancer/app/config/config_google.php");
$client->setScopes(array(
    "https://www.googleapis.com/auth/userinfo.email",
    "https://www.googleapis.com/auth/userinfo.profile",
    "https://www.googleapis.com/auth/plus.me"
));
  
if (!isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  
  try {
      // profile
      $plus = new Google_Service_Plus($client);
      $_SESSION['access_profile'] = $plus->people->get("me");
      $_SESSION['user'] = $_SESSION['access_profile']['displayName'];
      $_SESSION['id'] = $_SESSION['access_profile']['id'];
  } catch (\Exception $e) {
      echo $e->__toString();
 
      $_SESSION['access_token'] = "";
      die;
  }
  
  header('Location: ../../');
}
?>