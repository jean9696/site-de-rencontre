$(function(){
	$('.voirProfil').click(function() {
		var pseudo = $(this).prev().prev().html();
		$.post('../fonctions/ajax_afficher_profil.php', 
			{
				pseudo: pseudo
			},
			function(data) {
				$('.modal-body').html(data);
				$('.modal-title').html(pseudo);	
				menuProfil();
				afficherPhoto();
			},
			'html'
			);	
	});
});




//bidouillage joli
function menuProfil(){
	$('.menu-profil a').click(function() {
		$('.menu-profil a').removeClass('active');
		$(this).addClass('active');
		$('.section-profil').removeClass('hidden');
		$('.section-profil').addClass('hidden');
		$('#'+$(this).attr('value')).removeClass('hidden');
		$('#'+$(this).attr('value')).hide(0);
		$('#'+$(this).attr('value')).show('slow');
	});
}

function afficherPhoto(){
	$('.photo-fiche-profil-min').click(function() {
		$('.photo-fiche-profil').attr('src',$(this).attr('src'));
		$('.photo-fiche-profil').hide(0);
		$('.photo-fiche-profil').fadeIn('slow');
	});
}

$(function(){
	$.post('../fonctions/ajax_afficher_profil.php', 
		{
			pseudo: $('#pseudo').html()
		},
		function(data) {
			$('.profil-user').append(data);
			menuProfil();
			afficherPhoto();
		},
		'html'
		);	
});


function signaler(){
		var pseudo = $('.modal-title').html();
		$.post('../fonctions/ajax_signaler.php', 
			{
				pseudo: pseudo
			},
			function(data) {
				$('.modal-body').html(data);
				$('.modal-title').html('Signalement');	
			},
			'html'
			);	
};
