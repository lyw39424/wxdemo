<?php
namespace Home\Common;
use Think\Controller;
class CommonController extends Controller {
    protected function _initialize(){
       $users = session('admin');
        if (strtolower(CONTROLLER_NAME) != 'login' && strtolower(CONTROLLER_NAME) != 'public') {
            if ($users['id']==''|| $users['state']!='1') {
                header("Location: " . U('WxLogin/login'));
                die;
            }
            $role=M('rolue');
            $id=$users['code'];
            $detail=$role->where("id='".$id."'")->find();
            session("wxid",$detail['wxid']);
            $one=explode(',',$detail['catalog']);
            $tg=explode(',',$detail['two_cate']);
            foreach($tg as $value){
                //截取字符串(名称+方法得到的)
                $jieq=strstr($value,'+');
                $tgs[]=ltrim($jieq,'+');
            }
            $two=$tgs;

            //先查询全部
            $hmenu=M('hmenu');
            $onecode=$hmenu->distinct(true)->field('menu_cate')->select();
            foreach($onecode as $onekey =>$onevalue){
                if(in_array($onecode[$onekey]['menu_cate'], $one)){
                    //组装一级菜单
                    if($onecode[$onekey]['menu_cate']!=""){
                        $onename[$onekey]['name']=$onecode[$onekey]['menu_cate'];
                        }
                    $twocode=$hmenu->distinct(true)->field('menu_tite,titel_code,z_fkid')->where("menu_cate='".$onecode[$onekey]['menu_cate']."'")->select();
                    foreach($twocode as $key=>$value){
                       $ff=$twocode[$key]['titel_code'];
                        //需要替换字符串
                        $url=str_replace("-","/",$ff);
                        if(in_array($ff, $two)){
                            if($ff!=""){
                                $onename[$onekey]['test'][$key]['url']=__APP__."/".$url;
                                $onename[$onekey]['test'][$key]['name']=$twocode[$key]['menu_tite'];
                                /*echo ($twocode[$key]['menu_tite']);*/
                            }

                        }
                    }

                }

            }
            $this->assign('menus',$onename);
            $this->assign('admin',$users);

            if(in_array(CONTROLLER_NAME."-".ACTION_NAME, $two)){
                $state="0";
            }else{
                $data2 = array(
                    'id'=>$id,
                    'code'=>array('like','%'.CONTROLLER_NAME."-".ACTION_NAME.'%'),
                );
                $mune=$role->where($data2)->select();
                if($mune){
                    $state="0";
                }
            }
            $create_time = date("Y-m-d H:i:s", time());
            $ip = get_client_ip();
            $log=M('log');
            $logs['wxid']=session('wxid');
            $logs['name']=$users['name'];
            $logs['ip']=$ip;
            $logs['creat_time']=$create_time;
           if($state=="1"){
               $logs['count']='登陆失败!';
               $log->add($logs);
           $this->error('很抱歉您没有权限操作此功能');
               return;
                     }
            $logs['count']='登陆成功!';
            $log->add($logs);
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
