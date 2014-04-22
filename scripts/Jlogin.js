/* the login section *****/



 function loginUser()
{

var name = document.getElementById('username').value;
var pass = document.getElementById('password').value;
var pageView =false;

<<<<<<< HEAD
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
=======
$.ajax({
	url:'LogUser.php',
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
>>>>>>> fb88b2f49c59f10febcda2214ff54759507b8db9
			
} 
	
		
			


	