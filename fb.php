<?php session_start();
require_once( 'fb/src/Facebook/autoload.php' );
 
 $fb = new Facebook\Facebook([
  'app_id' => '786591984775232',
  'app_secret' => '4a7ef4e394860f155056c8012bf29e21',
  'default_graph_version' => 'v2.5',
  //'default_access_token' => '{access-token}', // optional
]);
 
$helper = $fb->getRedirectLoginHelper();
 
$permissions = ['email']; // Optional permissions for more permission you need to send your application for review
$loginUrl = $helper->getLoginUrl('http://storecurrent.com/page/test2.php', $permissions);
header("location: ".$loginUrl);
 
?>