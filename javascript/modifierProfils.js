//bidouillage joli
function menuProfil(){
	$('.menu-profil a').click(function() {
		$('.menu-profil a').removeClass('active');
		$(this).addClass('active');
		$('.section-profil').removeClass('hidden');
		$('.section-profil').addClass('hidden');
		$('#'+$(this).attr('value')).removeClass('hidden');
		//$('#'+$(this).attr('value')).hide(0);
		var tailleDiv = $('#'+$(this).attr('value')).height();
		$('#'+$(this).attr('value')).css('height','0px');
		$('#'+$(this).attr('value')).animate({
			height: tailleDiv },
			'slow', function() {
		});
	});
}



function remplirProfilFormulaire(){
	$('#marital').val($('#marital').attr('value'));
	$('#personnalite').val($('#personnalite').attr('value'));
	$('#etudes').val($('#etudes').attr('value'));
	$('#profession').val($('#profession').attr('value'));
	$('#yeux').val($('#yeux').attr('value'));
	$('#cheveux').val($('#cheveux').attr('value'));
	$('#silhouette').val($('#silhouette').attr('value'));
	$('#ethnique').val($('#ethnique').attr('value'));


	$('.file').on('fileimageloaded', function() {
    	$('.'+$(this).attr('id')).css('display','none');
	});
}

$(function(){
	$.post('../fonctions/ajax_modifier_profil.php', 
		{
			pseudo: $('#pseudo').html()
		},
		function(data) {
			$('.profil-user').append(data);
			menuProfil();
			remplirProfilFormulaire();
			$('.alert').delay(5000).fadeOut('slow');
		},
		'html'
		);	
});



