<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="menu.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
 <script src="js/responsiveslides.min.js"></script>
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>
  <meta name="viewport" content="width=device-width,initial-scrol=1, user-scalable=no">
	<script src="https://code.jquery.com/jquery-3.3.0.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
	       $('.toggle').click(function(){
	       	$('ul').toggleClass('active');
	       })
		})
	</script>
</head>
<body> 
<!--header-->
    <a class="toggle">Menu</a>
	<div class="header-bottom-top">
			<div class="clearfix"> </div>
			<div class="header-bottom">			
				<div class="logo">
					<a ><img src="images/log.png" alt=" " /></a>
				</div>
				
				<div class="top-nav">
					
					<ul>
						<li class="active"><a href="Home.php" class="scroll">Home</a></li>
						<li ><a href="ajouterEquipe.php" class="scroll">Ajouter Équipe</a></li>
						<li><a href="listesEquipes.php" class="scroll"> Les Équipes</a></li>
						<li ><a href="ajouterGroupe.php" class="scroll">Ajouter Groupe</a></li>	
						<li><a href="listesGroupes.php" class="scroll"> Les Groupes</a></li>					
						<li><a href="ajouterTerain.php" class="scroll">Ajouter Terrain</a></li>
						<li><a href="listesTerains.php" class="scroll">Les Terrains</a></li>
						<li><a href="ajouterMatch.php" class="scroll">Ajouter Match </a></li>
							<li><a href="listesMatchs.php" class="scroll"> Les Matchs</a></li>
						<li><a href="deconnexion.php" class="scroll">Déconnexion</a></li>
					</ul>
				<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>