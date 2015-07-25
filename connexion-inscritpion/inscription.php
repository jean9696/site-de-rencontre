 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/connexion-inscritpion/inscription.php')   header('Location: ../fonctions/404.php'); 
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

  <title>Inscription</title>

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
  <link href="../css/user.less" rel="stylesheet/less">

  <!-- LESS  -->
  <script src="../bootstrap/js/less.min.js" type="text/javascript"></script>


</head>


<body>

    <nav  class="navbar user-navbar navbar-fixed-top  navbar-default">
    <div class="container" style="opacity:1;">
    <a href="../" class="pull-left"><img src="../images/logo.png"></a>
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menus">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      </div>
      <div class="navbar-collapse collapse menus">
        
        <form class="navbar-form navbar-right" action="../connexion-inscritpion/" method="POST">
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







  <div class="row">)
    <div class="col-lg-4 col-lg-offset-4 titre-formulaire">
     <p>Inscription</p>
   </div>
 </div>

 <div class="row">
  <fieldset>

    <form class="error-alert" action="../connexion-inscritpion/" method="POST" enctype="multipart/form-data">

      <div id="my_carousel" class="carousel slide col-lg-4 col-lg-offset-4 formulaire-inscription" data-ride="carousel" data-interval="false">
        <!-- Bulles -->
        <ol class="carousel-indicators">
          <li class="active first"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ol>
        <!-- Slides -->
        <div class="carousel-inner">
         
              
          <!--************************************* Page 1 **************************************************-->
          <div class="item active">  
            <div class="carousel-page">
              <p class="partie-formulaire">Création du compte</p>
              <!-- Erreur - formulaire mal rempli -->
              <div class="alert alert-block alert-danger" style="display:none">
              </div>
              <!-- pseudo -->
              <div class="form-group pseudo">
                <div class="input-group">
                  <input name="pseudo" type="text" placeholder="Pseudo" class="form-control pseudo" value=<?php //&&&&&&&&&&&MODIF ARTHUR&&&&&&&&&&&&&&
				  if(isset($_POST["pseudo"])) echo conv_char(htmlspecialchars_decode($_POST["pseudo"])); ?>>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>
                </div>
              </div>
              <!-- Date de naissance -->
              <div class="form-group date">
                <div class="input-group date">
                  <input name="date" type="text" class="form-control date" placeholder="Date de naissance"  value=<?php if(isset($_POST["date"])) echo $_POST["date"]; ?>>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
              <!-- Mail -->
              <div class="form-group mail">
               <div class="input-group">
                <input name="mail" type="text" placeholder="Mail" class="form-control mail" value=<?php //&&&&&&&&&&&MODIF ARTHUR&&&&&&&&&&&&&& 
				if(isset($_POST["mail"])) echo conv_char(htmlspecialchars_decode($_POST["mail"])); ?>>
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-envelope"></i>
                </span>
              </div>
            </div>
            <!-- Sexe -->
            <div class="form-group sexe">
              <div class="input-group">
                <select name="sexe" class="form-control sexe" >
                  <option selected disabled>Sexe</option>
                  <option <?php if(isset($_POST["sexe"])&&$_POST["sexe"]=="Homme") echo "selected" ?>>Homme</option>
                  <option <?php if(isset($_POST["sexe"])&&$_POST["sexe"]=="Femme") echo "selected" ?>>Femme</option>
                </select>
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-heart"></i>
                </span>
              </div>
            </div>
            <!-- Mot de passe 1 -->
            <div class="form-group mdp">
             <div class="input-group">
              <input name="mdp" type="password" placeholder="Mot de passe" class="form-control mdp mdp1">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-lock"></i>
              </span>
            </div>
          </div>
          <!-- Mot de passe 2 -->
          <div class="form-group mdp">
           <div class="input-group">
            <input name="mdp2" type="password" placeholder="Confirmation mot de passe" class="form-control mdp mdp2">
            <span class="input-group-addon">
              <i class="mdp glyphicon glyphicon-lock"></i>
            </span>
          </div>
        </div>
          <input id="changerSlide" value="non" style="display:none">
          <button name="inscription" value="inscription" type="button" class="btn btn-primary obligatoire">Etape suivante</button>    
     </div> 
    </div>   
    <!--************************************* Page 2 **************************************************-->
    <div class="item"> 
      <div class="carousel-page">
      <p class="partie-formulaire">A propos de vous</p>



      <!-- Ville #ville-->
        <div class="form-group marital">
          <label class=" control-label" for="inputbasic">Ville</label>
          <div>
            <input id="ville" name="ville" class="form-control" placeholder="Veuillez entrer le nom de votre ville">
          </div>
        </div>

        <!-- Statut marital #marital-->
        <div class="form-group marital">
          <label class=" control-label" for="selectbasic">Statut marital</label>
          <div >
            <select id="marital" name="marital" class="form-control">
            </select>
          </div>
        </div>

        <!-- Personnalité #personnalite-->
        <div class="form-group personnalite">
          <label class=" control-label" for="selectbasic">Votre personnalité</label>
          <div >
            <select id="personnalite" name="personnalite" class="form-control">
            </select>
          </div>
        </div>

        <!-- Niveau d'étude #etudes-->
        <div class="form-group etudes">
          <label class=" control-label" for="selectbasic">Votre niveau d'étude</label>
          <div>
            <select id="etudes" name="etudes" class="form-control">
            </select>
          </div>
        </div>

        <!-- Profession #profession BON LA J'AI LA FLEMME -->

        <div class="form-group profession">
          <label class=" control-label" for="selectbasic">Votre profession</label>
          <div>
            <select id="profession" name="profession" class="form-control">
            </select>
          </div>
        </div>

        <a href="#my_carousel" data-slide="prev">
          <button name="inscription" value="inscription" type="button" class="btn btn-primary">Retour</button>
        </a>
        <a href="#my_carousel" data-slide="next">
          <button name="inscription" value="inscription" type="button" class="btn btn-primary">Etape suivante</button>
        </a>

      </div> 
    </div>  
    <!--************************************* Page 3 **************************************************-->
    <div class="item">  
      <div class="carousel-page">
        <p class="main-text">Votre apparence</p>
      </div>  

      <!-- Couleur des yeux #yeux-->
        <div class="form-group yeux">
          <label class=" control-label" for="selectbasic">La couleur de vos yeux</label>
          <div >
            <select id="yeux" name="yeux" class="form-control">
            </select>
          </div>
        </div>

      <!-- Couleur des cheveux #cheveux-->
        <div class="form-group cheveux">
          <label class=" control-label" for="selectbasic">La couleur de vos cheveux</label>
          <div >
            <select id="cheveux" name="cheveux" class="form-control">
            </select>
          </div>
        </div>

      <!-- Silhouette #silhouette-->
        <div class="form-group silhouette">
          <label class=" control-label" for="selectbasic">Votre silhouette</label>
          <div >
            <select id="silhouette" name="silhouette" class="form-control">
            </select>
          </div>
        </div>

      <!-- Origine ethnique #ethnique-->
        <div class="form-group ethnique">
          <label class=" control-label" for="selectbasic">Votre origine ethnique</label>
          <div >
            <select id="ethnique" name="ethnique" class="form-control">
            </select>
          </div>
        </div>



      <a href="#my_carousel" data-slide="prev">
          <button name="inscription" value="inscription" type="button" class="btn btn-primary">Retour</button>
        </a>
        <a href="#my_carousel" data-slide="next">
          <button name="inscription" value="inscription" type="button" class="btn btn-primary">Etape suivante</button>
        </a>
    </div>
    <!--************************************* Page 4 **************************************************-->
    <div class="item" style="height:600px;">  
      <div class="carousel-page">
        <p class="main-text">Vos centres d'intérêts</p>
      </div>  

      <!-- Activités sportives #sportives-->
        <div class="form-group sportives">
          <label class=" control-label" for="selectmultiple">Vos activités sportives</label>
          <div >
            <select id="sportives" name="sportives[]" class="form-control multiple" multiple="multiple">
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
              <option value="Reggae">Regae</option>
              <option value="Slam">Slam</option>
              <option value="Patrick Sébastien">Patrick Sébastien</option>
              <option value="♫ J'suis pas chasseur mais j'lui mettrais bien une cartouche ♫">J'suis pas chasseur mais j'lui mettrais bien une cartouche ♫</option>
            </select>
          </div>
        </div>




      <a href="#my_carousel" data-slide="prev">
          <button name="inscription" value="inscription" type="button" class="btn btn-primary">Retour</button>
        </a>
        <a href="#my_carousel" data-slide="next">
          <button name="inscription" value="inscription" type="button" class="btn btn-primary">Etape suivante</button>
        </a>
    </div>
    <!--************************************* Page 5 **************************************************-->
    <div class="item">  
      <div class="carousel-page">
        <p class="main-text">Décrivez vous !</p>
      </div>  

      <!-- Description #description-->
        <div class="form-group description">
          <div >
            <textarea placeholder="Décrivez vous en quelques mots" id="description" name="description" class="form-control" style="resize:none; height: 300px;"></textarea>
          </div>
        </div>



      <a href="#my_carousel" data-slide="prev">
          <button name="inscription" value="inscription" type="button" class="btn btn-primary">Retour</button>
        </a>
        <a href="#my_carousel" data-slide="next">
          <button name="inscription" value="inscription" type="button" class="btn btn-primary">Etape suivante</button>
        </a>
    </div>
    <!--************************************* Page 6 **************************************************-->
    <div class="item">  
      <div class="carousel-page">
        <p class="main-text">Photos de vous</p>
        <!-- Photo de profil -->
        <div class="form-group photo1">
          <input name="photo1" id="photo1" type="file" class="file" data-min-file-count="1">
        </div>
        <!-- Photo de profil 2-->
        <div class="form-group photo1">
          <input name="photo2" id="photo2" type="file" class="file" >
        </div>
        <!-- Photo de profil 3-->
        <div class="form-group photo1">
          <input name="photo3" id="photo3" type="file" class="file">
        </div>

        <button name="inscription-valide" value="inscription-valide" type="submit" class="btn btn-connexion" style="margin-bottom:50px;">Finaliser mon inscritpion</button>
        <a href="#my_carousel" data-slide="prev">
          <button name="inscription" value="inscription" type="button" class="btn btn-primary">Retour</button>
        </a>
        
    </div>  
    </div>     
  
  </div>
</div>
</div>

</form>

</fieldset>






<?php include "../fonctions/footer.php" ?>  


<!-- fleche permetant de revenir en haut -->
<a id="btn_up"><img class="fleche-back-top" src="../images/fleche.png"></a>

<!-- fond -->
<img class="fond" src="../images/paris.jpg">



</body>
</html>


<!-- CHARGEMENTS DES SCRIPTS -->
<script type="text/javascript" src="../javascript/formulaire.js"></script>

