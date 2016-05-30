<?php
namespace Admin\Controller;
use Think\Controller;

class WechatController extends Controller{
public function index(){
    $wechat = D('wechat');
    $type=$_GET['code'];
    if(!empty($type)){
        $map['wxname']=$type;
    }else{
        $map="";
    }
    /* $map = session('fkid');*/
    $count = $wechat->where($map)->count();
    $Page=getpage($count);
    $show=$Page->show();//分页显示输出
    $this->assign('map',$map);
    $list = $wechat->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
     $this->assign('page',$show);
    $this->assign('list', $list);
    $this->display();
}
    public function add(){
        if (IS_POST) {
            $wechat = D('wechat');
            $create_time = date("Y-m-d H:i:s", time());
            $data['accesstime'] = $create_time;
            $data['wxname'] = I('post.wxname');
            $data['wxnumber'] = I('post.wxnumber');
            $data['appid'] = I('post.appid');
            $data['wxtype'] = I('post.wxtype');
            $data['appsecret'] = I('post.appsecret');
            $data['token'] = I('post.token');
            $data['emall'] = I('post.email');
            if ($wechat -> add($data)) {
                header('location:'.U('Wechat/index'));
                return;
            } else {
                $this -> error('操作失败！');
                return;
            }
        }
        $this->display();
    }
    public function  update(){
        $id=(I('id'));
        $wechat = D('wechat');
       if(IS_POST){
           $wechat = D('wechat');
           $id=I('post.id');
           $data=$wechat->where('id='.$id)->find();
           $data['wxname'] = I('post.wxname');
           $data['wxnumber'] = I('post.wxnumber');
           $data['appid'] = I('post.appid');
           $data['wxtype'] = I('post.wxtype');
           $data['appsecret'] = I('post.appsecret');
           $data['token'] = I('post.token');
           $data['emall'] = I('post.email');
           $ret=$wechat->save($data);
           if ($ret) {
               header('location:' . U('Wechat/index'));
               return;
           } else
               if ($ret == 0) {
                   // 未进行修改
                   header('location:' . U('Wechat/index'));
               } else {
                   $this->error("请联系管理员");
               }
       }
        $detail=$wechat->where('id='.$id)->find();
        $this->assign('detail',$detail);
        $this->display();
    }

    public function delete()
    {
        $id = I('post.id');
        $wechat = D('wechat');
        $result = $wechat->where('id  in(' . $id . ')')->delete();
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
}
