<?php
require_once  '../Connect2.1/qqConnectAPI.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon"  href="../images/xiaoxiao2.ico">
    <link  rel="stylesheet" type="text/css" href="../style/love.css">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <title>小小de风景</title>
</head>
<body>

<div class="content1">
    <?php
    include_once("opensql.php");
    $name=$_SESSION['mail'];
    $sql2="select * from tb_images  where im_id in (select im_id from tb_love where us_name='$name') ";//准备sql语句
    $xian2=$mysqldb->select($sql2);
    while ($info1=mysql_fetch_array($xian2)) {
        echo '<a  href="user.php?id='.$info1[0].'"><img src="../images/'.$info1[5].'"><span>'.$info1[0].'</span></a> ';
    }
    ?>

</div>

</body>
</html>