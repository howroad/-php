<?
/*第四章 字符串操作与正则表达式*/
/*4.1创建一个智能表单邮件*/
echo "<a href=\"feedback.html\">点击此处进入该页面</a>";
echo "发送失败了，配置问题。";


/*字符串的格式化
chop();ltrim();trim();rtrim();
*/

$a="   111  <55>";
$b="   111  <55> ";
echo $a;
echo "<br />这是末尾没有空格的格式化之后是这样".trim($a,"<55>");//注：只能去掉开头和结尾的东西
echo "<br />这是末尾有空格的格式化之后是这样".trim($b,"<55>");//注：只能去掉开头和结尾的东西,有空格就不管用了
//ltrim();只去掉左边
//rtrim();只去掉左边，chop()为rtrim()的别名

/*4.2.2格式化字符串以便于显示nl2br()*/
$name="Kevin";
$mail="436081860@qq.com";
$feedback="very good";
$mailcontent=$name."\n".$mail."\n".$feedback."\n";
echo $mailcontent;
echo nl2br($mailcontent);




















?>