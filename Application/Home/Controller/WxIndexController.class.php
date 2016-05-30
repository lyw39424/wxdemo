<?php


namespace Home\Controller;
use Think\Controller;
use Home\Common\CommonController;
class WxIndexController extends CommonController
{
    public  function  add(){

    $this->display();
}
    public  function  index(){
        //获取我的桌面信息
        $wxid=session('wxid');
        $colum=M('setcolumn')->field("scolumn")->where("wxid='".$wxid."'")->find();
        $this->assign('title',$colum['scolumn']);
        /*$users = session('admin');
        $map['id']=$users['code'];
        $map['wxid']=session('wxid');
        $hmenu=M('hmenu');
        $roluw=M('rolue');
        $detail=$roluw->where($map)->find();
        $data=$hmenu->where("id='".$detail['code']."'")->find();
        $one=explode(',',$data['catalog']);
        $tg=explode(',',$data['two_cate']);
        foreach($tg as $value){
            //截取字符串(名称+方法得到的)
            $jieq=strstr($value,'+');
            $tgs[]=ltrim($jieq,'+');
        }
        $two=$tgs;
        print_r($jieq);
        $hmenu=M('hmenu');
        $onecode=$hmenu->distinct(true)->field('menu_cate')->select();
        foreach($onecode as $onekey =>$onevalue){
            if (in_array("$onecode[$onekey]['menu_cate']", $one)) {
            $list[$onekey]['name']=$onecode[$onekey]['menu_cate'];
            }
            $twocode=$hmenu->distinct(true)->field('menu_tite,titel_code,z_fkid')->where("menu_cate='".$onecode[$onekey]['menu_cate']."'")->select();
            $onecode[$onekey]['twocode']=$twocode;
            foreach($twocode as $key=>$value){
                if (in_array("$twocode[$key]['titel_code']", $two)) {
                    $list[$onekey]['name'][$key]['titel_code']=$twocode[$key]['titel_code'];
                    $list[$onekey]['name'][$key]['titel_name']=$twocode[$key]['menu_tite'];
                }
            }
        }

        $this->assign('list',$list);
        die;*/
        $this->display();
    }

}