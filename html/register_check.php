<meta charset="UTF-8">
<?php
session_start();
$username=$_POST["username"];
$password=$_POST['password'];
$password1=$_POST['password1'];

include_once("../php/opensql.php");
$sql1="select * from tb_admin where name='$username'";
$xian=$mysqldb->select($sql1);
$r=mysql_num_rows($xian);

if(empty($_POST['code'])){
    echo '<script type="text/javascript">alert("你没有输入验证码，请输入");</script>';
    header('refresh:0;url=register.php');
    die();
}else{
    $code=$_POST['code'];
}

if(!(strtolower($code)==strtolower($_SESSION['code']))){
    echo '<script type="text/javascript">alert("验证码错误，请重新输入");</script>';
    header('refresh:0;url=register.php');
    exit();
}else{

if(!preg_match("/^[a-zA-Z\d]{6,}$/", $password)){
        header("refresh:0;url=register.php");
        echo '<script>alert("密码格式有误");</script>';
        exit;
    }else{
    if($password!=$password1){
        echo '<script type="text/javascript">alert("两次密码不一致，请重新输入");</script>';
        header('refresh:0;url=register.php');
        exit();
    }else{
        if($r>0){
            echo '<script>alert("该用户已存在");</script>';
            header("refresh:1;url=register.php");
        }else{
            include_once("../php/opensql.php");
            $sql = "insert into tb_admin(name,password,jurisdiction,state) values('$username','$password1','1','1')";
            $result = mysql_query($sql);
            if (!$result) {
                echo '<script>alert("管理员添加失败，请检查SQL语句");</script>';
                header("refresh:1;url=register.php");
            } else {
                echo '<script>alert("管理员添加成功");</script>';
                header("refresh:1;url=login.php");
            }
        }
    }
}

}



?>