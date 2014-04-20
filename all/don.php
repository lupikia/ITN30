<?php

class Donation{

	session_start();

	private $cust_num;
	private $don_date;
	private $don_time;
	private $don_amount;

	function _construct(){

	//it value will be received by session
	
	
	if(!isset($_SESSSION['customer'])){
	
	//then we will generate a customer 
	//We also need to search in the database to fined the user
	 cust_num =;
	 
	 
	 }
	 else{
	 
	 
	 }
	 
	 $don_date=$_POST[''];
	 $don_time=$_POST[''];
	 $don_email=$_POST[''];
	 $don_amount=$_POST[''];
	 

	}
	
	
	function validate_data(){
	
	
	
	
	}
	function save_data(){
	
	
	
	}
	
	
	

}


?>