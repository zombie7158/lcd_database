<?php include('check.php');?>
<?php //include('check_keyin.php');?>
<html>
<head>
<title>LCD Database 資料輸入 Review</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div align="center">
<h2>LCD Database 資料輸入 Review</h2>
<?php include('bar.php'); ?><p>
</div>
<div align="center">
<?php
$link_ID = mysql_connect ('localhost','root','student');
mysql_select_db('lcd_db');
mysql_query('SET CHARACTER SET UTF8;');
// 搜尋spec資料表，是否有此仁寶料號
$search = mysql_query("SELECT * FROM spec WHERE (p_cpn = '" . $_POST['p_cpn']."' AND p_cpn_r3 ='" . $_POST['p_cpn_r3']. "');", $link_ID);
// 將搜尋結果以陣列方式存入
$result = mysql_fetch_array($search);
// include ("check.php");

if (!$_POST['p_cpn'])
{
	echo '仁寶料號(R1)為必填';
	exit;
}

if (!$result) // 若資料表無此仁寶料號，則寫入
{
?>


	
	<form method="POST" action="keyin_exe.php" name=calform>
	<table width="50%" bgcolor="#000000">

	<!-- --------------------Project------------------- -->
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="2">
				<font size="+2">Project</font>
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td width="45%" align="center">
			Customer: 
			</td>
			<td>
			
			
				<?php echo $_POST['p_customer']; ?>
				<input type="hidden" name="p_customer" value="<?php echo $_POST['p_customer']?>">
			
			</td>	
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Project Name:
			</td>
			<td>
				<?php echo $_POST['p_name']; ?>
				<input type="hidden" name="p_name" value="<?php echo $_POST['p_name']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Project code:
			</td>
			<td>
				<?php echo $_POST['p_code']; ?> 
				<input type="hidden" name="p_code" value="<?php echo $_POST['p_code']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td width="20%" align="center">
			Product Type: 
			</td>
			<td>
				<?php echo $_POST['p_type']; ?>
				<input type="hidden" name="p_type" value="<?php echo $_POST['p_type']?>">
			</td>	
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Owner ID(工號):
			</td>
			<td>
				<?php echo $_POST['p_owner']; ?>
				<input type="hidden" name="p_owner" value="<?php echo $_POST['p_owner']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				MP Schedule:
			</td>
			<td>
				<?php echo $_POST['p_mp_y']; ?>年
				<input type="hidden" name="p_mp_y" value="<?php echo $_POST['p_mp_y']?>">
				<?php echo $_POST['p_mp_m']; ?>月
				<input type="hidden" name="p_mp_m" value="<?php echo $_POST['p_mp_m']?>">
				<?php echo $_POST['p_mp_d']; ?>日
				<input type="hidden" name="p_mp_d" value="<?php echo $_POST['p_mp_d']?>">
			</td>
		</tr>

	<!-- ------------------Model-------------------- -->
	
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="3">
				<font size="+2">Model</font>
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Compal PN:
			</td>
			<td>
				R1: <?php echo $_POST['p_cpn']; ?> <br>
				R3: <?php echo $_POST['p_cpn_r3']; ?>
				<input type="hidden" name="p_cpn" value="<?php echo $_POST['p_cpn']?>">
				<input type="hidden" name="p_cpn_r3" value="<?php echo $_POST['p_cpn_r3']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Vendor PN:
			</td>
			<td>
				<?php echo $_POST['mdl_mn']; ?>
				<input type="hidden" name="mdl_mn" value="<?php echo $_POST['mdl_mn']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Vendor:
			</td>
			<td>
				<?php echo $_POST['mdl_vendor']; ?>
				<input type="hidden" name="mdl_vendor" value="<?php echo $_POST['mdl_vendor']?>">
			</td>
		</tr>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				First sample ready date:
			</td>
			<td>
				<?php echo $_POST['mdl_sr']; ?>
				<input type="hidden" name="mdl_sr" value="<?php echo $_POST['mdl_sr']?>">
				<?php echo $_POST['fsrd_y']; ?>年
				<input type="hidden" name="fsrd_y" value="<?php echo $_POST['fsrd_y']?>">
				<?php echo $_POST['fsrd_m']; ?>月
				<input type="hidden" name="fsrd_m" value="<?php echo $_POST['fsrd_m']?>">
				<?php echo $_POST['fsrd_d']; ?>日
				<input type="hidden" name="fsrd_d" value="<?php echo $_POST['fsrd_d']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Reference Price:
			</td>
			<td>
				<?php echo $_POST['mdl_rp']; ?>
				<input type="hidden" name="mdl_rp" value="<?php echo $_POST['mdl_rp']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Design Guide in Spec:
			</td>
			<td>
				<?php echo $_POST['mdl_dg']; ?>
				<input type="hidden" name="mdl_dg" value="<?php echo $_POST['mdl_dg']?>">
			</td>
		</tr>
		
		<!--
		<tr bgcolor="FFFFFF">
			<td align="center">
				Datasheet上傳:
			</td>
		
		</tr>
		--!>

	<!-- ------------------Mechanical-------------------- -->
	
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="3">
				<font size="+2">Mechanical</font>
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Active Diagonal Size:
			</td>
			<td>
				<?php echo $_POST['me_adz']; ?>
				<input type="hidden" name="me_adz" value="<?php echo $_POST['me_adz']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Resolution:
			</td>
			<td>
				<?php echo $_POST['me_resolution']; ?>
				<input type="hidden" name="me_resolution" value="<?php echo $_POST['me_resolution']?>">
			</td>
		</tr>
				
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Pixel per inch (ppi):
			</td>
			<td>
				<?php echo $_POST['me_ppi']; ?>
				<input type="hidden" name="me_ppi" value="<?php echo $_POST['me_ppi']?>">
			</td>
		</tr>		
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Active Area (mm):
			</td>
			<td>
				X=<?php echo $_POST['me_aa_x']; ?>mm <br>
				Y=<?php echo $_POST['me_aa_y']; ?>mm
				<input type="hidden" name="me_aa_x" value="<?php echo $_POST['me_aa_x']?>">
				<input type="hidden" name="me_aa_y" value="<?php echo $_POST['me_aa_y']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Aspect Ratio:
			</td>
			<td>
				<?php echo $_POST['me_ar']; ?>
				<input type="hidden" name="me_ar" value="<?php echo $_POST['me_ar']?>">
			</td>
		</tr>
		
		
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Pixel Pitch (H x V):
			</td>
			<td>
				<?php echo $_POST['me_pph'] . 'x' . $_POST['me_ppv']; ?>
				<input type="hidden" name="me_pph" value="<?php echo $_POST['me_pph']?>">
				<input type="hidden" name="me_ppv" value="<?php echo $_POST['me_ppv']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Display Orientation:
			</td>
			<td>
				<?php echo $_POST['me_do']; ?>
				<input type="hidden" name="me_do" value="<?php echo $_POST['me_do']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				With TS
			</td>
			<td>
				<?php echo $_POST['me_ts']; ?>
				<input type="hidden" name="me_ts" value="<?php echo $_POST['me_ts']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Outline Dimension Max (mm):
			</td>
			<td>
				LCD: <?php echo $_POST['me_odx'] . 'x' . $_POST['me_ody']; ?> <br>
				<input type="hidden" name="me_odx" value="<?php echo $_POST['me_odx']?>">
				<input type="hidden" name="me_ody" value="<?php echo $_POST['me_ody']?>">
				w/ TS: <?php echo $_POST['me_odwtsx'] . 'x' . $_POST['me_odwtsy']; ?>
				<input type="hidden" name="me_odwtsx" value="<?php echo $_POST['me_odwtsx']?>">
				<input type="hidden" name="me_odwtsy" value="<?php echo $_POST['me_odwtsy']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Thickness Max (mm):
			</td>
			<td>
				w/o PCB: <?php echo $_POST['me_twopcb']; ?> mm<br>
				<input type="hidden" name="me_twopcb" value="<?php echo $_POST['me_twopcb']?>">
				w/ PCB: <?php echo $_POST['me_twpcb']; ?> mm
				<input type="hidden" name="me_twpcb" value="<?php echo $_POST['me_twpcb']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Glass Thickness (mm):
			</td>
			<td>
				<?php echo $_POST['me_gt']; ?>
				<input type="hidden" name="me_gt" value="<?php echo $_POST['me_gt']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Surface Treatment (AG/G):
			</td>
			<td>
				<?php echo $_POST['me_st']; ?>
				<input type="hidden" name="me_st" value="<?php echo $_POST['me_st']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Weight (g):
			</td>
			<td>
				<?php echo $_POST['me_weight']; ?>g
				<input type="hidden" name="me_weight" value="<?php echo $_POST['me_weight']?>">
			</td>
		</tr>
		
	<!-- ------------------Optical-------------------- -->
	
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="3">
				<font size="+2">Optical</font>
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Backlight Type:
			</td>
			<td>
				<?php echo $_POST['op_blt']; ?>
				<input type="hidden" name="op_blt" value="<?php echo $_POST['op_blt']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Luminance (nits)(typ):
			</td>
			<td>
				<?php echo $_POST['op_lum']; ?>nits
				<input type="hidden" name="op_lum" value="<?php echo $_POST['op_lum']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Contrast Ratio:
			</td>
			<td>
				<?php echo $_POST['op_cr']; ?>
				<input type="hidden" name="op_cr" value="<?php echo $_POST['op_cr']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				View Angle (L/R/U/D):
			</td>
			<td>
				Left: <?php echo $_POST['op_val']; ?> 
				Right: <?php echo $_POST['op_var']; ?><br>
				Up: <?php echo $_POST['op_vau']; ?>
				Down: <?php echo $_POST['op_vad']; ?>
				<input type="hidden" name="op_val" value="<?php echo $_POST['op_val']?>">
				<input type="hidden" name="op_var" value="<?php echo $_POST['op_var']?>">
				<input type="hidden" name="op_vau" value="<?php echo $_POST['op_vau']?>">
				<input type="hidden" name="op_vad" value="<?php echo $_POST['op_vad']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				View Angle Type:
			</td>
			<td>
				<?php echo $_POST['op_vat']; ?>
				<input type="hidden" name="op_vat" value="<?php echo $_POST['op_vat']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Luminance Uniformity (9 points):
			</td>
			<td>
				<?php echo $_POST['op_lum9']; ?>
				<input type="hidden" name="op_lum9" value="<?php echo $_POST['op_lum9']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Response Time (Rising + Falling) (ms):
			</td>
			<td>
				<?php echo $_POST['op_rt']; ?>ms
				<input type="hidden" name="op_rt" value="<?php echo $_POST['op_rt']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Color Coordinates:
			</td>
			<td>
				White: x=<?php echo $_POST['op_ccwx']; ?>, y=<?php echo $_POST['op_ccwy']; ?> <br>
				Red: x=<?php echo $_POST['op_ccrx']; ?>, y=<?php echo $_POST['op_ccry']; ?><br>
				Green: x=<?php echo $_POST['op_ccgx']; ?>, y=<?php echo $_POST['op_ccgy']; ?> <br>
				Blue: x=<?php echo $_POST['op_ccbx']; ?>, y=<?php echo $_POST['op_ccby']; ?>
				<input type="hidden" name="op_ccwx" value="<?php echo $_POST['op_ccwx']?>">
				<input type="hidden" name="op_ccwy" value="<?php echo $_POST['op_ccwy']?>">
				<input type="hidden" name="op_ccrx" value="<?php echo $_POST['op_ccrx']?>">
				<input type="hidden" name="op_ccry" value="<?php echo $_POST['op_ccry']?>">
				<input type="hidden" name="op_ccgx" value="<?php echo $_POST['op_ccgx']?>">
				<input type="hidden" name="op_ccgy" value="<?php echo $_POST['op_ccgy']?>">
				<input type="hidden" name="op_ccbx" value="<?php echo $_POST['op_ccbx']?>">
				<input type="hidden" name="op_ccby" value="<?php echo $_POST['op_ccby']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Coloer Coordinates:
			</td>
			<td>
				&plusmn; <?php echo $_POST['op_cc']; ?> 
				<input type="hidden" name="op_cc" value="<?php echo $_POST['op_cc']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Color Depth:
			</td>
			<td>
				<?php echo $_POST['op_cd']; ?>bit
				<input type="hidden" name="op_cd" value="<?php echo $_POST['op_cd']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Color Gamut (NTSC) 1~100%:
			</td>
			<td>
				<?php echo $_POST['op_cg']; ?>%
				<input type="hidden" name="op_cg" value="<?php echo $_POST['op_cg']?>">
			</td>
		</tr>
	<!-- ------------------Circuit-------------------- -->
	
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="3">
				<font size="+2">Circuit</font>
			</td>
		</tr>

		<tr bgcolor="#FFFFFF">
			<td width="20%" align="center">
			Interface: 
			</td>
			<td>
				<?php echo $_POST['ee_interface']; ?>
				<input type="hidden" name="ee_interface" value="<?php echo $_POST['ee_interface']?>">
			</td>	
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td width="20%" align="center">
			Power supply input voltage (Logic): 
			</td>
			<td>
				<?php echo $_POST['ee_psiv']; ?>V
				<input type="hidden" name="ee_psiv" value="<?php echo $_POST['ee_psiv']?>">
			</td>	
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Pin Counts:
			</td>
			<td>
				<?php echo $_POST['ee_pc']; ?>
				<input type="hidden" name="ee_pc" value="<?php echo $_POST['ee_pc']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Backlight Power Consumption (W):
			</td>
			<td>
				60nits:<?php echo $_POST['ee_blpc60']; ?>W
				90nits:<?php echo $_POST['ee_blpc90']; ?>W<br>
				150nits:<?php echo $_POST['ee_blpc150']; ?>W
				Max nits:<?php echo $_POST['ee_blpcmax']; ?>W
				<input type="hidden" name="ee_blpc60" value="<?php echo $_POST['ee_blpc60']?>">
				<input type="hidden" name="ee_blpc90" value="<?php echo $_POST['ee_blpc90']?>">
				<input type="hidden" name="ee_blpc150" value="<?php echo $_POST['ee_blpc150']?>">
				<input type="hidden" name="ee_blpcmax" value="<?php echo $_POST['ee_blpcmax']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Logic Power Consumpion (W) (Max):
			</td>
			<td>
				<?php echo $_POST['ee_lpc']; ?>W
				<input type="hidden" name="ee_lpc" value="<?php echo $_POST['ee_lpc']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Total Power Consumption (W) (Max):
			</td>
			<td>
				<?php echo $_POST['ee_tpc']; ?>W
				<input type="hidden" name="ee_tpc" value="<?php echo $_POST['ee_tpc']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Backlight Light Circuit (#S#P):
			</td>
			<td>
				S: <?php echo $_POST['ee_blcs']; ?><br>
				<input type="hidden" name="ee_blcs" value="<?php echo $_POST['ee_blcs']?>">
				P: <?php echo $_POST['ee_blcp']; ?>
				<input type="hidden" name="ee_blcp" value="<?php echo $_POST['ee_blcp']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				LED input voltage:
			</td>
			<td>
				<?php echo $_POST['ee_lediv']; ?>V
				<input type="hidden" name="ee_lediv" value="<?php echo $_POST['ee_lediv']?>">
			</td>
		</tr>
		

		<tr bgcolor="#FFFFFF">
			<td align="center">
				W/ LED Drive IC:
			</td>
			<td>
				<?php echo $_POST['ee_leddic']; ?>
				<input type="hidden" name="ee_leddic" value="<?php echo $_POST['ee_leddic']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td width="20%" align="center">
			T-con: 
			</td>
			<td>
				Vendor: <?php echo $_POST['ee_tcv']; ?>
				<input type="hidden" name="ee_tcv" value="<?php echo $_POST['ee_tcv']?>">
				Model Nmae: <?php echo $_POST['ee_tcmn']; ?>
				<input type="hidden" name="ee_tcmn" value="<?php echo $_POST['ee_tcmn']?>">
			</td>	
		</tr>
		
	<!-- ------------------Special Feature-------------------- -->
	
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="3">
				<font size="+2">Special Feature</font>
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				W/ Analog Voltage Support:
			</td>
			<td>
				<?php echo $_POST['sf_av']; ?>
				<input type="hidden" name="sf_av" value="<?php echo $_POST['sf_av']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				CABC:
			</td>
			<td>
				<?php echo $_POST['sf_cabc']; ?>
				<input type="hidden" name="sf_cabc" value="<?php echo $_POST['sf_cabc']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Vcom Input:
			</td>
			<td>
				<?php echo $_POST['sf_vi']; ?>
				<input type="hidden" name="sf_vi" value="<?php echo $_POST['sf_vi']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Gate on Array:
			</td>
			<td>
				<?php echo $_POST['sf_goa']; ?>
				<input type="hidden" name="sf_goa" value="<?php echo $_POST['sf_goa']?>">
			</td>
		</tr>

	<!-- ------------------Reliabililty Test-------------------- -->
	
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="3">
				<font size="+2">Reliabililty Test</font>
			</td>
		</tr>	
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				High Temperature Storage:
			</td>
			<td>
				Ta= <?php echo $_POST['rel_htsta']; ?>&deg;C , 
				<input type="hidden" name="rel_htsta" value="<?php echo $_POST['rel_htsta']?>">
				<?php echo $_POST['rel_htshr']; ?>hrs
				<input type="hidden" name="rel_htshr" value="<?php echo $_POST['rel_htshr']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Low Temperature Storage:
			</td>
			<td>
				Ta= <?php echo $_POST['rel_ltsta']; ?>&deg;C , 
				<input type="hidden" name="rel_ltsta" value="<?php echo $_POST['rel_ltsta']?>">
				<?php echo $_POST['rel_ltshr']; ?>hrs
				<input type="hidden" name="rel_ltshr" value="<?php echo $_POST['rel_ltshr']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Thermal Shock:
			</td>
			<td>
				<?php echo $_POST['rel_tsl']; ?>&deg;C ~
				<input type="hidden" name="rel_tsl" value="<?php echo $_POST['rel_tsl']?>">
				<?php echo $_POST['rel_tsh']; ?>&deg;C <br>
				<input type="hidden" name="rel_tsh" value="<?php echo $_POST['rel_tsh']?>">
				<?php echo $_POST['rel_thc']; ?> cycle, 
				<input type="hidden" name="rel_thc" value="<?php echo $_POST['rel_thc']?>">
				<?php echo $_POST['rel_tshpc']; ?> hrs/cycle
				<input type="hidden" name="rel_tshpc" value="<?php echo $_POST['rel_tshpc']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				High Temperature Operation:
			</td>
			<td>
				Ta= <?php echo $_POST['rel_htota']; ?>&deg;C , 
				<input type="hidden" name="rel_htota" value="<?php echo $_POST['rel_htota']?>">
				<?php echo $_POST['rel_htoh']; ?> hrs
				<input type="hidden" name="rel_htoh" value="<?php echo $_POST['rel_htoh']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Low Temperature Operation:
			</td>
			<td>
				Ta= <?php echo $_POST['rel_ltota']; ?>&deg;C ,
				<input type="hidden" name="rel_ltota" value="<?php echo $_POST['rel_ltota']?>">
				<?php echo $_POST['rel_ltoh']; ?> hrs
				<input type="hidden" name="rel_ltoh" value="<?php echo $_POST['rel_ltoh']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				High Temperature & High Humility Operation:
			</td>
			<td>
				<?php echo $_POST['rel_hthhc']; ?>&deg;C ,
				<input type="hidden" name="rel_hthhc" value="<?php echo $_POST['rel_hthhc']?>">
				<?php echo $_POST['rel_hthhp']; ?> % ,
				<input type="hidden" name="rel_hthhp" value="<?php echo $_POST['rel_hthhp']?>">
				<?php echo $_POST['rel_hthhhrs']; ?> hrs
				<input type="hidden" name="rel_hthhhrs" value="<?php echo $_POST['rel_hthhhrs']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Vibration:
			</td>
			<td>				
				Package Sweep: <?php echo $_POST['rel_vps1']; ?> ~ <?php echo $_POST['rel_vps2']; ?> (Hz/Min)<br>
				<input type="hidden" name="rel_vps1" value="<?php echo $_POST['rel_vps1']?>">
				<input type="hidden" name="rel_vps2" value="<?php echo $_POST['rel_vps2']?>">	
				
				Stroke: <?php echo $_POST['rel_vs']; ?> mm<br>
				<input type="hidden" name="rel_vs" value="<?php echo $_POST['rel_vs']?>">
				
				<?php echo $_POST['rel_vd']; ?> hrs for each direction
				<input type="hidden" name="rel_vd" value="<?php echo $_POST['rel_vd']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Shock:
			</td>
			<td>
				<?php echo $_POST['rel_sg']; ?>G,
				<input type="hidden" name="rel_sg" value="<?php echo $_POST['rel_sg']?>">
				
				<?php echo $_POST['rel_sms']; ?> ms
				<input type="hidden" name="rel_sms" value="<?php echo $_POST['rel_sms']?>">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				ESD:
			</td>
			<td>
							
				Contact: &plusmn; <?php echo $_POST['rel_esdc']; ?>
				<input type="hidden" name="rel_esdc" value="<?php echo $_POST['rel_esdc']?>">KV <br>
				
				Air: &plusmn; <?php echo $_POST['rel_esdair']; ?>KV <br>
				<input type="hidden" name="rel_esdair" value="<?php echo $_POST['rel_esdair']?>">
				
				<?php echo $_POST['rel_esdcap']; ?>pF,
				<input type="hidden" name="rel_esdcap" value="<?php echo $_POST['rel_esdcap']?>">
				
				<?php echo $_POST['ESD_ohm']; ?>&Omega;
				<input type="hidden" name="ESD_ohm" value="<?php echo $_POST['ESD_ohm']?>">
			</td>
		</tr>
		
	<!-- ------------------Submit-------------------- -->
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="3">
				<input type="submit" value="填完送出">

			</td>
		</tr>

	</table>
<?php
mysql_close($link_ID);

}
// 若資料表已有此仁寶料號，則不寫入
else
{	
	echo '<div align="center">';
	echo '資料庫已有此仁寶料號' . '<br>';
	echo '<a href="javascript:history.back();">回上頁</a>';
	echo '</div>';
}
?>
</div>
<?php require('info.php');?>
</body>
</html>