<?php

	session_start();
	include 'connexionBDD.php'; 

	$req = $bdd->prepare('SELECT pretendants3,reponses FROM tournaments WHERE femme = ? AND statut = 2');
    $req->execute(array($_SESSION['pseudo']));
    $donnees = $req->fetch();
    $pretendants = $donnees['pretendants3'];
    $pretendants .= $_POST['pseudo'].";";
    $reponses = str_replace($_POST['reponse'], "", $donnees['reponses']);

    //on actualise le tournament et on le clos si y a plus 5 personnes acceptées
	if($_POST['valide'] && substr_count($pretendants3, ';') < 5) $req = $bdd->prepare('UPDATE tournaments SET pretendants3=:pretendants, reponses=:reponses WHERE femme = :pseudo AND statut = 2');
	else $req = $bdd->prepare('UPDATE tournaments SET reponses=:reponses WHERE femme = :pseudo AND statut = 2');
    $req->execute(array('pretendants' => $pretendants,'pseudo' => $_SESSION['pseudo'], 'reponses' => $reponses));

    //on crée la conv
    
    if($_POST['valide']) {
            $req = $bdd->prepare('SELECT id FROM utilisateurs WHERE pseudo = ?');
            $req->execute(array($_SESSION['pseudo']));
            $donnees = $req->fetch() ;
            $interlocuteur1 = $donnees['id'];
            $req = $bdd->prepare('SELECT id FROM utilisateurs WHERE pseudo = ?');
            $req->execute(array($_POST['pseudo']));
            $donnees = $req->fetch() ;
            $interlocuteur2 = $donnees['id'];
            
            $req = $bdd->prepare('INSERT INTO conv (id, interlocuteur1, interlocuteur2, interlocuteur3, interlocuteur4, interlocuteur5, vu1, vu2, vu3, vu4, vu5) VALUES (NULL, ?, ?, \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\')');
            $req->execute(array($interlocuteur1,$interlocuteur2));
    }

?>