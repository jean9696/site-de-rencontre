$(function(){
	$('.choix-profil').click(function() {
		if($(this).hasClass('selected')) $(this).removeClass('selected');
		else $(this).addClass('selected');
		$('#selectonnes').html($('.selected').length);
		if($('.selected').length<=15) $('#manquants').html(15-$('.selected').length);
		else $('#manquants').html('Il y a trop de prétendants !!!');
		if($('.selected').length>15) $('.infos').removeClass('alert-info').addClass('alert-danger');
		else if($('.infos').hasClass('alert-danger')) $('.infos').removeClass('alert-danger').addClass('alert-info');
	});
});



//On envoie les infos et voilà voilà, c'est pas bien compliqué donc y a rien à expliquer !
//Ah oui, quand on a fini on se casse de cette page ! (mais ca c'est fait dans le html)
$(function(){
	$('form').submit(function() {
		if($('.selected').length==15){
			var listePretendants= '';
			$('.selected').each(function(index) {
				listePretendants+=$(this).children().children().html()+';';
			});
			$.post(
				'../fonctions/ajax_creer_tournament.php',
				{
				 	pretendants: listePretendants
				}
				 , 
				 function(data, textStatus, xhr) {
			});
			return true;
		}
		else return false;
	});
});