<?php
$con = mysqli_connect("localhost","root","root","zhongyu");
if(!$con){
    echo "数据库连接失败！<hr>\n";
}
/*$sql="update user set userPhone=15180565555 where userId=101";
$update=mysqli_query($con,$sql);
if(!$update){
    printf("Error:%s\n",mysqli_errno($con));
    exit();
}else{
    echo "数据更新成功！<hr>\n";
}*/
/*$sql_2="insert into zhongyu.user VALUE (103,'王五','abc',15182856456)";
mysqli_query($con,$sql_2);
if(!$sql_2){
    echo mysqli_errno($con);
}else{
    echo "数据插入成功！<hr>\n";
}
$result=mysqli_query($con,"select * from user");
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
if(mysqli_num_rows($result)>0){
    //输出数据
    while($row=mysqli_fetch_assoc($result)){
        echo "用户ID:".$row["userId"]."用户姓名：".$row["userName"]."用户电话：".$row["userPhone"]."<br>\n";
    }
}else{
    echo "0 结果";
}
mysqli_close($con);*/
?>