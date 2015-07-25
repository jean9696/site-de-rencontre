<!-- Copie de la fonction ajax afficher profil -->
<?php 
  /*session_start();
  if(!isset($_SESSION['pseudo'])OR ($_SESSION['statut']!='admin')) header('Location: ../');*/
  include '../fonctions/connexionBDD.php'; 
  include '../fonctions/fonctions.php'; 
  ?>



  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Admin</title>

    <!-- JQUERY  -->
    <script src="../bootstrap/js/jquery-1.11.2.min.js" type="text/javascript"></script>


    <!-- Bootstrap  CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="../bootstrap/css/fileinput.min.css" rel="stylesheet">
      <link href="../bootstrap/css/sumoselect.css" rel="stylesheet">

    <!-- Bootstrap JQuerry -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap-datepicker.fr.js" type="text/javascript"></script>
    <script src="../bootstrap/js/fileinput.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/fileinput_locale_fr.js" type="text/javascript"></script>
 	 <script src="../bootstrap/js/jquery.sumoselect.min.js" type="text/javascript"></script>

    <!-- Custom styles  -->
    <link href="../css/admin.less" rel="stylesheet/less">

    <!-- LESS  -->
    <script src="../bootstrap/js/less.min.js" type="text/javascript"></script>
	
	<!-- JS -->
	<script type="text/javascript" src="../javascript/formulaire.js"></script>
	<script type="text/javascript" src="../javascript/profils.js"></script>
	<script type="text/javascript" src="../javascript/modifierProfils.js"></script>
	

  </head>


  <body><nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
          </button>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand" href="#">
          <img src="../images/logo.png" style="width:60px; display:inline; margin: 0 25px; margin-top:-10px;">
            <p style="display:inline;">Administrateur</p>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
          <form class="navbar-form navbar-left" method="GET" role="search">
            <div class="form-group">
              <input type="text" name="q" class="form-control" placeholder="Chercher un utilisateur">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../connexion-inscritpion/deconnexion.php">Se déconnecter</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>    
    <div class="container-fluid main-container">
      <div class="col-md-2 sidebar">
        <div class="row">
          <!-- uncomment code for absolute positioning tweek see top comment in css -->
          <div class="absolute-wrapper"> </div>
          <!-- Menu -->
          <div class="side-menu">
            <nav class="navbar navbar-default" role="navigation">
               <?php menuAdmin(1); ?>
            </nav>

          </div>
        </div>      
      </div>
      
<?php 
	$req = $bdd->prepare('SELECT *, (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateDeNaissance)), \'%Y\')+0) as age FROM utilisateurs WHERE pseudo = ?');	
	$req->execute(array($_GET['pseudo']));
	$donnees = $req->fetch();
	$dateDeNaissance= trim($donnees['dateDeNaissance']);
	$dateDeNaissance=date("d/m/Y", strtotime($dateDeNaissance));
