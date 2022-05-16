	<?php 
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
</head>
<body>
     <h3 style="text-align: center;">Les Matchs</h3>
	 <table align="center" class="table table-hover" style="width: 70%;">
	 	<thead>
	 		<tr><th>   </th><th>   </th><th>Equipe 1</th><th>  </th><th>  </th><th>Equipe 2</th><th>   </th><th>   </th><th>   </th><th>Date</th><th>Heure</th><th>Terrain</th></tr>
	 	</thead>
	 	<tbody >
	 		<?php 
	 			foreach ($lstequipe as $ligne) {
	 				echo "<tr>";
				        	echo '<th><img class="image img-rounded" src="'.$ligne["image1"].'"/></th>';
				        	echo "<th></th>";
				        	echo "<th>".$ligne["equipe1"]."</th>";
				        	echo "<th>VS</th>";
				        	echo "<th></th>";
				        	echo "<th>".$ligne["equipe2"]."</th>";
				        	echo "<th></th>";
				        	echo '<th><img class="image img-rounded" src="'.$ligne["image2"].'"/></th>';
				        	echo "<th></th>";			     
				        	echo "<th>".$ligne["date"]."</th>";	
				        	echo "<th>".$ligne["heure"]."</th>";
				        	echo "<th>".$ligne["nom_terain"]."</th>";
				        	echo "<th></th>";echo "<th></th>";
				        
				     echo "</tr>";
	 			}
	 		 ?>
	 	</tbody>
	 </table>
	 
</body>
</html>