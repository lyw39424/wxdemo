<?php


namespace Home\Controller;
use Think\Controller;
use Home\Common\CommonController;
class TeReplyController extends CommonController
{
    public function index(){
        $teReply=M('tereply');
        $type=$_GET['code'];
        if(!empty($type)){
            $map['name']=$type;
            $map['wxid']=session('wxid');
        }else{
            $map['wxid']=session('wxid');
        }
        $count = $teReply->where($map)->count();
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $this->assign('map',$map);
        $list = $teReply->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();

    }
    public function add(){
        if (IS_POST) {
            $teReply=M('tereply');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['name'];
            $data['creat_id'] = $user['id'];
            $data['name'] = I('post.name');
            $data['count'] = I('post.count');
            $data['wxid'] = session('wxid');
            if ($teReply -> add($data)) {
                header('location:'.U('TeReply/index'));
                return;
            } else {
                $this -> error('操作失败！');
                return;
            }
        }
        $this->display();
    }

    public function  update(){
        if (IS_POST) {
            $ids = I('post.id');
            $teReply=M('tereply');
            $data = $teReply->where("id=$ids")->find();
            $create_time = date("Y-m-d H:i:s", time());
            $data['update_time'] = $create_time;
            $user= session('admin');
            $data['update_name']=$user['name'];
            $data['update_id'] = $user['id'];
            $data['name'] = I('post.name');
            $data['count'] = I('post.count');
            $data['wxid'] = session('wxid');
            $ret = $teReply->save($data);
            if($ret){
                header('location:'.U('TeReply/index'));
                return;
            }else if ($ret==0){
                header('location:'.U('TeReply/index'));
                return;
            }else{
                $this->error("数据无需更新");
                return;
            }
        }
        $id=I('id');
        $teReply=M('tereply');
        $detail=$teReply->where("id='".$id."'")->find();
        $this->assign('detail',$detail);
        $this->display();
    }

    public function delete()
    {
        $id = I('post.id');
        $teReply=M('tereply');
        $result = $teReply->where('id  in(' . $id . ')')->delete();
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