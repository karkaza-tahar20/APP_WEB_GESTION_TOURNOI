  <?php 
    //$id_equipe=$_POST['id_equipe'];
    $nom_equipe=$_POST['nom_equipe'];
    $ville_equipe=$_POST['ville_equipe'];
    $titres_equipe=$_POST['titres_equipe'];
    $notes=$_POST['notes'];
    $dir="img";
    $image=$dir."/".$_FILES['image']['name'];
    $id_ligue=$_POST['id_ligue'];
    $id_groupe=$_POST['id_groupe'];
    //$drapo="img/".$image;
    if( $nom_equipe=="" ||  $ville_equipe=="" ||  $titres_equipe=="" ||  $notes=="" ||  $id_ligue=="" ||  $id_groupe==""){
      header("location:ajouterEquipe.php?id=1");
    }else{
    include('../traitement_sql.php');
    $dao=new DAO();
    $dao->ajouterEquipe($nom_equipe,$image,$id_ligue,$ville_equipe,$titres_equipe,$notes,$id_groupe);
    header("location:listesEquipes.php");
}

 ?>