var revapi1;

$(document).ready(function(){
  if (jQuery.fn.cssOriginal != undefined) jQuery.fn.css = jQuery.fn.cssOriginal;

  if(jQuery('#rev_slider').revolution == undefined)  revslider_showDoubleJqueryError('#rev_slider');
  else
    revapi1 = jQuery('#rev_slider').show().revolution(
    {
      delay:9000,
      startwidth:1170,
      startheight:450,
      hideThumbs:200,

      thumbWidth:100,
      thumbHeight:50,
      thumbAmount:3,

      navigationType:"bullet",
      navigationArrows:"solo",
      navigationStyle:"round",

      touchenabled:"on",
      onHoverStop:"on",

      navigationHAlign:"center",
      navigationVAlign:"bottom",
      navigationHOffset:0,
      navigationVOffset:20,

      soloArrowLeftHalign:"left",
      soloArrowLeftValign:"center",
      soloArrowLeftHOffset:20,
      soloArrowLeftVOffset:0,

      soloArrowRightHalign:"right",
      soloArrowRightValign:"center",
      soloArrowRightHOffset:20,
      soloArrowRightVOffset:0,

      shadow:0,
      fullWidth:"on",
      fullScreen:"off",

      stopLoop:"off",
      stopAfterLoops:-1,
      stopAtSlide:-1,

      shuffle:"off",

      hideSliderAtLimit:0,
      hideCaptionAtLimit:0,
      hideAllCaptionAtLilmit:0,
      startWithSlide:0,
      videoJsPath:"js/revslider/js/videojs/",
      fullScreenOffsetContainer: "" 
    });
});
