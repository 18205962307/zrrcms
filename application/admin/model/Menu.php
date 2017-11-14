<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use think\Validate;
use think\Loader;
class Menu extends Model
{
    protected $resultSetType = 'collection';
    /**
     * 单条添加
     * @param [type] $data [description]
     */
    public function addData($data){

      $result = $this->validate('Menu.add')->save($data);

      if($result===false){
         return ['code'=>0,'msg'=>$this->getError()];
      }
      return ['code'=>1,'msg'=>'菜单添加成功','data'=>$this->getLastInsID()];

    }
    /**
     * 快捷添加
     * @param [type] $data [description]
     */
    public function addAllData($data){
      //列表
      $__data = ['name'=>$data['name'],'parent_id'=>$data['parent_id'],'controller'=>$data['controller'],'action'=>'index','type'=>'1'];
      $r = $this->addData($__data);
      $parent_id = $r['data'];
      //添加
      $_data[] = ['name'=>'添加','parent_id'=>$parent_id,'controller'=>$data['controller'],'action'=>'add','type'=>'0'];
      //编辑
      $_data[] = ['name'=>'编辑','parent_id'=>$parent_id,'controller'=>$data['controller'],'action'=>'edit','type'=>'0'];
      //删除
      $_data[] = ['name'=>'删除','parent_id'=>$parent_id,'controller'=>$data['controller'],'action'=>'delete','type'=>'0'];
     
      $result = $this->insertAll($_data);

      if($result===false){
         return ['code'=>0,'msg'=>$this->getError()];
      }
      return ['code'=>1,'msg'=>'菜单添加成功'];

    }

    /**
     * 编辑
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function editData($id,$data){

      $result = $this->validate('Menu.edit')->where(['id'=>$id])->update($data);

      if($result===false){
         return ['code'=>0,'msg'=>$this->getError()];
      }
      return ['code'=>1,'msg'=>'菜单编辑成功'];

    }


}