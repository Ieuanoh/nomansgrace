
(function($){


  var sticky = new Waypoint.Sticky({  
    element: $('#main-nav')[0] 
  });



// Show back to top button on map

var toTop = $('#to-top');

var map = $('#map');

        map.waypoint(function() {
          toTop.addClass('db-l').addClass('animated fadeIn');
          },{
              triggerOnce: true,
        });


})( jQuery );
