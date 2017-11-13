<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\zrrcms\public/../application/admin\view\content\list.html";i:1508403192;}*/ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="__STATIC__/admin/adminstyle/1/adminstyle.css" type="text/css">
<title>管理信息</title>
<script>
function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.name != 'chkall')
       e.checked = form.chkall.checked;
    }
  }

function GetSelectId(form)
{
  var ids='';
  var dh='';
  for (var i=0;i<form.elements.length;i++)
  {
	var e = form.elements[i];
	if (e.name == 'id[]')
	{
	   if(e.checked==true)
	   {
       		ids+=dh+e.value;
			dh=',';
	   }
	}
  }
  return ids;
}

function PushInfoToSp(form)
{
	var id='';
	id=GetSelectId(form);
	if(id=='')
	{
		alert('请选择要推送的信息');
		return false;
	}
	//window.open('sp/PushToSp.php&classid=&id='+id,'PushToSp','width=360,height=500,scrollbars=yes,left=300,top=150,resizable=yes');
}

function PushInfoToZt(form)
{
	var id='';
	id=GetSelectId(form);
	if(id=='')
	{
		alert('请选择要推送的信息');
		return false;
	}
//	window.open('special/PushToZt.php?&classid=&id='+id,'PushToZt','width=360,height=500,scrollbars=yes,left=300,top=150,resizable=yes');
}
</script>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td width="52%">位置： 
     
    </td>
    <td width="48%"> <div align="right">[<a href="AddClass.php?enews=EditClass&classid=">栏目设置</a>] 
        [<a href="AddInfoClass.php?enews=AddInfoClass&newsclassid=">增加采集</a>] 
        [<a href="ListInfoClass.php">管理采集</a>] [<a href="ecmschtml.php?enews=ReAllNewsJs&from=">刷新所有信息JS</a>]</div></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="searchinfo" method="GET" action="ListNews.php">

    <tr> 
      <td width="35%">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="23%"> <div align="left" class="emenubutton"> 
                <input type=button name=button value="增加信息" onClick="self.location.href='AddNews.php?enews=AddNews&ecmsnfrom=1&bclassid=&classid='">
              </div></td>
            <td width="77%" title="增加信息后使用本操作将信息显示到前台"> <div align="right"> 
                <select name="dore">
                  <option value="1">刷新当前栏目</option>
                  <option value="2">刷新首页</option>
                  <option value="3">刷新父栏目</option>
                  <option value="4">刷新当前栏目与父栏目</option>
                  <option value="5">刷新父栏目与首页</option>
                  <option value="6" selected>刷新当前栏目、父栏目与首页</option>
                </select>
                <input type="button" name="Submit12" value="提交" onclick="self.location.href='ecmsinfo.php?&enews=AddInfoToReHtml&classid=&dore='+document.searchinfo.dore.value;">
              </div></td>
          </tr>
        </table>
      </td>
      <td width="65%">
<div align="right">搜索: 
          <select name="showspecial" id="showspecial">
            <option value="0">不限属性</option>
			<option value="1">置顶</option>
            <option value="2">推荐</option>
            <option value="3">头条</option>
			<option value="7">投稿</option>
            <option value="5">签发</option>
			<option value="8">我的信息</option>
          </select>
          <input name="keyboard" type="text" id="keyboard" value="" size="16">
          <select name="show">
            <option value="0" selected="">不限字段</option>
            <option value="title">标题</option>
            <option value="ftitle">副标题</option>
            <option value="newstime">发布时间</option>
            <option value="titlepic">标题图片</option>
            <option value="smalltext">内容简介</option>
            <option value="username">发布者</option>
            <option value="id">ID</option>          
         </select>
	
          <select name="infolday" id="infolday">
            <option value="1">全部时间</option>
            <option value="86400">1 天</option>
            <option value="172800">2 天</option>
          </select>
          <input type="submit" name="Submit2" value="搜索">
          
        </div>
    </td>
    </tr>
  </form>
