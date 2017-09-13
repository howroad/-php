<html>
<head></head>
<body>
<table>
    <tr>
        <td>Item</td>
        <td>Quality</td>
    <tr>
    <form method="post" action="post.php" name="form" 
    <tr>
        <td>Tires</td>
        <td><input name="tireqty" /></td>
    <tr>
    <tr>
        <td>Oil</td>
        <td><input name="oilqty" /></td>
    <tr>
    <tr>
        <td>Spark Plugs</td>
        <td><input name="sparkqty"></td>
    <tr>
    <tr>
        <td>How did you find Bob's?</td>
        <td>
            <select name="find">
            	<option value="a">I'm a regular customer</option>
                <option value="b">TV advertising</option>
                <option value="c">Phone directory</option>
                <option vluae="d">Word of mouth</option>
            </select>
        </td>
    <tr>
    <tr>
    	<td>Shipping Address
        </td>
        <td>
        <input name="address" />
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="submit" name="submit">
        </td>
    </tr>
    </form>
</table>
<table name="YFprice">
	<tr>
    	<td>Distance</td>
        <td>Cost</td>
	</tr>
    <?
	$distance=50;
    while($distance<=250){
		//if($distance==100){break;}
		//if($distance==100){exit;}
		echo"<tr><td>$distance</td><td>".($distance/10)."</td></tr>";
		
		$distance+=50;
		}
		//echo "1";
	?>
</table>
</body>
</html>