<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>用月曆表輸入日期</title>
<meta name="generator" content="Namo WebEditor v6.0">
<link rel="stylesheet" href="../Common/css/document.css">
<link rel="stylesheet" href="../Common/css/non_corners1.css">
    <style TYPE="text/css">
       TD.Some 
         {
         font-family :Tahoma, Verdana, Arial; 
         font-size :12px; 
         color :#000000; 
         font-weight :normal;
         }
       A
         {
         font-family :Tahoma, Verdana, Arial;
         font-size :12px;
         color :#000098;
         font-weight :normal;
         text-decoration: none;
         }
    
    </style>
<script type="text/javascript" src="../Common/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../Common/js/jquery.corner.js"></script>

<script type="text/javascript">
window.onload=function(){Nifty("#box","same-height");}
$(document).ready(function(){
$(".box-four").corner();
$('<div class="tr"></div><div class="tl"></div><div class="br"></div><div class="bl"></div>').appendTo(".box-five");
});
</script>
</head>
<body>
<div id="page_body">
<div id="top_bar">
[<a href="../index.php" target="_parent">返回部屋首頁</a>]老雄維尼的部屋．網頁設計資源
</div>
<div id="title">
用月曆表輸入日期
</div>
<div class="box-four">
<div class="inside">
用月曆表輸入日期，這個元件是是網頁表單中常用到的元件。 以JavaScript製作。<br>
這個程式雖然是以查詢郵遞區號為主，但只要稍加修改就可以拿來當作地址輸入的輔助功能。
而地址輸入也是網頁表單中常用到的元件，如果使用這種下拉式選單即可輕易達成快速輸入地址的便利性。<br>
參考檔案︰date_input.js
</div>
</div>
<div class="box-four">
<div class="inside">
<?
$m_date='';
if(!$_GET['year']==''){$year=$_GET['year'];}
if(!$_GET['month']==''){$month=$_GET['month'];}
if(!$_GET['day']==''){$day=$_GET['day'];}
if(!empty($year)){$m_date=$year."/".$month."/".$day;}
echo "<input type='text' name='date' maxlength=12 size='12' value='{$m_date}'>";

$sunday_color="#ffcccc";//星期六日顏色
$today_color="#ff0000";//今日字的顏色
$othday_color="#ffffcc";//一般日子顏色
$addtd_color="#ffffcc";//補空格顏色

//目前的日期..年,月,日,天數,當月的1日為星期幾,
//顯示的日期..年月日天數當月的1日為星期幾
if ($year=='' || $month=='') {$year=date("Y");//年
	$month=date("m");//月
	}
$d=date("d");//日
$t=date("t",mktime(0, 0, 0, $month,$d,$year));//求該月總天數
$f=date("w",mktime(0, 0, 0, $month,1, $year));//求該月一日星期幾
$now_cal=array('y'=>$year,'m'=>$month,'d'=>date("d"),'t'=>$t,'w'=>date("w",mktime(0, 0, 0, date("m"), date("d"), date("Y"))),
'f'=>$f);
//年、月、日、總天數、今天星期幾、本月一日星期幾
// echo date("Y-n-d")."<BR>";
// $a=mktime(0, 0, 0,date("m"),date("d"),date("Y"));
// echo date("Y-n-d",$a+(86400*15))."<BR>";

//起始日期,間隔,週期性
//function date_add($y,$m,$d,$b=1,$c=1) {
//$a=mktime(0, 0, 0,$m,$d,$y);
//$date_arry[0]=$y."-".$m."-".$d;
//for ($i=1;$i<$c;$i++) {$date_arry[$i]=date("Y-n-d",($a+86400*$b*$i));	}
//return $date_arry;}
?>


<table  width="180" border=0  cellspacing='0' cellpadding='0'>
<tr bgcolor="#BBE9FF">
<td align="center" >
<?
///////超過12月及1月的處理///////////////////////////////
if ($month==12) {$linkb="<a href=".$PHP_SELF."?year=".($year+1)."&month=1>>></a>";} 
else {$linkb="<a href=".$PHP_SELF."?year=".$year."&month=".($month+1).">>></a>";}
if ($month==1) {$linka="<a href=".$PHP_SELF."?year=".($year-1)."&month=12><<</a>";}
else{$linka="<a href=".$PHP_SELF."?year=".$year."&month=".($month-1)."><<</a>";}

?>
<?echo $linka; ?>
</td>
<td colspan=5 align="center">
<?echo $year."年".$month."月";?>
<a href="<?=$PHP_SELF?>">Home</a>
</td>
<td align="center" ><?echo$linkb?>
</td></tr>
<tr align="center">
<th width="14%" bgcolor="<?=$sunday_color?>">日</th>
<th width="14%" bgcolor="<?=$othday_color?>">一</th>
<th width="14%" bgcolor="<?=$othday_color?>">二</th>
<th width="14%" bgcolor="<?=$othday_color?>">三</th>
<th width="14%" bgcolor="<?=$othday_color?>">四</th>
<th width="15%" bgcolor="<?=$othday_color?>">五</th>
<th width="15%" bgcolor="<?=$sunday_color?>">六</th>
</tr>
<tr align="center">
<?
//日曆第一行,計算空格差,補空位
for ($count_td=0;$count_td<$now_cal[f];$count_td++){
	if($count_td==0){echo"<td bgcolor='".$sunday_color."'>&nbsp;</td>";}
	else{echo"<td bgcolor=\"".$addtd_color."\">&nbsp;</td>";}
}
//補空格
for ($i=1; $i<=$now_cal[t] ; $i++){$line=($i+$now_cal[f])%7;
if ($line==1 || $line==0 ) {$td="<td bgcolor=".$sunday_color." >";} else {$td="<td bgcolor=".$othday_color." >";}
if ($i==date("d") && $month==date("n")){
	$echo_day="<A HREF=\"".$PHP_SELF."?year=".$year."&month=".$month."&day=".$i."\"><b style=\"color:".$today_color."\">".$i."</b></A>"; }
	else{ $echo_day="<A HREF=\"".$PHP_SELF."?year=".$year."&month=".$month."&day=".$i."\">".$i."</A>\n";}
echo $td.$echo_day."</td>";
//今天顏色
if ($line==0) { echo"</tr><tr align=\"center\">";}
//換行控制
}
$add_td=($now_cal[t]+$count_td-1)%7;
//日曆最後一行,計算空格差,補空位
for ($count_td=1;$count_td<(6-$add_td);$count_td++ ){echo"<td bgcolor='".$addtd_color."'>&nbsp;</td>";}
echo"<td bgcolor='".$sunday_color."'>&nbsp;</td>";
?>
</tr>
<tr align="center">
<form action="<?echo$PHP_SELF?>">
<td colspan=7 align="center" bgcolor="#BBE9FF">
<select name="year">
<?
for ($i=(date("Y")-5);$i<=(date("Y")+5);$i++){
if ($i==date("Y")) {echo "<option value=".$i." selected>".$i."</option>";}
else {echo "<option value=".$i.">".$i."</option>";}
}
?>
</select>
<select name="month">
<?
for ($i=1;$i<=12;$i++){
if ($i==date("m")) {echo "<option value=".$i." selected>".$i."</option>";}
else {echo "<option value=".$i.">".$i."</option>";}
}
?>
</select>
<input type="submit" value="GO">
</td></form></tr>
</table>
</div>
</div>
</body>

</html>