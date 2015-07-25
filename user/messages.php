 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/messages.php')   header('Location: ../fonctions/404.php'); 
 ?>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 fenetre-contacts-messages" >
      <div class="col-md-3 fenetre-contacts">
        <h1>CONTACTS</h1>
        <?php afficherContacts($_SESSION['pseudo'],$bdd); ?>
      </div>
      
      
      <!-- Fenetre qui s'ouvre avec le profil et qu'on rempli en AJAX parce qu'on est trop forts-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Fiche profil</h4>
            </div>
            <div class="modal-body">  

            </div>    
          </div>
        </div>
      </div>

      <div class="col-md-9 fenetre-messages">
        <div class="messages-affiche">
          <div>
            <h2>Sélectionner un contact</h2>
          </div>     
        </div>
        <img src="../images/chargement.gif" alt="chargement" class="chargement hidden"> 
        <form class="messages-envoie" method="POST" action="#">
          <div class="col-sm-9">
            <textarea name="message" class="form-control zone-message" style="resize: none;"></textarea>
          </div>
          <div class="col-sm-3">
            <button class="btn btn-danger glyphicon glyphicon-send btn-send" onclick="return false"><span>Envoyer</span></button>
          </div>
        </form>
      </div>
    </div>
  </div>


<script type="text/javascript" src="../bootstrap/js/ion.sound.min.js"></script>
<script type="text/javascript" src="../javascript/messages.js"></script>
<script type="text/javascript" src="../javascript/profils.js"></script>