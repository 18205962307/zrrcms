<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpStudy\WWW\zrrcms\public/../application/admin\view\content\addActile.html";i:1508403192;}*/ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<link rel="stylesheet" href="__STATIC__/admin/adminstyle/1/adminstyle.css" type="text/css">
<link id="luna-tab-style-sheet" type="text/css" rel="stylesheet" href="__STATIC__/admin/adminstyle/1/tab.winclassic.css"> 
<title>管理栏目</title>
<!-- the id is not needed. It is used here to be able to change css file at runtime -->
<style type="text/css"> 
   .dynamic-tab-pane-control .tab-page { 
          width: 100%;
 } 
  .dynamic-tab-pane-control .tab-page .dynamic-tab-pane-control .tab-page { 
         height:150px; 
 } 
  form { 
         margin:0; 
         padding:0; 
 } 
  /* over ride styles from webfxlayout */ 
  .dynamic-tab-pane-control h2 { 
     font-size:12px;
     font-weight:normal;
     text-align:center; 
     width:auto;
     height:20; 
 } 
   .dynamic-tab-pane-control h2 a { 
    display:inline; 
    width:auto; 
 } 
  .dynamic-tab-pane-control a:hover { 
    background: transparent; 
 } 
  </style>
 <script type="text/javascript" src="__STATIC__/admin/images/tabpane.js"></script> <script type="text/javascript"> 
  function setLinkSrc( sStyle ) { 
         document.getElementById( "luna-tab-style-sheet" ).disabled = sStyle != "luna"; 
  
         //document.documentElement.style.background = "";
         //document.body.style.background = sStyle == "webfx" ? "white" : "ThreeDFace"; 
 } 
function chgBg(obj,color){
 if (document.all || document.getElementById)
   obj.style.backgroundColor=color;
 else if (document.layers)
   obj.bgColor=color;
}
  setLinkSrc( "luna" ); 
  </script>
  
<script>
function small_class(mycheck)
{
if(mycheck)
{
document.getElementById('smallclass').style.display="";
document.getElementById('smallclasssetinfo').style.display="";
document.getElementById('smallclasssettemp').style.display="";
document.getElementById('bigclasssettemp').style.display="none";
document.getElementById('bigclasssetclasstext').style.display="none";
document.getElementById('smallcgtoinfo').style.display="";
document.getElementById('smallclassbdinfo').style.display="";
}
else
{
document.getElementById('smallclass').style.display="none";
document.getElementById('smallclasssetinfo').style.display="none";
document.getElementById('smallclasssettemp').style.display="none";
document.getElementById('bigclasssettemp').style.display="";
document.getElementById('bigclasssetclasstext').style.display="";
document.getElementById('smallcgtoinfo').style.display="none";
document.getElementById('smallclassbdinfo').style.display="none";
}
}

