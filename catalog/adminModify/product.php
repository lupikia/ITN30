
<?php 
require"../../classes/product.class.php";
require ("../../host/host.php");
		
		
$getProduct=$_GET['prod_id'];

$prod_get= new get_music($getProduct);

 

if(isset($getProduct) && $getProduct=='rnb')
{
 $storage=$prod_get->getAll();

}

 

if(isset($getProduct)&& $getProduct=='rock')
{

 $storage=$prod_get->getGenre($getProduct);
}

if(isset($getProduct)&& $getProduct=='all')
{
 
$storage=$prod_get->getGenre($getProduct);
}




?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Accordion - Default functionality</title>

 <script src="../../scripts/forAll.js"></script>
<script src="../../vendor/jquery-1.10.2.js"></script>
<script src="../../vendor/jquery-ui.js"></script>
<link rel="stylesheet" href="../../scripts/css/myStyle.css">


<script>
$(function() {
$( "#accordion" ).accordion();
});
</script>
</head>
<body>
 
 <?php
	require "../../cart/update_chart.php";
	require "../../reuse_code/logo.php";
 	require "../../reuse_code/firstIlogin.php";
	 require "../../reuse_code/adminlinks.php";
	?>
		 
	 
	 
 
 
<div id=accordion>
<?php
	
if	($getProduct!='all'){
//here we onlty display the specific genre
		while($view=mysql_fetch_assoc($storage))
		{

				
	 
				echo "	
				<table>
				<tr>
				<td><img src='../../catalog/the drifters/driffter_preview.jpg'></td>
				<td id=knowHistory><h4> Know your Legends</h4> <p id=history> $view[Product_Des]</p> </td>
				</tr>
				</table>
				<div id=accordioninside>
			
				<h3> Albulm releases</h3>
					<input type=button name=edit value=Edit>
				</div>
				
						<div>


						<p id=history > The $view[Product_artist] <h3>Click to edit</h3></p>
						</div>";

		}

 }
 else{
 //here we will displaying all the genre by category
 
 
 }
 
   

?> </div>
 
</body>
</html>