</table>
<br>
<form name="listform" method="post" action="ecmsinfo.php" onsubmit="return confirm('确认要执行此操作？');">

  <table width="100%" border="0" cellspacing="1" cellpadding="0">
    <tbody><tr>
      <td width="10%" height="25" class="header" title="已发布信息总数：9"><div align="center"><a href="ListNews.php?bclassid=2&amp;classid=34&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt">已发布 (9)</a></div></td>
      <td width="10%" bgcolor="#C9F1FF" title="待审核信息总数：0"><div align="center"><a href="ListNews.php?bclassid=2&amp;classid=34&amp;ecmscheck=1&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt">待审核 (0)</a></div></td>
      <td width="10%" bgcolor="#C9F1FF"><div align="center"><a href="ListInfoDoc.php?bclassid=2&amp;classid=34&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt">归档</a></div></td>
      <td width="58%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
    </tr>
  </tbody>
</table>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  	<tr class="header"> 
      <td height="25" colspan="8"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr> 
            <td width="60%"><font color="#ffffff"><a href="ListNews.php?bclassid=2&amp;classid=34&amp;sear=1&amp;showspecial=8&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt">我的信息</a> 
              | <a href="ListNews.php?bclassid=2&amp;classid=34&amp;sear=1&amp;showspecial=5&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt">签发信息</a> 
              | <a href="ListNews.php?bclassid=2&amp;classid=34&amp;sear=1&amp;showspecial=7&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt">投稿信息</a> 
              | <a href="ListNews.php?bclassid=2&amp;classid=34&amp;showretitle=1&amp;srt=1&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt" title="查询重复标题，并保留一条信息">查询重复标题A</a> 
              | <a href="ListNews.php?bclassid=2&amp;classid=34&amp;showretitle=1&amp;srt=0&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt" title="查询重复标题的信息(不保留信息)">查询重复标题B</a> 
              | <a href="ecmsinfo.php?bclassid=2&amp;classid=34&amp;enews=SetAllCheckInfo&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt&amp;rhash_pZe3=NcKpngCopxGs" title="本栏目所有信息全设为审核状态" onclick="return confirm('确认要操作?');">审核栏目全部信息</a></font> 
            </td>
            <td width="40%"> <div align="right"><font color="#ffffff"><a href="openpage/AdminPage.php?leftfile=..%2Ffile%2FFileNav.php%3Fehash_kBSF%3DrD90MRfzOoeZTZStbUkt&amp;mainfile=..%2Ffile%2FListFile.php%3Ftype%3D9%26classid%3D34%26ehash_kBSF%3DrD90MRfzOoeZTZStbUkt&amp;title=%E7%AE%A1%E7%90%86%E9%99%84%E4%BB%B6&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt" target="_blank">管理附件</a> | <a href="ReHtml/ChangeData.php?ehash_kBSF=rD90MRfzOoeZTZStbUkt" target="_blank">更新数据</a> | <a href="../../" target="_blank">预览首页</a> | <a href="/news/china/" target="_blank">预览栏目</a></font></div></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td width="3%"><div align="center"></div></td>
      <td width="6%" height="25"><div align="center"><a href='ListNews.php?&myorder=4'><u>ID</u></a></div></td>
      <td width="36%" height="25"> <div align="center">标题</div></td>
      <td width="12%" height="25"><div align="center">发布者</div></td>
      <td width="16%" height="25"> <div align="center"><a href='ListNews.php?&myorder=1'><u>发布时间</u></a></div></td>
	  <td width="7%" height="25"><div align="center"><a href='ListNews.php?&myorder=3'><u>点击</u></a></div></td>
      <td width="6%"><div align="center"><a href='ListNews.php?&myorder=2'><u>评论</u></a></div></td>
      <td width="14%" height="25"> <div align="center">操作</div></td>
    </tr>
    
    <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'" id="news69" style="background-color: rgb(255, 255, 255);"> 
      <td><div align="center"> 
          <input name="id[]" type="checkbox" id="id[]" value="69">
		  <input name="infoid[]" type="hidden" value="69">
        </div></td>
      <td height="32"> <div align="center"> 
          <a href="ecmschtml.php?enews=ReSingleInfo&amp;classid=34&amp;id[]=69&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt&amp;rhash_pZe3=NcKpngCopxGs">69</a>        </div></td>
      <td height="25"> <div align="left"> 
                              <a href="/news/china/2012-12-10/69.html" target="_blank" title="广东丹霞山发现巨型\" 青铜剑\"(组图)"=""> 
          广东丹霞山发现巨型"青铜剑"(组图)          </a> 
                  </div></td>
      <td height="25"> <div align="center"> 
          admin        </div></td>
      <td height="25" title="增加时间：2012-12-10 15:28:29
