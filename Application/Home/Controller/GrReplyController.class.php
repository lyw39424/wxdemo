<?php


namespace Home\Controller;
use Think\Controller;
use Admin\Common\UploadController;
use Home\Common\CommonController;
class GrReplyController extends CommonController
{
    public function index(){
        $type=$_GET['code'];
        if(!empty($type)){
            $map="title='".$type."' and wxid='".session('wxid')."'";
        }else{
            $map="wxid='".session('wxid')."'";
        }
        $Dao = M();
        $counts=$Dao->query("select count(DISTINCT uuid) as count FROM wx_grreply");
        $count=$counts[0]['count'];
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $list =$Dao->query("SELECT DISTINCT id,uuid,name,picurl,creat_time FROM  wx_grreply WHERE $map GROUP BY uuid");
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();

    }
    public function add(){
        if (IS_POST) {
            $grreply=M('grreply');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['name'];
            $data['creat_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].__ROOT__."/Uploads/";
            $uuids=I('post.uuid');
            if($uuids==''){
                $uuid=$this->guid();
                $data['uuid'] =$uuid;
            }else{
                $data['uuid'] =$uuids;
            }
            $data['name'] = I('post.name');
            $data['discription'] = I('post.discription');
            $data['url'] = I('post.url');
            $data['picurl'] = I('post.picurl');
            $data['autor'] = I('post.autor');
            if ($grreply -> add($data)) {
                header('location:'.U('GrReply/index'));
                return;
            } else {
                $this -> error('操作失败！');
                return;
            }
        }
        $id=$_GET['id'];
        $grreply=M('grreply');
        $date=$grreply->where("id='".$id."'")->find();
        if($id!=''){
           $this->assign('uuid',$date['uuid']);
        }
        $this->display();
    }
    public function  show(){
        $id=I('id');
        $grreply=M('grreply');
        $detail=$grreply->where("id='".$id."'")->find();
        $data=$grreply->where("uuid='".$detail['uuid']."'")->select();
        $this->assign('list',$data);
        $this->display();
    }
    public function  update(){
        if (IS_POST) {
            $id=I('post.id');
            $grreply=M('grreply');
            $data=$grreply->where("id='".$id."'")->find();
            $create_time = date("Y-m-d H:i:s", time());
            $data['update_time'] = $create_time;
            $user= session('admin');
            $data['update_name']=$user['name'];
            $data['update_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            $data['name'] = I('post.name');
            $data['discription'] = I('post.discription');
            $data['url'] = I('post.url');
            $data['picurl'] = I('post.picurl');
            $data['autor'] = I('post.autor');
            $ret = $grreply->save($data);
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
        $grreply=M('grreply');
        $detail=$grreply->where("id='".$id."'")->find();
        $this->assign('detail',$detail);
        $this->display();
    }

    public function delete()
    {
        $id = I('post.id');
        $grreply=M('grreply');
        $result = $grreply->where('id  in(' . $id . ')')->delete();
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
        $path='/tw/img/';
        $objs->editor($path);
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

}