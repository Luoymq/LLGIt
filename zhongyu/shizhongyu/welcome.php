<html>
<head>
    <meta charset="utf-8">
    <title>xxx系统</title>
</head>
<body style="background: turquoise"></body>
</html>
<?php
$A =1;
$b = a();
require_once 'sql_conn.php';
$userName=$_POST['userName'];
$userPwd=$_POST['userPwd'];

$sql="select userName,userPwd from user WHERE userName='$userName'AND userPwd='$userPwd'";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if(!$row){
    echo  "<script>alert('账号或者密码输入有误，请重新输入！');location.go(-1)</script> ";
}else{
    echo  "<script>alert('登录成功!')</script> ";
    echo $_POST["userName"];
    echo "你好！";
}

function a(){
    $a = 222;
    return $a;
}
?>

