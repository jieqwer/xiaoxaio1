<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon"  href="../images/xiaoxiao2.ico">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../style/xian.css" type="text/css">
    <link rel="stylesheet" href="../style/style1.css" type="text/css">
    <script src="../js/ui.js"></script>
    <title>小小de风景</title>
</head>
<body>




<div class="top">
    <div class="toplei">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a>MENU</a></li>
            <li><a>NEWES</a></li>
            <li><a>FIND</a></li>
        </ul>
        <ul>
            <li>
                <!-- <img src="../images/xiaoxiao1.ico"> -->
            </li>
        </ul>


        <ul>
            <li class="touxiang"><a href="message.php">头像</a></li>
            <li ><a  href="login.php"><?php  if(empty($_SESSION["mail"])){  $_SESSION['mail']="登录"; echo $_SESSION['mail'];}else{echo  $_SESSION['mail'];}   ?></a></li>
            <li><?php  if(($_SESSION['mail'])=="登录"){ echo "<a href='login.php'>注册</a>";}else{ echo '<a href="ssion.php">退出</a>';}    ?></li>
            <li><a href="fabu.php">发布</a></li>
        </ul>
    </div>
</div>
<div id="no" class="alert" onclick="mizhu.alert('提示·', '前面没有了哦','alert_red');"></div>
<div id="ok" class="alert" onclick="mizhu.alert('提示·', '后面没有了哦','alert_red');"></div>
<div id="box">
    谢谢你这么喜欢我
    <img src="../images/close.png" id="close">
</div>
<?php
include_once("opensql.php");

$id=$_GET['id'];
//刷新自增字段
/*$sql2="alter table tb_images  drop column im_id";
$sql3="alter   table   tb_images  add   im_id   int(11)   auto_increment ,add primary key (im_id )";
mysql_query($sql2);
mysql_query($sql3);*/


$sql="select * from tb_images where im_id=$id";//准备sql语句
$xian=$mysqldb->select($sql);
$row=mysql_fetch_row($xian);
$sql1="select * from tb_images";
$xian1=$mysqldb->select($sql1);
$r=mysql_num_rows($xian1);

if($id==1){
    $prev=1;
/*    echo '<script>alert("前面没有了哦");</script>';*/
    echo '<script type="text/javascript">$(function() {$("#no").trigger("click");})</script>';
}else{
    $prev=$id-1;
}
if($id>=$r){
    $next=$r;
/*    echo '<script>alert("后面没有了哦");</script>';*/
    echo '<script type="text/javascript">$(function() {$("#ok").trigger("click");})</script>';
}else{
    $next=$id+1;
}

echo "<div class='xian'><div class='tt'>$row[0]</div> <a class='tt1' id='guan' href='find_check.php?id=$id '>关注</a>
 <div class='xianxia'><a class='xianleft' href='find.php?id=$prev'><span ></span></a><div class='xiancenter'><div class='cengterleft'><a href='love_check.php?id=$id'>喜欢</a><img src='../images/$row[5]'></div>
  <div class='cengterright'><div>$row[3]</div><div>$row[4]</div><div>$row[2]</div></div></div><a class='xianright' href='find.php?id=$next'><span></span></a></div>

</div>";




?>



<div class="huidao">
    <div class="toop"><span></span></div>
    <div class="boot"><span></span></div>
</div>



<div class="beian">
    蜀ICP备18006488号-2
</div>
<script>



    //窗口固定
    $(function(){
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
        /*
                $(window).on('scroll',function (){
                    if ($(window).scrollTop() >$(window).height())
                        $('.toop').fadeIn();
                    else
                        $('.toop').fadeOut();
                });
        */

        $(window).trigger('scroll');/*触发滚动事件，避免刷新的时候显示回到顶部按钮*/

    })


</script>





</body>
</html>

</body>

</html>

