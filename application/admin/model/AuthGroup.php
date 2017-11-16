<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use think\Validate;
use think\Loader;
class AuthGroup extends Model
{
    protected $resultSetType = 'collection';
    /**
     * 单条添加
     * @param [type] $data [description]
     */
    public function addData($data){

      $result = $this->validate('AuthGroup.add')->save($data);

      if($result===false){
         return ['code'=>0,'msg'=>$this->getError()];
      }
      return ['code'=>1,'msg'=>'添加成功','data'=>$this->getLastInsID()];

    }
    

    /**
     * 编辑
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function editData($id,$data){

      $result = $this->validate('AuthGroup.edit')->where(['group_id'=>$id])->update($data);

      if($result===false){
         return ['code'=>0,'msg'=>$this->getError()];
      }
      return ['code'=>1,'msg'=>'编辑成功'];

    }


}