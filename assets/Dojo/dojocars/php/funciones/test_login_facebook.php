<?php 


	include ("conexion.php");
	require_once '../../Facebook/autoload.php';

	$fb = new Facebook\Facebook([
  'app_id' => '233300654015196', // Replace {app-id} with your app id
  'app_secret' => '80c5f7ab1646244a97d073c1c140e966',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();
if (isset($_GET['state'])) {
  $helper->getPersistentDataHandler()->set('state', $_GET['state']);
}

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

$responce = $fb->get('/me?fields=name,id,email',$accessToken);

$user = $responce->getGraphuser();
echo "<br><br>Name: ".$user['name']."<br>";
echo "Email: ".$user['email']."<br>";
echo "id: ".$user['id']."<br>";

$name = $user['name'];

$email = $user['email'];;

$id = $user['id'];

header("Location: subir_inscribirse.php?name=$name&email=$email&id=$id");


?> 