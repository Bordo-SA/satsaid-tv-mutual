// In the following example, markers appear when the user clicks on the map.
// The markers are stored in an array.
// The user can then click an option to hide, show or delete the markers.
var map;

function initialize() {
  var direccion = new google.maps.LatLng(-34.6145299,-58.4231774);
  var mapOptions = {
    mapTypeId: google.maps.MapTypeId.TERRAIN,
    center: direccion,
     zoom: 12,
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
    position: direccion,
    map: map,
  });

  var contentString = "Quintino Bocayuba 105";
  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

}



google.maps.event.addDomListener(window, 'load', initialize);