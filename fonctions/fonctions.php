 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/fonctions/fonctions.php')   header('Location: 404.php'); 
 ?>


<?php  


	function afficherContacts($pseudo,$bdd){

		//on récupère l'id parce qu'on l'avait pas avant parce que je suis un flemmard qui a la flemme de tout changer
        $req = $bdd->prepare('SELECT id FROM utilisateurs WHERE pseudo = ?');
        $req->execute(array($pseudo));
		$donnees = $req->fetch() ;
		$idPseudo = $donnees['id'];
		

		//on récupere les conversations ET DONC les contacts
		$req = $bdd->prepare('SELECT id,interlocuteur1,interlocuteur2,interlocuteur3,interlocuteur4,interlocuteur5 FROM conv WHERE interlocuteur1 = ? OR interlocuteur2 = ? OR interlocuteur3 = ? OR interlocuteur4 = ? OR interlocuteur5 = ?');
        $req->execute(array($idPseudo,$idPseudo,$idPseudo,$idPseudo,$idPseudo));

        $i=1;
        $contacts=NULL;
        $conversation=NULL;
        while ($donnees = $req->fetch()){
        	for ($j=1; $j <= 2; $j++) { //conversations à deux
        		if ($donnees['interlocuteur'.$j]!=$idPseudo&&$donnees['interlocuteur3']==0) {
        			$contacts[$i]= $donnees['interlocuteur'.$j];
        		}      			
        	}
        	//on fera les conv de groupe plus tard
        	$conversation[$i]=$donnees['id'];
        	$i++;		
		}

		if($contacts==NULL) echo "Aucun contact";
		else{
			foreach ($contacts as $key => $value) {
				$req = $bdd->prepare('SELECT pseudo, (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateDeNaissance)), \'%Y\')+0) as age,photoProfil FROM utilisateurs WHERE id = ?');
	        	$req->execute(array($value));
	        	$donnees = $req->fetch();
	        	

				echo "<div id = \"".$conversation[$key]."\" class=\"contact\">
	              <div class=\"photo\">"."<img src=".$donnees['photoProfil']." >"."</div>
	              <div class=\"infos-profil\">
	                <p>".$donnees['pseudo']."</p>

	                <p>".$donnees['age']." ans</p>
	                <p class=\"voirProfil\"><a href=\"\" data-toggle=\"modal\" data-target=\"#myModal\">Voir profil</a></p>
	              </div>
	              <div class=\"nb-messages\">0</div>
	          </div>";
			}
		}
		 $req->closeCursor();
		
	}
	//&&&&&&&&&&&MODIF ARTHUR&&&&&&&&&&&&&&
	function conv_char($text) // Convertir les caractères au format UTF-8 et enlever les balises
	{
		$text = htmlentities($text, ENT_NOQUOTES, "UTF-8");
		return $text;
	}

	function listeToTab($liste){ // renvoie un tableau à partir d'une liste : "zbfa;zubf" 
		return explode(";",$liste);
	}


	function menuAdmin($selection){
		echo '        
          <div class="side-menu">
            <nav class="navbar navbar-default" role="navigation">
              <div class="side-menu-container">
                <ul class="nav navbar-nav">';

                  echo'<li ';
                  if($selection==1) echo'class="active"';
                  echo'><a href="index.php"><span class="glyphicon glyphicon-user"></span> Utilisateurs</a></li>';
                  echo'<li ';
                  if($selection==2) echo'class="active"';
                  echo'><a href="retours.php" ><span class="glyphicon glyphicon-inbox"></span> Retours utilisateurs</a></li>';
                  echo'<li ';
                  if($selection==3) echo'class="active"';
                  echo'><a href="tournaments.php" ><span class="glyphicon glyphicon-heart-empty"></span> Tournaments</a></li>';
        echo '
                </ul>
              </div><!-- /.navbar-collapse -->
            </nav>
          </div>';

	}


?>

