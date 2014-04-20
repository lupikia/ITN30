
function search(){

var type = document.getElementById('section').value;
var bookdata =document.getElementById('name_value').value;
 
 //need to get variables for the search for music
	$.ajax({
			url:'findMusic.php',
			type:'post',
			data:{:type,bookvalue:bookdata},
			success:function(data){
			$('#search').html(data);
			
			
			}
	
	
	}) 

}