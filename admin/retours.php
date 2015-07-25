<?php 
  session_start();
  if(!isset($_SESSION['pseudo'])OR ($_SESSION['statut']!='admin')) header('Location: ../');
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


  </head>


  <body>

    <nav class="navbar navbar-default navbar-static-top">
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
          <div class="navbar-brand" href="../">
          <img src="../images/logo.png" style="width:60px; display:inline; margin: 0 25px; margin-top:-10px;">
            <p style="display:inline;">Administrateur</p>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
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
           <?php menuAdmin(2); ?>



        </div>      
      </div>
	  <?php if (isset ($_POST['valide'])) {echo 'Modification effectuée avec succès';}?>
      
      <div class="col-md-10 content">
      <?php 
                $req = $bdd->prepare('SELECT * FROM signalements'); 
                $req->execute();

              while ($donnees=$req->fetch()) echo '
        <div class="panel panel-default">
          <div class="panel-heading">
            Utilisateur reporté : '.$donnees['utilisateur'].'
          </div>
          <div class="panel-body">
            <p>'.$donnees['message'].'</p>
                <p>  <a href="index.php?recherche='.$donnees['utilisateur'].'">Voir son profil</a></p>
           
            </div>
          </div>'; 
         ?>
        </div>
        <footer class="pull-left footer">
          <p class="col-md-12">
            <hr class="divider">  
            Tous droits réservés &copy 2015 - EISTI
          </p>
        </footer>
      </div>


    </body>
    </html>

