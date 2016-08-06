<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function login(){
        $manager = I('manager');
        $password = I('password');

        if($manager=='redrockstaff' && $password=='redrockstaff'){
            session('manager', $manager);
            $this->ajaxReturn("true");
        }
    }
    public function logout(){
        session('manager', null);
        echo"<script>window.location.href='".U('Index/index')."'</script>";
    }
}
