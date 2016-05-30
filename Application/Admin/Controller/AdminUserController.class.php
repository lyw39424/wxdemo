<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Common\CommonController;
use Admin\Common\UploadController;
class AdminUserController extends CommonController{
public function index(){
    $adminuser=M('adminuser');
    $type=$_GET['code'];
    if(!empty($type)){
        $map['name']=$type;
        $map['state']='1';
    }else{
        $map['state']='1';
    }
    $count = $adminuser->where($map)->count();
    $Page=getpage($count);
    $show=$Page->show();//分页显示输出
    $this->assign('map',$map);
    $list = $adminuser->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
    foreach($list as $key=>$value){
        $code=$list[$key]['code'];
        $role=M('rolue');
        $roles=$role->where("id='".$code."'")->field('id,name')->find();
        $list[$key]['code']=  $roles['name'];
    }

    $this->assign('page',$show);
    $this->assign('list', $list);
    $this->display();

}
    public function add(){
        if (IS_POST) {
            $adminuser=M('adminuser');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['username'];
            $data['creat_id'] = $user['id'];
//获取页面数据
            $data['name'] = I('post.adminName');
            //密码
            $data['number'] = md5(I('post.password'));
            $data['code'] = I('post.adminRole');
            $data['img'] = I('post.img_url');
            $data['state'] = '1';
            $data['sex'] = I('post.sex');
            $data['phone'] = I('post.phone');
            $data['email'] = I('post.email');
            if ($adminuser -> add($data)) {
                header('location:'.U('AdminUser/index'));
                return;
            } else {
                $this -> error('操作失败！');
                return;
            }
        }
        $role=M('rolue');
        $roles=$role->field('id,name')->select();
        $this->assign('roles',$roles);
        $this->display();
    }
    /*对使用状态操作*/
    public  function reading(){
     $id=I('post.id');
      $number=I('post.number');
        $adminuser=M('adminuser');
        $data=$adminuser->where("id='".$id."'")->find();
        $data['is_value']=$number;
        $adminuser->save($data);
        return;
    }
    public function  update(){
        if (IS_POST) {
            $ids = I('post.id');
            $adminuser=M('adminuser');
            $data = $adminuser->where("id=$ids")->find();
            $create_time = date("Y-m-d H:i:s", time());
            $data['update_time'] = $create_time;
            $user= session('admin');
            $data['update_name']=$user['username'];
            $data['update_id'] = $user['id'];
            if($data['number']!=I('post.passward')){
                $data['number'] = md5(I('post.passward'));
            }
            $data['name'] = I('post.adminName');
            $data['code'] = I('post.adminRole');
            $data['img'] = I('post.img_url');
            $data['state'] = '1';
            $data['sex'] = I('post.sex');
            $data['phone'] = I('post.phone');
            $data['email'] = I('post.email');
            $ret = $adminuser->save($data);
            if($ret){
                header('location:'.U('AdminUser/index'));
                return;
            }else if ($ret==0){
                header('location:'.U('AdminUser/index'));
                return;
            }else{
                $this->error("数据无需更新");
                return;
            }
        }
        $id=I('id');
        $adminuser=M('adminuser');
        $detail=$adminuser->where("id='".$id."'")->find();
            $role=M('rolue');
            $roles=$role->where("id='".$detail['code']."'")->field('id,name')->find();
        $rolesf=$role->field('id,name')->select();
        $this->assign('roles',$rolesf);
        $this->assign('role',$roles);
        $this->assign('detail',$detail);
        $this->display();
    }

    public function delete()
    {
        $id = I('id');
        $adminuser = D('adminuser');
        $result = $adminuser->where('id  in(' . $id . ')')->delete();
        if ($result) {
            $state['state']='0';
            $state['msg']='删除成功!';
           $this->ajaxReturn();
        } else {
            $state['state']='1';
            $state['msg']='删除失败!';
            $this->ajaxReturn($state);
        }
    }


    public function guid(){
        if (function_exists('com_create_guid')){
            return com_create_guid();
        }else{
            mt_srand((double)microtime()*10000);
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);
            $uuid = chr(123)
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                .chr(125);
            return $uuid;
        }
    }

    public  function img(){
        $objs = new UploadController;
        $path='/Store/zhut/';
        $objs->editor($path);

    }

}
