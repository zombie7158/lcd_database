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
// 確定必填欄位是否有填
if (!$_POST['memberID'] || !$_POST['memberPW'] || !$_POST['memberName'] || !$_POST['memberEmail'])
{
  //echo '不行喔，必填欄位都得填喔，麻煩你<a href="register.php">確認一下哪些沒填吧</a>。';
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
	echo '</head>';
	echo '必填欄位都得填喔，<a href="javascript: history.back()">回上頁確認一下哪些沒填吧</a>。';
	exit;
}

$link_ID = mysql_connect ('localhost','root','student');
mysql_select_db('lcd_db');
mysql_query('SET CHARACTER SET UTF8;');

// 檢查一下是否已經有這個使用者了
$checkMember = mysql_num_rows( mysql_query("SELECT * FROM member WHERE memberID = '". $_POST['memberID'] ."' ;", $link_ID) );
if ($checkMember)
{
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
	echo $_POST['memberID'] .' 已存在了喔'.'<a href="javascript: history.go(-1)">回上頁</a>!!';
	echo '</head>';
	exit;
}
// 更新內容
$memberID = strtoupper($_POST['memberID']); //工號英文字母大寫

mysql_query("INSERT INTO member (memberName, memberID, memberPW, memberEmail, admin) 
VALUES (
'". $_POST['memberName'] ."',
'". $_POST['memberID'] ."',
'". $_POST['memberPW'] ."',
'". $_POST['memberEmail'] ."',
'". $_POST['admin'] ."'
); ", $link_ID);


//關閉資料庫連接
mysql_close($link_ID);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<div align="center">資料庫寫入成功</div><p>
<div align="center"><a href="admin.php">回上頁</a></div><p>
<?php require('info.php');?>
</div>
<?php
// 直接登入
//setCookie('memberID', $_POST['memberID']);
//setCookie('memberPW', $_POST['memberPW']);
//header('Location: index.php');

?>
