var myCenter = new google.maps.LatLng(21.007146206597294, 105.78311136868626);

function initialize(){
    var mapProp = {
        center:myCenter,
        zoom:12,
        scrollwheel:false,
        draggable:false,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
    position:myCenter,
});
marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);