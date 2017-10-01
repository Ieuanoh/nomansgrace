function initMap() {
  var nmg = {
    lat: 51.467540,
    lng: -2.606345
  };
  var map = new google.maps.Map(document.getElementById('map-container'), {
    zoom: 18,
    center: nmg,
    styles: [{
        "stylers": [{
          "hue": "#dd0d0d"
        }]
      },
      {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [{
          "visibility": "on"
        }]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [{
            "lightness": 100
          }
        ]
      }
    ]


  });
  var marker = new google.maps.Marker({
    position: nmg,
    map: map
  });
}
