<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
if(empty($_SESSION['username'])){
    echo '<script type="text/javascript">alert("必须登录后才能进入，请先登录");</script>';
    header('refresh:0;url=login.php');
}

?>
<!DOCTYPE html>
<head>
<title>小小后台管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--上边栏-->
    <header class="header fixed-top clearfix">

        <div class="brand">
            <a href="index.php" class="logo">
                小小
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--菜单选项-->
        <div class="nav notify-row" id="top_menu">
            <ul class="nav top-menu">
                <!--菜单-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">8</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <li>
                            <p class="">You have 8 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Target Sell</h5>
                                        <p>25% , Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Product Delivery</h5>
                                        <p>45% , Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Payment collection</h5>
                                        <p>87% , Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Target Sell</h5>
                                        <p>33% , Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- 信息-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-important">4</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p class="red">You have 4 Mails</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="images/1.png"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="images/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!--通知-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">3</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p>Notifications</p>
                        </li>
                        <li>
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#"> Server #1 overloaded.</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-danger clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#"> Server #2 overloaded.</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-success clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#"> Server #3 overloaded.</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>

        <div class="top-nav clearfix">
            <ul class="nav pull-right top-menu">
                <!-- 搜索框-->
                <li>
                    <input type="text" class="form-control search" placeholder=" 搜索">
                </li>
                <!--用户-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="images/3.png">
                        <span class="username">
                            <?php
                            if(empty($_SESSION['username'])){
                                echo "用户名";
                            }else{
                                $name=$_SESSION['username'];
                                echo $name;
                            }
                            ?>
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>简介</a></li>
                        <li><a href="loginout.php"><i class="fa fa-key"></i> 退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
<!--侧边栏-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>后台主页</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>UI 元素</span>
                    </a>
                    <ul class="sub">
						<li><a href="typography.php">页面元素</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>数据管理</span>
                    </a>
                    <ul class="sub">
                        <li><a href="find_table.php">FIND图片审核</a></li>
                        <li><a href="classification_table.php">classification1分类表</a></li>
                        <li><a href="follow_table.php">关注/喜欢表</a></li>
                        <li><a href="notice_table.php">通知公告表</a></li>
                        <li><a href="user_table.php">用户表</a></li>
                        <li><a href="admin_table.php">管理员表</a></li>
                        <li><a href="responsive_table.php">数据表模板</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.php">Inbox</a></li>
                        <li><a href="mail_compose.php">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.php">Google Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>其它</span>
                    </a>
                    <ul class="sub">
                        <li><a href="gallery.php">画廊</a></li>
                        <li><a href="404.html">404 页面</a></li>
                    </ul>
                </li>
                <li  class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span>登录与注册</span>
                    </a>
                    <ul class="sub">
                        <li><a href="login.php">登录</a></li>
                        <li><a href="register.php">注册</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
<!--头部-->
    <section id="main-content">
        <section class="wrapper">
            <div class="market-updates">
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-2">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-eye"> </i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Visitors</h4>
                            <h3>13,500</h3>
                            <p>Other hand, we denounce</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-1">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-users" ></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Users</h4>
                            <h3>1,250</h3>
                            <p>Other hand, we denounce</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-3">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-usd"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Sales</h4>
                            <h3>1,500</h3>
                            <p>Other hand, we denounce</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-4">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Orders</h4>
                            <h3>1,500</h3>
                            <p>Other hand, we denounce</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!--访客统计-->
            <div class="row">
                <div class="panel-body">
                    <div class="col-md-12 w3ls-graph">
                        <div class="agileinfo-grap">
                            <div class="agileits-box">
                                <header class="agileits-box-header clearfix">
                                    <h3>访客统计</h3>
                                    <div class="toolbar">
                                    </div>
                                </header>
                                <div class="col-md-12  agile-last-left agile-last-right">
                                    <div class="agile-last-grid">
                                        <div class="area-grids-heading">
                                            <h3>每天</h3>
                                            <?php
                                            include_once("../php/opensql.php");
                                            $time1=date('Y-m-d',strtotime('-6 day'));
                                            $time2=date('Y-m-d');
                                            $sql3=" select round(SUM(c_num)/7) from tb_count where c_time>='$time1' and c_time<='$time2' ";
                                            $xian3=$mysqldb->select($sql3);
                                            $row3=mysql_fetch_row($xian3);
                                            echo "近7天平均每天浏览".$row3[0]."次";
                                            ?>
                                        </div>
                                        <div id="graph9"></div>
                                        <script>
                                            var day_data = [
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("-7 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('-7 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("-6 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('-6 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("-5 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('-5 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("-4 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('-4 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("-3 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('-3 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("-2 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('-2 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("-1 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('-1 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "今天","value": <?php   include_once("../php/opensql.php");$time=date('Y-m-d'); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0]; ?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("+1 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('+1 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("+2 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('+2 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("+3 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('+3 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("+4 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('+4 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("+5 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('+5 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("+6 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('+6 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>},
                                                {"elapsed": "<?php echo date("Y-m-d",strtotime("+7 day")) ?>", "value": <?php  include_once("../php/opensql.php");$time=date('Y-m-d',strtotime('+7 day')); $sql="select c_num from tb_count where c_time='$time'"; $xian=$mysqldb->select($sql);$row=mysql_fetch_row($xian);echo $row[0];?>}
                                            ];
                                            Morris.Line({
                                                element: 'graph9',
                                                data: day_data,
                                                xkey: 'elapsed',//横坐标字段名
                                                ykeys: ['value'],//纵坐标字段名
                                                labels: ['\u6d4f\u89c8\u6b21\u6570'], //设置纵坐标默认值名称
                                                parseTime: false
                                            });
                                        </script>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--日历小工具-->
            <div class="col-md-12 agile-calendar">
                <div class="calendar-widget">
                    <div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                        <span class="panel-title"> 日历小工具</span>
                    </div>
                    <div class="agile-calendar-grid">
                        <div class="page">

                            <div class="w3l-calendar-left">
                                <div class="calendar-heading">

                                </div>
                                <div class="monthly" id="mycalendar"></div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--底部-->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2018 小小的风景. 保留版权来自 <a >小小</a></p>
            </div>
        </div>
    </section>

</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
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
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038}
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
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
	<!-- //calendar -->


</body>
</html>
