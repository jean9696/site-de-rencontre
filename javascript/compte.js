$(function(){
	var click = 0;
	$('#captcha').click(function() {
		$('#alert-captcha').removeClass('hidden');
		$('#alert-captcha').hide(0).show('slow').delay(2000).hide('slow');
		click++;
		if(click>10) $('#alert-captcha').html("<p>C'est marrant pourtant je recopie bien...</p>")
		if(click>20) $('#alert-captcha').html("<p>Serais-je devenu un robot ?</p>")
		if(click>30) $('#alert-captcha').html("<p>C'est bête je voulais vraiment supprimer mon compte de ce site de merde...</p>")
	});

});

$('.alert').delay(5000).fadeOut('slow');


$(function(){
	$('form').on('submit', function() {
		if($("input[name='nouveauMdp']").val() != $("input[name='confirmationMdp']").val()) {
			$("input[name='nouveauMdp']").parent().addClass('has-error');
			$("input[name='confirmationMdp']").parent().addClass('has-error');
			$('#alert-mdp').removeClass('hidden');
			$('#alert-mdp').hide(0).show('slow').delay(2000).hide('slow');
			return false;	
		}
		if($("input[name='nouveauMdp']").val().length < 1) {
			$("input[name='nouveauMdp']").parent().addClass('has-error');
			$("input[name='confirmationMdp']").parent().addClass('has-error');
			$('#alert-mdp2').removeClass('hidden');
			$('#alert-mdp2').hide(0).show('slow').delay(2000).hide('slow');
			return false;	
		}
	});
});