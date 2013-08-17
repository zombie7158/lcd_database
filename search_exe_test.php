<?php include('check.php');?>
<html>
<head>
<title>LCD Database Read</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h1 align="center">LCD Database Search</h1>
<?php

$me_adz1 = $_POST['me_adz1'];
$me_adz2 = $_POST['me_adz2'];

$link_ID = mysql_connect ('localhost','root','student');
mysql_select_db('lcd_db');
mysql_query('SET CHARACTER SET UTF8;');

// 避免尺吋沒填而無法搜尋
if (!$_POST['me_adz1'] AND $_POST['me_adz2']) //若adz1未輸入，adz1填入1
{
	$me_adz1 =0;
	$me_adz2 = $_POST['me_adz2'];
}
elseif ($_POST['me_adz1'] AND !$_POST['me_adz2']) //若adz2未輸入，adz2填入99
{
	$me_adz1 = $_POST['me_adz1'];
	$me_adz2 =99;
}
elseif (!$_POST['me_adz1'] AND !$_POST['me_adz2'])
{
	
	$me_adz1 =0;
	$me_adz2 =99;
}
else
{
	$me_adz1 = $_POST['me_adz1'];
	$me_adz2 = $_POST['me_adz2'];
}

$p_customer =$_POST['p_customer'];
$p_name =$_POST['p_name'];
$p_code =$_POST['p_code'];
$p_type =$_POST['p_type'];
$p_owner =$_POST['p_owner'];
$p_mp_y =$_POST['p_mp_y'];
$p_mp_m =$_POST['p_mp_m'];
$p_mp_d =$_POST['p_mp_d'];

$p_cpn =$_POST['p_cpn'];
$mdl_mn =$_POST['mdl_mn'];
$mdl_vendor =$_POST['mdl_vendor'];
$fsrd_y =$_POST['fsrd_y'];
$fsrd_m =$_POST['fsrd_m'];
$fsrd_d =$_POST['fsrd_d'];
$mdl_rp =$_POST['mdl_rp'];
$mdl_dg =$_POST['mdl_dg'];

$me_adz =$_POST['me_adz'];
$me_ar =$_POST['me_ar'];
$me_resolution =$_POST['me_resolution'];
$me_ppi =$_POST['me_ppi'];
$me_pph =$_POST['me_pph'];
$me_ppv =$_POST['me_ppv'];
$me_do =$_POST['me_do'];
$me_ts =$_POST['me_ts'];
$me_odx =$_POST['me_odx'];
$me_ody =$_POST['me_ody'];
$me_odwtsx =$_POST['me_odwtsx'];
$me_odwtsy =$_POST['me_odwtsy'];
$me_twopcb =$_POST['me_twopcb'];
$me_twpcb =$_POST['me_twpcb'];
$me_gt =$_POST['me_gt'];
$me_st =$_POST['me_st'];
$me_weight =$_POST['me_weight'];

$op_blt =$_POST['op_blt'];
$op_lum =$_POST['op_lum'];
$op_cr =$_POST['op_cr'];
$op_val =$_POST['op_val'];
$op_var =$_POST['op_var'];
$op_vau =$_POST['op_vau'];
$op_vad =$_POST['op_vad'];
$op_vat =$_POST['op_vat'];
$op_lum9 =$_POST['op_lum9'];
$op_rt =$_POST['op_rt'];
$op_ccwx =$_POST['op_ccwx'];
$op_ccwy =$_POST['op_ccwy'];
$op_ccrx =$_POST['op_ccrx'];
$op_ccry =$_POST['op_ccry'];
$op_ccgx =$_POST['op_ccgx'];
$op_ccgy =$_POST['op_ccgy'];
$op_ccbx =$_POST['op_ccbx'];
$op_ccby =$_POST['op_ccby'];
$op_cc =$_POST['op_cc'];
$op_cd =$_POST['op_cd'];
$me_weight =$_POST['op_cg'];

