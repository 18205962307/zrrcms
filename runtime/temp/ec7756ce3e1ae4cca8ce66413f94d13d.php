<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\WWW\zrrcms\public/../application/admin\view\menu\index.html";i:1510646258;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>菜单管理</title>
<link rel="stylesheet" href="__STATIC__/admin/adminstyle/1/adminstyle.css" type="text/css">
<script type="text/javascript" src="__STATIC__/admin/js/jquery.min.js"></script>
<script lanuage="JScript">
function turnit(ss,id)
{
  var display =$('#'+id).css('display');

  if(display=='none'){
    $('#'+id).show();
  
    $(ss).find('.kaiguan').attr('src','__STATIC__/admin/menu/open.png');

  }else{
    $('#'+id).hide();
    $(ss).find('.kaiguan').attr('src','__STATIC__/admin/menu/close.png');

  }

  

 
}

function turnitSecond(ss,id){
  if($(ss).attr('value')=='0'){
    $(ss).parent().parent().find('.third'+id).show();
    $(ss).attr('value','1');
    $(ss).find('.kaiguan').attr('src','__STATIC__/admin/menu/open.png');

  }else{
    $(ss).parent().parent().find('.third'+id).hide();
    $(ss).attr('value','0');
    $(ss).find('.kaiguan').attr('src','__STATIC__/admin/menu/close.png');

  }
  

}
var newWindow = null

//调用地址
function tvurl(classid){
	window.open('view/ClassUrl.php?&ehash_sGB4=08EjpWMvn4cSnBPttrf3&classid='+classid,'','width=500,height=250');
}
//刷新栏目
function relist(classid){
	self.location.href='enews.php?&ehash_sGB4=08EjpWMvn4cSnBPttrf3&rhash_Yk3d=ARZp0FkHvEfi&enews=ReListHtml&from=ListClass.php%3Fehash_sGB4%3D08EjpWMvn4cSnBPttrf3&classid='+classid;
}
//刷新信息
function renews(classid,tbname){
	window.open('ReHtml/DoRehtml.php?&ehash_sGB4=08EjpWMvn4cSnBPttrf3&rhash_Yk3d=ARZp0FkHvEfi&enews=ReNewsHtml&from=ListClass.php%3Fehash_sGB4%3D08EjpWMvn4cSnBPttrf3&classid='+classid+'&tbname[]='+tbname);
}
//归档
function docinfo(classid){
	if(confirm('确认归档?'))
	{
		self.location.href='ecmsinfo.php?&ehash_sGB4=08EjpWMvn4cSnBPttrf3&rhash_Yk3d=ARZp0FkHvEfi&enews=InfoToDoc&ecmsdoc=1&docfrom=ListClass.php%3Fehash_sGB4%3D08EjpWMvn4cSnBPttrf3&classid='+classid;
	}
}
//刷新JS
function rejs(classid){
	self.location.href='ecmschtml.php?&ehash_sGB4=08EjpWMvn4cSnBPttrf3&rhash_Yk3d=ARZp0FkHvEfi&enews=ReSingleJs&doing=0&classid='+classid;
}
//复制
function copyc(classid){
	self.location.href='AddClass.php?&ehash_sGB4=08EjpWMvn4cSnBPttrf3&classid='+classid+'&enews=AddClass&docopy=1';
}
//修改
function editc(classid){
	self.location.href='AddClass.php?&ehash_sGB4=08EjpWMvn4cSnBPttrf3&classid='+classid+'&enews=EditClass';
}
//删除
function delc(classid){
	if(confirm('确认要删除此栏目，将删除所属子栏目及信息'))
	{
		self.location.href='ecmsclass.php?&ehash_sGB4=08EjpWMvn4cSnBPttrf3&rhash_Yk3d=ARZp0FkHvEfi&classid='+classid+'&enews=DelClass';
	}
}
//标题分类
function ttc(classid){
	window.open('ClassInfoType.php?&ehash_sGB4=08EjpWMvn4cSnBPttrf3&classid='+classid);
}
//发布信息
function addi(classid){
	window.open('AddNews.php?&ehash_sGB4=08EjpWMvn4cSnBPttrf3&enews=AddNews&classid='+classid);
}
</script>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tbody><tr> 
    <td width="18%">位置: <a href="">菜单管理</a></td>
    <td width="82%"> <div align="right" class="emenubutton">
        <input type="button" name="Submit6" value="增加菜单" onclick="self.location.href='<?php echo url('add'); ?>'">
       
      </div></td>
  </tr>
