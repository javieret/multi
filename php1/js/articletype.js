function getArticletype(){
	$("#hola").empty();
	$.ajax({
		type:"POST",
		url:'bl/blArticletype.php',
		data:{'tipo':3},
		success: function(data){
		console.log(data);
			for (var i=0;i<data.length;i++)
			{
				$("#hola").append("<p id=category"+data[i].id+" class=rojo>"+data[i].category+"<button onclick=deleteArticletype("+data[i].id+")>X</button></p>");
			}
		}
	});
}

function addArticletype(){
	var category=document.getElementById('category').value;
	if(category.length>0){
		$.ajax({
			type:"POST",
			url:'bl/blArticletype.php',
			data:{'category':category,'tipo':1},
			success: function(data){
				document.getElementById('category').value="";
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

function deleteArticletype(category){
	$.ajax({
		type:"POST",
		url:'bl/blArticletype.php',
		data:{'category':category, 'tipo':2},
		success: function(data){
			$("#category"+category+"").empty();
			console.log(data);
		}
	});
}