<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>test</title>
    <link rel="stylesheet" type="text/css" href="spiffyCal/spiffyCal_v2_1.css">
    <script type="text/javascript" src="spiffyCal/spiffyCal_v2_1.js"></script>
    <script type="text/javascript">
      var dateAvailable = new ctlSpiffyCalendarBox("dateAvailable", "new_product", "products_date_available","btnDate1","");
    </script>  
  </head>
<body>  
<div id="spiffycalendar" class="text"></div>

<form name="new_product">
<table width="100%"  border="0" cellspacing="0" cellpadding="4">  
    <tr class="dataTableRow">
        <td align="right">上架日期：<br /><small>(YYYY-MM-DD)</small></td>
        <td align="left">&nbsp;<script type="text/javascript">dateAvailable.writeControl(); dateAvailable.dateFormat="yyyy-MM-dd";</script> </td>
    </tr>
</table>
</form>
</body>
</html>