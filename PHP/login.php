<?php
require_once "../function.php";
require_once  "../Connect2.1/qqConnectAPI.php";
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>login</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/iconfont.css">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="login-banner"></div>
<div class="login-box">
    <div class="box-con tran">
        <div class="login-con f-l">
            <form action="login_check.php" method="post" onsubmit="return InputCheck(this)" id="subform">
            <div class="form-group">
                <input type="text" placeholder="用户名" name="mail" id="mail">
                <span class="error-notic">邮箱/手机号码不正确</span>
            </div>
            <div class="form-group">
                <input type="password" placeholder="密码" name="password" id="password">
                <span class="error-notic">密码不正确</span>
            </div>
            <div class="form-group">
                <input type="text" pattern="^[\d]{4}$" placeholder="验证码" name="code" id="code">
                <canvas width="80px" height="30px"  id="canvas-vcode"></canvas>
            </div>

            <div class="form-group">
                <button type="submit" class="tran pr">
                    <a onclick="document.getElementById('subform').submit();"  class="tran">登录</a>
                    <img class="loading" src="../images/loading.gif" style="display:block">
                </button>
            </div>
            <div class="from-line"></div>
            <div class="form-group">
                <a href="javascript:;" class="move-signup a-tag tran blue-border">还没有帐号？免费注册<i class="iconfont tran">&#xe606;</i></a>
            </div>
            <div class="form-group">
                <a href="javascript:;" class="move-reset a-tag tran">忘记密码？重置 <i class="iconfont tran">&#xe606;</i></a>
            </div>
            <div class="form-group">
                <a href="javascript:;" class="move-other a-tag tran">使用第三方帐号登录<i class="iconfont tran">&#xe606;</i></a>
            </div>
            </form>
        </div>
        <!-- 登录 -->

        <div class="signup f-l">
            <form method="post" action="sigup_check.php" onsubmit="return InputCheck(this)" id="subform1">
            <div class="form-group">
                <div class="signup-form">
                    <input type="text" placeholder="用户名" name="username" class="email-mobile" onblur="verify.verifyEmail(this)">
                    <a href="javascript:;" class="signup-select">手机注册</a>
                </div>
            </div>
            <div class="signup-email">
                <div class="form-group">
                    <input type="password" name="password" placeholder="密码（字母、数字，至少6位）" onblur="verify.PasswordLenght(this)">
                </div>
                <div class="form-group">
                    <input type="password" name="password1" placeholder="确认密码（字母、数字，至少6位）" onblur="verify.PasswordLenght(this)">
                </div>
                <div class="form-group">
                    <input type="text" pattern="^[\d]{4}$" placeholder="验证码" name="code" id="code">
                    <canvas width="80px" height="30px"  id="canvas-vcode1"></canvas>
                </div>
                <div class="form-group">
                    <button type="submit" class="tran pr">
                        <a onclick="document.getElementById('subform1').submit();" class="tran">注册</a>
                        <img class="loading" src="../images/loading.gif">
                    </button>
                </div>
                <p class="view-clause">点击注册，即同意我们的 <a href="#">用户隐私条款</a></p>
            </div>
            </form><!-- 邮箱注册 -->
            <div class="signup-tel" style="display:none">
                <div class="signup-form" id="message-inf" style="display:none">
                    <input type="text" placeholder="短信验证码" style="width:180px;" onblur="verify.VerifyCount(this)">
                    <a href="javascript:;" class="reacquire">重新获取（59）</a>
                    <span class="error-notic">验证码输入错误</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="tran get-message pr">
                        <a href="javascript:;" class="tran">获取短信验证码</a>
                        <img class="loading" src="../images/loading.gif">
                    </button>
                </div>
            </div><!-- 手机号码注册 -->
            <div class="from-line"></div>
            <div class="form-group">
                <a href="javascript:;" class="move-login a-tag tran blue-border">已有帐号？登录<i class="iconfont tran">&#xe606;</i></a>
            </div>
            <div class="form-group">
                <a href="javascript:;" class="move-other a-tag tran">使用第三方帐号登录<i class="iconfont tran">&#xe606;</i></a>
            </div>
        </div>
        <!-- 注册 -->

        <div class="other-way f-l">
            <div class="form-group">
                <button type="submit" class="tran pr">
                    <a href="../qq_login.php" class="tran">QQ帐号登录</a>
                    <img class="loading" src="../images/loading.gif">
                </button>
            </div>
            <div class="form-group">
                <button type="submit" class="tran pr">
                    <a href="javascript:;" class="tran">新浪微博帐号登录</a>
                    <img class="loading" src="../images/loading.gif">
                </button>
            </div>
            <div class="form-group">
                <button type="submit" class="tran pr">
                    <a href="javascript:;" class="tran">微信帐号登录</a>
                    <img class="loading" src="../images/loading.gif">
                </button>
            </div>
            <div class="form-group">
                <button type="submit" class="tran pr">
                    <a href="javascript:;" class="tran">网易帐号登录</a>
                    <img class="loading" src="../images/loading.gif">
                </button>
            </div>
            <div class="from-line"></div>
            <div class="form-group">
                <a href="javascript:;" class="move-signup a-tag tran blue-border">还没有帐号？免费注册<i class="iconfont tran">&#xe606;</i></a>
            </div>
            <div class="form-group">
                <a href="javascript:;" class="move-login a-tag tran">已有帐号？登录<i class="iconfont tran">&#xe606;</i></a>
            </div>
        </div>
        <!-- 第三方登录 -->

        <div class="mimachongzhi f-l">
            <div class="form-group">
                <input type="text" placeholder="请输入您的邮箱地址">
                <span class="error-notic">邮箱格式不正确</span>
            </div>
            <div class="form-group">
                <button type="submit" class="tran pr">
                    <a href="javascript:;" class="tran">发送重置密码邮件</a>
                    <img class="loading" src="../images/loading.gif">
                </button>
            </div>
            <div class="from-line"></div>
            <div class="form-group">
                <a href="javascript:;" class="move-signup	a-tag tran blue-border">还没有帐号？免费注册<i class="iconfont tran">&#xe606;</i></a>
            </div>
            <div class="form-group">
                <a href="javascript:;" class="move-login a-tag tran">已有帐号？登录<i class="iconfont tran">&#xe606;</i></a>
            </div>
        </div>
        <!-- 密码重置 -->

        <div class="mobile-success f-l">
            <p>手机号 <span>186****7580</span> 验证成功</p>
            <p>请完善您的账号信息，您也可以<a href="#">绑定现有账号</a></p>
            <div class="form-group">
                <input type="text" placeholder="邮箱" class="email-mobile" onblur="verify.verifyEmail(this)"/>
                <span class="error-notic">邮箱格式不正确</span>
            </div>
            <div class="form-group">
                <input type="text" placeholder="您的名字">
            </div>
            <div class="form-group">
                <input type="password" placeholder="密码（字母、数字，至少6位）" onblur="verify.PasswordLenght(this)"/>
                <span class="error-notic">密码长度不够</span>
            </div>
            <div class="form-group">
                <button type="submit" class="tran pr">
                    <a href="javascript:;" class="tran">注册</a>
                    <img class="loading" src="../images/loading.gif">
                </button>
            </div>
            <p class="view-clause">点击注册，即同意我们的 <a href="#">用户隐私条款</a></p>
        </div>
        <!-- 手机注册成功添补信息 -->
    </div>
