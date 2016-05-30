<?php


namespace Admin\Controller;

use Think\Controller;


class LoginController extends Controller{

    public function login(){
        session('admin',"");
        $this->display();
}
    public function verify() {
        ob_clean();
        $verify = new \Think\Verify();
        $verify->codeSet = '0123456789';
        $verify->fontSize = '14px';
        $verify->imageW = 95;
        $verify->imageH = 30;
        $verify->length = 4;
        $verify->useCurve = false;
        $verify->useNoise = false;
        $verify->entry();
    }
    public function dologin(){
       /* array('verify_code'=>'当前验证码的值','verify_time'=>'验证码生成的时间戳')*/
        $txt_check = I('post.yzm');
        $username = I('post.user');
        $password = md5(I('post.password')) ;
        if(check_verify($txt_check) == false) {
            $data['msg']="验证码错误!";
            $data['state']="0";
            $this->ajaxReturn($data);
        }
        $map = array();
        $map['name'] = $username;
        $map['number'] = $password;
        $map['state'] = '0';
        $admin=M('adminuser');
        $adminInfo=$admin->where($map)->find();
        if($adminInfo){
            session('admin',$adminInfo);
            $data['msg']='成功';
            $data['state']="1";
            $data['addres']=U('Index/index');
            $this->ajaxReturn($data);
        }else{
            $data['msg']='用户名或者密码不正确!';
            $data['state']='2';
            $this->ajaxReturn($data);
        }

    }
    public function test(){
          return session('verify');
    }


}
