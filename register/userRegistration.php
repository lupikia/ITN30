<?php

require "../classes/register.class.php";

  $user_name =$_POST['name'];
  $user_surname=$_POST['surname'];
  $user_company_name=$_POST['company'];
  $user_email=$_POST['email'];
  $user_password=$_POST['pass'];
  

$register = new register_user();
$boolean=$register ->validate_user_data( $user_name, $user_surname, $user_company_name, $user_email, $user_password);
 
if($boolean){

$register ->save_user_data( $user_name, $user_surname, $user_company_name, $user_email,$_POST['pass']);
}
else{

 
}

 

?>