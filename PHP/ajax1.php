<?php
include_once("opensql.php");
$name=$_SESSION['mail'];
$num_rec_per_page=3;   // 每页显示数量
$sql2="select * from tb_images  where  us_name='$name'";//准备sql语句
$xian2=$mysqldb->select($sql2);
$r1=ceil(mysql_num_rows($xian2)/$num_rec_per_page);
if(empty($_GET['page1'])){
    $page1=1;
}else{
    $page1=$_GET['page1'];
}
if( $page1==1){
    $shang=1;
}else{
    $shang=$page1-1  ;
}
if($page1>=$r1){
    $next=$r1;
}else{
    $next=$page1+1  ;
}
$start_from =($page1-1)*$num_rec_per_page;
$sql3="select * from tb_images  where  us_name='$name'  limit $start_from,$num_rec_per_page";//准备sql语句
$xian3=$mysqldb->select($sql3);
while ($info1=mysql_fetch_array($xian3)) {//
    $arr[]=$info1;
}

echo json_encode($arr);
