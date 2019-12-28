@extends('home2')
@section('map')	
	<title>نقشه جی ای اس دادگستری</title>

	


	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		#map {
			width: 100%;
			height:100%;
		}
		.text{
			font-size: 20px;
		}
    .popup_name{
      text-align: center;
      font-size: 20px;
    }
    .popup{
      font-size: 16px;
      text-align: center;
    }
	</style>


	
</head>
<body>

<div id='map'></div>



<script type="text/javascript" src="{{asset('js/location.js')}}"></script>

<script src="{{asset('js/geo.js')}}" type="text/javascript"></script>
<script src="{{asset('js/geol.js')}}" type="text/javascript"></script>
<script src="{{asset('js/sos.js')}}" type="text/javascript"></script>
<script src="{{asset('js/school.js')}}" type="text/javascript"></script>



</script>


<script>

	var map = L.map('map').setView([34.0737328347, 49.66563820838], 14);

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

}).addTo(map);
var policeIcon = L.icon({
  iconUrl: 'image/police.png',
  iconSize: [32, 37],
  iconAnchor: [16, 37],
  popupAnchor: [0, -28]
});

loc = L.geoJson(loc, {
  pointToLayer: function (feature, latlng) {
    return L.marker(latlng, {icon: policeIcon});
  },

  onEachFeature: function (feature, layer) {
  layer.bindPopup('<a href="place/'+feature.properties.type+'/'+feature.properties.name+'">'+feature.properties.name+'</a>');
  }
});



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

});
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
            case '1':   return {color: getColormotad(feature.properties.motad) ,stroke : getColormotad(feature.properties.motad) , opacity: 1,fillOpacity:0.5,lineCap:'round',lineJoin:'round',weight:1};
           
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
    "<span class='text'>نقشه ماهواره ای</span>": googleSat,
    "<span class='text'>نقشه جاده ها</span>": openstreet,
    "<span class='text'>نقشه آفلاین</span>": geo_offline,


};
   var layers = {
   	"<span class='text'>نقشه محله ها بدون فیلتر</span>":geojson,
   	"<span class='text'>بر حسب جمعیت</span>":geojson_people,
   	"<span class='text'>بر حسب تعداد معتاد ها</span>":geojson_motad,
   	"<span class='text'>کلانتری ها</span>":loc,
   	"<span class='text'>مراکز درمانی</span>":sos,
    "<span class='text'>اورژانس اجتماعی</span>":sos,
    "<span class='text'>مساجد</span>":sos,
    "<span class='text'>پایگاه های بسیج</span>":sos,
    "<span class='text'>اداره بهداشت</span>":sos,
    "<span class='text'>خیریه ها</span>":sos,
    "<span class='text'>نانوایی</span>":sos,
    "<span class='text'>سوپر مارکت</span>":sos,
    "<span class='text'>مشاور املاک</span>":sos,
    "<span class='text'>مراکز درمانی</span>":sos,
    "<span class='text'>مراکز درمانی</span>":sos,
   	"<span class='text'>مراکز آموزشی</span>":school
   }
    L.control.layers(baseLayers,layers).addTo(map);    

    


function whenClicked(e) {
       $('#polar-chart').html();

	var name = e.target.feature.properties.name_en
	$.ajax({
		method: "GET",
		url:"get/info/"+name,
   
	}).done(function(result){
      name_fa= result.name_fa;
      family= result.family;
      people= result.people;
      people_male= result.people_male;
      people_farmle= result.people_farmle;
       $('.innerna-1 span').html(family);
       $('.innerna-2 span').html(people);
       $('.innerna-3 span').html(people_male);
       $('.innerna-4 span').html(people_farmle);
        new Chart(document.getElementById("polar-chart"), {
            type: 'doughnut',
            data: {
              labels: ["قتل", "دزدی", "اعتیاد", "تجاوز", "طلاق"],
              datasets: [
                {
                  label: "",
                  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
                  data: [family,people,people_farmle,people_male,people_male]
                }
              ]
            },
            options: {
              title: {
                display: true,
                text: 'امار جرم های این منطقه'
              }
            }
         });


  });

   new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ['فروردین','اردیبهشت','خرداد','تیر','مرداد','شهریور','مهر','آبان','آذر','دی'],
    datasets: [{ 
        data: [86,114,106,106,107,111,133,221,783,24],
        label: "بیکاری",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [1,350,410,302,135,109,447,12,370,52],
        label: "ضرب و شتم",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [168,170,178,190,203,276,408,547,675,734],
        label: "ازدواج",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [40,20,10,16,24,38,74,167,508,784],
        label: "طلاق",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [6,3,2,2,7,26,82,172,312,433],
        label: "زاد و ولد",
        borderColor: "#c45850",
        fill: false
      }, { 
        data: [116,113,112,112,117,456,192,362,312,133],
        label: "مرگ",
        borderColor: "#c44871",
        fill: false
      }, { 
        data: [26,223,42,52,67,726,882,272,512,173],
        label: "تجاوز",
        borderColor: "#c41029",
        fill: false
      }, { 
        data: [56,63,92,12,27,26,82,172,312,433],
        label: "اعتیاد",
        borderColor: "#c41197",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'آمار سال 1397'
    }
  }
});

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


