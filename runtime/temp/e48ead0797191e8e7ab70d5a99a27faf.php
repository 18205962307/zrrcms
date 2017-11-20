<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\WWW\zrrcms\public/../application/admin\view\user\index.html";i:1511170458;}*/ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="__STATIC__/admin/adminstyle/1/adminstyle.css" type="text/css">
<title>角色管理</title>

</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td width="52%">位置： 
     
    </td>
    <td width="48%"> </td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="searchinfo" method="GET" action="ListNews.php">

    <tr> 
      <td width="35%">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="23%"> <div align="left" class="emenubutton"> 
                <input type=button name=button value="增加信息" onClick="self.location.href='<?php echo url('add'); ?>'">
              </div></td>
            <td width="77%" title="增加信息后使用本操作将信息显示到前台"> <div align="right"> 
               
              
              </div>
            </td>
          </tr>
        </table>
      </td>
      <td width="65%"></td>
    </tr>
  </form>
</table>
<br>
<form name="listform" method="post" action="ecmsinfo.php" onsubmit="return confirm('确认要执行此操作？');">

  <table width="100%" border="0" cellspacing="1" cellpadding="0">
    <tbody>
  </tbody>
</table>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    
  	
    <tr> 
      
      <td width="6%" height="25">
        <div align="center">ID</div>
      </td>
      <td width="12%" height="25"> <div align="center">用户名</div></td>
      <td width="12%" height="25"> <div align="center">邮箱</div></td>
      <td width="12%" height="25"> <div align="center">角色</div></td>
      <td width="14%" height="25"> <div align="center">状态</div></td>
      
      <td width="14%" height="25"> <div align="center">操作</div></td>
    </tr>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'"  style="background-color: rgb(255, 255, 255);"> 
      <td><?php echo $vo['user_id']; ?></td>
      <td><?php echo $vo['user_name']; ?></td>
      <td><?php echo $vo['email']; ?></td>
      <td><?php echo $group[$vo['group_id']]; ?></td>
      <td>
        <div align="center">
        <?php if($vo['status'] == 1): ?>正常<?php else: ?>禁用<?php endif; ?>
        </div>
      </td>
      <td height="25"> 
        <div align="center">
          <a href="<?php echo url('edit',['user_id'=>$vo['user_id']]); ?>">修改</a> | 
       
          <a href="<?php echo url('delete',['user_id'=>$vo['user_id']]); ?>" onclick="return confirm('确认要删除？');">删除</a>
        </div>
      </td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>

    
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="8"> </td>
    </tr>
  </table>
</form>
<IFRAME frameBorder="0" id="showclassnav" name="showclassnav" scrolling="no" src="" style="HEIGHT:0;VISIBILITY:inherit;WIDTH:0;Z-INDEX:1"></IFRAME>
</body>
</html>