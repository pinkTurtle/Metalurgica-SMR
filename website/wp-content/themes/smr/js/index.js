var o = require('component-jquery');
var debug = require('debug')('smr');

o(document).ready(function() {

  // Main slider
  if (o('.my-slider').length) {
    debug('Rendering main slider');

    var NewSlider = require('newslider');
    var firstslide = o('a.firstslide');
    var nextslide = o('a.nextslide');
    var prevslide = o('a.prevslide');
    var lastslide = o('a.lastslide');

    var mySlider = new NewSlider('.my-slider');

    lastslide.click(function(){
      mySlider.last();
    });

    firstslide.click(function(){
      mySlider.first();
    });

    nextslide.click(function(){
      mySlider.next();
    });

    prevslide.click(function(){
      mySlider.prev();
    });

    mySlider.goto(1);

    var slideTimer = window.setInterval(function(){
      mySlider.next();
    }, 7000);
  }

    o(".descripciones .servicios").click(function() {
        o('.descripciones .servicios .contenido-servicios').slideUp( "slow" );
        o(this).find('.contenido-servicios').slideDown( "slow" );
    });

});
