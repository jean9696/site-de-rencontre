/*Le jquerry c'est la vie #write less, do more  */


$('.input-group.date').datepicker({
	format: "dd-mm-yyyy",
	startDate: "01/01/1930",
	endDate: "today",
	startView: 2,
	language: "fr",
  "autoclose": true,
	defaultViewDate: { year: 1990, month: 01, day: 01 }
});



/*Ca peut faire peur mais en fait c'est ce qu'on connait en abregé..
genre .html c'est inerHTML ou append => appendChild avec le noeud texte, enfin voilà*/


/*j'aurais pu faire des selecteurs avec id mais j'avais la flemme d'ajouter id=""... 
J'pense pas qu'ajouter une classe soit si dérangeant... Enfin c'est ptetre un peu sale :D */




$(function(){
	$("button.obligatoire").click(function() {
		var valide = true;
	$("div.alert").html('');//on vide la div d'erreur
 
	  //pseudo
	  if($("input.pseudo").val().length < 4) {
	  	$("div.form-group.pseudo").addClass("has-error");
	  	$("div.alert").append('<p>Votre pseudo est trop court</p>');       
	  	valide = false;     
	  }
	  else $("div.form-group.pseudo").removeClass("has-error");
      //on enlève les cadres rouges quand c'est bon


      //date
      if($("input.date").val().length < 1) {
      	$("div.form-group.date").addClass("has-error");
      	$("div.alert").append('<p>Veuillez entrez votre date de naissance</p>');       
      	valide = false;
      }
      else $("div.form-group.date").removeClass("has-error");


      //mail
      if(!isValidEmailAddress($("input.mail").val())) {
      	$("div.form-group.mail").addClass("has-error");
      	$("div.alert").append('<p>Le mail n\'est pas valide</p>');       
      	valide = false;
      }
      else $("div.form-group.mail").removeClass("has-error");


      //sexe
      if($("select.sexe").val()!="Homme"&&$("select.sexe").val()!="Femme") {
      	$("div.form-group.sexe").addClass("has-error");
      	$("div.alert").append('<p>Veuillez sélectionnez votre sexe</p>');       
      	valide = false;
      }
      else $("div.form-group.sexe").removeClass("has-error");

      //mots de passe
      if ($("input.form-control.mdp.mdp1").val() != $("input.form-control.mdp.mdp2").val()){
      	$("div.form-group.mdp").addClass("has-error");
      	$("div.alert").append('<p>Les mots de passe ne correspondent pas</p>');       
      	valide = false;
      }

      if ($("input.form-control.mdp.mdp1").val() == ""){
      	$("div.form-group.mdp").addClass("has-error");
      	$("div.alert").append('<p>Veuillez rentrer un mot de passe</p>');       
      	valide = false;
      }


      //verif ajax pseudo et mail => C'ETAIT DUR MON DIEU

      $.post(
        '../fonctions/ajax_verif_exist.php', 
        {
          pseudo : $("input.pseudo").val(),
          mail : $("input.mail").val()
        },   
        function(data){
          valide=(!data['mail']&&!data['pseudo']&&valide); 

          if(!valide){
            if(data['mail']) {
              $("div.form-group.mail").addClass("has-error");
              $("div.alert").append('<p>Cette adresse mail est déjà utilisée</p>');  
            }
            if(data['pseudo']) {
              $("div.form-group.pseudo").addClass("has-error");
              $("div.alert").append('<p>Ce pseudo est déjà utilisé</p>');  
            }
            $("div.alert").show("slow").delay(4000).hide("slow");//se barre au bout de 4s 
            $("#changerSlide").val("non");
          }
          else{         
            $("#changerSlide").val("oui");    
            $("div.form-group.mail").removeClass("has-error");   
            $("div.form-group.pseudo").removeClass("has-error");
          }
        
        },
        'json');

      
});
});


/*PUTIN J'EN AI CHIE AVEC CET AJAX DE MERDE (en vrai c'est trop bien mais qu'est ce que c'est compliqué) #bidouillage qui marche*/

