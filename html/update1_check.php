<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include_once("../php/opensql.php");
$id=$_GET['id'];
$usname=$_POST['usname'];
$fenlei=$_POST['fenlei'];
$tit=$_POST['tit'];
$mess=$_POST['mess'];
$fil=$_POST['fil'];
$shenhe=$_POST['shenhe'];
$sql="update  tb_images set us_name='$usname',im_lei='$fenlei',im_tit='$tit',im_jie='$mess',im_url='$fil',im_zhuangtai=$shenhe where im_id=$id";
mysql_query($sql);
if(mysql_affected_rows()>0){
    echo "修改成功";
    header("refresh:1;url=find_table.php");
}else {
    echo "你没有修改或修改失败";
    header("refresh:1;url=find_table.php");

}


?>