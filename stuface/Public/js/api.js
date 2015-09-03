//显示登陆框
function show(){
	$(".show-submit-box").click(function(){
		var speed= 1000;

		$(".submit-boxing").css('display', "block");
		$(".submit-box").css('display',"block");
		$(".submit-box").animate({top:"60%"},speed);
		}
	)
	$(".submit-boxing").click(function(){
		$(".submit-box").css('display',"none");
		$(".submit-box").css('top',"0");
		$(".submit-boxing").css('display', "none");
		}
	)
}
show();

//显示上传窗口
function showUploading(){
	$("#uploading").click(function(){
		$(".submit-boxing").css('display', "block");
		$(".uploading-box").css('display',"block");
		}
	)
	$(".submit-boxing").click(function(){
		$(".uploading-box").css('display',"none");
		$(".submit-boxing").css('display', "none");
		}
	)
}
showUploading();

//添加图片
function addIn(){
	$(".add-in").click(function(){
		$(".add-in-file").trigger("click");
	})
}
addIn();

//查看详情
function showDetail(){
	//点击查看详情显示
	$(".detail").click(function(){
		$(".submit-boxing").css('display', "block");
		$(".detail-box").css('display',"block");
		$(".detail-box").animate({top:"50%",right: "50%"},1000);
	})
	
	//点击图片显示
	$(".person-img").click(function(){
		$(".submit-boxing").css('display', "block");
		$(".detail-box").css('display',"block");
		$(".detail-box").animate({top:"50%",right: "50%"},1000);
	})

	//隐藏
	$(".submit-boxing").click(function(){
		$(".detail-box").css('display',"none");
		$(".detail-box").animate({top:"0",right: "0"});
		$(".submit-boxing").css('display', "none");
	})
	
}
showDetail();

//提交照片成功
function turnSuccess(){
	$(".hand-in").click(function(){
		$(".uploading-box").css('display',"none");
		$(".uploading-success-box").css('display',"block");
		
	})
	
}
turnSuccess();

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
            $(".toTop").css('display',"block");
        }else {
            $(".toTop").css('display',"none");
        }
    }
    setInterval(checkToTop,300);

    //回到顶部
    $('.toTop').click(function(){
        $('html,body').animate({scrollTop: '0px'}, 800);
    })
}
toTop();