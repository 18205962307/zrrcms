<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\WWW\zrrcms\public/../application/admin\view\content\index.html";i:1508403192;}*/ ?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title>帝国网站管理系统 － 最安全、最稳定的开源CMS系统</title>
<link href="__STATIC__/admin/adminstyle/1/adminmain.css" rel=stylesheet>
<style>
.flyoutlink A {
	color: black; text-decoration: none
}
.flyoutlink A:hover {
	color: black; text-decoration: none
}
.flyoutlink A:visited {
	color: black; text-decoration: none
}
.flyoutlink A:active {
	color: black; text-decoration: none
}
.flyoutMenu {
	background-color: #C9F1FF
}
.flyoutMenu td.flyoutlink {
	border-right: #C9F1FF 1px solid; border-top: #C9F1FF 1px solid; border-left: #C9F1FF 1px solid; cursor: hand; padding-top: 1px; border-bottom: #C9F1FF 1px solid
}
.flyoutMenu1 {
	background-color: #fbf9f9
}
.flyoutMenu1 td.flyoutlink1 {
	border-right: #fbf9f9 1px solid; border-top: #fbf9f9 1px solid; border-left: #fbf9f9 1px solid; cursor: hand; padding-top: 1px; border-bottom: #fbf9f9 1px solid
}
</style>
<script>
function switchSysBar(){
	if(switchPoint.innerText==3)
	{
		switchPoint.innerText=4
		document.all("frmtitle").style.display="none"
	}
	else
	{
		switchPoint.innerText=3
		document.all("frmtitle").style.display=""
	}
}
function switchSysBarInfo(){
	switchPoint.innerText=3
	document.all("frmtitle").style.display=""
}

function about(){
	window.showModalDialog("__STATIC__/admin/adminstyle/1/page/about.htm","ABOUT","dialogwidth:300px;dialogheight:150px;center:yes;status:no;scroll:no;help:no");
}

function over(obj){
		if(obj.className=="flyoutlink")
		{
			obj.style.backgroundColor='#B5C4EC'
			obj.style.borderColor = '#380FA6'
		}
		else if(obj.className=="flyoutlink1")
		{
		    obj.style.backgroundColor='#B5C4EC'
			obj.style.borderColor = '#380FA6'				
		}
}
function out(obj){
		if(obj.className=="flyoutlink")
		{
			obj.style.backgroundColor='#C9F1FF'
			obj.style.borderColor = 'C9F1FF'
		}
		else if(obj.className=="#flyoutlink1")
		{
		    obj.style.backgroundColor='#FBF9F9'
			obj.style.borderColor = '#FBF9F9'				
		}
}

function show(d){
	if(obj=document.all(d))	obj.style.visibility="visible";

}
function hide(d){
	if(obj=document.all(d))	obj.style.visibility="hidden";
}

