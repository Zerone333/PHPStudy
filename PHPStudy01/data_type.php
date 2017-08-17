<!DOCTYPE html>
<html>
<body>

<h1>数据类型</h1>
<p>String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。</p>

<?php
echo "<h3>字符串</h3>";
$z = "string";
echo $z;
echo "<br>";

echo "<h3>整型</h3>";
$x = 9798;
var_dump($x);
echo $x;
echo "<br>";

echo "<h3>浮点</h3>";
$f = 9798.3;
var_dump($f);
echo $f;
echo "<br>";

echo "<h3>布尔</h3>";
$b = true;
var_dump($b);
echo $b;
echo "<br>";

echo "<h3>数组</h3>";
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
echo $cars;
echo "<br>";

echo "<h3>对象</h3>";

class Car
{
    var $color;  // string
    function  Car($color = "green")
    {
        $this->color = $color;
    }

    function what_color()
    {
        return $this->color;
    }
}

$car = new Car("blue");
$carColor = $car->what_color();
echo $carColor;
echo "<br>";

$car->color = "red";
$carColor = $car->what_color();
echo $carColor;
echo "<br>";

echo "<br>";
?>
<p>PHP NULL 值
    NULL 值表示变量没有值。NULL 是数据类型为 NULL 的值。
    NULL 值指明一个变量是否为空值。 同样可用于数据空值和NULL值的区别。
    可以通过设置变量值为 NULL 来清空变量数据：
</p>
<a href="define.php">常量</a>
</body>
</html>