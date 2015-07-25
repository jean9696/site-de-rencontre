 <?php 
        session_start();
        include '../fonctions/connexionBDD.php'; 
		include '../fonctions/fonctions.php'; 
		$req = $bdd->prepare('DELETE FROM `30_nuances_de_mecs`.`utilisateurs` WHERE pseudo = ?');	
		$req->execute(array($_POST['pseudo']));
		$donnees = $req->fetch();
   ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body onload="document.nav.submit()">
	<?php if ($_SESSION['pseudo']==$_POST['pseudo']) {  ?>
	<form name ="nav" action="../user/" method="post">
          <input type="hidden" name="pageParametre" id="pageParametre" value="infos">
          <input type="hidden" name="valide" id="valide" value="<?php echo $success ?>">
   </form>
   <?php 
	} else { ?>
   <form name ="nav" action="../admin/" method="post">
          <input type="hidden" name="valide" id="valide" value="<?php echo $success ?>">
   </form>
	<?php } ?>
</body>
</html>



