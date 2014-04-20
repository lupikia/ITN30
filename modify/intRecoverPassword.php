<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
<script src="../scripts/Jpassword.js" ></script>

<script src="../scripts/Jrecovery.js" ></script>

<script src="../scripts/jquery-1.9.1.js" ></script>
<link href="../scripts/css/myStyle.css" rel="stylesheet">
<link href="../scripts/css/bootstrap.css" rel="stylesheet" >

<style type="text/css" >
 
 
 
 
</style>


<title>Recovery Password</title>
</head>

<body>
<div class="container">
	 
		 
		 <form>
			  <table id="table_e">
				<tr>
				
				<td><label>Email</label></td><td><input type="text" name="email" id="email"/></td>
				 
				<td><label>Rest password</label>
				<input type="radio" name="rest" id="restNew" value="rest" />
				</td>
				<td><label>Recover password</label><input type="radio" name="rest" id="recovery" value="recover" /></td>
				</tr>
				
				
				
				<tr id="hiddenRow">
				<td><label>Enter new password</label></td><td><input type="password" name="new" id="email"/></td>
				</tr>
			 
				<tr id="hiddenRow">
				<td><label>Retype password</label></td> <td><input type="password" name="confirm" id="email"/></td>
				</tr>
				
				<tr>
				<td><input type="button" class="btn-info" value="send" onclick="sendData();" /></td>
				</tr>
				
			  </table>
		  </form>
	   



</div>

<div id="hiddenRow">asdf
</div>

</body>


</html>
