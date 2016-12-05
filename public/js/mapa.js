
var marker;
function iniciarMapa() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: {
            lat: 19.2464696, lng: -99.10134979999998
        }
    });
    map.addListener('click', function(e) {
        placeMarker(e.latLng, map);
    });
    // Create the search box and link it to the UI element.
    var input = document.getElementById('buscarUbicacion');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    google.maps.event.addDomListener(input, 'keydown', function(e) {
        if (e.keyCode == 13) {
            e.preventDefault();
        }
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();
        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function(marker) {
            marker.setMap(null);
        });

        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
}

function getCoords(marker){
    document.getElementById("coordenadaLatitud").value= marker.getPosition().lat();
    document.getElementById("coordenadaLongitud").value= marker.getPosition().lng();
}

function placeMarker(latLng, map) {
    if (marker) {
        marker.setPosition(latLng);
    }else{
        marker = new google.maps.Marker({
            position: latLng,
            map: map
        });
    }
    map.panTo(latLng);
    getCoords(marker);
}
