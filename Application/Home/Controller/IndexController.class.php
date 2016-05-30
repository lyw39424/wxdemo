<?php


namespace Home\Controller;

use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;


class IndexController extends Controller{
    /**
     * 微信消息接口入口
     * 所有发送到微信的消息都会推送到该操作
     * 所以，微信公众平台后台填写的api地址则为该操作的访问地址
     */
    public function index(){
        $ids=$_REQUEST['id'];
        session('wxids',$ids);
        try{
            $weichat=M('wechat');
            $weichats=$weichat->where("id=$ids")->find();
            $appid =$weichats['appid']; //AppID(应用ID)
            $token= $weichats['token']; //微信后台填写的TOKEN
            $crypt ='d2utmG17Kjh8Brzlyd0z8yPBd626OtOAt07sw5OqLFj'; //消息加密KEY（EncodingAESKey）
            
            /* 加载微信SDK */
            $wechat = new Wechat($token, $appid, $crypt);
            
            /* 获取请求信息 */
            $data = $wechat->request();
            if($data && is_array($data)){
                /**
                 * 你可以在这里分析数据，决定要返回给用户什么样的信息
                 * 接受到的信息类型有10种，分别使用下面10个常量标识
                 * Wechat::MSG_TYPE_TEXT       //文本消息
                 * Wechat::MSG_TYPE_IMAGE      //图片消息
                 * Wechat::MSG_TYPE_VOICE      //音频消息
                 * Wechat::MSG_TYPE_VIDEO      //视频消息
                 * Wechat::MSG_TYPE_SHORTVIDEO //视频消息
                 * Wechat::MSG_TYPE_MUSIC      //音乐消息
                 * Wechat::MSG_TYPE_NEWS       //图文消息（推送过来的应该不存在这种类型，但是可以给用户回复该类型消息）
                 * Wechat::MSG_TYPE_LOCATION   //位置消息
                 * Wechat::MSG_TYPE_LINK       //连接消息
                 * Wechat::MSG_TYPE_EVENT      //事件消息
                 *
                 * 事件消息又分为下面五种
                 * Wechat::MSG_EVENT_SUBSCRIBE    //订阅
                 * Wechat::MSG_EVENT_UNSUBSCRIBE  //取消订阅
                 * Wechat::MSG_EVENT_SCAN         //二维码扫描
                 * Wechat::MSG_EVENT_LOCATION     //报告位置
                 * Wechat::MSG_EVENT_CLICK        //菜单点击
                 */

                //记录微信推送过来的数据
                file_put_contents('./data.json', json_encode($data));

                /* 响应当前请求(自动回复) */
                //$wechat->response($content, $type);

                /**
                 * 响应当前请求还有以下方法可以使用
                 * 具体参数格式说明请参考文档
                 * 
                 * $wechat->replyText($text); //回复文本消息
                 * $wechat->replyImage($media_id); //回复图片消息
                 * $wechat->replyVoice($media_id); //回复音频消息
                 * $wechat->replyVideo($media_id, $title, $discription); //回复视频消息
                 * $wechat->replyMusic($title, $discription, $musicurl, $hqmusicurl, $thumb_media_id); //回复音乐消息
                 * $wechat->replyNews($news, $news1, $news2, $news3); //回复多条图文消息
                 * $wechat->replyNewsOnce($title, $discription, $url, $picurl); //回复单条图文消息
                 * 
                 */
                
                //执行Demo
                $this->demo($wechat, $data,$weichats,$ids);
            }
        } catch(\Exception $e){
            file_put_contents('./error.json', json_encode($e->getMessage()));
        }
        
    }

