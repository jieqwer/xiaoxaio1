<?php
date_default_timezone_set('prc');
include_once("opensql.php");

$time1=date('Y-m-d',strtotime('+7 day'));
$sql1="select * from tb_count where c_time='$time1'";
$xian1=$mysqldb->select($sql1);
$r=mysql_num_rows($xian1);
if($r<=0){
    $sql1="insert into tb_count (c_time,c_num) values('$time1','0')";

    $result=mysql_query($sql1);
}
$time=date('Y-m-d');
$sql="update  tb_count set c_num=c_num+1 where c_time='$time'";
mysql_query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon"  href="../images/xiaoxiao2.ico">
    <link  rel="stylesheet" type="text/css" href="../style/index.css">
    <link rel="stylesheet" href="../style/hua.css" type="text/css">
    <link rel="stylesheet" href="../style/pubuliu.css" type="text/css">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/yanse.js"></script>

    <title>小小de风景</title>
</head>
<body>

<div id="colour-variations">
    <a class="option-toggle"><i class="icon-gear"></i></a>
    <h3>选择你喜欢的颜色</h3>
    <ul>
        <li>
            <a  id="style1" href="javascript: void(0);" data-theme="style">
                <span style="background: #3f95ea;"></span>
                <span style="background: #52d3aa;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="style2">
                <span style="background: #329998;"></span>
                <span style="background: #6cc99c;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="style3">
                <span style="background: #9f466e;"></span>
                <span style="background: #c24d67;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="style4">
                <span style="background: #21825C;"></span>
                <span style="background: #A4D792;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>

    </ul>
</div><!--设置-->

<div class="top">
    <div class="toplei">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a id="menu">MENU</a></li>
        <li><a id="new">NEWEST</a></li>
        <li><a id="find">FIND</a></li>
    </ul>
<ul>
    <li>
        <!-- <img src="../images/xiaoxiao1.ico"> -->
    </li>
</ul>



    <ul>
        <li class="touxiang"><a  href="message.php">头像</a></li>
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
        <li ><a  href="login.php" ><?php  if(empty($_SESSION["mail"])){  $_SESSION['mail']="登录"; echo $_SESSION['mail'];}else{echo  $_SESSION['mail'];}   ?></a></li>
        <li><?php  if(($_SESSION['mail'])=="登录"){ echo "<a href='login.php'>注册</a>";}else{ echo '<a href="ssion.php">退出</a>';}    ?></li>

        <li><a href="fabu.php">发布</a></li>
    </ul>
    </div>
</div>

<div class="content" id="content">
    <div class="content1">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a id="menu1">MENU</a></li>
            <li><a id="new1">NEWEST</a></li>
            <li><a id="find1">FIND</a></li>
        </ul>
        <ul>
            <li>
                <input type="text" placeholder="请输入您的想搜索的"   onfocus="if(placeholder=='请输入您的想搜索的'){placeholder='请输入您的想搜索的'}" onblur="if (placeholder ==''){placeholder='请输入您的想搜索的'}" >
                <span></span>
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

<div class="sou">
    <h1 >小风景，大世界</h1>
    <div>
         <input type="text" placeholder="请输入您的想搜索的"   onfocus="if(placeholder=='请输入您的想搜索的'){placeholder='请输入您的想搜索的'}" onblur="if (placeholder ==''){placeholder='请输入您的想搜索的'}" >
        <span></span>
    </div>
    <h4>热门搜索：发现精彩，美景美物，小小认证摄影师，物语love，配色</h4>
</div>

<div class="banner">
    <img src="../images/jiao1.jpg"/>
    <img src="../images/jiao2.jpg"/>
    <img src="../images/jiao3.jpg"/>
    <div class="ctrlButton">
        <span class="current"></span>
        <span></span>
        <span></span>
    </div>
</div>


<div class="fenlei">
    <?php
    include_once("opensql.php");

    $sql="select * from tb_classification1 ";//准备sql语句
    $xian=$mysqldb->select($sql);


    while ($row=mysql_fetch_row($xian)) {     echo '<div class="lei1">';
        echo '<h3>'.$row[0].'</h3>';
        echo   '<div class="lei2">';
        echo "<span>";
        $sql3="select * from tb_classification2 where c2fid='$row[0]'";//准备sql语句
        $xian3=$mysqldb->select($sql3);
        while ($info3=mysql_fetch_array($xian3)) {
            echo '<i>'.$info3["c2name"].'</i>';
        }
        echo "</span>";
        echo '</div>';
        echo '</div>';
    }
    ?>

</div>
<div class="tupian">

    <div class="demo-wrapper">
        <h3>1</h3>
        <h1></h1>
        <ul class="portfolio-items">
            <?php
            include_once("opensql.php");
            $sql="select * from tb_newest ";//准备sql语句
            $xian=$mysqldb->select($sql);
            while ($info=mysql_fetch_array($xian)) {
                echo '  <li class="item"><figure><div class="view">';
                echo '<img src="';
                echo  $info["nurl"];
                echo '" /> </div>';
                echo '<figcaption><p><span> <a href="#">'.$info["nbiaoti"].'</a></span></p><p><span>'.$info["nname"].'</span></p></figcaption></figure><div class="date">' .$info["ntime"].'</div></li>';
            }
            ?>
    </div>
</div>

