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
					"<div class='well products_div'>"+
						"<h3 id=article"+data[i].id+" class=rojo>"+data[i].nombre+"</h3>"+
						"<img class=center_img src=http://i.americanapparel.net/storefront/photos/morephotos/2406/2406_0"+(i+1)+"t.jpg><br>"+
						"<h4>Price <span class=label>$ "+data[i].prize+"</span></h4>"+
						"<a href=agregacar.php?id="+data[i].id+"><button class='btn btn-success'><img src=vercarrito.gif border=0 title=Agregar al Carrito> Add To Cart</button></a></div></div>");
			}
		}
	});
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
						"<h3 id=article"+data[i].id+" class=rojo>"+data[i].nombre+"</h3>"+
						"<img class=center_img src=http://i.americanapparel.net/storefront/photos/morephotos/2406/2406_0"+(i+1)+"t.jpg><br>"+
						"<h4>Price <span class=label>$ "+data[i].prize+"</span></h4>"+
						"<a href=agregacar2.php?id="+data[i].id+"><button class='btn btn-success'><img src=vercarrito.gif border=0 title=Agregar al Carrito> Add To Cart</button></a></div></div>");
			}
		}  
	});
}

function getArticleDetail(){
	$.ajax({
		type:"POST",
		url:'bl/blArticle.php',
		data:{'tipo':4},
		success: function(data){
			$("#cart_detail").append("<div class=row-fluid><div class=span3><span class='label label-success'>Products</span></div><div class=span3><span class='label label-success'>Quantity</span></div><div class=span3><span class='label label-success'>Delete Product</span></div><div class=span3><span class='label label-success'>Price</span></div></div><hr>");
			for (var i=0;i<data.length;i++) {
				$("#cart_detail").append("<div class=row-fluid><div class=span3>"+
					"<p><img class=center_img src=http://i.americanapparel.net/storefront/photos/morephotos/2406/2406_0"+(i+1)+"t.jpg><br><small>"+data[i].nombre+"</small></p></div>"+
					"<div class=span3>"+
					"<select class=span3><option>1</option></select></div>"+
					"<div class=span3><input class='btn btn-danger' onclick=(deleteCar("+data[i].id+")) type=button value='X Delete Product'></div>"+
					"<div class=span3><p>$"+data[i].prize+"</p></div></div><hr>");
					total = total + parseFloat(data[i].prize);
			}
			$("#cart_detail").append("<div class=row-fluid><div class=span3></div><div class=span3></div><div class=span3></div><div class=span3><p><br>Total: $"+total+"</p></div>");
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