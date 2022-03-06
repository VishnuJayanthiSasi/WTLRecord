<?php
extract($_POST);
//do addition and store the result in $res
if(isset($add))
{
$res=$fnum+$snum;
}	
 
?>
<html>
<head>
	<title>Display the result in 3rd text box</title>
</head>
<body>
<form method="post">
 <table align="center" border="1">
	
	<tr>
		<th>Enter first number</th>
		<td><input type="text" name="fnum" value="<?php echo @$fnum;?>"/></td>
	</tr>	
	<tr>
		<th>Enter second number</th>
		<td><input type="text" name="snum" value="<?php echo @$snum;?>"/></td>
	</tr>
	<tr>
		<td align="center" colspan="2">
		<input type="submit" value="+" name="add"/>
		
	</tr>
    <Tr>
	<th>Your Result</th>
	<td><input type="text" readonly="readonly" value="<?php echo @$res;?>"/></td>
	</tr>
	</table>	
</form>
</body>
</html>