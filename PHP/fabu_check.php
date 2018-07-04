<meta charset="UTF-8">


<?php
session_start();
include_once("opensql.php");
$fenlei=$_POST['fenlei'];
$title=$_POST['title'];
$jianjie=$_POST['jianjie'];
$mail=$_SESSION['mail'];
$da=date('Y-m-d H:i:s');//得到当前时间
$name = $_FILES['myfile']['name'];    //得到文件名称

if($mail=="登录"){
    echo '<script type="text/javascript">alert("你还没有登录，请先登录");</script>';
    header('refresh:0;url=fabu.php');
}else{
    if( $title== "" || !preg_match(  "/^[\x{4e00}-\x{9fa5}\w-]+$/u",$title)){
        header("refresh:0;url=fabu.php");
        echo '<script>alert("标题格式有误或为空");</script>';
        exit;
    }else if($jianjie==""){
        header("refresh:0;url=fabu.php");
        echo '<script>alert("简介格式有误或为空");</script>';
        exit;
    }else if($name==""){
        header("refresh:0;url=fabu.php");
        echo '<script>alert("没有上传图片");</script>';
        exit;
    }else{
        $type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
        $allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
//判断文件类型是否被允许上传
        if(!in_array($type, $allow_type)){
            echo '<script type="text/javascript">alert("不允许上传该类文件或你的文件为空");</script>';
            header('refresh:0;url=fabu.php');
           }else{
            $imgname= uniqid();
            $tmp = $_FILES['myfile']['tmp_name'];
            $filepath = '../images/';
            if(move_uploaded_file($tmp,$filepath.$imgname.".png")){
                $sql=" insert into tb_images (us_name,im_lei,im_time,im_tit,im_jie,im_url,im_zhuangtai) values ('$mail','$fenlei','$da','$title','$jianjie','$imgname.png','0')";
                mysql_query($sql);
              echo '<script type="text/javascript">alert("上传成功");</script>';
                header('refresh:0;url=fabu.php');
            }else{
                echo '<script type="text/javascript">alert("上传失败");</script>';
                header('refresh:0;url=fabu.php');
            }
        }
    }









}




?>