</div>

<script type="text/javascript">
    var _handle='';//储存电话是否填写正确
    $(function(){
        $(".signup-form input").on("focus",function(){
            $(this).parent().addClass("border");
        });
        $(".signup-form input").on("blur",function(){
            $(this).parent().removeClass("border");
        });
        //注册方式切换
        $(".signup-select").on("click",function(){
            var _text=$(this).text();
            var $_input=$(this).prev();
            $_input.val('');
            if(_text=="手机注册"){
                $(".signup-tel").fadeIn(200);
                $(".signup-email").fadeOut(180);
                $(this).text("邮箱注册");
                $_input.attr("placeholder","手机号码");
                $_input.attr("onblur","verify.verifyMobile(this)");
                $(this).parents(".form-group").find(".error-notic").text("手机号码格式不正确")

            }
            if(_text=="邮箱注册"){
                $(".signup-tel").fadeOut(180);
                $(".signup-email").fadeIn(200);
                $(this).text("手机注册");
                $_input.attr("placeholder","邮箱");
                $_input.attr("onblur","verify.verifyEmail(this)");
                $(this).parents(".form-group").find(".error-notic").text("邮箱格式不正确")
            }
        });
        //步骤切换
        var _boxCon=$(".box-con");
        $(".move-login").on("click",function(){
            $(_boxCon).css({
                'marginLeft':0
            })
        });
        $(".move-signup").on("click",function(){
            $(_boxCon).css({
                'marginLeft':-320
            })
        });
        $(".move-other").on("click",function(){
            $(_boxCon).css({
                'marginLeft':-640
            })
        });
        $(".move-reset").on("click",function(){
            $(_boxCon).css({
                'marginLeft':-960
            })
        });
        $("body").on("click",".move-addinf",function(){
            $(_boxCon).css({
                'marginLeft':-1280
            })
        });


    });


    $("#canvas-vcode").click(function() {  //点击向后台执行一次请求，并返回值
        $.ajax({
            type:"GET",
            url:"code.php",
            success:function (msg) {
                var obj= JSON.parse(msg);
                drawCode1(obj);
            }
        });
    });

    function drawCode1(code) {
        var c=document.getElementById("canvas-vcode");
        var ctx=c.getContext("2d");
        ctx.clearRect(0, 0, c.width, c.height);//每次产生验证码时先清除画布的内容
        ctx.font="20px 微软雅黑";
        ctx.fillStyle="red";
        ctx.textAlign="center";
        ctx.textBaseline="middle";
        ctx.strokeRect(0,0,80,30);
        ctx.fillText(code ,40,15);

        for(var i=0;i<20;i++){
            var x=Math.ceil(Math.random()*80);
            var y=Math.ceil(Math.random()*30);
            var z=Math.ceil(Math.random()*3);
            var r=Math.ceil(Math.random()*255);
            var g=Math.ceil(Math.random()*255);
            var b=Math.ceil(Math.random()*255);
            ctx.fillStyle="rgb("+r+","+g+","+b+")";
            ctx.beginPath();
            ctx.arc(x,y,z,0,Math.PI*2,false);
            ctx.closePath();
            ctx.fill();

        }
        for(var j=0;j<4;j++){
            var a=Math.ceil(Math.random()*80);
            var b=Math.ceil(Math.random()*30);
            var m=Math.ceil(Math.random()*80);
            var n=Math.ceil(Math.random()*30);
            ctx.moveTo(a,b);
            ctx.lineTo(m,n);
            ctx.lineWidth=2;
            ctx.stroke();
            var r=Math.ceil(Math.random()*255);
            var g=Math.ceil(Math.random()*255);
            var b=Math.ceil(Math.random()*255);
            ctx.strokeStyle="rgb("+r+","+g+","+b+")";
        }
    }
    $("#canvas-vcode").trigger("click");//手动触发一次change事件

    $("#canvas-vcode1").click(function() {  //点击向后台执行一次请求，并返回值
        $.ajax({
            type:"GET",
            url:"code1.php",
            success:function (msg) {
                var obj= JSON.parse(msg);
                drawCode(obj);
            }
        });
    });

    function drawCode(code) {
        var c=document.getElementById("canvas-vcode1");
        var ctx=c.getContext("2d");
        ctx.clearRect(0, 0, c.width, c.height);//每次产生验证码时先清除画布的内容
        ctx.font="20px 微软雅黑";
        ctx.fillStyle="red";
        ctx.textAlign="center";
        ctx.textBaseline="middle";
        ctx.strokeRect(0,0,80,30);
        ctx.fillText(code ,40,15);

        for(var i=0;i<20;i++){
            var x=Math.ceil(Math.random()*80);
            var y=Math.ceil(Math.random()*30);
            var z=Math.ceil(Math.random()*3);
            var r=Math.ceil(Math.random()*255);
            var g=Math.ceil(Math.random()*255);
            var b=Math.ceil(Math.random()*255);
            ctx.fillStyle="rgb("+r+","+g+","+b+")";
            ctx.beginPath();
            ctx.arc(x,y,z,0,Math.PI*2,false);
            ctx.closePath();
            ctx.fill();

        }
        for(var j=0;j<4;j++){
            var a=Math.ceil(Math.random()*80);
            var b=Math.ceil(Math.random()*30);
            var m=Math.ceil(Math.random()*80);
            var n=Math.ceil(Math.random()*30);
            ctx.moveTo(a,b);
            ctx.lineTo(m,n);
            ctx.lineWidth=2;
            ctx.stroke();
            var r=Math.ceil(Math.random()*255);
            var g=Math.ceil(Math.random()*255);
            var b=Math.ceil(Math.random()*255);
            ctx.strokeStyle="rgb("+r+","+g+","+b+")";
        }
    }
    $("#canvas-vcode1").trigger("click");//手动触发一次change事件

</script>

</body>
</html>