<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Common\CommonController;
class SysTemsController extends CommonController{
public function sysbase(){
    if (IS_POST) {
        $setcolumn=M('setcolumn');
        $find=$setcolumn->where("wxid='".I('post.wxid')."'")->find();
        $data['scolumn']=I('post.scolumn');
        $data['key_word']=I('post.key_word');
        $data['describe']=I('post.describe');
        $data['upload']=I('post.upload');
        $data['copyright']=I('post.copyright');
        $data['re_number']=I('post.re_number');
        $data['wxid']=I('post.wxid');
        if($find){
            $setcolumn->where("id='".$find['id']."'")->delete();
            $setcolumn->add($data);
        }else{
            $setcolumn->add($data);
        }

    }
    $wechat=M('wechat');
    $weslect=$wechat->select();
    $this->assign('wechat',$weslect);
    $this->display();
}
    public function syslog(){

        $this->display();
    }
  
}
