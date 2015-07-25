<?php

	session_start();
	include 'connexionBDD.php'; 

	$req = $bdd->prepare('SELECT pretendants, pretendants2 FROM tournaments WHERE femme = ? AND statut = 1');
    $req->execute(array($_POST['femme']));
    $donnees = $req->fetch();
    $pretendants = $donnees['pretendants'];
    $pretendants2 = $donnees['pretendants2'];
    $pretendants2 .= $_SESSION['pseudo'].";";
    $pretendants = str_replace($_SESSION['pseudo'].";", "", $pretendants);

    //normalement ca valide que si on a bine validé (logique) et que y a pas plus de 10 personnes qui ont déjà accepté, par contre ça prévient personne que y a plus de 10 personnes mais ca on s'en tape
	if($_POST['valide'] && substr_count($pretendants2, ';') < 10) $req = $bdd->prepare('UPDATE tournaments SET pretendants=:pretendants, pretendants2=:pretendants2  WHERE femme = :pseudo AND statut = 1');
	else $req = $bdd->prepare('UPDATE tournaments SET pretendants=:pretendants  WHERE femme = :pseudo AND statut = 1');
    $req->execute(array('pretendants' => $pretendants,'pseudo' => $_POST['femme'], 'pretendants2' => $pretendants2));

?>