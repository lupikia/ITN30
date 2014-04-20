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

require"../classes/login.class.php";
$success = new login();
$success ->logUser($user,$pass);

?>