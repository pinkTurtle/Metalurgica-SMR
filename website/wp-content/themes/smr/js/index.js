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


    (function(){
      var delay = 7000;
      var slideTimer;
      var NewSlider = require('newslider');

      var contentSlider = new NewSlider(o('.clientes-individual .content-slider'));
      slider_restart();

      var sliderContainer = o('.slider-navigator');

      sliderContainer.on('click', 'div', function() {
        var action = o(this).attr('class').substr(3);
        repro[action]();
      });

      /**
       * slider player
       */

      var repro = {
        play: function() {
          contentSlider.next();
          slider_restart();
        },
        stop: function(){
          slider_stop();
        },
        left: function(){
          contentSlider.prev();
        },
        right: function(){
          contentSlider.next();
        }
      };

      /**
       * Stop the slider
       */

      function slider_stop(){
        clearInterval(slideTimer);
      }

      /**
       * Restart the slider
       */

      function slider_restart(){
        if (slideTimer) {
          clearInterval(slideTimer);
        };

        // run slider animation
        slideTimer = window.setInterval(function(){
          contentSlider.next();
        }, delay);
      }
    })();
  }

  // Servicios slider
  if (o('.servicios:first-child .content-slider').length) {
    (function(){
      var delay = 7000;
      var slideTimer;
      var NewSlider = require('newslider');

      var contentSlider = new NewSlider(o('.servicios:first-child .content-slider'));
      slider_restart();

      var sliderContainer = o('.slider-navigator');

      sliderContainer.on('click', 'div', function() {
        var action = o(this).attr('class').substr(3);
        repro[action]();
      });

      /**
       * slider player
       */

      var repro = {
        play: function() {
          contentSlider.next();
          slider_restart();
        },
        stop: function(){
          slider_stop();
        },
        left: function(){
          contentSlider.prev();
        },
        right: function(){
          contentSlider.next();
        }
      };

      /**
       * Stop the slider
       */

      function slider_stop(){
        clearInterval(slideTimer);
      }

      /**
       * Restart the slider
       */

      function slider_restart(){
        if (slideTimer) {
          clearInterval(slideTimer);
        };

        // run slider animation
        slideTimer = window.setInterval(function(){
          contentSlider.next();
        }, delay);
      }
    })();
  }

    // seccion servicios
    // manejo de divs y 
    // de slider

    o(".descripciones .servicios").click(function() {
      if (o(this).find('.contenido-servicios').css('display')=='none') {
        o('.descripciones .servicios .contenido-servicios').slideUp( "slow" );
        o('.descripciones .servicios .contenido-servicios').css( 'opacity', '0' );
        o(this).find('.contenido-servicios').slideDown( "slow" );
        o(this).find('.contenido-servicios').css( 'opacity', '1' );
        contentSlider = null;
        clearInterval(slideTimer);

        if (o(this).find('.content-slider').length) {
          var a = o(this).find('.content-slider');
          console.log(a);
          (function(){
            var delay = 7000;
            var slideTimer;
            var NewSlider = require('newslider');

            var contentSlider = new NewSlider(a);
            slider_restart();

            var sliderContainer = o('.slider-navigator');

            sliderContainer.on('click', 'div', function() {
              var action = o(this).attr('class').substr(3);
              repro[action]();
            });

            /**
             * slider player
             */

            var repro = {
              play: function() {
                contentSlider.next();
                slider_restart();
              },
              stop: function(){
                slider_stop();
              },
              left: function(){
                contentSlider.prev();
              },
              right: function(){
                contentSlider.next();
              }
            };

            /**
             * Stop the slider
             */

            function slider_stop(){
              clearInterval(slideTimer);
            }

            /**
             * Restart the slider
             */

            function slider_restart(){
              if (slideTimer) {
                clearInterval(slideTimer);
              };

              // run slider animation
              slideTimer = window.setInterval(function(){
                contentSlider.next();
              }, delay);
            }
          })();

        }
      }
    });

});
