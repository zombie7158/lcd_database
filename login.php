<?php
if ($_POST['memberID'] && $_POST['memberPW'])
{
	$memberID = strtoupper($_POST['memberID']);
	$link_ID = mysql_connect('localhost', 'root', 'student');
	mysql_select_db('lcd_db');
	$checkmember =mysql_num_rows( mysql_query("SELECT * FROM member WHERE memberID = '". $_POST['memberID'] ."' AND memberPW = '". $_POST['memberPW'] ."' ;", $link_ID) );

	if ($checkmember)
	{
		setCookie('memberID', $memberID);
		setCookie('memberPW', $_POST['memberPW']);
		header('Location: keyin.php');
	}
	else
	{
		echo '<head>';
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
		echo '</head>';
		
		echo '登入失敗，工號或密碼錯誤<br>'. 'error code: GG88<br>';
		echo '<a href="index.php">'.'重新登入'.'</a>';
		
	}
}
else
{
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
	echo '</head>';
	echo '帳號和密碼均需填寫。';
}

?>
