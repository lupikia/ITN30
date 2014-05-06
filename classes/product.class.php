<?php

class get_music{

<<<<<<< HEAD
<<<<<<< HEAD

	private $genre;

	function get_music($type)
	{

		$genre=$type;
	}
		
			function getAll(){
			
			$data = mysql_query("Select * from product_inventory")or die(mysql_error());
		
		 
		
			
			return $data;
		}
			
			
			
			function getGenre($genre){
			
			$data = mysql_query("Select * from product_inventory where Product_type='$genre'")or die(mysql_error());
		
			 
			
			
			
			
			return $data;
			}
			
			function getAlbulms($artistName){
			
			$data = mysql_query("Select * from product_inventory where Product_artist='$artistName'")or die(mysql_error());
			
			 
			
			return  $data ;
	
			}
	
	
	
	
	
	
}


=======
=======
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
require"../host/host.php";
	private $genre;

	function get_music(){
	
$data = mysql_query("Select * from  Structure product_inventory where Product_name='rnb'")or die(mysql_error());
	
	while ($find = mysql_fetch_assoc($data)){
	
	
	}
	
	
	}
	


}
<<<<<<< HEAD
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
=======
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990




?>