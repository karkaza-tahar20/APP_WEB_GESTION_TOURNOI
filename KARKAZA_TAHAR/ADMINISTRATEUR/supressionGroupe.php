<?php 
$id=$_GET['id'];
include("../traitement_sql.php");
		$dao=new DAO();
		$lstequipe=$dao->supprimerGroupe($id);
		header("location:listesGroupes.php");
?>