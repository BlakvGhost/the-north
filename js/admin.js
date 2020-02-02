$(function(s){
  $('.switch').each((i,sw)=>{
    $(sw).click((e)=>{
      if ($(e.target).hasClass('off') ){
        $(e.target).removeClass('off');
        $(e.target).addClass('on');
        $('.control input').sort()
       }else {
        $(e.target).addClass('off');
        $(e.target).removeClass('on');
        $('.control input')[i].click();
      }
    })
  })
  $('.minp i').click((e)=>{
    $('.tyg').append()
  })
  var ul = $('.slft li');
  ul.each((i, li) => {
    $(li).click((e)=>{
      $('.srgt .rf').removeClass('chidden_li');
      $('.srgt .rf').addClass('dnone');
      $('.srgt .rf').eq(i).addClass('chidden_li');
    })
  });


})
