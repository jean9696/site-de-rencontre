 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/tournament/afficher_reponses.php')   header('Location: ../../fonctions/404.php'); 
 ?>
<div class="row">
	 <div class="col-md-8 col-md-offset-2 box" style="margin-top:150px;">
	 	<div class="titre">Ils ont répondu !</div>
	 	</br>
		<div class="col-md-offset-2 col-md-8 infos alert alert-info " style="text-align: center;">
			<p>Si vous acceptez un homme, vous pourrez lui envoyer des messages ! Une fois que vous avez validé, allez voir dans la rubrique messages !</p>
		</div>
			<div class="list-group">
		 			<?php  
					// on va utiliser le même truc que pour les matchs
					$req = $bdd->prepare('SELECT question, reponses FROM tournaments  WHERE femme=? AND statut=2');	
					$req->execute(array($_SESSION['pseudo']));

					//on affiche
					$aucunReponse = true;
					while ($donnees=$req->fetch()) {
						echo '<div class="col-md-offset-2 col-md-8 infos alert alert-success " style="text-align: center;">';
						echo '<h2>Votre question était : <br>'.$donnees['question'] .'</h2></div>';


						$reponses = listeToTab($donnees['reponses']);
						foreach ($reponses as $key => $value) {
							if( $value != ''){
								$tab = explode(":",$value);
								echo '<div class="col-md-12 list-group-item" style="text-align: center;">';
														echo '<div class="col-md-12">';
																echo '<p>'.$tab[1].'</p>';
																echo '<p class="hidden">'.$value.';</p>';
																echo '<p class="hidden">'.$tab[0].'</p>';
															echo '<p>
																	<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
																		<button class="btn btn-success"><span class="glyphicon glyphicon-heart"></span></button>
																	</p>';
															echo '</div>';
																	
													echo '</div>';
							}
						}
							
						$aucunReponse = false;
					}
					if($aucunReponse) echo 'Vous n\'avez pas de reponse, revenez plus tard !';
			?>
		</div>
	</div>
</div>

<script type="text/javascript" src="../javascript/valider_reponse.js"></script>