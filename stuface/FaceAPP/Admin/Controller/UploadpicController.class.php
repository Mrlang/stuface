<?php
namespace Admin\Controller;
use Think\Controller;
class UploadpicController extends Controller {
    public function index(){
        $this->display();
    }

    public function logout(){
        /*var_dump(I('session.name'));
        session_unset();
        session_destroy();
        var_dump(I('session.name'));
        echo "session销毁成功";*/
        $this->success('退出成功！',U('Home/Index/index'),3);
    }

    public function uploadpic(){
        $this->display();
    }
    
    public function check(){
        $this->display();
    }
    
    public function search_uid(){
        if(I('post.uid')!=null){
            $where['uid'] = I('post.uid');
            $res = M('User')->where($where)->select();
            if($res)
                $this->ajaxReturn($res);
            else
                $this->ajaxReturn(false);
        }
    }

    public function search_name(){
        if(I('post.name')!=null){
            $where['stu_name'] = I('post.name');
            $res = M('User')->where($where)->select();
            if($res)
                $this->ajaxReturn($res);
            else
                $this->ajaxReturn(false); 
        }
    }

    public function postpic(){
        $info = doupload();
        for($i=0;$i<count($info);$i++){
            savepic($info[$i]['savename']);
            $where['uid'] = get_uid($filename);
            $res = M('User')->where($where)->field('uid,sex,stu_name')->find();
            if($res){
                $info[$i]['stu_data'] = $res;
            }
        }
        $this->ajaxReturn($info);
        
    }

    public function submitpic(){
        $data = I('post.submitdata');
        M('Image')->addpic($data);
    }
}