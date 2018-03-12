<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" href="/Application/Public/css/index.css">
	<link rel="stylesheet" href="/Application/Public/css/header.css">
	<link rel="stylesheet" href="/Application/Public/css/footer.css">
	<script src="/Application/Public/js/jquery-3.2.1.min.js" charset="utf-8"></script>
</head>

<body>
	<div class="header">
		<div class="page-container">
			<div class="logo">
				<a href="/index.php" title="首页">
				<img src="/Application/Public/img/logo.png" alt="图书共享平台" title="">
			</a>
			</div>

			<div class="search-wrap">
				<img src="/Application/Public/img/search.png" alt="" />
				<form class="search-form" action="/index.php/Home/Search/searchResult" method="post">
					<input type="text" class="search-input">
					<input type="submit" class="search-btn" value="">
				</form>
			</div>
			<div class="login-area">
				<ul>
					<li class="person-center">

						<a href="/index.php/Home/PerCenter/perShare" class=""><img src="/Application/Public/img/personal.png" alt="" /><span>个人中心</span></a>
					</li>
					<li class="login-header">
						<a href="">登录</a> /
						<a href="">注册</a>
					</li>
				</ul>
			</div>
		</div>


	</div>
	<div id="linear" class="linear-color1">
	</div>
	<div class="main" id="main">
		<div class="menu-box">
		</div>
		<div style="display:none">
			<div class="sub-menu hide" id="sub-menu">
			</div>
		</div>

		<!-- 菜单 -->
		<div class="menu-content" id="menu-content">
			<div class="menu-item" id="id1-tool">
				<div class="a">
					<span>小说类</span>
					<i class="icon">&#xe665;</i>
				</div>
			</div>
			<div class="menu-item" id="id2-tool">
				<div class="a">
					<span>文艺类</span>
					<i class="icon">&#xe665;</i>
				</div>
			</div>
			<div class="menu-item" id="id3-tool">
				<div class="a">
					<span>计算机类</span>
					<i class="icon">&#xe665;</i>
				</div>
			</div>
			<div class="menu-item" id="id4-tool">
				<div class="a">
					<span>其他</span>
					<i class="icon">&#xe665;</i>
				</div>
			</div>
		</div>
		<div class="banner" id="banner">
			<a href="">
				<div class="banner-slide slide1 slide-active"></div>
			</a>
			<a href="">
				<div class="banner-slide slide2"></div>
			</a>
			<a href="">
				<div class="banner-slide slide3"></div>
			</a>
		</div>
		<a href="javascript:void(0)" class="button prev" id="prev"></a>
		<a href="javascript:void(0)" class="button next" id="next"></a>
		<div class="dots" id="dots">
			<span class="active"></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div id="id1" class="bgdiv">

		<div class="tit">
			<p><em>小</em>/<em>说</em>/<em>类</em></p>
		</div>
		<div class="first">
			<div class="item">
				<div class="pic">
					<img src="/Application/Public/img/1.gif" alt="" />
				</div>
				<div class="report">
					lalaallaalalaalla
				</div>
				<div class="pric">
					<p>
						25积分
					</p>
				</div>
				<a class="Btn" href="/index.php/Home/Book/bookDetails">查看详情</a>
			</div>
			<div class="item">
				<div class="pic">
					<img src="img/1.gif" alt="" />
				</div>
				<div class="report">
					lalaallaalalaalla
				</div>
				<div class="pric">
					<p>
						25积分
					</p>
				</div>
				<a class="Btn" href="/index.php/Home/Book/bookDetails">查看详情</a>
			</div>
			<div class="item">
				<div class="pic">
					<img src="img/1.gif" alt="" />
				</div>
				<div class="report">
					lalaallaalalaalla
				</div>
				<div class="pric">
					<p>
						25积分
					</p>
				</div>
				<a class="Btn" href="book_details.html">查看详情</a>
			</div>
			<div class="item">
				<div class="pic">
					<img src="img/1.gif" alt="" />
				</div>
				<div class="report">
					lalaallaalalaalla
				</div>
				<div class="pric">
					<p>
						25积分
					</p>
				</div>
				<a class="Btn" href="book_details.html">查看详情</a>
			</div>
			<div class="item">
				<div class="pic">
					<img src="img/1.gif" alt="" />
				</div>
				<div class="report">
					lalaallaalalaalla
				</div>
				<div class="pric">
					<p>
						25积分
					</p>
				</div>
				<a class="Btn" href="book_details.html">查看详情</a>
			</div>
			
		</div>
	</div>

	<div class="elevator">
		<div id="question"><img src="/Application/Public/img/question.png" alt=""><p>常见问题</p></div>
		<div id="service"><img src="/Application/Public/img/service.png" alt=""><p>联系客服</p></div>
		<div id="advice"><img src="/Application/Public/img/advice.png" alt=""><p>意见反馈</p></div>
		<div id="top"><img src="/Application/Public/img/top.png" alt=""><p>返回顶部</p></div>
	</div>

	<footer>

		<span>©长沙理工大学客户说的队 All rights reserved</span>
	</footer>

	<script src="/Application/Public/js/script.js"></script>
	<script src="/Application/Public/js/index.js"></script>
	<script src="/Application/Public/js/elevator.js"></script>
</body>

</html>