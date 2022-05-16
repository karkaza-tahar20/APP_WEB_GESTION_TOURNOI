  <?php 
   
    //$id_terain=$_POST['id_terain'];
    //$id_equipe=$_POST['id_equipe'];
    $equipe1=$_POST['equipe1'];
    $dir="img";
    $image1=$dir."/".$_FILES['image1']['name'];
    $equipe2=$_POST['equipe2'];
    $image2=$dir."/".$_FILES['image2']['name']; 
    $date=$_POST['date'];
    $heure=$_POST['heure'];
    $nom_terain=$_POST['nom_terain'];
    if( $date=="" ||  $heure=="" ||  $nom_terain=="" ||  $equipe1=="" ||  $image1=="" ||  $equipe2=="" ||  $image2=="" ){
      header("location:ajouterMatch.php?id=1");
    }else{
    include('../traitement_sql.php');
    $dao=new DAO();
    $dao->ajouterMatch($equipe1,$image1,$equipe2,$image2,$date,$heure,$nom_terain);
    header("location:listesMatchs.php");
}

 ?>