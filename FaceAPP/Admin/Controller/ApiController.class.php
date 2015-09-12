<?php
namespace Admin\Controller;
use Think\Controller;
class ApiController extends Controller {
	public function index(){
		$message = M('image')->join('tbl_user ON tbl_image.uid = tbl_user.uid')->order('vote')->select();
		$this->assign('message', $message);
		$this->display();
	}
}