最后修改：2012-12-10 15:28:29"> <div align="center"> 
		  <input name="newstime[]" type="text" value="2012-12-10 15:28:29" size="20">
        </div></td>
      <td height="25"> <div align="center"> <a title="下载次数:0"> 
          23          </a> </div></td>
      <td><div align="center"><a href="pl/ListPl.php?id=69&amp;classid=34&amp;bclassid=2&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt" target="_blank" title="管理评论"><u> 
          0          </u></a></div></td>
      <td height="25"> <div align="center"><a href="AddNews.php?enews=EditNews&amp;id=69&amp;classid=34&amp;bclassid=2&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt">修改</a> | <a href="#empirecms" onclick="window.open('info/EditInfoSimple.php?enews=EditNews&amp;id=69&amp;classid=34&amp;bclassid=2&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt','EditInfoSimple','width=600,height=360,scrollbars=yes,resizable=yes');">简改</a> | <a href="ecmsinfo.php?enews=DelNews&amp;id=69&amp;classid=34&amp;bclassid=2&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt&amp;rhash_pZe3=NcKpngCopxGs" onclick="return confirm('确认要删除？');">删除</a>
        </div></td>
    </tr>

    <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'" id="news69" style="background-color: rgb(255, 255, 255);"> 
      <td><div align="center"> 
          <input name="id[]" type="checkbox" id="id[]" value="69">
		  <input name="infoid[]" type="hidden" value="69">
        </div></td>
      <td height="32"> <div align="center"> 
          <a href="ecmschtml.php?enews=ReSingleInfo&amp;classid=34&amp;id[]=69&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt&amp;rhash_pZe3=NcKpngCopxGs">69</a>        </div></td>
      <td height="25"> <div align="left"> 
                              <a href="/news/china/2012-12-10/69.html" target="_blank" title="广东丹霞山发现巨型\" 青铜剑\"(组图)"=""> 
          广东丹霞山发现巨型"青铜剑"(组图)          </a> 
                  </div></td>
      <td height="25"> <div align="center"> 
          admin        </div></td>
      <td height="25" title="增加时间：2012-12-10 15:28:29
