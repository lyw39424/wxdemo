<?php


namespace Home\Controller;
use Think\Controller;
use Admin\Common\UploadController;
use Home\Controller\IndexController;
use Home\Common\CommonController;
class CommentController extends CommonController
{
    public function index(){
        $comment =M('reply_mess');
        $type=$_GET['code'];
        if(!empty($type)){
            $map['name']=$type;
            $map['wxid']=session('wxid');
        }else{
            $map['wxid']=session('wxid');
        }
        $count = $comment->where($map)->count();
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $this->assign('map',$map);
        $list = $comment->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();

    }


    public function  update(){
        if (IS_POST) {
            $http='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $id=I('post.id');
            $create_time = date("Y-m-d H:i:s", time());
            $comment =M('reply_mess');
            $reply=M('reply_mess');
            $user= session('admin');
            $detail=$comment->where("id='".$id."'")->find();
            $data['reply_time']=$create_time;
            $data['fk_id']=$detail['id'];
            $data['reply_id']==$user['id'];
            $data['reply_name']="官方回复";
            $data['reply_url']= $http."Uploads".$user['img'];
            $data['reply_sex']=$user['sex'];
            $data['rec_id']=$detail['user_name_id'];
            $data['rec_name']=$detail['user_name'];
            $data['rec_sex']=$detail['sex'];
            $data['rec_url']=$detail['picture_id'];
            $data['count']=I('post.count');
            $ret = $reply->add($data);
            if($ret){
                header('location:'.U('Comment/index'));
                return;
            }else{
                $this->error("回复失败");
                return;
            }
        }
        $id=I('id');
        $comment =M('reply_mess');
        $detail=$comment->where("id='".$id."'")->find();
        $this->assign('detail',$detail);
        $this->display();
    }

    public function delete()
    {
        $id = I('post.id');
        $voreply=M('voreply');
        $reply=M('reply_mess');
        $reply->where("fk_id='".$id."'")->delete();
        $result = $voreply->where('id  in(' . $id . ')')->delete();
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