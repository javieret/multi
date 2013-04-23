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
});

function addState(){
	var country=document.getElementById('country_select').value;
	var stateName=document.getElementById('stateName').value;
	if(stateName.length>0){
		$.ajax({
			type:"POST",
			url:'bl/blState.php',
			data:{'country':country,'stateName':stateName,'tipo':1},
			success: function(data){
				document.getElementById('stateName').value="";
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

function getState(){
	$("#hola").empty();
	$.ajax({
		type:"POST",
		url:'bl/blState.php',
		data:{'tipo':3},
		success: function(data){
		console.log(data);
			for (var i=0;i<data.length;i++)
			{
				$("#hola").append("<p id=stateName"+data[i].id+" class=rojo>"+data[i].state+"<button onclick=deleteState("+data[i].id+")>X</button></p>");
			}
		}
	});
}

function deleteState(stateName){
	$.ajax({
		type:"POST",
		url:'bl/blState.php',
		data:{'stateName':stateName, 'tipo':2},
		success: function(data){
			$("#stateName"+stateName+"").empty();
			console.log(data);
		}
	});
}
