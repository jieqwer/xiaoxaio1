<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon"  href="../images/xiaoxiao2.ico">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="../style/fabu.css">
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



<div class="fabu">
    <h1 ><i>Release</i></h1>
    <form action="fabu_check.php" method="post" enctype="multipart/form-data">
        <select name="fenlei" class="fenlei" >
            <?php
            include_once("opensql.php");
            $sql="select * from tb_classification1 ";//准备sql语句
            $xian=$mysqldb->select($sql);
            while ($info=mysql_fetch_array($xian)) {
                echo"<option value='";
                echo $info["c1name"];
                echo "'>";
                echo $info['c1name'];
                echo "</option>";
            }
            ?>
        </select>
        <input name="title" type="text"  placeholder="标题">
        <textarea cols='50' rows='3' maxlength="500"  placeholder="简介" name="jianjie" ></textarea>
        <a class="shang">上传文件(鼠标悬停在上面可以查看是否添加文件)<input type="file" name='myfile' placeholder="地址" ></a>
        <input type="submit" value="提交">

    </form>


</div>





<div class="bian" >

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


<div class="beian">
    蜀ICP备18006488号-2
</div>
<script>



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