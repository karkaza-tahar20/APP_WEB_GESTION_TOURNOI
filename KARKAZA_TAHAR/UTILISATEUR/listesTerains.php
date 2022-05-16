     <?php 
		include("nav.php");
		include("../traitement_sql.php");
		$dao=new DAO();
		$lstequipe=$dao->listeTerain();
     ?> 

     <!DOCTYPE html>
     <html>
     <head>
     	<title>Les Terains</title>
     	<style type="text/css">
     		body{
     		 background-image: url(img/grey-box.png);
     		}
     		.image{
     			width: 320px;

     		}
     		th{text-align: center;}
     	</style>
     </head>
     <body>
     
        <h3 style="text-align: center;">Les Terrains</h3>
	 <table align="center" class="table table-hover" style="width: 90%;">
	 	<thead>
	 		<tr><th>Nom de Terrain</th><th>Ville</th><th>Adresse </th><th>Surface </th><th>Capacité </th><th></th></tr>
	 	</thead>
	 	<tbody >
	 		<?php 
	 			foreach ($lstequipe as $ligne) {
	 				echo "<tr>";
				        	echo "<th>".$ligne["nom_terain"]."</th>";
				        	echo "<th>".$ligne["ville_terain"]."</th>";
				        	echo "<th>".$ligne["adresse"]."</th>";
				        	echo "<th>".$ligne["surface"]."</th>";
				        	echo "<th>".$ligne["capacite"]."</th>";
				        	echo '<th ><img class="image" src="'.$ligne["image"].'"/></th>';
				     echo "</tr>";
	 			}
	 		 ?>
	 	</tbody>
	 </table>
</body>
 </html>