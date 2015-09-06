<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
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
    
    

}