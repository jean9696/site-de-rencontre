 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/connexion-inscritpion/connexion.php')   header('Location: ../fonctions/404.php'); 
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

  <title>Connexion</title>

  <!-- JQUERY  -->
  <script src="../bootstrap/js/jquery-1.11.2.min.js" type="text/javascript"></script>


  <!-- Bootstrap  CSS -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap JQuerry -->
  <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

  <!-- Custom styles  -->
  <link href="../css/user.less" rel="stylesheet/less">

  <!-- LESS  -->
  <script src="../bootstrap/js/less.min.js" type="text/javascript"></script>


</head>


<body>





  <nav  class="navbar user-navbar navbar-fixed-top navbar">
    <div class="container" style="opacity:1;">
      <div class="navbar-header">
        <a href="../"><img src="../images/logo.png"></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="navbar-collapse collapse">
        </div>
      </div>
    </div>
  </nav>







  <div class="row">
    <div class="col-lg-4 col-lg-offset-4 titre-formulaire">
     <p>Connexion</p>
   </div>
 </div>

 <div class="row">
  <fieldset class="col-lg-4 col-lg-offset-4 formulaire-inscription">
  <div class="fiche-profil-img photo-center">
     <img src="../images/user.png">
  </div>
  <form action="../connexion-inscritpion/" method="POST">
      <?php 
          if (isset($_POST['mail'])||isset($_POST['mdp'])) {
            echo '<div class="alert alert-block alert-danger">
                     <p>Vos identifiants sont incorrects ! Veuillez réessayer</p>
                   </div>';
          }

       ?>      
      <div class="form-group">
        <input name="mail" type="text" placeholder="Mail" class="form-control" <?php if(isset($_POST["mail"])) echo "value=".$_POST["mail"]; ?> >
      </div>
      <div class="form-group">
        <input name="mdp" type="password" placeholder="Mot de passe" class="form-control" <?php if(isset($_POST["mdp"])) echo "value=".$_POST["mdp"]; ?>>
       <a href="#" onclick="alert('Tant pis pour toi !')"><p style="color:#00166A;">Mot de passe oublié ?</p></a>
      </div>
      <div class="form-group">
        <button name="connexion" value="connexion" type="submit" class="btn btn-connexion">Connexion</button>
      </div>
      <p class="main-text">Pas encore inscrit ?</p>
      <div class="form-group">
        <button name="inscription" value="inscription" type="submit" class="btn btn-connexion">S'inscrire</button>
      </div>
    </form>  
  </fieldset>



</div>





<?php include "../fonctions/footer.php" ?>  


<!-- fleche permetant de revenir en haut -->
<a id="btn_up"><img class="fleche-back-top" src="../images/fleche.png"></a>


<!-- fond -->
<img class="fond" src="../images/paris.jpg">


</body>
</html>


<!-- CHARGEMENTS DES SCRIPTS -->
<script type="text/javascript" src="../javascript/formulaire.js"></script>