     <?php 
		include("navigationmod.php");
     ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Modifier un Groupe</title>
	<link rel="stylesheet" type="text/css" href="button.css">
	<style type="text/css">
		.form{
			width: 50%;
           text-align: center;
           position: absolute;
           left: 250px;
           top: 100px;
		}
		.form input{
			margin: 10px 5px;
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
	 		<tr><th>Nom Groupe</th><th>Équipe1</th><th>Équip2</th><th>Équipe3</th><th>Équipe4</th></tr>
	 	</thead>
	<tr><th><input type='text'  name='nom_groupe'></th>
	<th><input type='text'  name='equipe1'></th>
	<th><input type='text'  name='equipe2'></th>
	<th><input type='text'  name='equipe3'></th>
	<th><br><br><br><input type='text'  name='equipe4'><br><br><br><br></th>
    <th><button class="btn" name="btn">Modifier</button></th></tr>
 </form>
</table>
<?php
	//include("navigation.php");
	   $id_groupe=$_GET['id'];
	 if(isset($_POST['btn'])){
	 	$nom_groupe=$_POST['nom_groupe'];
        $equipe1=$_POST['equipe1'];
        $equipe2=$_POST['equipe2'];
        $equipe3=$_POST['equipe3'];
        $equipe4=$_POST['equipe4'];
		include("../traitement_sql.php");
		$dao=new DAO();
		$lsteTerain=$dao->modGroupe($id_groupe,$nom_groupe,$equipe1,$equipe2,$equipe3,$equipe4);
		header("location:listesGroupes.php");
	 }
       
   ?> 
</body>
</html>