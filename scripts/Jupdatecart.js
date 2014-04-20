  
function addCart(sku) {


 
	 $.ajax({
		url:'../cart/items.php',
		type: 'post',
		data:{skuNO:sku},
		success: function(data){
		$('#confirmCart').html(data);

 
		}
			
			});
		 
		
}

