<?php
  session_start();
  $name =  $_POST['name'] ;
  $email = $_POST['email'] ;
  $message = $_POST['message'] ;
  mail("nolimitzenekar@gmail.com",$email,$message,'From: nolimit@nolimitzenekar.hu');
  $mit=1;
  if ($mit==1) 
  {
    $cookie_name = "validate";
    $cookie_value = "true";
    setcookie($cookie_name, $cookie_value, time() + 30, "/");
  } 
  else {
    $cookie_name = "validate";
    $cookie_value = "false";
    setcookie($cookie_name, $cookie_value, time() + 30, "/");
}
header('Location:index.php');
?>
