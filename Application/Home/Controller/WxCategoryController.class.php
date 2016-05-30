<?php


namespace Home\Controller;
use Think\Controller;
use Admin\Common\UploadController;
use Home\Common\CommonController;
class WxCategoryController extends CommonController
{
    public function index(){
       $wxid= session('wxid');
        $Dao = M();
        $counts=$Dao->query("select count(DISTINCT category_code) as count FROM wx_category WHERE  state='1' AND wxid=$wxid");
        $count=$counts[0]['count'];
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $list =$Dao->query("SELECT  DISTINCT id,category_code,category_name,creat_time FROM wx_category WHERE state='1'  AND wxid=$wxid  GROUP BY category_code");
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();

    }
    public function add(){
        if (IS_POST) {
            $category=M('category');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['name'];
            $data['creat_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $uuid=$this->guid();
            $data['category_name'] = I('post.category_name');
            $data['state'] = '1';
            $data['category_code'] =$uuid;
            $codes=I('post.code');
            $name=I('post.name');

            foreach ($codes as $key=>$mcode){
                $data['code'] = $codes[$key];
                $data['name'] =$name[$key];
                $category -> add($data);
            }
                header('location:'.U('WxCategory/index'));
                return;
        }
        $this->display();
    }

    public function  update(){
        if (IS_POST) {
            $category_code=I('post.category_code');
            $category=M('category');
            $category->where("category_code='".$category_code."'")->delete();

            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['name'];
            $data['creat_id'] = $user['id'];
            $data['wxid'] = session('wxid');
            //业务数据
            $uuid=$this->guid();
            $data['category_name'] = I('post.category_name');
            $data['state'] = '1';
            $data['category_code'] =$uuid;
            $codes=I('post.code');
            $name=I('post.name');

            foreach ($codes as $key=>$mcode){
                $data['code'] = $codes[$key];
                $data['name'] =$name[$key];
                $category -> add($data);
            }
            header('location:'.U('WxCategory/index'));
            return;

        }
        $id=I('id');
        $category=M('category');
        $detail=$category->where("id='".$id."'")->find();
        $list=$category->where("category_code='".$detail['category_code']."'")->select();
        $this->assign('detail',$detail);
        $this->assign('lists',$list);
        $this->display();
    }

    public function delete()
    {
        $id = I('post.id');
        $category=M('category');
        $detail=$category->where("id='".$id."'")->find();
        $result = $category->where("category_code='".$detail['category_code']."'")->delete();
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