
<?php
//this will be the parent class of all products



class produce_invoice{
	
	session_start();

	private $inv_number;
	private $inv_date;
	private $inv_time;
	private $trans_num;
	
	function _construct(){
	
	

	//here we will generate the invoice number
	 $inv_number 	=$_POST['artist'];
	 
	 
	 
	 $inv_date		=$_POST['album'];
	 $inv_time		=$_POST['type'];
	 
	//here will get the tract number via sessions
	
	 $trans_num		=$_SESSION['transactionNumber'];
	 
	 


	}
	
	function save_data(){
	
	
	}


}


?>