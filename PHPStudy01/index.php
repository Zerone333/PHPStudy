<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

<h1>PHP变量</h1>


<?php
/*
$x = 5;
$y = 9;
$sum = $x + $y;
echo $x . "+" . $y . "=" . $sum;
*/
?>
<h1>变量作用域</h1>
<p>
php 变量作用域：
local
global
static
parameter
</p>


<h2>gloabl</h2>
<p>gloabl 可使用 $GLOBAL['变量名']访问</p>
<?php
$x=5; // 全局变量 global

function myTest()
{
    echo "myTest";
    echo "<br>";
    $y=10; // 局部变量
    echo "x:" . $x;
    echo "<br>";
    echo  "y:" . $y;
    echo "<br>";
}

myTest();
echo "x:" . $x;
echo "<br>";
echo "y:" . $y;
?>

<?php
    $global_x = 1;
    $gloabl_y = 2;

    function test()
    {
        echo "test";
        echo "<br>";
        echo "函数内访问全局变量<br>";
        global $global_x;
        echo "x:" . $global_x;
        echo "y:" . $gloabl_y;
        echo "<br>";

        echo "使用gloabl数组<br>";
        echo "global_x: " . $GLOBALS['global_x'];
        echo  "<br>";
    }

    test();
    myTest();
?>

<h2>static</h2>
<p>函数调用玩后，函数里面的变量名将被重置，如果不希望被重置，需要添加static修饰</p>

<?php
    function test1()
    {
        static $v1 = 0;
        echo $v1;
        $v1 ++;
        echo "<br>";
    }
test1();
test1();
test1();
?>
<h2>参数</h2>
<?php
function test2($p)
{
    echo $p;
}
test2(4);
echo "<br>";
?>
<a href="echo_print.php">PHP echo/print</a>
</body>
</html>

