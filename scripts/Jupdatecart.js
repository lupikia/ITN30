  
function addCart(sku) {


 
	 $.ajax({
		url:'../cart/items.php',
		type: 'post',
		data:{skuNO:sku},
		success: function(data){
<<<<<<< HEAD
		$('.overlay-content').html(data);
=======
		$('#confirmCart').html(data);
>>>>>>> d574e4c8834c7336adb7485f3e445f85eede7990

 
		}
			
			});
		 
		
}

