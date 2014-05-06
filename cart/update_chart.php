<?php



session_start();

if(!isset($_SESSION['busy'])){



echo "<div id='cart'>";

<<<<<<< HEAD

echo "Total Items : 0";
echo " <br/>Total Pricing (R):0" ;
echo "<br/><a href='../cart/review.php'>View Shopping basket</a>" ."</br>";
=======
echo "<a href='../transactions/review.php'> View Shopping cart (items) </a>" ."</br>";
echo "Items : 0"."-Total Pricing (R):0" ;

>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
echo "</div>";

}
else{

 
echo "<div id='cart'>";

<<<<<<< HEAD

echo "Total Items : ". $_SESSION['numItems'] ."</br>";
echo "Total Pricing (R):" .$_SESSION['totatl']."</br>" ;
echo "<a href='../cart/review.php'> View Shopping basket</a>" ."</br>";

echo "</div>";





 if(isset($_SESSION['$arrayProduct'])){
 $array_information=$_SESSION['$arrayProduct'] ;
 //this will automatically increment within the array
 
 $_SESSION['review'][ ] = array( 
								"quantity" => $array_information['Product_num'],
								 
								"name" =>$array_information['Product_name'],
								
							 
								);
								unset($_SESSION['$arrayProduct']);
								}
=======
echo "<a href='../transactions/review.php'> View Shopping cart (items) </a>" ."</br>";
echo "Items : ". $_SESSION['numItems'] ."</br>";
echo "Total Pricing (R):" .$_SESSION['totatl'] ;

echo "</div>";

$array_information=$_SESSION['$arrayProduct'] ;

/*$productDetails= array("total" => $_SESSION['totatl'],"order" => $_SESSION['numItems'] ,"path" => $array_information['image_path'],"number" => $itemdescription['sku'],"type" => $array_information['item_type'],"name" =>$array_information['item_name'],"desc" =>$array_information['item_description'],"price" =>$array_information['item_price']);
$_SESSION['review'] = $productDetails;*/

>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990
}





 



?>