?>
<div class="col-md-10 content">
	<div class="panel panel-default">
          <div class="panel-heading">
            <?php echo $donnees['pseudo'] ?>
          </div>
          <div class="panel-body">
	<div class="row">
	<div class="col-sm-12 ">

		<form class="error-alert" action="../fonctions/validerModificationProfil.php" method="POST" enctype="multipart/form-data">
			<input name="pseudo" type="text" class="hidden" value=<?php echo $_GET['pseudo']; ?>>
			<!-- ********************** PAGE GENERALE **************************** -->
			<div id="general" class="section-profil col-sm-6 col-sm-offset-3">

				<label class=" control-label" for="inputbasic">Sexe</label>
				<select name="sexe" class="form-control sexe " value="<?php echo $sexe; ?>" >
					<option>Homme</option>
					<option>Femme</option>
				</select>
				<!-- Date de naissance -->
				<div class="form-group date">
					<label class=" control-label" for="inputbasic">Date de Naissance</label>
					<div class="input-group date">
						<input name="date" type="text" class="form-control date" value=<?php echo $dateDeNaissance; ?>>
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-calendar"></i>
						</span>
					</div>
				</div>
				<!-- Ville #ville-->
				<div class="form-group marital">
					<label class=" control-label" for="inputbasic">Ville</label>
					<div>
						<input id="ville" name="ville" class="form-control" value='<?php echo $donnees['ville']; ?>'>
					</div>
				</div>

				<!-- Statut marital #marital-->
				<div class="form-group marital">
					<label class=" control-label" for="selectbasic">Statut marital</label>
					<div >
						<select id="marital" name="marital" class="form-control" value='<?php echo $donnees['marital']; ?>'>
						</select>
					</div>
				</div>

				<!-- Personnalité #personnalite-->
				<div class="form-group personnalite">
					<label class=" control-label" for="selectbasic">Votre personnalité</label>
					<div >
						<select id="personnalite" name="personnalite" class="form-control" value='<?php echo $donnees['personnalite']; ?>'>
						</select>
					</div>
				</div>

				<!-- Niveau d'étude #etudes-->
				<div class="form-group etudes">
					<label class=" control-label" for="selectbasic">Votre niveau d'étude</label>
					<div>
						<select id="etudes" name="etudes" class="form-control" value='<?php echo $donnees['etudes']; ?>'>
						</select>
					</div>
				</div>

				<!-- Profession #profession BON LA J'AI LA FLEMME -->

				<div class="form-group profession">
					<label class=" control-label" for="selectbasic">Votre profession</label>
					<div>
						<select id="profession" name="profession" class="form-control" value='<?php echo $donnees['profession']; ?>'>
						</select>
					</div>
				</div>
				<!-- Description #description-->
				<div class="form-group description">
					<div >
						<textarea id="description" name="description" class="form-control" style="resize:none; height: 300px;"><?php echo $donnees['description']; ?></textarea>
					</div>
				</div>
			</div>


			<!-- ********************** PAGE APPARENCE **************************** -->

			<div id="apparence" class="section-profil col-sm-6 col-sm-offset-3">
				<!-- Couleur des yeux #yeux-->
				<div class="form-group yeux">
					<label class=" control-label" for="selectbasic">La couleur de vos yeux</label>
					<div >
						<select id="yeux" name="yeux" class="form-control" value='<?php echo $donnees['yeux']; ?>'>
						</select>
					</div>
				</div>

				<!-- Couleur des cheveux #cheveux-->
				<div class="form-group cheveux">
					<label class=" control-label" for="selectbasic">La couleur de vos cheveux</label>
					<div >
						<select id="cheveux" name="cheveux" class="form-control" value='<?php echo $donnees['cheveux']; ?>'>
						</select>
					</div>
				</div>

				<!-- Silhouette #silhouette-->
				<div class="form-group silhouette">
					<label class=" control-label" for="selectbasic">Votre silhouette</label>
					<div >
						<select id="silhouette" name="silhouette" class="form-control" value='<?php echo $donnees['silhouette']; ?>'>
						</select>
					</div>
				</div>

				<!-- Origine ethnique #ethnique-->
				<div class="form-group ethnique">
					<label class=" control-label" for="selectbasic">Votre origine ethnique</label>
					<div >
						<select id="ethnique" name="ethnique" class="form-control" value='<?php echo $donnees['ethnique']; ?>'>
						</select>
					</div>
				</div>
			</div>


			<!-- ********************** PAGE INTERETS **************************** -->
			<div id="interets" class="section-profil col-sm-8 col-sm-offset-4" style="height:500px;">
				<!-- Activités sportives #sportives-->
				<div class="form-group sportives">
					<label class=" control-label" for="selectmultiple">Vos activités sportives</label>
					<div >
					<select id="sportives" name="sportives[]" class="form-control multiple" multiple="multiple" ?>">
							<option value="Course">Course</option>
							<option value="Musculation">Musculation</option>
							<option value="Foot">Foot</option>
							<option value="Rugby">Rugby</option>
							<option value="Tennis">Tennis</option>
							<option value="Equitation">Equitation</option>
							<option value="Danse">Danse</option>
							<option value="Basket">Basket</option>
							<option value="Hand">Hand</option>
							<option value="Voiles">Voiles</option>
							<option value="Volley">Volley</option>
							<option value="Extrême">Extrême</option>
							<option value="Sports de chambres">Sports de chambres</option>
						</select>
					</div>
				</div>

				<!-- Centres d'intérêts #interets-->
				<div class="form-group interets">
					<label class=" control-label" for="selectmultiple">Vos centres d'intérêt</label>
					<div >
						<select id="interets" name="interets[]" class="form-control multiple" multiple="multiple">
							<option value="Cinéma">Cinéma</option>
							<option value="Lecture">Lecture</option>
							<option value="Cuisine">Cuisine</option>
							<option value="Télévision">Télévision</option>
							<option value="Jeux vidéo">Jeux vidéo</option>
							<option value="Nature">Nature</option>
							<option value="Animaux">Animaux</option>
							<option value="Tricot">Tricot</option>
							<option value="Collections">Collections</option>
							<option value="Théatre">Théatre</option>
							<option value="Ménage (pour les femmes)">Ménage(pour les femmes)</option>
							<option value="Les patates">Les patates</option>
							<option value="Dieu">Dieu</option>
							<option value="Sports de chambre">Sports de chambre</option>
						</select>
					</div>
				</div>

				<!-- Gouts musicaux #musique-->
				<div class="form-group musique">
					<label class=" control-label" for="selectmultiple">Vos goûts en matière de musique</label>
					<div >
						<select id="musique" name="musique[]" class="form-control multiple" multiple="multiple">
							<option value="Pop">Pop</option>
							<option value="Rock">Rock</option>
							<option value="Rap">Rap</option>
							<option value="Metal">Metal</option>
							<option value="Blues">Blues</option>
							<option value="Jazz">Jazz</option>
							<option value="Electro">Electro</option>
							<option value="Gospel">Gospel</option>
							<option value="Regae">Regae</option>
							<option value="Slam">Slam</option>
							<option value="Patrick Sébastien">Patrick Sébastien</option>
							<option value="♫ J'suis pas chasseur mais j'lui mettrais bien une cartouche ♫">J'suis pas chasseur mais j'lui mettrais bien une cartouche ♫</option>
						</select>
					</div>
				</div>
			</div>



			<!-- ********************** PAGE PHOTO **************************** -->
			<!-- BON, le cache des navigateurs fait n'importe quoi, il sauvegarde les anciennes photos et on voit pas les nouvelles, je sais pas comment faire du coup. -->
			<div id="photos" class="section-profil  col-sm-6 col-sm-offset-3">
				<p><img style="	min-height:250px;" class="photo-fiche-profil photo1" src=<?php echo $donnees['photoProfil'] ?>></p>
				<div class="form-group ">
					<input name="photo1" id="photo1" type="file" class="file">
				</div>
				<p><img style="	min-height:250px;" class="photo-fiche-profil photo2" src=<?php echo $donnees['photo1'] ?>></p>
				<div class="form-group ">
					<input name="photo2" id="photo2" type="file" class="file" >
				</div>
				<p><img style="	min-height:250px;" class="photo-fiche-profil photo3" src=<?php echo $donnees['photo2'] ?>></p>
				<div class="form-group ">
					<input name="photo3" id="photo3" type="file" class="file">
				</div>
			</div>
			<div class="row">
				<button class="btn btn-success col-sm-4 col-sm-offset-4 valider" type="submit"> Valider <span class="glyphicon glyphicon-ok-circle"></span></button>
			</div>

		</form>

	</div>
</div>

<script type="text/javascript" src="../javascript/formulaire.js"></script>
          </div>
 	</div>
	</div>
        <footer class="pull-left footer">
          <p class="col-md-12">
            <hr class="divider">  
            Tous droits réservés &copy 2015 - EISTI
          </p>
        </footer>

</body>
</html>





