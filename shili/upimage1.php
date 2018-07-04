
<meta charset="UTF-8">
<?php
include_once("conn.php");


//得到文件名称
$name = $_FILES['myfile']['name'];
$type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
$allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
//判断文件类型是否被允许上传
if(!in_array($type, $allow_type)){
    //如果不被允许，则直接停止程序运行
    echo "不允许";
}else{
    $imgname2= uniqid();
    $tmp = $_FILES['myfile']['tmp_name'];
    $filepath = 'photo/';
    if(move_uploaded_file($tmp,$filepath.$imgname2.".png")){
        $sql=" insert into ccs_image (description) VALUES ('$imgname2.png')";
        mysql_query($sql);
        echo $sql;
        echo "上传成功";
    }else{
        echo "上传失败";
    }
}


?>