<!DOCTYPE html>
<html>
<body>

<h1>echo/print</h1>

<p>echo 多个字符</p>
<p>print 单个字符 返回值为1</p>

<?php
echo "<h2>echo 输出</h2>";
echo "<br>";
echo "多个" . "字符" . "一起输出";
echo "<br>";

print "使用print输出";

$text1 = "string1";
$text2 = "string2";

$car = array("string3", $text1, $text2);
print $text1;
print  $car[2];
echo "<br>";
?>
<a href="data_type.php">数据类型</a>
</body>
</html>