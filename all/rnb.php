<?php

include("../cart/update_chart.php");
 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Our 60s RNB</title>

<script src="../scripts/jquery-1.9.1.js"></script>

<script src="../scripts/Jupdatecart.js"></script>

<script src="../scripts/jcartview.js"></script>

<link href="../scripts/css/myStyle.css" rel="stylesheet">
<style type="text/css">
<!--
#cart {
pading:5px;
	position:absolute;
	width:30empx;
	 
	z-index:1;
	left: 700px;
	top: 231px;
	 
}
#confirmCart{
border:solid 1px #999999;
 
left: 700px;
width:13em;
padding:5px;
position:absolute;
top: 300px;

}
 
-->
</style>
</head>

<body>
 
 
	<?php
	require "../reuse_code/logo.php";
		require "../reuse_code/toplinks.php";
	?>
	<br/><h1>OUR 60'S RNB</h1>
	 
	 <div id="displayGenre">
	 
	 <div id="getMusic">
	 
	<input type="button" name="add" id ="add" value="Add to cart" onclick="addCart(11);" >
	 
	 
	 
	 </div>
	 
	 
 
  
 <div id="confirmCart"></div>
 
</body>
</html>
