
 <!DOCTYPE html>
 <html>
 <head>
   <title>AJOUTER UNE EQUIPE</title>
   <link rel="stylesheet" type="text/css" href="ajouter.css">
    <style type="text/css"> div.container {   padding-bottom: 2px; margin-top: 15px;} button{margin-top: 2px;} h2{margin-bottom: 2px;}</style>
 </head>
 <body>
 <?php 
 include('navigation.php');
 ?>
  
  <div class="container"><h2 style="text-align: center;">Ajouter une équipe</h2>
<form method="post" action="addEquipe.php" enctype="multipart/form-data">
      <!--<div class="form-group">
       <label>Identifiant d'equipe </label>
       <input type="text" class="form-control" name="id_equipe" placeholder="Identifiant d'equipe">
    </div>-->
    <div class="form-group">
      <label>Nom d'equipe </label>
      <input type="text" class="form-control" name="nom_equipe"  placeholder="Nom d'equipe">
    </div>
    <div class="form-group">
      <label>Ville d'équipe </label>
      <input type="text" class="form-control" name="ville_equipe" placeholder="Ville d'équipe">
    </div> 
    <div class="form-group">
      <label>Ligue </label>
      <input type="text" class="form-control" name="id_ligue" placeholder="Ligue">
    </div>
    <div class="form-group">
      <label>Titres d'équipe </label>
      <input type="text" class="form-control" name="titres_equipe"  placeholder="Titres d'équipe" >
    </div>
     <div class="form-group">
      <label>Groupe </label>
      <input type="text" class="form-control" name="id_groupe" placeholder="Groupe">
    </div>
    
    <div class="form-group">
      <label>Notes d'équipe  </label>
      <input type="text" class="form-control" name="notes" placeholder="Notes d'équipe ">
    </div>
     <div class="form-group">
      <label>Drapo d'équipe  </label>
      <input type="file" class="" name="image" placeholder="Drapo d'équipe ">
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