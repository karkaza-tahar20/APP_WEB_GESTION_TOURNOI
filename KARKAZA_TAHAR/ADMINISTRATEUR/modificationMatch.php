     <?php 
		include("navigationmod.php");
     ?> 
 <!DOCTYPE html>
<html>
<head>
	<title>Modifier un Match</title>
	<link rel="stylesheet" type="text/css" href="button.css">
	<style type="text/css">
		.form{
           text-align: center;
           position: absolute;
           left: 0px;
           top: 100px;
		}
		.form input{
			margin: 10px 0px;
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
	 		<tr><th>Équipe 1</th><th> </th><th>Équipe 2</th><th></th><th>Date</th><th>Heure</th><th>Terrain</th></tr>
	</thead>	
  	
	<tr><th><input type='text'  name='equipe1'></th>
	<th><input type='file'  name='image1'></th>
	<th><input type='text'  name='equipe2'></th>
	<th><input type='file'  name='image2'></th>
	<th><input type='text'  name='date'></th>
	<th><input type='text'  name='heure'></th>
	<th><input type='text'  name='nom_terain'></th>
    <th><button class="btn" name="btn">Modifier</button></th></tr>
 </form>
</table>	   
<?php
	//include("navigation.php");
	   $id_match=$_GET['id'];
	 if(isset($_POST['btn'])){
	 	$equipe1=$_POST['equipe1'];
        $dir="img";
        $image1=$dir."/".$_FILES['image1']['name'];
        $equipe2=$_POST['equipe2'];
        $image2=$dir."/".$_FILES['image2']['name'];
        $date=$_POST['date'];
        $heure=$_POST['heure'];
        $nom_terain=$_POST['nom_terain'];
       
		include("../traitement_sql.php");
		$dao=new DAO();
		$lsteTerain=$dao->modMatch($id_match,$equipe1,$image1,$equipe2,$image2,$date,$heure,$nom_terain);
		header("location:listesMatchs.php");
	 }
   ?> 
  </body>
  </html>