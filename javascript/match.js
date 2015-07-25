$(function(){
	$('.btn-success').click(function(event) {
		validerMatch(true,$(this).parent().prev().prev().prev().html())
		$(this).parent().parent().parent().addClass('alert alert-success').hide('slow');//oui c'est le papa du papa du papa mais je fais ce que je veux d'abord !
	});
	$('.btn-danger').click(function(event) {
		//OUI C'EST PAS TRES BEAU MAIS CA MARCHE !! (je vais pas me casser la tête à faire des classes quand même, de toute façon ca revient au même)
		validerMatch(false,$(this).parent().prev().prev().prev().html())
		$(this).parent().parent().parent().addClass('alert alert-danger').hide('slow');//oui c'est le papa du papa du papa mais je fais ce que je veux d'abord !
		
	});
});

function validerMatch(MatchValide, femmeSelected){
	$.post('../fonctions/ajax_valider_match.php',{ valide: MatchValide, femme :femmeSelected }, function(data, textStatus, xhr) {
	});
}

//je sais c'est pas pour les matchs mais je vais quand même pas recrecer un fichier pour 3 lignes...

$(function(){
	$('#jairiencompris').click(function(event) {
		$('.modal-title').html('Fonctionnement du site')
		$('.modal-body').html('<img src="../images/infos.jpg" alt="infos" style="width:100%">;');
	});
});