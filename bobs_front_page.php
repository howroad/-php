<?
$img=array('001.png','003.png','004.png','005.png','006.png','007.png','008.png','009.png');
shuffle($img);
?>
<html>
<head><center><h1>Bob's Auto Parts</h1></center></head>
<body>
	<table width="100%" align="center">
    	<tr>
            <?
            for($i=0;$i<3;$i++){
				echo '<td><img src="img/'.$img[$i].'" /></td>';
				}
			?>
        </tr>
    </table>
</body>
</html>