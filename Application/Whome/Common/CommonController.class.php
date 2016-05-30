<?php
namespace Home\Common;
use Think\Controller;
class CommonController extends Controller {
    protected function _initialize()
    {
        $users = session('admin');
        if (strtolower(CONTROLLER_NAME) != 'login' && strtolower(CONTROLLER_NAME) != 'public') {
            if ($users['id'] == '' || $users['state'] != '1') {
                header("Location: " . U('WxLogin/login'));
                die;
            }
        }

    }
}
