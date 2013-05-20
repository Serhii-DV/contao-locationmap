(function(window, document, GMap, undefined){

	function LocationMapInit() {
		var nodeInfo = document.getElementById('map-infowindow'),
			lat = +nodeInfo.dataset.lat,
			lng = +nodeInfo.dataset.lng,
			pointerLatlng = new GMap.LatLng(lat, lng),
			centerLatlng = new GMap.LatLng(lat + 0.0003, lng + 0.0001);

		var mapOptions = {
				zoom: 18,
				center: centerLatlng,
				streetViewControl: false,
				mapTypeId: GMap.MapTypeId.ROADMAP
			};

		var map = new GMap.Map(document.getElementById('map-canvas'), mapOptions),
			infowindow = new GMap.InfoWindow({
				content: '<div class="infoWindow">'+nodeInfo.innerHTML+'</div>'
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

})(window, document, google.maps);