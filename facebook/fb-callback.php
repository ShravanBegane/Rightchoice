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

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

// Logged in
echo '<h3>Access Token</h3>';
echo '<pre>';
print_r($accessToken->getValue());
echo '</pre>';


// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
echo '<h3>Metadata</h3>';
echo '<pre>';
print_r($tokenMetadata);
echo '</pre>';


// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId('417282905741982'); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();

if (! $accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
    exit;
  }

  echo '<h3>Long-lived</h3>';
  echo '<pre>';
	print_r($accessToken->getValue());
	echo '</pre>';
}

echo $_SESSION['fb_access_token'] = (string) $accessToken;




try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name,email', $accessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();
          
$_SESSION['FULLNAME'] = $user['name'];
$_SESSION['EMAIL'] =  $user['email'];


echo 'Name: ' . $_SESSION['FULLNAME'].'<br/>';
echo 'Email: ' . $_SESSION['EMAIL'].'<br/>';
header("Location: ../copy/signup.php");
// OR
// echo 'Name: ' . $user->getName();


?>