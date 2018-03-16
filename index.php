<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx6a7c132cec408d9a", "40ade5090ac5b816cc238a2544f69a13");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="full-screen" content="yes">
		<meta name="x5-fullscreen" content="true">
		<meta name="HandheldFriendly" content="true">
		<meta http-equiv='X-UA-Compatible' content='IE=EDGE'>
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/page.css"/>
		<script type="text/javascript" src="js/jquery.js" ></script>
		<title>GOOOO AHEAD</title>
	</head>
	<body>
		<!--<div class="loading">
			<img class="loadingImg anim1 anim2" src="images/logo.png"/>
			<div id="progressNum"></div>
		</div>-->
		<div class="main">
			<div class="videoArea" style="background:#000">
<div class="vedioImgBtn" style="font-size:0" id="playBtn">
<img style="width: 50px; height: 50px; position: absolute; left: 50%; top: 50%; margin: -25px 0 0 -25px" src="images/videoPlay.png" alt="">
<video loop="loop" style="object-fit: fill;display:block" id="indexVideo" width="100%" height="100%" preload="auto" poster="images/preImg.jpg" x5-video-player-type="h5" x5-video-player-fullscreen="true" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow">
						<source src="http://img.xiyoumai.com/audiyanshi2.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="titleArea"><span>不信抬头看 奥迪负过谁！</span></div>
			<div class="imgArea"></div>
		</div>
	</body>
	<script>
		/*$(function(){
			doProgressBarLoading();
		    setTimeout(function () {  
		        $(".loading").fadeOut();  
		    }, 2500); 
		})*/ 
		$(".main").click(function(){
			window.location.href="p2.php";
		});
	
		var progressId = "ProgressBarID";
		function setProgressBar(progress) {
			if(progress) {
				$("#progressNum").html(String(progress) + "%");
			}
		}
		var i_ProgressBar = 0;
		
		/*function doProgressBarLoading() {
			if(i_ProgressBar > 100) {
				setTimeout(function(){
					$(".loading").fadeOut();
				},1500);
				
				return;
			}
			if(i_ProgressBar <= 100) {
				setTimeout("doProgressBarLoading()", 20);
				setProgressBar(i_ProgressBar);
				i_ProgressBar++;
			}
		}*/
	</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script>
wx.config({
	debug: false,
	appId: '<?php echo $signPackage["appId"];?>',
	timestamp: <?php echo $signPackage["timestamp"];?>,
	nonceStr: '<?php echo $signPackage["nonceStr"];?>',
	signature: '<?php echo $signPackage["signature"];?>',
	jsApiList: [
		'checkJsApi',
		'onMenuShareTimeline',
		'onMenuShareAppMessage',
		'onMenuShareQQ',
		'onMenuShareWeibo',
		'getNetworkType'
	]
});
wx.ready(function () {
	document.getElementById("indexVideo").play()
	wx.checkJsApi({
		jsApiList: ['onMenuShareTimeline',
			'onMenuShareAppMessage',
			'onMenuShareQQ',
			'onMenuShareWeibo',
			'getNetworkType'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
		success: function(res) {
			//alert("测试js支持成功，可以正常使用功能，测试完成删除此行代码");
			wxshare();
		},
		fail: function(res){
			alert("不支持分享的js");
		}
	});
});

wx.error(function (res) {
	//这个是微信错误，用来调试用的，就是如果config中的参数不对，会报错到这里
	alert('wx.error: '+JSON.stringify(res));
});


var wxshare = function () {
	var params = {
		title: '龙抬头，宜开走', // 分享标题
		desc: '#GOOOO AHEAD#', // 分享描述
		link: 'http://audi.xiyoumai.com/index.php', // 分享链接
		imgUrl: 'http://audi.xiyoumai.com/images/shareIcon.png', // 分享图标
		type: 'link', // 分享类型,music、video或link，不填默认为link
		dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		trigger: function (res) {
			//alert('用户点击发送给朋友');
		},
		success: function (res) {
			//alert('已分享'); //可以你的操作了；如果有弹出提示层，这里需要做关闭操作
		},
		cancel: function (res) {
			//alert('已取消'); //用户取消分享
		},
		fail: function (res) {
			//可以打开alert，调试失败原因
			alert(JSON.stringify(res));
		}
	}
	wx.onMenuShareTimeline(params);//朋友圈
	wx.onMenuShareAppMessage(params);//微信
	wx.onMenuShareWeibo(params);//腾讯微博
	wx.onMenuShareQQ(params);//qq
}

</script>
</html>
