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
		<link rel="stylesheet" href="css/city.css" />
		<script src="js/jquery-1.8.3.min.js"></script>
		<script src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js"></script>
		<!--<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_m.js" charset="utf-8"></script>-->
		<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" ></script>
		<title>GOOOO AHEAD</title>
	</head>
	<body>
		<form method="POST" id="Label_Form" onsubmit="return false;" name="Label_Form" style="height: 100%;">
		<div class="leaveInfoBg">
			<!--<div class="jiathis_style_m"></div>-->
			<div class="headImg"></div>
			<div class="mainInfo">
				<p><span class="labelText">姓名：</span><input type="text" id="userName" name="userName" value=""></p>
				<img class="line" src="images/line.png" />
				<p><span class="labelText">电话：</span><input type="tel" id="userPhone" name="userPhone" value=""></p>
				<img class="line" src="images/line.png" />
				<p>
					<span class="labelText">是否是奥迪车主：</span>
					<span class="ownerYes"><span class="radio yes" id="yesO" name="yesO" value="1"></span><span class="carOwnerText">是</span></span>
					<span class="ownerNo"><span class="radio noOwner" id="noO" name="noO" value="0"></span><span class="carOwnerText">否</span></span></p>
				<p class="cityInfo"><span id="citySpan">所在城市：</span><span id="cityVal" name="cityVal"></span><span class="changeCity" style="float: right;">切换城市</span></p>
				<img class="line" src="images/line.png" />
				<div class="btnDiv">
					<button id="submitBtn">点击提交</button>
				</div>
			</div>
		</div>
		<input type="hidden" id="isowner" name="isowner" value="1">
		<input type="hidden" id="cityNm" name="cityNm" value="">
		</form>
		<!--提交失败-->
		<div class="remindBgFail">
			<div class="remindDiv" id="remindCon">
				<img src="images/errorI.png" style="margin-top: 13%;" />
				<p class="errorText"><span id="errorTextSpan">请输入正确的电话</span></p>
			</div>	
		</div>
		<!--提交成功-->
		<div class="remindBgSuccess">
			<div class="remindDiv" id="remindCon">
				<img src="images/share.png" class="shareI"/>
			</div>	
		</div>
		<!--城市列表-->
		<div class="cityContainer">
			<div class="sort_box" href="B" id="cityConta">
				<div class="sort_letter">热门城市</div>
				<div class="sort_list_1"><div class="num_name">北京</div></div>
				<div class="sort_list_1"><div class="num_name">上海</div></div>
				<div class="sort_list_1"><div class="num_name">深圳</div></div>
				<div class="sort_list_1"><div class="num_name">天津</div></div>
				<div class="sort_list_1"><div class="num_name">武汉</div></div>
				<div class="sort_list"><div class="num_name">绥化</div></div>
				<div class="sort_list"><div class="num_name">大庆</div></div>
				<div class="sort_list"><div class="num_name">齐齐哈尔</div></div>
				<div class="sort_list"><div class="num_name">佳木斯</div></div>
				<div class="sort_list"><div class="num_name">沈阳</div></div>
				<div class="sort_list"><div class="num_name">铁岭</div></div>
				<div class="sort_list"><div class="num_name">鞍山</div></div>
				<div class="sort_list"><div class="num_name">丹东</div></div>
				<div class="sort_list"><div class="num_name">青岛</div></div>
				<div class="sort_list"><div class="num_name">日照</div></div>
				<div class="sort_list"><div class="num_name">威海</div></div>
				<div class="sort_list"><div class="num_name">潍坊</div></div>
				<div class="sort_list"><div class="num_name">烟台</div></div>
				<div class="sort_list"><div class="num_name">枣庄</div></div>
				<div class="sort_list"><div class="num_name">临沂</div></div>
				<div class="sort_list"><div class="num_name">菏泽</div></div>
				<div class="sort_list"><div class="num_name">莱芜</div></div>
				<div class="sort_list"><div class="num_name">济南</div></div>
				<div class="sort_list"><div class="num_name">济宁</div></div>
				<div class="sort_list"><div class="num_name">滨州</div></div>
				<div class="sort_list"><div class="num_name">聊城</div></div>
				<div class="sort_list"><div class="num_name">德州</div></div>
				<div class="sort_list"><div class="num_name">淄博</div></div>
				<div class="sort_list"><div class="num_name">泰安</div></div>
				<div class="sort_list"><div class="num_name">东营</div></div>
				<div class="sort_list"><div class="num_name">通辽</div></div>
				<div class="sort_list"><div class="num_name">呼伦贝尔</div></div>
				<div class="sort_list"><div class="num_name">长春</div></div>
				<div class="sort_list"><div class="num_name">延边朝鲜族自治州</div></div>
				<div class="sort_list"><div class="num_name">松原</div></div>
				<div class="sort_list"><div class="num_name">吉林</div></div>
				<div class="sort_list"><div class="num_name">通化</div></div>
				<div class="sort_list"><div class="num_name">阜新</div></div>
				<div class="sort_list"><div class="num_name">锦州</div></div>
				<div class="sort_list"><div class="num_name">营口</div></div>
				<div class="sort_list"><div class="num_name">大连</div></div>
				<div class="sort_list"><div class="num_name">朝阳</div></div>
				<div class="sort_list"><div class="num_name">盘锦</div></div>
				<div class="sort_list"><div class="num_name">葫芦岛</div></div>
				<div class="sort_list"><div class="num_name">天津</div></div>
				<div class="sort_list"><div class="num_name">锡林郭勒盟</div></div>
				<div class="sort_list"><div class="num_name">阳泉</div></div>
				<div class="sort_list"><div class="num_name">太原</div></div>
				<div class="sort_list"><div class="num_name">晋中</div></div>
				<div class="sort_list"><div class="num_name">长治</div></div>
				<div class="sort_list"><div class="num_name">吕梁</div></div>
				<div class="sort_list"><div class="num_name">鄂尔多斯</div></div>
				<div class="sort_list"><div class="num_name">赤峰</div></div>
				<div class="sort_list"><div class="num_name">运城</div></div>
				<div class="sort_list"><div class="num_name">包头</div></div>
				<div class="sort_list"><div class="num_name">临汾</div></div>
				<div class="sort_list"><div class="num_name">巴彦淖尔</div></div>
				<div class="sort_list"><div class="num_name">乌海</div></div>
				<div class="sort_list"><div class="num_name">大同</div></div>
				<div class="sort_list"><div class="num_name">邯郸</div></div>
				<div class="sort_list"><div class="num_name">衡水</div></div>
				<div class="sort_list"><div class="num_name">唐山</div></div>
				<div class="sort_list"><div class="num_name">廊坊</div></div>
				<div class="sort_list"><div class="num_name">张家口</div></div>
				<div class="sort_list"><div class="num_name">石家庄</div></div>
				<div class="sort_list"><div class="num_name">沧州</div></div>
				<div class="sort_list"><div class="num_name">邢台</div></div>
				<div class="sort_list"><div class="num_name">保定</div></div>
				<div class="sort_list"><div class="num_name">承德</div></div>
				<div class="sort_list"><div class="num_name">秦皇岛</div></div>
				<div class="sort_list"><div class="num_name">上海</div></div>
				<div class="sort_list"><div class="num_name">南京</div></div>
				<div class="sort_list"><div class="num_name">徐州</div></div>
				<div class="sort_list"><div class="num_name">连云港</div></div>
				<div class="sort_list"><div class="num_name">淮安</div></div>
				<div class="sort_list"><div class="num_name">宿迁</div></div>
				<div class="sort_list"><div class="num_name">盐城</div></div>
				<div class="sort_list"><div class="num_name">扬州</div></div>
				<div class="sort_list"><div class="num_name">南通</div></div>
				<div class="sort_list"><div class="num_name">苏州</div></div>
				<div class="sort_list"><div class="num_name">常州</div></div>
				<div class="sort_list"><div class="num_name">镇江</div></div>
				<div class="sort_list"><div class="num_name">无锡</div></div>
				<div class="sort_list"><div class="num_name">泰州</div></div>
				<div class="sort_list"><div class="num_name">许昌</div></div>
				<div class="sort_list"><div class="num_name">新乡</div></div>
				<div class="sort_list"><div class="num_name">信阳</div></div>
				<div class="sort_list"><div class="num_name">商丘</div></div>
				<div class="sort_list"><div class="num_name">郑州</div></div>
				<div class="sort_list"><div class="num_name">平顶山</div></div>
				<div class="sort_list"><div class="num_name">洛阳</div></div>
				<div class="sort_list"><div class="num_name">濮阳</div></div>
				<div class="sort_list"><div class="num_name">南阳</div></div>
				<div class="sort_list"><div class="num_name">安阳</div></div>
				<div class="sort_list"><div class="num_name">驻马店</div></div>
				<div class="sort_list"><div class="num_name">安庆</div></div>
				<div class="sort_list"><div class="num_name">淮北</div></div>
				<div class="sort_list"><div class="num_name">阜阳</div></div>
				<div class="sort_list"><div class="num_name">合肥</div></div>
				<div class="sort_list"><div class="num_name">滁州</div></div>
				<div class="sort_list"><div class="num_name">铜陵</div></div>
				<div class="sort_list"><div class="num_name">宿州</div></div>
				<div class="sort_list"><div class="num_name">亳州</div></div>
				<div class="sort_list"><div class="num_name">六安</div></div>
				<div class="sort_list"><div class="num_name">马鞍山</div></div>
				<div class="sort_list"><div class="num_name">芜湖</div></div>
				<div class="sort_list"><div class="num_name">蚌埠</div></div>
				<div class="sort_list"><div class="num_name">海口</div></div>
				<div class="sort_list"><div class="num_name">桂林</div></div>
				<div class="sort_list"><div class="num_name">吉安</div></div>
				<div class="sort_list"><div class="num_name">柳州</div></div>
				<div class="sort_list"><div class="num_name">南宁</div></div>
				<div class="sort_list"><div class="num_name">九江</div></div>
				<div class="sort_list"><div class="num_name">抚州</div></div>
				<div class="sort_list"><div class="num_name">南昌</div></div>
				<div class="sort_list"><div class="num_name">赣州</div></div>
				<div class="sort_list"><div class="num_name">恩施土家族苗族自治州</div></div>
				<div class="sort_list"><div class="num_name">黄冈</div></div>
				<div class="sort_list"><div class="num_name">襄阳</div></div>
				<div class="sort_list"><div class="num_name">荆门</div></div>
				<div class="sort_list"><div class="num_name">十堰</div></div>
				<div class="sort_list"><div class="num_name">荆州</div></div>
				<div class="sort_list"><div class="num_name">武汉</div></div>
				<div class="sort_list"><div class="num_name">宜昌</div></div>
				<div class="sort_list"><div class="num_name">黄石</div></div>
				<div class="sort_list"><div class="num_name">广州</div></div>
				<div class="sort_list"><div class="num_name">佛山</div></div>
				<div class="sort_list"><div class="num_name">肇庆</div></div>
				<div class="sort_list"><div class="num_name">深圳</div></div>
				<div class="sort_list"><div class="num_name">东莞</div></div>
				<div class="sort_list"><div class="num_name">邵阳</div></div>
				<div class="sort_list"><div class="num_name">株洲</div></div>
				<div class="sort_list"><div class="num_name">岳阳</div></div>
				<div class="sort_list"><div class="num_name">常德</div></div>
				<div class="sort_list"><div class="num_name">衡阳</div></div>
				<div class="sort_list"><div class="num_name">长沙</div></div>
				<div class="sort_list"><div class="num_name">怀化</div></div>
				<div class="sort_list"><div class="num_name">湘潭</div></div>
				<div class="sort_list"><div class="num_name">郴州</div></div>
				<div class="sort_list"><div class="num_name">梅州</div></div>
				<div class="sort_list"><div class="num_name">汕头</div></div>
				<div class="sort_list"><div class="num_name">珠海</div></div>
				<div class="sort_list"><div class="num_name">惠州</div></div>
				<div class="sort_list"><div class="num_name">揭阳</div></div>
				<div class="sort_list"><div class="num_name">湛江</div></div>
				<div class="sort_list"><div class="num_name">潮州</div></div>
				<div class="sort_list"><div class="num_name">中山</div></div>
				<div class="sort_list"><div class="num_name">江门</div></div>
				<div class="sort_list"><div class="num_name">成都</div></div>
				<div class="sort_list"><div class="num_name">眉山</div></div>
				<div class="sort_list"><div class="num_name">绵阳</div></div>
				<div class="sort_list"><div class="num_name">德阳</div></div>
				<div class="sort_list"><div class="num_name">泸州</div></div>
				<div class="sort_list"><div class="num_name">广安</div></div>
				<div class="sort_list"><div class="num_name">乐山</div></div>
				<div class="sort_list"><div class="num_name">宜宾</div></div>
				<div class="sort_list"><div class="num_name">重庆</div></div>
				<div class="sort_list"><div class="num_name">南充</div></div>
				<div class="sort_list"><div class="num_name">达州</div></div>
				<div class="sort_list"><div class="num_name">攀枝花</div></div>
				<div class="sort_list"><div class="num_name">遂宁</div></div>
				<div class="sort_list"><div class="num_name">自贡</div></div>
				<div class="sort_list"><div class="num_name">拉萨</div></div>
				<div class="sort_list"><div class="num_name">乌鲁木齐</div></div>
				<div class="sort_list"><div class="num_name">西宁</div></div>
				<div class="sort_list"><div class="num_name">银川</div></div>
				<div class="sort_list"><div class="num_name">兰州</div></div>
				<div class="sort_list"><div class="num_name">嘉峪关</div></div>
				<div class="sort_list"><div class="num_name">昆明</div></div>
				<div class="sort_list"><div class="num_name">玉溪</div></div>
				<div class="sort_list"><div class="num_name">遵义</div></div>
				<div class="sort_list"><div class="num_name">红河哈尼族彝族自治州</div></div>
				<div class="sort_list"><div class="num_name">贵阳</div></div>
				<div class="sort_list"><div class="num_name">安顺</div></div>
				<div class="sort_list"><div class="num_name">曲靖</div></div>
				<div class="sort_list"><div class="num_name">六盘水</div></div>
				<div class="sort_list"><div class="num_name">毕节</div></div>
				<div class="sort_list"><div class="num_name">延安</div></div>
				<div class="sort_list"><div class="num_name">汉中</div></div>
				<div class="sort_list"><div class="num_name">榆林</div></div>
				<div class="sort_list"><div class="num_name">西安</div></div>
				<div class="sort_list"><div class="num_name">宝鸡</div></div>
				<div class="sort_list"><div class="num_name">渭南</div></div>
				<div class="sort_list"><div class="num_name">咸阳</div></div>
				<div class="sort_list"><div class="num_name">衢州</div></div>
				<div class="sort_list"><div class="num_name">杭州</div></div>
				<div class="sort_list"><div class="num_name">宁波</div></div>
				<div class="sort_list"><div class="num_name">舟山</div></div>
				<div class="sort_list"><div class="num_name">台州</div></div>
				<div class="sort_list"><div class="num_name">温州</div></div>
				<div class="sort_list"><div class="num_name">丽水</div></div>
				<div class="sort_list"><div class="num_name">绍兴</div></div>
				<div class="sort_list"><div class="num_name">嘉兴</div></div>
				<div class="sort_list"><div class="num_name">金华</div></div>
				<div class="sort_list"><div class="num_name">湖州</div></div>
				<div class="sort_list"><div class="num_name">漳州</div></div>
				<div class="sort_list"><div class="num_name">泉州</div></div>
				<div class="sort_list"><div class="num_name">宁德</div></div>
				<div class="sort_list"><div class="num_name">三明</div></div>
				<div class="sort_list"><div class="num_name">厦门</div></div>
				<div class="sort_list"><div class="num_name">福州</div></div>
				<div class="sort_list"><div class="num_name">莆田</div></div>
				<div class="sort_list"><div class="num_name">龙岩</div></div>
			</div>
			<!--<div class="initials">
				<ul>
					<li><img src="images/068.png"></li>
				</ul>
			</div>-->
		</div>
	</body>
	<!--<script type="text/javascript" src="js/bscroll.min.js" ></script>
	<script type="text/javascript" src="js/city.js" ></script>-->
	<script src="js/jquery.charfirst.pinyin.js"></script>
	<script src="js/sort.js"></script>
	<script>
		$(function(){
			var city = remote_ip_info['city'];
			if(city!="" && city!=undefined){
				$("#cityVal").text(city);
				$("#cityNm").val(city);
				$(".changeCity").text("切换城市")
			}else{
				$(".changeCity").text("选择城市")
			}
				
		});
		/*提交*/
		$("#submitBtn").click(function(){
			var uName=$("#userName").val();
			var uPhone=$("#userPhone").val();
			if(uName==""){
				remindError("请输入姓名");
				return false;
			}
			if(uPhone==""){
				remindError("请输入电话");
				return false;
			}
			var RegExp = /^((0\d{2,3}-\d{7,8})|(1[3584]\d{9}))$/;
			if (RegExp.test(uPhone) == false) {
				remindError("号码格式不正确或者位数不正确");
				return false;
			}
			
			$("#Label_Form").submit(function(){
				remindSuccess();
				return false;
			});
		});
		
		$(".leaveInfoBg").click(function(){
			/*$(".cityContainer").addClass("outCity").removeClass("inCity");*/
			$(".cityContainer").css("display","none");
		})
		
		$(".remindBgSuccess").click(function(){
			$(".remindBgSuccess").hide();
		})
		
		$(".ownerYes").click(function(){
			$("#yesO").addClass("yes");$("#noO").removeClass("yes");
			$("#isowner").val(1);
		})
		$(".ownerNo").click(function(){
			$("#yesO").removeClass("yes");$("#noO").addClass("yes");
			$("#isowner").val(0);
		})
		/*错误提示*/
		function remindError(str){
			$(".remindBgFail").show();
			setTimeout(function(){
				$(".remindBgFail").hide();
			},2000);
			$("#errorTextSpan").text(str);
		}
		/*成功提示*/
		function remindSuccess(){
			$(".remindBgSuccess").show();
		}
		
		$("#backTo").click(function(){
			$(".remindBgSuccess").hide();
		})
		/*切换城市*/
		$(".changeCity").click(function(e){
			e.stopPropagation();
			$(".cityContainer").css("display","block");
			/*$(".cityContainer").addClass("inCity").removeClass("outCity");*/
		});
		
		$(".num_name").click(function(){
			$("#cityVal").text($(this).text())
			//$(".cityContainer").addClass("outCity").removeClass("inCity");
			$(".cityContainer").css("display","none");
			
		})
		
	
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
