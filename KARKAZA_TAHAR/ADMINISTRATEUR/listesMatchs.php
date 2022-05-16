	<?php 
		//nclude("navigation.php");
		include("nav.php");
		include("../traitement_sql.php");
		$dao=new DAO();
		$lstequipe=$dao->listeMatch();
     ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Les Matchs</title>
	<link rel="stylesheet" type="text/css" href="button.css">	
	<style type="text/css">.tab{width: 100px;}</style>
</head>
<body>
     <h3 style="text-align: center;">Les Matchs</h3>
	 <table align="center" class="table table-hover" style="width: 70%;">
	 	<thead>
	 		<tr><th>   </th><th>   </th><th>Equipe 1</th><th>  </th><th>  </th><th>  </th><th>Equipe 2</th><th>   </th><th>   </th><th>   </th><th style="width: 30px;">Date </th></td><th>Heure</th><th>Terrain</th></tr>
	 	</thead>
	 	<tbody >
	 		<?php 
	 			foreach ($lstequipe as $ligne) {
	 				echo "<tr>";
				        	echo '<th><img class="image img-rounded" src="'.$ligne["image1"].'"/></th>';
				        	echo "<th></th>";
				        	echo '<th >'.$ligne["equipe1"].'</th>';
				        	echo "<th></th>";
				        	echo "<th>VS</th>";
				        	echo "<th></th>";
				        	echo '<th >'.$ligne["equipe2"].'</th>';
				        	echo "<th></th>";
				        	echo '<th><img class="image img-rounded" src="'.$ligne["image2"].'"/></th>';
				        	echo "<th></th>";			     
				        	echo '<th class="tab">'.$ligne["date"].'</th>';	
				        	echo "<th>".$ligne["heure"]."</th>";
				        	echo '<th >'.$ligne["nom_terain"].'</th>';
				        	echo "<th></th>";echo "<th></th>";
				        	echo '<th><button class="btn"><a href="supressionMatch.php?id='.$ligne["id_match"].'">supprimer</a></button</th>';
				           echo '<th><button class="btn"><a href="modificationMatch.php?id='.$ligne["id_match"].'">modifier</a></button></th>';	
				     echo "</tr>";
	 			}
	 		 ?>
	 	</tbody>
	 </table>
	 
</body>
</html>