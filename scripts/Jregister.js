
function register_user(){


				var name_user=document.getElementById('name').value;
				var email_user=document.getElementById('email').value;
				var surname_user=document.getElementById('surname').value;
				var company_user=document.getElementById('company').value;
				var password_user =document.getElementById('confirm').value;
				var passwordc_user =document.getElementById('create').value;
				
				
				
			 
	var goAhead=false;
	if(password_user != passwordc_user ){

	alert("Passwords do not match");
		 
		 
		
		 }
		 else{
		 
	  goAhead = true;
		 }
		 
		 
			
	
	if(goAhead)
	{
 
	
		$.ajax({
			url:'userRegistration.php',
			type:'post',
			data:{name:name_user,surname:surname_user,email:email_user,pass:passwordc_user,company:company_user},
			success:function(data)
			{
			$('#v').html(data);
			
		 
			
		if(data==1){
		$('#1').html("Please enter only letters for your name");
		
		}
		
		else{
			$('#1').html("<img src=../images/right.png>");
		
		
		}
		if(data==2){
			$('#2').html("Please enter only letters for your surname ");
		}
			else{
			$('#2').html("<img src=../images/right.png>");
		
			 
		}
		
		
		if(data==3){
		$('#3').html("Please enter only letters for your Company ");
		}
				else{
			$('#3').html("<img src=../images/right.png>");
		
			 
		}
			
		
			
			
				}




		});
	}
	else{
		alert("please try again later");
		}

}