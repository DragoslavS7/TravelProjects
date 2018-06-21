/** Google maps to create latitude/longitude in database with marker **/

var position = [51.69042215176676, 18.043814188126134];
//function 1
function initialize() {
    var latlng = new google.maps.LatLng(position[0], position[1]);
    var myOptions = {
        zoom: 6,
        center: new google.maps.LatLng(document.getElementById("Latitude").value, document.getElementById("Longitude").value),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("mapCanvas"), myOptions);

    marker = new google.maps.Marker({
        position: new google.maps.LatLng(document.getElementById("Latitude").value, document.getElementById("Longitude").value),
        map: map,
        title: "Latitude:"+position[0]+" | Longitude:"+position[1]+ ""
    });

    google.maps.event.addListener(map, 'click', function(event) {
        var Latitude = event.latLng.lat();
        var Longitude = event.latLng.lng();
        document.getElementById('Latitude').value = Latitude;
        document.getElementById('Longitude').value = Longitude;
        var result = [Latitude, Longitude];
        console.log(result);
        transition(result);
    });
}

/*** Load google maps ***/

google.maps.event.addDomListener(window, 'load', initialize);


var numDeltas = 100;
var delay = 10;
var i = 0;
var deltaLat;
var deltaLng;

//function 2
function transition(result){
    i = 0;
    deltaLat = (result[0] - position[0])/numDeltas;
    deltaLng = (result[1] - position[1])/numDeltas;
    moveMarker();

}

//function 3
function moveMarker(){
    position[0] += deltaLat;
    position[1] += deltaLng;
    var latlng = new google.maps.LatLng(position[0], position[1]);
    marker.setTitle("Latitude:"+position[0]+" | Longitude:"+position[1]+"| Grad:"+ +"| Zemlja"+ +"| Opis");
    marker.setPosition(latlng);
    if(i!=numDeltas){
        i++;
        setTimeout(moveMarker, delay);
    }
}



