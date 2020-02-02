 // var north = new Swiper('.swiper-container', {
 //     speed: 600,
 //     spaceBetween: 30,
 //     navigation: {
 //         nextEl: '.swiper-button-next',
 //         prevEl: '.swiper-button-prev',
 //     },
 //     breakpoints: {
 //         0: {
 //             slidesPerView: 1,
 //         },
 //         576: {
 //             slidesPerView: 2,
 //         },
 //         768: {
 //             slidesPerView: 3,
 //         },
 //         992: {
 //             slidesPerView: 4,
 //         },
 //         1200: {
 //             slidesPerView: 5,
 //         }
 //     },
 // });

$(function(s){
  num = $('header').offset().top;
  $(window).bind('scroll', function() {
    if ($(window).scrollTop() > num) {
      $('.under-h2').addClass('prh');
      $('.up').show();
     }
   else {
      num = $('.under-h2').offset().top;
      $('.under-h2').removeClass('prh');
      $('.up').hide();
       }
    });
  $(window).load((e)=>{
    $('#loader').fadeOut('2000');
  });
  $(".up").click(function(e) {
    e.originalEvent.preventDefault();
    $('html,body').animate({
        scrollTop: $("header").offset().top},
        'slow');
    });
    $(window).click((e)=>{
      var target = $(e.target);
      var btn = $('.opt-btn');
      var ad = $('.notif-under');
      if (target.data('role') == 'btn-view-cours'){

        $('.opt').eq(btn.index(target)).show();

      }else if (target.hasClass('menu') || target.hasClass('m')) {

        $('.panel').addClass('chidden_li');

      }else if (target.data('role') == 'btn-view-ad' ) {
        $('.undr').eq(ad.children().index(target)).show();
      }
        else {

        $('.opt').hide();
        $('.panel').removeClass('chidden_li');
      }
    })
    function form(tag,etat,msg,i) {
      var error = document.querySelectorAll('.box');
      if (etat == 1){
        $(tag).addClass('dis');
        $(".signfm input[type='submit']").attr('disabled',true);
        $(".signfm input[type='submit']").css('opacity','0.4');
        error[i+1].innerHTML = msg;
        error[i+1].classList.add('err')
      }else if (etat == 2){
        $(tag).removeClass('dis');
        $(".signfm input[type='submit']").attr('disabled',false)
        $(".signfm input[type='submit']").css('opacity','1');
        error[i+1].innerHTML = msg;
        error[i+1].classList.remove('err')
      }
    }
    $('.signfm input').each((i,input)=>{
      $(input).on('input', (ag) => {
        let val = $(input).val();
        if ($(input).data('name') == 'nom'){
          if ((val.length <= 2  ) || (val.length > 15) ){
            form(input,1,'Nom Trop long ou trop cours,veillez vous limitez entre 3-15 caractere',i);
          }else{
            form(input,2,'',i);
          }
        }else if ($(input).data('name') == 'email') {
          var email = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z]{2,4}$/i;
          if (!val.match(email)){
            form(input,1,'Email Incorrect',i);
          }else{
            form(input,2,'',i);
          }
        }else if ($(input).data('name') == 'pswd'){
            if ($('.mdp').val() != val) {
              form(input,1,'Les deux mot de passe ne sont pas identiques',i);
            }else {
              form(input,2,'',i);
            }
        }else if ($(input).data('name') == 'mdp'){
          let mdp = /[a-zA-Z0-9]+[0-9]/;
           if ((val.length < 8) || (!val.match(mdp))) {
             form(input,1,'Le mot de passe doit contenir des chiffres et lettre et supperieur a 8 caractere',i);
           }else {
             form(input,2,'',i);
           }
       }
      })
    })
    $('.vi i').click((e)=>{
      if( $('.vi input').attr('type') == 'password' ){
        $('.vi input').attr('type','text');
        $('.vi i').css('color','var(--button)')
      }else {
        $('.vi input').attr('type','password');
        $('.vi i').css('color','var(--pure)')
      }
    })
});
