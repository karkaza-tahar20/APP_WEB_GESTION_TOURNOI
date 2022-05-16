  <?php 
		include("navigationmod.php");
     ?> 

<!DOCTYPE html>
<html>
<head>
	<title>Modifier un Terain</title>
	<link rel="stylesheet" type="text/css" href="button.css">
	<style type="text/css">
		.form{
           text-align: center;
           position: absolute;
           left: 80px;
           top: 80px;
		}
		.form input{
			margin: 90px 5px;
			/*background:none;*/
			border-radius: 8px 8px;
			box-shadow: solid 4px #333;
		}
       table{margin-top: 40px;}
       th{color: #fff0e6;}
	</style>
</head>
<body>
	
  <form class="form" method='POST'   enctype="multipart/form-data" >
  	<table align="center" class="table table-hover" style="width: 90%;">
	 	<thead>
	 		<tr><th>Nom Terain</th><th>Ville de Terain</th><th>Adresse de Terain</th><th>Surface de Terain</th><th>Capacité de Terain</th><th>Image de Terain</th></tr>
	 	</thead>
	<tr><th><input type='text'  name='nom_terain'></th>
	<th><input type='text'  name='ville_terain'></th>
	<th><input type='text'  name='adresse'></th>
	<th><input type='text'  name='surface'></th>
	<th><input type='text'  name='capacite'></th>
	<th><input type='file'  name='image'></th>
    <th><button class="btn" name="btn">Modifier</button></th></tr>
 </form>
</table>
<?php
	   $id_terain=$_GET['id'];
	 if(isset($_POST['btn'])){
	 	$nom_terain=$_POST['nom_terain'];
        $ville_terain=$_POST['ville_terain'];
        $adresse=$_POST['adresse'];
        $surface=$_POST['surface'];
        $capacite=$_POST['capacite'];
        $dir="img";
        $image=$dir."/".$_FILES['image']['name'];
		include("../traitement_sql.php");
		$dao=new DAO();
		$lsteTerain=$dao->modTerain($id_terain,$nom_terain,$ville_terain,$adresse,$surface,$capacite,$image);
		header("location:listesTerains.php");
	 }
    ?>    

</body>
</html>