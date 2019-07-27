<?php
echo "你好，我是石中玉!<hr>\n";//输出

$a_bool = true;//定义变量$a_bool
$a_str="foo1";
$a_str2='foo2';
$a_int=12;

echo gettype($a_bool);//得到$a_bool 的数据类型并输出
echo "<br/>\n";
echo gettype($a_str);//得到$a_str 的数据类型并输出
echo " $a_str";
echo "<br/>\n";

if(is_int($a_int)){
    $a_int+=14;
    echo "$a_int<br/>\n";
}

if(is_string($a_str2)){
    echo "String:$a_str2<hr>\n";
}

$array=array(1,2,3,4,5);
$array_2=array(
    "foo"=>"bar",
    42=>24,
    "multi"=>array(
        "dimensional"=>array(
            "array"=>"foo"
        )
    )
);
var_dump($array_2["foo"]);//数组单元可以通过 array[key]
var_dump($array_2[42]);
var_dump($array_2["multi"]["dimensional"]["array"]);
echo "<br/>\n";
var_dump($array);/* 用于输出变量的相关信息
					显示关于一个或多个表达式的结构信息，
					包括表达式的类型与值。数组将递归展开值
					通过缩进显示其结构 */
echo "<hr>\n";
//object对象
class foo{
    function do_foo(){
        echo "Doing foo.<hr>\n";
    }
}
$obj =new foo;
$obj->do_foo();
/* callback类型
php是将函数以string形式传递的
回调函数示例
*/
function my_callback_function(){
    echo "hello world!<br/>\n";
}

class MyClass{
    static function myCallbackMethod(){
        echo "hello world2<br/>\n";
    }
}
call_user_func('my_callback_function');//调用普通的函数
call_user_func(array('MyClass','myCallbackMethod'));//调用类中静态的方法
//类的公开的非静态的方法必须在类实例化后方可被调用，否则会提示Strict性错误
$obj=new MyClass;
call_user_func(array($obj,'myCallbackMethod'));
echo "<hr>\n";

function digui(){
    static $a=0;
    $a++;
    echo "$a";
    if($a<10){
        digui();
    }
    $a--;
}
call_user_func('digui');
echo "<hr>\n";

?>

