<?php

 
session_start();


$itemSku=$_POST['skuNO'];

require("../host/host.php");




$itemdescription =mysql_query("select * From product_inventory where  Product_num='$itemSku'") or die("No table found");

$itemdescription = mysql_fetch_assoc($itemdescription);

echo "<h3> ". $itemdescription['Product_artist'] ."(".  $itemdescription['Product_name']  . ")</h3> " ;
echo "<h3> Product description</h3>";
echo "<p> " .$itemdescription['Product_Des'] ."</p> ";
echo  "<p> Price:R" .$itemdescription['Product_balance'] ."</p> ";
echo "<label>Quality:</label><input type='text'  id='quantity'  />" ;

$_SESSION['item']=$itemdescription['Product_artist'];
$_SESSION['price']=$itemdescription['Product_balance'];

echo "<input type=button name=add value=Add onclick=addCart2(" . "$itemdescription[Product_num]" ."); />";


$_SESSION['$arrayProduct']  = $itemdescription;
 
?>

		
	