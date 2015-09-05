<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
   	<title>后台管理系统</title>
	  <link href="/stuface/Public/css/bootstrap.min.css" rel="stylesheet">
  	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
  	<script src="/stuface/Public/js/bootstrap.min.js"></script>
  	<style>
        body {
        padding-top: 50px;
        padding-left: 0px;
        }
      </style>
</head>
<body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="<?php echo U('Index/index');?>">管理系统</a>
        </div>
        <div class="collapse navbar-collapse">
          	<ul class="nav navbar-nav">
  	            <li class="active"><a href="<?php echo U('Index/index');?>">主页</a></li>
                <li><a href="<?php echo U('Home/Index/index');?>">笑脸迎新网</a></li>
  				      <li><a href="<?php echo U('Index/logout');?>">退出</a></li>
            </ul>
			      <ul class="nav navbar-nav navbar-right">
          		  <li><a href="#">你好,管理员!</a></li>
          	</ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
    </div>
    <div style="width:300px">
  		<ul class="nav nav-pills nav-stacked">
  		   <li class="active"><a href="<?php echo U('Index/uploadpic');?>">照片上传</a></li>
  		   <li><a href="<?php echo U('Index/check');?>">照片审核</a></li>
  		   <br><br><br>
  		</ul>
    </div>
    <form class="form-inline" role="form">
        <input type="email" class="form-control" placeholder="按学号搜索">
        <button type="button" class="btn btn-warning" ><a href="<?php echo U('Image/addpic');?>">搜索<a></button><br><br>
        <input type="email" class="form-control" placeholder="按姓名搜索">
        <button type="button" class="btn btn-warning" ><a href="<?php echo U('Image/addpic');?>">搜索<a></button><br><br>
    </form>
    <form method="post" action="#" enctype="multipart/form-data">
        <input type="file" name="photo[]">
        <input type="file" name="photo[]">
        <input type="file" name="photo[]">
        <input type="file" name="photo[]">
        <input type="file" name="photo[]">
        <button type="button" class="btn btn-warning" ><a href="<?php echo U('Image/addpic');?>">查看信息<a></button>
        <br><br>
    </form>
    <?php if(is_array($data)): foreach($data as $key=>$d): ?><div>
            <img src="/stuface/Public/allimage/<?php echo ($d["pic"]); ?>">
        </div><?php endforeach; endif; ?>
    
    

	



</body>
</html>