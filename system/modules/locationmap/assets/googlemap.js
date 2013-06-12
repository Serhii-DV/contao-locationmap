(function($, window, document, GMap, undefined){

	function LocationMapInit() {
		var nodeInfo = $('#map-infowindow'),
			lat = +nodeInfo.data('lat'),
			lng = +nodeInfo.data('lng'),
			zoom = +nodeInfo.data('zoom'),
			pointerLatlng = new GMap.LatLng(lat, lng),
			centerLatlng = new GMap.LatLng(lat + 0.0003, lng + 0.0001);

		var mapOptions = {
				zoom: zoom,
				center: centerLatlng,
				streetViewControl: false,
				mapTypeId: GMap.MapTypeId.ROADMAP
			};

		var map = new GMap.Map(document.getElementById('map-canvas'), mapOptions),
			infowindow = new GMap.InfoWindow({
				content: '<div class="infoWindow">'+nodeInfo.html()+'</div>'
			});

		// marker
		var marker = new GMap.Marker({
			position: pointerLatlng,
			map: map,
			title: ''
		});

		// open marker
		infowindow.open(map, marker);

		GMap.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
	}

	GMap.event.addDomListener(window, 'load', LocationMapInit);

})(jQuery, window, document, google.maps);