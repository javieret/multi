var total=0;
function getArticle(){
	$("#contenedor_articulos").empty();
	$.ajax({
		type:"POST",
		url:'bl/blArticle.php',
		data:{'tipo':3},
		success: function(data){
			for (var i=0;i<3;i++)
			{	
				$("#contenedor_articulos").append("<div class=span4>"+
					"<div class=well>"+
						"<h3 id=article"+data[i].id+" class=rojo>"+data[i].nombre+"</h3> <h4>Price "+data[i].prize+"</h4>"+
							//"<a button href=agregacar.php?id="+data[i].id+">BUY</button></div></div>");
						"<a href=agregacar.php?id="+data[i].id+"><img src=vercarrito.gif border=0 title=Agregar al Carrito></a></div></div>");
			}
		}
	});  // <button onclick=deleteArticle("+data[i].id+")>Delete</button>
}

function getArticle2(){
	$("#contenedor_articulos").empty();
	$.ajax({
		type:"POST",
		url:'bl/blArticle.php',
		data:{'tipo':3},
		success: function(data){
			for (var i=0;i<data.length;i++)
			{	
				$("#contenedor_articulos").append("<div class=span4>"+
					"<div class=well>"+
						"<h3 id=article"+data[i].id+" class=rojo>"+data[i].nombre+"</h3> <h4>Price "+data[i].prize+"</h4>"+
							//"<a button href=agregacar.php?id="+data[i].id+">BUY</button></div></div>");
						"<a href=agregacar2.php?id="+data[i].id+"><img src=vercarrito.gif border=0 title=Agregar al Carrito></a></div></div>");
			}
		}      // <button onclick=deleteArticle("+data[i].id+")>Delete</button>
	});
}

function getArticleDetail(){
	$.ajax({
		type:"POST",
		url:'bl/blArticle.php',
		data:{'tipo':4},
		success: function(data){
			for (var i=0;i<data.length;i++) {	
				//<select>
				$("#articles_selected").append("<p>"+data[i].nombre+"    <span class=label>$"+data[i].prize+"</span></p>")
				//<select id = cantidad> <option value="+"data[i].idproducto"+">2<option></select>
				total = total + parseFloat(data[i].prize);
			}
			$("#total").append("$"+ total);
		}
	});
	getAddress();
}

function addArticle(){
	var article=document.getElementById('article').value;
	var prize=document.getElementById('article_price').value;
	if(article.length>0){
		$.ajax({
			type:"POST",
			url:'bl/blArticle.php',
			data:{'article':article,'prize':prize,'tipo':1},
			success: function(data){
				document.getElementById('article').value="";
				document.getElementById('article_price').value="";
				console.log(data);
				if(data==="error"){
					alert("Introduce un número valido");
				}
			}
		});
	}else{
		alert("Escribe algo");
	}
}

function deleteArticle(article){
	$.ajax({
		type:"POST",
		url:'bl/blArticle.php',
		data:{'article':article, 'tipo':2},
		success: function(data){
			$("#article"+article+"").empty();
			console.log(data);
		}
	});
}