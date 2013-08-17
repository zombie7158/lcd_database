<?php
$check = FALSE;

if ( isset($_COOKIE['memberID']) && isset($_COOKIE['memberPW']) )
{
	$link_ID = mysql_connect('localhost', 'root', 'student');
	mysql_select_db('lcd_db');
	$check = mysql_num_rows( mysql_query("SELECT * FROM member WHERE memberID = '". $_COOKIE['memberID'] ."' AND memberPW = '". $_COOKIE['memberPW'] ."' ;", $link_ID) );
}

if ($check == FALSE)
{
	header('Location: index.php');
}
?>