function createMap(){
    var mapProp = {
        center: new google.maps.LatLng(45.411695, 11.887473),
        zoom: 15,
    };
    var map = new google.maps.Map(document.getElementById("map"),mapProp);
    var marker = new google.maps.Marker({
        position: mapProp["center"],
        map: map,
        title: "La Bottega del Suono",
    });
}