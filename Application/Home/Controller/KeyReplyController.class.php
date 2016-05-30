<?php


namespace Home\Controller;
use Think\Controller;
use Admin\Common\UploadController;
use Home\Controller\IndexController;
use Home\Common\CommonController;
class KeyReplyController extends CommonController
{
    public function index(){
        $keyreply=M('keyreply');
        $type=$_GET['code'];
        if(!empty($type)){
            $map['key_name']=$type;
            $map['wxid']=session('wxid');
        }else{
            $map['wxid']=session('wxid');
        }
        $count = $keyreply->where($map)->count();
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $this->assign('map',$map);
        $list = $keyreply->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($list as $key=>$value){
            $detai=M('category')->where("code='".$list[$key]['key_type']."'")->find();
            $list[$key]['key_type']=$detai['name'];
        }
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();

    }
    public function add(){
        if (IS_POST) {
            $keyReply=M('keyreply');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['name'];
            $data['creat_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $data['key_name'] = I('post.key_name');
            $data['key_type'] = I('post.province');
            $data['key_count'] = I('post.city');
            if ($keyReply -> add($data)) {
                header('location:'.U('KeyReply/index'));
                return;
            } else {
                $this -> error('操作失败！');
                return;
            }
        }
        $cate=M('category')->where("category_code='{187F7B66-1730-475C-9A4C-0BC25E79E2BE}' and state='1'")->select();
        $this->assign("cate",$cate);
        $this->display();
    }
function count(){
$code=I("post.id");
$data=M($code)->field('id,name')->where("wxid='".session('wxid')."'")->select();

$this->ajaxReturn($data);
}
    public function  update(){
        if (IS_POST) {
            $id=I('post.id');
            $keyReply=M('keyreply');
            $data=$keyReply->where("id='".$id."'")->find();
            $create_time = date("Y-m-d H:i:s", time());
            $data['update_time'] = $create_time;
            $user= session('admin');
            $data['update_name']=$user['name'];
            $data['update_id'] = $user['id'];
            $data['wxid'] = session('wxid');

            $data['key_name'] = I('post.key_name');
            $data['key_type'] = I('post.province');
            $data['key_count'] = I('post.city');
            $ret = $keyReply->save($data);
            if($ret){
                header('location:'.U('KeyReply/index'));
                return;
            }else if ($ret==0){
                header('location:'.U('KeyReply/index'));
                return;
            }else{
                $this->error("数据无需更新");
                return;
            }
        }
        $id=I('id');
        $keyreply=M('keyreply');
        $detail=$keyreply->where("id='".$id."'")->find();
        $this->assign('detail',$detail);
        $xcate=M($detail['key_type'])->where("id='".$detail['key_count']."'")->find();
        $dcate=M('category')->where("code='".$detail['key_type']."'")->find();
        $this->assign("xcate",$xcate);
        $this->assign("dcate",$dcate);
        $cate=M('category')->where("category_code='{187F7B66-1730-475C-9A4C-0BC25E79E2BE}' and state='1' and wxid='".session('wxid')."'")->select();
        $this->assign("cate",$cate);
        $this->display();
    }

    public function delete()
    {
        $id = I('post.id');
        $keyreply=M('keyreply');
        $result = $keyreply->where('id  in(' . $id . ')')->delete();
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