<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include_once("../php/opensql.php");
$id=$_GET['id'];
$pass=md5($_POST['pass']);
$sql="update  tb_user  set us_password='$pass' where us_id=$id";
mysql_query($sql);
if(mysql_affected_rows()>0){
    echo "修改成功";
    header("refresh:1;url=user_table.php");
}else {
    echo "你没有修改或修改失败";
    header("refresh:1;url=user_table.php");

}


?>