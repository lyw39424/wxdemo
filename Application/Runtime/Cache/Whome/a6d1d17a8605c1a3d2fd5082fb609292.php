<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>

<html lang="en-US">

<head>
	<meta charset="utf-8">
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'/>
<meta name="author" content=""/>
<meta name="copyright" content=""/>
<link href="/wxdemo/Public/whome/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="/wxdemo/Public/whome/favicon.ico" rel="icon" type="image/x-icon">
<link href="/wxdemo/Public/whome/m.css" rel="stylesheet" type="text/css" />
<script src="/wxdemo/Public/whome/js/jquery-1.9.1.min.js" type="text/javascript"></script>

<script src="/wxdemo/Public/whome/js/manhuatoTop.1.0.js" type="text/javascript"></script>

<script src="/wxdemo/Public/whome/js/common.js" type="text/javascript"></script>

<link rel="stylesheet" href="/wxdemo/Public/whome/css/idangerous.swiper.css">

<link rel="stylesheet" href="/wxdemo/Public/whome/css/style.css">

<script src="/wxdemo/Public/whome/js/idangerous.swiper-1.9.1.min.js"></script>

<script src="/wxdemo/Public/whome/js/idangerous.swiper.scrollbar-1.2.js"></script>

<script src="/wxdemo/Public/whome/js/swiper.js"></script>
<title>触屏版</title>
</head>
<body>

<div id="frame">

	<div id="top">

		<a id="logo" href="/wxdemo/Whome/WxIndex/index.html"><img src="/wxdemo/Public/whome/images/home.png" align="top"></a>

		<a id="title">每日推荐</a>

		<!--a id="search" href="search.jsp"><img src="images/search.png" align="top"></a-->

		<span id="list"><a href="javascript:window.history.back();"><img src="/wxdemo/Public/whome/images/goback.png" align="top"></a>
		</span>

	</div>

	<div id="con">

		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="tm_div">

			<div class="tm_pro">

				<a href="/wxdemo/Whome/WxNew/detail/id/<?php echo ($vo["id"]); ?>"><img src="/wxdemo/Uploads<?php echo ($vo["ne_img"]); ?>" width="100%"></a>

				<div class="tm_type"><a href="onsale_0.html"></a></div>

				<div class="tm_title">

					<div class="tm_title_bg"></div>

					<div class="tm_title_con">

						<div class="tm_title_con_1"><a href="/wxdemo/Whome/WxNew/detail/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></div>

					</div>

				</div>

			</div>

			<div class="tm_price">

				<div class="tm_price_1">作者:&nbsp;<?php echo ($vo["author"]); ?></div>

				<div class="tm_price_2"><span class="servertime"><?php echo ($vo["creat_time"]); ?></span></div>

			</div>

		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<div id="footer"><a href="index.html">共同学习qq群:148400915</a></div>
<div id="menu" style="position:fixed;bottom:0px;width:100%;height:44px;line-height:44px;z-index:999;background:url(images/menubg.png) repeat-x;">

    <ul style="margin:0 auto;list-style-type:none;width:100%;max-width:500px;height:100%;">



        <li><img class="img_front" src="/wxdemo/Public/whome/images/front.png"><div class="menu_li"><img src="/wxdemo/Public/whome/images/coin.png" width=10>&nbsp;小二推荐</div><img class="line" src="images/line.png" width=1>



		<span style="background-size:100%;">

			<img src="/wxdemo/Public/whome/images/navbg4.png" width=100%>

			<div style="position:absolute;top:0px;left:0px;">
                <a href="onsale_0.html">每日推荐</a>
                <a href="onsale_2.html">清仓秒杀</a>
                <a href="onsale.html">限时特卖</a>
                <a href="hot.html">当季热点</a>



            </div>

		</span>



        </li>



        <li>
            <img class="img_front" src="/wxdemo/Public/whome/images/front.png">
            <div class="menu_li">
                <img src="/wxdemo/Public/whome/images/coin.png" width=10>&nbsp;旅游超市</div>

            <img class="line" src="/wxdemo/Public/whome/images/line.png" width=1>



		<span style="background-size:100%;">

			<img src="/wxdemo/Public/whome/images/navbg4.png" width=100%>

			<div style="position:absolute;top:0px;left:0px;">



                <a href="list.jsp">目的地</a>



                <a href="rank.html">排行榜</a>



                <a href="search.html">旅游搜索</a>



                <a href="javascript:beginTalk()">在线咨询</a>



            </div>

		</span>



        </li>



        <li><img class="img_front" src="/wxdemo/Public/whome/images/front.png"><div class="menu_li">

            <img src="/wxdemo/Public/whome/images/coin.png" width=10>&nbsp;订单处理</div>



		<span style="background-size:100%;">

			<img src="/wxdemo/Public/whome/images/navbg5.png" width=100%>

			<div style="position:absolute;top:0px;left:0px;">



                <a href="#">我的订单</a>



                <a href="#">会员资料</a>



                <a href="#">关联微信</a>



                <a href="#">联系我们</a>



                <a href="#">进入主站</a>



            </div>

		</span>



        </li>



    </ul>

