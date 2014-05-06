<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../scripts/css/myStyle.css" rel="stylesheet">
<link href="../scripts/css/bootstrap.css" rel="stylesheet" >

<script src="../scripts/Jregister.js" ></script>

<script src="../scripts/jquery-1.9.1.js" ></script>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Checkout Our 60s </title>
</head>

<body>
<?php
require"../reuse_code/toplinks.php";
?>

<div class="container-fluid">

		<div id="center">
		
  	 	<form>
		  <table id=checkout  >
            <tr>
              <td><label>Name</label></td>
              <td><input type="text" name="name" id="name"/></td>
            </tr>
            <tr>
              <td><label>Surname</label></td>
              <td><input type="text" name="name" id="name"/></td>
            </tr>
            <tr>
              <td><label>Company</label></td>
              <td><input type="text" name="name" id="name"/></td>
            </tr>
            <tr>
              <td><label>Address</label></td>
              <td><input type="text" name="name" id="name"/></td>
            </tr>
            <tr>
              <td>City</td>
              <td><input type="text" name="name" id="name"/></td> 
			  <td>
			  <select>
			  <option>Province</option>
			  <option>Gauteng</option>
			  <option>Cape Town</option>
			  <option>North West</option>
			  <option>Kwa Zulu Natal</option>
			   <option></option>
			   
			  </select></td>
            </tr>
            <tr>
              <td><label>Zip code</label></td>
              <td><input type="text" name="name" id="name"/></td>
            </tr>
            <tr>
              <td><label>Telephone</label></td>
              <td><input type="text" name="name" id="name"/></td>
            </tr>
            <tr>
              <td><label>Fax</label></td>
              <td><input type="text" name="name" id="name"/></td>
            </tr>
            <tr>
   
              <td><label>Ship to another address</label></td><td><input type="radio" name="ship" id="ship"/ value="another"></td>
            </tr>
			<tr>
			<td><input type="button" name="" class="btn-success" value="done"/></td>
			</tr>
          </table>
		</br>
			  <table id=checkout  >
            <tr>
              <td><label>Deliver information</label></td> 
            </tr>
          
          </table>
		
		  <table id=checkout  >
            <tr>
              <td><label>Deliver information</label></td> 
            </tr>
          
          </table>
		
		  <table id=checkout  >
            <tr>
              <td><label>Payment information</label></td> 
            </tr>
          
          </table>
		    <table id=checkout  >
            <tr>
              <td><label>Order review</label></td> 
            </tr>
          
          </table>
		
		</form>

		
  </div>	
		
	

</div>

</body>
</html>