<div class="zhanshi" id="zhanshi">
    <ul id="zhan">
        <script>
            $(function() {
                var page=0;
                $("#jia").click(function () {
                    page=page+1;
                    $.ajax({
                        type: "POST",
                        url: "ajax.php", //
                        data: {"page": page},
                        dataType: "json",
                        success: function (data) {
                            $.each(data, function(i, n) {
                                var m= Math.ceil(Math.random()*10);
                                if(m==1||m==2||m==3||m==4||m==5){
                                    $(".zhanshi ul").append("<li id='dian' class='zhanshi1'><a href='find.php?id="+n.im_id+"'><div class='zhanleft'>"+"<img src='../images/"+n.im_url+"'>"+"</div><div class='zhanright'><span>" + n.im_lei + "</span><span><p>"+n.im_tit+"</p><p>"+n.im_jie+"</p><p><img style='display: block;width: 100%;height: 28px;line-height: 28px' src='../images/xin2.png'></p></span></div><div class='border-arrow1'> <em></em> <ins></ins> </div></a></li>");
                                }else {
                                    $(".zhanshi ul").append("<li class='zhanshi2'><a href='find.php?id="+n.im_id+"'><div class='zhanleft'>"+"<span><p>"+n.im_tit+"</p><p>"+n.im_jie+"</p><p><img style='display: block;width: 100%;height: 28px;line-height: 28px' src='../images/xin2.png'></p></span><span>"+n.im_lei+"</span><div class='border-arrow2'> <em></em> <ins></ins> </div></div><div class='zhanright'><img src='../images/"+n.im_url+"'></div></a></li>")
                                }
                            });
                        }
                    });
                });
                $("#jia").trigger("click");

            });
        </script>
    </ul>
</div>


<div class="bian" >

 <button id='jia'> 加载更多...</button>

    <div class="foot">
        <div class="foot1">
            <h1>CONTACT US</h1>
            <h3><i>For better service,you're bound to conact us.</i></h3>
            <h4></h4>
        </div>

        <div class="foot2">
            <div class="foot21">
                <div class="footleft">
                    <h1>About Attorney</h1>
                    <h3></h3>
                    <h3></h3>
                </div>

                <div class="footcenter">
                    <h1>Contact Us.</h1>
                    <div>
                        <input type="text" placeholder="Name" />
                        <input type="text"  placeholder="Name" />
                        <input type="text"  placeholder="Name" />
                    </div>
                    <textarea cols='50' rows='3' maxlength="200"  placeholder="Name"  ></textarea>
                    <input type="submit" value="SEND">
                </div>
                <div class="footright">
                    <h1>Kepp In Touch</h1>
                    <p><span></span><span>SiChuan MeiShan</span></p>
                    <p><span></span><span>028-16608209974</span></p>
                    <p><span></span><span>2272752599@qq.com</span></p>
                    <p><a href="#"></a><a href="http://weibo.com/xiaoxiaoli7 "></a><a href="http://i.blog.sina.com.cn/blogprofile/index.php?atten=1"></a>
                        <a href="https://outlook.live.com/owa/"></a><a href="http://t.qq.com/a14925367758"></a></p>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="huidao">
    <div class="toop"><span></span></div>
    <div class="boot"><span></span></div>
</div>


<div class="beian" id="dian">
    蜀ICP备18006488号-2
</div>
<script>

    <!-- 图片自己运动 -->
    var n=0;
    function changeImg(){
        if(n>1){n=0;}else{n=n+1}
        $(".ctrlButton span").removeClass("current").eq(n).addClass("current");
        $(".banner img").hide().eq(n).show();}
    <!-- 滚动时间 -->
    var timer=setInterval(changeImg,2000);
    $(".banner").hover(function(){
        clearInterval(timer)},function(){
        timer=setInterval(changeImg,2000)});

    <!-- 下面按钮 -->
    $(".ctrlButton span").click(
        function(){
            n=$(".ctrlButton span").index(this);
            $(".ctrlButton span").removeClass("current");
            $(".ctrlButton span").eq(n).addClass("current");
            $(".banner img").hide();
            $(".banner img").eq(n).show();
        }
    );

    //窗口固定
    $(function(){
        var win=$(window); //得到窗口对象
        var sc=$(document);//得到document文档对象。
        win.scroll(function(){
            if(sc.scrollTop()>=300){
                $("#content").css("display","block");
                $(".navTmp").fadeIn();
            }else{
                $("#content").css("display","none");
                $(".navTmp").fadeOut();
            }
        });


        //点击切换
                $(".option-toggle").click(function () {
                    var left=$("#colour-variations").css('margin-left');
                if(left=="0px"){
                    $("#colour-variations").css("margin-left",-140);
                }else {
                    $("#colour-variations").css("margin-left",0);
                }
            });


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

        $("#menu,#menu1").click(function () {
            $('html,body').animate({
                scrollTop: 405//高度
            }, 500);//s时间
        });
        $("#new,#new1").click(function () {
            $('html,body').animate({
                scrollTop: 610//高度
            }, 500);//s时间
        });
        $("#find,#find1").click(function () {
            $('html,body').animate({
                scrollTop: 970//高度
            }, 500);//s时间
        });
/*        $(window).on('scroll', function () {
            if ($(window).scrollTop() >$(window).height())
                $('.toop').fadeIn();
            else
                $('.toop').fadeOut();
        });*/


        $(window).trigger('scroll');/*触发滚动事件，避免刷新的时候显示回到顶部按钮*/



    });





</script>
<script src="../js/jquery.mousewheel.js"></script>
<script src="../js/scripts.js"></script>

</body>
</html>