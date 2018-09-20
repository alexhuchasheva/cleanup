ymaps.ready(function () {
    var yandexMap = new ymaps.Map('yaMap', {
        center: [60.011194, 30.246869],
        zoom: 17,
        height: 500,
        controls: []
    });
    yandexPlacemark = new ymaps.Placemark([60.011194, 30.246869], {
        hintContent: 'Свадебное Бюро "Светлый день"',
        balloonContent: 'Свадебное Бюро "Светлый день". Ваша идеальная свадьба — наша забота!'
    });
    yandexMap.geoObjects.add(yandexPlacemark);
});