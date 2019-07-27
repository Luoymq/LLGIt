<html lang="en">
<head>
    <meta charset="utf-8">
    <title>欢迎登录</title>
</head>
<h2>欢迎登录xxx系统</h2>
<body style="background: steelblue">
<form action="welcome.php" name="register" id="register" onsubmit="return isok(this)" method="post">
    用户名：<input type="text" name="userName" id="userName"><br>
    密   码：<input type="text" name="userPwd" id="userPwd"><br>
    <input type="submit" name="submit" value="登录">
    <a href="my_html/join.html">注册</a>
</form>
</body>
<script language="JavaScript">
    function isok(theform)
    {
        if (register.userName.value=="")
        {
            alert("请您填写用户名！");
            register.userName.focus();
            return (false);
        }
        if (register.userPwd.value=="")
        {
            alert("请您输入密码！");
            register.userPwd.focus();
            return (false);
        }
    return (true);
    }
</script>

</html>
