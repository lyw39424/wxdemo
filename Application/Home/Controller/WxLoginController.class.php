<?php


namespace Home\Controller;

use Think\Controller;


class WxLoginController extends Controller{
    public function login(){
        $users = session('admin');
        $admin=M('adminuser');
        $adminInfo=$admin->where("id='".$users['id']."'")->find();
        $adminInfo['is_value']='0';
        $admin->save($adminInfo);
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
        $map['state'] = '1';
        $map['is_value'] = '0';
        $admin=M('adminuser');
        $adminInfo=$admin->where($map)->find();
        $create_time = date("Y-m-d H:i:s", time());
        $ip = get_client_ip();
        if($adminInfo){
            session('admin',$adminInfo);
            $data['msg']='成功';
            $data['state']="1";
            $data['addres']=U('WxIndex/index');
            $adminInfo['is_value']='1';
            $adminInfo['ip']=$ip;
            $adminInfo['nice']=$adminInfo['nice']+'1';
            $adminInfo['update_time']=$create_time;
            $admin->save($adminInfo);
            $total=M('total');
            $dat['a_strators']=$adminInfo['id'];
            $dat['creat_time']=$create_time;
            $dat['wxid']=session('wxid');
            $total->add($dat);

            $this->ajaxReturn($data);
        }else{
            $data['msg']='请确认您的密码！联系管理员!';
            $data['state']='2';
            $this->ajaxReturn($data);
        }

    }
    public function test(){
          return session('verify');
    }


}
