<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include_once("../php/opensql.php");
$id=$_GET['id'];
$sql="delete from  tb_tishixinxi where t_id=$id";
mysql_query($sql);
if(mysql_affected_rows()>0){
    echo "删除成功";
    $sql2="alter table tb_tishixinxi drop column t_id";
    $sql3="alter   table  tb_tishixinxi add t_id int(11)   auto_increment ,add primary key (t_id)";
    mysql_query($sql2);
    mysql_query($sql3);
    header("refresh:1;url=notice_table.php");
}else{
    echo "删除失败";
    header("refresh:1;url=notice_table.php");

}


?>

