<?php 
session_start();
include 'connexionBDD.php'; 
$req = $bdd->prepare('SELECT *, (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateDeNaissance)), \'%Y\')+0) as age FROM utilisateurs WHERE pseudo = ?');	
$req->execute(array($_POST['pseudo']));
$donnees = $req->fetch();
$dateDeNaissance= trim($donnees['dateDeNaissance']);
$dateDeNaissance=date("d-m-Y", strtotime($dateDeNaissance));
?>

<div class="row">
	<div class="col-sm-12 ">
		<div class="menu-profil">
			<a href="#" class="active" value="general"><span>Général</span></a>
			<a href="#" value="apparence"><span>Apparence</span></a>
			<a href="#" value="interets"><span>Interêts</span></a>
			<a href="#" value="photos"><span>Photos</span></a>
		</div>

		<form class="error-alert" action="../fonctions/validerModificationProfil.php" method="POST" enctype="multipart/form-data">
			<input name="pseudo" type="text" class="hidden" value=<?php echo $_POST['pseudo']; ?>>
			<!-- ********************** PAGE GENERALE **************************** -->
			<div id="general"class="section-profil col-sm-6 col-sm-offset-3">


				<select name="sexe" class="form-control sexe hidden" >
					<option <?php if($_SESSION['sexe']=="Homme") echo "selected" ?>>Homme</option>
					<option <?php if($_SESSION['sexe']=="Femme") echo "selected" ?>>Femme</option>
				</select>
				<!-- Date de naissance -->
				<div class="form-group date">
					<label class=" control-label" for="inputbasic">Date de Naissance</label>
					<div class="input-group date">
						<input name="date" type="text" class="form-control date" value=<?php echo $dateDeNaissance; ?>>
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-calendar"></i>
						</span>
					</div>
				</div>
				<!-- Ville #ville-->
				<div class="form-group marital">
					<label class=" control-label" for="inputbasic">Ville</label>
					<div>
						<input id="ville" name="ville" class="form-control" value='<?php echo $donnees['ville']; ?>'>
					</div>
				</div>

				<!-- Statut marital #marital-->
				<div class="form-group marital">
					<label class=" control-label" for="selectbasic">Statut marital</label>
					<div >
						<select id="marital" name="marital" class="form-control" value='<?php echo $donnees['marital']; ?>'>
						</select>
					</div>
				</div>

				<!-- Personnalité #personnalite-->
				<div class="form-group personnalite">
					<label class=" control-label" for="selectbasic">Votre personnalité</label>
					<div >
						<select id="personnalite" name="personnalite" class="form-control" value='<?php echo $donnees['personnalite']; ?>'>
						</select>
					</div>
				</div>

				<!-- Niveau d'étude #etudes-->
				<div class="form-group etudes">
					<label class=" control-label" for="selectbasic">Votre niveau d'étude</label>
					<div>
						<select id="etudes" name="etudes" class="form-control" value='<?php echo $donnees['etudes']; ?>'>
						</select>
					</div>
				</div>

				<!-- Profession #profession BON LA J'AI LA FLEMME -->

				<div class="form-group profession">
					<label class=" control-label" for="selectbasic">Votre profession</label>
					<div>
						<select id="profession" name="profession" class="form-control" value='<?php echo $donnees['profession']; ?>'>
						</select>
					</div>
				</div>
				<!-- Description #description-->
				<div class="form-group description">
					<div >
						<textarea id="description" name="description" class="form-control" style="resize:none; height: 300px;"><?php echo $donnees['description']; ?></textarea>
					</div>
				</div>
			</div>


			<!-- ********************** PAGE APPARENCE **************************** -->

			<div id="apparence" class="section-profil hidden col-sm-6 col-sm-offset-3">
				<!-- Couleur des yeux #yeux-->
				<div class="form-group yeux">
					<label class=" control-label" for="selectbasic">La couleur de vos yeux</label>
					<div >
						<select id="yeux" name="yeux" class="form-control" value='<?php echo $donnees['yeux']; ?>'>
						</select>
					</div>
				</div>

				<!-- Couleur des cheveux #cheveux-->
				<div class="form-group cheveux">
					<label class=" control-label" for="selectbasic">La couleur de vos cheveux</label>
					<div >
						<select id="cheveux" name="cheveux" class="form-control" value='<?php echo $donnees['cheveux']; ?>'>
						</select>
					</div>
				</div>

				<!-- Silhouette #silhouette-->
				<div class="form-group silhouette">
					<label class=" control-label" for="selectbasic">Votre silhouette</label>
					<div >
						<select id="silhouette" name="silhouette" class="form-control" value='<?php echo $donnees['silhouette']; ?>'>
						</select>
					</div>
				</div>

				<!-- Origine ethnique #ethnique-->
				<div class="form-group ethnique">
					<label class=" control-label" for="selectbasic">Votre origine ethnique</label>
					<div >
						<select id="ethnique" name="ethnique" class="form-control" value='<?php echo $donnees['ethnique']; ?>'>
						</select>
					</div>
				</div>
			</div>


			<!-- ********************** PAGE INTERETS **************************** -->
			<div id="interets" class="section-profil hidden col-sm-8 col-sm-offset-4" style="height:500px;">
				<!-- Activités sportives #sportives-->
				<div class="form-group sportives">
					<label class=" control-label" for="selectmultiple">Vos activités sportives</label>
					<div >
					<select id="sportives" name="sportives[]" class="form-control multiple" multiple="multiple" ?>">
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
			</div>



			<!-- ********************** PAGE PHOTO **************************** -->
			<!-- BON, le cache des navigateurs fait n'importe quoi, il sauvegarde les anciennes photos et on voit pas les nouvelles, je sais pas comment faire du coup. -->
			<div id="photos" class="section-profil hidden col-sm-6 col-sm-offset-3">
				<div class="alert alert-warning"> 
					<p> Il est possible que la photo ne change pas tout de suite, mais elle sera bel et bien modifiée !</p>
       			</div>
				<p><img style="	min-height:250px;" class="photo-fiche-profil photo1" src=<?php echo $donnees['photoProfil'] ?>></p>
				<div class="form-group ">
					<input name="photo1" id="photo1" type="file" class="file">
				</div>
				<p><img style="	min-height:250px;" class="photo-fiche-profil photo2" src=<?php echo $donnees['photo1'] ?>></p>
				<div class="form-group ">
					<input name="photo2" id="photo2" type="file" class="file" >
				</div>
				<p><img style="	min-height:250px;" class="photo-fiche-profil photo3" src=<?php echo $donnees['photo2'] ?>></p>
				<div class="form-group ">
					<input name="photo3" id="photo3" type="file" class="file">
				</div>
			</div>
			<div class="row">
				<button class="btn btn-success col-sm-4 col-sm-offset-4 valider" type="submit"> Valider <span class="glyphicon glyphicon-ok-circle"></span></button>
			</div>

		</form>

	</div>
</div>

<script type="text/javascript" src="../javascript/formulaire.js"></script>