 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/choix_mecs.php')   header('Location: ../fonctions/404.php'); 
 ?>
<div class="row">
	 <div class="col-md-8 col-md-offset-2 box" style="margin-top:150px;">
	 	<div class="titre">Sélection des prétendants</div>
	 	</br>
		<div class="col-md-offset-2 col-md-8 infos alert alert-info " style="text-align: center;">
				<p>Prétendants sélectionnés :<span id="selectonnes">0</span></p>
				<p>Prétendants manquants :<span id="manquants">15</span></p><br>
				<form action="../user/" method="post">
					 <input type="hidden" name="pageParametre" id="pageParametre" value="tournament">
					<button class="btn btn-success valider" type="submit"> Valider mes choix</button>
				</form>
				
		</div>
	 	<?php  
				$req = $bdd->prepare("SELECT pseudo, (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateDeNaissance)), '%Y')+0) as age, photoProfil FROM utilisateurs WHERE sexe='Homme' ORDER BY RAND() LIMIT 30");	
				$req->execute();

				while ($donnees=$req->fetch()) {

					echo '<div class="col-md-4 choix-profil">';
						echo '<div class="col-md-5" style="padding-top:20%">';
							echo '<p>'.$donnees['pseudo'].'</p>';
							echo '<p>'.$donnees['age'].' ans</p>';
							echo '<a href="" data-toggle="modal" data-target="#myModal" class="voirProfil">Voir profil</a>';
						echo '</div>';
						echo '<div class="fiche-profil-img" ><img src="'.$donnees['photoProfil'].'"></div>';
						
					echo '</div>';
				}
				
		?>
	</div>
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

<script src="../javascript/choix_profil.js" type="text/javascript"></script>
<script src="../javascript/profils.js" type="text/javascript"></script>