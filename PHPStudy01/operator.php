<!DOCTYPE html>
<html>
<body>
<H1>运算符</H1>
<h2>算术运算符</h2>
<?php
$v1 = 5;
$v2 = 6;

echo "v1 = ". $v1;
echo "<br>";
echo "v2 = ". $v2;
echo "<br>";
echo "v1 + v2 = " . ($v1 + $v2);
echo "<br>";
echo "v1 - v2 = " . ($v1 - $v2);
echo "<br>";
echo "v1 * v2 = " . ($v1 * $v2);
echo "<br>";
echo "v1 / v2 = " . ($v1 / $v2);
echo "<br>";
echo "v1 % v2 = " . ($v1 % $v2); // 取余
echo "<br>";
echo "- v2 = " . (-$v1) ; // 取反
echo "<br>";
echo "v1 . v2 = " . $v1 . $v2; // 并置
echo "<br>";

?>

<h2>赋值运算符</h2>
<ul>
    <li>=</li>
    <li>+=</li>
    <li>-=</li>
    <li>*=</li>
    <li>/=</li>
    <li>%=</li>
    <li>.=</li>
</ul>

<h2>递增/递减运算符</h2>
<ul>
    <li>++x</li>
    <li>x++</li>
    <li>--x</li>
    <li>x--</li>
</ul>

<h2>比较运算符</h2>
<ul>
    <li>x == y	等于	如果 x 等于 y，则返回 true	5==8 返回 false</li>
    <li>x === y	绝对等于	如果 x 等于 y，且它们类型相同，则返回 true	5==="5" 返回 false</li>
    <li>x != y	不等于	如果 x 不等于 y，则返回 true	5!=8 返回 true</li>
    <li>x <> y	不等于	如果 x 不等于 y，则返回 true	5<>8 返回 true</li>
    <li>x !== y	不绝对等于	如果 x 不等于 y，或它们类型不相同，则返回 true	5!=="5" 返回 true</li>
    <li>x > y	大于	如果 x 大于 y，则返回 true	5>8 返回 false</li>
    <li>x < y	小于	如果 x 小于 y，则返回 true	5<8 返回 true</li>
    <li>x >= y	大于等于	如果 x 大于或者等于 y，则返回 true	5>=8 返回 false</li>
    <li>x <= y	小于等于	如果 x 小于或者等于 y，则返回 true	5<=8 返回 true</li>
</ul>

<h2>逻辑运算符</h2>
<ul>
    <li>and    x and y 与</li>
    <li>or    x or y 或</li>
    <li>xor    x xor y 异或</li>
    <li>&&    x && y 与</li>
    <li>||    x || y 或</li>
    <li>!    !x 非</li>
</ul>

<h2>数组运算符</h2>
<ul>
    <li> x + y 集合</li>
    <li> x == y 相等</li>
    <li> x != y 不相等</li>
    <li> x <> y 不相等</li>
    <li> x !== y 不恒等</li>
</ul>

<?php
echo "例子";
echo "<br>";
$array1 = array("r" => "red", "b" => "blue");
$array2 = array("g" + "green", "w" => "sds");  // 如果两个数组里面有相同的key会出现问题
$z = $array1 + $array2;
var_dump($z);
echo "<br>";
var_dump($array1 == $array2);
echo "<br>";
var_dump($array1 === $array2);
echo "<br>";
var_dump($array1 != $array2);
echo "<br>";
var_dump($array1 <> $array2);
echo "<br>";
var_dump($array1 !== $array2);
echo "<br>";
?>


<h2>三元运算符</h2>
<h2>组合比较符(PHP7+)</h2>
<h2>运算符优先级</h2>

<br>
<a href="index.php">目录</a>
</body>
</html>
