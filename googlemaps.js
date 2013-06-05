// Initializing Map and centering it at Mumbai, India
var map;
var myCenter = new google.maps.LatLng(19.1, 73)

function initialize()
{
    // Setting map options
    var mapOptions =
    {
        center: myCenter,
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    // Creating an object 'map' with id="googlemaps" and above defined map options
    map = new google.maps.Map(document.getElementById("googlemaps"), mapOptions);

    // Defining an event to place a marker when the user clicks on the map
  //  google.maps.event.addListener(map, 'click', function(event){
       // map.setCenter(marker.getPosition());
       // placeMarker(event.LatLng);
   google.maps.event.addListener(map, 'click', function( event ){
  alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() ); 
});
   
  //  });

}

// Defining a function for placing a marker on the map
function placeMarker(location)
{
    var marker = new google.maps.Marker({
    position: location,
    map: map
    });
  
    var infowindow = new google.maps.InfoWindow({
        //content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
        content: location.lat() + '<br>' + location.lng()
    });
    
    infowindow.open(map,marker);
}

// Run function "initialize"
google.maps.event.addDomListener(window, 'load', initialize);