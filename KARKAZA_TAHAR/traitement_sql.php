<?php 
	class DAO{
		function connexion(){
			return new PDO("mysql:host=localhost;dbname=gesttournoi","root","20002000");
		}
		function authentification($login,$password){
			$pdo=$this->connexion();
			$req="select * from administrateurs where login='".$login."' and password='".$password."'";
			$rep=$pdo->query($req);
			if($rep->fetch()){
			$rep->closeCursor();
				return true;
			}else{
			$rep->closeCursor();
				return false;
			}
		}
		function listeEquipe(){
			$pdo=$this->connexion();
			$lstLivres=array();
			$rep=$pdo->query("select  equipes.id_equipe,equipes.nom_equipe,equipes.ville_equipe,equipes.titres_equipe,equipes.id_ligue,equipes.notes,equipes.image,groupes.nom_groupe FROM equipes,groupes WHERE equipes.id_groupe=groupes.id_groupe ");
			while($row=$rep->fetch()){
				$lstLivres[]=array("id_equipe"=>$row['id_equipe'],"nom_equipe"=>$row['nom_equipe'],"image"=>$row['image'],"ville_equipe"=>$row['ville_equipe'],"titres_equipe"=>$row['titres_equipe'],"notes"=>$row['notes'],"id_ligue"=>$row['id_ligue'],"nom_groupe"=>$row['nom_groupe']);
			}
			$rep->closeCursor();
			return $lstLivres;
		}
		function listeGroupe(){
			$pdo=$this->connexion();
			$lstEts=array();
			$rep=$pdo->query("select * from groupes");
			while($row=$rep->fetch()){
				$lstEts[]=array("id_groupe"=>$row['id_groupe'],"nom_groupe"=>$row['nom_groupe'],"equipe1"=>$row['equipe1'],"equipe2"=>$row['equipe2'],"equipe3"=>$row['equipe3'],"equipe4"=>$row['equipe4']);
			}
			$rep->closeCursor();
			return $lstEts;
		}
		function listeTerain(){
			$pdo=$this->connexion();
			$lstTer=array();
			$rep=$pdo->query("select * from terains");
			while($row=$rep->fetch()){
				$lstTer[]=array("id_terain"=>$row['id_terain'],"nom_terain"=>$row['nom_terain'],"ville_terain"=>$row['ville_terain'],"adresse"=>$row['adresse'],"surface"=>$row['surface'],"capacite"=>$row['capacite'],"image"=>$row['image']);
			}
			//$rep->closeCursor();
			return $lstTer;
		}
			function listeMatch(){
			$pdo=$this->connexion();
			$lstTer=array();
			$rep=$pdo->query("select * from matchs");
			while($row=$rep->fetch()){
				$lstTer[]=array("id_match"=>$row['id_match'],"equipe1"=>$row['equipe1'],"image1"=>$row['image1'],"equipe2"=>$row['equipe2'],"image2"=>$row['image2'],"date"=>$row['date'],"heure"=>$row['heure'],"nom_terain"=>$row['nom_terain']);
			}
			//$rep->closeCursor();
			return $lstTer;
		}

	function ajouterEquipe($nom_equipe,$image,$id_ligue,$ville_equipe,$titres_equipe,$notes,$id_groupe){			
			$pdo=$this->connexion();
			$req="insert into equipes(nom_equipe,ville_equipe,titres_equipe,id_groupe,id_ligue,notes,image) values('$nom_equipe','$ville_equipe','$titres_equipe','$id_groupe','$id_ligue','$notes','$image')";
			//$rep=$pdo->query($requete);
			 $stmt=$pdo->prepare($req) ;
             $stmt->execute();

		}
		function ajouterTerain($nom_terain,$ville_terain,$adresse,$surface,$capacite,$image){			
			$pdo=$this->connexion();
			$req="insert into terains (nom_terain,ville_terain,adresse,surface,capacite,image) values('".$nom_terain."','".$ville_terain."','".$adresse."','".$surface."','".$capacite."','".$image."')";
			echo $req;
			//$rep=$pdo->query($requete);
			 $stmt=$pdo->prepare($req) ;
             $stmt->execute();
		}
		function ajouterGroupe($nom_groupe,$equipe1,$equipe2,$equipe3,$equipe4){			
			$pdo=$this->connexion();
			$req="insert into groupes (nom_groupe,equipe1,equipe2,equipe3,equipe4)values ('".$nom_groupe."','".$equipe1."','".$equipe2."','".$equipe3."','".$equipe4."');";
			$stmt=$pdo->prepare($req) ;
            $stmt->execute();
			//$rep->closeCursor();
		}
		function ajouterMatch($equipe1,$image1,$equipe2,$image2,$date,$heure,$nom_terain){			
			$pdo=$this->connexion();
			$req="insert into matchs(equipe1,image1,equipe2,image2,date,heure,nom_terain) values('$equipe1','$image1','$equipe2','$image2','$date','$heure','$nom_terain')";
			//$rep=$pdo->query($requete);
			 $stmt=$pdo->prepare($req) ;
             $stmt->execute();

		}
		function ajouterMessage($email,$nom,$prenom,$mobile,$message){			
			$pdo=$this->connexion();
			$req="insert into messages(email,nom,prenom,mobile,message) values('$email','$nom','$prenom','$mobile','$message')";
			//$rep=$pdo->query($requete);
			 $stmt=$pdo->prepare($req) ;
             $stmt->execute();

		}
		function supprimerEquipe($id_equipe){			
			$pdo=$this->connexion();
			$requete="delete from equipes where id_equipe='".$id_equipe."';";
			$rep=$pdo->query($requete);
			$rep->closeCursor();
		}
		function supprimerGroupe($id_groupe){			
			$pdo=$this->connexion();
			$requete="delete from groupes where id_groupe='".$id_groupe."';";
			echo $requete;
			$rep=$pdo->query($requete);
			$rep->closeCursor();
		}
		function supprimerTerain($id_terain){			
			$pdo=$this->connexion();
			$requete="delete from terains where id_terain='".$id_terain."';";
			$rep=$pdo->query($requete);
			$rep->closeCursor();
		}
		function supprimerMatch($id_match){			
			$pdo=$this->connexion();
			$requete="delete from matchs where id_match='".$id_match."';";
			$rep=$pdo->query($requete);
			$rep->closeCursor();
		}
		function modEquipe($id_equipe,$nom_equipe,$ville_equipe,$titres_equipe,$notes,$id_ligue,$image,$id_groupe){
			$pdo=$this->connexion();
			$lstEts=array();
			$rep=$pdo->query("update equipes set nom_equipe='".$nom_equipe."', ville_equipe='".$ville_equipe."', titres_equipe='".$titres_equipe."', notes='".$notes."', id_ligue='".$id_ligue."', image='".$image."' ,id_groupe='".$id_groupe."' where id_equipe='".$id_equipe."'");
			//$rep->closeCursor();
		}
		function modGroupe($id_groupe,$nom_groupe,$equipe1,$equipe2,$equipe3,$equipe4){
			$pdo=$this->connexion();
			$lstEts=array();
			$rep=$pdo->query("update groupes set nom_groupe='".$nom_groupe."', equipe1='".$equipe1."', equipe2='".$equipe2."', equipe3='".$equipe3."', equipe4='".$equipe4."' where id_groupe='".$id_groupe."'");
			$rep->closeCursor();
		}
		function modTerain($id_terain,$nom_terain,$vilee_terain,$adresse,$surface,$capacite,$image){
			$pdo=$this->connexion();
			$lstEts=array();
			$rep=$pdo->query("update terains set nom_terain='".$nom_terain."', ville_terain='".$vilee_terain."', adresse='".$adresse."', surface='".$surface."', capacite='".$capacite."', image='".$image."' where id_terain='".$id_terain."'");
			$rep->closeCursor();
		}
		function modMatch($id_match,$equipe1,$image1,$equipe2,$image2,$date,$heure,$nom_terain){
			$pdo=$this->connexion();
			$lstEts=array();
			$rep=$pdo->query("update matchs set equipe1='".$equipe1."', image1='".$image1."', equipe2='".$equipe2."', image2='".$image2."', date='".$date."', heure='".$heure."', nom_terain='".$nom_terain."' where id_match='".$id_match."'");
			$rep->closeCursor();
		}
	}


?>