	<?php 
		//include("navigation.php");
		include("nav.php");
		include("../traitement_sql.php");
		$dao=new DAO();
		$lstequipe=$dao->listeEquipe();
     ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Les equipes</title>
	<link rel="stylesheet" type="text/css" href="button.css">	
</head>
<body>
     <h3 style="text-align: center;">Les Équipes</h3>
	 <table align="center" class="table table-hover" style="width: 70%;">
	 	<thead>
	 		<tr><th>Nom d'equipe</th><th>Ville </th><th>Titres </th><th>Notes </th><th>Ligue</th><th>Groupe</th><th></th><th></th></tr>
	 	</thead>
	 	<tbody >
	 		<?php 
	 			foreach ($lstequipe as $ligne) {
	 				echo "<tr>";
				        	echo "<th>".$ligne["nom_equipe"]."</th>";
				        	echo "<th>".$ligne["ville_equipe"]."</th>";
				        	echo "<th>".$ligne["titres_equipe"]."</th>";
				        	echo "<th>".$ligne["notes"]."</th>";
				        	echo "<th>".$ligne["id_ligue"]."</th>";	
				        	echo "<th>".$ligne["nom_groupe"]."</th>";
				        	echo "<th></th>";
				        	echo '<th><img class="image img-rounded" src="'.$ligne["image"].'"/></th>';
				        	echo '<th><button class="btn"><a href="supressionEquipe.php?id='.$ligne["id_equipe"].'">supprimer</a></button</th>';
				           echo '<th><button class="btn"><a href="modificationEquipe.php?id='.$ligne["id_equipe"].'">modifier</a></button></th>';	
				     echo "</tr>";
	 			}
	 		 ?>
	 	</tbody>
	 </table>
	 <?php
		/*$pdo=$dao->connexion();
		$lstLivres=array();
		$rep=$pdo->query("select * from equipes");
		//$st=$bd->prepare($requ);
	      //$st->execute();
		while($lign=$rep->fetch()){
			echo "<tr>";    
				        	echo "<td>".$ligne["id_equipe"]."</td>";
				        	echo "<td>".$ligne["nom_equipe"]."</td>";
				        	echo '<td><img class="image img-rounded" src="'.$ligne["image"].'"/></a></td>';
				        	echo "<td>".$ligne["ville_equipe"]."</td>";
				        	echo "<td>".$ligne["id_ligue"]."</td>";	
				        	echo "<td>".$ligne["titres_equipe"]."</td>";	
				        	echo "<td>".$ligne["id_groupe"]."</td>";
                            echo '<td><a href="supressionEquipe.php?id='.$ligne["id_equipe"].'">supprimer</a></td>';
							
		echo "</tr>";
	  	 /*echo " nom equipe : ".$lign['nom_equipe']. "<br>";
	     echo " ville : ".$lign['ville_equipe']. "<br>"; //le nom dans la base de donnees
	     echo " ligue : ".$lign['id_ligue']. "<br>";
	     echo " titres : ".$lign['titres_equipe']. "<br>";
	      echo " Groupe : ".$lign['id_groupe']. "<br>";
	        // echo " Drapo : ".$lign['drapo']. "<br>";
	      echo ('<img class="image img-rounded" src="'.$lign['drapo'].'"/><br/>');
	  }			
	  $rep->closeCursor();*/
	 ?>
	 
</body>
</html>