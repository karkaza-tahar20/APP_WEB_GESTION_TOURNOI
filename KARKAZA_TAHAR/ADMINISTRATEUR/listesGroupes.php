<?php 
		//include("navigation.php");
include("nav.php");
		include("../traitement_sql.php");
		$dao=new DAO();
		$lstequipe=$dao->listeGroupe();
     ?> 
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Les Groupes</title>
  <link rel="stylesheet" type="text/css" href="button.css">
</head>
  <body>
  
     <h3 style="text-align: center;">Les Groupes</h3>
	 <table align="center" class="table table-hover" style="width: 70%;">
	 	<thead class="thead">
	 		<tr><th>Nom Groupe</th><th>Equipe 1</th><th>Equipe 2</th><th>Equipe 3</th><th>Equipe 4</th></tr>
	 	</thead>
	 	<tbody >
	 		<?php 
	 			foreach ($lstequipe as $ligne) {
	 				echo "<tr>";
				        	echo "<th>".$ligne["nom_groupe"]."</th>";
				        	echo "<th>".$ligne["equipe1"]."</th>";
				        	echo "<th>".$ligne["equipe2"]."</th>";
				        	echo "<th>".$ligne["equipe3"]."</th>";
				        	echo "<th>".$ligne["equipe4"]."</th>";
				        	echo "<th></th><th></th>";
				        	echo '<th><button class="btn"><a href="supressionGroupe.php?id='.$ligne["id_groupe"].'">supprimer</a></button></th>';
				        	echo '<th><button class="btn"><a href="modificationGroupe.php?id='.$ligne["id_groupe"].'">modifier</a></button></th>';	
				     echo "</tr>";
	 			}
	 		 ?>
	 	</tbody>
	 </table>
</body>
</html>