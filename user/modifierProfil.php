 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/monProfil.php')   header('Location: ../fonctions/404.php'); 
 ?>
<div class="row">
	 <div class="col-lg-8 col-lg-offset-2 profil-user">
	 	<div class="col-md-4">
			<h1 id="pseudo"><?php echo $_SESSION['pseudo'] ?></h1>
		</div>
		<div class="alert alert-success col-md-4 col-md-offset-4 <?php if(!isset($_POST['valide'])) echo 'hidden' ; elseif($_POST['valide']==false) echo 'hidden'?>"> 
			<p> Informations modifiées</p>
        </div>
        <div class="alert alert-danger col-md-4 col-md-offset-4 <?php if(!isset($_POST['valide'])) echo 'hidden'; elseif($_POST['valide']==true) echo 'hidden'?>"> 
			<p> Erreur dans la transmission de données</p>
        </div>
		<div class="row">
		</div>
		<hr>
	</div>
</div>


<script src="../bootstrap/js/jquery.sumoselect.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../javascript/modifierProfils.js"></script>
