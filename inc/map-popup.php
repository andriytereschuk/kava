

<!-- Modal Map-->
<div class="modal fade" id="modalMap" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  	<div class="modal-content">
  		<div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></div>
  		<div class="map-title">Сан хосе, Гондурас</div>
  		<div id="mapPopap"></div>
  	</div>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.20&sensor=false"></script>
    <script>
    $(function() {
    	$('#modalMap').one('shown.bs.modal', function () {
    		initialize();
    	})

    	function initialize() {
    	  var myLatlng = new google.maps.LatLng(15.0420364,-88.3023978);
    	  var mapOptions = {
    	    zoom: 7,
    	    center: myLatlng,
    	    styles: [{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}]
    	  }
    	  var map = new google.maps.Map(document.getElementById('mapPopap'), mapOptions);

    	  var marker = new google.maps.Marker({
    	      position: myLatlng,
    	      map: map,
    	      icon: './images/marker.png',
    	      animation: google.maps.Animation.BOUNCE,
    	      title: 'Сан хосе, Гондурас'
    	  });
    	}
    });
    </script>
  </div>
</div>