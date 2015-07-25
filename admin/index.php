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
          <form class="navbar-form navbar-left" method="GET" role="search">
            <div class="form-group">
              <input type="text" name="recherche" class="form-control" placeholder="Chercher un utilisateur">
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
           <?php menuAdmin(1); ?>



        </div>      
      </div>
	  <?php if (isset ($_POST['valide'])) {echo 'Modification effectuée avec succès';}?>
      
      <div class="col-md-10 content">
      <?php 
              if(isset($_GET['recherche'])) {
                $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo LIKE ? AND NOT statut="admin"'); 
                $req->execute(array($_GET['recherche']));
              } 
              else{ 
                $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE NOT statut="admin"'); 
                $req->execute();
              }
              while ($donnees=$req->fetch()) echo '
        <div class="panel panel-default">
          <div class="panel-heading">
            '.$donnees['pseudo'].'
          </div>
          <div class="panel-body">
            
                <ul class=""> 
                  <li>'.$donnees['mail'].'</li>
                  <li><img height="64" width="64" src='.$donnees['photoProfil'].'><img height="64" width="64" src='.$donnees['photo1'].'><img height="64" width="64" src='.$donnees['photo2'].'></li>
                  <li><a  href="user.php?pseudo='.$donnees['pseudo'].'"><button class="btn btn-success glyphicon glyphicon-eye-open"> Voir</button></a>
                      <a  href="modif.php?pseudo='.$donnees['pseudo'].'"><button class="btn btn-warning glyphicon glyphicon-edit"> Modifier</button></a>
                      <a href="delete.php?pseudo='.$donnees['pseudo'].'"><button class="btn btn-danger glyphicon glyphicon-trash"> Supprimer</button></a></li>
                </ul><br/>      
           
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

