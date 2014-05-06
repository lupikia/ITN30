<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
=======
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
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

 
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
=======
class register_user{


private $user_name;
private $user_surname;
private $user_company_name;
private $user_email;
private $user_password;

function _construct( ){

//this constructor will receive parameter and initialize them 

  $user_name =$_POST['name'];
  $user_surname=$_POST['surname'];
  $user_company_name=$$_POST['email'];
  $user_email=$$_POST['company'];
  $user_password=$$_POST['pass'];
  
  validate_user_data($user_name,$user_surname,$user_company_name,$user_email,$user_password);
}

function validate_user_data($name,$surname,$company,$email,$password){
//validating data with regular expressions
$errors="";

//this will carry the validity if data would be registered
$failed=true;

	if(!preg_match($name,'/ [a-zA-Z]/') ){


	$errors="Please enter only letters for your name <br/>";
	
		$failed=false;
	}

	if(!preg_match($surname,'/ [a-zA-Z]/') ){

	$errors=$errors + "Please enter only letters for your surname <br/>";
		$failed=false;
	}

	if(!preg_match($company,'/ [a-zA-Z]/') ){

		$failed=false;
	$errors=$errors + "Please enter only letters for your Company <br/>";
	}

	if(!preg_match($email,'/ [a-zA-Z]/') ){

		$failed=false;
	$errors=$errors + "Please enter a valid email address <br/>";
	}

/*if(!preg_match($password,'/ [a-zA-Z]/') ){

$errors=$errors + "Please enter only letters for your surname <br/>"

}*/

	if($failed){

	echo $errors;
	}
	else{
	save_user_data($failed);

	}






}

function save_user_data($validated){



	if($validated){
	//now we are only to save user registration data into the data base
	require("../host/host.php");
	$reg=mysql_query("INSERT INTO user_registration values('','$user_name','$user_surname',$user_company_name,'$user_email','$user_password') ") or die("No table found");


	//$sinup=mysql_query("INSERT INTO loguser values('','$user_name','$user_pass') ") or die("No table found");

	 
			session_start();
			$_SESSION['username']=$user_name ; 
			$_SESSION['usersurname']=$user_surname;
			
			//redirecting the user after registration is successful
			header("location: ");

	}




}



}

>>>>>>> fb88b2f49c59f10febcda2214ff54759507b8db9
<<<<<<< HEAD
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
=======
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990

?>