    var mainbottom = 0;//position où on va changer la classe du nav 


    //si on scroll
    $(window).on('scroll',function(){


      stop = Math.round($(window).scrollTop());
      if (stop > mainbottom) {
        //$('.btn-inscription').addClass('past-main');
        $('.btn-inscription').show('slow');
        $('.navbar').addClass('past-main');
        $('.fleche-back-top').addClass('past-main');

      } else {
        //$('.btn-inscription').removeClass('past-main');
        $('.btn-inscription').hide(0);
        $('.navbar').removeClass('past-main');
        $('.fleche-back-top').removeClass('past-main');
      }

    });


    $(function(){
      $('#btn_up').click(function() {
          $('html,body').animate({scrollTop: 0}, 'slow');
        });
        
        $(window).scroll(function(){
         if($(window).scrollTop()<500){
          $('#btn_up').fadeOut();
        }else{
          $('#btn_up').fadeIn();
        }
      });
    });