function JumpToLeftMenu(url){
	document.getElementById("left").src=url;
}
function JumpToMain(url){
	document.getElementById("main").src=url;
}
function DoOnclickMenu(m){
	if(m!='dosysmenu')
	{
		document.getElementById("dosysmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("dosysmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='doinfomenu')
	{
		document.getElementById("doinfomenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("doinfomenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='doclassmenu')
	{
		document.getElementById("doclassmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("doclassmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='dotempmenu')
	{
		document.getElementById("dotempmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("dotempmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='dousermenu')
	{
		document.getElementById("dousermenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("dousermenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='dotoolmenu')
	{
		document.getElementById("dotoolmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("dotoolmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='doshopmenu')
	{
		document.getElementById("doshopmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("doshopmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='doextmenu')
	{
		document.getElementById("doextmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("doextmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='doothermenu')
	{
		document.getElementById("doothermenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("doothermenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='dofastmenu')
	{
		document.getElementById("dofastmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("dofastmenu").style.backgroundColor='#8CBDEF';
	}
	document.menuform.onclickmenu.value=m;
}
</script>
</head>
<body bgColor="#C9F1FF" leftMargin=0 topMargin=0>
<table width="100%" height="100%" border=0 cellpadding="0" cellSpacing=0>
<!-- 顶部菜单 -->
<tr>
<td height="60">

  <table width="100%" height="60" border=0 cellpadding="0" cellSpacing=0 background="__STATIC__/admin/adminstyle/1/images/topbg.gif">
  <form name="menuform" id="menuform">
    <tbody>
	<input type="hidden" name="onclickmenu" value="">
      <tr> 
            <td width="180"><div align="center"><a href="main.php" target="main" title="帝国网站管理系统"><img src="__STATIC__/admin/adminstyle/1/images/logo.gif" border="0"></a></div></td>
		<td height="60"> 
			<table width="760" height="60" border=0 cellpadding="0" cellSpacing=0>
                <tbody>
                  <tr align=middle> 
                    <td width=60 onMouseOver="if(document.menuform.onclickmenu.value!='dosysmenu'){this.style.backgroundColor='#8CBDEF';}" onMouseOut="if(document.menuform.onclickmenu.value!='dosysmenu'){this.style.backgroundColor='';}" onClick="DoOnclickMenu('dosysmenu');JumpToLeftMenu('adminstyle/1/left.php?ecms=system');" style="cursor: hand" id="dosysmenu"> 
                      <table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr> 
                          <td><div align="center"><IMG height=32 src="__STATIC__/admin/adminstyle/1/images/system.png" width=32 border=0 title="系统设置"></div></td>
                        </tr>
                        <tr> 
                          <td height="20">
<div align="center"><font color="#FFFFFF"><strong>系统</strong></font></div></td>
                        </tr>
                      </table></td>
                    <td width=60 onMouseOut="if(document.menuform.onclickmenu.value!='doinfomenu'){this.style.backgroundColor='';}" onMouseOver="if(document.menuform.onclickmenu.value!='doinfomenu'){this.style.backgroundColor='#8CBDEF';}" onClick="DoOnclickMenu('doinfomenu');switchSysBarInfo();JumpToLeftMenu('ListEnews.php');" style="cursor: hand" id="doinfomenu"> 
                      <table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr> 
                          <td><div align="center"><IMG height=32 src="__STATIC__/admin/adminstyle/1/images/info.png" width=32 border=0 title="信息管理"></div></td>
                        </tr>
                        <tr> 
                          <td height="20">
<div align="center"><font color="#FFFFFF"><strong>信息</strong></font></div></td>
                        </tr>
                      </table></td>
                    <td width=60 onMouseOut="if(document.menuform.onclickmenu.value!='doclassmenu'){this.style.backgroundColor='';}" onMouseOver="if(document.menuform.onclickmenu.value!='doclassmenu'){this.style.backgroundColor='#8CBDEF';}" onClick="DoOnclickMenu('doclassmenu');JumpToLeftMenu('adminstyle/1/left.php?ecms=classdata');" style="cursor: hand" id="doclassmenu"> 
                      <table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr> 
                          <td><div align="center"><img height=32 src="__STATIC__/admin/adminstyle/1/images/class.png" width=32 border=0 title="栏目管理"></div></td>
                        </tr>
                        <tr> 
                          <td height="20">
<div align="center"><font color="#FFFFFF"><strong>栏目</strong></font></div></td>
                        </tr>
                      </table></td>
                    <td width=60 onMouseOut="if(document.menuform.onclickmenu.value!='dotempmenu'){this.style.backgroundColor='';}" onMouseOver="if(document.menuform.onclickmenu.value!='dotempmenu'){this.style.backgroundColor='#8CBDEF';}" onClick="DoOnclickMenu('dotempmenu');JumpToLeftMenu('adminstyle/1/left.php?ecms=template');" style="cursor: hand" id="dotempmenu"> 
                      <table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr> 
                          <td><div align="center"><img src="__STATIC__/admin/adminstyle/1/images/template.png" width="32" height="32" border="0" title="模板管理"></div></td>
                        </tr>
                        <tr> 
                          <td height="20">
<div align="center"><font color="#FFFFFF"><strong>模板</strong></font></div></td>
                        </tr>
                      </table></td>
                    <td width=60 onMouseOut="if(document.menuform.onclickmenu.value!='dousermenu'){this.style.backgroundColor='';}" onMouseOver="if(document.menuform.onclickmenu.value!='dousermenu'){this.style.backgroundColor='#8CBDEF';}" onClick="DoOnclickMenu('dousermenu');JumpToLeftMenu('adminstyle/1/left.php?ecms=usercp');" style="cursor: hand" id="dousermenu"> 
                      <table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr> 
                          <td><div align="center"><IMG height=32 src="__STATIC__/admin/adminstyle/1/images/usercp.png" width=32 border=0 title="用户和会员"></div></td>
                        </tr>
                        <tr> 
                          <td height="20">
<div align="center"><font color="#FFFFFF"><strong>用户</strong></font></div></td>
                        </tr>
                      </table></td>
                    <td width=60 onMouseOut="if(document.menuform.onclickmenu.value!='dotoolmenu'){this.style.backgroundColor='';}" onMouseOver="if(document.menuform.onclickmenu.value!='dotoolmenu'){this.style.backgroundColor='#8CBDEF';}" onClick="DoOnclickMenu('dotoolmenu');JumpToLeftMenu('adminstyle/1/left.php?ecms=tool');" style="cursor: hand" id="dotoolmenu"> 
                      <table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr> 
                          <td><div align="center"><IMG height=32 src="__STATIC__/admin/adminstyle/1/images/tool.png" width=32 border=0 title="插件管理"></div></td>
                        </tr>
                        <tr> 
                          <td height="20">
<div align="center"><font color="#FFFFFF"><strong>插件</strong></font></div></td>
                        </tr>
                      </table></td>
					<td width=60 onMouseOut="if(document.menuform.onclickmenu.value!='doshopmenu'){this.style.backgroundColor='';}" onMouseOver="if(document.menuform.onclickmenu.value!='doshopmenu'){this.style.backgroundColor='#8CBDEF';}" onClick="DoOnclickMenu('doshopmenu');window.open('');" style="cursor: hand;" id="doshopmenu"> 
                      <table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr> 
                          <td><div align="center"><IMG height=32 src="__STATIC__/admin/adminstyle/1/images/shop.png" width=32 border=0 title="商城系统管理"></div></td>
                        </tr>
                        <tr> 
                          <td height="20">
<div align="center"><font color="#FFFFFF"><strong>商城</strong></font></div></td>
                        </tr>
                      </table></td>
                    <td width=60 onMouseOut="if(document.menuform.onclickmenu.value!='doothermenu'){this.style.backgroundColor='';}" onMouseOver="if(document.menuform.onclickmenu.value!='doothermenu'){this.style.backgroundColor='#8CBDEF';}" onClick="DoOnclickMenu('doothermenu');JumpToLeftMenu('adminstyle/1/left.php?ecms=other');" style="cursor: hand" id="doothermenu"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr> 
                          <td><div align="center"><IMG height=32 src="__STATIC__/admin/adminstyle/1/images/other.png" width=32 border=0 title="其他管理"></div></td>
                        </tr>
                        <tr> 
                          <td height="20">
<div align="center"><font color="#FFFFFF"><strong>其他</strong></font></div></td>
                        </tr>
                      </table></td>
					  <td width=60 onMouseOut="if(document.menuform.onclickmenu.value!='doextmenu'){this.style.backgroundColor='';}" onMouseOver="if(document.menuform.onclickmenu.value!='doextmenu'){this.style.backgroundColor='#8CBDEF';}" onClick="DoOnclickMenu('doextmenu');JumpToLeftMenu('adminstyle/1/left.php?ecms=extend');" style="cursor:hand;" id="doextmenu"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr> 
                          <td><div align="center"><IMG height=32 src="__STATIC__/admin/adminstyle/1/images/extend.png" width=32 border=0 title="扩展菜单项"></div></td>
                        </tr>
                        <tr> 
                          <td height="20">
<div align="center"><font color="#FFFFFF"><strong>扩展</strong></font></div></td>
                        </tr>
                      </table> </td>
                    <td width=60 onMouseOut="if(document.menuform.onclickmenu.value!='dofastmenu'){this.style.backgroundColor='';}" onMouseOver="if(document.menuform.onclickmenu.value!='dofastmenu'){this.style.backgroundColor='#8CBDEF';}" onClick="DoOnclickMenu('dofastmenu');JumpToLeftMenu('adminstyle/1/left.php?ecms=fastmenu');" style="cursor:hand;" id="dofastmenu"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr> 
                          <td><div align="center"><IMG height=32 src="__STATIC__/admin/adminstyle/1/images/fastmenu.png" width=32 border=0 title="常用操作"></div></td>
                        </tr>
                        <tr> 
                          <td height="20">
<div align="center"><font color="#FFFFFF"><strong>常用</strong></font></div></td>
                        </tr>
                      </table></td>
                    <td width="301"><div align="right"><font color="#ffffff">用户：<a href="user/EditPassword.php" target="main"><font color="#ffffff"><b>dddd</b></font></a>&nbsp;&nbsp;&nbsp;[<a href="#ecms" onClick="if(confirm('确认要退出?')){JumpToMain('ecmsadmin.php?enews=exit');}"><font color="#ffffff">退出</font></a>]&nbsp;&nbsp;</font></div></td>
                  </tr>
                </tbody>
              </table>
        
      </td>
      </tr>
    </tbody>
	</form>
  </table>

</td>
</tr>
<!-- 顶部菜单 /-->
<!-- 快捷菜单 -->
<tr><td height="22">

  <table width="100%" height="22" border=0 cellpadding="0" cellSpacing=0>
    <tbody>
      <tr> 
        <td class=flyoutMenu width="1%"> </td>   
		    <td width="99%" height="27"> 
              <table class=flyoutMenu border=0>
                <tbody>
                  <tr align=middle> 
                    <td width="60" class="flyoutlink" onClick="JumpToMain('AddInfoChClass.php');" onMouseOver="over(this)" onMouseOut="out(this)">增加信息</td>
                    <td width="60" class="flyoutlink" onClick="JumpToMain('ListAllInfo.php');" onMouseOver="over(this)" onMouseOut="out(this)">管理信息</td>
                    <td width="60" class="flyoutlink" onClick="JumpToMain('ListAllInfo.php?ecmscheck=1');" onMouseOver="over(this)" onMouseOut="out(this)">审核信息</td>
                    <td width="60" class="flyoutlink" onClick="JumpToMain('workflow/ListWfInfo.php');" onMouseOver="over(this)" onMouseOut="out(this)">签发信息</td>
					
                    <td width="60" class="flyoutlink" onClick="JumpToMain('');" onMouseOver="over(this)" onMouseOut="out(this)">管理评论</td>
					
                    <td width="60" class="flyoutlink" onClick="JumpToMain('');" onMouseOver="over(this)" onMouseOut="out(this)">更新碎片</td>
					<td width="60" class="flyoutlink" onClick="JumpToMain('');" onMouseOver="over(this)" onMouseOut="out(this)">更新专题</td>
					
                    <td width="60" class="flyoutlink" onClick="JumpToMain('');" onMouseOver="over(this)" onMouseOut="out(this)">数据更新</td>
					
					<td width="60" class="flyoutlink" onClick="JumpToMain(');" onMouseOver="over(this)" onMouseOut="out(this)">数据统计</td>
                    <td width="60" class="flyoutlink" onClick="JumpToMain('');" onMouseOver="over(this)" onMouseOut="out(this)">排行统计</td>
                    <td width="60" class="flyoutlink" onClick="JumpToMain('main.php');" onMouseOver="over(this)" onMouseOut="out(this)">后台首页</td>
                    <td width="60" class="flyoutlink" onClick="window.open('../../');" onMouseOver="over(this)" onMouseOut="out(this)">网站首页</td>
                    <td width="60" class="flyoutlink" onClick="window.open('map.php','','width=1250,height=760,scrollbars=auto,resizable=yes,top=80,left=120');" onMouseOver="over(this)" onMouseOut="out(this)">后台地图</td>
                    <td width="60" class="flyoutlink" onClick="window.open('http://bbs.phome.net/listthread-23-cms-page-0.html');" onMouseOver="over(this)" onMouseOut="out(this)">版本更新</td>
					<td width="60" class="flyoutlink" onClick="window.open('http://www.dede168.com');" onMouseOver="over(this)" onMouseOut="out(this)" style="color:#f00;">精品资源</td>
                  </tr>
                </tbody>
              </table>
            </td>
      </tr>
    </tbody>
  </table>

</td>
</tr>
<!-- 快捷菜单 /-->

<tr>
	<td height="100%" bgcolor="#ffffff">

  <table width="100%" height="100%" cellpadding="0" cellSpacing=0 border=0 borderColor="#ff0000">
  <tbody>
    <tr> 
      <!-- 定时任务 -->	
      <td width="123" valign="top" bgcolor="#C9F1FF">
		<iframe frameBorder="0" id="dorepage" name="dorepage" scrolling="no" src="" style="height:0;visibility:inherit;width:0;z-index:1"></iframe>
      </td>
      <!-- 定时任务 /-->
      <!-- 左边部菜单 -->
      <td noWrap id="frmtitle">
		<iframe frameBorder="0" id="left" name="left" scrolling="auto" src="<?php echo url('content/menu'); ?>" style="height:100%;visibility:inherit;width:200px;z-index:2"></iframe>
      </td>
      <!-- 左边菜单 /--> 
      <!-- 隐藏菜单 -->
      <td>
		<table border=0 cellPadding=0 cellSpacing=0 height="100%" bgcolor="#C9F1FF">
          <tbody>
            <tr> 
              <td onClick="switchSysBar()" style="height:100%;"> <font style="color:666666;cursor:hand;font-family:Webdings;font-size:9pt;"> 
                <span id="switchPoint" title="打开/关闭左边导航栏">3</span></font> 
          </tbody>
        </table>
      </td>
      <!-- 隐藏菜单 /-->
      <!-- 内容 -->
      <td width="100%">
		<table height="100%" cellSpacing=0 cellPadding=0 width="100%" align="right" border=0>
          <tbody>
            <tr> 
              <td align=right>
				<iframe id="main" name="main" style="width: 100%; height: 100%" src="<?php echo url('content/dataList'); ?>" frameBorder=0></iframe>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
      <!-- 内容 /-->
    </tr>
  </tbody>
  </table>

</td></tr>
</table>

</body>
</html>