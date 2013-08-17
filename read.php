<html>
<head>
<title>LCD Database Read</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h1 align="center">LCD Database</h1>
<?php
$link_ID = mysql_connect ('localhost','root','student');
mysql_select_db('lcd_db');
mysql_query('SET CHARACTER SET UTF8;');
//$result = mysql_query("SELECT * FROM spec WHERE p_customer ='" . $_POST['p_customer'] . "' AND p_name='" . $_POST['p_name']. "';", $link_ID);
?>
	<table align="center" border="1">
		<!- -----------Customer------------- ->
		<tr align="center">
		<td>Customer</td>
		
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['p_customer']?></td>
		<?php } ?>
		</tr>
		
		<!- -----------Project Name------------- ->
		<tr align="center">
		<td>Project Name</td>
		<?php //$result = mysql_query("SELECT p_name FROM spec;", $link_ID); ?>
		
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['p_name']?></td>
		<?php } ?>
		</tr>
		
		<!- -----------Project Code------------- ->
		<tr align="center">
		<td>Project Code</td>
		<?php //$result = mysql_query("SELECT p_code FROM spec;", $link_ID); ?>
		
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['p_code']?></td>
		<?php } ?>
		</tr>
	</table>
	
	
	
<?php mysql_close($link_ID); ?>
</body>
</html>



