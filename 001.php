
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台管理系统</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="css/ie6.css"/>
<![endif]-->
<link rel="stylesheet" type="text/css"  href="../../../../public/layui/css/layui.css">
<link href="../../../../public/admin/css/style_v2.0.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/abccms2/Public/layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="/abccms2/Public/admin/css/style_v2.0.css" />
<script type="text/javascript" src="/abccms2/Public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/abccms2/Public/layui/layui.js"></script>
</head>
<body>
<div class="position mt10">当前位置：<a href="/admin.php/">后台首页</a> > 房源信息</div>
<div id="container">
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
  <legend>房源信息</legend>
</fieldset>
<div class="layui-form" style="background-color:#FFFFFF;">
<div class="tab_tit">
    <ul>
        <li class="active">全部房源</li>
        <li>整租房源</li>
        <li>合租房源</li>
        <li>急需续费房源</li>
    </ul>
</div>
<div class="hselect">
   
</div><!--高级搜索-->
<div class="c"></div>
<table class="layui-table" lay-even lay-skin="nob">
<thead>
    <tr style="text-align:center;">
      <th tyle="text-align:center;">id</th>
      <th>编号</th>
      <th>区域</th>
      <th>小区</th>
      <th>楼层</th>
      <th>出租方式</th>
      <th>租价</th>
      <th>房间数量</th>
      <th>面积</th>
      <th>是否出租</th>
      <th>合同期限</th>
      <th colspan="2" align="center">操作</th>
    </tr> 
    </thead>
</table>
<table class="layui-table" >
  <thead>
    <tr style="text-align:center;">
      <th tyle="text-align:center;">id</th>
      <th>编号</th>
      <th>区域</th>
      <th>小区</th>
      <th>楼层</th>
      <th>出租方式</th>
      <th>租价</th>
      <th>房间数量</th>
      <th>面积</th>
      <th>是否出租</th>
      <th>合同期限</th>
      <th colspan="2" align="center">操作</th>
    </tr>
  </thead>
  <form id="form2" name="form2" method="post" action="/abccms2/admin.php/House/delhouse.html">
    <tr>
      <td  align="center" class="layui-input-block"><input type="checkbox" id="hid[]"  lay-skin="primary"  name="hid[]" value="1" />
        &nbsp;1</td>
      <td align="center" height="22px">0001</td>
      <td align="center" height="22px">郑州-金水区</td>
      <td >国税局家属院</td>
      <td >2-2-401</td>
      <td >整租</td>
      <td >￥4500</td>
      <td >4</td>
      <td >109</td>
      <td ><font style="color:#1E9fff">部分出租</font></td>
      <td >2016-12-03</td>
      <td  align="center"><a href="/abccms2/admin.php/House/edit/hid/1.html" title="编辑" class="layui-btn layui-btn-small layui-btn-normal"><i class="layui-icon">&#xe642;</i></a>&nbsp;<a href="/abccms2/admin.php/House/delect/hid/1.html" class="layui-btn layui-btn-small layui-btn-danger" title="删除" onClick="return checkConfirm('您确认删除记录?')"><i class="layui-icon">&#xe640;</i></a></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td colspan="10"><div style="padding-left:20px;">
        <input type="button" value="全选" onClick="selectBox('all')" class="layui-btn layui-btn-normal"/>
        <input type="button" value="反选" onClick="selectBox('reverse')" class="layui-btn layui-btn-normal"/>
        <input type="submit" name="btnSave" value="删除" class="layui-btn layui-btn-danger" />
      </div></td>
      <td align="center">&nbsp;</td>
    </tr>
  </form>
</table>
<div class="c"></div>
    <div id="pages"><div>    </div></div>      
</div>
</div>
</body>
</html>

<script language="javascript">
   function checkConfirm(str){
	    return confirm(str); 
	}
	
    function selectBox(obj){
	    var checkboxis = document.getElementsByName("hid[]");  
		if (obj == 'all'){
		    for(var i =0; i<checkboxis.length; i++){
			    checkboxis[i].checked = 'true';
			}
		}else if (obj == 'reverse'){
		    for(var i =0; i<checkboxis.length; i++){
			    checkboxis[i].checked = !checkboxis[i].checked;
			}
		}
	}
</script>
