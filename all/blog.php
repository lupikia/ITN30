<?php

class blog{
private $content;
private $username;
 



function _construct(){

//here we need to use session to find out if the user_error is login or not
  $content =$_POST['name'];
  
  $username=$_POST['content'];

check_contetnt($name,$content);
}

function check_contetnt($name,$content){

//this is where we will check whether the content does not contain vulgar
}

function save_contetnt(){


}


}



?>