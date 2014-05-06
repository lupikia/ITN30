
<?php
//this will be the parent class of all products



class process_transactions{
	
	session_start();

	private $trans_num;
	private $trans_date;
	private $trans_time;
	private $trans_Balance;
	private $product_num;
	 
	
	function _construct(){
	
	

	//here we will generate the transaction number
	  $trans_num		=;
	 
	 
	 
	 $trans_date	=$_POST['album'];
	 $trans_time	=$_POST['type'];
	 
	//here will get the tract number via sessions
	
	
	 //we get the value from the checkout 
	 $trans_Balance =$_SESSION[''];
	 
	 $product_num;


	}
	
	function save_data(){
	
	
	}


}


?>