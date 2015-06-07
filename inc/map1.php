

<div id="map"></div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.20&sensor=false"></script>
<script>
$(function() {
	$('#content').addClass('content-map');
	function initialize() {
	    var infos = [];
	    var locations = [
	        ['<div class="info-window"><h2>м. Львів, <br> пл. Катедральна, 6</h2><div class="i-work"><b>Пн-Сб</b><span>7:45 - 23:00</span></div><div class="i-work"><b>Нд</b><span>8:45 - 23:00</span></div></div>', 49.840362, 24.030733, 1],
	        ['<div class="info-window"><h2>м. Львів, <br> вул. Кульпарківська, 59</h2><div class="i-work"><b>Пн-Пт</b><span>9:00 - 18:00</span></div><div class="i-work"><b>Сб-Нд</b><span>8:45 - 23:00</span></div></div>', 49.8152593, 23.9845951,17, 2]
	    ];

	    var map = new google.maps.Map(document.getElementById('map'), {
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
	        zoom: 13,
	        scrollwheel: false,
	        zoomControl: true,
	        zoomControlOptions: {
	            style: google.maps.ZoomControlStyle.SMALL
	        },
	        styles: [{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}]
	    });

	    var bounds = new google.maps.LatLngBounds();

	    for (i = 0; i < locations.length; i++) {
	        var marker = new google.maps.Marker({
	            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	            map: map,
	            icon: './images/marker.png',
	            content: locations[i][0]
	        });
	        var infowindow = new google.maps.InfoWindow();
	        google.maps.event.addListener(marker, 'click', (function (marker, i, infowindow) {
	            return function () {
	                infowindow.setContent(this.content);
	                infowindow.open(map, this);
	            };
	        })(marker, i, infowindow));
	        bounds.extend(marker.position);

	        google.maps.event.trigger(marker, 'click');
	    }

	    map.fitBounds(bounds);

	    // START INFOWINDOW CUSTOMIZE.
	    google.maps.event.addListener(infowindow, 'domready', function() {

	      var iwOuter = $('.gm-style-iw');
	      var iwBackground = iwOuter.prev();

	      iwBackground.css({'display' : 'none'});
	      iwOuter.parent().parent().css({left: '80px',top: '45px'});

	      var iwCloseBtn = iwOuter.next();
	      iwCloseBtn.css({opacity: '1', right: '80px', top: '40px'});
	      // The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
	      iwCloseBtn.mouseout(function(){
	        $(this).css({opacity: '1'});
	      });
	    });
	}

	google.maps.event.addDomListener(window, 'load', initialize);
});
</script>