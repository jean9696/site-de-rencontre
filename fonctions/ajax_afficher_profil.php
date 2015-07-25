<!-- //Cette fonction va renvoyer du code html ! Donc pas de traitement vraiment possible après mais c'est stylé comme ça -->

<?php 
	include 'connexionBDD.php'; 
	$req = $bdd->prepare('SELECT *, (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateDeNaissance)), \'%Y\')+0) as age FROM utilisateurs WHERE pseudo = ?');	
	$req->execute(array($_POST['pseudo']));
	$donnees = $req->fetch();
	$dateDeNaissance= trim($donnees['dateDeNaissance']);
	$dateDeNaissance=date("d/m/Y", strtotime($dateDeNaissance));
?>

	<div class="row">
		<div class="col-sm-6">
			<p><img class="photo-fiche-profil" src=<?php echo $donnees['photoProfil'] ?>></p>
		</div>
		<div class="col-sm-6">
			<div class="menu-profil">
				<a href="#" class="active" value="general"><span>Général</span></a>
				<a href="#" value="apparence"><span>Apparence</span></a>
				<a href="#" value="interets"><span>Interêts</span></a>
				<a href="#" value="photos"><span>Photos</span></a>
			</div>

			<div id="general"class="section-profil">
				<p>Né<?php if($donnees['sexe']=='Femme') echo 'e';  ?> le <?php echo $dateDeNaissance ?></p>
				<p>Je suis un<?php if($donnees['sexe']=='Femme') echo 'e'; echo ' '.$donnees['sexe'] ?></p>
				<p>J'habite à <?php echo $donnees['ville'] ?></p>
				<p>Mon statut maritial : <?php echo $donnees['marital'] ?></p>
				<p>Je suis plutôt <?php echo $donnees['personnalite'] ?></p>
				<p>Mon niveau d'études <?php echo $donnees['etudes'] ?></p>
				<p><?php echo $donnees['description'] ?></p>
				
			</div>

			<div id="apparence" class="section-profil hidden">
				<p>Yeux : <?php echo $donnees['yeux'] ?></p>
				<p>Cheveux : <?php echo $donnees['cheveux'] ?></p>
				<p>Silhouette : <?php echo $donnees['silhouette'] ?></p>
				<p>Origine ethnique : <?php echo $donnees['ethnique'] ?></p>
			</div>

			<div id="interets" class="section-profil hidden">
				<h4>Interêts</h4>
				<p><?php echo substr($donnees['interets'], 0, -1); ?></p>
				<h4>Activités sportives</h4>
				<p><?php echo substr($donnees['sportives'], 0, -1); ?></p>
				<h4>Goûts musicaux</h4>
				<p><?php echo substr($donnees['musique'], 0, -1); ?></p>
			</div>

			<div id="photos" class="section-profil hidden">
				<p><img class="photo-fiche-profil-min" src=<?php echo $donnees['photoProfil'] ?>></p>
				<p><img class="photo-fiche-profil-min" src=<?php echo $donnees['photo1'] ?>></p>
				<p><img class="photo-fiche-profil-min" src=<?php echo $donnees['photo2'] ?>></p>
				<p class="alert alert-info">Cliquer sur une photo pour l'agrandir</p>
			</div>
			<p class="signaler"><a href="javascript:signaler()">Signaler cet utilisateur</a></p>    
		</div>
 	</div>







