<?php
	function doupload(){
		$upload = new \Think\Upload();						// 实例化上传类
    	$upload->maxSize = 3145728;							// 设置附件上传大小
    	$upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
    	$upload->rootPath = './Public/upimage/'; 			// 设置附件上传根目录
    	$upload->autoSub = false;
        $upload->savePath = ''; 							// 设置附件上传（子）目录
    	//$upload->saveName = I('session.id');              // 设置上传文件名
        $info = $upload->uploadOne($_FILES['photo']);		//执行上传方法
    	if(!$info) {										// 上传错误提示错误信息
  			$this->error($upload->getError());
		}else{												// 上传成功 获取上传文件信息
			return './Public/upimage/'.$info['savename'];
        }
    }

    function dothumb($picpath){
    	$arr = explode('/', $picpath);
    	$filename = array_pop($arr);
        $big_name = get_big_name($filename);
        $imginfo = getImageSize($picpath);
        $imgw = $imginfo [0];     
        $imgh = $imginfo [1];
    	$image = new \Think\Image();
        $image->open($picpath);
        $image->save('./Public/allimage/'.$big_name);
        $image->thumb(300, 300,\Think\Image::IMAGE_THUMB_SCALE)->save('./Public/allimage/'.$filename);
        unlink($picpath);
	    return $filename;
    }

    function get_big_name($filename){
        $arr = explode('.', $filename);
        $big_name = $arr[0].'_big.'.$arr[1];
        return $big_name; 
    }

    function get_uid($filename){
        $arr = explode('.', $filename);
        $uid = $arr[0];
        return $uid;
    }

    
    

	
