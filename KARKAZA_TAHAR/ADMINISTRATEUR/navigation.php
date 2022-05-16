<!DOCTYPE html>
<html>
<head>
	<title>Navigation</title>
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
		<header class="video-container">

		<video playsinline autoplay muted loop id="bgvid" >
	         <source src="video13.mp4" type="video/mp4">
	     </video>
			<!--<a  class="logo"><img src="img/logo3.jpg"></a>-->
			<a class="toggle">Menu</a>
			<!--<a class="toggl">Deconexion</a>-->
			<ul >
				<li><a  href="Home.php">Acceuil</a></li>
				<li><a href="ajouterEquipe.php">Ajouter Équipe</a></li>
				<li><a href="ajouterGroupe.php">Ajouter Groupe</a></li>
				<li><a href="ajouterTerain.php">Ajouter Terrain</a></li>
				<li><a href="ajouterMatch.php">Ajouter Match</a></li>
				<li><a href="deconnexion.php">Déconnexion</a></li>
			</ul>
		</header>
</body>
</html>