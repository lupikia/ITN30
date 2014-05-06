
<?php 
require"../classes/product.class.php";
require ("../host/host.php");
		
		
$getProduct=$_GET['prod_id'];

$prod_get= new get_music($getProduct);

 

if(isset($getProduct) && $getProduct=='rnb')
{
 $storage=$prod_get->getAll();

}

 

if(isset($getProduct)&& $getProduct=='Rock and Roll')
{

 $storage=$prod_get->getGenre($getProduct);
}
if(isset($getProduct)&& $getProduct=='R n B')
{

 $storage=$prod_get->getGenre($getProduct);
}
if(isset($getProduct)&& $getProduct=='Country Music')
{

 $storage=$prod_get->getGenre($getProduct);
}
if(isset($getProduct)&& $getProduct=='Surf Rock and Psychedelic')
{

 $storage=$prod_get->getGenre($getProduct);
}

if(isset($getProduct)&& $getProduct=='Funk rock')
{

 $storage=$prod_get->getGenre($getProduct);
}

if(isset($getProduct)&& $getProduct=='all')
{
 
$storage=$prod_get->getGenre($getProduct);
}


$x=0;
$names=array();
$names [0]="none";
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Accordion - Default functionality</title>

 <script src="../scripts/forAll.js"></script>
 
  <script src="../scripts/Jupdatecart.js"></script>
   <script src="../scripts/Jcartview.js"></script>
  
<script src="../vendor/jquery-1.10.2.js"></script>

<script src="../vendor/viewQuantity.js"></script>

<script src="../vendor/jquery-ui.js"></script>

<link rel="stylesheet" href="../scripts/css/myStyle.css">


<script>
$(function() {
$( "#accordion" ).accordion();
});
</script>
</head>
<body>
 
 <?php
	require "../cart/update_chart.php";
	require "../reuse_code/logo.php";
 	require "../reuse_code/firstIlogin.php";
	 require "../reuse_code/toplinks.php";
	?>
		 
	 
	 
 
 
<div id=accordion>
<?php

 //here we will displaying all the genre by category
	$num=1;
if	($getProduct!='all'){
//here we onlty display the specific genre

		while($view=mysql_fetch_assoc($storage))
		{
$noRepeat ="false";
	 
	 
			
				
				 
			  
					 //here we are getting all the albums of the individual artsist
	 
				 $getAlbum=$prod_get ->getAlbulms($view['Product_artist']);
					
					 //this is to make sure we dont repeat any displayed albums
					 foreach( $names as $r){
				 
							if($r != $view['Product_artist']){
							
							$noRepeat = " true";
						 
							}
							else{
							$noRepeat =" false";
							 
							 
							}
					 	
					 } $names [$num]  = $view['Product_artist'];
					 
					 /**/
					// echo "the counr is ". count($names);
					 $num++;
					 if(preg_match('/true/',$noRepeat)){
					 
					 	echo "	
				<table>
				<tr>
				<td><img src='the drifters/driffter_preview.jpg'></td>
				<td id=knowHistory><h4> Know $view[Product_artist]</h4> <p id=history> $view[Product_Des]</p> </td>
				</tr>
				</table>
				<div id=accordioninside>
				<h3> Albulm releases</h3>";
					 
					 
					 while ($viewAlbum = mysql_fetch_assoc($getAlbum )  ){
							// echo "first start" . count($viewAlbum);
								
								echo "<br/> <h5>". $viewAlbum['Product_name']. " R ". $viewAlbum['Prices']. 
		" </h5><input type=button value=Add To Basket class=show-popup   onclick=addCart($viewAlbum[Product_num]);  /> " . $viewAlbum['Product_Des'];
							 
							}
							
						 echo"</div>
				
						<div>


						<p id=history  >$view[Product_artist]</p>
						</div><br/>";
					 }
					 else{
					 
					  
					 }
					
					
				
						 

		}

 }
 else{

 
 
 } 

 echo "   </div>
	<div class=overlay-bg>
    <div class=overlay-content>
	 
    </div> 
	
	
    </div>";
	
	
/*<table>
	
	<tr>
	<th> Genre <div id=genre></div></th>
	</tr>
	<tr>
	<th> <div id=prodDesc></div></th>	
	<th> Quantity 
	<select>
	
	<option>10</option>
	<option>25</option>
	<option>45</option>
	
	</select>
	
	</th>
	</tr>
	
	<tr>
	<th> <div id=sku> </div> </th>	<th><input type=button  class=close-btn value=Close > </th>
	</tr>
	</table>*/
?>
</div>
</body>
</html>