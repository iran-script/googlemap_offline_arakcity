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
  <script src="{{asset('js/jahel.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/mosque_bakh.js')}}" type="text/javascript"></script>
 
<div class="row clearfix">
  <div class="col-md-6"></div>
</div>
<style type="text/css">
  .container{
    width: 1800px;
  }
  .container img{
    border-radius: 50%;
    position: relative;
    left: 15px;
    float: right;
  }
  .container .content{
      position: relative;
      left: 10px;
      float: left;
      font-family: IRANSansDN;
  }
  .container .content h3{
    text-align: right;
  }

  .container .content h4{
    color: #274abb;
    text-align: right;


  }

  .container .content h5{
    color: red;
    text-align: right;


  }

  .container .content h6{
    font-size: 13px;
    text-align: right;



  }
</style>






  <script type="text/javascript">
    $(document).ready(function(){
      
     var map = L.map('map').setView([34.0737328347, 49.66563820838], 13);
var wmsLayer = L.tileLayer.wms('http://localhost:8081/geoserver/testwms/wms', {
      layers: 'webgis:blk_jamiat95',
      format: 'image/png',
      transparent : true
     }).addTo(map);
     googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
      maxZoom: 20,
      subdomains:['mt0','mt1','mt2','mt3']
    });
     var openstreet = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });
     
     
     geo_offline = L.geoJSON(geo, {
      style: function(feature) {

        switch (feature.properties.type_id) {
          case '2': return {color: "#fafafa" ,stroke : "#fafafa" , opacity: 0.8,lineCap:'round',lineJoin:'round',weight:0.5,dashArray: 3};
          case '1':   return {color: "#111" ,stroke : "#f15814" , opacity: 1,lineCap:'round',lineJoin:'round',weight:1,fillOpacity:0};

        }
      },



      onEachFeature: function (feature, layer) {

        layer.on({
          click: whenClicked,
        });

        if (feature.properties && feature.properties.name_fa) {
          layer.bindPopup('<h3 class="popup_name">'+feature.properties.name_fa+'</h3><div class="popup"><a href="detail/'+feature.properties.name_en+'">جزئیات</a></div>');
        }

      }

    });

    

     var policeIcon = L.icon({
      iconUrl: 'image/police.png',
      iconSize: [32, 37],
      iconAnchor: [16, 37],
      popupAnchor: [0, -28]
    });

    var loca = L.markerClusterGroup();
     lo = L.geoJson(loc, {
      pointToLayer: function (feature, latlng) {
        return L.marker(latlng, {icon: policeIcon});
      },

      onEachFeature: function (feature, layer) {

        layer.bindPopup('<div class="row clearfix"><div class="container"><img width="180px" height="180px" src="image/nasiri.jpg"><div class="content"><h3>'+feature.properties.name+'</h3><h4>وضعیت :فعال </h4><h5> تعداد کارمندان : 10</h5></div></div></div>');
      }
    });
    loca.addLayer(lo);

     var sosIcon = L.icon({
      iconUrl: 'image/jahel.png',
      iconSize: [32, 37],
      iconAnchor: [16, 37],
      popupAnchor: [0, -28]
    });

    var mosa = L.markerClusterGroup();
    var mos = L.icon({
          iconUrl: 'image/mosque.png',
          iconSize: [32, 37],
          iconAnchor: [16, 37],
          popupAnchor: [0, -28]
        });
    mosque = L.geoJson(mosque_bakh, {
      pointToLayer: function (feature, latlng) {
        return L.marker(latlng, {icon: mos});
      }
    });
    mosa.addLayer(mosque);
    map.addLayer(mosa);

     var jahela = L.markerClusterGroup();
     ja = L.geoJson(jahel, {
      pointToLayer: function (feature, latlng) {
        return L.marker(latlng, {icon: sosIcon});
      },



      onEachFeature: function (feature, layer) {
         layer.on({
          click: whenClickedMarker,
        });
        layer.bindPopup('<div class="row clearfix"><div class="container"><img width="180px" height="180px" src="image/gft/'+feature.properties.Pic+'.jpg"><div class="content"><h3>'+feature.properties.Name+'</h3><h4>'+feature.properties.State+'</h4><h5>وضعیت فعلی:'+feature.properties.Vaziat+'</h5><h6>سابقه کیفری:'+feature.properties.Zendan+'</h6></div></div></div>');
      }
    });

     jahela.addLayer(ja);
     map.addLayer(jahela);



     var sosIcon = L.icon({
      iconUrl: 'image/sos.png',
      iconSize: [32, 37],
      iconAnchor: [16, 37],
      popupAnchor: [0, -28]
    });

     sos = L.geoJson(sos, {
      pointToLayer: function (feature, latlng) {
        return L.marker(latlng, {icon: sosIcon});
      }
    });


     var schoolIcon = L.icon({
      iconUrl: 'image/school.png',
      iconSize: [32, 37],
      iconAnchor: [16, 37],
      popupAnchor: [0, -28]
    });

     school = L.geoJson(school, {
      pointToLayer: function (feature, latlng) {
        return L.marker(latlng, {icon: schoolIcon});
      }
    });


     geojson = L.geoJSON(geo, {

      style: function(feature) {

        switch (feature.properties.type_id) {
          case '2': return {color: "#fafafa" ,stroke : "#fafafa" , opacity: 0.8,lineCap:'round',lineJoin:'round',weight:0.5,dashArray: 3};
          case '1':   return {color: "#111" ,stroke : "#f15814" , opacity: 1,lineCap:'round',lineJoin:'round',weight:1,fillOpacity:0};

        }
      },



      onEachFeature: function (feature, layer) {

        layer.on({
          click: whenClicked,
          mouseover: whenover,
          mouseout: whenleave


        });

        if (feature.properties && feature.properties.name_fa) {
          layer.bindPopup('<h3 class="popup_name">'+feature.properties.name_fa+'</h3><div class="popup"><a href="detail/'+feature.properties.name_en+'">جزئیات</a></div>');
        }

      }

    }).addTo(map);
     geojson_people = L.geoJson(geo, {
      style: function(feature) {


       switch (feature.properties.type_id) {
        case '2': return {color: "#fafafa" ,stroke : "#fafafa" , opacity: 1,lineCap:'round',lineJoin:'round',weight:0.5,dashArray: 3};
        case '1':   return {color: getColorPeople(feature.properties.people) ,stroke : getColorPeople(feature.properties.people) , opacity: 1,fillOpacity:0.5,lineCap:'round',lineJoin:'round',weight:1};

      }

    },
    onEachFeature: function (feature, layer) {

      layer.on({
        click: whenClicked,
        

      });

      if (feature.properties && feature.properties.name_fa) {
        layer.bindPopup('<h3 class="popup_name">'+feature.properties.name_fa+'</h3><div class="popup"><a href="detail/'+feature.properties.name_en+'">جزئیات</a></div>');
      }
    }



  });
     function getColorPeople(d) { 
      return d > 1000
      ? "#ef2d07"
      : d > 900
      ? "#ef5b3e"
      : d > 700
      ? "#ef7e28"
      : d > 500
      ? "#f2ab26"
      : d > 300
      ? "#fcd03f"
      : d > 100 ? "#fffb47" : d > 10 ? "#FED976" : "#FFEDA0";
    }





    geojson_motad = L.geoJson(geo, {
      style: function(feature) {


       switch (feature.properties.type_id) {
        case '2': return {color: "#fafafa" ,stroke : "#fafafa" , opacity: 1,lineCap:'round',lineJoin:'round',weight:0.5,dashArray: 3};
        case '1':   return {color: getColorPeople(feature.properties.motad) ,stroke : getColormotad(feature.properties.motad) , opacity: 1,fillOpacity:0.5,lineCap:'round',lineJoin:'round',weight:1};

      }

    },

  });
    function getColormotad(d) { 
      return d > 1000
      ? "#ef2d07"
      : d > 900
      ? "#ef5b3e"
      : d > 700
      ? "#ef7e28"
      : d > 500
      ? "#f2ab26"
      : d > 300
      ? "#fcd03f"
      : d > 100 ? "#fffb47" : d > 10 ? "#FED976" : "#FFEDA0";
    }






     var baseLayers = {
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>نقشه ماهواره ای</span>": googleSat,
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>نقشه جاده ها</span>": openstreet,


     };
     var layers = {
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>نقشه محله ها بدون فیلتر</span>":geojson,
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>بر حسب جمعیت</span>":geojson_people,
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>اراذل</span>":jahela,
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>بر حسب مجرمین شناسنامه دار</span>":geojson_motad,
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>گشت های بسیج</span>":loca,
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>مراکز درمانی</span>":sos,
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>اورژانس اجتماعی</span>":sos,
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>مساجد</span>":mosa,
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>پایگاه های بسیج</span>":sos,
       "<span class='text' style='font-size:20px;font-family:IRANSansDN'>اداره بهداشت</span>":sos
     }
     L.control.layers(baseLayers,layers).addTo(map);    



    

    function whenClicked(e) {
     $('#polar-chart').html();

     var name = e.target.feature.properties.name_en
     $.ajax({
      method: "GET",
      url:"get/info/"+name,

    });
   }

   function whenClickedMarker(e) {
     var lat = e.target.feature.geometry.coordinates[1];
     var lng = e.target.feature.geometry.coordinates[0];
     map.removeLayer(openstreet);
     map.addLayer(googleSat);

     map.setView(new L.LatLng(lat, lng), 20);
   }
   function whenover(e) {

     highlight(e.target);

   }
   function whenleave(e) {
     highleave(e.target);
   }
   function highlight (layer) {
     layer.setStyle({
      weight: 1.5,
      dashArray: ''
    });
   }

   function highleave (layer) {


     geojson.resetStyle(layer);


   }

   map.on('zoomend', function() {
    var zoomlevel = map.getZoom();
        if (zoomlevel==19){
            if (map.hasLayer(googleSat)) {
                map.removeLayer(googleSat);
                map.addLayer(openstreet);
            } else {
                console.log("no point layer active");
            }
        }
        console.log("Current Zoom Level =" + zoomlevel)
        });

 });	





</script>
