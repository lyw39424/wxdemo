<?php
namespace Home\Common;
use Think\Controller;
class UploadController extends Controller {
    public function editor($path) {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     0 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','mp4','.wmv');// 设置附件上传类型
        $upload->savePath =$path;
        //多张图片
        /* $info=$upload->upload(array($_FILES['sss'])); */
        $info=$upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
            //上传失败
            $data= array(state=>'2',
                url=>'传输');
            $this->ajaxReturn($data);
        }
        else{// 上传成功 获取上传文件信息
            foreach($info as $file){
                $data= array(state=>'1',
                    url=>$file['savepath'].$file['savename']
                );
            }
            
            $this->ajaxReturn($data);
        }
             
    }
    //单张图片上传
    public function img($file,$path) {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     0 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath =$path;
        //多张图片
        /* $info=$upload->upload(array($_FILES['sss'])); */
        $info=$upload->upload(array($file));
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
            //上传失败
            $data= array(state=>'2',
                url=>'传输');
            return $data;
           /*  $this->ajaxReturn($data); */
        }
        else{// 上传成功 获取上传文件信息
        foreach($info as $file){
                $data= array(state=>'1',
                    url=>$file['savepath'].$file['savename']
                );
            }
           
           $this->resizejpg(__ROOT__.'/Uploads'.$data['url']);
            return $data;
          /*  $this->ajaxReturn($data); */
        }
         
    }
    
}
