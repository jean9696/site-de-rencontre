 <?php 
        session_start();
        include 'connexionBDD.php';
        include 'fonctions.php';

        //########## IMAGES ##########

        $req = $bdd->prepare('SELECT photoProfil,photo1,photo2, sportives, interets, musique FROM utilisateurs WHERE ? = pseudo;');
        $req->execute(array($_POST['pseudo']));
        $donnees = $req -> fetch();
        

        $dossier = substr($donnees['photoProfil'],0,-10);

        $extension_photo1 = strtolower(substr(strrchr($_FILES['photo1']['name'],'.'),1));
        $extension_photo2 = strtolower(substr(strrchr($_FILES['photo2']['name'],'.'),1));
        $extension_photo3 = strtolower(substr(strrchr($_FILES['photo3']['name'],'.'),1));

        $photo1= $donnees['photoProfil'];
        $photo2= $donnees['photo1'];
        $photo3= $donnees['photo2'];

        $success1 = true; $success2 = true; $success3 = true; 
        if($extension_photo1!='') {
            unlink($photo1);
            $success1 = move_uploaded_file($_FILES['photo1']['tmp_name'],$photo1);
            $photo1=$dossier.'photo1.'.$extension_photo1;
        }
        if($extension_photo2!='') {
            unlink($photo2);
            $success2 = move_uploaded_file($_FILES['photo2']['tmp_name'],$photo2);
            $photo2=$dossier.'photo2.'.$extension_photo2;
        }
        if($extension_photo3!='') {
            unlink($photo3);
            $success3 = move_uploaded_file($_FILES['photo3']['tmp_name'],$photo3);
            $photo3=$dossier.'photo3.'.$extension_photo3;
        }
        $success = $success1 && $success2 && $success3;


        //########## DATE ##########

        //transformation date en format SQL => YYYY-MM-DD
        $dateEntree=date("Y-m-d", strtotime($_POST['date']));

        //########## BASE DE DONNEES ##########
	
		    //A propos de vous
        $req = $bdd->prepare('UPDATE utilisateurs SET dateDeNaissance = ?, ville = ?, marital = ?, personnalite = ?, etudes= ?, profession= ? WHERE ? = pseudo;');
        $req->execute(array($dateEntree,conv_char($_POST['ville']),conv_char($_POST['marital']),conv_char($_POST['personnalite']),conv_char($_POST['etudes']),conv_char($_POST['profession']),$_POST['pseudo']));

        //Votre apparence
        $req = $bdd->prepare('UPDATE utilisateurs SET yeux = ?, cheveux = ?, silhouette = ?, ethnique= ? WHERE ? = pseudo;');
        $req->execute(array(conv_char($_POST['yeux']),conv_char($_POST['cheveux']),conv_char($_POST['silhouette']),conv_char($_POST['ethnique']),$_POST['pseudo']));

        //Vos centres d'intérêts
            if($_POST['sportives'][0]=="") $sportives = html_entity_decode($donnees['sportives']); 
            else{
                $sportives = ""; 
                foreach ($_POST['sportives'] as $value) {
                  $sportives .= $value.";";
                }
            }
            if($_POST['interets'][0]=="") $interets = html_entity_decode($donnees['interets']); 
            else{
                $interets = "";
                foreach ($_POST['interets'] as $value) {
                  $interets .= $value.";";
                }
            }
            if($_POST['musique'][0]=="") $musique = html_entity_decode($donnees['musique']); 
            else{
                $musique = "";
                foreach ($_POST['musique'] as $value) {
                  $musique .= $value.";";
                }
            }

        $req = $bdd->prepare('UPDATE utilisateurs SET sportives = ?, interets = ?, musique = ? WHERE ? = pseudo;');
        $req->execute(array(conv_char($sportives),conv_char($interets),conv_char($musique),$_POST['pseudo']));

        //Description
        $req = $bdd->prepare('UPDATE utilisateurs SET description = ? WHERE ? = pseudo;');
        $req->execute(array(conv_char($_POST['description']),$_POST['pseudo']));

        //images
        $req = $bdd->prepare('UPDATE utilisateurs SET photoProfil = ?,photo1 = ?,photo2 = ? WHERE ? = pseudo;');
        $req->execute(array($photo1,$photo2,$photo3,$_POST['pseudo']));



        $req->closeCursor();
        
   ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body onload="document.nav.submit()">
   <form name ="nav" action="../user/" method="post">
          <input type="hidden" name="pageParametre" id="pageParametre" value="infos">
          <input type="hidden" name="valide" id="valide" value="<?php echo $success ?>">
   </form>
</body>
</html>



