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

    <!-- Bootstrap JQuerry -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap-datepicker.fr.js" type="text/javascript"></script>
    <script src="../bootstrap/js/fileinput.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/fileinput_locale_fr.js" type="text/javascript"></script>

    <!-- Custom styles  -->
    <link href="../css/admin.less" rel="stylesheet/less">

    <!-- LESS  -->
    <script src="../bootstrap/js/less.min.js" type="text/javascript"></script>
	<!-- JS -->
	<script type="text/javascript" src="../javascript/profils.js"></script>
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
              </div><!-- /.navbar-collapse -->
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
		<div class="col-sm-6">
			<p><img class="photo-fiche-profil" src=<?php echo $donnees['photoProfil'] ?>></p>
		</div>
		<div class="col-sm-6">
			<div class="menu-profil">
				<a href="#" class="active" value="general"><span>Général</span></a>
				<a href="#" value="apparence"><span>Apparence</span></a>
				<a href="#" value="interets"><span>Interêts</span></a>
				<a href="#" value="photos"><span>Photos</span></a>
			</div>

			<div id="general"class="section-profil">
				<p>Né<?php if($donnees['sexe']=='Femme') echo 'e';  ?> le <?php echo $dateDeNaissance ?></p>
				<p>Je suis un<?php if($donnees['sexe']=='Femme') echo 'e'; echo ' '.$donnees['sexe'] ?></p>
				<p>J'habite à <?php echo $donnees['ville'] ?></p>
				<p>Mon statut maritial : <?php echo $donnees['marital'] ?></p>
				<p>Je suis plutôt <?php echo $donnees['personnalite'] ?></p>
				<p>Mon niveau d'études <?php echo $donnees['etudes'] ?></p>
				<p><?php echo $donnees['description'] ?></p>
				
			</div>

			<div id="apparence" class="section-profil hidden">
				<p>Yeux : <?php echo $donnees['yeux'] ?></p>
				<p>Cheveux : <?php echo $donnees['cheveux'] ?></p>
				<p>Silhouette : <?php echo $donnees['silhouette'] ?></p>
				<p>Origine ethnique : <?php echo $donnees['ethnique'] ?></p>
			</div>

			<div id="interets" class="section-profil hidden">
				<h4>Interêts</h4>
				<p><?php echo substr($donnees['interets'], 0, -1); ?></p>
				<h4>Activités sportives</h4>
				<p><?php echo substr($donnees['sportives'], 0, -1); ?></p>
				<h4>Goûts musicaux</h4>
				<p><?php echo substr($donnees['musique'], 0, -1); ?></p>
			</div>

			<div id="photos" class="section-profil hidden">
				<p><img height="130" width="120" class="photo-fiche-profil-min" src=<?php echo $donnees['photoProfil'] ?>></p>
				<p><img height="130" width="120" class="photo-fiche-profil-min" src=<?php echo $donnees['photo1'] ?>></p>
				<p><img height="130" width="120" class="photo-fiche-profil-min" src=<?php echo $donnees['photo2'] ?>></p>
				<p class="alert alert-info">Cliquer sur une photo pour l'agrandir</p>
			</div>

		</div>
		</div>
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





