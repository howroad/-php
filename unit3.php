<?
/*3.2创建数组的方法*/
/*
[1]$product=array();
[2]$product[0]=**;
	$product[1]=**;
[3]$product=range(1,10,2);


*/
$product=array('Tires','oil','Spark Plugs');//创建一个名为product的数组
//print_r($product);
$number=range(1,10,4);//创建一个从1开始从10结束的数组,步长为第三个元素
$number2=range('a','z',2);//range函数创建的是一个数组，我认为也是创建数组的方法之一
//print_r($number2);
$product[3]='Fuses';
//print_r($product);
echo "$product[0] $product[1] $product[2] $product[3]";//a new print way
//print_r(range(1,5,2));



/*3.2.3使用循环访问数组*/

for($i=0;$i<12;$i++){
	echo $number2[$i];
	//echo $i;
	};
foreach($number2 as $i){
	echo $i;
	}//对于key（索引）不是数字的可以使用foreach来循环

/*使用无法索引的数组*/
$price=array('Tires'=>100,'Oil'=>10,'Spark Plugs'=>4);
$price2=array(1=>100,4=>10,5=>4);//数字作为key可以不加引号，但是字母不行
$price3['Tires']=100;
$price3['Oil']=10;
//print_r($price3);

/*【方法一foreach】*/
foreach($price as $key=>$value){
	echo "<br />".$key."-".$value;
	};
echo"<br />";

/*【方法二while each】*/
reset($price);//each函数的指针在当前位置所以函数越界，foreach指针会自动从头开始
while($ii = each($price)){
	echo $ii['key']."-".$ii['value']."<br />";
	}
	
/*【方法3while list each】*/
reset($price);
while(list($a,$b)=each($price)){
	echo $a."--".$b."<br />";
	}

/*【不能用有key的数组】【方法4】 使用count之后用for*/
for($i=0;$i<count($number);$i++){
	//echo $price['key'];
	echo $number[$i]."<br />";
	}

print_r($number+$number2+$price);//数组的相加运算
echo "<br />";

/*3.5多维数组*/
$products=array(array('TIR','Tires',100),array('OIL','oil',10),array('SPK','Spark Plugs',4));

/*多维数组的遍历*/
/*【1】直接打印*/
echo '|'.$products[0][0].'|'.$products[0][1].'|'.$products[0][2].'|<br />';
echo '|'.$products[1][0].'|'.$products[1][1].'|'.$products[1][2].'|<br />';
echo '|'.$products[2][0].'|'.$products[2][1].'|'.$products[2][2].'|<br />';
/*【2】双重for循环*/
for($row=0;$row<3;$row++){
	for($column=0;$column<3;$column++){
		echo '|'.$products[$row][$column];
		}
		echo"|<br />";
	};
/*建立有意义索引的多位数组*/
$productss=array(array('Code'=>'TIR','Description'=>'Tires','Price'=>100),
				 array('Code'=>'OIL','Description'=>'Oil','Price'=>10),
				 array('Code'=>'SPK','Description'=>'Spark Plugs','Price'=>4)
			);
//print_r($productss);
/*尝试用3种方法遍历该数组$princess*/
	/*
	1.双重for循环
	2.for+while+each、
	3.for+while+list
	*/
echo "<br />";
for($row=0;$row<3;$row++){
	while($i=each($productss[$row])){
		echo '|'.$i['value'];
		}
		echo"|<br />";
	};
//reset($productss);不知道为什么左边的函数不管用要用下边的函数。
reset($productss[0]);
reset($productss[1]);
reset($productss[2]);

for($row=0;$row<3;$row++){
	while(list($a,$b)=each($productss[$row])){
		echo "|$b";
		}
		echo "|<br />";
	}
	
/*三维以上的数组暂时放弃没有看*/
$x=array('f','g','c','e','E','b','9','a');
print_r($x);
echo "<br />";
asort($x);
print_r($x);
echo "<br />";
/*asort和ksort*/
$y=array('Tires'=>100,'Oil'=>10,'Spark Plugs'=>4);
print_r($y);
sort($y);
print_r($y);
/*反向排序rsort，krsort，arsort*/
/*自己给自己出了一个题目，将下面的数组key升序，值降序组成新的数组*/
echo "<br />";
$z=array('a'=>6,'d'=>1,'b'=>4,'e'=>2,'c'=>3,'f'=>5);
print_r($z);
/*我的解答(用时半小时)*/
echo"<br />";
$i=0;
foreach($z as $key=>$value){
	$key1[$i]=$key;
	$value1[$i]=$value;
	$i++;
	};
sort($key1);
rsort($value1);
unset($z);
for($i=0;$i<count($key1);$i++){
	$z[$key1[$i]]=$value1[$i];
	}
ksort($z);
print_r($z);

/*二维数组的排序*/
echo "<br />";
$m=array(array('Code'=>'TIR','Description'=>'Tires','Price'=>100),
				 array('Code'=>'OIL','Description'=>'Oil','Price'=>10),
				 array('Code'=>'SPK','Description'=>'Spark Plugs','Price'=>4)
			);
			