    /**
     * DEMO
     * @param  Object $wechat Wechat对象
     * @param  array  $data   接受到微信推送的消息
     */
    private function demo($wechat, $data,$weichats,$ids){
        file_put_contents('log.txt', $data['MsgType'].'\n',FILE_APPEND);
        switch ($data['MsgType']) {
          //关注和取消事件
            case Wechat::MSG_TYPE_EVENT:
                switch ($data['Event']) {
                    case Wechat::MSG_EVENT_SUBSCRIBE:
                        //将关注者信息加入存入库中
                        $this->user($data,$weichats,$ids);
                   $wechat->replyText('欢迎您关注lyw测试信息的信息！');
                        break;
                    case Wechat::MSG_EVENT_UNSUBSCRIBE:
                        $openid=$data['FromUserName'];
                        $this->del($openid);
                        //取消关注，记录日志
                        break;
                    case Wechat::MSG_EVENT_VIEW:
                        $openid=$data['FromUserName'];
                        break;
                    default:
                        $wechat->replyText("欢迎访问麦当苗儿公众平台！您的事件类型：{$data['Event']}，EventKey：{$data['EventKey']}");
                        break;
                }
                break;
          //关键字回复
            case Wechat::MSG_TYPE_TEXT:
                switch ($data['Content']) {
                    case '文本':
                        $wechat->replyText('欢迎访问麦当苗儿公众平台，这是文本回复的内容！');
                        break;

                    case '图片':
                        //$media_id = $this->upload('image');
                        $media_id = 'http://yun.topthink.com/Uploads/Editor/2015-07-30/55b991cad4c48.jpg';
                        $wechat->replyImage($media_id);
                        break;

                    case '语音':
                        //$media_id = $this->upload('voice');
                        $media_id = '1J03FqvqN_jWX6xe8F-VJgisW3vE28MpNljNnUeD3Pc';
                        $wechat->replyVoice($media_id);
                        break;

                    case '视频':
                        //$media_id = $this->upload('video');
                        $media_id = 'http://yun.topthink.com/Uploads/Editor/2015-07-30/55b991cad4c48.jpg';
                        $wechat->replyVideo($media_id, '视频标题', '视频描述信息。。。');
                        break;

                    case '音乐':
                        //$thumb_media_id = $this->upload('thumb');
                        $thumb_media_id = '1J03FqvqN_jWX6xe8F-VJrjYzcBAhhglm48EhwNoBLA';
                        $wechat->replyMusic(
                            'Wakawaka!', 
                            'Shakira - Waka Waka, MaxRNB - Your first R/Hiphop source', 
                            'http://wechat.zjzit.cn/Public/music.mp3', 
                            'http://wechat.zjzit.cn/Public/music.mp3', 
                            $thumb_media_id
                        ); //回复音乐消息
                        break;
                    case '图文':
                        $wechat->replyNewsOnce(
                            "全民创业蒙的就是你，来一盆冷水吧！",
                            "全民创业已经如火如荼，然而创业是一个非常自我的过程，它是一种生活方式的选择。从外部的推动有助于提高创业的存活率，但是未必能够提高创新的成功率。第一次创业的人，至少90%以上都会以失败而告终。创业成功者大部分年龄在30岁到38岁之间，而且创业成功最高的概率是第三次创业。", 
                            "http://www.topthink.com/topic/11991.html",
                            "http://yun.topthink.com/Uploads/Editor/2015-07-30/55b991cad4c48.jpg"
                        ); //回复单条图文消息
                        break;

                    case '多图文':
                        $news = array(
                            "全民创业蒙的就是你，来一盆冷水吧！",
                            "全民创业已经如火如荼，然而创业是一个非常自我的过程，它是一种生活方式的选择。从外部的推动有助于提高创业的存活率，但是未必能够提高创新的成功率。第一次创业的人，至少90%以上都会以失败而告终。创业成功者大部分年龄在30岁到38岁之间，而且创业成功最高的概率是第三次创业。", 
                            "http://www.topthink.com/topic/11991.html",
                            "http://yun.topthink.com/Uploads/Editor/2015-07-30/55b991cad4c48.jpg"
                        ); //回复单条图文消息

                        $wechat->replyNews($news, $news, $news, $news, $news);
                        break;
                    
                    default:
                        $this->message($data);
                        $wechat->replyText("欢迎访问麦当苗儿公众平台！您输入的内容是：{$data['Content']}");
                        break;
                }
                break;
            
            default:
                # code...
                break;
        }
    }

private function message($data){
    $openid=$data['FromUserName'];
    $create_time = date("Y-m-d H:i:s", time());
    $data['creat_time'] = $create_time;
    $data['from_user'] = $openid;
    $data['count'] = $data['Content'];
    $data['reply'] = '1';
    $data['wxid'] = session('wxids');
    M('message')->add($data);
}
//关注时录入程序
    private  function  user($data,$weichats,$ids){
        //根据openid 获取详细信息
        $appid=$weichats['appid'];
        $secret=$weichats['appsecret'];
        $openid=$data['FromUserName'];
        $getton=new WechatAuth(trim($appid),trim($secret));
        //获取accesstoken同课呢、
        $accesstoken=$getton->getAccessToken();
        $token=$accesstoken['access_token'];
         $usermassage=new WechatAuth(trim($appid),trim($secret),$token);
        $userinfo=$usermassage->userInfo(trim($openid));
        $user=M('user');
        $users['openid']=$openid;
        $users['bickname']=$userinfo['nickname'];
        $users['sex']=$userinfo['sex'];
        $users['city']=$userinfo['city'];
        $users['country']=$userinfo['country'];
        $users['provice']=$userinfo['province'];
        $users['imgurl']=$userinfo['headimgurl'];
        $users['wxtime']=$userinfo['subscribe_time'];
        $users['wxid']=$ids;
        $users['state']='1';
        $user->add($users);
    }
//取消关注删除用户信息
private  function  del($openid){
    $User = M("user"); // 实例化User对象
    $data=$User->where('openid='.$openid)->find();
    $data['state']='0';
    $User->save($data); // 删除id为5的用户数据
}
    /**
     * 资源文件上传方法
     * @param  string $type 上传的资源类型
     * @return string       媒体资源ID
     */
    public function upload($type,$weichats,$music){
        $appid=$weichats['appid'];
        $appsecret=$weichats['appsecret'];
        $getton=new WechatAuth(trim($appid),trim($appsecret));
        //获取accesstoken同课呢、
        $accesstoken=$getton->getAccessToken();
        $token=$accesstoken['access_token'];
        if($token){
            $auth = new WechatAuth($appid, $appsecret, $token);
        } else {
            $auth  = new WechatAuth($appid, $appsecret);
            $token = $auth->getAccessToken();
            session(array('expire' => $token['expires_in']));
            session("token", $token['access_token']);
        }

        switch ($type) {
            case 'image':
                $filename = './Uploads'.$music;
                $media    = $auth->materialAddMaterial($filename, $type);
                break;

            case 'voice':
                $filename = './Uploads'.$music;
                $media    = $auth->materialAddMaterial($filename, $type);
                break;

            case 'video':
                $filename = './Uploads'.$music;
                $discription = array('title' => '视频标题', 'introduction' => '视频描述');
                $media       = $auth->materialAddMaterial($filename, $type, $discription);
                break;

            case 'thumb':
                $filename = './Uploads'.$music;
                $media    = $auth->materialAddMaterial($filename, $type);
                break;

            default:
                return '';
        }

        if($media["errcode"] == 42001){ //access_token expired
            session("token", null);
            $this->upload($type);
        }
        return $media['media_id'];
    }
}
