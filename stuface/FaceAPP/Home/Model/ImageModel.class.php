<?php
namespace Home\Model;
use Think\Model;
	class ImageModel extends Model{
		public function add($filename){
			$M = M('Image');
			$big_name = get_big_name($filename);
			$uid = get_uid($filename);
			$data['pic'] = $filename;
			$data['big_pic'] = $big_name;
			$data['uid'] = $uid;
			if(I('session.user_sex') != null)
				$data['sex'] = I('session.user_sex');
			if(I('post.phone') != null){
				$user['phone'] = I('post.phone');
				$user['uid'] = $uid;
				M('User')->add($user);
			}
			var_dump($data);
			$M->add($data);
		}
		public function dovote(){
			$I = M('Image')->query("UPDATE tbl_image set vote =vote+1 WHERE uid =I('session.uid') ");
		}
		
		public function showpic(){
	        if(I('post.limit') == 'new')
	            $order = 'time desc';   //session('order','time desc');
	        if(I('post.limit') == 'hot')
	            $order = 'vote';        //session('order','vote desc');
	        if(I('post.sex') != null) 
	            $data['sex'] = I('post.sex');//session('sex',I('post.sex'));
	        $begin = I('get.page') ? (I('get.page')-1)*12 : 0 ;
	        $res = M('Image');->where($data)->order("$order")->limit($begin,12)->select();
	        return $res;
	    }
	

	} 