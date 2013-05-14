function addCustomer(){
	var user=document.getElementById('user').value;
	var pass=document.getElementById('pass').value;
	var first=document.getElementById('first').value;
	var last=document.getElementById('last').value;
	var email=document.getElementById('email').value;
	if(user.length>0){
		$.ajax({
			type:"POST",
			url:'bl/blCustomer.php',
			data:{'user':user,'pass':pass,'tipo':1,'first':first, 'last':last, 'email':email},
			success: function(data){
				document.getElementById('user').value="";
				document.getElementById('pass').value="";
				document.getElementById('first').value="";
				document.getElementById('last').value="";
				document.getElementById('email').value="";
				console.log(data);
				if(data==="error"){
					alert("Complete all the fields");
				}
			}
		});
	}else{
		alert("Complete all the fields");
	}
}

function getCustomer(){
	$("#hola").empty();
	$.ajax({
		type:"POST",
		url:'bl/blCustomer.php',
		data:{'tipo':3},
		success: function(data){
		console.log(data);
			for (var i=0;i<data.length;i++)
			{
				$("#hola").append("<p id=customer"+data[i].id+" class=rojo>"+data[i].user+"<button onclick=deleteCustomer("+data[i].id+")>X</button></p>");
			}
		}
	});
}

function deleteCustomer(customer){
	$.ajax({
		type:"POST",
		url:'bl/blCustomer.php',
		data:{'customer':customer, 'tipo':2},
		success: function(data){
			$("#customer"+customer+"").empty();
			console.log(data);
		}
	});
}