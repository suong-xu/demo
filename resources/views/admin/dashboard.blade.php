<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="http://127.0.0.1:8000/backend/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="http://127.0.0.1:8000/backend/css/style.css" rel='stylesheet' type='text/css' />
<link href="http://127.0.0.1:8000/backend/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="http://127.0.0.1:8000/backend/css/font.css" type="text/css"/>
<link href="http://127.0.0.1:8000/backend/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="http://127.0.0.1:8000/backend/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="http://127.0.0.1:8000/backend/css/monthly.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="http://127.0.0.1:8000/backend/js/jquery2.0.3.min.js"></script>
<script src="http://127.0.0.1:8000/backend/js/raphael-min.js"></script>
<script src="http://127.0.0.1:8000/backend/js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">

        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">

            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">


            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="./frontend/images/home/logo.png">
                <span class="username"></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Hồ Sơ</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Cài Đặt</a></li>
                <li><a href="http://127.0.0.1:8000/logout"><i class="fa fa-key"></i> Đăng Xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->

    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="http://127.0.0.1:8000/dashboard">
                        <i class="fa fa-dashboard"></i>
                        <span>Tang Quản Lý</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý đơn hàng</span>
                    </a>
                    <ul class="sub">
						<li><a href="http://127.0.0.1:8000/manager-order">Danh sách đơn hàng</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh mục sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="http://127.0.0.1:8000/add-category-product">Thêm danh mục sản phẩm</a></li>
						<li><a href="http://127.0.0.1:8000/all-category-product">Danh sách danh mục sản phẩm</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Thương hiệu sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="http://127.0.0.1:8000/add-brand-product">Thêm thương hiệu sản phẩm</a></li>
						<li><a href="http://127.0.0.1:8000/all-brand-product">Danh sách thương hiệu mục sản phẩm</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="http://127.0.0.1:8000/add-product">Thêm sản phẩm</a></li>
						<li><a href="http://127.0.0.1:8000/all-product">Danh sản phẩm</a></li>

                    </ul>
                </li>
                <li>
                    <a href="logout">
                        <i class="fa fa-user"></i>
                        <span>Đăng xuất </span>
                    </a>
                </li>
            </ul>
          </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
        <div class="table-agile-info">
    <div class="panel panel-default">
        
    <h3 style="color: teal;">Chào bạn đến với trang admin</h3>
    <table style="width: 600px; height: 200px;">
        <tr style="color: red;">
            <th>Tổng số sản phẩm</th>
            <th>Áo khoác</th>
            <th>Áo sơ mi</th>
            <th>Áo thun</th>
            <th>Quần jean</th>


            
        </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
        <tr>           
            <td style="width: 60px; height: 60px; border-radius: 40%; background-color: #008081; text-align: center;">307</td> 
              
        </tr>

        
    </table>
    </div>
</div>

    </section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2021 Luxury</p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="http://127.0.0.1:8000/backend/js/bootstrap.js"></script>
<script src="http://127.0.0.1:8000/backend/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="http://127.0.0.1:8000/backend/js/scripts.js"></script>
<script src="http://127.0.0.1:8000/backend/js/jquery.slimscroll.js"></script>
<script src="http://127.0.0.1:8000/backend/js/jquery.nicescroll.js"></script>
<!-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> -->
<script src="http://127.0.0.1:8000/backend/ckeditor/ckeditor.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="http://127.0.0.1:8000/backend/js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });

	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
	});
</script>
<script type="text/javascript">
    $('.order_update_btn').click(function(){
        var order_product_id=$(this).data('product_id');
        var order_qty= $('.order_qty_'+order_product_id).val();
        var order_code= $('.order_code').val();
        var _token=$('input[name="_token"]').val();
        var product_quantity=$('.product_quantity_'+order_product_id).val();
        if(order_qty<=product_quantity){
            $.ajax({
                    url:"http://127.0.0.1:8000/update-qty",
                    method:'post',
                    data:{order_product_id:order_product_id,order_qty:order_qty,order_code:order_code,_token:_token},
                        success:function(data){
                            alert("Thay đổi hoàn tất!")
                            location.reload();
                        }
                });
        }else{
            alert('Số lượng mua vướt quá hàng trong kho!');
        }
    });
</script>
<script type="text/javascript">
    $('.order_details').change(function(){
        var order_status=$(this).val();
        var order_id=$(this).children(":selected").attr('id');
        var _token=$('input[name="_token"]').val();
        //lay ra so luong
        quantity=[];
        $('input[name="product_sales_quantity"]').each(function(){
            quantity.push($(this).val());
        });
        order_product_id=[];
        $('input[name="order_product_id"]').each(function(){
            order_product_id.push($(this).val());
        });

        $.ajax({
				url:"http://127.0.0.1:8000/update-order",
				method:'post',
				data:{order_status:order_status,order_id:order_id,quantity:quantity,order_product_id:order_product_id,_token:_token},
					success:function(data){
						swal("CN hoàn tất!")
                        location.reload();
					}
			});

    });
</script>
<!-- calendar -->
	<script type="text/javascript" src="http://127.0.0.1:8000/backend/js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',

			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
    <script>
CKEDITOR.replace('brand_product_desc')</script>
<script>CKEDITOR.replace('category_product_desc')</script>
	<!-- //calendar -->