</script>


@stop

@section('info')
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">
    <div class="header" style="margin-bottom: 25px">
      <h1>ویژگیهای دموگرافیک</h1>
    </div>    
  <div class="layer1s">

      <div class="rights table_1s">
        
        <h4>جدول شماره 1- سن</h4>
        <table class="table  table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">سن</th>
              <th scope="col">تعداد</th>
              <th scope="col">درصد</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>زیر 15 سال</td>
              <td>159</td>
              <td>14,36</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>18-15 سال</td>
              <td>80</td>
              <td>722</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>25-18 سال</td>
              <td>164</td>
              <td>14,81</td>
            </tr> 
            <tr>
              <th scope="row">4</th>
              <td>35-25 سال</td>
              <td>237</td>
              <td>21,40</td>
            </tr> 
            <tr>
              <th scope="row">5</th>
              <td>45-35 سال</td>
              <td>265</td>
              <td>23,93</td>
            </tr> 
            <tr>
              <th scope="row">6</th>
              <td>55-45 سال</td>
              <td>163</td>
              <td>14,72</td>
            </tr> 
            <tr>
              <th scope="row">7</th>
              <td>65-55 سال</td>
              <td>31</td>
              <td>2,8</td>
            </tr> 
            <tr>
              <th scope="row">8</th>
              <td>65 و بالاتر</td>
              <td>8</td>
              <td>0,72</td>
            </tr> 
            <tr>
              <th scope="row">9</th>
              <td>جمع کل </td>
              <td>1107</td>
              <td>100</td>
            </tr> 
            </tbody>
        </table>
      </div>

      <div class="middles table_2s" >
        <h4>جدول شماره 2- بعد خانوار</h4>
        <table class="table  table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">بعد خانوار</th>
              <th scope="col">تعداد</th>
              <th scope="col">درصد</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>1 نفر</td>
              <td>19</td>
              <td>1,71</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>2 نفر</td>
              <td>119</td>
              <td>10,74</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>3نفر</td>
              <td>216</td>
              <td>19,51</td>
            </tr> 
            <tr>
              <th scope="row">4</th>
              <td>4 نفر</td>
              <td>506</td>
              <td>45,70</td>
            </tr> 
            <tr>
              <th scope="row">5</th>
              <td>5 نفر</td>
              <td>172</td>
              <td>15,53</td>
            </tr> 
            <tr>
              <th scope="row">6</th>
              <td>6 نفر</td>
              <td>23</td>
              <td>2,07</td>
            </tr> 
            <tr>
              <th scope="row">7</th>
              <td>7 نفر</td>
              <td>16</td>
              <td>1,44</td>
            </tr> 
            <tr>
              <th scope="row">8</th>
              <td>8 نفر</td>
              <td>5</td>
              <td>0,45</td>
            </tr> 
            <tr>
              <th scope="row">9</th>
              <td>9 نفر</td>
              <td>1</td>
              <td>0,09</td>
            </tr>     
            <tr>
              <th scope="row">10</th>
              <td>10 نفر وبلاتر</td>
              <td>0</td>
              <td>0</td>
            </tr>     
            <tr>
              <th scope="row">11</th>
              <td>جمع کل</td>
              <td>1107</td>
              <td>100</td>
            </tr> 
            </tbody>
        </table>
      </div>

      <div class="lefts">
        <div class="leftTops table_3s">
          <h4>جدول شماره 3- ویژگی های جنسیتی</h4>
          <table class="table  table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">جنس</th>
                <th scope="col">تعداد</th>
                <th scope="col">درصد</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <th scope="row">1</th>
                <td>زن</td>
                <td>1053</td>
                <td>95,15</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>مرد</td>
                <td>54</td>
                <td>4,87</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>جمع</td>
                <td>1107</td>
                <td>100</td>
              </tr> 
              
              </tbody>
          </table>
        </div>

        <div class="leftBottoms table_4s">
          <h4>جدول شماره 4- تحصیلات</h4>
          <table class="table  table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">میزان تحصیلات</th>
                <th scope="col">تعداد</th>
                <th scope="col">درصد</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <th scope="row">1</th>
                <td>بی سواد</td>
                <td>94</td>
                <td>0,67</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>ابتدائی</td>
                <td>497</td>
                <td>44,65</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>راهنمائی</td>
                <td>312</td>
                <td>28,18</td>
              </tr> 
              <tr>
                <th scope="row">4</th>
                <td>متوسطه</td>
                <td>183</td>
                <td>16,53</td>
              </tr> 
              <tr>
                <th scope="row">5</th>
                <td>عالی</td>
                <td>21</td>
                <td>1,89</td>
              </tr> 
              <tr>
                <th scope="row">6</th>
                <td>جمع</td>
                <td>1107</td>
                <td>100</td>
              </tr> 
              </tbody>
          </table>
        </div>
      </div>  
      <div class="table_5s">
        <h4>جدول شماره 5- شغل</h4>
        <table class="table  table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">میزان تحصیلات</th>
              <th scope="col">تعداد</th>
              <th scope="col">درصد</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>شاغل</td>
              <td>75</td>
              <td>6,77</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>بیکار</td>
              <td>1032</td>
              <td>93,22</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>جمع</td>
              <td>1107</td>
              <td>100</td>
            </tr>   
            </tbody>
        </table>
      </div>

      <div class="table_6s">
        <h4>جدول شماره 6-درآمد</h4>
        <table class="table  table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">میزان درآمدماهیانه خانوار
              ( به هزار تومان)</th>
              <th scope="col">تعداد</th>
              <th scope="col">درصد</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>100- 0</td>
              <td>64</td>
              <td>5,78</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>200-100</td>
              <td>148</td>
              <td>13,36</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>300-200</td>
              <td>124</td>
              <td>11,20</td>
            </tr>     
            <tr>
              <th scope="row">4</th>
              <td>400-300</td>
              <td>511</td>
              <td>46,16</td>
            </tr>     
            <tr>
              <th scope="row">5</th>
              <td>400 و بالاتر</td>
              <td>257</td>
              <td>23,21</td>
            </tr>   
            </tbody>
        </table>
      </div>

      <div class="table_7s">
        <h4>جدول شماره 7- وضعیت مسکن</h4>
        <table class="table  table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">وضعیت مسکن</th>
              <th scope="col">تعداد</th>
              <th scope="col">درصد</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>شخصی</td>
              <td>688</td>
              <td>62,14</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>رهن/ اجاره</td>
              <td>91</td>
              <td>8,76</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>سازمانی</td>
              <td>13</td>
              <td>1,17</td>
            </tr>     
            <tr>
              <th scope="row">4</th>
              <td>وقفی</td>
              <td>30</td>
              <td>2,71</td>
            </tr>     
            <tr>
              <th scope="row">5</th>
              <td>منزل دوستان /بستگان</td>
              <td>55</td>
              <td>4,96</td>
            </tr>   
            <tr>
              <th scope="row">6</th>
              <td>سایر</td>
              <td>230</td>
              <td>20,77</td>
            </tr>   
            <tr>
              <th scope="row">7</th>
              <td>جمع</td>
              <td>1107</td>
              <td>100</td>
            </tr>   
            </tbody>
        </table>
      </div>
    </div>  
</div>  
@stop