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
     		.image{
     			width: 220px;
     		}
     		th{text-align: center;}
     		a{
                text-decoration: none;
            }
     	</style>
      <link rel="stylesheet" type="text/css" href="button.css">
     </head>
     <body>
     
        <h3 style="text-align: center;">Les Terains</h3>
	 <table align="center" class="table table-hover" style="width: 90%;">
	 	<thead>
	 		<tr><th>Nom Terain</th><th>Ville de Terain</th><th>Adresse de Terain</th><th>Surface de Terain</th><th>Capacité de Terain</th><th></th><th></th></tr>
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
				        	echo "<th></th>";
				        	echo '<th><img  class="image" src="'.$ligne["image"].'"/></th>';

    	echo '<th><button class="btn"><a href="supressionTerain.php?id='.$ligne["id_terain"].'">supprimer</a></button></th>';
				        	echo '<th><button class="btn"><a href="modificationTerain.php?id='.$ligne["id_terain"].'">modifier</a></button></th>';	
				     echo "</tr>";
	 			}
	 		 ?>
	 	</tbody>
	 </table>
</body>
 </html>