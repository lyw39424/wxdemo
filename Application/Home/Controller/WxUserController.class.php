<?php


namespace Home\Controller;
use Think\Controller;
use Admin\Common\UploadController;
use Home\Common\CommonController;
class WxUserController extends CommonController
{
    public function index(){
        $user=M('user');
        $type=$_GET['code'];
        if(!empty($type)){
            $map['bickname']=$type;
            $map['wxid']=session('wxid');
            $map['state']='1';
        }else{
            $map['wxid']=session('wxid');
            $map['state']='1';
        }
        $count = $user->where($map)->count();
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $this->assign('map',$map);
        $list = $user->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();
    }

}