<?php
//class Login_user {
//public function login_access(){
/*



/*removing spaces at the end of the input by user*/
$user =$_POST['username'];
$pass=$_POST['password'];

$pass = trim($pass);
$username = trim($user);

/*adding slashes to prevent mysql injections8*/

$pass = addslashes($pass);
$user = addslashes($user);

/*making each letter small
 even though registration required caps*/
$pass = strtolower($pass);
$user = strtolower($user);

//variable to grant access
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
=======
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990

require"../classes/login.class.php";
$success = new login();
$success ->logUser($user,$pass);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
=======
$found=false;
require("../host/host.php");
	
$login=mysql_query("select * FROM user_registration") or die("No table found");

while ($find = mysql_fetch_assoc($login)){

	if($find['name']==$user && $find['password'] ==$pass )
		{
		
		session_start();
		$_SESSION['username']=$find['name'];
		$_SESSION['id'] = $find['user_id'];
		echo "true";
		exit();
		
		}
	
	
		}


echo "false";

>>>>>>> fb88b2f49c59f10febcda2214ff54759507b8db9
<<<<<<< HEAD
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
=======
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990

?>