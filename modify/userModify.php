<?php

<<<<<<< HEAD
require "../classes/recover.class.php";

$fixEmail = new User_pasword($_POST['email'],$_POST['']);
=======
<<<<<<< HEAD
<<<<<<< HEAD
require "../classes/recover.class.php";

$fixEmail = new User_pasword($_POST['email'],$_POST['']);
=======
=======
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
class User_pasword{

private $user_email;
private $request_type;
private $newPassword;

function _construc(){

	$user_email=$_POST['email'];
	$request_type=$_POST['type'];

//first of all we find what the user is requesting

	if($request_type=="recover"){
		find_email($user_email);

	}
	
	else if($request_type=="rest"){
	
		$newPassword=$_POST['newPassword'];
		password_rest($user_email,$newPassword);
	
	

	}
}


function password_recovery()
	{
	//this function will get the password and email it to the customer


	}

function password_rest()
	{


	}

function find_email($email)
	{

	//mysql statements to find the email in data base64_decode

	password_recovery();


	}





}

>>>>>>> fb88b2f49c59f10febcda2214ff54759507b8db9
<<<<<<< HEAD
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
=======
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990



?>