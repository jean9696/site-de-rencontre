<?php 
	session_start();
	include 'connexionBDD.php'; 
	$array = array();
	$req = $bdd->prepare('SELECT mdp FROM utilisateurs WHERE pseudo = ?');	
	$req->execute(array($_SESSION['pseudo']));
	
	$success=true;
	$donnees = $req->fetch();
	$motDepasseActuel = $donnees['mdp'];
	if($motDepasseActuel == $_POST['mdpActuel']){
		$req = $bdd->prepare('UPDATE utilisateurs set mdp=? WHERE pseudo = ?');	
		$req->execute(array($_POST['nouveauMdp'],$_SESSION['pseudo']));



	}
	else $success=false;

	$req->closecursor();


?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body onload="document.nav.submit()">
   <form name ="nav" action="../user/" method="post">
          <input type="hidden" name="pageParametre" id="pageParametre" value="compte">
          <input type="hidden" name="valide" id="valide" value="<?php echo $success ?>">
   </form>
</body>
</html>