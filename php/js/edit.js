function getUser(id){
	$.ajax({
		type:"POST",
		url:'bl/blCustomer.php',
		data:{'tipo':4, 'id':id},
		success: function(data){
			$("#first").val(data[0].first);
			$("#last").val(data[0].last);
			$("#email").val(data[0].email);
		}
	});
}

function editInfo(){
	console.log("hola")
	var first = $("#first").val();
	var last = $("#last").val();
	var email = $("#email").val();
	$.ajax({
		type:"POST",
		url:'bl/blCustomer.php',
		data:{'tipo':5, 'first':first, 'last':last, 'email':email},
		success: function(data){
			if(data=="error"){
				alert("Fill all inputs");
			}else{
				location.reload();
			}
		}
	});
}

function getAddress(){
	$.ajax({
		type:"POST",
		url:'bl/blAddress.php',
		data:{'tipo':4},
		success: function(data){
			for (var i=0;i<data.length;i++)
			{
				$("#select_add").append("<option value="+data[i].id+">"+data[i].street+" "+data[i].street2+"</option>");
			}
				$("#street").val(data[0].street);
				$("#street2").val(data[0].street2);
				$("#zip").val(data[0].zip);
		}
	});
}

function getAddressDetail(){
	var id = $("#select_add").val();
	$.ajax({
		type:"POST",
		url:'bl/blAddress.php',
		data:{'tipo':6, 'id':id},
		success: function(data){
			$("#street").val(data[0].street);
			$("#street2").val(data[0].street2);
			$("#zip").val(data[0].zip);
		}
	});
}

function updateAddress(){
	var id = $("#select_add").val();
	var street = $("#street").val();
	var street2 = $("#street2").val();
	var zip = $("#zip").val();
	$.ajax({
		type:"POST",
		url:'bl/blAddress.php',
		data:{'tipo':5, 'street':street, 'street2':street2, 'zip':zip, 'id':id},
		success: function(data){
			if(data=="False"){
				alert("Error updating address");
			}else{
				location.reload();
			}
		}
	});
}