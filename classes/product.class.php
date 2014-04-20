<?php

class get_music{

require"../host/host.php";
	private $genre;

	function get_music(){
	
$data = mysql_query("Select * from  Structure product_inventory where Product_name='rnb'")or die(mysql_error());
	
	while ($find = mysql_fetch_assoc($data)){
	
	
	}
	
	
	}
	


}




?>