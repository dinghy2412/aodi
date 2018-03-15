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
		<link rel="stylesheet" href="css/pageSlider.css">
		<script type="text/javascript" src="js/jquery.js" ></script>
		<!--引入zepto.js-->
		<script src="http://cdn.bootcss.com/zepto/1.1.4/zepto.js"></script>
		<!--引入pageSlider.js文件-->
		<script src="js/pageSlider.js"></script>
		<title>GOOOO AHEAD</title>
	</head>
	<body>
		<div class="section sec1"></div>
		<div class="section sec2"></div>
		<div class="section sec3"></div>
		<div class="section sec4"></div>
		<div class="section sec5"></div>
		<div class="section sec6"></div>
		<div class="section sec7"></div>
		<div class="section sec8"></div>
		<div class="section sec9"></div>
		<div class="remindDown">
			<img src="images/next.gif"  class="nextImg"/>
		</div>
	</body>
	<script>
			//$(function(){
				var pageSlider = PageSlider.case();
			//});
			
			//a标签无法触发跳转的问题用以下代码
			$(".to-form-link>a").on('touchend', function() {
				location.replace($(this).attr("href"));
			});
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
		title: 'GOOOO AHEAD', // 分享标题
		desc: '奥迪龙抬头', // 分享描述
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
