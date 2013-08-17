<?php include('check.php');?>

<html>
<head>
<title>LCD Dataase Update_exe</title>
<h2 align="center">LCD Database </h2>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
$link_ID = mysql_connect ('localhost','root','student');
mysql_select_db('lcd_db');
mysql_query('SET CHARACTER SET UTF8;');
mysql_query("UPDATE spec SET mdl_update=NOW() WHERE p_cpn = '" . $_POST['p_cpn']. "';", $link_ID); //時間更更新，不是時間暫停喔!!
mysql_query("UPDATE spec SET p_customer = '" . $_POST['p_customer'] . 
"', p_name='" . $_POST['p_name'] . 
"', p_code='" . $_POST['p_code'] . 
"', p_type='" . $_POST['p_type'] . 
"', p_mp_y='" . $_POST['p_mp_y'] .
"', p_mp_m='" . $_POST['p_mp_m'] .
"', p_mp_d='" . $_POST['p_mp_d'] .

"', mdl_mn='" . $_POST['mdl_mn'] .
"', mdl_vendor='" . $_POST['mdl_vendor'] .
"', fsrd_y='" . $_POST['fsrd_y'] .
"', fsrd_m='" . $_POST['fsrd_m'] .
"', fsrd_d='" . $_POST['fsrd_d'] .
"', mdl_rp='" . $_POST['mdl_rp'] .
  
"', me_adz='" . $_POST['me_adz'] .
"', me_aa_x='" . $_POST['me_aa_x'] .
"', me_aa_y='" . $_POST['me_aa_y'] .
"', me_ar='" . $_POST['me_ar'] .
"', me_resolution='" . $_POST['me_resolution'] .
"', me_ppi='" . $_POST['me_ppi'] .
"', me_pph='" . $_POST['me_pph'] .
"', me_ppv='" . $_POST['me_ppv'] .
"', me_do='" . $_POST['me_do'] .
"', me_ts='" . $_POST['me_ts'] .
"', me_odx='" . $_POST['me_odx'] .
"', me_ody='" . $_POST['me_ody'] .
"', me_odwtsx='" . $_POST['me_odwtsx'] .
"', me_odwtsy='" . $_POST['me_odwtsy'] .
"', me_twopcb='" . $_POST['me_twopcb'] .
"', me_twpcb='" . $_POST['me_twpcb'] .
"', me_gt='" . $_POST['me_gt'] .
"', me_st='" . $_POST['me_st'] .
"', me_weight='" . $_POST['me_weight'] .

"', op_blt='" . $_POST['op_blt'] .
"', op_lum='" . $_POST['op_lum'] .
"', op_cr='" . $_POST['op_cr'] .
"', op_val='" . $_POST['op_val'] .
"', op_var='" . $_POST['op_var'] .
"', op_vau='" . $_POST['op_vau'] .
"', op_vad='" . $_POST['op_vad'] .
"', op_vat='" . $_POST['op_vat'] .
"', op_lum9='" . $_POST['op_lum9'] .
"', op_rt='" . $_POST['op_rt'] .
"', op_ccwx='" . $_POST['op_ccwx'] .
"', op_ccwy='" . $_POST['op_ccwy'] .
"', op_ccrx='" . $_POST['op_ccrx'] .
"', op_ccry='" . $_POST['op_ccry'] .
"', op_ccgx='" . $_POST['op_ccgx'] .
"', op_ccgy='" . $_POST['op_ccgy'] .
"', op_ccbx='" . $_POST['op_ccbx'] .
"', op_ccby='" . $_POST['op_ccby'] .
"', op_cc='" . $_POST['op_cc'] .
"', op_cd='" . $_POST['op_cd'] .
"', op_cg='" . $_POST['op_cg'] .

"', ee_interface='" . $_POST['ee_interface'] .
"', ee_psiv='" . $_POST['ee_psiv'] .
"', ee_blpc60='" . $_POST['ee_blpc60'] .
"', ee_blpc90='" . $_POST['ee_blpc90'] .
"', ee_blpc150='" . $_POST['ee_blpc150'] .
"', ee_blpcmax='" . $_POST['ee_blpcmax'] .
"', ee_lpc='" . $_POST['ee_lpc'] .
"', ee_tpc='" . $_POST['ee_tpc'] .
"', ee_blcs='" . $_POST['ee_blcs'] .
"', ee_blcp='" . $_POST['ee_blcp'] .
"', ee_lediv='" . $_POST['ee_lediv'] .
"', ee_leddic='" . $_POST['ee_leddic'] .
"', ee_tcv='" . $_POST['ee_tcv'] .
"', ee_tcmn='" . $_POST['ee_tcmn'] .
"', op_cg='" . $_POST['op_cg'] .

"', sf_av='" . $_POST['sf_av'] .
"', sf_cabc='" . $_POST['sf_cabc'] .
"', sf_vi='" . $_POST['sf_vi'] .
"', sf_goa='" . $_POST['sf_goa'] .

"', rel_htsta='" . $_POST['rel_htsta'] .
"', rel_htshr='" . $_POST['rel_htshr'] .
"', rel_ltsta='" . $_POST['rel_ltsta'] .
"', rel_ltshr='" . $_POST['rel_ltshr'] .
"', rel_tsl='" . $_POST['rel_tsl'] .
"', rel_tsh='" . $_POST['rel_tsh'] .
"', rel_thc='" . $_POST['rel_thc'] .
"', rel_tshpc='" . $_POST['rel_tshpc'] .
"', rel_htota='" . $_POST['rel_htota'] .
"', rel_htoh='" . $_POST['rel_htoh'] .
"', rel_ltota='" . $_POST['rel_ltota'] .
"', rel_ltoh='" . $_POST['rel_ltoh'] .
"', rel_hthhc='" . $_POST['rel_hthhc'] .
"', rel_hthhp='" . $_POST['rel_hthhp'] .
"', rel_hthhhrs='" . $_POST['rel_hthhhrs'] .
"', rel_vps1='" . $_POST['rel_vps1'] .
"', rel_vps2='" . $_POST['rel_vps2'] .
"', rel_vs='" . $_POST['rel_vs'] .
"', rel_vd='" . $_POST['rel_vd'] .
"', rel_sg='" . $_POST['rel_sg'] .
"', rel_sms='" . $_POST['rel_sms'] .
"', rel_esdc='" . $_POST['rel_esdc'] .
"', rel_esdair='" . $_POST['rel_esdair'] .
"', rel_esdcap='" . $_POST['rel_esdcap'] .
"', ESD_ohm='" . $_POST['ESD_ohm'] .

"'WHERE p_cpn = '" . $_POST['p_cpn']. "';", $link_ID);

mysql_close($link_ID);

/*
 "', p_cpn='" . $_POST['p_cpn'] .
 無法改仁寶料號(cpn)
 因為cpn為主要索引
 若上頁改掉，post到資料庫時並沒有match
 */
?>

<div align="center"><?php include('bar.php'); ?></div><p>
<div align="center">資料更新成功</div><p>
<?php require('info.php');?>
</body>
</html>