</body>
</html>


<!--<div id="card-stats" class="pt-0">
      <div class="row">
         <div class="col s12 m6 l3">
            <div class="card animate fadeLeft">
               <div class="card-content cyan white-text">
                  <p class="card-stats-title"><i class="material-icons">person_outline</i> New Clients</p>
                  <h4 class="card-stats-number white-text">566</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 15%
                     <span class="cyan text text-lighten-5">from yesterday</span>
                  </p>
               </div>
               <div class="card-action cyan darken-1">
                  <div id="clients-bar" class="center-align"></div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeLeft">
               <div class="card-content red accent-2 white-text">
                  <p class="card-stats-title"><i class="material-icons">attach_money</i>Total Sales</p>
                  <h4 class="card-stats-number white-text">$8990.63</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 70% <span class="red-text text-lighten-5">last
                        month</span>
                  </p>
               </div>
               <div class="card-action red">
                  <div id="sales-compositebar" class="center-align"></div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeRight">
               <div class="card-content orange lighten-1 white-text">
                  <p class="card-stats-title"><i class="material-icons">trending_up</i> Today Profit</p>
                  <h4 class="card-stats-number white-text">$806.52</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 80%
                     <span class="orange-text text-lighten-5">from yesterday</span>
                  </p>
               </div>
               <div class="card-action orange">
                  <div id="profit-tristate" class="center-align"></div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeRight">
               <div class="card-content green lighten-1 white-text">
                  <p class="card-stats-title"><i class="material-icons">content_copy</i> New Invoice</p>
                  <h4 class="card-stats-number white-text">1806</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_down</i> 3%
                     <span class="green-text text-lighten-5">from last month</span>
                  </p>
               </div>
               <div class="card-action green">
                  <div id="invoice-line" class="center-align"></div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!--card stats end-->
   <!--chart dashboard start-->
  <!-- <div id="chart-dashboard">
      <div class="row">
         <div class="col s12 m8 l8">
            <div class="card animate fadeUp">
               <div class="card-move-up waves-effect waves-block waves-light">
                  <div class="move-up cyan darken-1">
                     <div>
                        <span class="chart-title white-text">Revenue</span>
                        <div class="chart-revenue cyan darken-2 white-text">
                           <p class="chart-revenue-total">$4,500.85</p>
                           <p class="chart-revenue-per"><i class="material-icons">arrow_drop_up</i> 21.80 %</p>
                        </div>
                        <div class="switch chart-revenue-switch right">
                           <label class="cyan-text text-lighten-5">
                              Month <input type="checkbox"> <span class="lever"></span> Year
                           </label>
                        </div>
                     </div>
                     <div class="trending-line-chart-wrapper"><canvas id="revenue-line-chart" height="70"></canvas>
                     </div>
                  </div>
               </div>
               <div class="card-content">
                  <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                     <i class="material-icons activator">filter_list</i>
                  </a>
                  <div class="col s12 m3 l3">
                     <div id="doughnut-chart-wrapper">
                        <canvas id="doughnut-chart" height="200"></canvas>
                        <div class="doughnut-chart-status">
                           <p class="center-align font-weight-600 mt-4">4500</p>
                           <p class="ultra-small center-align">Sold</p>
                        </div>
                     </div>
                  </div>
                  <div class="col s12 m2 l2">
                     <ul class="doughnut-chart-legend">
                        <li class="mobile ultra-small"><span class="legend-color"></span>Mobile</li>
                        <li class="kitchen ultra-small"><span class="legend-color"></span> Kitchen</li>
                        <li class="home ultra-small"><span class="legend-color"></span> Home</li>
                     </ul>
                  </div>
                  <div class="col s12 m5 l6">
                     <div class="trending-bar-chart-wrapper"><canvas id="trending-bar-chart" height="90"></canvas></div>
                  </div>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Revenue by Month <i class="material-icons right">close</i>
                  </span>
                  <table class="responsive-table">
                     <thead>
                        <tr>
                           <th data-field="id">ID</th>
                           <th data-field="month">Month</th>
                           <th data-field="item-sold">Item Sold</th>
                           <th data-field="item-price">Item Price</th>
                           <th data-field="total-profit">Total Profit</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>January</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>February</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="col s12 m4 l4">
            <div class="card animate fadeUp">
               <div class="card-move-up teal accent-4 waves-effect waves-block waves-light">
                  <div class="move-up">
                     <p class="margin white-text">Browser Stats</p>
                     <canvas id="trending-radar-chart" height="114"></canvas>
                  </div>
               </div>
               <div class="card-content  teal">
                  <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                     <i class="material-icons activator">done</i>
                  </a>
                  <div class="line-chart-wrapper">
                     <p class="margin white-text">Revenue by country</p>
                     <canvas id="line-chart" height="114"></canvas>
                  </div>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Revenue by country <i class="material-icons right">close</i>
                  </span>
                  <table class="responsive-table">
                     <thead>
                        <tr>
                           <th data-field="country-name">Country Name</th>
                           <th data-field="item-sold">Item Sold</th>
                           <th data-field="total-profit">Total Profit</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>USA</td>
                           <td>65</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>UK</td>
                           <td>76</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>Canada</td>
                           <td>65</td>
                           <td>$452.55</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div> -->