最后修改：2012-12-10 15:28:29"> <div align="center"> 
		  <input name="newstime[]" type="text" value="2012-12-10 15:28:29" size="20">
        </div></td>
      <td height="25"> <div align="center"> <a title="下载次数:0"> 
          23          </a> </div></td>
      <td><div align="center"><a href="pl/ListPl.php?id=69&amp;classid=34&amp;bclassid=2&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt" target="_blank" title="管理评论"><u> 
          0          </u></a></div></td>
      <td height="25"> <div align="center"><a href="AddNews.php?enews=EditNews&amp;id=69&amp;classid=34&amp;bclassid=2&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt">修改</a> | <a href="#empirecms" onclick="window.open('info/EditInfoSimple.php?enews=EditNews&amp;id=69&amp;classid=34&amp;bclassid=2&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt','EditInfoSimple','width=600,height=360,scrollbars=yes,resizable=yes');">简改</a> | <a href="ecmsinfo.php?enews=DelNews&amp;id=69&amp;classid=34&amp;bclassid=2&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt&amp;rhash_pZe3=NcKpngCopxGs" onclick="return confirm('确认要删除？');">删除</a>
        </div></td>
    </tr>





    <tr bgcolor="#FFFFFF"> 
      <td height="25"> <div align="center">
          <input type=checkbox name=chkall value=on onClick="CheckAll(this.form)">
        </div></td>
      <td height="25" colspan="7"><div align="right">
          <input type="submit" name="Submit3" value="删除" onClick="document.listform.enews.value='DelNews_all';document.listform.action='ecmsinfo.php';">
		
		  <input type="submit" name="Submit8" value="审核" onClick="document.listform.enews.value='CheckNews_all';document.listform.action='ecmsinfo.php';">
		  
		  <input type="submit" name="Submit9" value="取消审核" onClick="document.listform.enews.value='NoCheckNews_all';document.listform.action='ecmsinfo.php';">
		  <input type="submit" name="Submit8" value="刷新" onClick="document.listform.enews.value='ReSingleInfo';document.listform.action='ecmschtml.php';">
		  <input type="button" name="Submit112" value="推送" onClick="PushInfoToSp(this.form);">
		 
          <select name="isgood" id="isgood">
            <option value="0">不推荐</option>
			
          </select>
          <input type="submit" name="Submit82" value="推荐" onClick="document.listform.enews.value='GoodInfo_all';document.listform.doing.value='0';document.listform.action='ecmsinfo.php';">
          <select name="firsttitle" id="firsttitle">
            <option value="0">取消头条</option>
           
          </select>
          <input type="submit" name="Submit823" value="头条" onClick="document.listform.enews.value='GoodInfo_all';document.listform.doing.value='1';document.listform.action='ecmsinfo.php';">
          <input type="submit" name="Submit11" value="归档" onClick="document.listform.enews.value='InfoToDoc';document.listform.doing.value='0';document.listform.action='ecmsinfo.php';">
          <select name="istop" id="select">
            <option value="0">不置顶</option>
            <option value="1">一级置顶</option>
            <option value="2">二级置顶</option>
            <option value="3">三级置顶</option>
            <option value="4">四级置顶</option>
            <option value="5">五级置顶</option>
            <option value="6">六级置顶</option>
			<option value="7">七级置顶</option>
			<option value="8">八级置顶</option>
			<option value="9">九级置顶</option>
          </select>
          <input type="submit" name="Submit7" value="置顶" onClick="document.listform.enews.value='TopNews_all';document.listform.action='ecmsinfo.php';">
		  <input type="submit" name="Submit7" value="修改时间" onClick="document.listform.enews.value='EditMoreInfoTime';document.listform.action='ecmsinfo.php';">
		  <input type="button" name="Submit52" value="推送至专题" onClick="PushInfoToZt(this.form);">
        </div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="8"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="68%"> 
            
            </td>
            <td width="32%"> 
            	<div align="right">
			<span id="moveclassnav">
				<select name="to_classid" id="to_classid">
					<option value="0">选择要移动/复制的目标栏目</option>
					<option value="2">|-新闻中心</option>
					<option value="34" style="background:#99C4E3">&nbsp;&nbsp;|-国内新闻</option>
					<option value="35" style="background:#99C4E3">&nbsp;&nbsp;|-国际新闻</option>
					<option value="36" style="background:#99C4E3">&nbsp;&nbsp;|-娱乐新闻</option>
					<option value="37" style="background:#99C4E3">&nbsp;&nbsp;|-体育新闻</option>
					<option value="3">|-下载中心</option>
					<option value="38" style="background:#99C4E3">&nbsp;&nbsp;|-系统软件</option>
					<option value="39" style="background:#99C4E3">&nbsp;&nbsp;|-网络工具</option>
					<option value="40" style="background:#99C4E3">&nbsp;&nbsp;|-安全相关</option>
					<option value="41" style="background:#99C4E3">&nbsp;&nbsp;|-媒体工具</option>
					<option value="4">|-影视频道</option>
			    </select>
		    </span>
                <input type="submit" name="Submit5" value="移动" onclick="document.listform.enews.value='MoveNews_all';document.listform.action='ecmsinfo.php';">
                <input type="submit" name="Submit6" value="复制" onclick="document.listform.enews.value='CopyNews_all';document.listform.action='ecmsinfo.php';">
              </div>
            </td>
          </tr>
        </table></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="8"> <font color="#666666">备注：多选框蓝色为未审核信息；发布者红色为会员投稿；信息ID粗体为未生成,点击ID可刷新页面.</font></td>
    </tr>
  </table>
</form>
<IFRAME frameBorder="0" id="showclassnav" name="showclassnav" scrolling="no" src="" style="HEIGHT:0;VISIBILITY:inherit;WIDTH:0;Z-INDEX:1"></IFRAME>
</body>
</html>