<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\zrrcms\public/../application/admin\view\menu\add.html";i:1510561930;}*/ ?>
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

   
      <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <input type="hidden" name="enews" value="AddClass">
        <tbody><tr class="header"> 
          <td height="30" colspan="2">增加菜单</td>
        </tr>

        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">菜单名称</td>
          <td> 
            <input name="name" type="text" size="38"> 
          </td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25" valign="top">上级菜单</td>
          <td>
            <select name="bclassid" size="12" id="bclassid" onchange="javascript:changeitem(document.form1);" style="width:320">
              <option value="0" selected="selected">一级菜单</option>
              <?php if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                 <option value="<?php echo $v1['id']; ?>" >|-<?php echo $v1['name']; ?></option>
                 <?php if(isset($v1['child'])): if(is_array($v1['child']) || $v1['child'] instanceof \think\Collection || $v1['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v1['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $v2['id']; ?>" >&nbsp;&nbsp;|-<?php echo $v2['name']; ?></option>
                  

                  <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
              </select> 
           </td>
        </tr>

        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">控制器</td>
          <td> 
            <input name="controller" type="text" size="38"> 
          </td>
        </tr>

        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">方法</td>
          <td> 
            <input name="action" type="text" size="38"> 
          </td>
        </tr>


        <tr bgcolor="#FFFFFF"> 
          <td height="25">栏目别名</td>
          <td><input name="bname" type="text" id="bname" value="" size="38"> 
            <font color="#666666">(为空则与栏目名相同)</font></td>
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
        <tbody>

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
        
          </tbody>
        </table>
  
  
   
   
        
      
       
   
       
       
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
