<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
	
	<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
	<script type="text/javascript" src="{{asset('js/home2.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<script type="text/javascript" src="{{asset('js/chart.js')}}"></script>
	

	<title></title>
	<script type="text/javascript" src="{{asset('js/info.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/home2.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/info.css')}}">



	<!--link fonts-->
	
	<style>
	body{
		font-family: 'Far.Nazanin',Tahoma, Sans-Serif;
        font-size: 14px;
		font-style: normal; 
	}

	div.right{
		font-family: 'IranianSansRegular'; 
		font-weight: bold; 
		font-style: normal; 
	} 

	[class*='nav-'] span , [class*='layer-'] h5 ,[class*='layer-'] span{
		font-family: 'B yekan';
		font-weight: bold; 

	}

	</style>

</head>
<body>

<div  class="right rightLow" >
	<div class="header-right">
		<div class="logo">
			<li class="logoLi">
				<a  id="aa22" href="">
					<span class="description" >دادگستری</span>
					<img class="logoImg" src="{{asset('image/logo.jpg')}}" width="42">
				</a>
			</li>
		</div>
	</div>
<!-- baraye sakhtane navar samte rasti: safhe asli , dastgaha-->
	<div class="parent-sidebar-menu">
		<ul class="sidebar-menu">
			<li style="margin-top: 30px;">
				<a href="">
					<span class="description" >صفحه اصلی</span>
					<span>
						<img src="{{asset('icons/home.svg')}}" width="20">
					</span>
				</a>
			</li>		

			<li>
				<a href="">
					<span class="description">دستگاه ها</span>
					<span>
						<img src="{{asset('icons/reunion.svg')}}" width="20">
					</span>
				</a>
			</li>	
				

			<li>
				<a href="">
					<span class="description" >جرائم </span>
					<span>
						<img src="{{asset('icons/handcuff.svg')}}" width="20">

					</span>
				</a>
			</li>

			<li>
				<a class="description" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" title="" class="icon-logout"></a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                 </form>
			</li>	
		</ul>
	</div>
</div>

<div class="main">
	<div id="hl" class="header-left">
<!-- baray sakhte 2 icon search , menu-->
		<ul id="bars-search">
			<li id="sidebar-toggel" >
				<a id="mini" href="#bar">
					<img class="tools" src="{{asset('icons/menu.svg')}}" width="17">
				</a>
			</li>
			<li>
				<a href="">
					<img class="tools" src="{{asset('icons/search.svg')}}" width="17">
				</a>
			</li>

		</ul>
<!-- baray sakhte 3 icon notifiction  , email , profile -->
		<ul class="not-mai-pro">

			<li >
				<a href="#admin" class="admin top">
					<div class="imageProfile" >						
						<img src="" style="line-height: 64px">
						<div class="span" style="width: 400px">
							<span>{{Auth::user()->username}}</span>
						</div>
					</div>
					<div id="drop" class="setting-menu">
						<ul>
							<li class="menu">
								<a  href="" class="dropdown">
									<span>تنظیمات</span>
									<img src="{{asset('icons/settings.svg')}}" width="16">
								</a>
							</li>

							<li class="menu">
								<a  href="" class="dropdown">
									<span>حساب کاربری</span>
									<img src="{{asset('icons/user.svg')}}" width="16">
								</a>
							</li>

							<li class="menu" style="padding-bottom: 4px">
								<a  href="" class="dropdown">
									<span>پیام</span>
									<img src="{{asset('icons/message.svg')}}" width="16">
								</a>
							</li>

							<li class="inline"></li>

							<li class="menu">
								<a  href="" class="dropdown">
									<span>خروج</span>
									<img src="{{asset('icons/SVG/power-off.svg')}}" width="16">
								</a>
							</li>
						</ul>
					</div>	
				</a>
			</li>

			<li style="margin: 0 200px;">
				<a href="{{url('logout')}}" class="top">
					<img class="tools" src="{{asset('icons/notification.svg')}}" width="17">
				</a>
			</li>

			<li style="">
				<a href="" class="message top">
					<img class="tools" src="{{asset('icons/email.svg')}}" width="17">
				</a>
			</li>
		</ul>
	</div>
	
	<div class="total-nav">
		<div class="nav-1">
			<div class="innerna-1">
				<h3>تعداد خانواده</h3>
				<span>1000</span>
			</div>
		</div>
		<div class="nav-2">
			<div class="innerna-2">
				<h3>تعداد مرد</h3>
				<span>900</span>
			</div>
		</div>
		<div class="nav-3">
			<div class="innerna-3">
				<h3>تعداد زن</h3>
				<span>1100</span>
			</div>	
		</div>
		<div class="nav-4">
			<div class="innerna-4">		
				<h3>تعداد نوجوان</h3>
				<span>2000</span>
			</div>	
		</div>
	</div>
	<div class="table_1s_chart">
		<div class="close">X</div>
					<canvas id="pie-charts" width="800" height="250"></canvas>
	</div>
	<div class="table_4s_chart">
		<div class="close">X</div>
					<canvas id="pie-charts1" width="800" height="250"></canvas>
	</div>
	<div class="MiddleTotal">
		<div class="Middle">
			<div class="innerMiddle">
				@yield('map')
			</div>
		</div>

		<div class="Middle-left">
			<div class="innerMiddle-left">
				<div class="layers">
					<div class="chart" style="">
					<canvas id="polar-chart"></canvas>
					</div>
				</div>

			
				<div class="Middle-left-cent">
					
					
				</div>
			</div>	
		</div>
	</div>		
</div>


<div class="totalBottom">
	<div class="totalStats">
		<div class="stats-left">
			<div class="innerStats-left">
				<h5 style="margin: 4px 9px 0 0" >المان های کاهش جرم</h5>

				<ul>
					<li>
						<div class="check">
							<small class="context">مسجد</small>
							<span  style="background-color:#4caf50 " >20%</span>
						</div>
					</li>

					<li>
						<div class="check">
							<small class="context">مدرسه</small>
							<span style="background-color:#f44336 " >15%</span>
						</div>
					</li>

					<li>
						<div class="check">
							<small class="context">نا امن ساختن  محیط برای مجرمان</small>
							<span style="background-color: #ffeb3b ; color: black" >60%</span>
						</div>
					</li>

					<li>
						<div class="check">
							<small class="context">ایجاد اشتغال</small>
							<span style="background-color: #00bcd4" >50%</span>
						</div>
					</li>

					<li>
						<div class="check">
							<small class="context">فرهنگ سازی</small>
							<span style="background-color: #4caf50" >30%</span>
						</div>
					</li>

				</ul>

			</div>	
		</div>

		<div class="stats-right">
			<div class="innerStats-right">
				
				<div class="stats-layer-2">
					<div class="chart" style="">
					<canvas id="line-chart"></canvas>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="tablePlus">
		<div class="table">
			<div class="innerTable">
	
@yield('info')
			</div>
		</div>
		
	</div>
</div>

<div style="height: 3400px"></div>

<!-- <script>

$(function(){
	$('#mini').click(function(){
		$('body').toggleClass('mini');
	});
})
	
</script> -->

</body>
</html>


