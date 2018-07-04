
<!DOCTYPE html>
<head>
    <title>小小后台管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="reg-w3">
    <div class="w3layouts-main">
        <h2>Register Now</h2>
        <form action="register_check.php" method="post">
            <input type="text" class="ggg" name="username" placeholder="USERNAME" required="">
            <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            <input type="password" class="ggg" name="password1" placeholder="CONFIRMPASSWORD" required="">
            <input type="text" class="ggg" pattern="^[\d]{4}$" placeholder="验证码" name="code" id="code">
            <canvas width="80px" height="30px"   id="canvas-vcode"></canvas>
            <h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>
            <div class="clearfix"></div>
            <input type="submit" value="submit" name="register">
        </form>
        <p>Already Registered.<a href="login.php">Go to Login</a><a href="index.php">back Home</a></p>
    </div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>

<script>

    $("#canvas-vcode").click(function () {  //点击向后台执行一次请求，并返回值
        $.ajax({
            type: "GET",
            url: "code.php",
            success: function (msg) {
                var obj = JSON.parse(msg);
                drawCode(obj);
            }
        });
    });

    function drawCode(code) {
        var c = document.getElementById("canvas-vcode");
        var ctx = c.getContext("2d");
        ctx.clearRect(0, 0, c.width, c.height);//每次产生验证码时先清除画布的内容
        ctx.font = "20px 微软雅黑";
        ctx.fillStyle = "red";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        ctx.strokeRect(0, 0, 80, 30);
        ctx.fillText(code, 40, 15);

        for (var i = 0; i < 20; i++) {
            var x = Math.ceil(Math.random() * 80);
            var y = Math.ceil(Math.random() * 30);
            var z = Math.ceil(Math.random() * 3);
            var r = Math.ceil(Math.random() * 255);
            var g = Math.ceil(Math.random() * 255);
            var b = Math.ceil(Math.random() * 255);
            ctx.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
            ctx.beginPath();
            ctx.arc(x, y, z, 0, Math.PI * 2, false);
            ctx.closePath();
            ctx.fill();

        }
        for (var j = 0; j < 4; j++) {
            var a = Math.ceil(Math.random() * 80);
            var b = Math.ceil(Math.random() * 30);
            var m = Math.ceil(Math.random() * 80);
            var n = Math.ceil(Math.random() * 30);
            ctx.moveTo(a, b);
            ctx.lineTo(m, n);
            ctx.lineWidth = 2;
            ctx.stroke();
            var r = Math.ceil(Math.random() * 255);
            var g = Math.ceil(Math.random() * 255);
            var b = Math.ceil(Math.random() * 255);
            ctx.strokeStyle = "rgb(" + r + "," + g + "," + b + ")";
        }

    }
    $("#canvas-vcode").trigger("click");//手动触发一次change事件


</script>
</body>
</html>
