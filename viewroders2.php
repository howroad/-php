<html>
<head>
<h1>Bob's Auto Parts</h1>
</head>
<?
$order=file($_SERVER['DOCUMENT_ROOT']."/test/order.txt");
if(count($order)==0){
	echo '<h2>There is no order.Please try again later.<h2>';
	exit;
	}
?>
<table align= "left" border="1">
	<tr bgcolor="#CCCCFF">
		<td>Order Date</td>
		<td>Tires</td>
		<td>Oil</td>
		<td>Spark Plugs</td>
		<td>Total</td>
		<td>Address</td>
    </tr>
<?
	//echo count($order);//此处测试是否行数正确
	for($i=0;$i<count($order);$i++){
	$line=explode("\t",$order[$i]);
	$line[1]=intval($line[1]);
	$line[2]=intval($line[2]);
	$line[3]=intval($line[3]);
	echo "<tr><td>".$line[0]."</td><td>".$line[1]."</td><td>".$line[2]."</td><td>".$line[3]."</td><td>".$line[4]."</td><td>".$line[5]."</td></tr>";
		}
?>
</table>


</html>