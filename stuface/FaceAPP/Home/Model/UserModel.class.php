<?php
namespace Home\Model;
use Think\Model;
	class UserModel extends Model{
		public function dologin(){
			$M = M('User');
			$data['uid']= I('post.username');
			$data['password'] = I('post.password');
			$res = $M->where($data)->find();
			$i=M('Image')->find();
			if($res){
				var_dump($res);
				session('uid',$res['uid']);
				session('has_upload',$res['has_upload']);
				session('vote_day',$res['vote_day']);
				session('user_sex',$res['sex']);
				cookie('has_upload',$res['has_upload']);
				cookie('vote_day',$res['vote_day']);
				return "登录成功!";
			}else{
				return "账号或密码错误!";
			}
		/*	session('user',I('post.username'));
			//$order = 'id';
			var_dump(I('session.user'));
			if(!empty($_POST))
				$begin = I('get.page') ? (I('get.page')-1)*12 : 0 ;
			$res = $M->where($data)->order(I('session.order'))->limit($begin,2)->select();
			return $res;
		*/
		}

		public function dovote(){
			
			$vote_day = I('session.vote_day');
    		$where['uid'] = I('session.uid');
    		$filename = I('post.filename');
    		$save['vote_day'] = date('d',time());
    		$U = M('User')->where($where)->save($save);
			
		}
	} 		
