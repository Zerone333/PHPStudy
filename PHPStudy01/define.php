<!DOCTYPE html>
<html>
<body>

<h1>常量</h1>
<p>常量是一个简单值的标识符。该值在脚本中不能改变。
    一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 (常量名不需要加 $ 修饰符)。
    注意： 常量在整个脚本中都可以使用。
<b>常量是全局的</b></p>

<?php
define("isChangLiang", 12, false);
echo isChangLiang;

?>

<br>
<a href="string.php">字符串</a>
</body>
</html>