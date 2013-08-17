<?php include('check.php');?>
<html>
<head>
<title>LCD Database Update</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h2 align="center">LCD Database 資料更新</h2>
<div align="center">
<div align="center">
<?php include ('bar.php');?> <p>
	<form method="POST" action="update_review.php">
	<table width="50%" bgcolor="#000000">
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Compal PN:
			</td>
			<td>
				<input type="text" name="p_cpn" size="10"> 輸入要更新的仁寶(R1)料號 ex AC600012345 			
			</td>
		</tr>
		<!--
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Vendor PN:
			</td>
			<td>
				<input type="text" name="mdl_mn" size="10"> 或輸入要更新的廠商料號
			</td>
		</tr>
		--!>
		<!-- ------------------Submit-------------------- -->
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="3">
				<input type="submit" value="送出查詢">
			</td>
		</tr>
	</table>

<?php require('info.php');?>
</body>
</html>