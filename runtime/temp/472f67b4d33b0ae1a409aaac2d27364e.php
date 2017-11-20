<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpStudy\WWW\zrrcms\public/../application/admin\view\user\edit.html";i:1511170121;}*/ ?>
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
    <td>位置：<a href="<?php echo url('index'); ?>">管理员管理</a>&nbsp;&gt;&nbsp;增加管理员 </td>
  </tr>
</tbody></table>
  <form name="form1" method="post" action="<?php echo url('editSave'); ?>" onsubmit="return CheckForm(document.form1);"> 
  <div class="dynamic-tab-pane-control tab-pane" id="TabPane1">
      <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tbody><tr class="header"> 
          <td height="30" colspan="2">增加管理员</td>
        </tr>

        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25" >用户名</td>
          <td> 
            <?php echo $info['user_name']; ?>
          </td>
        </tr>
         <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25" >所属角色</td>
          <td> 
            <select name="group_id" id="groupid">
              <?php if(is_array($roler) || $roler instanceof \think\Collection || $roler instanceof \think\Paginator): $i = 0; $__LIST__ = $roler;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
              <option value="<?php echo $vo['group_id']; ?>" <?php if($vo['group_id'] == $info['group_id']): ?>selected<?php endif; ?>><?php echo $vo['group_name']; ?></option> 
              <?php endforeach; endif; else: echo "" ;endif; ?>       
              }
            </select>
             
          </td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">邮箱</td>
          <td> 
            <input name="email" type="text" size="38" value="<?php echo $info['email']; ?>"> 
          </td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">密码</td>
          <td> 
            <input name="password" type="password" size="38" > 
          </td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td width="23%" height="25">状态</td>
          <td> 
            <input name="status" type="radio" value="1" <?php if($info['status'] == 1): ?>checked="" <?php endif; ?>> 正常
            <input name="status" type="radio" value="0"  <?php if($info['status'] == 0): ?>checked="" <?php endif; ?>> 禁用
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
   
          <input type="hidden" name="user_id" value="<?php echo $info['user_id']; ?>">
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
