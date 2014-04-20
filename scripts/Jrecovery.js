
  
 function sendData(){
	 
		 
	var email = document.getElementById('email').value;
	var newRad = document.getElementById('restNew').value;
	var recoverRad = document.getElementById('recovery').value;
	var newCreate = document.getElementById('new').value;
	var confirmCreate = document.getElementById('confirm').value;
	
	var typeRequest="none";
	
	if(newRad){
		typeRequest="rest";
		}
		else if(recoverRad){
			
			typeRequest="recover";
			}
	
	$.ajax({
		url:'userModify.php',
		type: 'post',
		data:{userEmail:email,typeRequest:recoverRad,newCreate:pass},
		success: function(data){
		/*$('#check').html(data);
	
		
		 */
		  
			}	
			});
		 
		 }
	 
 /*$(document).ready(function()
		{

$("#restNew").click(function ()
		{
$("div").css("background-color","red");
 
		 
		 
		 
		}

	); 

});*/
 