<?php
namespace Home\Common;
use Think\Controller;
use Com\WechatAuth;
class UserInfoController extends Controller {
    //获取code    需要在微信平台加上域名（网页授权用户） 点击修改  加上域名
    public  function code(){
        $https="http://".$_SERVER['HTTP_HOST'].__ROOT__."/WxIndex/user";
        $code=new  WechatAuth($this->appId,$this->appSecret);
        $url=$code->getRequestCodeURL($https);
        //echo "<meta http-equiv='Refresh' content='1;URL=$url'>";
        //header("Location:".$url);
        echo "<script language=javascript> window.location.href = '$url';</script>";
    }
    //获取用户信息
    public  function user(){
        $codes=$_GET['code'];
        $acctoken=new  WechatAuth($this->appId,$this->appSecret);
        $ACCESS_TOKEN= $acctoken->getAccessToken('code',$codes);
        //获取openid
        $user=$acctoken->getUserInfo($ACCESS_TOKEN['openid']);
        session('user',$user);
    }
//生成签名验证  appid 与  appscrecret自己填
    public function jssdk(){
        $wechat=new  WechatAuth($this->appId,$this->appSecret);
        $wechat->getAccessToken();
        $Ticket = $wechat->getticket();
        $jsapiTicket=$Ticket['ticket'];
        //$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url=I('post.url');
        file_put_contents('log1.txt', $url.'\n',FILE_APPEND);
        $createNonceStr =$this->createNonceStr();
        $timestamp = time();
        $string = "jsapi_ticket=$jsapiTicket&noncestr=$createNonceStr&timestamp=$timestamp&url=$url";
//$string = "jsapi_ticket=kgt8ON7yVITDhtdwci0qeTDDCT8xNaC5vU4l0K4MW_f9WjR1843tQooAt3t22rR--YK14e1Ptpx5hKvqUdFRaw&noncestr=fQT0heGYdar5odYd×tamp=1465195061&url=http://zyk.ctibet.cn/museum/WxIndex/jssdk";
        $signature = sha1($string);
        $config ['appId'] = $this->appId;
        $config ['timestamp'] =$timestamp;
        $config['nonceStr'] =$createNonceStr;
        $config['signature'] =$signature;
        $config ['url'] =$url;
        //echo("---".$jsapiTicket."====");
        //echo($string."====");
        echo json_encode($config);
    }
    private function createNonceStr($length = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }
}
