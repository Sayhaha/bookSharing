<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>个人中心</title>
   <link href="/Application/Public/css/font-awesome-icon.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/Application/Public/css/personal.css">
   <link rel="stylesheet" type="text/css" href="/Application/Public/css/basic.css">
</head>
<script type="text/javascript">


      //图片上传预览    IE是用了滤镜。
        function previewImage(file)
        {
          var MAXWIDTH  = 150; 
          var MAXHEIGHT = 150;
          var div = document.getElementById('preview');
          if (file.files && file.files[0])
          {
              div.innerHTML ='<img id=imghead class="own_pic" style="margin-top:30px;"><input type="file"/>';
              var img = document.getElementById('imghead');
              img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
              }
              var reader = new FileReader();
              reader.onload = function(evt){img.src = evt.target.result;}
              reader.readAsDataURL(file.files[0]);
          }
          else //兼容IE
          {
            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
            file.select();
            var src = document.selection.createRange().text;
            div.innerHTML = '<img id=imghead>';
            var img = document.getElementById('imghead');
            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
            div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
          }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight )
            {
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;
                
                if( rateWidth > rateHeight )
                {
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else
                {
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }
            
            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2)+30;
            return param;
        }
</script>     
<body>
<div id="content">

	<div id="leftside">
		<ul>
      <li><a href="/index.php/home/per_center/perInfo"><i class="icon-user"></i>&nbsp;个人信息</a></li>
      <li><a href="/index.php/home/per_center/perShare"><i class="icon-group"></i>&nbsp;我的共享</a></li>
      <li><a href="/index.php/home/per_center/perManage"><i class="icon-picture"></i>&nbsp;图书管理</a></li>
      <li><a href="/index.php/home/per_center/perOrder"><i class="icon-envelope"></i>&nbsp;我的订单</a></li>
      <li><a href="/index.php/home/per_center/perMsg"><i class="icon-comments-alt"></i>&nbsp;我的消息</a></li>
    </ul>
	</div>
	 <div id="rightside">
	 	 <p class="title">个人信息</p>
   	 <div class="main_cont">
   	 	<div class="nav_cont">
   	 		<ul>
   	 		 <li class="li_one">基本设置</li>
   	 		</ul>
   	 	</div>
   	 	<div class="form">
          <form> 
           <div class="left">
              <ul>
                <li>昵称:<input type="text" name=""></li>
                <li><span class="intro">介绍:<span><textarea></textarea></li>
                <li>性别:<input type="radio" name="" value="" class="sex">&nbsp;男
                         <input type="radio" name="" value="" class="sex">&nbsp;女
                </li>
                <li>电话:<input type="text" name=""></li>
                <li>住址:<input type="text" name=""></li>
                <li><input type="button" name="" value="保存" class="save"></li>
              </ul>
           </div>
            </form>  
           <div class="right" id="preview">
              <div class="own_pic" id="imghead" style="margin-top: 30px;"><img src="/Application/Public/img/1.jpg"></div>
              <input type="file" name="" value="修改头像" onchange="previewImage(this)">
           </div>
         
         </div>
   	 </div>
	 </div>
</div>
</body>
</html>