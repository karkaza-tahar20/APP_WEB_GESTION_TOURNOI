 <?php 
		include("navigationmod.php");
     ?> 
 <!DOCTYPE html>
<html>
<head>
	<title>Modifier une Equipe</title>
	<link rel="stylesheet" type="text/css" href="button.css">
	<style type="text/css">
		.form{
           text-align: center;
           position: absolute;
           left: 0px;
           top: 100px;
		}
		.form input{
			margin: 10px 5px;
			/*background:none;*/
			border-radius: 8px 8px;
			box-shadow: solid 4px #333;
		}
		}
       table{margin-top: 40px;}
       th{color: #fff0e6;}

	</style>
</head>
<body>
		
  <form class="form" method='POST'   enctype="multipart/form-data" >
  	<table align="center" class="table table-hover" style="width: 90%;"> 
  	<thead>
	 		<tr><th>Nom d'équipe</th><th>Ville d'équipe</th><th>Titres d'équipe</th><th>Notes d'équipe</th><th>La ligue</th><th>Groupe</th><th>Drapo d'équipe</th></tr>
	 </thead>
	<tr><th><input type='text'  name='nom_equipe'></th>
	<th><input type='text'  name='ville_equipe'></th>
	<th><input type='text'  name='titres_equipe'></th>
	<th><input type='text'  name='notes'></th>
	<th><input type='text'  name='id_ligue'></th>
	<th><input type='text'  name='id_groupe'></th>
	<th><br><br><br><input type='file'  name='image'><br><br><br><br></th>
    <th><button class="btn" name="btn">Modifier</button></th></tr>
 </form>
</table>		   
<?php
	//include("navigation.php");
	   $id_equipe=$_GET['id'];
	 if(isset($_POST['btn'])){
	 	$nom_equipe=$_POST['nom_equipe'];
        $ville_equipe=$_POST['ville_equipe'];
        $titres_equipe=$_POST['titres_equipe'];
        $notes=$_POST['notes'];
        $id_ligue=$_POST['id_ligue'];
         $id_groupe=$_POST['id_groupe'];
        $dir="img";
        $image=$dir."/".$_FILES['image']['name'];
		include("../traitement_sql.php");
		$dao=new DAO();
		$lsteTerain=$dao->modEquipe($id_equipe,$nom_equipe,$ville_equipe,$titres_equipe,$notes,$id_ligue,$image,$id_groupe);
	header("location:listesEquipes.php");
	 }
   ?> 
  </body>
  </html>