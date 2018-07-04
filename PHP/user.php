<?php
require_once  '../Connect2.1/qqConnectAPI.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon"  href="../images/xiaoxiao2.ico">
    <link  rel="stylesheet" type="text/css" href="../style/user.css">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <title>小小de风景</title>
</head>
<body>
<?php

if($_SESSION["mail"]=="登录"){
    header("refresh:0;url=login.php");
    echo '<script>alert("你还没有登录，请先登录");</script>';
    exit;
}
?>
<div class="top">
    <div class="toplei">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a>MENU</a></li>
            <li><a>NEWEST</a></li>
            <li><a>FIND</a></li>
        </ul>
        <ul>
            <li>
                <!-- <img src="../images/xiaoxiao1.ico"> -->
            </li>
        </ul>
        <ul>
            <li class="touxiang"><a href="message.php">头像</a></li>
            <?php
            require_once "../function.php";
            require_once  '../Connect2.1/qqConnectAPI.php';

            ?>
            <?php

            /*      if(!isset($_COOKIE['qq_accesstoken'])|| !isset($_COOKIE["qq_openid"])){
                      echo '<li ><a href="login.php">登录</a></li>';
                      echo  '<li><a href="login.php">注册</a></li>';
                  }
                      else {
                     echo  '<li ><a href="login.php">haha</a></li>';
                     echo  '<li><a href="../qq_loginout.php">退出</a></li>';
                  }*/

            /*     $qc=new QC($_COOKIE['qq_accesstoken'],$_COOKIE['qq_openid']);
                    $userinfo=$qc->get_user_info;*/
            ?>
            <li ><a  href="login.php"><?php  if(empty($_SESSION["mail"])){  $_SESSION['mail']="登录"; echo $_SESSION['mail'];}else{echo  $_SESSION['mail'];}   ?></a></li>
            <li><?php  if(($_SESSION['mail'])=="登录"){ echo "<a href='login.php'>注册</a>";}else{ echo '<a href="ssion.php">退出</a>';}    ?></li>
            <li><a href="fabu.php">发布</a></li>
        </ul>
    </div>
</div>



<div class="center">
    <?php
    $name=$_GET['id'];
    echo "<h1 class='hh1'>$name <span>的发布</span></h1>";
    echo "<div class='shang'>";
                    include_once("opensql.php");
                    $num_rec_per_page=8;   // 每页显示数量
                    $sql2="select * from tb_images  where  us_name='$name'";//准备sql语句
                    $xian2=$mysqldb->select($sql2);
                    $r1=ceil(mysql_num_rows($xian2)/$num_rec_per_page);
                    if(empty($_GET['page1'])){
                        $page1=1;
                    }else{
                        $page1=$_GET['page1'];
                    }
                    if( $page1==1){
                        $shang=1;
                    }else{
                        $shang=$page1-1  ;
                    }
                    if($page1>=$r1){
                        $next=$r1;
                    }else{
                        $next=$page1+1  ;
                    }
                    $start_from =($page1-1)*$num_rec_per_page;
                    $sql3="select * from tb_images  where  us_name='$name'  limit $start_from,$num_rec_per_page";//准备sql语句
                    $xian3=$mysqldb->select($sql3);
                    while ($info1=mysql_fetch_array($xian3)) {
                        echo '<a href="find.php?id='.$info1[7].'"><img src="../images/'.$info1[5].'"><span>'.$info1[2].'</span></a> ';
                    }
                    echo "</div>";
                    echo "  <div class='fenye'>
                            <a href='user.php?id=$name&page1=1'>首页</a>
                            <a href='user.php?id=$name&page1=$shang'>上一页</a>
                            <a href='user.php?id=$name&page1=$next'>下一页</a>
                            <a href='user.php?id=$name& page1=$r1'>尾页</a>
                    </div>"
    ?>

</div>


<div class="huidao">
    <div class="toop"><span></span></div>
    <div class="boot"><span></span></div>
</div>


<div class="beian">
    蜀ICP备18006488号-2
</div>
<script>

    $(".toop").click(function () {
        $('html,body').animate({
            scrollTop: 0//高度
        }, 1000);//s时间
    });

    $(".boot").click(function () {
        $('html,body').animate({
            scrollTop:$("body").css("height" )//高度
        }, 1000);//s时间
    });

    $(window).trigger('scroll');/*触发滚动事件，避免刷新的时候显示回到顶部按钮*/


</script>



</body>
</html>