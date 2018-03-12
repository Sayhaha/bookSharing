<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>个人中心</title>
   <link href="/Application/Public/css/font-awesome-icon.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/Application/Public/css/personal.css">
   <link rel="stylesheet" type="text/css" href="/Application/Public/css/basic.css">
   <link rel="stylesheet" type="text/css" href="/Application/Public/css/per_message.css">
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
     <p class="title">我的消息</p>
     <div class="main_cont">
      <div class="nav_cont">
        <ul>
         <li id="xt" class="li_one" onclick="change('xt')"><a href="" onclick="return false;">消息中心</a></li>
         <li id="mj" onclick="change('mj')"><a href="" onclick="return false;">对话框</a></li>
        </ul>
      </div>

      <div class="xt_news" id="xt_news">

        <div class="m_people">
          <div class="m_img" ><img src="/Application/Public/img/order.jpg" alt=""></div>
          <div class="mn"><a href="">系统消息</a>
            <div class="m_time">9月19日 21:19</div>
          </div>
          <div class="p_content">消息消息消息</div>
        </div>

        <div class="m_people">
          <div class="m_img" ><img src="/Application/Public/img/order.jpg" alt=""></div>
          <div class="mn"><a href="">子墨非鱼儿</a>
            <div class="m_time">9月19日 21:19</div>
          </div>
          <div class="p_content">消息消息消息</div>
        </div>

        <div class="m_people">
          <div class="m_img" ><img src="/Application/Public/img/order.jpg" alt=""></div>
          <div class="mn"><a href="">子墨非鱼儿</a>
            <div class="m_time">9月19日 21:19</div>
          </div>
          <div class="p_content">消息消息消息</div>
        </div>

        <div class="m_people">
          <div class="m_img" ><img src="/Application/Public/img/order.jpg" alt=""></div>
          <div class="mn"><a href="">子墨非鱼儿</a>
            <div class="m_time">9月19日 21:19</div>
          </div>
          <div class="p_content">消息消息消息</div>
        </div>

        <div class="m_people">
          <div class="m_img" ><img src="/Application/Public/img/order.jpg" alt=""></div>
          <div class="mn"><a href="">子墨非鱼儿</a>
            <div class="m_time">9月19日 21:19</div>
          </div>
          <div class="p_content">消息消息消息</div>
        </div>

        <div class="m_people">
          <div class="m_img" ><img src="/Application/Public/img/order.jpg" alt=""></div>
          <div class="mn"><a href="">子墨非鱼儿</a>
            <div class="m_time">9月19日 21:19</div>
          </div>
          <div class="p_content">消息消息消息</div>
        </div>
        
      </div>
      <div class="mj_news" id="mj_news">
        <div class="chat_content">
            <div class="other"><img src="/Application/Public/img/order.jpg" alt=""><div class="other_content">我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲</div></div>
            <div class="self"><img src="/Application/Public/img/order.jpg" alt=""><div class="self_content">我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲我有很多很多很多话要讲</div></div>
        </div>
        <div><textarea cols="110" rows="4"></textarea></div>
        <div class="send"><button>发送</button><span>200</span></div>
 
        
      </div>

  
</div>
</div>
</div>
<script type="text/javascript">
     var xt_news=document.getElementById('xt_news');
     var mj_news=document.getElementById('mj_news');
     var xt=document.getElementById('xt');
     var mj=document.getElementById('mj');
     function change(val){
     
      if(val=='xt'){
        xt_news.style.display="block";
        mj_news.style.display="none";
        xt.style.backgroundColor="white";
        xt.style.borderTop="2px #ec2b38 solid";
        mj.style.backgroundColor="#ec2b38";
        mj.style.borderTop="0";
      }
      else{
        xt_news.style.display="none";
        mj_news.style.display="block";
        mj.style.backgroundColor="white";
        mj.style.borderTop="2px #ec2b38 solid";
        xt.style.backgroundColor="#ec2b38";
        xt.style.borderTop="0"; 
      }
     }
   </script>
</body>
</html>