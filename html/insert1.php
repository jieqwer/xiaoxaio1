<meta charset="UTF-8">
<?php

//获取修改表单里面的值赋给变量
$usname=$_POST['usname'];
$fenlei=$_POST['fenlei'];
include_once("../php/opensql.php");

//准备sql语句
$sql="insert into tb_classification2 (c2name,c2fid) values('$usname','$fenlei')";
$result=mysql_query($sql);
if(!$result){
    echo '<script>alert("子分类添加失败，请检查SQL语句");</script>';
    header("refresh:1;url=classification_table.php");

}else{
    echo '<script>alert("子分类添加成功");</script>';
    header("refresh:1;url=classification_table.php");
}



?>