(function($, google){

	$.googlemap = {

		init: function(){
			// initialize Google Maps
			var map_canvas = $('#map_canvas'),
				map_info = {},
				gmaps = google.maps,
				latlng = {}, centerlatlng = {}, options = {}, map = {}, infoWindow = {}, marker = {};

			if (map_canvas.length) {
				// custom infoWindow
				map_info = $('#map_infoWindow');

				var lat = map_info.data('lat'),
					lng = map_info.data('lng');

				latlng = new gmaps.LatLng(lat, lng);
				centerlatlng = new gmaps.LatLng(lat + 0.001, lng + 0.0001);

				options = {
					zoom: 16,
					center: centerlatlng,
					streetViewControl: false,
					mapTypeId: gmaps.MapTypeId.ROADMAP
				};

				// initialize map
				map = new gmaps.Map(map_canvas[0], options);

				infoWindow = new gmaps.InfoWindow({
					content: '<div class="infoWindow">'+map_info.html()+'</div>'
				});

				// marker
				marker = new gmaps.Marker({
					position: latlng,
					map: map,
					title: 'My title'
				});

				// show infoWindow
				infoWindow.open(map, marker);
			}
		}
	};

	$.googlemap.init();

})(jQuery, google);