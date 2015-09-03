<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$data = D('Image')->showpic();
    	$this->display();
    }

    public function login(){
    	if(I('post.username')!=null){
    		$res = D('User')->dologin();
    		var_dump($res);
    		//$this->ajaxReturn($res);
    	}
    }
    public function upload() {
    	var_dump($_FILES['photo']);
    	if($_FILES['photo']!=null && I('session.username')!=null && I('session.has_upload'==0)){
    		//if(I('session.username')!=null)
    		
    			$filename = dothumb(doupload());
        		D('Image')->add($filename);
        	
    	}
        
    }

    public function vote(){
    	$today = date('d',time());
    	if(session('uid')!=null){
    		if(session('vote_day') < $today){
	    		D('User')->dovote();
	    		D('Image')->dovote();
	    		$res = '投票成功!';
	    	}else{
	    		$res = '亲今天已投过篇了哦！';
	    	}
    	}else{
    		$res = '亲还没登录呢!';
    	}
    		
    	$this->ajaxReturn($res);
    	}
    	
    }

    public function test(){
    	
    	$this->display();
    	//$this->ajaxReturn($data,'json');
    }

   
   
}