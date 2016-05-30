<?php


namespace Home\Controller;
use Think\Controller;
use Com\WechatAuth;
use Home\Common\CommonController;
class MessageController extends CommonController
{
    public function index(){
        $message=M('message');
        $type=$_GET['code'];
        $map['reply']='1';
        $map['wxid']=session('wxid');
        $count = $message->where($map)->count();
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $this->assign('map',$map);
        $list = $message->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();
    }
    public function update(){
        if (IS_POST) {
            $id=I('post.id');
            $message=M('message');
            $data=$message->where("id='".$id."'")->find();
            $create_time = date("Y-m-d H:i:s", time());
            $data['update_time'] = $create_time;
            $user= session('admin');
            $data['update_name']=$user['name'];
            $data['update_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $data['sendcount'] = I('post.sendcount');
            $data['reply'] ='0';
            $weixin=new WechatAuth();
            if ($data -> save($data)) {
                $weixin->messageCustomSend($data['from_user'], $data['sendcount']);
                header('location:'.U('KeyReply/index'));
                return;
            } else {
                $this -> error('操作失败！');
                return;
            }
        }
        $this->assign("id",I('id'));
        $this->display();
    }
    public function delete()
    {
        $id = I('post.id');
        $message=M('message');
        $result = $message->where('id  in(' . $id . ')')->delete();
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