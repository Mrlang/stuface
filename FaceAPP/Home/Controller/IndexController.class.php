<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function get_page(){
        if(I('get.fetchpage')!=null){
            $page = D('Image')->getpage();
            $this->ajaxReturn($page);
        }     
    }

    public function get_pic(){
        $data = D('Image')->showpic();
        $this->ajaxReturn($data);
    }

    public function changsort(){
        $data = D('Image')->change();
        $this->ajaxReturn($data);
    }

    public function checklog(){
        if(I('session.uid')!=null)
            $this->ajaxReturn(true);
        if(I('session.uid')==null)
            $this->ajaxReturn(false);
    }

    public function login(){
    	if(I('post.username')!=null){
    		$res = D('User')->dologin();
            $this->ajaxReturn($res);
    	}
    }

    public function logout(){
        //if(I('post.logout')==null){}
        D('User')->dologout();
    }

    public function uploadpic() {
        
        if(I('session.has_upload')==0 && I('session.uid')!=null && $_FILES['photo']!=null){
        
            $filename = dothumb(doupload());
                
            D('Image')->addpic($filename);
            
            $where['uid'] = I('session.uid');
            $save['phone'] = I('post.phone');
            $save['has_upload'] = 1;
            session('has_upload',1);
            M('User')->where($where)->save($save);
            $this->ajaxReturn(true);

        }else{
            $this->ajaxReturn(false);
        }

    /*	if(($_FILES['photo']!=null) && (I('session.uid')!=null) && (I('session.has_upload')==0)){
    		//if(I('session.username')!=null)
                $filename = dothumb(doupload());
        		D('Image')->add($filename);
                $where['uid'] = I('session.uid');
                $save['phone'] = I('post.phone');
                M('User')->where($where)->save($save);
        	    $this->ajaxReturn('ccc');
    	}else{
            $this->ajaxReturn("你已上传过照片！");
        }
    */    
        //session('photo',$info);
        //var_dump($a);
        
    }

    public function vote(){
    	$today = date('d',time());
    	if(session('vote_day') < $today){
	    	D('User')->dovote();
	    	D('Image')->dovote();
	    	$res = true;
	    }else{
	    	$res = false;
	    }
    	
    		
    	$this->ajaxReturn($res);
    	
    	
    }

    public function test(){
        var_dump($_SESSION);
        var_dump($_COOKIE);
        //D('User')->test();
    	//$this->display();
    	
    }

    public function add_lover(){
        $user = D('user');
        $condition = $user->pariselover();
        if($condition){
            $this->ajaxReturn('点赞成功');
        }else{
            $this->ajaxReturn('点赞失败');
        }
    }
    
    public function user_select(){
        if(I('get.search')!=null){
            /*$result = D('user')->user_select();
            $this->ajaxReturn($result);*/
            D('Image')->get_pic();
        }
        
    }

    public function log(){
        $data = log_result();
        if($data['status'] == 200 ){
            D('User')->adduser($data);
            $where['uid'] = $data['userInfo']['stu_num'];
            $res = M('User')->where($where)->find();
            if($res){
                session('uid',$res['uid']);
                session('has_upload',$res['has_upload']);
                session('vote_day',$res['vote_day']);
                session('user_sex',$res['sex']);
            }
            $this->ajaxReturn(true);
        }else{
            $this->ajaxReturn(false);
        }
        


    }
   
    public function log_out(){
        session('[destroy]');
        $this->ajaxReturn(true);
    }
}