<!-- LeafLet
		================================================== -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />

		<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
		<script src="https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js"></script>
		<script type="text/javascript" src="{{asset('js/location.js')}}"></script>

		<script src="{{asset('js/geo.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/geol.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/sos.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/school.js')}}" type="text/javascript"></script>


<!-- Jquery Core Js --> 
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 


<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js --> 
<script src="{{asset('assets/js/pages/maps/google.js')}}"></script> 


<script type="text/javascript" src="{{asset('js/location.js')}}"></script>

<script src="{{asset('js/geo.js')}}" type="text/javascript"></script>
<script src="{{asset('js/mosque_bakh.js')}}" type="text/javascript"></script>
<script src="{{asset('js/police_bakh.js')}}" type="text/javascript"></script>
<script src="{{asset('js/ms_bakh.js')}}" type="text/javascript"></script>
<script src="{{asset('js/sos_bakh.js')}}" type="text/javascript"></script>
<script src="{{asset('js/mm.js')}}" type="text/javascript"></script>







<script src="{{asset('js/'.$name.'.js')}}" type="text/javascript"></script>





<script>
	$(function(){

	var map = L.map('map').setView([34.0737328347, 49.66563820838], 16);

	googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
     });
    var openstreet = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		    });
 
   bakhalajoffline = L.geoJSON(bakhalaj, {

    style: function(feature) {
    	
      return {color: "blue" ,stroke : "#f15814" , opacity: 1,lineCap:'round',lineJoin:'round',weight:1,fillOpacity:0};  
        },
	}).addTo(map);
   
   bakhalajmavad = L.geoJSON(bakhalaj, {
   	style: function(feature) {
    if (feature.properties.type_id==2) 
    {
    	 return {color: getColormotad(feature.properties.motad) ,stroke : getColormotad(feature.properties.motad) , opacity: 1,fillOpacity:0.5,lineCap:'round',lineJoin:'round',weight:1};
    }

    if (feature.properties.type_id==1) 
    {
    	 return {color: "gray" ,stroke : "#f15814" , opacity: 1,lineCap:'round',lineJoin:'round',weight:1,fillOpacity:0};
    }
           
    }
	});

   function getColormotad(d) { 
	 return d > 9
        ? "red"
        : d > 8
          ? "#ef5b3e"
          : d > 7
            ? "#ef7e28"
            : d > 5
              ? "#f2ab26"
              : d > 4
                ? "#fcd03f"
                : d > 2 ? "#fffb47" : d > 1 ? "#FED976" : "#FFEDA0";
}

  

map.locate({setView: true, maxZoom: 16});
var mosqueIcon = L.icon({
  iconUrl: '../image/mosque.png',
  iconSize: [32, 37],
  iconAnchor: [16, 37],
  popupAnchor: [0, -28]
});

mosque_bakh = L.geoJson(mosque_bakh, {
  pointToLayer: function (feature, latlng) {
    return L.marker(latlng, {icon: mosqueIcon});
  },
  onEachFeature: function (feature, layer) {
  layer.bindPopup('<a href="">'+feature.properties.mosque+'</a><br/>'+'<a href="">امام جماعت : '+feature.properties.emam+'</a>');
  }
});

var policeIcon = L.icon({
  iconUrl: '../image/police.png',
  iconSize: [32, 37],
  iconAnchor: [16, 37],
  popupAnchor: [0, -28]
});

police_bakh = L.geoJson(police_bakh, {
  pointToLayer: function (feature, latlng) {
    return L.marker(latlng, {icon: policeIcon});
  },
  onEachFeature: function (feature, layer) {
  layer.bindPopup('<a href="">کلانتری شماره 14 باغ خلج</a>');
  }

});


ms_bakh = L.geoJson(ms_bakh, {
  
  onEachFeature: function (feature, layer) {
  layer.bindPopup('<a href="">موسسه خیریه امام کاظم علیه السلام</a>');
  }

});


mm = L.geoJson(mm, {
   style: function(feature) {
      
              return {color: "red" ,stroke : "red" , opacity: 1,lineCap:'round',lineJoin:'round',weight:1,fillOpacity:0.5};
           
        
        },

  onEachFeature: function (feature, layer) {
  layer.bindPopup('<a href="">فریدون رشیدی سابقه 10 سال زندان کیفری</a>');
  }

});

var sosIcon = L.icon({
  iconUrl: '../image/sos.png',
  iconSize: [32, 37],
  iconAnchor: [16, 37],
  popupAnchor: [0, -28]
});

sos_bakh = L.geoJson(sos_bakh, {
   pointToLayer: function (feature, latlng) {
    return L.marker(latlng, {icon: sosIcon});
  },
  onEachFeature: function (feature, layer) {
  layer.bindPopup('<a href="sos/14">اورژانس اجتماعی 14</a>');
  }

});



   
    var baseLayers = {
    "<span class='text' style='font-size:20px;font-family:IRANSansDN'>نقشه ماهواره ای</span>": googleSat,
    "<span class='text' style='font-size:20px;font-family:IRANSansDN'>نقشه جاده ها</span>": openstreet,
    "<span class='text' style='font-size:20px;font-family:IRANSansDN'>نقشه آفلاین</span>": bakhalajoffline,


};
var Layers = {
  
    "<span class='text' style='font-size:20px;font-family:IRANSansDN'>نقشه آفلاین</span>": bakhalajoffline,
    "<span class='text' style='font-size:20px;font-family:IRANSansDN'> بر حسب مقدار مواد کشف شده</span>": bakhalajmavad,
     "<span class='text' style='font-size:20px;font-family:IRANSansDN'>مساجد</span>": mosque_bakh,
     "<span class='text' style='font-size:20px;font-family:IRANSansDN'>کلانتری ها</span>": police_bakh,
     "<span class='text' style='font-size:20px;font-family:IRANSansDN'>خیریه ها</span>": ms_bakh,
     "<span class='text' style='font-size:20px;font-family:IRANSansDN'>اورژانس اجتماعی</span>": sos_bakh,
     "<span class='text' style='font-size:20px;font-family:IRANSansDN'>سابقه دارها</span>": mm,






};

    L.control.layers(baseLayers,Layers).addTo(map);     
    })   
</script>