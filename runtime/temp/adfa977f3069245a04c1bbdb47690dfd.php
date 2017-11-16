<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpStudy\WWW\zrrcms\public/../application/admin\view\auth_group_access\edit.html";i:1510810629;}*/ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<link rel="stylesheet" href="__STATIC__/admin/adminstyle/1/adminstyle.css" type="text/css">
<link id="luna-tab-style-sheet" type="text/css" rel="stylesheet" href="__STATIC__/admin/adminstyle/1/tab.winclassic.css"> 
<script type="text/javascript" src="__STATIC__/admin/js/jquery.min.js"></script>
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
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tbody><tr>
    <td>位置：<a href="ListGroup.php?ehash_WVPT=tVku8KbZjWNpAjGOwADX">管理用户组</a>&nbsp;&gt;&nbsp;修改用户组：<b>超级管理员</b></td>
  </tr>
</tbody></table>
<form name="form1" method="post" action="<?php echo url('editSave'); ?>">
  <table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tbody><tr class="header"> 
      <td height="25" colspan="2">增加用户组 
        
        <input name="groupid" type="hidden" id="group_id" value="1">
        </td>
    </tr>
    <tr> 
      <td height="25" colspan="2">名称</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="20%" height="25">用户组名称：</td>
      <td width="80%" height="25">超级管理员</td>
    </tr>
    <tr> 
      <td height="25" colspan="2">权限</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">权限分配：</td>
      <td height="25"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#C3EFFF">
          <tbody>
          <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>  
          <tr> 
            <td>
              <input type="checkbox" name="rules[]" value="<?php echo $v1['id']; ?>" level="0" onclick="javascript:checknode(this);"  <?php if(in_array($v1['id'],$rules)): ?>checked=""<?php endif; ?>><?php echo $v1['name']; ?>
            </td>
          </tr>
          <?php if(isset($v1['child'])): if(is_array($v1['child']) || $v1['child'] instanceof \think\Collection || $v1['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v1['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>  
          <tr> 
            <td bgcolor="#FAF9DE">
              <table width="100%" border="0" cellspacing="1" cellpadding="3">
                <tbody>
                  <tr> 
                    <td width="33%" height="23"> 
                      &nbsp;|-<input name="rules[]" type="checkbox" id="gr[dopublic]" value="<?php echo $v2['id']; ?>" level="1" onclick="javascript:checknode(this);" <?php if(in_array($v2['id'],$rules)): ?>checked=""<?php endif; ?>>
                      <?php echo $v2['name']; ?>
                    </td>
                   

                  </tr>
                
          
                
              </tbody>
            </table>
          </td>
          </tr>

            <?php 
              if(isset($v2['child'])){

              
                $count = count($v2['child']);
                for($i=0;$i<ceil($count/3);$i++){ 
            ?>
            <tr> 
            <td bgcolor="#FFFFFF">
              <table width="100%" border="0" cellspacing="1" cellpadding="3">
                <tbody>
                  <tr> 
                    <?php
                        for($j=0;$j<3;$j++){
                          $kk =$i*3+$j;
                          if(isset($v2['child'][$kk])){

                        

                     ?>
                    <td width="33%" height="23"> 
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="rules[]" type="checkbox" id="gr[dopublic]" value="<?php echo $v2['child'][$kk]['id']; ?>"  level="2"  onclick="javascript:checknode(this);" <?php if(in_array($v2['child'][$kk]['id'],$rules)): ?>checked=""<?php endif; ?>>
                     <?php echo $v2['child'][$kk]['name']; ?>
                    </td>
                    <?php }else{ ?>
                    <td width="33%" height="23"> 

                  <?php }} ?>


                  </tr>
                
          
                
              </tbody>
            </table>
          </td>
          </tr>


            <?php } }endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
        </tbody></table></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"><input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置">
        <input type="checkbox" name="chkall" value="on" onclick="CheckAll(this.form)">
        选中全部</td>
    </tr>
  </tbody></table>
</form>

<script>
function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
  if(e.name=='gr[doselfinfo]'||e.name=='gr[domustcheck]'||e.name=='gr[docheckedit]')
    {
    continue;
      }
    if (e.name != 'chkall')
       e.checked = form.chkall.checked;
    }
  }



  

  function checknode(obj) {
      var chk = $("input[type='checkbox']");
      //总checkbox 个数
      var count = chk.length;
      //点击的checkbox位置
      var num = chk.index(obj);
      var level_top = level_bottom = chk.eq(num).attr('level');
      // alert(level_top);
      for (var i = num; i >= 0; i--) {
          var le = chk.eq(i).attr('level');
          if (le <level_top) {
              chk.eq(i).prop("checked", true);
              var level_top = level_top - 1;
          }
      }
      for (var j = num + 1; j < count; j++) {
          var le = chk.eq(j).attr('level');
          if (chk.eq(num).prop("checked")) {

              if (le > level_bottom){
                  chk.eq(j).prop("checked", true);
              }
              else if (le == level_bottom){
                  break;
              }
          } else {
              if (le >level_bottom){
                  chk.eq(j).prop("checked", false);
              }else if(le == level_bottom){
                  break;
              }
          }
      }
  }
  
</script>
</body>
</html>
