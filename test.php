<?php
	$DOCUMENT_URL=$_SERVER['DOCUMENT_ROOT']."test/order.txt";
	//echo $outputstring;
	/*读取文件的方式1*/
	$fp=fopen("$DOCUMENT_URL","rb");
	echo filesize("$DOCUMENT_URL")."【此处应该是两个相同的数值为文件长度+11】<br />";
	fclose($fp);

/* $a=@(57/0);
$b=3;
echo $a."1+$b".$php_errormsg;
$b>1 ?   'yes' :  'no';
echo $b;
$c=`dir c :`;
echo '<pre>'.$c.'</pre>';

$a=array("a"=>1,"b"=>'2',"c"=>'3',"d"=>'4');
$b=array("a"=>1,4,5,6,7);
$c=$a+$b;
print_r($c);

$a=array("a"=>1,"b"=>'2');
$b=array("b"=>2,"a"=>'1');
if ($a===$b) echo 'yes';
define ('LUHAO',200);
echo number_format(LUHAO,2);
echo gettype($a);

//此处开始有问题 正在查找 201608181608
$a=2;
settype($a,'double');
echo $a;
gettype($a);
echo "###<br>";
echo date('H:i jS F a c Y/m/d a h:i:s');*/
//$tireqty=$_request['tireqty'];
//$tireqty=$_COOKIE['tireqty'];
//$oilqty=$_post['oilqty'];
//$sparkqty=$_post['sparkqty'];


//$tireqty='1';
//echo $tireqty;
 
 
 /*重新学习php*/
 echo date('Y-m-d H:m:s');
 
 echo <<<aaa
	line 1 
	line 2
	line 3
aaa;

$a='x';
$$a=2;
echo $x;

$qutalqty=99.9;
$qutalamount=$qutalqty;
echo <<<qutalqty
$qutalamount
qutalqty;

/* 20170829*/
//print_r($GLOBALS);
 $a=5e5;
 echo '<br />'."$a";
 
 $a=1;
 $a.=5;
 echo '<br />'.$a.'<br />';
 
 $x=2;
 echo $x++.'<br />'.$x.'<br />';
 echo ++$x.'<br />'.$x.'<br />';
 
 $a1=5;
 $b1=$a1;
 $a1=7;
 echo $a1.$b1;
 unset($a1);
 echo $b1;
 $a2=6;
 $b2=&$a2;
 $a2=8;
 echo '<br />'.$a2.$b2;
// unset($a2);
 $a2=2;
 echo '<br />'.$b2;
 
if ($a2===$b2) {echo 'true';};
 
 
$a2 != $b2 ? $v=11111 : $b=22222;
echo @$v;
echo $php_errormsg;

$out=`dir c`;
echo '<pre>'.$out.'</pre>';

$a=array("a"=>1,"b"=>2);
$b=array("c"=>3,"d"=>4);
//$c=$a+$b;
print_r($a+$b);
 /* 1.11计算表单总金额，用php写成页面*/
	echo "<h1>Bob's Auto Parts</h1><br />"; 
 	echo"<h2>Order Results</h2><br />"; 
	echo"<h3>Order processed at ".date('H:i,jS F Y')."</h3><br />"; 
	$totalqty=0;
	$tireqty=2;$oilqty=4;$sparkqty=6;
	$totalqty=$tireqty+$oilqty+$sparkqty;
	$totalamount=0.00;
	define('TIREPRICE',100);
	define('OILPRICE',10);
	define('SPARKPRICE',4);
	$totalamount=TIREPRICE*$tireqty+
				 OILPRICE*$oilqty+
				 SPARKPRICE*$sparkqty;
	echo "<p>Items order : ".$totalqty."<br />";
	echo "Subtotal:$".number_format($totalamount,2)."<br />";	
	$taxrate=0.10;//税点		 
	$totalamount*=1+$taxrate;
	echo "Tatal including tax :$".number_format($totalamount,2)."</p>";
	/*1.11结束*/
	/*可变函数*/
	echo gettype($totalqty);
	
	$a=566;
	echo gettype($a);
	//settype($a,'double');
	//echo $a."##".gettype($a);
	
	if (is_integer($a)){echo "true";}
	$tireqty=1;
	unset($tireqty);
	//echo "<br >".$tireqty;
 	echo "<br />".'isset($tireqty)'.isset($tireqty)."<br />";
	echo 'isset($nothere)'.isset($nothere)."<br />";
	echo 'empty($tireqty)'.empty($tireqty)."<br />";
	echo 'empty($nothere)'.empty($nothere)."<br />";
 
 	/*while循环*/
 	$num=1;
	while($num<=5){
		echo $num++;
		}
 
 	/*第二章·2.1 fopen函数*/
	$DOCUNMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
	print_r($DOCUNMENT_ROOT);
 
 	//open a file
	@$fp=fopen("$DOCUNMENT_ROOT/test/order.txt",'ab');
	if(!$fp){
		echo "<Strong>You order counld not be processed at this time,Please try again later.</strong></body></html>";
		exit;
			}
	//$fp=fopen("$DOCUNMENT_ROOT\\test\\order2.txt","w");//只针对windows有用的代码
 	//$fw=fwrite($fp,"this is some word i writed.\r\n",3);
	/*2.5.2文件格式*/
	
	
	
	
 ?>
<pre></pre>