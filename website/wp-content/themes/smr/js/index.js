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

  // conent slider
  if (o('.clientes-individual .content-slider').length) {
    debug('Rendering main slider');

    var NewSlider = require('newslider');
    var firstslide = o('a.firstslide');
    var nextslide = o('a.nextslide');
    var prevslide = o('a.prevslide');
    var lastslide = o('a.lastslide');

    var mySlider = new NewSlider('.content-slider');

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

    var slideTimer = window.setInterval(function(){
      mySlider.next();
    }, 7000);
  }

  if (o('.servicios:first-child .content-slider').length) {
    var NewSlider = require('newslider');
    contentSlider = new NewSlider(o('.servicios:first-child .content-slider'));

    slideTimer = window.setInterval(function(){
      contentSlider.next();
    }, 7000);

  }

    // seccion servicios
    // manejo de divs y 
    // de slider
    //
    o(".descripciones .servicios").click(function() {
      if (o(this).find('.contenido-servicios').css('display')=='none') {
        o('.descripciones .servicios .contenido-servicios').slideUp( "slow" );
        o('.descripciones .servicios .contenido-servicios').css( 'opacity', '0' );
        o(this).find('.contenido-servicios').slideDown( "slow" );
        o(this).find('.contenido-servicios').css( 'opacity', '1' );
        contentSlider = null;
        clearInterval(slideTimer);

      if (o(this).find('.content-slider').length) {
        NewSlider = require('newslider');
        contentSlider = new NewSlider(o(this).find('.content-slider'));

        slideTimer = window.setInterval(function(){
          contentSlider.next();
        }, 7000);
      }
      }

    });

});
