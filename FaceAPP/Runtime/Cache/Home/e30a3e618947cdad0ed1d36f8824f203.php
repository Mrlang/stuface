<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新生笑脸</title>
	<link rel="stylesheet" href="/stuface/Public/css/style.css">

</head>
<body>
	<div id="container">
		<!-- 顶部 重邮Logo 登陆按钮 -->
		<div class="top-container">
			<div class="top">
				<img src="/stuface/Public/img/school-logo.png" alt="">
				<ul class="nav">
					<li><a href="http://hongyan.cqupt.edu.cn/">红岩网校</a></li>
					<li><a href="http://hongyan.cqupt.edu.cn/welcome/2015/">2015新生专题网</a></li>
					<li><a href="http://hongyan.cqupt.edu.cn/aboutus/">关于我们</a></li>
					<li class="show-submit-box"><a>新生登陆</a></li>
				</ul>
			</div>
		</div>
		<!-- 内容 -->
		<div class="content">
			<!-- 上传按钮 -->
			<img class="rocket" src="/stuface/Public/img/rocket.png" alt="">
			<div id="uploading">
				<img class="stone" src="/stuface/Public/img/stone.png" alt="">
			</div>
			<!-- 活动详情 -->
			<div class="activity-detail">
				<img src="/stuface/Public/img/活动详情.png" alt="">
				<div class="activity-content">
					<img class="person" src="/stuface/Public/img/人物.png">
					<div class="cqupt-helper">
						<img class="cqupt" src="/stuface/Public/img/cqupt-helper.jpg" alt="">
					</div>
					
					<div class="about-activity">
						<p><span class="activity-time">活动时间：</span>本次线上参与活动时间为<span class="activity-detime">9月9日8：00——9月11日0：00</span></p>
						<p class="about-people"><span class="activity-people">活动对象：</span><span class="student-2015">2015级</span>所有小鲜肉</p>
						<p class="activity-way">参与方式</p>
						<p>方式一：上传自己的“笑脸”照片（每人限一张）参与活动。</p>
						<p>方式二：9月9日至10日在雨红莲操场和风雨操场参与拍照活动。</p>
						<p class="pic-content">照片内容：“笑脸”照片可以是新生自己和各大重邮建筑合照。</p>
						<p class="career-talk">红岩网校工作站招新宣讲会(新生交流群:223991619)</p>
						<p class="career-show">我们将会在9月13日19：00点2100教室展示最美笑脸</p>
					</div>
				</div>
				
			</div>
			<!-- 笑脸展示 -->
			<div class="smile-face">
				<img src="/stuface/Public/img/笑脸展示.png" alt="">
				<div>
					<div class="select-condition">
						<div class="condition-left">
							<div class="select-inf select-left" id="inf01">
								<div class="option frist" id="con01">综合</div>
								<div class="option">综合</div>
								<div class="option">人气</div>
								<div class="option last">最新</div>
							</div>
							<div class="select-inf" id="inf02">
								<div class="option frist" id="con02">全部</div>
								<div class="option">全部</div>
								<div class="option">汉子</div>
								<div class="option last">妹子</div>
							</div>
						</div>
						<div class="condition-right">
							<input type="text" class="search" placeholder="输入笑脸编号">
							<img src="/stuface/Public/img/搜索按钮.png" alt="" class="search-btn">
						</div>
					</div>
					<div class="smile-face-photo">
						<div class="one-row">
							
						</div>
						
						
					</div>
					<!-- 翻页 -->
					<div class="page-outer">
						<ul class="page">
							<li><</li>
							<li class="cur-li">1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
							<li>></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- 回到顶部 -->
			<div class="toTop">
				<img src="/stuface/Public/img/toTop.png" alt="">
			</div>
			<!-- 声明信息 -->
			<div class="foot">
				<a href="">关于红岩网校</a>
				<span>|</span>
				<a href="">网站地图</a>
				<span>|</span>
				<a href="">指出错误</a>
				<span>|</span>
				<a href="">管理入口</a>
				<p>本网站由红岩网校工作站负责开发，管理，不经红岩网校委员会书面同意，不得进行转载</p>
				<p>地址：重庆市南岸区崇文路2号（重庆邮电大学内） 400065 E-mail :redrock@cqupt.edu.cn (023-62461084)</p>
			</div>
		</div>
		<!-- 登陆窗口 -->
		<div class="submit-boxing"></div>
		<div class="submit-box">
			<form action="">
				<input type="text" class="name" placeholder="请输入学号">
				<img src="/stuface/Public/img/name.png" alt="" class="usrname">
				<img src="/stuface/Public/img/dividing.png" alt="" class="name-dividing">
				<input type="password" class="password" placeholder="身份证后六位">
				<img src="/stuface/Public/img/password.png" alt="" class="usrpwd">
				<img src="/stuface/Public/img/dividing.png" alt="" class="pwd-dividing"><br>
			</form>
			<a class="submit">登陆</a>
			
		</div>
		<!-- 照片上传窗口 -->
		<div class="submit-boxing"></div>
		<div class="uploading-box">
			<div class="uploading-pic-box">
			<form class="p_form" method="post" action="<?php echo U('Home/Index/upload');?>" enctype="multipart/form-data">
				<input type="file" class="add-in-file" name="photo">
			</form>
				<img class="upload-img add-in" src="/stuface/Public/img/add-in.png" alt="">
				<div class="reupload">
					重选
				</div>
			</div>
			<span>手机号：</span>
			<input class="phone_number" type="text">
			<span class="important">*</span>
			<p>我们不会透露你的联系方式</p>
			<img src="/stuface/Public/img/publish.png" class="hand-in">
		</div>
		<!-- 照片上传成功窗口 -->
		<div class="submit-boxing"></div>
		<div class="uploading-success-box">
			<img src="/stuface/Public/img/push-sucess.png" alt="" class="success-icon">
			<p>关注重邮小帮手（微信号：cyxbswx）并绑定学号，我们将审核结果推送给你</p>
			<img src="/stuface/Public/img/cqupt-helper.jpg" alt="" class="cqupt-helper">
			<img src="/stuface/Public/img/确认.png" alt="" class="confirm">
		</div>
		<!-- 查看详情 -->
		<div class="submit-boxing"></div>
		<div class="detail-box">
			<span class="ranking">top1</span>
			<div class="person-img">
				<img src="/stuface/Public/img/person.png" alt="">
			</div>
			<span class="smile-id">笑脸编号:28</span>
			<div class="love">
				<img src="/stuface/Public/img/love.png" alt="">
				<span class="love-people">27</span>
			</div>
		</div>
		<div class="please-login">
			<p class="logining">
				请先登陆
			</p>
			<img class="w" src="/stuface/Public/img/w.png">
		</div>
		<div class="vote-success">
			<p class="logining">
				投票成功
			</p>
			<img class="w" src="/stuface/Public/img/w.png">
		</div>
		<div class="waiting-outer"></div>
		<div class="waiting-o">
			<p class="logining">
				正在登陆
			</p>
			<div class="spinner waiting-sp">
				<div class="spinner-container container1">
					<div class="circle1"></div>
					<div class="circle2"></div>
					<div class="circle3"></div>
					<div class="circle4"></div>
				</div>
				<div class="spinner-container container2">
					<div class="circle1"></div>
					<div class="circle2"></div>
					<div class="circle3"></div>
					<div class="circle4"></div>
				</div>
				<div class="spinner-container container3">
					<div class="circle1"></div>
					<div class="circle2"></div>
					<div class="circle3"></div>
					<div class="circle4"></div>
				</div>
			</div>
		</div>
		<div class="fail">
			<img src="/stuface/Public/img/type-err.png">
			<input class="close-err" type="button">
		</div>
		<div class="fail-err">
			<img src="/stuface/Public/img/fail.png">
			<input class="close-err" type="button">
		</div>
		<div class="uploading-wait">
			<img class="uploading-w" src="/stuface/Public/img/uploading-w.png">
			<input class="close-err close-uploading" type="button">
			<div class="spinner">
				<div class="spinner-container container1">
					<div class="circle1"></div>
					<div class="circle2"></div>
					<div class="circle3"></div>
					<div class="circle4"></div>
				</div>
				<div class="spinner-container container2">
					<div class="circle1"></div>
					<div class="circle2"></div>
					<div class="circle3"></div>
					<div class="circle4"></div>
				</div>
				<div class="spinner-container container3">
					<div class="circle1"></div>
					<div class="circle2"></div>
					<div class="circle3"></div>
					<div class="circle4"></div>
				</div>
			</div>
		</div>
	</div>
	<script src="/stuface/Public/js/jQuery.js"></script>
	<script src="/stuface/Public/js/api.js"></script>
	<script>
	console.log("page_test1");
		var check_login = false,
			api,
			get_focus;
		function page (container,footer,normal_data) {
			$.get("<?php echo U('Home/Index/get_page');?>", "fetchpage=1", function (data) {
				var page_length = data,
					focus = $(footer[1]),
					focusNum = 1,
					timer = true,
					i,
					j,
					res;
				function display (button_val) {
					if(timer == false){
						return;
					}
					timer = false;
					var button_val = parseInt(button_val) || 1;
					if(button_val == 1 || button_val == page_length){
						if(button_val == 1){
							$(footer[0]).css('display',"none");
							$(footer[6]).css('display',"block");
						}else{
							$(footer[6]).css('display',"none");
							$(footer[0]).css('display',"block");
						}
						if(button_val ==1 && button_val == page_length){
							$(footer[0]).css('display',"none");
							$(footer[6]).css('display',"none");
						}
					}else{
						$(footer[0]).css('display',"block");
						$(footer[6]).css('display',"block");
					}
					focusNum = button_val;
					if(button_val <= 3 || button_val >= page_length - 2){
						if(button_val <= 3){
							for(i = 1;i < 6;i++,j++){
								if(i <= page_length){
									$(footer[i]).css('display',"block")
										.html(i);
									if(i == button_val){
										focus.removeClass("cur-li");
										$(footer[i]).addClass("cur-li");
										focus = $(footer[i]);
									}
								}else{
									$(footer[i]).css('display',"none");
								}
							}
						}else{
							for(i = page_length - 4,j = 1;i <= page_length;i++,j++){
								if(i > 0){
									$(footer[j]).css('display',"block")
										.html(i);
									if(i == button_val){
										focus.removeClass("cur-li");
										$(footer[j]).addClass("cur-li");
										focus = $(footer[j]);
									}
								}else{
									$(footer[j]).css('display',"none");
								}
							}
						}
					}else{
						for(i = button_val - 2,j = 1;i <= button_val + 2;i++,j++){
							$(footer[j]).css('display',"block")
								.html(i);
							if(i == button_val){
								focus.removeClass("cur-li");
								$(footer[j]).addClass("cur-li");
								focus = $(footer[j]);
							}
						}
					}
					if(normal_data){
						for(i = 0;i < 7;i++){
							$(footer[i]).css('display',"none");
						}
					}
					if(page_length == 1){
						$(footer[1]).css('display',"none");
					}
					if(page_length == 0){
						$(footer[6]).css('display',"none");
					}
					get(button_val);
				}
				function addlisten(){
					$(".page").css('margin-left',(1018 - parseFloat($(".page").width()))/2);
					footer.click(function () {
						if($(this).text() == "<"){
							display(focusNum - 1);
						}else if($(this).text() == ">"){
							display(focusNum + 1);
						}else{
							display($(this).text());
						}
						$(".page").css('margin-left',(1018 - parseFloat($(".page").width()))/2);
						
					})
				}
				function get(button_val){
					$.post("<?php echo U('Home/Index/get_pic');?>","btn=" + button_val,function (data) {
						data = normal_data || data;
						showData(data);
					});
					
				}
				function getFoucs(){
					return focus;
				}
				api = get;
				get_focus = getFoucs;
				function showData(data){
					if(!data[0]&&normal_data){
						container.html("<p class='no-data'>没有这个笑脸哦</p>");
						return;
					}else if(!data[0]&&!normal_data){
						container.html("<p class='no-data'>快来参与，暂无笑脸</p>");
						return;
					}
					container.html("");
					var obj = {
						"class_name":"",
						"id":"1",
						"pic":"55e6af2907944.jpg",
						"big_pic":"55e6af2907944_big.jpg",
						"uid":"2014211",
						"vote":"0000000001",
						"time":"2015-09-01 20:02:48",
						"sex":null,
						"phone":null
					},
						i,
						key;
					for(i = 0;i < data.length;i++){
						for(key in data[i]){
							obj[key] = data[i][key];
						}
						obj.vote = parseInt(obj.vote);
						if(i%4 == 0){
							obj.class_name = "no-margin";
						}else{
							obj.class_name = "";
						}
						oDiv = '<div top=' + obj.id + ' vote=' + obj.vote　+ ' uid=' + obj.uid + ' big-pic=' + obj.big_pic +' class="speciel ' + obj.class_name +'"><span class="ranking">'+"top" + obj.id +'</span><div class="person-img"><img src="/stuface/Public/allimage/'+ obj.pic +'" alt=""></div><img src="/stuface/Public/img/love.png" alt="" class="love-nolove"><span class="love-people">'+ obj.vote +'</span><img class="detail" src="/stuface/Public/img/详情.png" alt=""></div>';
						container.append(oDiv);
					}
					timer = true;
				}
				display();
				addlisten();
			})
		}
		function changeSort () {		
			$("#inf01").children().click(function (e) {
				$("#con01").html($(this).html());
				$.get("<?php echo U('Home/Index/get_pic');?>","limit=" + $(this).text(),function (data) {
					page($(".one-row"),$(".page li"));
					$(".page li").removeClass("cur-li");
				});
			})
			$("#inf02").children().click(function (e) {
				$("#con02").html($(this).html());
				$.get("<?php echo U('Home/Index/get_pic');?>","sex=" + $(this).text(),function (data) {
					page($(".one-row"),$(".page li"));
					$(".page li").removeClass("cur-li");
				});
			})
		}
		changeSort();
		page($(".one-row"),$(".page li"));
		//...............................登录模块.........................................
		function login(){
			var name,
				pass,
				name_input = $(".name"),
				pass_input = $(".password"),
				waiting = $(".waiting-o"),
				submit_boxing = $(".submit-boxing"),
				sm_box = $(".waiting-outer"),
				show = $(".show-submit-box"),
				w = $(".w"),
				exp = /^(2015)/;
			check();
			$(".submit").click(function () {
				name = name_input.val();
				pass = pass_input.val();
				waiting.css('display',"block");
				sm_box.css('display',"block");
				submit_boxing.css('display',"none");
				$(".submit-box").css('top',"-283px");
				if(!exp.test(name)){
					waiting.html('<p class="logining">你不是小鲜肉</p><img class="w" src="/stuface/Public/img/w.png">');
					setTimeout(function () {
						window.location = window.location.href;
					},2000);
					return;
				}
				setTimeout(function () {
					$.post("<?php echo U('Home/Index/log');?>","username=" + name + "&&password=" + pass,function (res) {
						console.log(res);
						if(res.status == 200){
							waiting.html('<p class="logining">登陆成功</p><img class="w" src="/stuface/Public/img/w.png">');
							setTimeout(function () {
								window.location = window.location.href;
							},2000);
							check();
						}else if(res.status == 111){
							waiting.html('<p class="logining">账号密码错误</p><img class="w" src="/stuface/Public/img/w.png">');
							setTimeout(function () {
								window.location = window.location.href;
							},2000);
						}
						sm_box.click(function () {
							window.location = window.location.href;
						})
						
						check();
					})
				},1000)
			})
			//...............................注销模块.........................................
			function check(){
				$.get("<?php echo U('Home/Index/checklog');?>","",function (res) {
					if(res){
						check_login = true;
						show.html("<a>注销</a>");
						show.unbind();
						show.click(function () {
							$.get("<?php echo U('Home/Index/log_out');?>","",function (res) {//注销功能 向后台发送一个GET请求 你取消掉他{}的SESSION
								if(res){
									window.location = window.location.href;

								}
							})
						})
					}else{
						check_login = false;
					}
				})
			}
		}
		login();
		//...............................投票模块.........................................
		function vote () {
			var outer = $(".one-row"),
				vote_success = $(".vote-success"),
				sb_box = $(".submit-boxing"),
				target,
				uid,
				num,
				focus,
				timer;
			outer.click(function (e) {
				target = $(e.target);
				uid = target.parents(".speciel ").attr("uid");
				if(target.attr("class") == "love-nolove"){
					if(check_login){
						$.post("<?php echo U('Home/Index/vote');?>","uid=" + uid,function (res) {
							focus = get_focus();
							api(focus.text());
							var res;
							sb_box.click(function () {
								clearTimeout(timer);
								vote_success.css('display',"none");
							})
							if(res){//投票成功
								sb_box.css('display',"block");
								vote_success.css('display',"block");
								vote_success.children(".logining").html("投票成功")
							}else{//失败
								sb_box.css('display',"block");
								vote_success.css('display',"block");
								vote_success.children(".logining").html("你已经投过这个笑脸了")
							}
							timer = setTimeout(function () {
								sb_box.css('display',"none");
								vote_success.css('display',"none");
							},2000);
						})
					}else{
						please_login();
					}
				}
			})
		}
		//ajax轮询投票
		function voteing () {
			var focus;
			setInterval(function () {
				focus = get_focus();
				api(focus.text());
			},60000);
		}
		voteing();
		function please_login() {
			var	please_login = $(".please-login"),
				sb_box = $(".submit-boxing");
			please_login.css('display',"block");
			sb_box.css('display',"block");
			sb_box.click(function (){
				clearTimeout(sb_box.timer);
				please_login.css('display',"none");
				sb_box.css('display',"none");
			})
			sb_box.timer = setTimeout(function () {
				please_login.css('display',"none");
				sb_box.css('display',"none");
			},2000)
		}
		vote();
		//...............................上传模块.........................................
		function addIn(){
			var data_name = "",
				src,
				test = /\.png$|jpeg$|jpg$/,
				data,
				b_check = false,
				xhr,
				sm_box = $(".submit-boxing"),
				add_img01 = $(".upload-img"),
				box = $(".uploading-box"),
				add_img02 = $(".reypload"),
				reupload = $(".reupload"),
				close_uploading = $(".close-uploading"),
				success = $(".uploading-success-box"),
				uploading_wait = $(".uploading-wait"),
				type_err = $(".close-err"),
				fail = $(".fail-err"),
				phone = $(".phone_number");
			$(".add-in").click(function(){
				$(".add-in-file").trigger("click");
			})
			type_err.click(function () {
				type_err.parent().css('display',"none");
				box.css('display',"block");
			})
			$(".add-in-file").change(function (e) {
				data_name = $(this).val();
				if(!data_name.match(test)){
					b_check = false;
				}else{
					src = getFullPath($(".add-in-file")[0]);
					$(".uploading-pic-box").css('background-image',"url(" + src + ")");
					b_check = true;
					data = new FormData($(".p_form")[0]);
				}
				$(".hand-in").attr('src',"/stuface/Public/img/readyPublish.png");
				reupload.css('display',"block");
				$(".add-in").css("display","none");
			})
			$(".hand-in").click(function (e) {
				if(!b_check){
					type_err.parent(".fail-err").css('display',"block");
					sm_box.css('display',"block");
					box.css('display',"none");
					return;
				}
				sm_box.click(function () {
					window.location = window.location;
				})
				close_uploading.click(function () {
					window.location = window.location;
				})
				sm_box.css('display',"block");
				uploading_wait.css('display',"block");
				box.css('display',"none");
				data.append("phone",phone.val());
				//setTimeout(function () {
					xhr = new XMLHttpRequest();  
					xhr.open( "POST", "<?php echo U('Home/Index/uploadpic');?>" ,true);  
					xhr.onload = function(res) {  
						if (xhr.status == 200) { //上传图片功能 这里我向你发送文件后 你需要判断是否上传成功 返回true或者false
							uploading_wait.css('display',"none");
							if(res.currentTarget.response == "true"){
								success.css('display',"block");
							}else{
								fail.css('display',"block");
							}
						} 
					};  
					xhr.send(data);  
				//},2000);
				
			})
			sm_box.click(function () {
				type_err.parent().css('display',"none");
			})
			reupload.click(function() {
				$(".add-in-file").trigger("click");
			})
			function getFullPath (obj) {
				return window.URL.createObjectURL(obj.files[0]);
			}
		}
		addIn();
		function search () {
			var search_input = $(".search"),
				sub = $(".search-btn"),
				container = $(".one-row"),
				value;
			sub.click(function () {
				value = search_input.val();
				if(value.replace(/\s/g, "") == ""){
					return;
				}
				$.get("<?php echo U('Home/Index/get_pic');?>","search=" + value,function (res) {
					page($(".one-row"),$(".page li"),res);
				})
			})
		}
		search();
	</script>
</body>
</html>