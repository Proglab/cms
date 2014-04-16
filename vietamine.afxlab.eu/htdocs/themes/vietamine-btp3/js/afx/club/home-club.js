$(document).ready(function(){
  $('.ball-shadow-48 .animated').each(function(){
    jQuery(this).css('-webkit-animation-duration','0.6s');
    jQuery(this).css('-moz-animation-duration','0.6s');
    jQuery(this).css('-ms-animation-duration','0.6s');
    jQuery(this).css('animation-duration','0.6s');
    jQuery(this).css('-webkit-animation-delay',jQuery(this).data('animation-delay'));
    jQuery(this).css('-moz-animation-delay',jQuery(this).data('animation-delay'));
    jQuery(this).css('-ms-animation-delay',jQuery(this).data('animation-delay'));
    jQuery(this).css('animation-delay',jQuery(this).data('animation-delay'));
    jQuery(this).addClass(jQuery(this).data('animation'));
  });
});