<?
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=trim($_POST['feedback'],"222");
/*email的配置*/
//以上代码没有正确运行，应该是php配置问题

$toaddress="kknn2@vip.qq.com";
$mailcontent=$name.$email.$feedback;
$subject="Feedback from website.";
$fromaddress="From:436081860@qq.com";
//mail($toaddress,$subject,$mailcontent,$fromaddress);
echo "Your feedback has been sent.";
//以上代码没有正确运行，应该是php配置问题
echo "$name $email $feedback";










?>
