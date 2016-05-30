<?php


namespace Home\Controller;
use Think\Controller;
use Admin\Common\UploadController;
use Home\Controller\IndexController;
use Com\WechatAuth;
use Home\Common\CommonController;
class MuReplyController extends CommonController
{
    public function index(){
        $mureply=M('mureply');
        $type=$_GET['code'];
        if(!empty($type)){
            $map['title']=$type;
            $map['wxid']=session('wxid');
        }else{
            $map['wxid']=session('wxid');
        }
        $count = $mureply->where($map)->count();
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $this->assign('map',$map);
        $list = $mureply->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();

    }
    public function add(){
        $url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].__ROOT__."/Uploads/";
        if (IS_POST) {
            $mureply=M('mureply');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['name'];
            $data['creat_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].__ROOT__."/Uploads";
            $data['name'] = I('post.name');
            $data['description'] = I('post.description');

            $data['hq_music'] = I('post.hq_music');
            //生成url
            $music=I('post.picurl');
            if($music!=''){
                $data['music_url'] = $url.$music;
            }
            $musics=I('post.picurls');
            if($musics!='') {
                $weichat = M('wechat');
                $weichats = $weichat->where("id=" . session('wxid'))->find();
                $type = 'thumb';
                $musicfun = new IndexController();
                $meaid = $musicfun->upload($type, $weichats, $musics);
                $data['th_media'] = $meaid;
                $data['media_url'] = $musics;
            }
            if ($mureply -> add($data)) {
                header('location:'.U('MuReply/index'));
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
            $mureply=M('mureply');
            $data=$mureply->where("id='".$id."'")->find();
            $create_time = date("Y-m-d H:i:s", time());
            $data['update_time'] = $create_time;
            $user= session('admin');
            $data['update_name']=$user['name'];
            $data['update_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].__ROOT__."/Uploads";
            $data['name'] = I('post.name');
            $data['description'] = I('post.description');
            $data['hq_music'] = I('post.hq_music');
            //生成url
            $music=I('post.picurl');
            if($music!=''){
                $data['music_url'] = $url.$music;
        }
            $musics=I('post.picurls');
            if($musics!='') {
                $weichat = M('wechat');
                $weichats = $weichat->where("id=" . session('wxid'))->find();
                $type = 'thumb';
                $musicfun = new IndexController();
                $meaid = $musicfun->upload($type, $weichats, $musics);
                $data['th_media'] = $meaid;
                $data['media_url'] = $musics;
            }
            $ret = $mureply->save($data);
            if($ret){
                header('location:'.U('MuReply/index'));
                return;
            }else if ($ret==0){
                header('location:'.U('MuReply/index'));
                return;
            }else{
                $this->error("数据无需更新");
                return;
            }
        }
        $id=I('id');
        $mureply=M('mureply');
        $detail=$mureply->where("id='".$id."'")->find();
        $this->assign('detail',$detail);
        $this->display();
    }

    public function delete()
    {
        $id = I('post.id');
        $mureply=M('mureply');
        $result = $mureply->where('id  in(' . $id . ')')->delete();
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
        $path='/music/url/';
        $objs->editor($path);
    }

}