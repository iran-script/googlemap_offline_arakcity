<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#map{
			height: 1000px;
		}
	</style>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
</head>
<body>
	<div id="map"></div>

<script type="text/javascript">
	var map = L.map('map').setView([34.1005317,49.7116012], 13);

openstreetmap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

googleSat = L.tileLayer('getmap/{x}/{y}/{z}',{
    maxZoom: 20,
});

var baseMaps = {
    "openstreetmap": openstreetmap,
    "googleSat": googleSat
};
var baseMaps = {
    "<span style='color: gray'>Grayscale</span>": openstreetmap,
    "Streets": googleSat
};
L.control.layers(baseMaps).addTo(map);
var control = L.Routing.control({
  waypoints: [
    L.latLng(38.7436056, -9.2304153),
    L.latLng(38.5334477, -0.1312811)
  ],
  router: new L.Routing.osrmv1({
    language: 'en',
    profile: 'car'
  }),
}).addTo(map);


L.marker([34.1005317,49.7116012]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
</script>
</body>
</html>