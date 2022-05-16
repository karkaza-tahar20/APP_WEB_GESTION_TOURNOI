<!DOCTYPE html>
<html>
<head>
	<title>Navigation</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 ,maximum-scale=1.0,minimum=scale=1.0">
<meta charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width,initial-scrol=1, user-scalable=no">
	
	<script src="https://code.jquery.com/jquery-3.3.0.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
	       $('.toggle').click(function(){
	       	$('ul').toggleClass('active');
	       })
		})
	</script>

	<link rel="stylesheet" type="text/css" href="navigation.css">
</head>
<body>

		<header>
			<img src="img/logo3.jpg" alt=" "/>
		   <a class="toggle" >Menu </a>
			<!--<a class="toggl">Deconexion</a>-->
			<ul >
				<li><a href="interfaceutilisateur.php">Acceuil</a></li>
				<li><a href="listesEquipes.php">Les équipe</a></li>
				<li><a href="listesGroupes.php">Les Groupes</a></li>
				<li><a href="listesTerains.php">Les Terains</a></li>
				<li><a href="listesMatchs.php">Les Matchs</a></li>
				<li><a href="contact1.php">Contact</a></li>
			</ul>
		</header>

</body>
</html>