<meta charset="UTF-8">
<?php

//获取修改表单里面的值赋给变量
$usname=$_POST['usname'];
$fenlei=$_POST['fenlei'];
include_once("../php/opensql.php");

//准备sql语句
$sql="insert into tb_tishixinxi(t_url,t_mess) values('$fenlei','$usname')";
$result=mysql_query($sql);
if(!$result){
    echo '<script>alert("通知公告添加失败，请检查SQL语句");</script>';
    header("refresh:1;url=notice_table.php");

}else{
    echo '<script>alert("通知公告添加成功");</script>';
    header("refresh:1;url=notice_table.php");
}



?>