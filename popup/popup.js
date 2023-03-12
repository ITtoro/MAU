$('.open__popup').click(function(e) {
   e.preventDefault();
   $('.popup__bg').fadeIn(500);
   $('html').addClass('no__scroll');
});

$('.close__popup').click(function() {
   $('.popup__bg').fadeOut(500);
   $('html').removeClass('no__scroll');
});