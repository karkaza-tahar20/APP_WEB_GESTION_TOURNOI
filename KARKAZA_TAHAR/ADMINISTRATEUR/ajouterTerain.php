<?php include('navigation.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un terain</title>
   <link rel="stylesheet" type="text/css" href="ajouter.css">
    <style type="text/css"> div.container {  height: 74%; bottom: 20px; margin-top: 60px;}</style>
</head>
<body>
  <div class="container"> <h2>Ajouter un terrain</h2>
<form method="post" action="addTerain.php" enctype="multipart/form-data">
  
    <div class="form-group">
      <label>Nom de Terain </label>
      <input type="text" class="form-control" name="nom_terain">
    </div>
    <div class="form-group">
      <label>Ville de Terain  </label>
      <input type="text" class="form-control" name="ville_terain">
    </div>
    <div class="form-group">
      <label>Adresse de Terain </label>
      <input type="text" class="form-control" name="adresse">
    </div>
     <div class="form-group">
      <label>Surface de Terain </label>
      <input type="text" class="form-control" name="surface">
    </div>
     <div class="form-group">
      <label>Capacite de Terain </label>
      <input type="text" class="form-control" name="Capacite">
    </div>
     <div class="form-group">
      <label>Image de Terain  </label>
      <input type="file" class="form-control" name="image">
    </div>
     <?php 
        if(isset($_GET['id'])){
         ?> 
         <span style="color: red;">
          Remplisez les champs vides !!
        </span>
      <?php } echo"<br>"?>
    <button type="submit"  name="btn">Ajouter</button>
    <button type="reset" >Reinitialiser</button> 
 
  </form>
 </div>
</body>
</html>