function compare($x,$y){
	//$a=$x['Price']-$y['Price'];
	//if($a==0){return 0;}else if($a<0){return 1;}else{return -1;}
	return($x['Price']-$y['Price']);
}
usort($m,'compare');			
print_r($m);
/*程序清单3-1bobs_front_page使用php为bob的汽车商店制作一个随机访问汽车配件的商店首页*/
echo '<a href="bobs_front_page.php">点击此处进入我写的页面</a>';

/**3.8.2使用array_reverse()函数*/
/*创建数组array(1,2,3,4,5,6,7,8,9,10)倒过来的几种方法*/
$a=range(10,1);
print_r($a);
$b=array_reverse(range(1,10));
print_r($b);
/*array_pash*/
$c=array();
$i=10;
while($i>0){
	array_push($c,"$i");
	$i--;
	}
print_r($c);
echo array_pop($c);
echo array_pop($c);
echo array_pop($c);
echo array_pop($c);
echo array_pop($c);
echo array_pop($c);
echo array_pop($c);
echo array_pop($c);
echo array_pop($c);
echo array_pop($c);
echo array_pop($c);
echo array_pop($c);
/*3.9从文件载入数组结果保存在数组中 每行为一个元素*/
$d=file($_SERVER['DOCUMENT_ROOT']."/test/order.txt");
foreach($d as $key=>$value){
	echo $key."  ".$value."<br />";
	}
reset($d);

/*将得到的元素用explode分割开*/
echo '<a href="viewroders2.php">点击此处进入我写的页面</a>';
/*在数组中浏览each(),current(),reset(),end(),next(),pos(),prev()*/
/*每个数组都有一个内部指针指向数组中的当前元素，当使用函数each的时候就间接的使用了
这个指针，但是也可以直接或间接的操纵这个指针来进行运算。


如果创建一个新的数组这个数组就会被初始化，并且指向数组的第一个元素。*/
echo "<br />";
$array_name=range(1,10,1);
print_r($array_name);

echo current($array_name);//将返回第一个元素
echo next($array_name);//将指针前移(向下一个元素移动)，然户在返回新的当前元素
echo next($array_name);//将指针前移(向下一个元素移动)，然户在返回新的当前元素
print_r(each($array_name));//在指针前移(向下一个元素移动)之前返回当前元素
print_r(each($array_name));//在指针前移(向下一个元素移动)之前返回当前元素
reset($array_name);//将函数指向第一个元素
end($array_name);//将函数指针指向末尾

/*反向遍历数组*/
echo"<br />";
$valuee=end($array_name);//end函数应该是返回了一个最后的元素
while($valuee){
	echo $valuee."&nbsp;";
	$valuee=prev($array_name);
	}

//还有一个函数pos();没有看到什么意思今后学习


/*3.10.2对数组的每一个函数应用任何函数：array_walk()*/

/*
array_walk();函数类似于usort()*/
function myprint(&$value){
	$value+=5;
	echo $value." ";
	}
array_walk($array_name,'myprint');
array_walk($array_name,'myprint');
echo "<br />";
function mymultiply(&$value,$key,$factory){
	$value*=$factory;
	};
array_walk($array_name,'mymultiply',3);
array_walk($array_name,'myprint');
//★★经过测试，array_walk()函数在使用的时候地址符不能用，地址符应该用在建立函数处

/*统计数组*/
$c=array(4,5,1,2,3,12,1,2,1,3,3,5);
echo "<br />".count($c);
echo "<br />".sizeof($c)."<br />";
print_r(array_count_values($c));

/*找出数组中最多的元素和最少的元素是什么并打印出来*/
$d=array(1,2,3,3,2,1,1,2,3,4,5,6,7,7,8,8,7,9,10,11,1,1,1,2,2,2,3,2,3,2,1,2,2,5,1,1,5,51,1,1,1,9,9,9,9,99,9,9,9,9,9,99,9,9,9,9,9,9,99,9,9,9,9,9,9,9,99,9,9,9,9);
$dd=array_count_values($d);//返回包含频数的关联数组并放入$dd
arsort($dd);//按照频数（即value）对dd进行反向排序
$ddd=array_keys($dd);//生成$dd的key的数组
echo "<br />好看的皮囊千篇一律,有趣的灵魂万里挑一。这个数组中最多的是".$ddd[0]."他的数量为".current($dd)."个。";


/*将数组转化为标量变量：extract()*/
$ee=array('a'=>55,'b'=>56,'c'=>57,'d'=>58,'e'=>59,'f'=>60,'g'=>61);
//print_r($ee);
extract($ee);
$a=99;
echo "$a $b $c";

//运用更多的参数的标量变量
extract($ee,EXTR_PREFIX_ALL,'lu');
$a=99;
echo "冲突发生 $lu_a $lu_b $lu_c";




?>