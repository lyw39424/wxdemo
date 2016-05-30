<?php


namespace Whome\Controller;
use Think\Controller;
use Home\Common\CommonController;
class WxNewController extends Controller
{

    public  function  index(){
        $wxnew=M('news');
        $list=$wxnew->where("wxid='".session('wxids')."'")->select();

        $this->assign('list',$list);
        $this->display();
    }
    public  function  detail(){

        $wxnew=M('news');
        $list=$wxnew->where("id='".I('id')."'")->find();
        $this->assign('detail',$list);
        $this->display();
    }
}