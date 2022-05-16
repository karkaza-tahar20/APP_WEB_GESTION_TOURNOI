<?php 
$id_match=$_GET['id'];
include("../traitement_sql.php");
		$dao=new DAO();
		$lstequipe=$dao->supprimerMatch($id_match);
		header("location:listesMatchs.php");
 ?>