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
            if($res)
                $this->ajaxReturn(['status'=>200,'info'=>'成功']);
            else
                $this->ajaxReturn(['status'=>111,'info'=>'密码错误']);
        }
    }

    public function logout(){
        //if(I('post.logout')==null){}
        D('User')->dologout();
    }

    private function doupload(){
        $upload = new \Think\Upload();                      // 实例化上传类
        $upload->maxSize = 3145728;                         // 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
        $upload->rootPath = './Public/upl/';            // 设置附件上传根目录
        $upload->autoSub = false;
        $upload->savePath = ''; 
        if(session('uid')){                      //学生上传单张照片
            $upload->saveName = time().'_'.session('uid');              // 设置上传文件名
            
            $info = $upload->uploadOne($_FILES['photo']);       //执行上传方法
            
            if(!$info) {                                       // 上传错误提示错误信息
                $this->error($upload->getError());
            }else{                                              // 上传成功 获取上传文件信息
                return './Public/upimage/'.$info['savename'];
                }
        }else{                                                  //后台管理员批量上传照片
            $info = $upload->upload($_FILES['photo']);      
                if(!$info) {                                       // 上传错误提示错误信息
                $this->error($upload->getError());
            }else{                                              // 上传成功 获取上传文件信息
                return $info;
            } 
        }

        
    }

    public function uploadpic() {
        if(I('post.uid') != null && I('post.form') != null){
            session('uid', I('post.uid'));
            if(I('post.sex'))
                session('user_sex',I('post.sex'));
            $limit['uid'] = I('post.uid');
            $limit['has_upload'] = 1;
            $res = M('User')->where($limit)->find();
            if($res){
                session("has_upload",1);
            }else{
                session("has_upload",0);
            }
        }
        if(session('has_upload')==0 && session('uid')!=null){


            $filename = dothumb($this->doupload());
                
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

    /*  if(($_FILES['photo']!=null) && (I('session.uid')!=null) && (I('session.has_upload')==0)){
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

/*    public function vote(){
        $today = date('d',time());
        if(session('vote_day') < $today){
            D('User')->dovote();
            D('Image')->dovote();
            $res = true;
        }else{
            $res = false;
        }
        
            
        $this->ajaxReturn($res);
        
        
    }*/

    public function vote(){
        $where['uid'] = I('session.uid');
        $where['vote_uid'] = I('post.uid');
        $today = date('d',time());
        $res = M('Vote')->where($where)->find();
        if(!$res){
            $where['vote_day'] = $today;
            M('Vote')->add($where);
            D('Image')->dovote();
            $return  = true;
        }else{
            $where['vote_day'] = array('lt',$today);
            $res = M('Vote')->where($where)->find();
            if($res){
                $wh['uid'] = I('session.uid');
                $wh['vote_uid']= I('post.uid');
                $data['vote_day'] = $today;
                M('Vote')->where($wh)->save($data);
                D('Image')->dovote();
                $return = true;
            }else{
                $return = false;
            }

        }
        $this->ajaxReturn($return);
    }

    public function test(){
        var_dump($_SESSION);
        var_dump($_COOKIE);
        //D('User')->test();
        //$this->display();
        $res = M('user')->where('uid = 0002')->find();
        if(!$res){
            var_dump($res);
            echo "找不到";
        }
        $where['vote_day'] = array('lt',100);
        $where['uid'] = 1;
        $where['vote_uid'] = 1;
        $res = M('Vote')->where($where)->find();
        var_dump($res);
        
        
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
            $this->ajaxReturn(['status'=>200,'info'=>'成功']);
        }else{
            $this->ajaxReturn(['status'=>111,'info'=>'密码错误']);
        }
        


    }
   
    public function log_out(){
        session('[destroy]');
        $this->ajaxReturn(true);
    }


   

    
    public function save_curl(){
        $uid = curl_uid();//通过微信API获取学号
        $pic = curl_pic();//从微信端扒照片保存到allimage，返回值为文件名 ./Public/allimage/**.--
        $info = curl_info();//通过微信API获取学生信息
        D('User')->save_in_User($uid,$info);//在User表中新增上传照片的学生信息
        D('Image')->save_in_Image($uid,$pic,$info);//在Image表中新增上传照片的照片信息
    }


    /*public function test1(){
        $access_token = 'gh_68f0a1ffc303';
        $media_id = I('post.media_id');
        $url = "http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=$access_token&media_id=$media_id";
        $local = './Public/upimage/'.date("Ymdhis").".jpg";
        $cp = curl_init($url);
        $fp = fopen($local,"w");
        curl_setopt($cp, CURLOPT_FILE, $fp);
        curl_setopt($cp, CURLOPT_HEADER, 0);
        curl_exec($cp);
        curl_close($cp);
        fclose($fp);
        $arr = explode('/', $local);
        $filename = array_pop($arr);
        return $filename;
    }*/
        
        public function aaa(){
            $data = log_result();
            $str = '2015255';
            $reg = "/^2015/";
            if(!preg_match_all($reg, $str,$arr)){
                $this->ajaxReturn(['status'=>111,'info'=>'你不是小鲜肉']);
            }
        }



}
