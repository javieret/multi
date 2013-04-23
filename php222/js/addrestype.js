function getAddrestype(){
	$("#hola").empty();
	$.ajax({
		type:"POST",
		url:'bl/blAddrestype.php',
		data:{'tipo':3},
		success: function(data){
		console.log(data);
			for (var i=0;i<data.length;i++)
			{
				$("#hola").append("<p id=addrestype"+data[i].id+" class=rojo>"+data[i].addrestype+"<button onclick=deleteAddrestype("+data[i].id+")>X</button></p>");
			}
		}
	});
}

function addAddrestype(){
	var addrestype=document.getElementById('addrestype').value;
	if(addrestype.length>0){
		$.ajax({
			type:"POST",
			url:'bl/blAddrestype.php',
			data:{'addrestype':addrestype,'tipo':1},
			success: function(data){
				document.getElementById('addrestype').value="";
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

function deleteAddrestype(addrestype){
	$.ajax({
		type:"POST",
		url:'bl/blAddrestype.php',
		data:{'addrestype':addrestype, 'tipo':2},
		success: function(data){
			$("#addrestype"+addrestype+"").empty();
			console.log(data);
		}
	});
}