$ee_interface =$_POST['ee_interface'];
$ee_psiv =$_POST['ee_psiv'];
$ee_pc =$_POST['ee_pc'];
$ee_blpc60 =$_POST['ee_blpc60'];
$ee_blpc90 =$_POST['ee_blpc90'];
$ee_blpc150 =$_POST['ee_blpc150'];
$ee_blpcmax =$_POST['ee_blpcmax'];
$ee_lpc =$_POST['ee_lpc'];
$ee_tpc =$_POST['ee_tpc'];
$ee_blcs =$_POST['ee_blcs'];
$ee_blcp =$_POST['ee_blcp'];
$ee_lediv =$_POST['ee_lediv'];
$ee_leddic =$_POST['ee_leddic'];
$ee_tcv =$_POST['ee_tcv'];
$ee_tcmn =$_POST['ee_tcmn'];

$sf_av =$_POST['sf_av'];
$sf_cabc =$_POST['sf_cabc'];
$sf_vi =$_POST['sf_vi'];
$sf_goa =$_POST['sf_goa'];


$query ="SELECT * FROM spec where (
p_customer like'%$p_customer%' and
p_name like'%$p_name%'and
p_code like'%$p_code%' and
p_type like'%$p_type%' and
p_owner like'%$p_owner%' and
p_mp_y like'%$p_mp_y%' and
p_mp_m like'%$p_mp_m%' and
p_mp_d like'%$p_mp_d%' and

p_cpn like'%$p_cpn%' and
mdl_mn like'%$mdl_mn%' and
mdl_vendor like'%$mdl_vendor%' and
fsrd_y like'%$fsrd_y%' and
fsrd_m like'%$fsrd_m%' and
fsrd_d like'%$fsrd_d%' and
mdl_rp like'%$mdl_rp%' and
mdl_dg like'%$mdl_dg%' and

me_adz like'%$me_adz%' and
me_ar like'%$me_ar%' and
me_resolution like'%$me_resolution%' and
me_ppi like'%$me_ppi%' and
me_pph like'%$me_pph%' and
me_ppv like'%$me_ppv%' and
me_do like'%$me_do%' and
me_ts like'%$me_ts%' and
me_odx like'%$me_odx%' and
me_ody like'%$me_ody%' and
me_odwtsx like'%$me_odwtsx%' and
me_odwtsy like'%$me_odwtsy%' and
me_twopcb like'%$me_twopcb%' and
me_twpcb like'%$me_twpcb%' and
me_gt like'%$me_gt%' and
me_st like'%$me_st%' and
me_weight like'%$me_weight%' and

op_blt like'%$op_blt%' and
op_lum like'%$op_lum%' and
op_cr like'%$op_cr%' and
op_val like'%$op_val%' and
op_var like'%$op_var%' and
op_vau like'%$op_vau%' and
op_vad like'%$op_vad%' and
op_vat like'%$op_vat%' and
op_lum9 like'%$op_lum9%' and
op_rt like'%$op_rt%' and
op_ccwx like'%$op_ccwx%' and
op_ccwy like'%$op_ccwy%' and
op_ccrx like'%$op_ccrx%' and
op_ccry like'%$op_ccry%' and
op_ccgx like'%$op_ccgx%' and
op_ccgy like'%$op_ccgy%' and
op_ccbx like'%$op_ccbx%' and
op_ccby like'%$op_ccby%' and
op_cc like'%$op_cc%' and
op_cd like'%$op_cd%' and
op_cg like'%$op_cg%' and

ee_interface like'%$ee_interface%' and
ee_psiv like'%$ee_psiv%' and
ee_pc like'%$ee_pc%' and
ee_blpc60 like'%$ee_blpc60%' and
ee_blpc90 like'%$ee_blpc90%' and
ee_blpc150 like'%$ee_blpc150%' and
ee_blpcmax like'%$ee_blpcmax%' and
ee_lpc like'%$ee_lpc%' and
ee_tpc like'%$ee_tpc%' and
ee_blcs like'%$ee_blcs%' and
ee_blcp like'%$ee_blcp%' and
ee_lediv like'%$ee_lediv%' and
ee_leddic like'%$ee_leddic%' and
ee_tcv like'%$ee_tcv%' and
ee_tcmn like'%$ee_tcmn%' and

