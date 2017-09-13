<?

	echo "<h1>Bob's Auto Parts</h1><br />"; 
 	echo"<h2>Order Results</h2><br />"; 
	echo"<h3>Order processed at ".date('H:i,jS F Y')."</h3><br />"; 
	$date=date('H:i,jS F Y');
	$totalqty=0;
	$tireqty=$_POST['tireqty'];
	$oilqty=$_POST['oilqty'];
	$sparkqty=$_POST['sparkqty'];
	$find=$_POST['find'];
	$address=$_POST['address'];
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
	//echo $find;
	switch($find){
		case "a":
		echo "<p>regular customer.</p>";
		break;
		case "b" :
		echo "<p>Customer referred by TV advert.</p>";
		break;
		case "c" :
		echo "<p>Customer referred by Phone directory.</p>";
		break;
		case "d" :
		echo "<p>Customer referred by word of mounth.</p>";
		break;
		default:
		echo "<p>We do not know how this customer find us.</p>";
		break;
		}
	//add address
		echo "Address to ship to is ".$address."<br />";
		
	/*2.5.2准备写入数据*/
	$outputstring=$date."\t".$tireqty." tires\t".$oilqty." oil\t".$sparkqty." spark plugs\t$".$totalamount."\t".$address."\r\n";
	$DOCUMENT_URL=$_SERVER['DOCUMENT_ROOT']."test/order.txt";
	//echo $outputstring;
	/*读取文件的方式1*/
	$fp=fopen("$DOCUMENT_URL","ab");
	flock($fp,LOCK_EX);
	$fw=fwrite($fp,$outputstring);
	flock($fp,LOCK_UN);
	fclose($fp);
	/*按行读取*/
	//$fp=fopen("$DOCUMENT_URL","rb");
	//while(!feof($fp)){
	//	echo fgetss($fp);
	//	}
	//fclose($fp);
	
	
	/*读取文件的方式2全部读取*/
	//readfile($DOCUMENT_URL);
	
	/*把结果保存在数组中$filearray*/
	//$filearray=file($DOCUMENT_URL);
	//print_r($filearray);
	
	/*2.7.5读取一个字符fgetc()*/
	$fp=fopen($DOCUMENT_URL,"rb");
	flock($fp,LOCK_SH);
	while(!feof($fp)){
		$char=fgetc($fp);
		if(!feof($fp)){
				//echo ($char== "\n" ? "<br />" : $char);
				//echo nl2br($char);
			}
		}
	flock($fp,LOCK_UN);	
	fclose($fp);
	/*2.7.6读取任意长度*/
	//echo fread($fp,5);


	/*判断文件是否存在*/
	if(file_exists("$DOCUMENT_URL")){echo "存在";};
	echo(!file_exists("$DOCUMENT_URL") ? "不存在" :"存在的");//使用三元操作符判断

	echo filesize("$DOCUMENT_URL")."【输出文件长度】<br />";
	
	/*删除一个文件*/
	//unlink($_SERVER['DOCUMENT_ROOT']."test/order2.txt");
	
	/*2.8.4在文件中定位*/
	/*rewend（） 将指针定位到起始的位置*/
	$fp=fopen("$DOCUMENT_URL","r+b");
	flock($fp,LOCK_EX);
	echo fread($fp,100)."【打印前100个字符】<br />";
	echo ftell($fp)."【输出此时的指针位置】<br />";
	echo fread($fp,100)."【再打印100个字符，看指针有没有回去】<br />";
	echo ftell($fp)."【输出此时指针位置应为200】<br />";
	
	rewind($fp);//将指针定位到起始位置
	echo ftell($fp)."【将指针归0后打印指针的位置应为0】<br />";
	fseek($fp,55,SEEK_SET);//将指针位置移动到第二个字节之后【注意：第三个参数为SEEK_SET/SEEK_CUR/SEEK_END】
	echo ftell($fp)."【将指针移动到第二个字符后应输出55】<br />";
	fseek($fp,60,SEEK_CUR);
	echo ftell($fp)."【此时在刚才的基础上移动60为115】<br />";
	echo filesize("$DOCUMENT_URL")."【输出文件的长度】<br />";
	//fseek($fp,11,SEEK_END);//在文件末尾在移动11个字节
	//fwrite($fp,"9");
	echo ftell($fp)."<br />";
	flock($fp,LOCK_UN);
	fclose($fp);//保存使数据同步【实际上没有用】
	echo filesize("$DOCUMENT_URL")."【此处应该是两个相同的数值为文件长度+11】【注意：实际上获得文章的长度要在本页面刷新后才能获取到正确的】<br />";


	/*2.9加锁，我将在本文本中所有的地方加锁*/
	/* flock($fp,LOCK_SH)……读锁定
		flock($fp,LOCK_EX)……写锁定
		flock($fp,LOCK_UN)……释放锁定
		flock($fp,LOCK_NB)……防止在请求发生时产生阻塞【此处不知道】
		if(!flock($fp, LOCK_EX | LOCK_NB)) {
		echo '暂时锁不到啊锁不到！';
		exit(-1);
		}
	*/













?>

