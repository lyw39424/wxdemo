<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Common\CommonController;
class RoleController extends CommonController{
public function index(){
    $role=M('rolue');
    $list = $role->select();
    foreach ($list as $keys=>$values) {
        $detail=M('wechat')->where("id='".$list[$keys]['wxid']."'")->find();
        $list[$keys]['wxid']=$detail['wxname'];
    }
    $this->assign('list', $list);
    $this->display();
}
    public function add(){
        if (IS_POST) {
            $ids=I('post.id');
$roule=M('rolue');
            $roule->where("id='".$ids."'")->delete();
            $wxid=I('post.wxid');
            $roleName=I('post.roleName');
            $char=I('post.Character');
            $charo=I('post.Charactero');
            $chart=I('post.Charactert');
            $create_time = date("Y-m-d H:i:s", time());
            $data['creat_time'] = $create_time;
            $user= session('admin');
            $data['creat_name']=$user['username'];
            $data['creat_id'] = $user['id'];
            foreach ($char as $key=>$mcode) {
                foreach ($charo as $keys=>$mcodes) {
                    if($charo[$keys][$key]!=''){
                    $twocode[]=$charo[$keys][$key];
                    }
                  foreach ($chart as $keyss=>$mcodess) {
                      if($chart[$keyss][$keys][$key]!=''){
                        $thcode[]=$chart[$keyss][$keys][$key];
                      }
                      }
                }
                $onemane[]=$char[$key];
            }
            $data['name']=$roleName;
            $data['number']=$this->guid();
            $data['wxid']=$wxid;
            $data['catalog']=implode(',',$onemane);
            $data['two_cate']=implode(',',$twocode);
            $data['code']=implode(',',$thcode);
            M('rolue')->add($data);
            header('location:'.U('Role/index'));
            return;
        }
        //所属公众号
        $wechat=M('wechat');
        $weslect=$wechat->select();
        $this->assign('wechat',$weslect);
        //查询二级菜单值
        $hmenu=M('hmenu');
        $onecode=$hmenu->distinct(true)->field('menu_cate')->select();
        foreach($onecode as $onekey =>$onevalue){
           $twocode=$hmenu->distinct(true)->field('menu_tite,titel_code,z_fkid')->where("menu_cate='".$onecode[$onekey]['menu_cate']."'")->select();
            $onecode[$onekey]['twocode']=$twocode;
             foreach($twocode as $key=>$value){
                $hmenu = M("hmenu");
                $detail = $hmenu->where("f_fkid='".$twocode[$key]['z_fkid']."'")->select();
                $onecode[$onekey]['twocode'][$key]['buttons']=$detail;
            }
        }

        $this->assign('list',$onecode);
        $this->display();
    }
    public function  update(){
         $id=I('id');
        $wechat=M('wechat');
        $weslect=$wechat->select();
        $this->assign('wechat',$weslect);
        $role=M('rolue');
        //将已经有的值转成数组
        $detail=$role->where("id='".$id."'")->find();
        $weds=M('wechat')->where("id='".$detail['wxid']."'")->find();
        $this->assign('names',$weds);
        $this->assign('detail',$detail);
        $one=explode(',',$detail['catalog']);
        $tg=explode(',',$detail['two_cate']);
        foreach($tg as $value){
       //截取字符串(名称+方法得到的)
        $jieq=strstr($value,'+');
        $tgs[]=ltrim($jieq,'+');
        }
        $two=$tgs;
        $three=explode(',',$detail['code']);;
        //先查询全部
        $hmenu=M('hmenu');
        $onecode=$hmenu->distinct(true)->field('menu_cate')->select();
        foreach($onecode as $onekey =>$onevalue){
                                       in_array($onecode[$onekey]['menu_cate'], $one) ? $onecode[$onekey]["checked"] = " checked " : $onecode[$onekey]["checked"] = "";
            $twocode=$hmenu->distinct(true)->field('menu_tite,titel_code,z_fkid')->where("menu_cate='".$onecode[$onekey]['menu_cate']."'")->select();
            $onecode[$onekey]['twocode']=$twocode;
            foreach($twocode as $key=>$value){
                $hmenu = M("hmenu");
                $detail = $hmenu->where("f_fkid='".$twocode[$key]['z_fkid']."'")->select();
                $onecode[$onekey]['twocode'][$key]['buttons']=$detail;
                                   in_array($twocode[$key]['titel_code'], $two) ? $onecode[$onekey]['twocode'][$key]["checked"] = " checked " : $onecode[$onekey]['twocode'][$key]["checked"] = "";
                foreach($detail as $thre=>$thres){
                                      in_array($detail[$key]['menu_code'], $three) ?  $onecode[$onekey]['twocode'][$key]['buttons'][$thre]["checked"] = " checked " : $onecode[$onekey]['twocode'][$key]['buttons'][$thre]["checked"] = "";

                  }

            }
        }

        $this->assign('list',$onecode);

       $this->display();
    }

    public function delete()
    {
        $id = I('id');
        $role = D('rolue');
        $result = $role->where("id='". $id ."'")->delete();
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
