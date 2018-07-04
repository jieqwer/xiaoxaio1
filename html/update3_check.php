<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include_once("../php/opensql.php");
$id=$_GET['id'];
$usname=$_POST['usname'];
$fenlei=$_POST['fenlei'];
$sql="update  tb_classification2 set c2name='$usname',c2fid='$fenlei' where c2id=$id";
mysql_query($sql);
if(mysql_affected_rows()>0){
    echo "修改成功";
    header("refresh:1;url=classification_table.php");
}else {
    echo "你没有修改或修改失败";
    header("refresh:1;url=classification_table.php");

}


?>