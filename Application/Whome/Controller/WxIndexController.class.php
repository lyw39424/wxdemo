<?php


namespace Whome\Controller;
use Think\Controller;
use Home\Common\CommonController;
class WxIndexController extends Controller
{

    public  function  index(){
          $id=I('id');
       session("wxids",$id);
        $this->display();
    }

}