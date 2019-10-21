$(document).ready(function(){

  let button = $('#button');
  let modal = $('#modal');
  let close = $('#close');
  let anchor = $('#anchor');

  $(window).on('scroll', function(){
    if ($(window).scrollTop() >=20){
      anchor.fadeIn();
    } else {
      anchor.fadeOut();
    }
  });

  anchor.on('click', function(){
    $('html, body').animate({scrollTop:0}, 700);
  });

  button.on('click', function(){
    modal.addClass('modal_activ');
  });

  close.on('click', function(){
    modal.removeClass('modal_activ');
  });


});
