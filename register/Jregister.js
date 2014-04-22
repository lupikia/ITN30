
function register_user(){


	var name_user=document.getElementById('name').value;
	var email_user=document.getElementById('email').value;
	var surname_user=document.getElementById('surname').value;
	var company_user=document.getElementById('company').value;
	var password_user =document.getElementById('confirm').value;
	var passwordc_user =document.getElementById('create').value;
	var goAhead=true;
	
	  if(password_user!=passwordc_user ){
		 
		 alert("Passwords do not match");
		 
		 }
		 else{
		 
		 goAhead = true;
		 }
			
	
	if(goAhead){
		$.ajax({
			url:'userRegistration.php',
			type:'post',
			data:{name:name_user,surname:surname_user,email:email_user,pass:password_user,company:company_user},
			success:function(data){
			//$('#v').html(data);
			
			
			
			if(data=="1"){
			document.getElementById('1').innerHTML="Please enter letters for name";
			 
			}
			
			
			if(data=="register"){
			
			document.location.href="../members_only/welcome.php";
		
			}
		
			
			
		
			
			
				}




		}); 
}

}