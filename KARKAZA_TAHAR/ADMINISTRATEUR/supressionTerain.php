<?php 
$id=$_GET['id'];
include("../traitement_sql.php");
		$dao=new DAO();
		$lstequipe=$dao->supprimerTerain($id);
		header("location:listesTerains.php");
?>