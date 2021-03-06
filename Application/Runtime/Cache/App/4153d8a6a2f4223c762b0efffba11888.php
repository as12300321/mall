<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>会员卡</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link href="/multi/Addons/Card/View/Public/css/card.css?i=2" rel="stylesheet" type="text/css">
</head>
<body id="card" style="">
<div id="overlay"></div>
<div class="cardcenter">
    <div class="card"><img class="cardbg" src="/multi/Addons/Card/View/Public/image/card_bg07.png">
        <img class="logo" src="<?php echo ($user["avater"]); ?>">
        <h1 style="color:#000000">VIP会员卡</h1>
        <strong class="pdo verify">
            <span style="float: left;margin-left: 10px;">
                <em>会员姓名</em><span style="font-size: 16px;"><?php echo ($user["username"]); ?></span>
            </span>
            <span><em>会员卡号</em>
                <a style="text-decoration: none; color: rgb(10, 10, 10); "><?php echo ($user["id"]); ?></a>
            </span>
        </strong>
    </div>
    <p class="explain"><span>使用时向服务员出示此卡</span></p>
</div>
<div class="cardexplain">
    <div class="jifen-box" style="margin-top:13px;">
        <ul class="zongjifen">
            <li>
                <div class="fengexian"><p>账户</p><span><?php echo ($user["money"]); ?></span></div>
            </li>
            <li>
                <div class=""><p>积分</p><span><?php echo ($user["score"]); ?></span></div>
            </li>
        </ul>
        <div class="clr"></div>
    </div>
    <ul class="round" id="notice">
        <li><a href="<?php echo ($config["notify_url"]); ?>"><span>最新通知</span></a></li>
        <li><a href="<?php echo ($config["about_url"]); ?>"><span>会员卡说明</span></a></li>
    </ul>
    <ul class="round" id="powerandgift">
        <li><a href="<?php echo U('App/Index/index');?>#order"><span>消费记录</span></a></li>
        <li><a href="<?php echo U('App/Index/index');?>#order"><span>个人资料</span></a></li>
    </ul>
    <ul class="round">
        <li><a href=""><span>地址: <?php echo ($config["address"]); ?></span></a></li>
        <li><a href="tel:<?php echo ($config["tel"]); ?>"><span>电话: <?php echo ($config["tel"]); ?></span></a></li>
    </ul>
</div>
<div class="copyright" style="color: #666666">© 2014-2015 inuoer.com. All
    rights reserved.
</div>
</body>
</html>