<?php
namespace Home\Controller;
use Think\Controller;

class MyimageController extends Controller {
    public function index(){
   		if ($handle = opendir('./Public/myimage')) {
 			while (false !== ($file = readdir($handle))  ) {
     			if($file!='.' && $file!= '..'	){
					$picpath = './Public/myimage/'.$file;
     				dothumb($picpath);
     				D('Image')->add($file);
     			}
 			}
 		}
    }
    
}