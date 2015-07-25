 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/monProfil.php')   header('Location: ../fonctions/404.php'); 
 ?>
<div class="row">
	 <div class="col-lg-8 col-lg-offset-2 profil-user">
	 	<div class="col-sm-4">
			<h1 id="pseudo"><?php echo $_SESSION['pseudo'] ?></h1>
		</div>
		<div class="col-sm-1 col-sm-offset-5">
			<a onclick="document.getElementById('pageParametre').value='infos';" href="javascript:document.nav.submit()"><span class="btn btn-default">Modifier mon profil  <span class="glyphicon glyphicon-edit"></span></span></a>
		</div>
		<div class="row">
		</div>
		<hr>
	</div>
</div>



<script type="text/javascript" src="../javascript/profils.js"></script>