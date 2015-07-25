 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/parametres.php')   header('Location: ../fonctions/404.php'); 
 ?>
<div class="row">
	 <div class="col-lg-8 col-lg-offset-2 box" style="margin-top:150px">
	 	<div class="col-md-4">
			<h3 id="pseudo"><?php echo $_SESSION['pseudo'] ?> - Paramètres du compte</h3>
		</div>
		<div class="row">
		</div>
		<hr>
		<div class="alert alert-success col-md-4 col-md-offset-4 <?php if(!isset($_POST['valide'])) echo 'hidden' ; elseif($_POST['valide']==false) echo 'hidden'?>"> 
			<p> Informations modifiées</p>
        </div>
        <div class="alert alert-danger col-md-4 col-md-offset-4 <?php if(!isset($_POST['valide'])) echo 'hidden'; elseif($_POST['valide']==true) echo 'hidden'?>"> 
			<p>Votre mot de passe ne correspond pas</p>
        </div>
        <div class="alert alert-danger col-md-4 col-md-offset-4 hidden" id="alert-mdp"> 
			<p>Les nouveaux mot de passe ne correspondent pas</p>
        </div>
        <div class="alert alert-danger col-md-4 col-md-offset-4 hidden" id="alert-mdp2"> 
			<p>Veuillez entrer un nouveau mot de passe</p>
        </div>
        <div class="row">
		</div>
		<form action="../fonctions/modifier_parametres_compte.php" method="POST" class="col-md-6 col-md-offset-3">
			<h4>Modifier mot de passe</h4>
			<div class="form-group">
           		<input name="mdpActuel" type="password" placeholder="Mot de passe actuel" class="form-control">
         	</div>
         	<div class="form-group">
           		<input name="nouveauMdp" type="password" placeholder="Nouveau mot de passe" class="form-control">
         	</div>
         	<div class="form-group">
           		<input name="confirmationMdp" type="password" placeholder="Confirmation mot de passe" class="form-control">
         	</div>
         	<div class="col-md-offset-4">
         		<button name="validerMdp" value="validerMdp" type="submit" class="btn btn-success" style="margin-bottom:50px;">Appliquer les modifications</button>
			</div>
		</form>
		<div class="col-md-6 col-md-offset-3">
			<h4>Supprimer mon compte</h4>
			<div class="alert alert-block alert-danger hidden" id="alert-captcha">
				<p>Le captcha entré est incorrect, veuillez réessayer... </p>
			</div>


			<div class="col-md-offset-3 col-md-6">
				<img src="../images/captcha.jpg" alt="captcha" style="width:100%">
				<div class="form-group">
           			<input name="captcha" type="text" placeholder="Veuillez recopier le texte de l'image" class="form-control">
         		</div>
			</div>

			<div class="col-md-offset-4">
         		<button name="validerCaptcah" id="captcha" value="validerCaptcah" type="button" class="btn btn-danger" style="margin-bottom:50px;">Supprimer mon compte</button>
			</div>
		</div>
	</div>
</div>


<script src="../javascript/compte.js" type="text/javascript" charset="utf-8" async defer></script>