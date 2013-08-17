<html>

<div align="center">

<?php

// Check 日期格式
if ($_POST['p_mp_m'] = '02')
{
	if ($_POST['p_mp_d'] >= '30')
	{
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
	echo '</head>';
	echo '<p>'.'日期錯誤';
	echo '<p>'.'<a href="javascript:history.go(-1);">回上頁</a>';
	exit;
	}
}


?>
</div>