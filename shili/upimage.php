//html代码
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Insert title here</title>
</head>

<style>
    img{
        width:100%;
        height: 100%;
    }
</style>
<body>
<form action="upimage1.php" method="post" enctype="multipart/form-data">
    请选择您要上传的文件：<input type="file" name='myfile' />
    <input type="submit" value="上传文件" />
</form>

<?php
include_once("conn.php");
$sql="select * from ccs_image ";
$xian=$mysqldb->select($sql);
while ($info=mysql_fetch_array($xian)) {
    echo "<img src='photo/{$info["description"]}'>";
}


?>

</body>
</html>