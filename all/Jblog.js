

function post_blog(){

var username=document.getElementById('name').value;
var userpost=document.getElementById('comment').value;

	$.ajax({
		url:'blog.php',
		type:'post',
		data:{name:username,posting:userpost},
		success:function(data){
		
		
		
		}


	});


}