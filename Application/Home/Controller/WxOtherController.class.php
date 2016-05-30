<?php
namespace Home\Controller;
use Think\Controller;
use Home\Common\CommonController;
class WxOtherController extends CommonController
{
    public  function  welcome(){
        $wxid=session('wxid');
        $colum=M('setcolumn')->field("scolumn")->where("wxid='".$wxid."'")->find();
        $this->assign('title',$colum['scolumn']);
        $users = session('admin');
        $this->assign('admin',$users);
        //统计信息
        $Dao = M();
        //总数
        $total=M('total');
        $user=M('user');
        $zgnum=$total->where("wxid='".$wxid."'")->count('a_strators');
        $zwnum=$user->where("wxid='".$wxid."'")->count();
        //今日
        $create_time = date("Y-m-d", time());
        //and creat_time=".$create_time.
        $jgnum=$Dao->query("SELECT COUNT(a_strators) as one FROM wx_total WHERE  wxid=$wxid");
        $jwnum=$Dao->query("SELECT COUNT(*) as one FROM wx_user WHERE  wxid='".$wxid."' and wxtime=".$create_time);
        $this->assign('zgnum',$zgnum);
        $this->assign('zwnum',$zwnum);
        $this->assign('jgnum',$jgnum['one']);
        $this->assign('jwnum',$jwnum['one']);
        //加入服务器信息
        $info = array(
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            '主机名'=>$_SERVER['SERVER_NAME'],
            'WEB服务端口'=>$_SERVER['SERVER_PORT'],
            '网站文档目录'=>$_SERVER["DOCUMENT_ROOT"],
            '浏览器信息'=>substr($_SERVER['HTTP_USER_AGENT'], 0, 40),
            '通信协议'=>$_SERVER['SERVER_PROTOCOL'],
            '请求方法'=>$_SERVER['REQUEST_METHOD'],
            'ThinkPHP版本'=>THINK_VERSION,
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '用户的IP地址'=>$_SERVER['REMOTE_ADDR'],
            '剩余空间'=>round((disk_free_space(".")/(1024*1024)),2).'M',
        );
        $this->assign('info',$info);
    $this->display();
}


    public  function  shield(){
        if (IS_POST) {
            $ip = $_SERVER["REMOTE_ADDR"];
            $time = date("Y-m-d H:i:s", time());
            $from = I('post.key_word');
            $myfile = 'logs.txt';
            $str =$from;
            $file_pointer = fopen($myfile, "w+");
            fwrite($file_pointer, $str);
            fclose($file_pointer);
        }
        $handle = fopen('logs.txt', 'r');
        $ff= fgets($handle, 1024);
        fclose($handle);
        $this->assign('key_word',$ff);
        $this->display();
    }
//日志
    public  function  log(){
        $log=M('log');
        $map['wxid']=session('wxid');
        $count = $log->where($map)->count();
        $Page=getpage($count);
        $show=$Page->show();//分页显示输出
        $this->assign('map',$map);
        $list = $log->order('id desc')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list', $list);
        $this->display();
    }
}