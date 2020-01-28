<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
include_once 'src/Facebook/FacebookSession.php';
include_once 'src/Facebook/FacebookRedirectLoginHelper.php';
include_once 'src/Facebook/FacebookRequest.php';
include_once 'src/Facebook/FacebookResponse.php';
include_once 'src/Facebook/FacebookSDKException.php';
include_once 'src/Facebook/GraphObject.php';
include_once 'src/Facebook/FacebookRequestException.php';
include_once 'src/Facebook/FacebookAuthorizationException.php';






$fb = new Facebook\Facebook([
  'app_id' => '417282905741982',
  'app_secret' => 'ec0a60328e270585d7b273b0082c6cc0',
  'default_graph_version' => 'v3.2',
  ]);

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name', '{access-token}');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();

echo 'Name: ' . $user['name'];
// OR
// echo 'Name: ' . $user->getName();
    




?>