</div>
<div class="footer_front" style="position:fixed;width:100%;height:100%;top:0px;left:0px;z-index:888;display:none;"><img src="/wxdemo/Public/whome/images/front.png" width="100%" height="100%"></div>

<style>

#menu ul li{float:left;width:33.3%;height:100%;text-align:center;position:relative;font-size:14px;}

#menu ul li .line{position:absolute;top:0px;right:0px;z-index:30;}

#menu ul li .menu_li{position:absolute;top:0px;left:0px;z-index:20;width:100%;height:100%;color:#454545;background:url(images/menubg.png) repeat-x;}

#menu ul li .img_front{position:absolute;top:0px;left:0px;z-index:30;width:100%;height:100%;}

#menu ul li .img_front img{width:100%;height:100%;}

#menu ul li span{position:absolute;bottom:-300px;left:50%;width:104px;margin-left:-52px;height:auto;text-align:center;z-index:10;}

#menu ul li span a{float:left;width:100%;height:43px;line-height:43px;color:#454545;text-decoration:none;}

</style>

<script>

function beginTalk() {

	var t = window.location.toString();

	var newT = t.replace(new RegExp("&", "gm"), "<and>"); 

	window.open("italk/index_m.jsp@fs_AccessAddress=" + newT, "talk");

}

window.onload = function(){

	$('#menu ul li').each(function(j){

		$('#menu ul li').eq(j).removeClass("on");

		$('#menu ul li span').eq(j).animate({bottom:-$('#menu ul li span').eq(j).height()},100);

	});

}

$('#menu ul li').each(function(i){

	$(this).click(function(){

		if($(this).attr("class")!="on"){

			$('#menu ul .on span').animate({bottom:-$('#menu ul .on span').height()},200);

			$('#menu ul .on').removeClass("on");

			$(this).addClass("on");

			$('#menu ul li span').eq(i).animate({bottom:35},200);

			$('.footer_front').show();

		}else{

			$('#menu ul li span').eq(i).animate({bottom:-$('#menu ul li span').eq(i).height()},200);

			$(this).removeClass("on");

			$('.footer_front').hide();

		}

	});

});

$('.footer_front').click(function(){

	$('#menu ul .on span').animate({bottom:-$('#menu ul .on span').height()},200);

	$('#menu ul .on').removeClass("on");

	$(this).hide();

});

</script>

</div>

<script>

$(function () {

	$('#list img').click(function (e) {

		if(parseInt($('#info').css('right'))==0){

			$('#info').animate({right:-200},200).css('display','none');

			$('#frame').animate({left:0},200);

		}else{

			$('#info').animate({right:0},200).css({'display':'block','height':$('#frame').height()});

			$('#frame').animate({left:-200},200);

		}

	});

	$(window).manhuatoTop({

		showHeight : 500,//设置滚动高度时显示

		speed : 500 //返回顶部的速度以毫秒为单位

	});

})

function show(i){

	var now = new Date();

	var utime = $('input').eq(i).attr("value");

	if (utime == "")

		return "无";

	var urodz = new Date(utime);

	var daysRound = Math.floor((urodz - now) / 1000 / 60 / 60 / 24);

	var hoursRound = Math.floor((urodz - now) / 1000 / 60 / 60 - (24 * daysRound));

	var minutesRound = Math.floor((urodz - now) / 1000 / 60 - (24 * 60 * daysRound) - (60 * hoursRound));

	var secondsRound = Math.floor((urodz - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound));

	var time = daysRound + "天" + hoursRound + "时" + minutesRound + "分" + secondsRound + "秒";

	if (daysRound < 0 || hoursRound < 0 || minutesRound < 0 || secondsRound < 0)

		time = "特卖已经结束！";

	if (daysRound >= 3)

		time = "3天以上";

	$('.servertime').eq(i).html(time);

	setTimeout("show(\"" + i + "\")",1000);

}



h=1;

$("#more").click(function(){

	var scrolltop=$("#con").height();

	$("#more").html("<img src=\"images/loading.gif\">");

	htmlobj=$.ajax({url:"more.jsp@type=0&page="+h,async:false});

	$("#con").append(htmlobj.responseText);

	h=h+1;

	

	$("#more").html("点击查看更多");

	$("html,body").animate({scrollTop:scrolltop+60},500);	

	if($("#nomore").attr("value")==1){

		$("#more").html("请关注后续更新");

	}

});

</script>

</body>

</html>