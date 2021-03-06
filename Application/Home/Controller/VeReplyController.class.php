<?php


namespace Home\Controller;
use Think\Controller;
use Admin\Common\UploadController;
use Home\Common\CommonController;
class VeReplyController extends CommonController
{
    public function index(){
        $vereply=M('vereply');
        $type=$_GET['code'];
        if(!empty($type)){
            $map['ve_name']=$type;
            $map['wxid']=session('wxid');
        }else{
            $map['wxid']=session('wxid');
        }
        $count = $vereply->where($map)->count();
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $this->assign('map',$map);
        $list = $vereply->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list', $list);

        $this->display();
    }
    public function add(){
        if (IS_POST) {
            $vereply=M('vereply');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['name'];
            $data['creat_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $data['name'] = I('post.name');
            $data['ve_discription'] = I('post.ve_discription');
            //生成url
            $music=I('post.picurl');
            if($music!=''){
                $data['media_url'] =$music;
                $weichat = M('wechat');
                $weichats = $weichat->where("id=" . session('wxid'))->find();
                $type = 'video';
                $musicfun = new IndexController();
                $meaid = $musicfun->upload($type, $weichats, $music);
                $data['media_id'] = $meaid;

            }
            if ($vereply -> add($data)) {
                header('location:'.U('VeReply/index'));
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
            $id=I('post.id');
            $vereply=M('vereply');
            $data=$vereply->where("id='".$id."'")->find();
            $create_time = date("Y-m-d H:i:s", time());
            $data['update_time'] = $create_time;
            $user= session('admin');
            $data['update_name']=$user['name'];
            $data['update_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            $data['name'] = I('post.name');
            $data['ve_discription'] = I('post.ve_discription');
            //生成url
            $music=I('post.picurl');
            if($music!=''){
                $data['media_url'] =$music;
                $weichat = M('wechat');
                $weichats = $weichat->where("id=" . session('wxid'))->find();
                $type = 'video';
                $musicfun = new IndexController();
                $meaid = $musicfun->upload($type, $weichats, $music);
                $data['media_id'] = $meaid;

            }
            $ret = $vereply->save($data);
            if($ret){
                header('location:'.U('VeReply/index'));
                return;
            }else if ($ret==0){
                header('location:'.U('VeReply/index'));
                return;
            }else{
                $this->error("数据无需更新");
                return;
            }
        }
        $id=I('id');
        $vereply=M('vereply');
        $detail=$vereply->where("id='".$id."'")->find();
        $this->assign('detail',$detail);
        $this->display();
    }

    public function delete()
    {
        $id = I('post.id');
        $vereply=M('vereply');
        $result = $vereply->where('id  in(' . $id . ')')->delete();
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
    public  function img(){
        $objs = new UploadController;
        $path='/vedio/url/';
        $objs->editor($path);
    }

}