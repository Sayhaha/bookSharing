<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>个人中心</title>
   <link href="/Application/Public/css/font-awesome-icon.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/Application/Public/css/personal.css">
   <link rel="stylesheet" type="text/css" href="/Application/Public/css/basic.css">
   <link rel="stylesheet" type="text/css" href="/Application/Public/css/per_order.css">
</head>
<body>
<div id="content">

	<div id="leftside">
		<ul>
      <li><a href="/index.php/Home/PerCenter/perInfo"><i class="icon-user"></i>&nbsp;个人信息</a></li>
      <li><a href="/index.php/Home/PerCenter/perShare"><i class="icon-group"></i>&nbsp;我的共享</a></li>
      <li><a href="/index.php/Home/PerCenter/perManage"><i class="icon-picture"></i>&nbsp;图书管理</a></li>
      <li><a href="/index.php/Home/PerCenter/perOrder"><i class="icon-envelope"></i>&nbsp;我的订单</a></li>
      <li><a href="/index.php/Home/PerCenter/perMsg"><i class="icon-comments-alt"></i>&nbsp;我的消息</a></li>
    </ul>
	</div>

	 <div id="rightside">
	 	 <p class="title">我的订单</p>
   	 <div class="main_cont">
   	 	<div class="nav_cont">
   	 		<ul>
   	 		 <li class="li_one"><a href="">订单详情</a></li>
   	 		</ul>
   	 	</div>
   	 	<div class="order_content">
          <div class="content_head">
            <ul>
              <li>所有订单</li>
              <li>订单详情</li>
              <li class="head_one">收货人</li>
              <li class="head_two">积分</li>
              <li class="head_three">全部状态</li>
              <li class="head_four">操作</li>
            </ul>
          </div>
          <div class="content_body">
            <!-- <div class="content_body_one">
              <span>2017-09-12 16:26:55</span>
            </div> -->
            <div class="content_body_two">
              
              <!-- 我的借阅的订单和我的分享的订单 -->
              <?php if(is_array($result)): foreach($result as $key=>$v): ?><div class="content_body_three">
                <ul>
                  <li><div class="p-img"><img class="order_img" src="/Application/Public/Uploads/书籍封面/<?php echo ($v["book_img"]); ?>"/></li>
                  <li><div class="p-name"><span><?php echo ($v["book_name"]); echo ($v["order_date"]); ?></span></div></li>
                  <li><div class="p-name"><span><?php echo ($v["user_name"]); ?></span></div></li>
                  <li><div class="p-name"><span><?php echo ($v["book_cost"]); ?></span></div></li>
                  <li><div class="p-name"><span><?php echo ($v["order_status"]); ?></span></div></li>
                  <li><div class="p-name"><span><a href="/index.php/Home/PerCenter/perOrder/order_id/<?php echo ($v["order_id"]); ?>">删除</a></span></div></li>
                </ul>
              </div><?php endforeach; endif; ?>

            </div>




          </div>
   	 </div>
	</div>
</div>
</body>
</html>