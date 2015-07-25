 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/tournament/homme.php') header('Location: ../fonctions/404.php'); 
 ?>
<div class="row">
	 <div class="col-md-8 col-md-offset-2 box" style="margin-top:150px;">
	 	<div class="titre">Vos tournaments</div>
	 	<div class="row">
	 		<?php  
				$req = $bdd->prepare('SELECT ut.pseudo, (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(ut.dateDeNaissance)), \'%Y\')+0) as age, ut.photoProfil, trnmt.question, trnmt.statut FROM utilisateurs ut, tournaments trnmt WHERE trnmt.pretendants2 LIKE \'%'.$_SESSION['pseudo'].'%\' AND trnmt.femme = ut.pseudo AND trnmt.reponses NOT LIKE \'%'.$_SESSION['pseudo'].'%\'');	
		$req->execute();
			$tournaments=false;
			while ($donnees=$req->fetch()) {
					$tournaments=true;
					echo '<div class="col-md-4 col-md-offset-4">';
						echo '<div class="col-md-5" style="padding-top:20%">';
							echo '<p>'.$donnees['pseudo'].'</p>';
							echo '<p>'.$donnees['age'].' ans</p>';
							echo '<a href="" data-toggle="modal" data-target="#myModal" class="voirProfil">Voir profil</a>';
						echo '</div>';
						echo '<div class="fiche-profil-img" ><img src="'.$donnees['photoProfil'].'"></div>';						
					echo '</div>';
		echo'
		</div>
	 	</hr>
	 	<div class="row " style="padding-bottom:300px; text-align:center">
			<h2>Etape ' . $donnees['statut'] .'</h2>';
	 			
			}	
		if(!$tournaments) echo '<h2 style="text-align:center">Vous n\'avez pas de tournament actif</h2>';
		?>
		</div>
				</div>
			</div>';	

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

<script src="../javascript/profils.js" type="text/javascript"></script>