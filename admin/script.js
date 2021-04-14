window.onload = initMap;
var map;
var server = "http://localhost/uumlocator/admin";

function initMap() {
	basemap();

}

function basemap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: { lat: 6.459668, lng: 100.505362 },
		zoom: 12,
		mapTypeId: 'roadmap'
	});

}
function initialize() {
	// Baris berikut digunakan untuk mengisi marker atau tanda titik di peta  

	var centerMap = new google.maps.LatLng(6.459668, 100.505362); // mengatur pusat peta  

	var myOptions = {
		zoom: 13, // level zoom peta  
		center: centerMap, // setting pusat peta ke centerMap  
		mapTypeId: google.maps.MapTypeId.ROADMAP //menentukan tipe peta  
	}

	var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); //menempatkan peta pada div dengan ID map_canvas di html  

	setMarkers(map, sites); // memanggil fungsi setMarker untuk menandai titik di peta.  

	infowindow = new google.maps.InfoWindow({
		content: "loading..."
	});

	var bikeLayer = new google.maps.BicyclingLayer();
	bikeLayer.setMap(map); //memnunculkan peta  

}

function setMarkers(map, markers) {
	//berikut merupakan perulangan untuk membaca masing masing titik yang telah kita definisikan di sites[];  
	for (var i = 0; i < markers.length; i++) {
		var sites = markers[i];
		var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);
		var marker = new google.maps.Marker({
			position: siteLatLng,
			map: map,
			title: sites[0],
			zIndex: sites[3],
			html: sites[4]

		});

		var contentString = "Some content";
		// berikut merupakan fungsi untuk mengatur agar keterangan marker muncuk ketika mouse diarahkan ke marker (mouse over)  
		google.maps.event.addListener(marker, "mouseover", function () {

			infowindow.setContent(this.html);
			infowindow.open(map, this);
		});
	}
}
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	infoWindow.setPosition(pos);
	infoWindow.setContent('Error: Kesalahan layanan geolokasi.' + 'Error: <i>Browser</i> anda tidak mendukung geolokasi.');
}