</tbody>
</table>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="editorder" method="post" action="ecmsclass.php" onsubmit="return confirm('确认要操作?');"></form>
  <input type="hidden" name="ehash_sGB4" value="08EjpWMvn4cSnBPttrf3"><input type="hidden" name="rhash_Yk3d" value="ARZp0FkHvEfi">    
  <tbody>
    <tr class="header" height="25"> 
      
      <td width="9%" align="center">顺序</td>
      <td width="6%" align="center">ID</td>
      <td width="15%">栏目名</td>
     
      <td width="29%">操作</td>
    </tr>
   
  </tbody>

<tbody>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
  <!-- 一级菜单 -->

  <tr bgcolor="#DBEAF5" height="25">
    
    <td onmouseup="turnit(this,'classdiv<?php echo $v1['id']; ?>');" style="CURSOR:hand">
      <div style="width: 10px;height:5px;float:left;">
      <?php if(isset($v1['child'])): ?>
      <img src="__STATIC__/admin/menu/close.png" class="kaiguan">
      <?php endif; ?>
     </div>
     
      <img src="__STATIC__/admin/images/dir.gif">
      <input type="text" name="" value="<?php echo $v1['list_order']; ?>" style="width: 75px;" >
    </td>
    <td align="center"><?php echo $v1['id']; ?></td>
    <td>
     
     <?php echo $v1['name']; ?>
    </td>
   
    <td>
      <a href="<?php echo url('edit',['id'=>$v1['id']]); ?>" >修改</a> 
      <a href="<?php echo url('add',['id'=>$v1['id']]); ?>">复制</a> 
      <a href="#e" onclick="delc(9)">删除</a>
    </td>
   
  </tr>
  </tbody>
  <!-- 二级菜单 -->
  <tbody id="classdiv<?php echo $v1['id']; ?>" style="display: none;">
  <?php if(isset($v1['child'])): if(is_array($v1['child']) || $v1['child'] instanceof \think\Collection || $v1['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v1['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
  
    <tr bgcolor="#ffffff" height="25">
      
      <td onmouseup="turnitSecond(this,<?php echo $v2['id']; ?>);"  style="CURSOR:hand" value='0'>
       
          <div style="width: 10px;height:5px;float:left;padding-left:20px; ">
            <?php if(isset($v2['child'])): ?>
              <img src="__STATIC__/admin/menu/close.png" class="kaiguan">
            <?php endif; ?>
          </div>  
    
        <img src="__STATIC__/admin/images/dir.gif" >
        <input type="text" name="" value="<?php echo $v2['list_order']; ?>" style="width: 75px;" >
      </td>
      <td align="center"><?php echo $v2['id']; ?></td>
      <td>
      <?php 
  
        if(end($v1['child'])['id']!=$v2['id']){
          echo '├─'.$v2['name'];

        }else{
          echo '└─ '.$v2['name'];

       }

      ?>  
    
      </td>
      <td>
        <a href="<?php echo url('edit',['id'=>$v2['id']]); ?>" >修改</a> 
        <a href="<?php echo url('add',['id'=>$v2['id']]); ?>" >复制</a> 
        <a href="#e" onclick="delc(10)">删除</a></td>
    </tr>

    <!-- 三级菜单 -->
    <?php if(isset($v2['child'])): if(is_array($v2['child']) || $v2['child'] instanceof \think\Collection || $v2['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v2['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>
        
        <tr bgcolor="#ffffff" height="25" class="third<?php echo $v2['id']; ?>" style="display: none;">
          
          <td>
            <div style="width: 40px;height: 5px;float: left;"></div>
            <img src="__STATIC__/admin/images/txt.gif" border="0">
            <input type="text" name="" value="<?php echo $v3['list_order']; ?>" style="width: 75px;" >
          </td>
          <td align="center"><?php echo $v3['id']; ?></td>
          <td>
            <?php 
  
              if(end($v2['child'])['id']!=$v3['id']){
                echo '│       ├─ '.$v3['name'];

              }else{
                echo '│       └─'.$v3['name'];

             }

            ?>  
          </td>
        
          <td>
            <a href="<?php echo url('edit',['id'=>$v3['id']]); ?>" >修改</a> 
            <a href="<?php echo url('add',['id'=>$v3['id']]); ?>">复制</a> 
            <a href="#e" onclick="delc(11)">删除</a>
          </td>
         
        </tr>
      <?php endforeach; endif; else: echo "" ;endif; endif; ?>
      <!-- 三级菜单 /-->
 
  <?php endforeach; endif; else: echo "" ;endif; endif; ?>
  </tbody>
  <!-- 二级菜单 /-->

  


<?php endforeach; endif; else: echo "" ;endif; ?>

  <!-- 一级菜单 /-->


 



  
  
  


    <tbody>
      
   
   
  
</tbody>
</table>




</body></html>