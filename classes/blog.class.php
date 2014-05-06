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

$vadility=true;
//this is where we will check whether the content does not contain vulgar
/*if(preg_match('/["fucker|Fucker|shit|Shit"]/',$content))
			{
				$vadility=false; 
			}
			not working
			 */
			
			return $vadility;
}

	function save_contetnt($name,$content){
//$reg=mysql_query("INSERT INTO user_registration (name,surname,companyname,email,password) values('$name','$surname','$company','$email','$password') ") or die(mysql_error());

	$write=	mysql_query("INSERT INTO blogtb (Blogger_name,Blog_comment) values('$name','$content')" ) or die("failed to save blog");

	}
	function getBlog()
	{	
		 $data = mysql_query("Select * from blogtb") or die("no table");
	
	return $data ;
	}


}



?>