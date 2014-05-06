<?php


 
class register_user{

 
  
private $user_name;
private $user_surname;
private $user_company_name;
private $user_email;
private $user_password;

function register_user( ){

//this constructor will receive parameter and initialize them 


  


}

function validate_user_data($name,$surname,$company,$email,$password){
		//validating data with regular expressions
		$errors="";
		$error_type=0;
		//this will carry the validity if data would be registered
		$failed=true;

			if(!preg_match('/[a-zA-Z]/',$name) ){
				
				echo 1;
				$errors="Please enter only letters for your name <br/>";
				$failed=false;
				exit();
			}
			

			 if(!preg_match('/[a-zA-Z]/',$surname) ){
				
				echo 2;
				$errors=$errors + "Please enter only letters for your surname <br/>";
				$failed=false;
				exit();
			}

			 if(!preg_match('/[a-zA-Z]/',$company) ){
				echo 3;
				$failed=false;
			$errors=$errors + "Please enter only letters for your Company <br/>";
			exit();
			}
			/*
			
				if(!preg_match($email,'/ [a-zA-Z]/') ){

					$failed=false;
				$errors=$errors + "Please enter a valid email address <br/>";
				}
				

			if(!preg_match($password,'/ [a-zA-Z]/') ){

			$errors=$errors + "Please enter only letters for your surname <br/>";

			}
			*/
			
	

	return $failed;






}

function save_user_data($name,$surname,$company,$email,$password){

 echo "the password is". $password;

	 
	//now we are only to save user registration data into the data base
	require("../host/host.php");

	$reg=mysql_query("INSERT INTO user_registration (name,surname,companyname,email,password) values('$name','$surname','$company','$email','$password') ") or die(mysql_error());


	$sinup=mysql_query("INSERT INTO loguser values('$name','$password') ") or die("No table found");

	
			session_start();
			$_SESSION['username']=$name ; 
			$_SESSION['usersurname']=$surname;
			
			//redirecting the user after registration is successful
			header("location: ");

	




}



}
 

?>