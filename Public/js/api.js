//显示登陆框
function show(){
	var speed = 500;
	$(".show-submit-box").click(function(){
		$(".submit-boxing").css('display', "block");
		$(".submit-box").css('top',"50%")
		}
	)
	$(".submit-boxing").click(function(){
		$(this).css('display',"none");
		$(".submit-box").css('top',"-283px");
	})
}
show();

//显示上传窗口
function showUploading(){
	$("#uploading").click(function(){
		$(".submit-boxing").css('display', "block");
		$(".uploading-box").fadeIn(300);
		}
	)
	$(".submit-boxing").click(function(){
		$(".uploading-box").fadeOut(300);
		$(".submit-boxing").css('display', "none");
		}
	)
}
showUploading();
//添加图片


//查看详情
function showDetail(){
	//点击查看详情显示
	$(".one-row").click(function(event){
		var target = event.target,
			parent;
		if($(target).attr("class") == "love-nolove"){
			return;
		}
		if($(target).parents(".speciel").context.className != "one-row"){
			parent = $(target).parents(".speciel");
			if($(target).parents(".speciel").context.getAttribute("big-pic")){
				parent = $($(target).parents(".speciel").context);
			}
			$(".submit-boxing").css('display', "block");
			$(".detail-box").css({top:"50%",right: "50%"})[0]
				.children[1]
				.children[0].
				src = "Public/allimage/" + parent.attr("big-pic");
			$(".detail-box")[0]
				.children[2]
				.innerHTML = "笑脸编号：" + parent.attr("uid");
			$(".detail-box")[0]
				.children[3]
				.children[1]
				.innerHTML = parent.attr("vote");
			$(".detail-box")[0]
		}
	})
	$(".submit-boxing").click(function(){
		$(".detail-box").css({top:"-529px",right: "-610px"});
		$(".submit-boxing").css('display', "none");
	})
	
}
showDetail();

//隐藏上传窗口
function hideAddIn(){
	$(".confirm").click(function(){
		$(".uploading-success-box").css('display',"none");
		$(".submit-boxing").css('display',"none");
	})
	$(".submit-boxing").click(function(){
		$(".uploading-success-box").css('display',"none");
	})
}
hideAddIn();

//回到顶部
function toTop(){
	//查看是否已滚动
    function checkToTop(){
        if(window.scrollY > 50) {
            $(".toTop").fadeIn(300);
        }else {
            $(".toTop").fadeOut(300);
        }
    }
    setInterval(checkToTop,300);

    //回到顶部
    $('.toTop').click(function(){
        $('html,body').animate({scrollTop: '0px'}, 500);
    })
}
toTop();

function showSection () {
	var select_outer = $(".select-inf");
	select_outer.mouseover(function () {
		$(this).children(0).next().css('top',"42px")
			.next().css('top',"84px")
			.next().css('top',"126px");
	})
	select_outer.mouseout(function () {
		$(this).children(0).next().css('top',"0px")
			.next().css('top',"0px")
			.next().css('top',"0px");
	})
}
showSection();
