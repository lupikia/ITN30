<?php
require "../host/host.php";
require "../classes/blog.class.php";
$blog_it = new blog();

	if(isset($_POST['posting']))
	{
		$goodCheck=$blog_it->check_contetnt($_POST['name'],$_POST['posting']);
		if($goodCheck)
			{
		
		
		
			$blog_it->save_contetnt($_POST['name'],$_POST['posting']);
				echo "Saved Blog";
			}
			else{
			
			
			
			echo "Your message is out of line";
			}
	}
	
	if(isset($_POST['getBlog'])){
	
			$viewBlog=$blog_it->getBlog();
		while($display=mysql_fetch_assoc($viewBlog)){
		
		echo "($display[time]) <p id=head>$display[Blogger_name]</p>";
		echo "<p id=> $display[Blog_comment]<br/>  </p>";
		}
	}


 
?>