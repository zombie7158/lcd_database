<?php include('check.php');?>
<html>
<head>
<title>LCD Database Keyin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h2 align="center">LCD Database 資料輸入</h2>
<div align="center">
	<?php include('bar.php'); ?><p>
	<form method="POST" action="keyin_review.php">
	<font color="red">*</font> 表示必填欄位
	<table width="60%" bgcolor="#000000">
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
				<select name="p_customer" size="1">
					<option value="">選擇客戶別</option>
					<option value="A31">A31</option>
					<option value="A32">A32</option>
					<option value="A39">A39</option>
					<option value="A51">A51</option>
					<option value="A58">A58</option>
					<option value="A77">A77</option>
					<option value="A95">A95</option>
					<option value="ABO">ABO</option>
					<option value="AIO">AIO</option>
					<option value="C38">C38</option>
					<option value="T88">T88</option>
					<option value="030">030</option>
				</select>
			</td>	
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Project Name:
			</td>
			<td>
				<input type="text" name="p_name" size="10"> ex Pixar 
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Project code:
			</td>
			<td>
				<input type="text" name="p_code" size="10"> ex VGU00 
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td width="20%" align="center">
			Product Type: 
			</td>
			<td>
				<select name="p_type" size="1">
					<option value="">選擇產品別</option>
					<option value="NB">NB</option>
					<option value="Pad">Pad</option>
					<option value="AIO">AIO</option>
				</select>
			</td>	
		</tr>
				
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Owner ID(工號):
			</td>
			<td>
				<?php echo $_COOKIE['memberID']?>
				<input type="hidden" name="p_owner" value="<?php echo $_COOKIE['memberID']?>">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				MP Schedule:
			</td>
			<td align="left">
				<select name="p_mp_y" size="1">
					<option value="">年</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
				</select>			
			
				<select name="p_mp_m" size="1">
					<option value="">月</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
				
				<select name="p_mp_d" size="1">
					<option value="">日</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>					
				</select>		
			
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
			<font color="red">*</font> 
				Compal PN:
			</td>
			<td>
				R1: <input type="text" name="p_cpn" size="10"> ex AC600012345 <br>
				R3: <input type="text" name="p_cpn_r3" size="10">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Vendor PN:
			</td>
			<td>
				<input type="text" name="mdl_mn" size="10">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Vendor:
			</td>
			<td>
				<select name="mdl_vendor" size="1">
				<option value="">選擇LCD廠商</option>
				<option value="AUO">AUO</option>
				<option value="BOE">BOE</option>
				<option value="CPT">CPT</option>
				<option value="EBBG">EBBG</option>
				<option value="HSD">HSD</option>
				<option value="INX">INX</option>
				<option value="IVO">IVO</option>
				<option value="JDI">JDI</option>
				<option value="KD">KD</option>	
				<option value="LGD">LGD</option>
				<option value="Panasonic">Panasonic</option>
				<option value="SDC">SDC</option>	
				<option value="Sharp">Sharp</option>
				<option value="Truly">Truly</option>
				<option value="Tianma">Tianma</option>	
				</select>
			</td>
		</tr>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				First sample ready date:
			</td>
			<td>
				<select name="fsrd_y" size="1">
					<option value="">年</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
				</select>			
			
				<select name="fsrd_m" size="1">
					<option value="">月</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
				
				<select name="fsrd_d" size="1">
					<option value="">日</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>					
				</select>		
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Reference Price:
			</td>
			<td>
				<input type="text" name="mdl_rp" size="5"> USD
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Design Guide in Spec:
			</td>
			<td>
				<input type="radio" name="mdl_dg" value="Yes">Yes
				<input type="radio" name="mdl_dg" value="No">No
			</td>
		</tr>
		<!-- 
		<tr bgcolor="FFFFFF">
			<td align="center">
				Datasheet上傳:
			</td>
		
		</tr>
		-->

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
				<input type="text" name="me_adz" size="5">吋
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Resolution:
			</td>
			<td>
				<select name="me_resolution" size="1">
				<option value="">選擇LCD解析度</option>
				<option value="800x400">800x400</option>
				<option value="1280x800">1280x800</option>
				<option value="1280x1024">1280x1024</option>
				<option value="1024x600">1024x600</option>
				<option value="1024x768">1024x768</option>
				<option value="1366x768">1366x768</option>
				<option value="1400x1505">1400x1505</option>
				<option value="1440x900">1440x900</option>
				<option value="1600x900">1600x900</option>
				<option value="1600x1200">1600x1200</option>
				<option value="1680x1050">1680x1050</option>
				<option value="1920x1080">1920x1080</option>
				<option value="1920x1200">1920x1200</option>
				<option value="2048x1536">2048x1536</option>				
				</select>
				<!--others <input type="text" name="resolution">17.1:10</option>-->
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Pixel per inch (ppi):
			</td>
			<td>
				<input type="text" name="me_ppi" size="5">
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Active Area (mm):
			</td>
			<td>
				X=<input type="text" name="me_aa_x" size="5">mm
				Y=<input type="text" name="me_aa_y" size="5">mm
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Aspect Ratio:
			</td>
			<td>
				<select name="me_ar" size="1">
				<option value="">選擇LCD比例</option>
				<option value="16:9">16:9</option>
				<option value="16:10">16:10</option>
				<option value="4:3">4:3</option>
				<option value="5:3">5:3</option>
				<option value="5:4">5:4</option>
				<option value="17.1:10">17.1:10</option>
				</select>
			</td>
		</tr>
		
		
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Pixel Pitch (H x V):
			</td>
			<td>
				<input type="text" name="me_pph" size="5"> x 
				<input type="text" name="me_ppv" size="5">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Display Orientation:
			</td>
			<td>
				<input type="radio" name="me_do" value="Landscape">Landscape
				<input type="radio" name="me_do" value="Portrait">Portrait
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Total solution with TS:
			</td>
			<td>
				<input type="radio" name="me_ts" value="Yes">Yes
				<input type="radio" name="me_ts" value="No">No
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Outline Dimension Max (mm):
			</td>
			<td>
				LCD only: <input type="text" name="me_odx" size="5"> x 
				<input type="text" name="me_ody" size="5"> <br>
				w/ TS: <input type="text" name="me_odwtsx" size="5"> x 
				<input type="text" name="me_odwtsy" size="5">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Thickness Max (mm):
			</td>
			<td>
				w/o PCB: <input type="text" name="me_twopcb" size="5">mm<br>
				w/ PCB: <input type="text" name="me_twpcb" size="5">mm
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Glass Thickness (mm):
			</td>
			<td>
				<select name="me_gt" size="1">
				<option value="">選擇玻璃厚度</option>
				<option value="0.25">0.25</option>
				<option value="0.3">0.3</option>
				<option value="0.4">0.4</option>
				<option value="0.5">0.5</option>
				<option value="0.63">0.63</option>
				<option value="0.7">0.7</option>
				</select>
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Surface Treatment (AG/G):
			</td>
			<td>
				<input type="radio" name="me_st" value="AG">Anti Glare
				<input type="radio" name="me_st" value="G">Glare
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Weight (g):
			</td>
			<td>
				<input type="text" name="me_weight" size="5">g
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
				<input type="radio" name="op_blt" value="White LED">White LED
				<input type="radio" name="op_blt" value="SRGB LED">SRGB LED
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Luminance (nits)(typ):
			</td>
			<td>
				<input type="text" name="op_lum" size="5">nits
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Contrast Ratio:
			</td>
			<td>
				<input type="text" name="op_cr" size="5"> 
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				View Angle (L/R/U/D):
			</td>
			<td>
				Left:<input type="text" name="op_val" size="5"> 
				Right:<input type="text" name="op_var" size="5"><br>
				Up:<input type="text" name="op_vau" size="5">
				Down:<input type="text" name="op_vad" size="5">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				View Angle Type:
			</td>
			<td>
				<select name="op_vat" size="1">
				<option value="">選擇LCD視角技術</option>
				<option value="tn">TN</option>
				<option value="EWV">EWV Film</option>
				<option value="IPS">IPS</option>
				<option value="MVA">MVA</option>
				</select>
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Luminance Uniformity (9 points):
			</td>
			<td>
				<input type="text" name="op_lum9" size="5">nits
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Response Time (Rising + Falling) (ms):
			</td>
			<td>
				<input type="text" name="op_rt" size="5">ms
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Color Coordinates:
			</td>
			<td>
				White: x=<input type="text" name="op_ccwx" size="5">, y=<input type="text" name="op_ccwy" size="5"> <br>
				Red: x=<input type="text" name="op_ccrx" size="5">, y=<input type="text" name="op_ccry" size="5"><br>
				Green: x=<input type="text" name="op_ccgx" size="5">, y=<input type="text" name="op_ccgy" size="5"><br>
				Blue: x=<input type="text" name="op_ccbx" size="5">, y=<input type="text" name="op_ccby" size="5">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Coloer Coordinates:
			</td>
			<td>
				&plusmn; <input type="text" name="op_cc" size="5"> 
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Color Depth:
			</td>
			<td>
				<input type="text" name="op_cd" size="5"> bit
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Color Gamut (NTSC) 1~100%:
			</td>
			<td>
				<input type="text" name="op_cg" size="5"> %
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
				<select name="ee_interface" size="1">
				<option value="">請選擇Interface</option>
				<option value="LVDS">LVDS</option>
				<option value="eDP1.2">eDP1.2</option>
				<option value="eDP1.3">eDP1.3</option>
				<option value="MIPI">MIPI</option>
				<option value="TTL">TTL</option>				
				</select>
			</td>	
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td width="20%" align="center">
			Power supply input voltage (Logic): 
			</td>
			<td>
				<input type="text" name="ee_psiv" size="5"> V
			</td>	
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Pin Counts:
			</td>
			<td>
				<input type="text" name="ee_pc" size="5"> 
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Backlight Power Consumption (W):
			</td>
			<td>
				60nits:<input type="text" name="ee_blpc60" size="5"> W
				90nits:<input type="text" name="ee_blpc90" size="5"> W<br>
				150nits:<input type="text" name="ee_blpc150" size="5"> W
				Max nits:<input type="text" name="ee_blpcmax" size="5"> W
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Logic Power Consumpion (W) (Max):
			</td>
			<td>
				<input type="text" name="ee_lpc" size="5"> W
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Total Power Consumption (W) (Max):
			</td>
			<td>
				<input type="text" name="ee_tpc" size="5"> W
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Backlight Light Circuit (#S#P):
			</td>
			<td>
				S: <input type="text" name="ee_blcs" size="5"><br>
				P: <input type="text" name="ee_blcp" size="5">
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				LED input voltage:
			</td>
			<td>
				<input type="text" name="ee_lediv" size="5"> V
			</td>
		</tr>
		

		<tr bgcolor="#FFFFFF">
			<td align="center">
				W/ LED Drive IC:
			</td>
			<td>
				<input type="radio" name="ee_leddic" value="Yes">Yes
				<input type="radio" name="ee_leddic" value="No">No
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td width="20%" align="center">
			T-con: 
			</td>
			<td>
				Vendor: 
				<select name="ee_tcv" size="1">
				<option value="">選擇T-con廠商</option>
				<option value="Parade">Parade</option>
				<option value="Himax">Himax</option>
				<option value="Novatek">Novatek</option>
				<option value="Orise">Orise</option>
				<option value="Mstar">Mstar</option>
				<option value="ILI">ILI</option>
				<option value="Samsung">Samsung</option>
				<option value="LGD">LGD</option>
				<option value="ROHM">ROHM</option>
				</select>
				Model Nmae: <input type="text" name="ee_tcmn" size="8">
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
				<input type="radio" name="sf_av" value="Yes">Yes
				<input type="radio" name="sf_av" value="No">No
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				CABC:
			</td>
			<td>
				<input type="radio" name="sf_cabc" value="Yes">Yes
				<input type="radio" name="sf_cabc" value="No">No
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Vcom Input:
			</td>
			<td>
				<input type="radio" name="sf_vi" value="Yes">Yes
				<input type="radio" name="sf_vi" value="No">No
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Gate on Array:
			</td>
			<td>
				<input type="radio" name="sf_goa" value="Yes">Yes
				<input type="radio" name="sf_goa" value="No">No
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
				Ta= <input type="text" name="rel_htsta" size="5">&deg;C , 
				<input type="text" name="rel_htshr" size="5"> hrs
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Low Temperature Storage:
			</td>
			<td>
				Ta= <input type="text" name="rel_ltsta" size="5">&deg;C , 
				<input type="text" name="rel_ltshr" size="5"> hrs
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Thermal Shock:
			</td>
			<td>
				<input type="text" name="rel_tsl" size="5">&deg;C ~
				<input type="text" name="rel_tsh" size="5">&deg;C <br>
				<input type="text" name="rel_thc" size="5"> cycle, 
				<input type="text" name="rel_tshpc" size="5"> hrs/cycle
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				High Temperature Operation:
			</td>
			<td>
				Ta= <input type="text" name="rel_htota" size="5">&deg;C , 
				<input type="text" name="rel_htoh" size="5"> hrs
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Low Temperature Operation:
			</td>
			<td>
				Ta= <input type="text" name="rel_ltota" size="5">&deg;C , 
				<input type="text" name="rel_ltoh" size="5"> hrs
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				High Temperature & High Humility Operation:
			</td>
			<td>
				<input type="text" name="rel_hthhc" size="5" >&deg;C , 
				<input type="text" name="rel_hthhp" size="5"> % ,  
				<input type="text" name="rel_hthhhrs" size="5"> hrs
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Vibration:
			</td>
			<td>
				Package Sweep: <input type="text" name="rel_vps1" size="5" > ~ 
				<input type="text" name="rel_vps2" size="5"> (Hz/Min)<br>
				Stroke: <input type="text" name="rel_vs" size="5"> mm<br>
				<input type="text" name="rel_vd" size="5"> hr for each direction
			</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
			<td align="center">
				Shock:
			</td>
			<td>
				<input type="text" name="rel_sg" size="5" >G, 
				<input type="text" name="rel_sms" size="5"> ms
			</td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td align="center">
				ESD:
			</td>
			<td>
				Contact: &plusmn; <input type="text" name="rel_esdc" size="5" >KV <br>
				Air: &plusmn; <input type="text" name="rel_esdair" size="5">KV <br>
				<input type="text" name="rel_esdcap" size="5">pF, 
				<input type="text" name="ESD_ohm" size="5">&Omega;
			</td>
		</tr>
		
	<!-- ------------------Submit-------------------- -->
		<tr bgcolor="#AAAAAA">
			<td align="center" height="20" colspan="3">
				<input type="submit" value="預覽">

			</td>
		</tr>

	</table>

</div>
<?php require('info.php');?>
</body>
</html>