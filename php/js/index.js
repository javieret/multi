$(document).ready(function() {
	$("[rel=popover]").popover
	({placement:"bottom",
	  html:"true",
	  title:"Llama Clothes",
	  content:  "<form action=bl/blAuth.php method=post>"+
	  				"<input type=text id=user name=user class=span3 placeholder='Username'>"+
	  				"<input type=password id=pass name=pass class=span3 placeholder='Password'><input id=btn_login type=submit value=Enter class='btn btn-inverse span3'>"+
	  			"</form>"
	});
});