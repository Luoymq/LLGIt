<?php
echo "你好，我是石中玉!<hr>";//输出
/* print()：简单输出语句，可以输出字符串，变量、表达式等单项的值！（不能输出数组、对象等复杂数据类型）
echo():跟print语句是一样的，也是简单输出语句，但是一次可以输出多个数据，中间以逗号分隔！
var_dump():不仅仅可以输出一个或多个数据项的值，还可以打印出数据项的类型、长度等额外的信息！而且可以输出复杂数据类型！
print_r():和var_dump()一样，一般就是用来打印数组等复杂数据类型，与var_dump的区别就是只打印数组里面元素的值，不打印其他的额外的信息！
printf():比较擅长输出由静态文本和其他变量所组成的“混合产物” */
$a_bool = true;//定义变量$a_bool
$a_str="foo1";
$a_str2='foo2';
$a_int=12;

echo gettype($a_bool);//得到$a_bool 的数据类型并输出
echo "<br/>";
echo gettype($a_str);//得到$a_str 的数据类型并输出
echo " $a_str";
echo "<br/>";

if(is_int($a_int)){
	$a_int+=14;
	echo "$a_int<br/>";
}

if(is_string($a_str2)){
	echo "String:$a_str2<hr>";
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
echo "<br/>";
var_dump($array);/* 用于输出变量的相关信息
					显示关于一个或多个表达式的结构信息，
					包括表达式的类型与值。数组将递归展开值
					通过缩进显示其结构 */
echo "<hr>";
//object对象
class foo{
	function do_foo(){
		echo "Doing foo.<hr>";
	}
}
$obj =new foo;
$obj->do_foo();
/* callback类型 
php是将函数以string形式传递的
回调函数示例
*/
function my_callback_function(){
	echo "hello world!<br/>";
}

class MyClass{
	static function myCallbackMethod(){
		echo "hello world2<br/>";
	}
}
call_user_func('my_callback_function');//调用普通的函数
call_user_func(array('MyClass','myCallbackMethod'));//调用类中静态的方法
//类的公开的非静态的方法必须在类实例化后方可被调用，否则会提示Strict性错误
$obj=new MyClass;
call_user_func(array($obj,'myCallbackMethod'));
echo "<hr>";
//Rouser资源类型
?>