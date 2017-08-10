<?php
namespace Admin\Controller;
use Think\Controller;
class ApiController extends Controller {
	public function index(){
		$where = [
			'is_pass' => 2,
		];
		$message = M('user')->where($where)->join('tbl_image ON tbl_user.uid = tbl_image.uid')->order('vote')->select();
		$this->assign('message', $message);
		$this->display();
	}
}