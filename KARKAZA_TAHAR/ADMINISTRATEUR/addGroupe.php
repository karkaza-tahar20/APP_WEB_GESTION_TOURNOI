  <?php 
    $nom_groupe=$_POST['nom_groupe'];
    $equipe1=$_POST['equipe1'];
    $equipe2=$_POST['equipe2'];
    $equipe3=$_POST['equipe3'];
    $equipe4=$_POST['equipe4'];
    if( $nom_groupe=="" ||  $equipe1=="" ||  $equipe2=="" ||  $equipe3=="" ||  $equipe4==""){
      header("location:ajouterGroupe.php?id=1");
    }else{
    require('../traitement_sql.php');
    $dao=new DAO();
    $dao->ajouterGroupe($nom_groupe,$equipe1,$equipe2,$equipe3,$equipe4);
    header("location:listesGroupes.php");
  }
 ?>