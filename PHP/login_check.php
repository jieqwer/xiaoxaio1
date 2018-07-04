<meta charset="UTF-8">
<?php


$mail=$_POST["mail"];
$password=$_POST['password'];
session_start();

setcookie("mail",$mail,time()+7*24*3600);
setcookie("password",$password,time()+7*24*3600);

if($_SESSION['mail']!=="登录"&& isset($_SESSION['mail'])){
    echo '<script type="text/javascript">alert("你已登录，请勿重复登录");</script>';
    header('refresh:0;url=index.php');
    die();
}else{
    if(empty($_POST['code'])){
        echo '<script type="text/javascript">alert("你没有输入验证码，请输入");</script>';
        header('refresh:0;url=login.php');
        die();
    }else{
        $code=$_POST['code'];
    }
    if(!(strtolower($code)==strtolower($_SESSION['code']))){
        echo '<script type="text/javascript">alert("验证码错误，请重新输入");</script>';
        header('refresh:0;url=login.php');
        exit();
    }
    if(empty($_POST["mail"])){
        echo '<script type="text/javascript">alert("你没有输入用户名，请输入");</script>';
        header('refresh:0;url=login.php');
        die();
    }else{
        $mail=$_POST['mail'];
    }
    if(empty($_POST['password'])){
        echo '<script type="text/javascript">alert("你没有输入密码，请输入");</script>';
        header('refresh:0;url=login.php');
        die();
    }else{
        $password=md5($_POST['password']) ;
    }
    include_once("opensql.php");
    $sql='select * from tb_user where us_name="'.$mail.'" and us_password="'.$password.'"';
    $xian=$mysqldb->select($sql);
    $r=mysql_num_rows($xian);
    if($r>0){
        $_SESSION['mail']=$mail;
        header("refresh:0;url=index.php");
    }else{
        echo '<script type="text/javascript">alert("用户名和密码有错，请重新输入");</script>';
        header('refresh:0;url=login.php');
    }

}





?>