function mybclass()
{
bclass=new Array();
bclass[0]=new Array();
bclass[0][0]='';
bclass[2]=new Array();
bclass[2][0]="news/";
bclass[3]=new Array();
bclass[3][0]="download/";
bclass[4]=new Array();
bclass[4][0]="movie/";
bclass[5]=new Array();
bclass[5][0]="shop/";
bclass[6]=new Array();
bclass[6][0]="flash/";
bclass[7]=new Array();
bclass[7][0]="photo/";
bclass[8]=new Array();
bclass[8][0]="article/";
bclass[9]=new Array();
bclass[9][0]="info/";
bclass[10]=new Array();
bclass[10][0]="info/fwxx/";
bclass[11]=new Array();
bclass[11][0]="info/fwxx/fwqz/";
bclass[12]=new Array();
bclass[12][0]="info/fwxx/fwcz/";
bclass[13]=new Array();
bclass[13][0]="info/fwxx/fwqg/";
bclass[14]=new Array();
bclass[14][0]="info/fwxx/fwcs/";
bclass[15]=new Array();
bclass[15][0]="info/fwxx/bgyf/";
bclass[16]=new Array();
bclass[16][0]="info/fwxx/wpmm/";
bclass[17]=new Array();
bclass[17][0]="info/tzsc/";
bclass[18]=new Array();
bclass[18][0]="info/tzsc/dnpj/";
bclass[19]=new Array();
bclass[19][0]="info/tzsc/dnsm/";
bclass[20]=new Array();
bclass[20][0]="info/tzsc/txcp/";
bclass[21]=new Array();
bclass[21][0]="info/tzsc/jjyp/";
bclass[22]=new Array();
bclass[22][0]="info/tcsh/";
bclass[23]=new Array();
bclass[23][0]="info/tcsh/bdxw/";
bclass[24]=new Array();
bclass[24][0]="info/tcsh/gwdz/";
bclass[25]=new Array();
bclass[25][0]="info/tcsh/lyhd/";
bclass[26]=new Array();
bclass[26][0]="info/tcsh/bmgs/";
bclass[27]=new Array();
bclass[27][0]="info/qzzp/";
bclass[28]=new Array();
bclass[28][0]="info/qzzp/gcjs/";
bclass[29]=new Array();
bclass[29][0]="info/qzzp/cwkj/";
bclass[30]=new Array();
bclass[30][0]="info/qzzp/jyhy/";
bclass[31]=new Array();
bclass[31][0]="info/qzzp/jygl/";
bclass[34]=new Array();
bclass[34][0]="news/china/";
bclass[35]=new Array();
bclass[35][0]="news/world/";
bclass[36]=new Array();
bclass[36][0]="news/ent/";
bclass[37]=new Array();
bclass[37][0]="news/sports/";
bclass[38]=new Array();
bclass[38][0]="download/system/";
bclass[39]=new Array();
bclass[39][0]="download/netsoft/";
bclass[40]=new Array();
bclass[40][0]="download/safe/";
bclass[41]=new Array();
bclass[41][0]="download/media/";
bclass[42]=new Array();
bclass[42][0]="movie/dongzuo/";
bclass[43]=new Array();
bclass[43][0]="movie/aiqing/";
bclass[44]=new Array();
bclass[44][0]="movie/xiju/";
bclass[45]=new Array();
bclass[45][0]="movie/lianxuju/";
bclass[46]=new Array();
bclass[46][0]="shop/shoujishuma/";
bclass[47]=new Array();
bclass[47][0]="shop/jiayongdianqi/";
bclass[48]=new Array();
bclass[48][0]="shop/pinpaidiannao/";
bclass[49]=new Array();
bclass[49][0]="shop/tushuzazhi/";
bclass[50]=new Array();
bclass[50][0]="flash/youxi/";
bclass[51]=new Array();
bclass[51][0]="flash/yinle/";
bclass[52]=new Array();
bclass[52][0]="photo/mingxing/";
bclass[53]=new Array();
bclass[53][0]="photo/fengjing/";
bclass[54]=new Array();
bclass[54][0]="photo/dongman/";
bclass[55]=new Array();
bclass[55][0]="article/xiaoshuo/";
bclass[56]=new Array();
bclass[56][0]="article/sanwen/";
bclass[57]=new Array();
bclass[57][0]="article/shige/";
}
mybclass();

function changeitem(myfrm)
{var SelectedBigId;
SelectedBigId=myfrm.bclassid.options[myfrm.bclassid.selectedIndex].value;
myfrm.pripath.value=bclass[SelectedBigId][0];
  if(myfrm.enews.value=='EditClass')
  {
    if(!myfrm.ecmsclasstype.value==1)
    {
      myfrm.classpath.focus();
    }
  }
  else
  {
    if(!myfrm.ecmsclasstype[1].checked)
    {
      myfrm.classpath.focus();
    }
  }
}

