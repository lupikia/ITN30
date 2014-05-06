<?php
$username="root";
$password="";
$host  ="localhost";
<<<<<<< HEAD
$Database ="my60";
=======
<<<<<<< HEAD
$Database ="my60s";
=======
$Database ="itn";
>>>>>>> fb88b2f49c59f10febcda2214ff54759507b8db9
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
mysql_connect($host,$username,$password)or die("No such user");
mysql_select_db($Database) or die ("No Database found");

?>