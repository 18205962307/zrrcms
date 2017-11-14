<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\zrrcms\public/../application/admin\view\menu\add.html";i:1510636686;}*/ ?>
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

<script>


//检查
function CheckForm(obj)
{
  if(obj.name.value=="")
  {
    alert("请输入菜单名称");
    return false;
  }
  
 return true;
}



</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="6" cellspacing="1">
  <tbody><tr>
    <td>位置：<a href="ListClass.php?ehash_kBSF=rD90MRfzOoeZTZStbUkt">菜单管理</a>&nbsp;&gt;&nbsp;增加菜单 </td>
  </tr>
</tbody></table>
  <form name="form1" method="post" action="<?php echo url('addSave'); ?>" onsubmit="return CheckForm(document.form1);"> 
  <div class="dynamic-tab-pane-control tab-pane" id="TabPane1">
      <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
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
            <select name="parent_id" size="12"  onchange="javascript:changeitem(document.form1);" style="width:320">
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
          <td width="23%" height="25">创建方式</td>
          <td> 
             <input type="radio" name="create" value="0" checked="">
              默认
              <input type="radio" name="create" value="1">
              快捷
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
          <td width="23%" height="25">参数</td>
          <td> 
            <input name="param" type="text" size="38"> 
          </td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">备注</td>
          <td> 
            <input name="remark" type="text" size="38"> 
          </td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">状态</td>
          <td> 
             <input type="radio" name="status" value="1" checked="">
              正常 
              <input type="radio" name="status" value="0">
              禁用
          </td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">是显示菜单</td>
          <td> 
             <input type="radio" name="type" value="1" checked="">
              是 
              <input type="radio" name="type" value="0">
              否
          </td>
        </tr>
         <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">排序</td>
          <td> 
            <input name="list_order" type="text" size="38" value="0"> 
          </td>
        </tr>
          </tbody>
        </table>
      </table>
  </div>
  
  
  </div>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
    <tbody><tr> 
      <td width="100%" height="30">
        <div align="center"><strong> 
          <input type="submit" name="Submit" value="提交">
          &nbsp;&nbsp;<input type="reset" name="Submit2" value="重置">
          </strong>
        </div>
      </td>
    </tr>
  </tbody></table>
  </form>



</body>
</html>
