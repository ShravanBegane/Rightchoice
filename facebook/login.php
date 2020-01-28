<?php 
session_start();
include_once 'vendor/autoload.php';
include_once 'src/Facebook/Facebook.php';
$fb = new Facebook\Facebook([
  'app_id' => '417282905741982', // Replace {app-id} with your app id
  'app_secret' => 'ec0a60328e270585d7b273b0082c6cc0',
  'default_graph_version' => 'v3.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$_SESSION['loginUrl'] = $helper->getLoginUrl('https://internal.my360crm.com/facebook/fb-callback.php', $permissions);
echo $_SESSION['loginUrl'];

echo '<a href="' . htmlspecialchars($_SESSION['loginUrl']) . '">Log in with Facebook!</a>';

?>