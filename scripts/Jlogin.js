/* the login section *****/



 function loginUser()
{

var name = document.getElementById('username').value;
var pass = document.getElementById('password').value;
var pageView =false;

		$.ajax({
			url:'../login/LogUser.php',
			type: 'post',
			data:{username:name,password:pass},
			success: function(data){
			$('#check').html(data);

		 
				if(data=="true"){
			
				 
			document.location.href="../members_only/member.php";
					}
					else{
					 
							document.getElementById('check').innerHTML="Enter correct credentials";
			
					}
			 
			  
				}	
				});
			
} 
	
		
			


	