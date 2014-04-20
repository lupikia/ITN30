<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
<link href="../scripts/boot/css/bootstrap.min.css" rel="stylesheet">
<script src="../scripts/Jpassword.js" ></script>

<script src="../scripts/Jrecovery.js" ></script>

<script src="../scripts/Jsearch.js" ></script>

<script src="../scripts/jquery-1.9.1.js" ></script>

 <script src="../scripts/boot/jquery.min.js"></script>
 <script src="../scripts/boot/js/bootstrap.min.js"></script>

<style type="text/css" >
body{
 }
 #hiddenRow{
 background-color:#999999;
 display:none;
 }
 #tableRecovery{
 
 width:40em;}
 
 
 
</style>


<title>Find 60s</title>
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-xs-5"  >
		 
		 <form>
			  <table id="tableRecovery">
				<tr>
				
				<td><label>Artist</label></td><td><input type="text" name="artist" id="artist"/></td>
				</tr>
				
				<tr>
				<td><label>Album name</label></td>
				<td><input type="text" name="album" id="album" value="" />
				</td>
				</tr>
				
				<tr>
				<td><label>Year release</label></td> 
				<td><select name="year">
				<option value="">-</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
				<option value="">4</option>
				<option value="">5</option>
				</select>
				</td>
				</tr>
				
			 <tr>
				<td><label>Format type</label></td> 
				<td><select name="format">
				<option value="0">-</option>
				<option value="Vinyl">LP Vinyl</option>
				<option value="CD">CD</option>
				<option value="Cassette">Cassette</option>
				</select>
				</td>
				</tr>
				<tr>
				<td><input type="button" class="btn-info" value="Search" onclick="find_item();" /></td>
				</tr>
				
			  </table>
		  </form>
	  </div>
	</div>



</div>

 

</body>


</html>