//检查
function CheckForm(obj)
{
if(obj.classname.value=="")
{
alert("请输入栏目名称");
return false;
}
if(obj.enews.value=='EditClass')
{
  if(obj.ecmsclasstype.value==1)
  {
    return true;
  }
}
else
{
  if(obj.ecmsclasstype[1].checked)
  {
    return true;
  }
}
if(obj.classpath.value=="")
{
alert("请输入栏目目录");
return false;
}
//终极栏目
if(obj.islast.checked)
{
  if(obj.modid.value==0||obj.modid.value=="")
  {
  alert("请选择所属系统模型");
  return false;
  }
  if(obj.listtempid.value==0)
  {
  alert("请到“模板选项”选择列表模板");
  return false;
  }
  if(obj.newstempid.value==0)
  {
  alert("请到“模板选项”选择内容模板");
  return false;
  }
  if(obj.filetype.value=="")
  {
  alert("请输入信息文件扩展名");
  return false;
  }
}
//大栏目
else
{
  if(obj.islist[1].checked&&obj.listtempid.value==0)//列表式
  {
    alert("请到“模板选项”选择列表模板");
    return false;
  }
  else if(obj.islist[0].checked&&obj.classtempid.value==0)
  {
    alert("到“模板选项”选择封面模板");
    return false;
  }
  else if(obj.islist[2].checked&&obj.classtext.value=='')
  {
    alert("请到“模板选项”设置页面内容");
    return false;
  }
}
return true;
}

//修改绑定信息
function EditBdInfo(obj){
  var infoid=obj.bdinfoid.value;
  var r;
  r=infoid.split(',');
  if(infoid==''||r.length==1)
  {
    alert('请输入绑定信息ID');
    return false;
  }
  window.open('AddNews.php?&ehash_kBSF=rD90MRfzOoeZTZStbUkt&enews=EditNews&classid='+r[0]+'&id='+r[1]);
}

