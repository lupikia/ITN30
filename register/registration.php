<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	
<script src="../boot/jqury.min.js"></script>

<!--<link href="../boot/css/bootstrap.min.css" rel="stylesheet">
<link href="../boot/css/bootstrap.css" rel="stylesheet">

<script src="../boot/js/bootstrap.min.js"></script>

-->

<link href="../styling/style.css" rel="stylesheet">



 
 
<script src="Jregister.js" >
</script>

<script src="../login/jquery-1.9.1.js" >
</script>




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration</title>



</head>

<body>

 <div id="login" class="container-fluid">
  <div class="row">
  
			<table id="table_e" >

					<tr >
							<td >
							Name:<input type = "text" name="name" id=" name" /> 
							</td> 
							
							<td width="290px">
							<div id="1" class="errors"></div>
							</td>
					</tr>

					<tr>
								<td >
								Surname:<input type = "text" name="surname" id="surname" /> 
								</td>
								<td width="290px">
							<div id="2" class="errors" ></div>
							</td>
					</tr>
					
					<tr>
								<td >
								Company name:<input type = "text" name="company" id="company" /> 
								</td>
								<td width="290px">
							<div id="2" class="errors" ></div>
							</td>
					</tr>
					
					<tr>
							<td>
							E-mail:<input type = "text" name="email" id="email" /> 
							</td>
							<td width="290px">
							<div id="3" class="errors" ></div>
							</td>
					</tr>

					<tr>
							<td>
							Create password:<input type = "password" name="create" id="create" /> 
							</td>
							
					</tr>

					<tr>
							<td>
							Retype password:<input type = "password" name="confirm" id="confirm" /> 
							</td>
							<td>
							
							</td>

					</tr>
					<tr>
							<td>
							<input type = "button" name="send " value="Sign-up" onclick="register_user();" /> 
							</td>

					</tr>


			<table>
</div>
 </div>

</body>
</html>
