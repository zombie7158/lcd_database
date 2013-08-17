<?php include('check.php');?>

<html>
<head>
<title>Member Edit</title>
<h2 align="center">更新密碼</h2>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<div align="center"><?php include('bar.php'); ?></div><p>
<body>
<?php
$link_ID = mysql_connect ('localhost','root','student');
mysql_select_db('lcd_db');
mysql_query('SET CHARACTER SET UTF8;');
mysql_query("UPDATE member SET memberPW = '" . $_POST['memberPW']. "'WHERE memberID = '" . $_POST['memberID']. "';", $link_ID);
mysql_close($link_ID);
?>

<div align="center">密碼更新成功</div><p>

<?php require('info.php');?>
</body>
</html>