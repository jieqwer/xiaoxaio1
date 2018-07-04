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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery2.0.3.min.js"></script>
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
    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info col-sm-6"  >
                <div class="panel  panel-default">
                    <div class=" panel-heading">
                        关注表
                    </div>
                    <tr>
                        <table class="table  table-hover">
                            <thead>
                            <tr>
                                <th data-breakpoints="xs">ID</th>
                                <th > Name</th>
                                <th  >关注用户id</th>
                                <th >操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $num_rec_per_page=12;   // //关注表每页显示条数
                            if (isset($_GET["page"])) {
                                $page = $_GET["page"];
                            } else {
                                $page=1;
                            };
                            $start_from = ($page-1) * $num_rec_per_page;
                            include_once("../php/opensql.php");
                            $sql="select * from tb_guanzhu limit $start_from, $num_rec_per_page";//准备sql语句
                            $xian=$mysqldb->select($sql);
                            while ( $row=mysql_fetch_row($xian)) {
                                echo "
                                 <tr data-expanded='true'>
                                   <td>$row[2]</td>
                                   <td>$row[0]</td>                               
                                   <td>$row[1]</td>                               
                                   <td><a href='delete4.php?id=$row[2]'>删除</a></td>          
                                   </tr>                      
                                ";
                            }
                            ?>
                            <tr >
                                <td colspan="5">
                                    <?php
                                    if (isset($_GET["page1"])) {
                                        $page1 = $_GET["page1"];
                                    } else {
                                        $page1=1;
                                    };
                                    $sql = "select * from tb_guanzhu";//查询数据库
                                    $rs_result = mysql_query($sql); //查询数据
                                    $total_records = mysql_num_rows($rs_result);  // 统计总共的记录返回条数
                                    $total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数=总共的记录条数/每页显示数量
                                    if($page==1){
                                        $prev=1;
                                    }else{
                                        $prev=$page-1;
                                    }
                                    if($page==$total_pages){
                                        $next=$total_pages;
                                    }else{
                                        $next=$page+1;
                                    }
                                    echo " <div class='col-sm-7 text-right text-center-xs'><ul class='pagination pagination-sm m-t-none m-b-none'>";
                                    echo " <li><a href='follow_table.php?page=1&page1=$page1'><b >《</b></a></li> "; // 第一页
                                    echo "<li><a  href='follow_table.php?page=$prev&page1=$page1'><i class='fa fa-chevron-left'></i></a></li> "; // 上一页
                                    for ($i=1; $i<=$total_pages; $i++) {
                                        echo "<li><a href='follow_table.php?page=".$i."&page1=".$page1."'>".$i."</a></li> ";
                                    };
                                    echo " <li><a  href='follow_table.php?page=$next&page1=$page1'><i class='fa fa-chevron-right'></i></a></li>"; // 下一页
                                    echo "<li><a href='follow_table.php?page=$total_pages&page1=$page1'><b >》</b></a></li>"; // 最后一页
                                    echo " </ul></div>";
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>


            <div class="table-agile-info col-sm-6" >
                <div class="panel  panel-default">
                    <div class=" panel-heading">
                        喜欢表
                    </div>
                    <tr>
                        <table class="table  table-hover">
                            <thead>
                            <tr>
                                <th data-breakpoints="xs">ID</th>
                                <th > Name</th>
                                <th  >喜欢图片id</th>
                                <th >操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $num_rec_per_page1=12;//喜欢表每页显示条数
                            $start_from1 = ($page1-1) * $num_rec_per_page1;
                            include_once("../php/opensql.php");
                            $sql1="select * from tb_love limit $start_from1, $num_rec_per_page1";//准备sql语句
                            $xian1=$mysqldb->select($sql1);
                            while ( $row1=mysql_fetch_row($xian1)) {
                                echo "
                                 <tr data-expanded='true'>
                                   <td>$row1[2]</td>
                                   <td>$row1[0]</td>                               
                                   <td>$row1[1]</td>                               
                                   <td><a href='delete5.php?id=$row1[2]'>删除</a></td>
                                   </tr>                      
                                ";
                            }
                            ?>
                            <tr >
                                <td colspan="5">
                                    <?php
                                    $sql1 = "select * from tb_love";//查询数据库
                                    $rs_result1 = mysql_query($sql1); //查询数据
                                    $total_records1 = mysql_num_rows($rs_result1);  // 统计总共的记录返回条数
                                    $total_pages1 = ceil($total_records1 / $num_rec_per_page1);  // 计算总页数=总共的记录条数/每页显示数量
                                    if($page1==1){
                                        $prev1=1;
                                    }else{
                                        $prev1=$page1-1;
                                    }
                                    if($page1==$total_pages1){
                                        $next1=$total_pages1;
                                    }else{
                                        $next1=$page1+1;
                                    }
                                    echo " <div class='col-sm-7 text-right text-center-xs'><ul class='pagination pagination-sm m-t-none m-b-none'>";
                                    echo " <li><a href='follow_table.php?page=$page&page1=1'><b >《</b></a></li> "; // 第一页
                                    echo "<li><a  href='follow_table.php?page=$page&page1=$prev1'><i class='fa fa-chevron-left'></i></a></li> "; // 上一页
                                    for ($i1=1; $i1<=$total_pages1; $i1++) {
                                        echo "<li><a href='follow_table.php?page1=".$i1."&page=".$page."'>".$i1."</a></li> ";
                                    };
                                    echo " <li><a  href='follow_table.php?page=$page&page1=$next1''><i class='fa fa-chevron-right'></i></a></li>"; // 下一页
                                    echo "<li><a href='follow_table.php?page=$page&page1=$total_pages1'><b >》</b></a></li>"; // 最后一页
                                    echo " </ul></div>";
                                    mysql_close();
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
