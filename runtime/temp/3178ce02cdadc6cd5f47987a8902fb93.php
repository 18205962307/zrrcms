<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\zrrcms\public/../application/admin\view\content\menu.html";i:1508403192;}*/ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>菜单</title>
<link href="__STATIC__/admin/menu/menu.css" rel="stylesheet" type="text/css">
<script src="__STATIC__/admin/menu/menu.js" type="text/javascript"></script>
<SCRIPT lanuage="JScript">
function tourl(url){
  parent.main.location.href=url;
}
</SCRIPT>
</head>
<body onLoad="initialize()">
<table border='0' cellspacing='0' cellpadding='0'>
  <!--一级菜单 -->
  <tr height=20>
      <td id="home"><img src="__STATIC__/admin/images/homepage.gif" border=0></td>
      <td><b>栏目管理</b></td>
  </tr>
  <!--一级菜单 /-->

</table>


<table border='0' cellspacing='0' cellpadding='0'>
  <!--二级菜单 -->
  <tr> 
    <td id="prcinfo" class="menu1" onclick="chengstate('cinfo')">
    <a onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">信息相关管理</a>
  </td>
  </tr>
  <!--二级菜单 /-->
  <!--三级菜单 -->
  <tr id="itemcinfo" style="display:none"> 
    <td class="list">
    <table border='0' cellspacing='0' cellpadding='0'>
        <tr> 
          <td class="file">
            <a href="list.html" target="main" onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">管理信息</a>
          </td>
        </tr>
        <tr> 
          <td class="file">
            <a href="add.html" target="main" onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">添加</a>
          </td>
        </tr>
      </table>
  </td>
  </tr>
  <!--三级菜单 /-->




  <tr> 
    <td id="prcother" class="menu3" onclick="chengstate('cother')">
    <a onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">其他相关</a>
  </td>
  </tr>
  <tr id="itemcother" style="display:none"> 
    <td class="list1">
    <table border='0' cellspacing='0' cellpadding='0'>
  
        <tr> 
          <td class="file">
      <a href="../../TotalData.php" target="main" onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">统计信息数据</a>
          </td>
        </tr>
    <tr> 
          <td class="file">
      <a href="../../user/UserTotal.php" target="main" onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">用户发布统计</a>
          </td>
        </tr>

    <tr> 
          <td class="file">
      <a href="../../SearchKey.php" target="main" onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">管理搜索关键字</a>
          </td>
        </tr>

    <tr> 
          <td class="file">
      <a href="../../db/RepNewstext.php" target="main" onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">批量替换字段值</a>
          </td>
        </tr>

    <tr> 
          <td class="file">
      <a href="../../MoveClassNews.php" target="main" onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">批量转移信息</a>
          </td>
        </tr>

    <tr> 
          <td class="file">
      <a href="../../InfoDoc.php" target="main" onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">信息批量归档</a>
          </td>
        </tr>

    <tr> 
          <td class="file">
      <a href="../../db/DelData.php" target="main" onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">批量删除信息</a>
          </td>
        </tr>

    <tr> 
          <td class="file1">
      <a href="../../other/ListVoteMod.php" target="main" onmouseout="this.style.fontWeight=''" onmouseover="this.style.fontWeight='bold'">管理预设投票</a>
          </td>
        </tr>

      </table>
  </td>
  </tr>

</table>
</body>
</html>