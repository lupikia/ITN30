<?php



session_start();

if(!isset($_SESSION['busy'])){



echo "<div id='cart'>";

echo "<a href='../transactions/review.php'> View Shopping cart (items) </a>" ."</br>";
echo "Items : 0"."-Total Pricing (R):0" ;

echo "</div>";

}
else{

 
echo "<div id='cart'>";

echo "<a href='../transactions/review.php'> View Shopping cart (items) </a>" ."</br>";
echo "Items : ". $_SESSION['numItems'] ."</br>";
echo "Total Pricing (R):" .$_SESSION['totatl'] ;

echo "</div>";

$array_information=$_SESSION['$arrayProduct'] ;

/*$productDetails= array("total" => $_SESSION['totatl'],"order" => $_SESSION['numItems'] ,"path" => $array_information['image_path'],"number" => $itemdescription['sku'],"type" => $array_information['item_type'],"name" =>$array_information['item_name'],"desc" =>$array_information['item_description'],"price" =>$array_information['item_price']);
$_SESSION['review'] = $productDetails;*/

}





 



?>