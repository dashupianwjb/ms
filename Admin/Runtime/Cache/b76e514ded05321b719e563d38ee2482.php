<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>快达汽车管理</title>
<link rel="stylesheet" href="__PUBLIC__/Admin/tpl/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="__PUBLIC__/Admin/tpl/css/style.<?php echo (session('color')); ?>.css" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/Admin/tpl/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Admin/tpl/js/jquery-migrate-1.1.1.min.js"></script>
</head>

<body class="loginbody">

<div class="loginwrapper">
	<div class="loginwrap zindex100 animate2 bounceInDown">
	<h1 class="logintitle"><span class="iconfa-lock"></span> 快达汽车租赁<span class="subtitle">欢迎登陆快达汽车租赁管理系统</span></h1>
        <div class="loginwrapperinner">
            <form id="loginform" action="__URL__/do_login" method="post">
                <p class="animate4 bounceIn"><input type="text" id="username" name="username" placeholder="用户名" /></p>
                <p class="animate5 bounceIn"><input type="password" id="password" name="userpwd" placeholder="请输入密码" /></p>
                <p class="animate6 bounceIn"><button class="btn btn-default btn-block">登陆</button></p>
                <p class="animate7 fadeIn"><a href=""><span class="icon-question-sign icon-white"></span> 忘记密码?</a></p>
            </form>
        </div><!--loginwrapperinner-->
    </div>
    <div class="loginshadow animate3 fadeInUp"></div>
</div><!--loginwrapper-->

<script type="text/javascript">
jQuery.noConflict();

jQuery(document).ready(function(){
	
	var anievent = (jQuery.browser.webkit)? 'webkitAnimationEnd' : 'animationend';
	jQuery('.loginwrap').bind(anievent,function(){
		jQuery(this).removeClass('animate2 bounceInDown');
	});
	
	jQuery('#username,#password').focus(function(){
		if(jQuery(this).hasClass('error')) jQuery(this).removeClass('error');
	});
	
	jQuery('#loginform button').click(function(){
		if(!jQuery.browser.msie) {
			if(jQuery('#username').val() == '' || jQuery('#password').val() == '') {
				if(jQuery('#username').val() == '') jQuery('#username').addClass('error'); else jQuery('#username').removeClass('error');
				if(jQuery('#password').val() == '') jQuery('#password').addClass('error'); else jQuery('#password').removeClass('error');
				jQuery('.loginwrap').addClass('animate0 wobble').bind(anievent,function(){
					jQuery(this).removeClass('animate0 wobble');
				});
			} else {
				jQuery('.loginwrapper').addClass('animate0 fadeOutUp').bind(anievent,function(){
					jQuery('#loginform').submit();
				});
			}
			return false;
		}
	});
});
</script>
</body>
</html>