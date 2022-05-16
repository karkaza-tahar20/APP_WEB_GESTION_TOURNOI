<?php 
 include('navigation.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>AJOUTER UNE EQUIPE</title>
    <link rel="stylesheet" type="text/css" href="ajouter.css">
    <style type="text/css"> div.container {   padding-bottom: 2px; margin-top: 13px;} button{margin-top: 2px;} h2{margin-bottom: 2px;} /*ul{ margin-bottom: 50px; }*/</style>
 </head>
 <body>
 
 
  <div class="container"><h2 style="text-align: center;">Ajouter un Match</h2>
   
<form method="post" action="addMatch.php" enctype="multipart/form-data">
  
      <!--<div class="form-group">
      <label>Identifiant d'equipe </label>
      <input type="text" class="form-control" name="id_equipe" placeholder="Identifiant d'equipe">
    </div>-->
    <div class="form-group">
      <label>Nom d'équipe 1 </label>
      <input type="text" class="form-control" name="equipe1" placeholder="Nom d'équipe 1">
    </div> 
    <div class="form-group">
      <label>Drapo d'équipe 1  </label>
      <input type="file" class="form-control" name="image1" placeholder="Drapo d'équipe 1 ">
    </div>
    <div class="form-group">
      <label>Nom d'équipe 2 </label>
      <input type="text" class="form-control" name="equipe2" placeholder="Nom d'équipe 2">
    </div> 
    <div class="form-group">
      <label>Drapo d'équipe 2 </label>
      <input type="file" class="form-control" name="image2" placeholder="Drapo d'équipe 2 ">
    </div>
    <div class="form-group">
      <label>Date</label>
      <input type="text" class="form-control" name="date"  placeholder="Date">
    </div>
    <div class="form-group">
      <label>Heure </label>
      <input type="text" class="form-control" name="heure" placeholder="Heure">
    </div>
    <div class="form-group">
      <label>Terain </label>
      <input type="text" class="form-control" name="nom_terain"  placeholder="Terain" >
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