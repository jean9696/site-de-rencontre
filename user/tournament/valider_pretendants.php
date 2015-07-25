 <?php  
  	session_start();
  	include '../../fonctions/connexionBDD.php';
  	if(!isset($_POST['question'])) header('Location: ../fonctions/404.php'); //si on veut gruger

  	$req = $bdd->prepare('UPDATE tournaments SET statut=2, question = ?  WHERE femme = ? AND statut = 1');
    $req->execute(array($_POST['question'],$_SESSION['pseudo']));


 ?>


<!-- c'est pas forcément beau (j'en sais rien), mais ca permet de faire des trucs cools ! -->
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body onload="document.nav.submit()">
   <form name ="nav" action="../" method="post">
          <input type="hidden" name="pageParametre" id="pageParametre" value="tournaments">
          <input type="hidden" name="valide" id="valide" value="<?php echo $success ?>">
   </form>
</body>
</html>
