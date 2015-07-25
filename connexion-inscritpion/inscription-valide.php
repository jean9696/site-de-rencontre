 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/connexion-inscritpion/inscription-valide.php')   header('Location: ../fonctions/404.php'); 
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

  <title>Inscription validé !</title>

  <!-- JQUERY  -->
  <script src="../bootstrap/js/jquery-1.11.2.min.js" type="text/javascript"></script>


  <!-- Bootstrap  CSS -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  <link href="../bootstrap/css/fileinput.min.css" rel="stylesheet">

  <!-- Bootstrap JQuerry -->
  <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../bootstrap/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
  <script src="../bootstrap/js/fileinput.min.js" type="text/javascript"></script>
  <script src="../bootstrap/js/fileinput_locale_fr.js" type="text/javascript"></script>

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
          <form class="navbar-form navbar-right" action="../connexion-inscritpion/" method="POST">
            <div class="form-group">
              <input name="mail" type="text" placeholder="Mail" class="form-control">
            </div>
            <div class="form-group">
              <input name="password" type="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
              <button name="connexion" value="connexion" type="submit" class="btn btn-danger">Connexion</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </nav>




  <div class="gros-message-page">
    <p style="font-family: 'main-font';">Bienvenue parmis nous <?php if(isset($_POST['pseudo'])) echo $_POST['pseudo'];  ?> !</p>
    <form action="../connexion-inscritpion/" method="POST">
            <div class="form-group col-md-4 col-md-offset-4">
              <button name="connexion" value="connexion" type="submit" class="btn btn-connexion">Acceder à mon espace</button>
            </div>
          </form>
  </div>
 
  <?php 
  //**** Activation du compte ***//


        //########## IMAGES ##########

        $nomDossier = md5(uniqid(rand(), true));
        $dossier ='../images/users/'.$nomDossier.'/';
        if(!mkdir($dossier, 0777, true)) echo "Echec lors de la création du dossier utilisateur";;

        $extension_photo1 = strtolower(substr(strrchr($_FILES['photo1']['name'],'.'),1));
        $extension_photo2 = strtolower(substr(strrchr($_FILES['photo2']['name'],'.'),1));
        $extension_photo3 = strtolower(substr(strrchr($_FILES['photo3']['name'],'.'),1));

        if($extension_photo1=='') $extension_photo1 ="jpg";
        if($extension_photo2=='') $extension_photo2 ="jpg";
        if($extension_photo3=='') $extension_photo3 ="jpg";

        $photo1=$dossier.'photo1.'.$extension_photo1;
        $photo2=$dossier.'photo2.'.$extension_photo2;
        $photo3=$dossier.'photo3.'.$extension_photo3;


        $resultat1 = move_uploaded_file($_FILES['photo1']['tmp_name'],$photo1);
        move_uploaded_file($_FILES['photo2']['tmp_name'],$photo2);
        move_uploaded_file($_FILES['photo3']['tmp_name'],$photo3);
        if (!$resultat1) echo 'Transfert d\'images échoué';


        //########## DATE ##########

        //transformation date en format SQL => YYYY-MM-DD
         //transformation date en format SQL => YYYY-MM-DD
        $dateEntree=date("Y-m-d", strtotime($_POST['date']));

        //########## BASE DE DONNEES ##########

        //Création du compte
        $req = $bdd->prepare('INSERT INTO utilisateurs (id,pseudo,sexe,dateDeNaissance,mdp,mail,dateInscription) VALUES (\'\',?,?,?,?,?,NOW());');
        $req->execute(array(conv_char($_POST['pseudo']),conv_char($_POST['sexe']),$dateEntree,conv_char($_POST['mdp']),conv_char($_POST['mail'])));
		

		    //A propos de vous
        $req = $bdd->prepare('UPDATE utilisateurs SET ville = ?, marital = ?, personnalite = ?, etudes= ?, profession= ? WHERE ? = pseudo;');
        $req->execute(array(conv_char($_POST['ville']),conv_char($_POST['marital']),conv_char($_POST['personnalite']),conv_char($_POST['etudes']),conv_char($_POST['profession']),conv_char($_POST['pseudo'])));

        //Votre apparence
        $req = $bdd->prepare('UPDATE utilisateurs SET yeux = ?, cheveux = ?, silhouette = ?, ethnique= ? WHERE ? = pseudo;');
        $req->execute(array(conv_char($_POST['yeux']),conv_char($_POST['cheveux']),conv_char($_POST['silhouette']),conv_char($_POST['ethnique']),conv_char($_POST['pseudo'])));

        //Vos centres d'intérêts
        $sportives = ""; 
        foreach ($_POST['sportives'] as $value) {
          $sportives .= $value.";";
        }
        $interets = "";
        foreach ($_POST['interets'] as $value) {
          $interets .= $value.";";
        }
        $musique = "";
        foreach ($_POST['musique'] as $value) {
          $musique .= $value.";";
        }

        $req = $bdd->prepare('UPDATE utilisateurs SET sportives = ?, interets = ?, musique = ? WHERE ? = pseudo;');
        $req->execute(array(conv_char($sportives),conv_char($interets),conv_char($musique),conv_char($_POST['pseudo'])));

        //Description
        $req = $bdd->prepare('UPDATE utilisateurs SET description = ? WHERE ? = pseudo;');
        $req->execute(array(conv_char($_POST['description']),conv_char($_POST['pseudo'])));

        //images
        $req = $bdd->prepare('UPDATE utilisateurs SET photoProfil = ?,photo1 = ?,photo2 = ? WHERE ? = pseudo;');
        $req->execute(array($photo1,$photo2,$photo3,conv_char($_POST['pseudo'])));



        $req->closeCursor();


        //########## SESSIONS ##########
        
        $_SESSION['pseudo'] = conv_char($_POST['pseudo']);
        $_SESSION['statut'] = "gratuit";
        $_SESSION['sexe'] = $_POST['sexe'];
   ?>


<!-- fond -->
<img class="fond" src="../images/paris.jpg">


</body>
</html>


<!-- CHARGEMENTS DES SCRIPTS -->
<script type="text/javascript" src="../javascript/formulaire.js"></script>