$(function(){
	$('.btn-success').click(function(event) {
		valider(true,$(this).parent().prev().html(),$(this).parent().prev().prev().html())
		$(this).parent().parent().parent().addClass('alert alert-success').hide('slow');//oui c'est le papa du papa du papa mais je fais ce que je veux d'abord !
	});
	$('.btn-danger').click(function(event) {
		valider(false,$(this).parent().prev().html(),$(this).parent().prev().prev().html())
		$(this).parent().parent().parent().addClass('alert alert-danger').hide('slow');//oui c'est le papa du papa du papa mais je fais ce que je veux d'abord !
		
	});
});

function valider(MatchValide, homme, tout){
	$.post('../fonctions/ajax_valider_reponse.php',{valide: MatchValide, pseudo :homme, reponse:tout }, function(data, textStatus, xhr) {
	});
}

