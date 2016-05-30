<?php


namespace Home\Controller;
use Think\Controller;
use Admin\Common\UploadController;
use Home\Controller\IndexController;
use Home\Common\CommonController;
class SendController extends CommonController
{
    public function index(){
        $send=M('send');
        $map['wxid']=session('wxid');
        $count = $send->where($map)->count();
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $this->assign('map',$map);
        $list = $send->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();
    }
    public function add()
    {
        if (IS_POST) {
            $send = M('send');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user = session('admin');
            $data['creat_name'] = $user['name'];
            $data['creat_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $data['type'] = I('post.province');
            $data['count'] = I('post.city');
            $data['state'] ="1";
        }
        if ($send->add($data)) {
            header('location:' . U('Send/index'));
            return;
        } else {
            $this->error('操作失败！');
            return;

        }
        $cate=M('category')->where("category_code='{187F7B66-1730-475C-9A4C-0BC25E79E2BE}' and state='1' and wxid='".session('wxid')."'")->select();
        $this->assign("cate",$cate);
        $this->display();
    }
    function count(){
        $code=I("post.id");
        $data=M($code)->field('id,name')->where("wxid='".session('wxid')."'")->select();

        $this->ajaxReturn($data);
    }
    public function delete()
    {
        $id = I('post.id');
        $send = M('send');
        $result = $send->where('id  in(' . $id . ')')->delete();
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