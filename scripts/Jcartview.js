function addCart2( ) {

 var numberOf= document.getElementById('quantity').value;
 

//
if(document.getElementById('quantity').value>1){
	alert("Product Quantity is " +numberOf);
	 $.ajax({
		url:'../cart/change_chart.php',
		type: 'post',
		data:{addnow:"add",numberitems:numberOf},
		success: function(data){
		$('#cart').html(data);

		}
			
			});
		
		}
		else{
		
		alert("Quantity must be greater than 1");
		}
}