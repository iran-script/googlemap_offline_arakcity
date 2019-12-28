<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/iranian-sans" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<!-- -------------------------bootstrap--------------------------- -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('css/bootstrap-4.2.1-dist/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-4.2.1-dist/css/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-4.2.1-dist/css/bootstrap-reboot.css')}}">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="bootstrap-4.2.1-dist/js/bootstrap.bundle.js"></script>
	<script src="bootstrap-4.2.1-dist/js/bootstrap.js"></script>
	<!-- ------------------------------------------------ -->
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{asset('js/sourceSlide.js')}}"></script>
	<script src="{{asset('js/slide.js')}}"></script>
	<script src="{{asset('js/page.js')}}"></script>

</head>
<body>


<div class="headerTop">
	<ul class="list-group list-group-flush">
		<li class="list-group-item">مرکز بهداشت</li>
		<li class="list-group-item">کوی سجادیه</li>
		<li class="list-group-item">کوچه نسترن</li>
		<li class="list-group-item">تلفن تماس 091000002020</li>
	</ul>
</div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/1111.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/55.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/4444.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="auto">
	<div class="list-group" id="myList" role="tablist">
	  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">ویژگی های دموگرافی</a>
	  <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">فعالیت های انجام شده</a>
	</div>

<div class="tab-content">
	<div class="tab-pane active" id="home" role="tabpanel">
		<div class="header">
			<h1>ویژگیهای دموگرافیک</h1>
		</div>
	


	<div class="layer1">

			<div class="right table_1">
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

			<div class="middle table_2" >
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

			<div class="left">
				<div class="leftTop table_3">
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

				<div class="leftBottom table_4">
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
			<div class="table_5">
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

			<div class="table_6">
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

			<div class="table_7">
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


	<div class="tab-pane" id="profile" role="tabpanel">
		<div class="layer2">	
			<h1>فعالیت های انجام شده</h1>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"> 	تهیه پکیج از عملکرد سال 1396</li>
				<li class="list-group-item list-group-item-primary"> 	15مورد مشاوره فردی وحضوری درزمینه های پیش ازازدواج؛اعتیاد؛تحصیلی؛فرزند پروری؛ارتباطات بین فردی؛اختلال وسواسی؛ افسردگی و اضطراب </li>
				<li class="list-group-item"> 	برگزاری 3جلسه آموزشی پیشگیری از اعتیاد</li>
				<li class="list-group-item"> 	برگزاری اردوی تفريحي کاشان</li>
				<li class="list-group-item"> 	برگزاری کارگاه آموزشی گلیم بافی</li>
				<li class="list-group-item"> 	برگزاری دوره ی آموزشی پیشگیری از اعتیاد به انواع مواد مخدر </li>
				<li class="list-group-item"> 	برگزاری کلاس تفسیر موضوعی قرآن</li>
				<li class="list-group-item"> 	برگزاری همایش پیاده روی به مناسبت هفته ی مبارزه با مواد مخدر </li>
				<li class="list-group-item"> 	برگزاری دوره ی آموزشی درمورد آشنایی با انواع مواد مخدر </li>
				<li class="list-group-item"> 	برگزاری جشن به مناسبت روز نیمه شعبان</li>
				<li class="list-group-item"> 	برگزاری 12جلسه ی 1ساعته زبان انگلیسی برای دانش آموزان دختر </li>
				<li class="list-group-item"> 	آموزش 12 جلسه کمک های اولیه</li>
				<li class="list-group-item"> 	آموزش مهارت همدلی</li>
				<li class="list-group-item"> 	آموزش مهارت تصمیم گیری</li>
				<li class="list-group-item"> 	آموزش نشاط در خانواده</li>
				<li class="list-group-item"> 	توزیع بسته های  لوازم التحریر بین دانش آموزان نیازمند منطقه ی باغ خلج</li>
				<li class="list-group-item"> 	برگزاری مراسم عزاداری به مناسبت تاسوعای و عاشورای امام حسین(ع)</li>
			</ul>
		</div>
	</div>
</div>

<!-- <div class="list-group" id="myList" role="tablist">
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Home</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Profile</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Messages</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Settings</a>
</div>

<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">sdjvndjsc fcsdfdsvsd seeeeeeeeeeeeeeeeeeeeeeeeeeeeeevdsvdsv</div>
  <div class="tab-pane" id="profile" role="tabpanel">sdjvndjsc fcsdfdsvsd svdfffffffffsvdsv</div>
  <div class="tab-pane" id="messages" role="tabpanel">swsdwqddwdwdwdddddddddddddddvdsvdsv</div>
  <div class="tab-pane" id="settings" role="tabpanel">sdjvndjsc fcsddddddddddddddddddddddfdsvsd svdsvdsv</div>
</div>

 -->
	

</body>
</html>


