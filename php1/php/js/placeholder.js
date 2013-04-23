function deleteCar(id){
	$.ajax({
		type:"POST",
		url:'bl/blDeleteCar.php',
		data:{'id':id},
		success: function(data){
			location.reload();
		}
	}); 
}