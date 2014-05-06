<?php

class login{

function logUser($user,$pass){

$found=false;
require("../host/host.php");
	
$login=mysql_query("select * FROM  loguser") or die("No table found");

while ($find = mysql_fetch_assoc($login)){

	if($find['name']==$user && $find['password'] ==$pass )
		{
		
			session_start();
			$_SESSION['username']=$find['name'];
			$_SESSION['id'] = $find['password'];
			echo "true";
			exit();
			
		}
	
	
		}


echo "false";


}




}



?>