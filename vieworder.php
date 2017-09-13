<html>
<head>
	<title>Bob's Auto Parts</title>
</head>

<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?
$DOCUMENT_URL=$_SERVER['DOCUMENT_ROOT']."test/order.txt";

$fp=fopen($DOCUMENT_URL,"rb");
while(!feof($fp)){
	echo fgets($fp)."<br />"; 
		}
fclose($fp);
?>


</body>
</html>
