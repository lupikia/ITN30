<?php

class User_pasword{

private $user_email;
private $request_type;
private $newPassword;

require "../host/host.php";
function User_pasword($email,$type){

	$user_email=$email;
	$request_type=$type;

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
	$findEmail = mysql_query("Select from  user_registration where email='$email' ") or die(mysql_error());
	$rows=mysql_num_rows($findEmail);
	if($row!=0){
	
	echo "fine";
		password_recovery();
	}
	else{
	
	
	
	}
 


	}





}




?>