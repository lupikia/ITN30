 <?
 //session_start();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BricksIT review order</title>
 <script src="../scripts/forAll.js"></script>
 
  <script src="../scripts/Jupdatecart.js"></script>
   <script src="../scripts/Jcartview.js"></script>
  
<script src="../vendor/jquery-1.10.2.js"></script>

<script src="../vendor/viewQuantity.js"></script>

<script src="../vendor/jquery-ui.js"></script>

<link rel="stylesheet" href="../scripts/css/myStyle.css">


 <link rel="shortcut icon" href="../images/logo/favion.PNG" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../styling/style.css"/>
<style type="text/css">
 hr{
 
 width:15em;
 }
</style>
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
		foreach($_SESSION['review'] as $index){
			 
			 
		echo "<h5>Product description </h5> <br/>".$index['name'];
		echo "<br/>The quantity :" .$index['quantity']."<br/>";
	 
		
		
		}
		?> 
      </div>     
</body>
</html>