sf_av like'%$sf_av%' and
sf_cabc like'%$sf_cabc%' and
sf_vi like'%$sf_vi%' and
sf_goa like'%$sf_goa%' and

me_adz BETWEEN $me_adz1 and $me_adz2
)"; 


?>
<div align="center">
	<?php include('bar.php'); ?><p>
	<?php 
	$result = mysql_query($query, $link_ID);
	$count = mysql_num_rows($result); //找到幾筆
	echo '找到'. '<font color="blue">' . $count. '</font>'.'筆資料';
	
	?>
	<?php
	if ($count == 0)
	{
		echo '請重新查詢';
		exit;
	}
	else
	{
	?>
	
	<table align="center" border="1">
		<!- -----------Project------------- ->
		
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="<?php echo $count+1;?>">
				<font size="+2">Project</font>
			</td>
		</tr>
		
		<tr align="center">
		<td >Customer</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['p_customer']?></td>
		<?php } ?>
		</tr>
		
		<tr align="center">
		<td>Project Name</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['p_name']?></td>
		<?php } ?>
		</tr>
		
		<tr align="center">
		<td>Project Code</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['p_code']?></td>
		<?php } ?>
		</tr>
		
		<tr align="center">
		<td>Project Type</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['p_type']?></td>
		<?php } ?>
		</tr>
		
		<tr align="center">
		<td>Project Onwer</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['p_owner']?></td>
		<?php } ?>
		</tr>
		
		<tr align="center">
		<td>MP Schedule</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['p_mp_y'] . '年'.$record['p_mp_m'] .'月'. $record['p_mp_d'] . '日'?></td>
		<?php } ?>
		</tr>
		
		
		
		<!- -----------Model------------- ->
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="<?php echo $count+1;?>">
				<font size="+2">Model</font>
			</td>
		</tr>
		<tr align="center">
		<td>Compal PN:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['p_cpn']?></td>
		<?php } ?>
		</tr>
		
		<tr align="center">
		<td>Vendor PN:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['mdl_mn']?></td>
		<?php } ?>
		</tr>
		
		<tr align="center">
		<td>Vendor:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['mdl_vendor']?></td>
		<?php } ?>
		</tr>
		
		
		<tr align="center">
		<td>First sample ready date:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['fsrd_y'] . '年'.$record['fsrd_m'] .'月'. $record['fsrd_d'] . '日'?></td>
		<?php } ?>
		</tr>
		
		
		<tr align="center">
		<td>Reference Price:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['mdl_rp']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Design Guide in Spec:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['mdl_dg']?></td>
		<?php } ?>
		</tr>
		
		<!-- ------------------Mechanical-------------------- -->
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="<?php echo $count+1;?>">
				<font size="+2">Mechanical</font>
			</td>
		</tr>
		<tr align="center">
		<td>Active Diagonal Size:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['me_adz']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Aspect Ratio:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['me_ar']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Resolution:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['me_resolution']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Pixel per Inch:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['me_ppi']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Pixel Pitch (H x V):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['me_pph'] . 'x' . $record['me_ppv']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Display Orientation:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['me_do']?></td>
		<?php } ?>
		</tr>
		
		<tr align="center">
		<td>W/TS:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['me_ts']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Outline Dimension MAX (mm):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo 'LCD:' . $record['me_odx'] . 'x' . $record['me_ody']?><br>
			<?php echo 'LCD W/TS:' . $record['me_odwtsx'] . 'x' . $record['me_odwtsy']?></td>
		<?php } ?>
		</tr>
		
		
		<tr align="center">
		<td>Thickness MAX (mm):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo 'w/o PCB :'.$record['me_twopcb']?><br>
			<?php echo 'w/ PCB :'.$record['me_twpcb']?></td>
		<?php } ?>
		</tr>
		
		<tr align="center">
		<td>Glass Thickness (mm):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['me_gt']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Surface Treatment (AG/G):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['me_st']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Weight (g):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['me_weight']?></td>
		<?php } ?>
		</tr>
		
		<!-- ------------------Optical-------------------- -->
		<tr align="center">
		<td>Backlight Light Type:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['op_blt']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Luminance (nits):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['op_lum']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Contrast Ratio:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['op_cr']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>View Angle (L/R/U/D):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td>
			<?php echo 'Left:'. $record['op_val']?>
			<?php echo 'Right:'. $record['op_var']?><br>
			<?php echo 'Up:'. $record['op_vau']?>
			<?php echo 'Down:'. $record['op_vad']?>
			</td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>View Angle type (EWV film/IPS/FFS...):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['op_vat']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Luminance Uniformity (9 points):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['op_lum9']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Response Time (Rising + Falling) (ms):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['op_rt']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Color Coordinates:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td>
			<?php echo 'White: '. $record['op_ccw']?>
			<?php echo 'Red: '. $record['op_ccr']?><br>
			<?php echo 'Green: '. $record['op_ccg']?>
			<?php echo 'Blue: '. $record['op_ccb']?>
			</td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Coloer Coordinates (+/-):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo '&plusmn'.$record['op_cc']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Color Depth (6/8...)bit:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['op_cd']. 'bit'?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Color Gamut (NTSC %):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['op_cg']. '%'?></td>
		<?php } ?>
		</tr>
		
		<!-- ------------------Circuit-------------------- -->
		
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="<?php echo $count+1;?>">
				<font size="+2">Circuit</font>
			</td>
		</tr>
		
		<tr align="center">
		<td>Interface (TTL/LVDS/MIPI/eDP1.2/eDP1.3):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['ee_interface']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Power supply input voltage (Logic):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['ee_psiv']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Pin Count:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['ee_pc']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td> Backlight Power Consumption (W):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td>
			<?php echo '60 nits:'.$record['ee_blpc60']?>
			<?php echo '90 nits:'.$record['ee_blpc90']?><br>
			<?php echo '150 nits:'.$record['ee_blpc150']?>
			<?php echo 'Max nits:'.$record['ee_blpcmax']?>
			</td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Logic Power Consumpion (W) (Max):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['ee_lpc']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Total Power Consumption (W) (Max):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['ee_tpc']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Backlight Light Circuit (#S#P):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td>
			<?php echo 'S:'.$record['ee_blcs']?><br>
			<?php echo 'P:'.$record['ee_blcp']?>			
			</td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>LED input voltage (V):</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['ee_lediv']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>W/ LED Driver IC:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['ee_leddic']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>T-con:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td>
			<?php echo 'Vendor:'.$record['ee_tcv']?><br>
			<?php echo 'Model Name:'.$record['ee_tcmn']?>
			</td>
		<?php } ?>
		</tr>
		
		<!-- ------------------Special Feature-------------------- -->
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="<?php echo $count+1;?>">
				<font size="+2">Special Feature</font>
			</td>
		</tr>
		
		<tr align="center">
		<td>W/ Analog voltage support:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['sf_av']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>CABC:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['sf_cabc']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Vcom Input:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['sf_vi']?></td>
		<?php } ?>
		</tr>
		<tr align="center">
		<td>Gate on Array:</td>
		<?php $result = mysql_query($query , $link_ID);	//送出要求 ?>
		<?php while($record = mysql_fetch_array($result)){ ?>
			<td><?php echo $record['sf_goa']?></td>
		<?php } ?>
		</tr>
		
		
	</table>
	<?php
	}
	?>
	
</div>
<?php mysql_close($link_ID); ?>
<?php require('info.php');?>
</body>
</html>

