<?php 
		include("nav.php");
		include("../traitement_sql.php");
		$dao=new DAO();
		$lstequipe=$dao->listeGroupe();
     ?> 
     <h3 style="text-align: center;">Les Groupes</h3>
	 <table align="center" class="table table-hover" style="width: 70%;">
	 	<thead>
	 		<tr><th>Nom Groupe</th><th>Equipe 1</th><th>Equipe 2</th><th>Equipe 3</th><th>Equipe 4</th></tr>
	 	</thead>
	 	<tbody >
	 		<?php 
	 			foreach ($lstequipe as $ligne) {
	 				echo "<tr>";
				        	echo "<td>".$ligne["nom_groupe"]."</td>";
				        	echo "<td>".$ligne["equipe1"]."</td>";
				        	echo "<td>".$ligne["equipe2"]."</td>";
				        	echo "<td>".$ligne["equipe3"]."</td>";
				        	echo "<td>".$ligne["equipe4"]."</td>";	
				     echo "</tr>";
	 			}
	 		 ?>
	 	</tbody>
	 </table>