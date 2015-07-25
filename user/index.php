<?php 
session_start();
if(!isset($_SESSION['pseudo'])) header('Location: ../');
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

  <title><?php echo $_SESSION['pseudo']; ?> - Espace utilisateur</title>

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
  <script src="../bootstrap/js/jquery.nicescroll.min.js" type="text/javascript"></script>

  <!-- Custom styles  -->
  <link href="../css/user.less" rel="stylesheet/less">
  <link href="../css/profils.less" rel="stylesheet/less">


  <!-- LESS  -->
  <script src="../bootstrap/js/less.min.js" type="text/javascript"></script>


</head>


<body>

  <?php        
  $req = $bdd->prepare('SELECT photoProfil FROM utilisateurs WHERE pseudo = ?'); 
  $req->execute(array($_SESSION['pseudo']));

  while ($donnees=$req->fetch()) $photoProfil = "<img src=".$donnees['photoProfil']." >";
  ?>


  <nav  class="navbar navbar-default user-navbar navbar-fixed-top">
    <div class="container" style="opacity:1;">
      <a href="../" class="pull-left" style="z-index:4000;position:relative;"><img src="../images/logo.png"></a>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menus">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse menus">
        <form name ="nav" action="" method="post">
          <input type="hidden" name="pageParametre" id="pageParametre">
          <ul class="nav navbar-nav">
            <li><a onclick="document.getElementById('pageParametre').value='tournaments';" href="javascript:document.nav.submit()">Tournaments</a></li>
            <li><a onclick="document.getElementById('pageParametre').value='messages';" href="javascript:document.nav.submit()">Messages</a></li>
            <li><a onclick="document.getElementById('pageParametre').value='profil';" href="javascript:document.nav.submit()">Mon profil</a></li>      
            <li class="pull-right dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><div class="photo-profil nav"><?php echo $photoProfil; ?> </div><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a onclick="document.getElementById('pageParametre').value='infos';" href="javascript:document.nav.submit()">Modifier mes informations</a></li>
                <li><a onclick="document.getElementById('pageParametre').value='abonnement';" href="javascript:document.nav.submit()">Abonnement</a></li>
                <li><a onclick="document.getElementById('pageParametre').value='compte';" href="javascript:document.nav.submit()">Paramètres du compte</a></li>
                <li class="divider"></li>
                <li><a href="../connexion-inscritpion/deconnexion.php">Déconnexion</a></li>
              </ul>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </nav>







  <?php 

      if(isset($_POST['pageParametre']))
        switch ($_POST['pageParametre']) {
          case 'messages':
            include "messages.php";
            break;
          case 'profil':
            include "monProfil.php";
            break;
          case 'infos':
            include "modifierProfil.php";
            break;
          case 'compte':
            include "parametres.php";
            break;
          case 'tournaments':
            include "tournament.php";
            break;
          case 'abonnement':
            include "abonnement.php";
            break;
          
          default:
            include "accueil.php";
            break;
        }
        else  include "accueil.php";
        
    
  ?>  



  <?php include "../fonctions/footer.php"  ?>  

  <!-- fleche permetant de revenir en haut -->
  <a id="btn_up"><img class="fleche-back-top" src="../images/fleche.png"></a>


  <!-- fond -->
  <img class="fond" src="../images/paris.jpg">


</body>
</html>


<!-- CHARGEMENTS DES SCRIPTS 
<script type="text/javascript" src="../javascript/formulaire.js"></script>-->