//evenement AJAX => quand il a tout fini quoi
$(document).ajaxComplete(function(){ 
  if($("#changerSlide").val()=="oui")$('.carousel').carousel('next');
});


//change les cases de mot de passe quand on les modifie #stylé #pasCopierColler
$(function(){
	$("input.form-control.mdp").change(function(){
		if ($("input.form-control.mdp.mdp1").val() == $("input.form-control.mdp.mdp2").val() && $("input.form-control.mdp.mdp1").val()!="" && $("input.form-control.mdp.mdp2").val()!="" ){
			$("i.mdp.glyphicon").addClass("glyphicon-ok-sign").removeClass("glyphicon-lock glyphicon-remove-sign");
     	$("div.form-group.mdp").removeClass("has-error").addClass("has-success");
		}
		else{
			$("i.mdp.glyphicon").addClass("glyphicon-remove-sign").removeClass("glyphicon-lock glyphicon-ok-sign");
     	$("div.form-group.mdp").removeClass("has-success").addClass("has-error");
		}
	})
});


//#copier-coller qui marche trop bien je sais pas comment
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	return pattern.test(emailAddress);
};




// Pourquoi en JavaScrip ? Je sais pas, comme ça

function remplirFormulaire(){

  //parce qu'on accorde bien nos adjectifs !
  if($('select.sexe').val()=="Homme"){
      
      //Statut marital
      $('#marital').html('');
      $('#marital').append($("<option></option>").attr("value","").attr("selected","true").html("Veuillez faire un choix"));
      $('#marital').append($("<option></option>").attr("value","jamais marié").html("jamais marié"));
      $('#marital').append($("<option></option>").attr("value","divorcé").html("divorcé"));
      $('#marital').append($("<option></option>").attr("value","veuf").html("veuf"));
      $('#marital').append($("<option></option>").attr("value","séparé").html("séparé"));

      //Personnalité
      $('#personnalite').html('');
      $('#personnalite').append($("<option></option>").attr("value","").attr("selected","true").html("Veuillez faire un choix"));
      $('#personnalite').append($("<option></option>").attr("value","attentionné").html("attentionné"));
      $('#personnalite').append($("<option></option>").attr("value","aventureux").html("aventureux"));
      $('#personnalite').append($("<option></option>").attr("value","calme").html("calme"));
      $('#personnalite').append($("<option></option>").attr("value","conciliant").html("conciliant"));
      $('#personnalite').append($("<option></option>").attr("value","drôle").html("drôle"));
      $('#personnalite').append($("<option></option>").attr("value","exigeant").html("exigeant"));
      $('#personnalite').append($("<option></option>").attr("value","fière").html("fière"));
      $('#personnalite').append($("<option></option>").attr("value","généreux").html("généreux"));
      $('#personnalite').append($("<option></option>").attr("value","réservé").html("réservé"));
      $('#personnalite').append($("<option></option>").attr("value","sensible").html("sensible"));
      $('#personnalite').append($("<option></option>").attr("value","sociable").html("sociable"));
      $('#personnalite').append($("<option></option>").attr("value","spontané").html("spontané"));
      $('#personnalite').append($("<option></option>").attr("value","timide").html("timide"));
      $('#personnalite').append($("<option></option>").attr("value","fiable").html("fiable"));
      $('#personnalite').append($("<option></option>").attr("value","autre").html("autre"));
    }
    else{

      //Statut marital
      $('#marital').html('');
      $('#marital').append($("<option></option>").attr("value","").attr("selected","true").html("Veuillez faire un choix"));
      $('#marital').append($("<option></option>").attr("value","jamais mariée").html("jamais mariée"));
      $('#marital').append($("<option></option>").attr("value","divorcée").html("divorcée"));
      $('#marital').append($("<option></option>").attr("value","veuve").html("veuve"));
      $('#marital').append($("<option></option>").attr("value","séparée").html("séparée"));

      //Personnalité
      $('#personnalite').html('');
      $('#personnalite').append($("<option></option>").attr("value","").attr("selected","true").html("Veuillez faire un choix"));
      $('#personnalite').append($("<option></option>").attr("value","attentionnée").html("attentionnée"));
      $('#personnalite').append($("<option></option>").attr("value","aventureuse").html("aventureuse"));
      $('#personnalite').append($("<option></option>").attr("value","calme").html("calme"));
      $('#personnalite').append($("<option></option>").attr("value","conciliante").html("conciliante"));
      $('#personnalite').append($("<option></option>").attr("value","drôle").html("drôle"));
      $('#personnalite').append($("<option></option>").attr("value","exigeante").html("exigeante"));
      $('#personnalite').append($("<option></option>").attr("value","fière").html("fière"));
      $('#personnalite').append($("<option></option>").attr("value","généreuse").html("généreuse"));
      $('#personnalite').append($("<option></option>").attr("value","réservée").html("réservée"));
      $('#personnalite').append($("<option></option>").attr("value","sensible").html("sensible"));
      $('#personnalite').append($("<option></option>").attr("value","sociable").html("sociable"));
      $('#personnalite').append($("<option></option>").attr("value","spontanée").html("spontanée"));
      $('#personnalite').append($("<option></option>").attr("value","timide").html("timide"));
      $('#personnalite').append($("<option></option>").attr("value","fiable").html("fiable"));
      $('#personnalite').append($("<option></option>").attr("value","autre").html("autre"));
    }

    //Couleur des yeux
    $('#yeux').html('');
    $('#yeux').append($("<option></option>").attr("value","").attr("selected","true").html("Veuillez faire un choix"));
    $('#yeux').append($("<option></option>").attr("value","marron").html("marron"));
    $('#yeux').append($("<option></option>").attr("value","bleus").html("bleus"));
    $('#yeux').append($("<option></option>").attr("value","verts").html("verts"));
    $('#yeux').append($("<option></option>").attr("value","noisettes").html("noisettes"));
    $('#yeux').append($("<option></option>").attr("value","noirs").html("noirs"));
    $('#yeux').append($("<option></option>").attr("value","gris").html("gris"));
    $('#yeux').append($("<option></option>").attr("value","moches").html("moches"));
    $('#yeux').append($("<option></option>").attr("value","autres").html("autres"));

    //Couleur des yeux
    $('#cheveux').html('');
    $('#cheveux').append($("<option></option>").attr("value","").attr("selected","true").html("Veuillez faire un choix"));
    $('#cheveux').append($("<option></option>").attr("value","chatains").html("chatains"));
    $('#cheveux').append($("<option></option>").attr("value","bruns").html("bruns"));
    $('#cheveux').append($("<option></option>").attr("value","noirs").html("noirs"));
    $('#cheveux').append($("<option></option>").attr("value","blonds").html("blonds"));
    $('#cheveux').append($("<option></option>").attr("value","poivre et sel ").html("poivre et sel "));
    $('#cheveux').append($("<option></option>").attr("value","blancs").html("blancs"));
    $('#cheveux').append($("<option></option>").attr("value","roux").html("roux"));
    $('#cheveux').append($("<option></option>").attr("value","moches").html("moches"));
    $('#cheveux').append($("<option></option>").attr("value","autres ").html("autres "));

    //Silhouette
    $('#silhouette').html('');
    $('#silhouette').append($("<option></option>").attr("value","").attr("selected","true").html("Veuillez faire un choix"));
    $('#silhouette').append($("<option></option>").attr("value","normale").html("normale"));
    $('#silhouette').append($("<option></option>").attr("value","sportive").html("sportive"));
    $('#silhouette').append($("<option></option>").attr("value","mince").html("mince"));
    $('#silhouette').append($("<option></option>").attr("value","quelques kilos en trop").html("quelques kilos en trop"));
    $('#silhouette').append($("<option></option>").attr("value","ronde").html("ronde"));
    $('#silhouette').append($("<option></option>").attr("value","trapu").html("trapu"));
    $('#silhouette').append($("<option></option>").attr("value","parfaite").html("parfaite"));
    $('#silhouette').append($("<option></option>").attr("value","approximative").html("approximative"));

    //Origine ethnique
    $('#ethnique').html('');
    $('#ethnique').append($("<option></option>").attr("value","").attr("selected","true").html("Veuillez faire un choix"));
    $('#ethnique').append($("<option></option>").attr("value","européenne").html("européenne"));
    $('#ethnique').append($("<option></option>").attr("value","africaine").html("africaine"));
    $('#ethnique').append($("<option></option>").attr("value","arabe").html("arabe"));
    $('#ethnique').append($("<option></option>").attr("value","méditerranéenne").html("méditerranéenne"));
    $('#ethnique').append($("<option></option>").attr("value","métisse").html("métisse"));
    $('#ethnique').append($("<option></option>").attr("value","latine").html("latine"));
    $('#ethnique').append($("<option></option>").attr("value","asiatique").html("asiatique"));
    $('#ethnique').append($("<option></option>").attr("value","indienne").html("indienne"));
    $('#ethnique').append($("<option></option>").attr("value","divine").html("divine"));

    //Niveau d'etudes
    $('#etudes').html('');
    $('#etudes').append($("<option></option>").attr("value","").attr("selected","true").html("Veuillez faire un choix"));
    $('#etudes').append($("<option></option>").attr("value","niveau lycée et inférieur").html("niveau lycée et inférieur"));
    $('#etudes').append($("<option></option>").attr("value","BAC").html("BAC"));
    $('#etudes').append($("<option></option>").attr("value","BAC+2").html("BAC+2"));
    $('#etudes').append($("<option></option>").attr("value","BAC+3").html("BAC+3"));
    $('#etudes').append($("<option></option>").attr("value","BAC+4").html("BAC+4"));
    $('#etudes').append($("<option></option>").attr("value","BAC+5 et plus").html("BAC+5 et plus"));
    $('#etudes').append($("<option></option>").attr("value","EISTI").html("EISTI"));
    $('#etudes').append($("<option></option>").attr("value","wesh ta kru gt alé a lékol ?").html("wesh ta kru gt alé a lékol ?"));

    //Professions
    $('#profession').html('');
    $('#profession').append($("<option></option>").attr("value","").attr("selected","true").html("Veuillez faire un choix"));
    $('#profession').append($("<option></option>").attr("value","Agriculteurs exploitants").html("Agriculteurs exploitants"));
    $('#profession').append($("<option></option>").attr("value","Salariés de l’agriculture").html("Salariés de l’agriculture"));
    $('#profession').append($("<option></option>").attr("value","Patrons de l’industrie et du commerce").html("Patrons de l’industrie et du commerce"));
    $('#profession').append($("<option></option>").attr("value","Professions libérales et cadres supérieurs").html("Professions libérales et cadres supérieurs"));
    $('#profession').append($("<option></option>").attr("value","Cadres moyens").html("Cadres moyens"));
    $('#profession').append($("<option></option>").attr("value","Employés").html("Employés"));
    $('#profession').append($("<option></option>").attr("value","OuvriersOuvriers").html("Ouvriers"));
    $('#profession').append($("<option></option>").attr("value","Personnels de services").html("Personnels de services"));
    $('#profession').append($("<option></option>").attr("value"," Autres catégories").html(" Autres catégories"));
    $('#profession').append($("<option></option>").attr("value","Dealer").html("Dealer"));
    $('#profession').append($("<option></option>").attr("value","Moi je geek").html("Moi je geek"));

};


//change le formulaire en fonction du sexe
$(function(){
  $(document).ready(remplirFormulaire());
  $('select.sexe').change(function(){remplirFormulaire()});
});


//quand c'est sur la page d'accueil ca fait des erreurs MAIS ON S'EN FOUT
$("select.multiple").SumoSelect({
  placeholder: 'Séléctionnez vos choix',
  captionFormat: '{0} séléctionnés',
  outputAsCSV:true
})

$("input.file").fileinput({
        allowedFileExtensions : ['jpg', 'png'],
        maxFileSize: 5000,
        'showUpload':false,
        'showRemove':false
});

