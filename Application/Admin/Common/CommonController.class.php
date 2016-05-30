<?php
namespace Admin\Common;
use Think\Controller;
class CommonController extends Controller {
    protected function _initialize(){
       $users = session('admin');
        if (strtolower(CONTROLLER_NAME) != 'login' && strtolower(CONTROLLER_NAME) != 'public') {
            if ($users['id']==''|| $users['state']!='0') {
                header("Location: " . U('Login/login'));
                die;
            }

                   }
      }    
     //分页共通查询
    public function page($count)
    {
        $Page=new \Think\Page($count,5);//传入总记录和分页数
        $Page->lastSuffix=false;
        $Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;每页<b>5</b>条&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $Page->parameter=I('get.');
        return $Page;
    }
    
}
