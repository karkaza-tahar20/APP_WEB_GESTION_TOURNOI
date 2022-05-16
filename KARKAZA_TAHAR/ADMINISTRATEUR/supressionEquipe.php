<?php 
$id=$_GET['id'];
include("../traitement_sql.php");
		$dao=new DAO();
		$lstequipe=$dao->supprimerEquipe($id);
		header("location:listesEquipes.php");
 ?>