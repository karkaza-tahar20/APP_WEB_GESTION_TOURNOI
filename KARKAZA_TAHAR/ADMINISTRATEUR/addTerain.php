 <?php 
    //$id_terain=$_POST['id_terain'];
    $nom_terain=$_POST['nom_terain'];
    $ville_terain=$_POST['ville_terain'];
    $adresse=$_POST['adresse'];
    $surface=$_POST['surface'];
    $Capacite=$_POST['Capacite'];
    $dir="img";
    $image=$dir."/".$_FILES['image']['name'];
     if( $nom_terain=="" ||  $ville_terain=="" ||  $adresse=="" ||  $surface=="" ||  $Capacite==""){
      header("location:ajouterTerain.php?id=1");
    }else{
    require('../traitement_sql.php');
    $dao=new DAO();
    $dao->ajouterTerain($nom_terain,$ville_terain,$adresse,$surface,$Capacite,$image);
    header("location:listesTerains.php");
}
 ?>