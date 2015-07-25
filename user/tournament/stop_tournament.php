 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/tournament/stop_tournament.php') header('Location: ../fonctions/404.php'); 
 ?>


<div class="row">
	 <div class="col-md-8 col-md-offset-2 box">
	 	<div class="titre">Vous voulez arrêter ici ?</div>
	 	<div class="row" style="padding-bottom:300px">
	 		<form action="../fonctions/arreter_tournament.php" method="GET" accept-charset="utf-8" class="col-md-10 col-md-offset-1" style="text-align:center;">
		        <br><br><br><br><!-- Baaah c'est pas beau -->
		        <input type="text" name="pseudo" value="<?php echo $_SESSION['pseudo'];?>" class="hidden">
				<button class="btn btn-connexion " type="submit">Arrêter le tournament</button>
			</form>
	 	</div>
	</div>
</div>
