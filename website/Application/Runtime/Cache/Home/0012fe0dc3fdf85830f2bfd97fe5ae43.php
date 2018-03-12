<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>个人中心</title>
   <link href="/Application/Public/css/font-awesome.css" rel="stylesheet"> 
   <link href="/Application/Public/css/font-awesome-icon.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/Application/Public/css/personal.css">
   <link rel="stylesheet" type="text/css" href="/Application/Public/css/basic.css">

</head>
<body>
<script type="text/javascript">
     function change(val){
      if(val=='share'){
        record_one.style.display="block";
        record_two.style.display="none";
        record_three.style.display="none";
        share.style.backgroundColor="white";
        share.style.borderTop="2px #ec2b38 solid";
        borrow.style.backgroundColor="#ec2b38";
        borrow.style.borderTop="0";
        collect.style.backgroundColor="#ec2b38";
        collect.style.borderTop="0";
      }else if(val=='borrow'){
        record_one.style.display="none";
        record_two.style.display="block";
        record_three.style.display="none";
        borrow.style.backgroundColor="white";
        borrow.style.borderTop="2px #ec2b38 solid";
        share.style.backgroundColor="#ec2b38";
        share.style.borderTop="0";
        collect.style.backgroundColor="#ec2b38";
        collect.style.borderTop="0";
      }else{
        record_one.style.display="none";
        record_two.style.display="none";
        record_three.style.display="block";
        borrow.style.backgroundColor="#ec2b38";
        borrow.style.borderTop="0";
        share.style.backgroundColor="#ec2b38";
        share.style.borderTop="0";
        collect.style.backgroundColor="white";
        collect.style.borderTop="2px #ec2b38 solid";
      }
     }
   </script>
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
	 	 <p class="title">我的共享</p>
   	 <div class="main_cont">
   	 	<div class="nav_cont">
   	 		<ul>
   	 		 <li onclick="change('share')" id="share" class="li_one">我的分享</li>
   	 		 <li onclick="change('borrow')" id="borrow">我的借阅</li>
         <li onclick="change('collect')" id="collect">我的收藏</li>
   	 		</ul>
   	 	</div>

      <!-- 我的分享 -->
   	 	<div class="record_one" id="record_one"> 
         <div class="line">
           
           <!-- foreach展示列表 -->
           <?php if(is_array($book_share)): foreach($book_share as $key=>$v): ?><div class="sep"></div>
            <div class="share">
            <div class="tab"><i class="fa fa-hand-o-right"></i></div>
            <div class="s_con">
             <div class="left_pic"><img src="/Application/Public/Uploads/书籍封面/<?php echo ($v["book_img"]); ?>"></div>
             <div class="right_con">
               <a href=""><?php echo ($v["book_name"]); ?></a>
               <div>
                  <p><span class="r_one">我的描述:</span><span class="r_two"><?php echo ($v["book_introduce"]); ?></span>
                  </p>
                  <p><span class="r_three">分享日期:</span><span class="r_four"><?php echo ($v["book_data"]); ?></span></p>
                </div>
             </div>
            </div> 
           </div><?php endforeach; endif; ?>

         </div>      
      </div>

      <!-- 我的借阅 -->
      <div class="record_two" id="record_two"> 
          <div class="line">
           
           <?php if(is_array($book_borrower)): foreach($book_borrower as $key=>$v): ?><div class="sep"></div>
            <div class="share">
            <div class="tab"><i class="fa fa-hand-o-right"></i></div>
            <div class="s_con">
             <div class="left_pic"><img src="/Application/Public/Uploads/书籍封面/<?php echo ($v["book_img"]); ?>"></div>
             <div class="right_con">
               <a href=""><?php echo ($v["book_name"]); ?></a>
               <div>
                  <p><span class="r_one">我的描述:</span><span class="r_two"><?php echo ($v["book_introduce"]); ?></span>
                  </p>
                  <p><span class="r_three">分享日期:</span><span class="r_four"><?php echo ($v["book_data"]); ?></span></p>
                </div>
             </div>
            </div> 
           </div><?php endforeach; endif; ?>

         </div>       
      </div>

      <!-- 我的收藏 -->
        <div class="record_three" id="record_three" style="display: none;"> 
         <div class="line">
           
           <?php if(is_array($book_collect)): foreach($book_collect as $key=>$v): ?><div class="sep"></div>
            <div class="share">
            <div class="tab"><i class="fa fa-hand-o-right"></i></div>
            <div class="s_con">
             <div class="left_pic"><img src="/Application/Public/Uploads/书籍封面/<?php echo ($v["book_img"]); ?>"></div>
             <div class="right_con">
               <a href=""><?php echo ($v["book_name"]); ?></a>
               <div>
                  <p><span class="r_one">我的描述:</span><span class="r_two"><?php echo ($v["book_introduce"]); ?></span>
                  </p>
                  <p><span class="r_three">分享日期:</span><span class="r_four"><?php echo ($v["book_data"]); ?></span></p>
                </div>
             </div>
            </div> 
           </div><?php endforeach; endif; ?>

         </div>      
      </div>
   	 </div>
	 </div>
</div>
</body>
</html>