<?php
session_start();
require_once( 'fb/src/Facebook/autoload.php' );


 $fb = new Facebook\Facebook([
  'app_id' => '786591984775232',
  'app_secret' => '4a7ef4e394860f155056c8012bf29e21',
  'default_graph_version' => 'v2.5',
  //'default_access_token' => '{access-token}', // optional
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



try {
  // Get the Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
    
  $response = $fb->get('/me?fields=id,name,email,first_name,last_name,gender', $accessToken->getValue());

 //print_r($response);

  
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'ERROR: Graph ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'ERROR: validation fails ' . $e->getMessage();
  exit;
}
$me = $response->getGraphUser();
//print_r($me);
//echo "Full Name: ".$me->getProperty('name')."<br>";
//echo "First Name: ".$me->getProperty('first_name')."<br>";
//echo "Last Name: ".$me->getProperty('last_name')."<br>";
//echo "Email: ".$me->getProperty('email');
//echo "Facebook ID: <a href='https://www.facebook.com/".$me->getProperty('id')."' target='_blank'>".$me->getProperty('id')."</a>";

$id=$me->getProperty('id');
$firstname=$me->getProperty('first_name');
$lastname=$me->getProperty('last_name');
$email=$me->getProperty('email');
$gender=$me->getProperty('gender');



require 'hconn.php';


$query="insert into fbuser (id,fname,lname,email,gender) values('$id','$firstname','$lastname','$email','$gender') where id<>$id"; ;
$r=  mysql_query($query);
if($r>0){
   header("location: http://storecurrent.com/?msg=Registraion Sucessfull");
}
else {
    echo "ERROR".mysql_error();
}
mysql_close();


?>