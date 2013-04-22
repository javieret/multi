function addCountry(){
	var country=document.getElementById('country').value;
	if(country.length>0){
		$.ajax({
			type:"POST",
			url:'bl/blCountry.php',
			data:{'country':country,'tipo':1},
			success: function(data){
				document.getElementById('country').value="";;
				console.log(data);
				if(data==="error"){
					alert("Introduce un nombre valido");
				}
			}
		});
	}else{
		alert("Escribe algo");
	}
}

function deleteCountry(country){
	$.ajax({
		type:"POST",
		url:'bl/blCountry.php',
		data:{'country':country, 'tipo':2},
		success: function(data){
			$("#country"+country+"").empty();
			console.log(data);
		}
	});
}

function getCountry(){
	$("#hola").empty();
	$.ajax({
		type:"POST",
		url:'bl/blCountry.php',
		data:{'tipo':3},
		success: function(data){
		console.log(data);
			for (var i=0;i<data.length;i++)
			{
				$("#hola").append("<p id=country"+data[i].id+" class=rojo>"+data[i].country+"<button onclick=deleteCountry("+data[i].id+")>X</button></p>");
			}
		}
	});
}

