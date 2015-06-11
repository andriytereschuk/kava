
<!-- Partners2 -->
<section id="partners2">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>наші партнери</h1>
				<div class="partners-txt">
									<p>Тут можна скуштувати нашу каву <br> Найкращі сорти кави, чаю, смачні десерти, чудовий музичний фон.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="partnersMap"></div>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.20&sensor=false"></script>
<script>
$(function() {
	$('#content').addClass('content-map');
	function initialize() {
	    var infos = [];
	    var locations = [
	        ['<div class="info-window"><div class="mCity">м. Львів </div><div class="mCafe">Cafe Hafan</div><div class="mStreet">пл. Катедральна, 32</div</div>', 49.8152593, 23.9845951],
	        ['<div class="info-window"><div class="mCity">м. Вінниця </div><div class="mCafe">Cafe Hafan</div><div class="mStreet">пл. Катедральна, 32</div</div>', 49.2359442,28.4840144]
	    ];

	    var map = new google.maps.Map(document.getElementById('partnersMap'), {
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
	                customizeInfoWindow();
	            };
	        })(marker, i, infowindow));
	        bounds.extend(marker.position);
	    }

	    map.fitBounds(bounds);

	    function customizeInfoWindow() {
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
	    }
	}

	google.maps.event.addDomListener(window, 'load', initialize);
});
</script>