<?php 

require_once 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '233300654015196', // Replace {app-id} with your app id
  'app_secret' => '80c5f7ab1646244a97d073c1c140e966',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://dojocars.com/php/funciones/test_login_facebook.php', $permissions);


if ($idioma == "es")

{
echo '<center><a href="' . htmlspecialchars($loginUrl) . '" class="boton_generico2">Accede con tu cuenta Facebook!</a></center>';
}

else {
echo '<center><a href="' . htmlspecialchars($loginUrl) . '" class="boton_generico2">Login with Facebook!</a></center>';

}




?>
