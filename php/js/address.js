$(document).ready(function() {
  	$.ajax({
		type:"POST",
		url:'bl/blCountry.php',
		data:{'tipo':3},
		success: function(data){
			for (var i=0;i<data.length;i++)
			{
				$("#country_select").append("<option value="+data[i].id+">"+data[i].country+"</option>");
			}
		}
	});
	$.ajax({
		type:"POST",
		url:'bl/blState.php',
		data:{'tipo':3},
		success: function(data){
			for (var i=0;i<data.length;i++)
			{
				$("#state_select").append("<option value="+data[i].id+">"+data[i].state+"</option>");
			}
		}
	});
	$.ajax({
		type:"POST",
		url:'bl/blAddrestype.php',
		data:{'tipo':3},
		success: function(data){
			for (var i=0;i<data.length;i++)
			{
				$("#type").append("<option value="+data[i].id+">"+data[i].addrestype+"</option>");
			}
		}
	});
});

function addAddress(){
	var country=document.getElementById('country_select').value;
	var state=document.getElementById('state_select').value;
	var type=document.getElementById('type').value;
	var street=document.getElementById('street').value;
	var street2=document.getElementById('street2').value;
	var zip=document.getElementById('zip').value;
	if(street.length>0){
		$.ajax({
			type:"POST",
			url:'bl/blAddress.php',
			data:{'country':country,'state':state,'tipo':1,'type':type, 'street':street, 'street2':street2, 'zip':zip},
			success: function(data){
				document.getElementById('street').value="";
				document.getElementById('street2').value="";
				document.getElementById('zip').value="";
				console.log(data);
				if(data==="error"){
					alert("Completa los datos");
				}
			}
		});
	}else{
		alert("Escribe algo");
	}
}

function getAddress(){
	$("#contenedor_direcciones").empty();
	$.ajax({
		type:"POST",
		url:'bl/blAddress.php',
		data:{'tipo':3},
		success: function(data){
		console.log(data);
			for (var i=0;i<data.length;i++)
			{
				$("#add_address").append("<option>"+data[i].street+" "+data[i].street2+"</option>");
			}
		}
	});
}

function deleteAddress(address){
	$.ajax({
		type:"POST",
		url:'bl/blAddress.php',
		data:{'address':address, 'tipo':2},
		success: function(data){
			$("#address"+address+"").empty();
			console.log(data);
		}
	});
}

