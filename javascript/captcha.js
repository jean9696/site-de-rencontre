$(function(){
	var click = 0;
	$('#captcha').click(function() {
		$('#alert-captcha').removeClass('hidden');
		$('#alert-captcha').hide(0).show('slow').delay(2000).hide('slow');
		click++;
		if(click>10) $('#alert-captcha').html("<p>Au bout de 10 essais t'as toujours pas compris que c'était un toll ?...</p>")
	});

});

$('.alert').delay(5000).fadeOut('slow');