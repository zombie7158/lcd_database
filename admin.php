<?php include('check.php');?>

<html>
<head>
<title>新增Member</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
<h2>新增Member</h2>
<?php include('bar.php'); ?><p>
<?php 
$link_ID = mysql_connect ('localhost','root','student');
mysql_select_db('lcd_db');
mysql_query('SET CHARACTER SET UTF8;');
$result = mysql_query("SELECT * FROM member WHERE memberID = '" . $_COOKIE['memberID']. "';", $link_ID);
$record = mysql_fetch_array($result);
mysql_close($link_ID);
if ($record['admin']==1)
{

?>
<font color="red">*</font> 表示必填欄位<br><br>

<form method="POST" action="admin_exe.php">
<font color="red">*</font>
姓名：<input type="text" name="memberName"><br>
<font color="red">*</font>
工號：<input type="text" name="memberID"><br>
<font color="red">*</font>
密碼：<input type="text" name="memberPW"><br>
<font color="red">*</font>
信箱：<input type="text" name="memberEmail" size="20"><br>

是否為管理者：
<input type="radio" name="admin" value="1">Yes
<input type="radio" name="admin" value="">No <br>
<input type="submit" value="送出">
</form>
</div>

<?php
}
else
{
	echo '管理者才能進入';
	exit;
}

?>


<?php require('info.php');?>

</body>
</html>