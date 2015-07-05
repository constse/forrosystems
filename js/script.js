var map;

function mapInit() {
    map = new ymaps.Map("map", {
        center: [56.09641098, 40.34801753],
        zoom: 15,
        controls: []
    });
    map.geoObjects.add(new ymaps.Placemark([56.09641098, 40.34801753], {
        hintComment: '123',
        balloonContent: '123'
    }));
}

$(document).ready(function() {
    ymaps.ready(mapInit);
});