<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Common\CommonController;
class MenueController extends CommonController{
public function index(){
    $Dao = M();
    $counts=$Dao->query("select count(DISTINCT menu_cate) as count FROM wx_hmenu");
    $count=$counts[0]['count'];
    $Page=getpage($count);
    $show=$Page->show();//分页显示输出
    $list =$Dao->query("select DISTINCT  menu_cate as menu_name,id,creat_name FROM wx_hmenu GROUP BY menu_cate");
     $this->assign('page',$show);
    $this->assign('list', $list);
    $this->display();
}
    public function add(){
     if (IS_POST) {

            $hmenu = D('hmenu');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['name'];
            $data['creat_id'] = $user['id'];
         //获取后后台信息
         $data['menu_cate'] = I('post.menu_cate');
         $hmenu->where("menu_cate='".I('post.menu_cate')."'")->delete();
         $menu_tite=I('post.title_name');
         $title_code=I('post.title_code');

         foreach ($menu_tite as $key=>$mcode) {
             $data['menu_tite'] = $menu_tite[$key];
             $data['titel_code'] =$title_code[$key];
             $menu_name=I('post.menu_name');
             $menu_code=I('post.menu_code');
             $onecode=$this->guid();
             $data['z_fkid'] =$onecode;
             if($menu_name){
                 foreach($menu_name as $keys=>$mname){
                     if($menu_name[$keys][$key]==''){
                         $hmenu -> add($data);
                     }
                     if($menu_name[$keys][$key]!=''){
                         $data['menu_name'] = $menu_name[$keys][$key];
                         $data['menu_code'] = $menu_code[$keys][$key];
                         $data['f_fkid'] =$onecode;
                         $hmenu -> add($data);
                     }
                 }
             }else{
                 $hmenu -> add($data);
             }

         }
         header('location:'.U('Menue/index'));
         return;
        }
        $this->display();
    }
    public function  update(){
        $name=(I('id'));
        $Dao = M();
       if(IS_POST){
       }
        $list=$Dao->query("SELECT DISTINCT menu_tite,titel_code,z_fkid from wx_hmenu WHERE menu_cate='".$name."' GROUP BY menu_tite");
         foreach($list as $key=>$value){
             $hmenu = M("hmenu");
             $detail = $hmenu->where("f_fkid='".$list[$key]['z_fkid']."'")->select();
             $list[$key]['buttons']=$detail;
               }

        $this->assign('name',$name);
        $this->assign('list',$list);
        $this->display();
    }

    public function delete()
    {
        $name = I('id');
        $hmenu = D('hmenu');
        $result = $hmenu->where("menu_cate='". $name ."'")->delete();
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
