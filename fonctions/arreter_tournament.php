<?php 
	session_start();
	include 'connexionBDD.php'; 
	$array = array();
	$req = $bdd->prepare('UPDATE tournaments SET statut=0 WHERE femme=?');	
	$req->execute(array($_GET['pseudo']));
	$req->closecursor();
	if($_SESSION['statut']=="admin") header('Location: ../admin/tournaments.php'); 

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body onload="document.nav.submit()">
   <form name ="nav" action="../user/" method="post">
          <input type="hidden" name="pageParametre" id="pageParametre" value="tournaments">
   </form>
</body>
</html>