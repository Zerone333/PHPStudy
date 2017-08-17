<!DOCTYPE html>
<html>
<body>
<h1>字符串变量</h1>

<?php
$txt = "hello string";
echo $txt;
echo "<br>";
?>

<h3>并置运算符</h3>
<p>并置运算符 (.) 用于把两个字符串值连接起来。</p>

<?php
echo $txt . "拼接上来显示的";
echo "<br>";
?>

<h3>strlen()函数</h3>
<p>计算文本长度</p>
<?php
echo  strlen("hello string length");
echo "<br>";
?>

<h3>strpos()函数</h3>
<p>查找指定文本在字符串中的位置</p>
<?php
echo strpos("hello", "e");
?>

<br>
<a href="http://www.runoob.com/php/php-ref-string.html">string 参考手册</a>

<br>
</body>
</html>