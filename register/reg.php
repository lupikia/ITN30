<?php

require("../host/host.php");

	$reg=mysql_query("INSERT INTO user_registration values('','$name','$surname',$company,'$email','$password') ") or die(mysql_error());


	//$sinup=mysql_query("INSERT INTO loguser values('','$user_name','$user_pass') ") or die("No table found");

	 
			session_start();
			$_SESSION['username']=$name ; 
			$_SESSION['usersurname']=$surname;
			
			//redirecting the user after registration is successful
			
			?>