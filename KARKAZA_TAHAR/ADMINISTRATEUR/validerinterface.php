<?php 
  if(isset($_POST['adm'])){
    header("location:interfaceAdministrateur.php");
  }else{
  	header("location:interfaceutilisateur.php");
  }
 ?>