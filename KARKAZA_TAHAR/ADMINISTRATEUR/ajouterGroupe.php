<?php  include('navigation.php');
//include('nav.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Ajouter un Groupe</title>
   <link rel="stylesheet" type="text/css" href="ajouter.css">
   <style type="text/css"> div.container {  height: 69%; bottom: 10px; margin-top: 80px;}</style>
</head>
<body>
  <div class="container"><h2 >Ajouter un Groupe</h2>
  <form method="post" action="addGroupe.php" enctype="multipart/form-data">
      
      <div class="form-group">
      <label>Nom de groupe  </label>
      <input type="text" class="form-control" name="nom_groupe">
    </div>
    <div class="form-group">
      <label>équipe  1</label>
      <input type="text" class="form-control" name="equipe1">
    </div>
    <div class="form-group">
      <label>équipe  2 </label>
      <input type="text" class="form-control" name="equipe2">
    </div>
    <div class="form-group">
      <label>équipe  3 </label>
      <input type="text" class="form-control" name="equipe3">
    </div>
     <div class="form-group">
      <label>équipe  4 </label>
      <input type="text" class="form-control" name="equipe4">
    </div>
      <?php 
        if(isset($_GET['id'])){
         ?>       
        <span style="color: red;">
          Remplisez les champs vides !!
        </span>
      <?php } echo"<br>"?>

     <button type="submit" class="btn btn-primary" name="btn">Ajouter</button>
    <button type="reset" class="btn btn-primary">Reinitialiser</button>
 
</form>
 </div>
</body>
</html>