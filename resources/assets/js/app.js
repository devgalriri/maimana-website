$(document).ready(function(){
  $('.nav-showing').hide();
  $('.nav .nav-left .nav-left-link').hover(function(){
    $('.nav-showing').toggle();
  });
  $('.nav-showing').hover(function(){
    $(this).toggle();
  });

});

$(window).scroll(function(){
  var scrollY = $(this).scrollTop();
  var windowH = $(window).height();

  $('.hero-inside').css({
    'transform' : 'translate(0px, '+ scrollY / 7+'%)'
  });

  if (scrollY >= ( windowH / 5 )) {
    $('.nav').addClass('nav-show');
  } else {
    $('.nav').removeClass('nav-show');
  }

  if (scrollY > $('.section-1').offset().top - (windowH / 3 )) {
    $('.section-1-txt').css({
      'opacity' : '1',
      'left' : '-150px'
    });
  } else {
    $('.section-1-txt').css({
      'opacity' : '0',
      'left' : '-250px'
    });
  }

  if (scrollY > $('.section-1').offset().top) {
    $('.section-1 .section-1-tiles div').each(function(i){
      setTimeout(function(){
        $('.section-1 .section-1-tiles div').eq(i).css({
          'opacity' : '1',
          'transform' : 'translateX(0px)'
        });
      }, 150 * (i+1));
    });
  } else {
    $('.section-1 .section-1-tiles div').each(function(i){
      setTimeout(function(){
        $('.section-1 .section-1-tiles div').eq(i).css({
          'opacity' : '0',
          'transform' : 'translateX(-80px)'
        });
      }, 150 * (i+1));
    });
  }

});
