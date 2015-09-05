<?php
namespace Admin\Controller;
use Think\Controller;
class CheckController extends Controller {
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
  
    public function showdata(){
        //每隔几秒请求一次
        $data = M('Image')->getdata();
        $this->ajaxReturn($data);
    }

    public function change(){
        if(I('post.uid')!=null && I('post.state')!=null){
            $where['uid'] = I('post.uid');
            $data['is_pass'] = I('post.state');
        }
        M('Image')->where($where)->save($data);
    }

    public function get_pic(){
        $res = D('Image')->showpic();
        $this->ajaxReturn($res);
    }

    public function get_page(){
        $res = D('Image')->showpage();
        $this->ajaxReturn($res);
    }
}