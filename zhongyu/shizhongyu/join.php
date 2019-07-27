<?php
require_once 'sql_conn.php';

$userPwd=$_POST['userPwd'];
$confirmPassWord=$_POST['confirmUserPwd'];
$userName=$_POST['userName'];
$userPhone=$_POST['userPhone'];

if($userPwd!=$confirmPassWord){
    echo  "<script>alert('两次输入的密码不一致');history.go(-1)</script> ";
}

$sqlUserName="select * from user where userName='$userName'";
$result=mysqli_query($con,$sqlUserName);
$res1=mysqli_num_rows($result);
if($res1>0){
    echo "<script>alert('该用户名已被占用，请更换用户名');history.go(-1)</script> ";
}

$sqlUserPhone="select * from user where userPhone='$userPhone'";
$result=mysqli_query($con,$sqlUserPhone);
if(mysqli_num_rows($result)>0){
    echo "<script>alert('该电话号码已被注册，请确认你的号码是否正确');history.go(-1)</script>";
}
$join="insert into user(userName, userPwd, userPhone) VALUE('$userName','$userPwd','$userPhone')";
if(mysqli_query($con,$join)){
    echo "<script>alert('注册成功!');location.href='register.php';</script>";
}else{
    echo "注册失败";
}