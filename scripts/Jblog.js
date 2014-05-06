

function post_blog(){


var username=document.getElementById('name').value;
var userpost=document.getElementById('comment').value;

alert(userpost);
	$.ajax({
		url:'../all/blogging.php',
		type:'post',
		data:{name:username,posting:userpost},
		success:function(data){
		$('#badComment').html(data);
		
		
		}


	});


}
function retrive_post(){
 

	$.ajax({
		url:'../all/blogging.php',
		type:'post',
		data:{getBlog:'retrive'},
		success:function(data){
		$('#viewpost').html(data);
		
		
		}


	});


}
retrive_post.interval=setInterval(retrive_post,5000);