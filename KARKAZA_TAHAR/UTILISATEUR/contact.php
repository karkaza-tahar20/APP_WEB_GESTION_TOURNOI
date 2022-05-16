
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>

	<a href="interfaceutilisateur.php"><img src="img/felchgauche.png"></a>
	<div class="container">
	<form method="POST" >
		<h2>Contact Us</h2>
		<div class="row100">
			<div class="col">
				<div class="inputBox">
				  <input type="text" name="nom" required="required">	
				  <span class="text">First Name</span>
				  <span class="line"></span>
				</div>
			</div>
			<div class="col">
				<div class="inputBox">
				  <input type="text" name="prenom" required="required">	
				  <span class="text">Last Name</span>
				  <span class="line"></span>
				</div>
			</div>
		</div>
		<div class="row100">
			<div class="col">
				<div class="inputBox">
				  <input type="email" name="email" required="required">	
				  <span class="text">Email</span>
				  <span class="line"></span>
				</div>
			</div>
			<div class="col">
				<div class="inputBox">
				  <input type="mobile" name="mobile" required="required">	
				  <span class="text">Mobile</span>
				  <span class="line"></span>
				</div>
			</div>
		</div>
		<div class="row100">
			<div class="col">
				<div class="inputBox textarea">
				  <textarea class="required" name="message"></textarea>	
				  <span class="text">Type your message Here...</span>
				  <span class="line"></span>
				</div>
			</div>
		</div>
		 <?php 
        if(isset($_GET['id'])){
         ?>       
        <span style="color: red;">
          Remplisez les champs vides !!
        </span>
      <?php } echo"<br>"?>
        <div class="row100">
			<div class="col">
				<input type="submit" value="Send" name="btn">
			</div>
		</form>
	   </div>
        <?php
       if(isset($_POST['btn'])){ 
		    $email=$_POST['email'];
		    $nom=$_POST['nom'];
		    $prenom=$_POST['prenom'];
		    $mobile=$_POST['mobile'];
		    $message=$_POST['message'];
		    if( $message=="" ||  $mobile=="" ||  $prenom=="" ||  $nom=="" ||  $email=="" ){
		      header("location:contact.php?id=1");
		    }else{
		    include('../traitement_sql.php');
		    $dao=new DAO();
		    $dao->ajouterMessage($email,$nom,$prenom,$mobile,$message);
		    echo "<script>alert(\"Le Message est Bien Envoyer \")</script>";
		    //header("location:contact.php");
   } 
}  

 ?>
</body>
</html>