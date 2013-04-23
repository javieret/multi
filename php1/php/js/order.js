$(document).ready(function() {
  	$.ajax({
		type:"POST",
		url:'bl/blAddress.php',
		data:{'tipo':3},
		success: function(data){
			for (var i=0;i<data.length;i++)
			{
				$("#direccion").append("<option value="+data[i].id+">"+data[i].street+"</option>");
				//$("#direccion").append("<option value="+1+">"+'Monclova 1851'+"</option>");
				//$("#articulos").append("<input id='articles' type='checkbox' name = 'articles' value="+1+">"+'camisa');
				//$("#articulos").append("<input id='articles' type='checkbox' name = 'articles' value="+2+">"+'pantalon');
			}
		}
	});
	$.ajax({
		type:"POST",
		url:'bl/blArticle.php',
		data:{'tipo':3},
		success: function(data){
			for (var i=0;i<data.length;i++)
			{
				$("#articulos").append("<input id='articles[]' type='checkbox' name = 'articles[]' value="+data[i].id+">"+data[i].nombre);
				//$("#articulos").append("<input type='checkbox' name = 'articles' value="+1+">"+'camisa');
			}
		}
	});
});

function addOrder(){
	var direccion=document.getElementById('direccion').value;
	var checked = []
	$("input[name='articles[]']:checked").each(function ()
	{
	    checked.push(parseInt($(this).val()));
	});
	if(direccion.length>0){
		console.log(direccion);
		console.log(checked);
		$.ajax({
			type:"POST",
			url:'bl/blOrder.php',
			data:{'address':direccion,'articles':checked,'tipo':1},
			success: function(data){
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

function getOrder(){
	$("#hola").empty();
	$.ajax({
		type:"POST",
		url:'bl/blOrder.php',
		data:{'tipo':3},
		success: function(data){
		console.log(data);
			for (var i=0;i<data.length;i++)
			{
				$("#hola").append("<p id=order"+data[i].id+" class=rojo>"+data[i].id+" - "+data[i].total+"<button onclick=deleteAddress("+data[i].id+")>X</button><button onclick=editAddress("+data[i].id+")>Editar</button></p>");
			}
		}
	});
}

function deleteOrder(order){
	$.ajax({
		type:"POST",
		url:'bl/blOrder.php',
		data:{'order':order, 'tipo':2},
		success: function(data){
			$("#order"+order+"").empty();
			console.log(data);
		}
	});
}