

function don(){

var userName=document.getElementByName('name').value;
var userEmail=document.getElementByName('email').value;
var userAddress=document.getElementByName('adress').value;
var userCode=document.getElementByName('areaCode').value;
var terms document.getElementByName('accpted')
var userpost=document.getElementById('areaCode').value;

//test  to find if the term is been checked
if(){
	
	

	 $.ajax({
			url:'don.php',
			type:'post',
			data:{name:username,email:userEmail,address:userAddress,code:userCode},
			success:function(data){
			
			
			
			}


		});
	
	}


}