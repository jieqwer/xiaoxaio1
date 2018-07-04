<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon"  href="../images/xiaoxiao2.ico">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../style/style1.css" type="text/css">
    <script src="../js/ui.js"></script>
    <title>小小de风景</title>
</head>
<body>
<div id="no" class="alert" onclick="mizhu.alert('提示·', '你已喜欢该图片！','alert_red');"></div>
<div id="ok" class="alert" onclick="mizhu.alert('提示·', '真巧，这图片我也喜欢！','alert_green');"></div>

</body>
</html>
<?php
include_once("opensql.php");
session_start();
$name=$_SESSION['mail'];
$id=$_GET['id'];

/*$sql="select * from tb_images join tb_user on tb_images.us_name=tb_user.us_name where im_id=$id";//准备sql语句
$xian=$mysqldb->select($sql);
$row=mysql_fetch_row($xian);*/

$sql1="select * from tb_love  where us_name='$name' and im_id=$id";//准备sql语句
$xian1=$mysqldb->select($sql1);
$r=mysql_num_rows($xian1);
if($r>0){
    echo '<script type="text/javascript">$(function() {$("#no").trigger("click");})</script>';
    header('refresh:1.5;url=find.php?id='.$id);
}else{
    if($name=="登录"){
        echo '<script type="text/javascript">alert("你还没有登录，请先登录");</script>';
        header('refresh:0;url=login.php');
    }else{
        $sql2=" insert into tb_love (us_name,im_id) values ('$name','$id')";
        mysql_query($sql2);
        echo '<script type="text/javascript">$(function() {$("#ok").trigger("click");})</script>';
        header('refresh:1.5;url=find.php?id='.$id);
    }


}






?>