//修改绑定信息
function EditSmallBdInfo(obj){
  var infoid=obj.smallbdinfoid.value;
  var r;
  r=infoid.split(',');
  if(infoid==''||r.length==1)
  {
    alert('请输入绑定信息ID');
    return false;
  }
  window.open('AddNews.php?&ehash_kBSF=rD90MRfzOoeZTZStbUkt&enews=EditNews&classid='+r[0]+'&id='+r[1]);
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="6" cellspacing="1">
  <tbody><tr>
    <td>位置：<a href="ListClass.php?ehash_kBSF=rD90MRfzOoeZTZStbUkt">栏目管理</a>&nbsp;&gt;&nbsp;增加栏目 </td>
  </tr>
</tbody></table>
  <form name="form1" method="post" action="ecmsclass.php" onsubmit="return CheckForm(document.form1);"> 
  <div class="dynamic-tab-pane-control tab-pane" id="TabPane1">
  
    <script type="text/javascript">
tb1 = new WebFXTabPane( document.getElementById( "TabPane1" ) );
</script>
<div class="tab-page" id="baseinfo"> 
   <h2 class="tab">&nbsp;<font class=tabcolor>基本属性</font>&nbsp;</h2>
   <script type="text/javascript">tb1.addTabPage( document.getElementById( "baseinfo" ) );</script>
                    
      <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <input type="hidden" name="enews" value="AddClass">
        <tbody><tr class="header"> 
          <td height="30" colspan="2">增加栏目</td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">栏目名称</td>
          <td> <input name="classname" type="text" id="classname" value="" size="38"> 
                        <input type="button" name="Submit5" value="生成拼音目录" onclick="window.open('GetPinyin.php?hz='+document.form1.classname.value+'&amp;returnform=opener.document.form1.classpath.value&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt&amp;rhash_pZe3=NcKpngCopxGs','','width=160,height=100');"> 
                        <input name="oldbclassid" type="hidden" id="oldbclassid" value=""> 
            <input name="classid" type="hidden" id="classid" value="0"> 
            <input name="oldclassname" type="hidden" id="oldclassname" value=""> 
            <input name="oldislast" type="hidden" id="oldislast" value=""> 
            <input name="filepass" type="hidden" id="filepass" value="1508141515"></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25">栏目别名</td>
          <td><input name="bname" type="text" id="bname" value="" size="38"> 
            <font color="#666666">(为空则与栏目名相同)</font></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25" valign="top">所属父栏目</td>
          <td><select name="bclassid" size="12" id="bclassid" onchange="javascript:changeitem(document.form1);" style="width:320">
              <option value="0" selected="">根栏目</option>
              <option value="2">|-新闻中心</option><option value="34" style="background:#99C4E3">&nbsp;&nbsp;|-国内新闻</option><option value="35" style="background:#99C4E3">&nbsp;&nbsp;|-国际新闻</option><option value="36" style="background:#99C4E3">&nbsp;&nbsp;|-娱乐新闻</option><option value="37" style="background:#99C4E3">&nbsp;&nbsp;|-体育新闻</option><option value="3">|-下载中心</option><option value="38" style="background:#99C4E3">&nbsp;&nbsp;|-系统软件</option><option value="39" style="background:#99C4E3">&nbsp;&nbsp;|-网络工具</option><option value="40" style="background:#99C4E3">&nbsp;&nbsp;|-安全相关</option><option value="41" style="background:#99C4E3">&nbsp;&nbsp;|-媒体工具</option><option value="4">|-影视频道</option><option value="42" style="background:#99C4E3">&nbsp;&nbsp;|-动作片</option><option value="43" style="background:#99C4E3">&nbsp;&nbsp;|-爱情片</option><option value="44" style="background:#99C4E3">&nbsp;&nbsp;|-喜剧片</option><option value="45" style="background:#99C4E3">&nbsp;&nbsp;|-连续剧</option><option value="5">|-网上商城</option><option value="46" style="background:#99C4E3">&nbsp;&nbsp;|-手机数码</option><option value="47" style="background:#99C4E3">&nbsp;&nbsp;|-家用电器</option><option value="48" style="background:#99C4E3">&nbsp;&nbsp;|-品牌电脑</option><option value="49" style="background:#99C4E3">&nbsp;&nbsp;|-图书杂志</option><option value="6">|-FLASH频道</option><option value="50" style="background:#99C4E3">&nbsp;&nbsp;|-游戏</option><option value="51" style="background:#99C4E3">&nbsp;&nbsp;|-音乐MV</option><option value="7">|-图片频道</option><option value="52" style="background:#99C4E3">&nbsp;&nbsp;|-明星风采</option><option value="53" style="background:#99C4E3">&nbsp;&nbsp;|-自然风景</option><option value="54" style="background:#99C4E3">&nbsp;&nbsp;|-动漫图片</option><option value="8">|-文章中心</option><option value="55" style="background:#99C4E3">&nbsp;&nbsp;|-小说</option><option value="56" style="background:#99C4E3">&nbsp;&nbsp;|-散文</option><option value="57" style="background:#99C4E3">&nbsp;&nbsp;|-诗歌</option><option value="9">|-分类信息</option><option value="10">&nbsp;&nbsp;|-房屋信息</option><option value="11" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-房屋求租</option><option value="12" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-房屋出租</option><option value="13" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-房屋求购</option><option value="14" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-房屋出售</option><option value="15" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-办公用房</option><option value="16" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-旺铺门面</option><option value="17">&nbsp;&nbsp;|-跳蚤市场</option><option value="18" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-电脑配件</option><option value="19" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-电器数码</option><option value="20" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-通讯产品</option><option value="21" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-居家用品</option><option value="22">&nbsp;&nbsp;|-同城生活</option><option value="23" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-本地新闻</option><option value="24" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-购物打折</option><option value="25" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-旅游活动</option><option value="26" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-便民告示</option><option value="27">&nbsp;&nbsp;|-求职招聘</option><option value="28" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-工程技术</option><option value="29" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-财务会计</option><option value="30" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-餐饮行业</option><option value="31" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-经营管理</option>            </select> </td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25">栏目类型</td>
          <td> 
                        <input name="ecmsclasstype" type="radio" value="0" checked="" onclick="wbclass.style.display='none';nbclass.style.display='';">
            内部栏目 
            <input type="radio" name="ecmsclasstype" value="1" onclick="wbclass.style.display='';nbclass.style.display='none';">
            外部栏目<font color="#666666">(选择后不能修改)</font> 
                      </td>
        </tr>
        </tbody><tbody id="wbclass" style="display:none">
          <tr bgcolor="#FFFFFF"> 
            <td height="25">&nbsp;</td>
            <td>外部栏目链接地址： 
              <input name="wburl" type="text" id="wburl" value="" size="38">
              <input name="oldwburl" type="hidden" id="oldwburl" value=""></td>
          </tr>
        </tbody>
        <tbody id="nbclass">
          <tr bgcolor="#FFFFFF"> 
            <td height="25">是否终级栏目</td>
            <td> 
              <input name="islast" type="checkbox" id="islast" onclick="small_class(this.checked)" value="1">是              <font color="#FF0000">(终级栏目下才能增加信息)</font></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25" valign="top">栏目存放文件夹 
              <input name="oldclasspath" type="hidden" id="oldclasspath" value=""> 
              <br> <input name="oldcpath" type="hidden" id="oldcpath" value=""></td>
            <td><table border="0" cellspacing="1" cellpadding="3">
                <tbody><tr bgcolor="DBEAF5"> 
                  <td>&nbsp;</td>
                  <td bgcolor="DBEAF5">上层栏目目录</td>
                  <td>本栏目目录</td>
                  <td bgcolor="DBEAF5">&nbsp;</td>
                </tr>
                <tr> 
                  <td><div align="right">根目录/</div></td>
                  <td><input name="pripath" type="text" id="pripath" value="" size="30">                  </td>
                  <td><input name="classpath" type="text" id="classpath3" value="" size="16"></td>
                  <td> <div align="left"> 
                      <input type="button" name="Submit3" value="检测目录" onclick="javascript:window.open('ecmscom.php?&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt&amp;rhash_pZe3=NcKpngCopxGs&amp;enews=CheckPath&amp;pripath='+document.form1.pripath.value+'&amp;classpath='+document.form1.classpath.value,'','width=100,height=100,top=250,left=450');">
                    </div></td>
                </tr>
              </tbody></table></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td width="23%" height="25">绑定的系统模型</td>
            <td width="77%"><select name="modid" id="modid">
                <option value="1">新闻系统模型</option><option value="2">下载系统模型</option><option value="3">图片系统模型</option><option value="4">FLASH系统模型</option><option value="5">电影系统模型</option><option value="6">商城系统模型</option><option value="7">文章系统模型</option><option value="8">分类信息系统模型</option>              </select> <input type="button" name="Submit6" value="管理系统模型" onclick="window.open('db/ListTable.php?ehash_kBSF=rD90MRfzOoeZTZStbUkt');">
              * 
              <input name="oldmodid" type="hidden" id="oldmodid" value=""></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="25">使用优化方案</td>
            <td><select name="yhid" id="yhid">
        <option name="0">不使用</option>
                              </select> 
              <input type="button" name="Submit63" value="管理优化方案" onclick="window.open('db/ListYh.php?ehash_kBSF=rD90MRfzOoeZTZStbUkt');">            </td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">绑定域名</td>
            <td><input name="classurl" type="text" id="classurl" value="" size="38"> 
              <input name="UrlToSmall" type="checkbox" id="UrlToSmall" value="1">
              应用于子栏目<font color="#666666"> (没有绑定，请留空.后面无需加"/")</font></td>
          </tr>
        </tbody>
        <tbody><tr bgcolor="#FFFFFF"> 
          <td height="25">栏目缩略图</td>
          <td><input name="classimg" type="text" id="classimg" value="" size="38"> 
            <a onclick="window.open('ecmseditor/FileMain.php?modtype=1&amp;type=1&amp;classid=&amp;doing=2&amp;field=classimg&amp;filepass=1508141515&amp;sinfo=1&amp;ehash_kBSF=rD90MRfzOoeZTZStbUkt','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="__STATIC__/admin/images/changeimg.gif" width="22" height="22" border="0" align="absbottom"></a></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25" valign="top">页面关键字</td>
          <td><input name="classpagekey" type="text" id="classpagekey" value="" size="38"></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25" valign="top">图片上传</td>
          <td></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25" valign="top">栏目简介</td>
          <td><textarea name="intro" cols="70" rows="8" id="intro"></textarea></td>
        </tr>
         <script type="text/javascript" charset="utf-8" src="__STATIC__/js/ueditor/ueditor.config.js"></script>
          <script type="text/javascript" charset="utf-8" src="__STATIC__/js/ueditor/ueditor.all.min.js"> </script>
        <tr bgcolor="#FFFFFF"> 
          <td height="25" valign="top">文章内容</td>
          <td>
            <script id="editor" type="text/plain" style="width:100%;height: 300px;" ></script>
            <script type="text/javascript">
                var ue = UE.getEditor('editor');
            </script>
          </td>
        </tr>
          </tbody>
        </table>
  </div>
  <div class="tab-page" id="changevar"> 
      <h2 class="tab">&nbsp;<font class="tabcolor">选项设置</font>&nbsp;</h2>
                    <script type="text/javascript">tb1.addTabPage( document.getElementById( "changevar" ) );</script>
      <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr class="header"> 
          <td height="30" colspan="2">栏目选项</td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">是否显示到导航</td>
          <td><input type="radio" name="showclass" value="0">
            显示 
            <input type="radio" name="showclass" value="1">
            不显示<font color="#666666">（如：导航标签，地图标签）</font></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25">显示排序</td>
          <td><input name="myorder" type="text" id="myorder" value=""> 
            <font color="#666666">(值越小越前面)</font></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25">栏目访问权限</td>
          <td></td>
        </tr>
        <tr bgcolor="#FFFFFF" id="smallcgtoinfo"> 
          <td height="25" valign="top">&nbsp;</td>
          <td><input name="cgtoinfo" type="checkbox" id="cgtoinfo" value="1">
            访问权限应用于信息<font color="#666666">(选择后信息的查看权限可以不设置)</font></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25">开启前台投稿</td>
          <td><input type="radio" name="openadd" value="0">
            开启 
            <input type="radio" name="openadd" value="1">
            关闭 
            <input name="oldopenadd" type="hidden" id="oldopenadd" value="">          
          </td>
        </tr>
        <tbody id="smallclass">
          <tr> 
            <td>前台投稿设置</td>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>验证码</td>
            <td height="25"> 开启验证码: 
              <input name="qaddshowkey" type="checkbox" id="qaddshowkey2" value="1">            </td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>投稿权限<font color="#666666">(不选为不限)</font></td>
            <td height="25"> 
                        </td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>投稿生成列表</td>
            <td height="25"><p> 
                <select name="qaddlist" id="qaddlist">
                  <option value="0">不生成</option>
                  <option value="1">生成当前栏目</option>
                  <option value="2">生成首页</option>
                  <option value="3">生成父栏目</option>
                  <option value="4">生成当前栏目与父栏目</option>
                  <option value="5">生成父栏目与首页</option>
                  <option value="6">生成当前栏目、父栏目与首页</option>
                </select>
              </p></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>投稿审核</td>
            <td height="25"> <input type="radio" name="checkqadd" value="0">
              需要审核 
              <input type="radio" name="checkqadd" value="1">
              无需审核</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>发布信息增加</td>
            <td height="25"> <input name="addinfofen" type="text" id="addinfofen2" value="" size="6">
              点数 <font color="#666666">(不增加请设为0,扣点请设为负数，使用此项需将投稿权限设置为会员以上)</font></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>管理投稿</td>
            <td height="25"><strong> 
              <select name="adminqinfo" id="adminqinfo">
                <option value="0">不能管理信息</option>
                <option value="1">可管理未审核信息</option>
                <option value="2">只可编辑未审核信息</option>
                <option value="3">只可删除未审核信息</option>
                <option value="4">可管理所有信息</option>
                <option value="5">只可编辑所有信息</option>
                <option value="6">只可删除所有信息</option>
              </select>
              <input name="qeditchecked" type="checkbox" id="qeditchecked" value="1">
              </strong>编辑信息需要审核</td>
          </tr>
          <tr> 
            <td valign="top">后台信息发布设置</td>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>增加/编辑信息</td>
            <td height="25"> <input name="addreinfo" type="checkbox" id="addreinfo" value="1">
              生成内容页；生成列表： 
              <select name="haddlist" id="haddlist">
                <option value="0">不生成</option>
                <option value="1">生成当前栏目</option>
                <option value="2">生成首页</option>
                <option value="3">生成父栏目</option>
                <option value="4">生成当前栏目与父栏目</option>
                <option value="5">生成父栏目与首页</option>
                <option value="6">生成当前栏目、父栏目与首页</option>
              </select></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>&nbsp;</td>
            <td height="25"><input name="repreinfo" type="checkbox" id="repreinfo2" value="1">
              生成上一篇信息</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>&nbsp;</td>
            <td height="25"><input name="sametitle" type="checkbox" id="sametitle" value="1">
              检测标题重复</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>审核设置</td>
            <td height="25"><input name="checked" type="checkbox" id="checked" value="1">
              直接审核</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td>使用工作流</td>
            <td height="25"><select name="wfid" id="wfid">
                <option value="0">不使用工作流</option>
               
              </select></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">信息预设投票</td>
            <td><select name="definfovoteid" id="definfovoteid">
                <option value="0">不设置</option>
             
              </select> <input type="button" name="Submit622" value="管理预设投票" onclick="window.open('other/ListVoteMod.php');"> 
              <font color="#666666">(增加信息时默认的投票项)</font></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">默认查看信息权限</td>
            <td><select name="groupid" id="groupid">
                <option value="0">游客</option>
             
              </select> <font color="#666666">(增加信息时默认的会员组权限)</font></td>
          </tr>
          <tr> 
            <td valign="top">其他设置</td>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td width="23%" valign="top">评论功能</td>
            <td height="25"><input type="radio" name="openpl" value="0">
              开启 
              <input type="radio" name="openpl" value="1">
              关闭，评论需要审核: 
              <input name="checkpl" type="checkbox" id="checkpl2" value="1">
              是</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">信息归档</td>
            <td>归档大于 
              <input name="doctime" type="text" id="doctime" value="" size="6">
              天的信息<font color="#666666">(0为不归档)</font></td>
          </tr>
          <tr> 
            <td>特殊模型设置</td>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td width="23%" height="25">下载/影视模型</td>
            <td height="25">每行显示 
              <input name="down_num" type="text" id="link_num3" value="" size="5">
              个下载地址， 
              <input name="online_num" type="text" id="down_num" value="" size="5">
              个在线观看地址</td>
          </tr>
        </tbody>
      </table>
  </div>
   <div class="tab-page" id="settemplate"> 
      <h2 class="tab">&nbsp;<font class="tabcolor">模板选项</font>&nbsp;</h2>
                    <script type="text/javascript">tb1.addTabPage( document.getElementById( "settemplate" ) );</script>
      <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr class="header"> 
          <td height="30" colspan="2">模板设置</td>
        </tr>
    <tbody id="smallclassbdinfo">
      <tr bgcolor="#FFFFFF">
            <td height="25">栏目绑定信息</td>
            <td height="25">绑定信息ID：
              <input name="smallbdinfoid" type="text" id="smallbdinfoid" value="">
              <a href="#empirecms" onclick="EditSmallBdInfo(document.form1);">[修改信息]</a> <font color="#666666">(格式：栏目ID,信息ID)</font></td>
          </tr>
    </tbody>
        <tbody id="bigclasssettemp">
          <tr bgcolor="#FFFFFF"> 
            <td width="23%" height="25">页面显示模式</td>
            <td height="25"> <input type="radio" name="islist" value="0">
              封面式 
              <input type="radio" name="islist" value="1">
              列表式 
              <input type="radio" name="islist" value="2">
              页面内容式 
              <input type="radio" name="islist" value="3" onclick="bdinfo.style.display='';">
              栏目绑定信息 
              <input name="oldislist" type="hidden" id="oldislist" value=""></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">&nbsp;</td>
            <td height="25"><font color="#666666">说明：封面式要选择封面模板、列表式要选择列表模板、内容式要录入页面内容</font></td>
          </tr>
    
          <tr id="bdinfo" bgcolor="#FFFFFF">
            <td height="25">&nbsp;</td>
            <td height="25">绑定信息ID： 
              <input name="bdinfoid" type="text" id="bdinfoid" value="">
              <a href="#empirecms" onclick="EditBdInfo(document.form1);">[修改信息]</a> 
              <font color="#666666">(格式：栏目ID,信息ID)</font></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">封面模板</td>
            <td height="25"><select name="classtempid">
               
              </select> <input type="button" name="Submit6223" value="管理封面模板" onclick="window.open('template/ListClasstemp.php?gid=');"></td>
          </tr>
        </tbody>
        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">所属列表模板</td>
          <td> 静态： 
            <select name="listtempid" id="listtempid">
             
            </select>
            ，动态： 
            <select name="dtlisttempid">
             
            </select> <input type="button" name="Submit6222" value="管理列表模板" onclick="window.open('template/ListListtemp.php?gid=');">
            *</td>
        </tr>
        <tbody id="smallclasssettemp">
          <tr bgcolor="#FFFFFF"> 
            <td height="25">所属内容模板</td>
            <td><select name="newstempid" id="newstempid">
               
              </select> <input type="button" name="Submit62222" value="管理内容模板" onclick="window.open('template/ListNewstemp.php?gid=');">
              *( 
              <input name="tobetempinfo" type="checkbox" id="tobetempinfo" value="1">
              应用于已生成的信息 )</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">所属评论模板</td>
            <td><select name="pltempid" id="pltempid">
                <option value="0">使用默认模板 </option>
              
              </select> <input type="button" name="Submit62" value="管理评论模板" onclick="window.open('template/ListPltemp.php?gid=');"></td>
          </tr>
        </tbody>
        <tr bgcolor="#FFFFFF"> 
          <td height="25">搜索模板</td>
          <td><select name="searchtempid" id="searchtempid">
              <option value="0">使用默认模板 </option>
           
            </select> <input type="button" name="Submit62" value="管理搜索模板" onclick="window.open('template/ListSearchtemp.php?gid=');"></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25">WAP模板</td>
          <td><select name="wapstyleid" id="wapstyleid">
              <option value="0">使用默认模板</option>
          
            </select> <input type="button" name="Submit623" value="管理WAP模板" onclick="window.open('other/WapStyle.php?gid=');">
            ( 
            <input name="wapstylesclass" type="checkbox" id="wapstylesclass" value="1">
            应用于子栏目) </td>
        </tr>
        <tbody id="bigclasssetclasstext">
          <tr bgcolor="#FFFFFF"> 
            <td height="25">页面内容<font color="#666666">(支持标签同封面模板)</font></td>
            <td>请将内容<a href="#ecms" onclick="window.clipboardData.setData('Text',document.form1.classtext.value);document.form1.classtext.select()" title="点击复制模板内容"><strong>复制到Dreamweaver(推荐)</strong></a>或者使用<a href="#ecms" onclick="window.open('template/editor.php?getvar=opener.document.form1.classtext.value&returnvar=opener.document.form1.classtext.value&fun=ReturnHtml','editclasstext','width=880,height=600,scrollbars=auto,resizable=yes');"><strong>模板在线编辑</strong></a>进行可视化编辑</td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="100%" colspan="2"><textarea name="classtext" cols="80" rows="23" id="classtext" style="WIDTH: 100%"></textarea>                  </td>
                </tr>
              </table></td>
          </tr>
        </tbody>
      </table>
  </div>
  
  
  </div>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
    <tbody><tr> 
      <td width="100%" height="30"><div align="center"><strong> 
          <input type="submit" name="Submit" value="提交">
          &nbsp;&nbsp;<input type="reset" name="Submit2" value="重置">
          <input type="hidden" name="from" value=""></strong></div></td>
    </tr>
  </tbody></table>
  </form>


<script>
document.getElementById('smallclass').style.display='none';
// document.getElementById('smallclasssetinfo').style.display='none';
document.getElementById('smallclasssettemp').style.display='none';
document.getElementById('smallcgtoinfo').style.display='none';
document.getElementById('smallclassbdinfo').style.display='none';
</script>
</body>
</html>
