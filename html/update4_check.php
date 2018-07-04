<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include_once("../php/opensql.php");
$id=$_GET['id'];
$usname=$_POST['usname'];
$fenlei=$_POST['fenlei'];
$sql="update  tb_tishixinxi  set t_mess='$usname',t_url='$fenlei' where t_id=$id";
mysql_query($sql);
if(mysql_affected_rows()>0){
    echo "修改成功";
    header("refresh:1;url=notice_table.php");
}else {
    echo "你没有修改或修改失败";
    header("refresh:1;url=notice_table.php");

}


?>