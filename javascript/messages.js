$(document).ready(function() {
    $('.zone-message').keydown(function(event) {
        if (event.keyCode == 13) { //quand on appuie sur entree
            if($('.zone-message').val()!="") envoieMessage();
            return false;
         }
    });
     afficheNotifications();
     $(".fenetre-contacts").niceScroll({cursorcolor:"#9D9D9D"});
     $(".messages-affiche").niceScroll({cursorcolor:"#9D9D9D"});
});


$(document).ready(function() {
    $('.btn-send').on("click",function(event) {
         if($('.zone-message').val()!="") envoieMessage();
	});
});


function envoieMessage(){
	$.post('../fonctions/ajax_envoyer_messages.php', 
	{
		
		conv: $('.contact.selected').attr('id'),
		message: $('.zone-message').val()

	},
	function(data) {
			afficheConversation();
	});
	$('.zone-message').val("");
};

$(function(){
	$.each( $(".nb-messages"), function(key, value) {
   	 	if($(value).html()==0) $(value).css("display","none");
   	 	else $(value).css("display","block")   		
	});
});


$(function(){
	$('.contact').on("click",function(){
		$('.contact').removeClass('selected');
		$(this).addClass('selected');
		afficheConversation();	
		afficheNotifications();	
	});
});




function afficheConversation(){
	$.post('../fonctions/ajax_afficher_messages.php', 
	{
		conv: $('.contact.selected').attr('id')
	},
	function(data) {
		$('.messages-affiche div').html(/*'<p class="anciens-messages"><a href="#">Voir les anciens messages</a><hr></p> '*/'');
		for(var i in data){
			var chaine = '<p><span class="pseudo">'+data[i].pseudo+'</span>'+'<span class="heure">'+data[i].dateEnvoie+'</span>'+'<p class="message">'+data[i].message+'</p></p>';
			$('.messages-affiche div').append(chaine); 
		}		
		if($('.messages-affiche').scrollTop()>$('.messages-affiche div').height()-1000||$('.messages-affiche').scrollTop()==0) $('.messages-affiche').scrollTop($('.messages-affiche div').height());//en gros ca redescent si t'es tout en bas ou tout en haut...
		$(".messages-affiche").getNiceScroll().resize();
		$.each($('.pseudo'), function(index, val) {
	 	 	if($(val).html()==$('.contact.selected p').html()) $(val).css('color','#850000');
	 	 	else $(val).css('color','#00596C');
	 	}); 
	},
	'json');//json c'est trop bien	
};

function afficheNotifications(){
	var idsConv = new Array();
	$.each($('.contact'), function(index, val) {
	 	 idsConv[index] = $(val).attr('id');
	 }); 
	var vu = - 4000;//si on a pas sélctionné de contact, ben on dit qu'on a vu une conversation qui n'existe pas
	if($('.contact.selected').attr('id')!=undefined) vu = $('.contact.selected').attr('id');
	$.post('../fonctions/ajax_afficher_notifications.php', 
	{
		vu: vu,
		conv: idsConv,
	},
	function(data) {
		for(var notif in data) $('#'+data[notif].id+' .nb-messages').html(data[notif].nombre); 
			//on affiche ou pas les notifs
		$.each( $(".nb-messages"), function(key, value) {
	   	 	if($(value).html()==0) $(value).css("display","none");
	   	 	else $(value).css("display","block"); 
	   	 		
   		}); 	
	},
	'json');//json c'est trop bien		
};



 $(function() {
 	setInterval("afficheNotifications();", 4000);
    setInterval("afficheConversation()", 4000);
 });
 

$(document).ajaxSend(function(event, xhr, settings) {
	$('.chargement').removeClass('hidden');
	
});

$(document).ajaxComplete(function(event, xhr, settings) {
	$('.chargement').addClass('hidden');
});

/* Je voulais mettre des petits sons pour les nouveaux messages mais j'aurai du prévoir ça dès le début, la manière dont j'ai codé correspond pas
ion.sound({
    sounds: [
        {
            name: "water_droplet"
        }
    ],
    volume: 1,
    path: "../bootstrap/js/sounds/",
    preload: true
});
*/