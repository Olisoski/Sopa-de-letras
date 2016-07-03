
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Drag selection example</title>

	<script type="text/javascript" src="http://www.google.com/jsapi"></script>

<script type="text/javascript">
	
google.load("jquery", "1.3.2");

google.setOnLoadCallback(function() {

	var active = false;
	var texto='';
	$("a").mousedown(function(ev) {
		active = true;
		$(this).parent( "td" ).css( "background", "" );
		$(".pintar").removeClass("pintar"); // clear previous selection
		ev.preventDefault(); // this prevents text selection from happening
		$(this).addClass("pintar");
		$(this).parent( "td" ).css( "background", "red" );
		
	});

	$("a").mousemove(function(ev) {
		if (active) {
			$(this).addClass("pintar");
			$(this).parent( "td" ).css( "background", "red" );
		}
	});
	
	$(document).mouseup(function(ev) {
		active = false;
		$(".pintar").each(function(index, elem) {
			texto=texto+$(this).html();
			$(this).parent( "td" ).css( "background", "yellow" );
			
			});
		$(".pintar").removeClass("pintar");
		$(this).parent( "td" ).css( "background", "" );
		$('#PalabraS').html(texto);
	    texto='';
	});

});

</script>

<style type="text/css">

.pintar {
	color:#ccffcc;
}

</style>

</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<body>
<div class="container">
<div id="PalabraS"></div>
<table border="1" class="text-center" >
	<?php for($i=0;$i<10;$i++){ ?>
	<tr>
		<?php for($j=0;$j<10;$j++){ ?>
		<td   style="width: 20px;"><a href="#" style="  padding: 2px;"  class="letra">
        <?php 
        $letraAleatoria = chr(rand(ord("a"), ord("z"))); 
		echo $letraAleatoria;
		?> </a></td>
		<?php }?>
		
	</tr>
	<?php }?>
	
</table>
</div>
</body>
</html>
