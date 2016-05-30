<?php


namespace Home\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
use Home\Common\CommonController;
class WxMenuController extends CommonController
{
    //将菜单发送到API
    public function  index(){
        $ids="1";
        $menues=M('menue');
         //新增菜单
        if(IS_POST){
            $menue=M('menue');
            $menue->where('1')->delete();
       if(isset($_POST['menu0'])){
            for($i=0;$i<3;$i++){
             $uuids=$this->guid();
             $uuid=substr($uuids, 1, -1) ;
             $date['uuid']=$uuid;
             $button="menu{$i}";//一级名称
             $type="menu{$i}_box";//一级类型
             $key="menu{$i}_$i";//一级菜单的值
             $sub_button="menu{$i}_menu0";//二级菜单名字
             //写入一级菜单到数据库
               if(trim($_POST[$sub_button])!='')
                {
                    $menus['button'][$i]['name']=$_POST[$button];
                    $dates['uuid']=$uuid;
                    $dates['pid']='0';
                    $dates['me_name']=$_POST[$button];;
                    $dates['wxid']=$ids;
                    $menue->add($dates);
                    for($j=0;$j<5;$j++){
                    $sub_button="menu{$i}_menu{$j}";//二级菜单名字
                    $sub_type="menu{$i}_box{$j}";//erji caidna  类型
                    $sub_key="menu{$i}_key{$j}";//erji caidn   zh
                        //写入二级菜单到数据库
                    if($_POST[$sub_button]!='')
                    {
                        if($_POST[$sub_type]=='click'){
                            $menus['button'][$i]['sub_button'][$j]['type']='click';
                            $menus['button'][$i]['sub_button'][$j]['name']= $_POST[$sub_button];
                            $menus['button'][$i]['sub_button'][$j]['key']=$_POST[$sub_key];
                            $date['tw_name']=$_POST[ $sub_button];
                            $date['me_type']='click';
                            $date['url_value']=$_POST[$sub_key];
                            $date['pid']=$uuid;
                            $date['wxid']=$ids;

                        }else if($_POST[$sub_type]=='view'){
                            $menus['button'][$i]['sub_button'][$j]['type']='view';
                            $menus['button'][$i]['sub_button'][$j]['name']= $_POST[$sub_button];
                            $menus['button'][$i]['sub_button'][$j]['url']=$_POST[$sub_key];
                            $date['tw_name']=$_POST[ $sub_button];
                            $date['me_type']='click';
                            $date['url_value']=$_POST[$sub_key];
                            $date['pid']=$uuid;
                            $date['wxid']=$ids;
                        }

                    }
//增加数据
                        $menue->add($date);
                    }

                }
                else{

                   if($_POST[$button]!='')
                   {

                       if($_POST[$type]=='click'){
                           $menus['button'][$i]['type']='click';
                           $menus['button'][$i]['name']=$_POST[ $button];
                           $menus['button'][$i]['key']=$_POST[$key];
                           $date['me_name']=$_POST[ $button];
                           $date['me_type']='click';
                           $date['url_value']=$_POST[$key];
                           $date['pid']='0';
                           $date['wxid']=$ids;
                       }else if($_POST[$type]=='view'){
                           $menus['button'][$i]['type']='view';
                           $menus['button'][$i]['name']=$_POST[$button];
                           $menus['button'][$i]['url']=$_POST[$key];
                           $menus['button'][$i]['type']='view';
                           $menus['button'][$i]['name']=$_POST[ $button];
                           $menus['button'][$i]['key']=$_POST[$key];
                           $date['me_name']=$_POST[ $button];
                           $date['me_type']='click';
                           $date['url_value']=$_POST[$key];
                           $date['pid']='0';
                           $date['wxid']=$ids;
                       }
                       //增加数据
                       $menue->add($date);
                   }

                }

            }

        }
        $weichat=M('wechat');
        $weichats=$weichat->where("id=$ids")->find();
        $appid =$weichats['appid']; //AppID(应用ID)
        $secret= $weichats['appsecret']; //微信后台填写的TOKEN
        $getton=new WechatAuth(trim($appid),trim($secret));
        //获取accesstoken
        $accesstoken=$getton->getAccessToken();
        $token=$accesstoken['access_token'];
        $usermassage=new WechatAuth(trim($appid),trim($secret),$token);
        //穿入自定义菜单
      $massage=$usermassage->menuCreate($menus);
       if($massage['errcode']='0'){
           header('location:' . U('WxMenu/Index'));
           return;
       }else{
       $this->error("请联系管理员，菜单错误!");
           return;
       }
        }else{
            $map['pid'] = '0';
            $map['wxid'] = 1;
            $onemenue=$menues->where($map)->select();
            foreach ($onemenue as $key => $value) {
                $pid="'".$onemenue[$key]['uuid']."'";
                $arr=$menues->where('pid='.$pid)->select();
                $onemenue[$key]['twomenu']=$arr;
            }

            $this->assign('menuo',$onemenue['0']);
            $this->assign('osubmenuo',$onemenue['0']['twomenu']['0']);
            $this->assign('tsubmenuo',$onemenue['0']['twomenu']['1']);
            $this->assign('ssubmenuo',$onemenue['0']['twomenu']['2']);
            $this->assign('fsubmenuo',$onemenue['0']['twomenu']['3']);
            $this->assign('esubmenuo',$onemenue['0']['twomenu']['4']);
            $this->assign('menut',$onemenue['1']);
            $this->assign('osubmenut',$onemenue['1']['twomenu']['0']);
            $this->assign('tsubmenut',$onemenue['1']['twomenu']['1']);
            $this->assign('ssubmenut',$onemenue['1']['twomenu']['2']);
            $this->assign('fsubmenut',$onemenue['1']['twomenu']['3']);
            $this->assign('esubmenut',$onemenue['1']['twomenu']['4']);
            $this->assign('menus',$onemenue['2']);
            $this->assign('osubmenus',$onemenue['2']['twomenu']['0']);
            $this->assign('tsubmenus',$onemenue['2']['twomenu']['1']);
            $this->assign('ssubmenus',$onemenue['2']['twomenu']['2']);
            $this->assign('fsubmenus',$onemenue['2']['twomenu']['3']);
            $this->assign('esubmenus',$onemenue['2']['twomenu']['4']);
$this->display();
        }

    }


    //主键----外键信息
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