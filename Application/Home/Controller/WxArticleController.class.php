<?php


namespace Home\Controller;
use Think\Controller;
use Admin\Common\UploadController;
use Home\Controller\IndexController;
use Home\Common\CommonController;
class WxArticleController extends CommonController
{
    public function index(){
        $news=M('news');
        $type=$_GET['code'];
        if(!empty($type)){
            $map['name']=$type;
            $map['wxid']=session('wxid');
        }else{
            $map['wxid']=session('wxid');
        }
        $count = $news->where($map)->count();
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $this->assign('map',$map);
        $list = $news->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();

    }
    public function add(){
        if (IS_POST) {
            $news=M('news');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['name'];
            $data['creat_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $data['name'] = I('post.name');
            $data['ne_img'] = I('post.ne_img');
            $data['ne_count'] = I('post.discription');
            $data['ne_number'] = I('post.ne_number');
            $data['author'] = I('post.author');
            if ($news -> add($data)) {
                header('location:'.U('WxArticle/index'));
                return;
            } else {
                $this -> error('操作失败！');
                return;
            }
        }
        $cate=M('category')->where("category_code='{1E2FE97F-1B48-4736-8DB0-043665B58DA8}' and state='1' and wxid='".session('wxid')."'")->select();
        $this->assign("cate",$cate);
        $this->display();
    }
    public function  update(){
        if (IS_POST) {
            $id=I('post.id');
            $news=M('news');
            $data=$news->where("id='".$id."'")->find();
            $create_time = date("Y-m-d H:i:s", time());
            $data['update_time'] = $create_time;
            $user= session('admin');
            $data['update_name']=$user['name'];
            $data['update_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $data['name'] = I('post.name');
            $data['ne_img'] = I('post.ne_img');
            $data['ne_count'] = I('post.discription');
            $data['ne_number'] = I('post.ne_number');
            $data['author'] = I('post.author');
            $ret =$news->save($data);
            if($ret){
                header('location:'.U('WxArticle/index'));
                return;
            }else if ($ret==0){
                header('location:'.U('WxArticle/index'));
                return;
            }else{
                $this->error("数据无需更新");
                return;
            }
        }
        $id=I('id');
        $news=M('news');
        $detail=$news->where("id='".$id."'")->find();
        $this->assign('detail',$detail);
        $cate=M('category')->where("category_code='{187F7B66-1730-475C-9A4C-0BC25E79E2BE}' and state='1' and wxid='".session('wxid')."'")->select();
        $this->assign("$cate",$cate);
        $this->display();
    }

    public function delete()
    {
        $id = I('post.id');
        $news=M('news');
        $result = $news->where('id  in(' . $id . ')')->delete();
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