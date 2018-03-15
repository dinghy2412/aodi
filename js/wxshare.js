// wx.config({
// 	debug: false,
// 	appId: '<?php echo $signPackage["appId"];?>',
// 	timestamp: <?php echo $signPackage["timestamp"];?>,
// 	nonceStr: '<?php echo $signPackage["nonceStr"];?>',
// 	signature: '<?php echo $signPackage["signature"];?>',
// 	jsApiList: [
// 		'checkJsApi',
// 		'onMenuShareTimeline',
// 		'onMenuShareAppMessage',
// 		'onMenuShareQQ',
// 		'onMenuShareWeibo',
// 		'getNetworkType'
// 	]
// });
wx.ready(function () {
	alert(1)
	wx.checkJsApi({
		jsApiList: [
			'onMenuShareTimeline',
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
		desc: '龙抬头龙抬头龙抬头', // 分享描述
		link: 'http://aodi.xiyoumai.com', // 分享链接
		imgUrl: '../images/share.png', // 分享图标
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
