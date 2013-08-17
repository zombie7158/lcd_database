<?php include('check.php');?>

<html>
<head>
<title>我的帳號</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
<h2>更新密碼</h2>
<?php include('bar.php'); ?><p>
<?php 
$link_ID = mysql_connect ('localhost','root','student');
mysql_select_db('lcd_db');
mysql_query('SET CHARACTER SET UTF8;');
$result = mysql_query("SELECT * FROM member WHERE memberID = '" . $_COOKIE['memberID']. "';", $link_ID);
$record = mysql_fetch_array($result);
mysql_close($link_ID);

?>

<form method="POST" action="member_edit_exe.php">

姓名：<?php echo $record['memberName']?> <br>
工號：<?php echo $record['memberID']?> <br>
<input type="hidden" name="memberID" size="10" value="<?php echo $record['memberID']?>">
原密碼：<?php echo $record['memberPW']?><br>
新密碼：<input type="text" name="memberPW" size="10"><br>
<input type="submit" value="送出">
</form>
</div>



<?php require('info.php');?>

</body>
</html>