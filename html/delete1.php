<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include_once("../php/opensql.php");
$id=$_GET['id'];
$sql="delete from tb_images where im_id=$id";
mysql_query($sql);
if(mysql_affected_rows()>0){
    echo "删除成功";
    $sql2="alter table tb_images  drop column im_id";
    $sql3="alter   table   tb_images  add   im_id   int(11)   auto_increment ,add primary key (im_id )";
    mysql_query($sql2);
    mysql_query($sql3);
    header("refresh:1;url=find_table.php");
}else{
    echo "删除失败";
    header("refresh:1;url=find_table.php");

}


?>

