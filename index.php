<?php 
session_start();
if (isset($_SESSION['pseudo'])) { 
  header('Location: connexion-inscritpion/');
} 

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>30 nuances de mecs</title>

  <!-- JQUERY  -->
  <script src="bootstrap/js/jquery-1.11.2.min.js" type="text/javascript"></script>


  <!-- Bootstrap  CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  

  <!-- Bootstrap JQuerry -->
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap-datepicker.fr.js" type="text/javascript"></script>

  <!-- Custom styles  -->
  <link href="css/main-style.less" rel="stylesheet/less">

  <!-- LESS  -->
  <script src="bootstrap/js/less.min.js" type="text/javascript"></script>


</head>

<body>


  <!-- Barre en haut qui change quand on scroll grâce au jquerry  -->
  <!-- permet de se connecter si on est déjà utilisateur et contient le logo  -->

  <nav  class="navbar navbar-fixed-top  navbar-default">
    <div class="container" style="opacity:1;">
    <a href="" class="pull-left"><img src="images/logo.png"></a>
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menus">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      </div>
      <div class="navbar-collapse collapse menus">
        
        <form class="navbar-form navbar-right" action="connexion-inscritpion/" method="POST">
          <div class="form-group">
            <input name="mail" type="text" placeholder="Mail" class="form-control">
          </div>
          <div class="form-group">
            <input name="mdp" type="password" placeholder="Mot de passe" class="form-control">
          </div>
          <div class="form-group">
            <button name="connexion" value="connexion" type="submit" class="btn btn-danger">Connexion</button>
          </div>
          <div class="form-group">
            <button name="inscription" value="inscription" type="submit" class="btn btn-danger btn-inscription">S'inscrire</button>
          </div>
        </form>
      </div>
    </div>
  </nav>







  <!-- Bannière avec l'inscription et un message  -->


  <div class="banniere">


    <div class="container">  
      <div class="col-md-5 col-md-offset-1">
        <h1 class="main-text">
          <?php 
              $nSlogan = rand(1,4);
              $slogan = "";
              switch ($nSlogan) {
                case 1:
                $slogan = "L'amour est aveugle. La preuve, en le faisant il y a des gens qui braillent";
                break;
                case 2:
                $slogan = "Quand notre coeur fait Boum - Tout avec lui dit Boum - Et c'est l'amour qui s'éveille";
                break;
                case 3:
                $slogan = "En amour, il ne s'agit pas d'aimer mais de préferer";
                break;
                case 4:
                $slogan = "L'amour consiste a être bête ensemble";
                break;
                default:
                $slogan = "Y a une couille quelque part";
                break;
              }
              echo "\"".$slogan."\"";

          ?>
        </h1><!-- Phrase d'accroche site random-->

      </div>  
      <div class="col-md-4 ">
        <fieldset class="inscription">
          <form action="connexion-inscritpion/" method="POST">
            <h2>Inscription</h2>
            <div class="form-group">
              <input name="pseudo" type="text" placeholder="Pseudo" class="form-control">
            </div>
            <div class="form-group">
              <div class="input-group date">
          <input name="date" type="text" class="form-control" placeholder="Date de naissance">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-calendar"></i>
          </span>
        </div>
            </div>
            <div class="form-group">
              <input name="mail" type="mail" placeholder="Mail" class="form-control">
            </div>
            <div class="form-group">
              <select name="sexe" class="form-control ">
                <option selected disabled>Sexe</option>
                <option>Homme</option>
                <option>Femme</option>
              </select>
            </div>
            <button name="inscription" value="inscription"  class="btn btn-default">Créer un compte</button>
          </form>
        </fieldset>
      </div>
    </div>
  </div>






  <div class="row">
    <div class="container">
      <div class="section">
        <h1>PRINCIPE DU SITE</h1> 
        
          <br>
            <h4 style="Line-Height: 20pt;">
                    Chaque femme se verra présenter dans un premier temps 25 hommes sélectionnés 

                    soigneuseuement par nos soin selon ses goûts, et 5 heureux élus sélectionnés aléatoirement .

                    Ayant accès à leur profil (photos, goûts), elle doit donc faire un choix : elle sélectionne ses 15 

                    favoris qui continueront la compétition.<br>
                            C’est à ce moment que les hommes rentrent dans la course ; la femme réalise un questionnaire 

                    qui sera soumis aux prétendants. Ces derniers pourront y répondre s’ils sont intéressés, si le 

                    profil ne leur convient pas ils peuvent le décliner. Les dix premiers à répondre au questionnaire 

                    sont sélectionnés pour l’étape suivante.<br>

                    Selon les réponses de ses prétendants, la femme réalise une nouvelle sélection ; seuls 5 

                    hommes résisteront à cette étape. Le chat est alors ouvert, à ce moment seulement les hommes 

                    peuvent discuter personnellement avec la femme, mais ils peuvent également chatter entre eux.

                    Les prétendants peuvent décider de se retirer à tout moment s’ils ne sont plus intéressés par la 

                    personne, et la femme peut éliminer un prétendant quand elle le souhaite jusqu’à ce qu’il n’en 

                    reste plus qu’un : l’heureux élu, le gagnant, l’ex-célibaltaire.<br><br>

                    Longue vie à l’amour !
              </h4>
          

        </div>
      </div>
  </div>



      <div class="row">

        <div id="my_carousel" class="carousel presentation-etapes slide" data-ride="carousel">
          <!-- Bulles -->
          <ol class="carousel-indicators">
            <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my_carousel" data-slide-to="1"></li>
            <li data-target="#my_carousel" data-slide-to="2"></li>
            <li data-target="#my_carousel" data-slide-to="3"></li>
          </ol>
          <!-- Slides -->
          <div class="carousel-inner">
            <!-- Page 1 -->
            <div class="item active">   
              <img src="images/etape1.jpg" alt="etape 1">
              <div class="carousel-page">
                
              </div> 

            </div>   
            <!-- Page 2 -->
            <div class="item"> 
               <img src="images/etape2.jpg" alt="etape 2">
              <div class="carousel-page">
              </div> 
            </div>  
            <!-- Page 3 -->
            <div class="item">  
             <img src="images/etape3.jpg" alt="etape 3">
              <div class="carousel-page">
              </div>  
            </div>
            <!-- Page 4 -->
            <div class="item">  
               <img src="images/etape4.jpg" alt="etape 4">
              <div class="carousel-page">
              </div>  
            </div>     


          </div>

          <!-- Contrôles -->
          <a class="left carousel-control" href="#my_carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#my_carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>

      </div>


      <div class="row">
        
          <div class="section">

            <table class="col-lg-3 col-lg-offset-2 table-offres">
              <tr>
                <th class="table-offres-titre-gratuit ">Abonnement Gratuit</th>
              </tr>
              <tr>
                <td>Premier tournament offert</td>
              </tr>      
              <tr>
                <td>Tu as une seule chance de rencontrer l'amour</td>
              </tr>       
            </table>

            <table class="col-lg-3 col-lg-offset-2 table-offres">
              <tr>
                <th class="table-offres-titre-premium ">Abonnement Premium</th>
              </tr>
              <tr>
                <td>Nombre de tournaments ILLIMITE</td>
              </tr>
              <tr>
                <td>Tu fais plaisir aux devs</td>
              </tr>                
            </table>
          </div>
        
        <hr>
      </div>



      <div class="row">
        <div class="container">
          <div class="section">
            <h1>DERNIERS MEMBRES INSCRITS</h1> 



            <!-- profil 1 -->
            <div class="col-md-3 fiche-profil ">
              <div class="fiche-profil-img photo-profil">
                <img src="images/emma.jpg">
              </div>
              <p>Emma Watson</p>
              <p>25 ans</p>                  
            </div>

            <?php  
                 //Comme on est des petits rigolo, on laisse emma watson en dernier inscrit tout le temps !
                include "fonctions/connexionBDD.php";
                $array = array();
                $req = $bdd->prepare('SELECT (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateDeNaissance)), \'%Y\')+0) as age ,pseudo,photoProfil FROM utilisateurs ORDER BY `dateInscription` DESC LIMIT 3'); 
                $req->execute();
                $donnees = $req->fetch()
            ?>


            <!-- profil 2 -->
            <div class="col-md-3 fiche-profil photo-profil">
              <div class="fiche-profil-img">
                <img src="<?php echo substr($donnees['photoProfil'],3) ?>">
              </div>
              <p><?php echo $donnees['pseudo'] ?></p>
              <p><?php echo $donnees['age'] ?> ans</p>                  
            </div>
              
            <?php  $donnees = $req->fetch() // Passage au suivant, j'aurai pu faire un tableau, mais pourquoi se casser la tête ? ?>
            <!-- profil 3 -->
            <div class="col-md-3 fiche-profil photo-profil">
              <div class="fiche-profil-img">
                <img src="<?php echo substr($donnees['photoProfil'],3) ?>">
              </div>
              <p><?php echo $donnees['pseudo'] ?></p>
              <p><?php echo $donnees['age'] ?> ans</p>                  
            </div>


            <?php  $donnees = $req->fetch() // Passage au suivant, j'aurai pu faire un tableau, mais pourquoi se casser la tête ? ?>
            <!-- profil 4 -->
            <div class="col-md-3 fiche-profil photo-profil">
              <div class="fiche-profil-img">
                <img src="<?php echo substr($donnees['photoProfil'],3) ?>">
              </div>
              <p><?php echo $donnees['pseudo'] ?></p>
              <p><?php echo $donnees['age'] ?> ans</p>                  
            </div>


          </div>
        </div>
      </div>


      <?php include "fonctions/footer.php" ?>  


      <!-- fleche permetant de revenir en haut -->
      <a id="btn_up"><img class="fleche-back-top" src="images/fleche.png"></a>





    </body>
    </html>


    <!-- CHARGEMENTS DES SCRIPTS -->


    <script type="text/javascript" src="javascript/navbar.js"></script>
    <script type="text/javascript" src="javascript/formulaire.js"></script>
