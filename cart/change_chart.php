<?php


session_start();
if(isset($_POST['addnow'])){

if($_POST['addnow']=="add"){
	 
		if(!isset($_SESSION['numItems'])){
		
		$_SESSION['numItems']=$_POST['numberitems'];
		 
		}
		else{
		$_SESSION['numItems']+=$_POST['numberitems'];
		}
	}

	/*$_SESSION['itemName']=$_POST['item'] ;*/
	
	$quantity= $_POST['numberitems'];
	 
	$_SESSION['itemPrice']= $_SESSION['price'] *$quantity;
 
	
		
		if(!isset($_SESSION['totatl'])){
		$_SESSION['totatl']=$_SESSION['itemPrice'];
		 
		}
		else{
		$_SESSION['totatl'] = $_SESSION['totatl']+ $_SESSION['itemPrice'] ;
		}
		
		
	    $_SESSION['busy']=1;
	
	echo "<a href=../transactions/review.php> View Shopping cart (items) </a>" ."</br>";
	echo "Items : ".$_SESSION['numItems']."</br>";
	echo	"Total Pricing (R):". $_SESSION['totatl'] ;

	 
	




}
else{


}
?>