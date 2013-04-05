<!DOCTYPE html>
<html  lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<base href=".">
	<meta charset="utf-8">
	<title>Trivia</title>
	<meta name="description" content="">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width">	
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://m.triviala.com/img/h/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://m.triviala.com/img/m/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" href="http://m.triviala.com/img/l/apple-touch-icon-precomposed.png">
	<link rel="shortcut icon" href="http://m.triviala.com/img/l/apple-touch-icon.png">
	<meta http-equiv="cleartype" content="on">
	<link rel="stylesheet" href="<?php echo base_url();?>css/common.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.mobile-1.3.0.css">		
	<!--	
	<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.mobile.structure-1.3.0.css">			
	<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.mobile.theme-1.3.0.css">				
	-->
</head>
<body class="ui-mobile-viewport">
<div id="page-main" data-role="page" data-url="http://m.triviala.com/" tabindex="0" class="ui-page ui-body-c ui-page-active" style="min-height: 679px;">

	<div id="header" class="clearfix">
		<h1><a href="./Trivia_files/Trivia.htm" class="ui-link">Triviala.com</a></h1>
		<ul id="nav">
			<li id="nav1"><a href="http://m.triviala.com/quizzes" class="ui-link"><span>PLAY</span></a></li>
			<li id="nav2"><a href="http://m.triviala.com/user/quizzes/create" class="ui-link"><span>MAKE</span></a></li>		
			<li id="nav3"><a href="http://m.triviala.com/signin" class="ui-link"><span>PROFILE</span></a></li>
		</ul>
	</div>
	<h2 id="pan">Play A Quiz. Make A Quiz. Win Prizes. Over 1m questions!</h2>
	<!--div id="search">
		<form action="http://m.triviala.com/quizzes/search" method="post" name="form_search_main" id="form_search_main">
			<label for="search-basic" class="ui-hidden-accessible">Search Quiz:</label>
			<div class="ui-input-search ui-shadow-inset ui-btn-corner-all ui-btn-shadow ui-icon-searchfield ui-body-c">
				<input type="text" data-type="search" name="search_keywords" id="search_keywords" placeholder="Search quizzes" data-mini="true" class="ui-input-text ui-body-c">
				<a href="http://m.triviala.com/#" class="ui-input-clear ui-btn ui-btn-up-c ui-btn-icon-notext ui-btn-corner-all ui-shadow ui-input-clear-hidden" title="clear text" data-theme="c">
				<span class="ui-btn-inner ui-btn-corner-all">
					<span class="ui-btn-text">clear text</span>
					<span class="ui-icon ui-icon-delete ui-icon-shadow"></span>
				</span>
				</a>
			</div>
		</form>
	</div-->
	<div id="content" data-role="content" class="quizzes ui-content" role="main">	
		<p>New quizzes added on: 05 Apr @ 04:33</p>
		<ul data-role="listview" class="quizzes ui-listview">			
			<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb">
				<div class="ui-btn-inner ui-li">
					<div class="ui-btn-text">
						<a href="http://m.triviala.com/quizzes/view/general/paranormal-weird/you-are-a-nightmare/3062" class="ui-link-inherit">
							<img src="<?php echo base_url();?>photo/dog.jpg" alt="" class="ui-li-thumb">
							<div class="quizData">
								<h4 class="ui-li-heading">You Are A Nightmare !!</h4>
								<div class="quizzesStats">
									<div class="stats">
										<p class="ui-li-desc">By: aleenaachu</p>
										<p class="ui-li-desc">Played: 385 times</p>
									</div>
									<div class="rating rstar-5">4.03/5</div>
								</div>						
							</div>
						</a>
					</div>
					<span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span>
				</div>
			</li>
			
			<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb">
				<div class="ui-btn-inner ui-li">
					<div class="ui-btn-text">
						<a href="http://m.triviala.com/quizzes/view/general/paranormal-weird/you-are-a-nightmare/3062" class="ui-link-inherit">
							<img src="<?php echo base_url();?>photo/dog.jpg" alt="" class="ui-li-thumb">
							<div class="quizData">
								<h4 class="ui-li-heading">You Are A Nightmare !!</h4>
								<div class="quizzesStats">
									<div class="stats">
										<p class="ui-li-desc">By: aleenaachu</p>
										<p class="ui-li-desc">Played: 385 times</p>
									</div>
									<div class="rating rstar-5">4.03/5</div>
								</div>						
							</div>
						</a>
					</div>
					<span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span>
				</div>
			</li>
			
		</ul>			
		<a href="http://m.triviala.com/quizzes" data-role="button" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-corner-all ui-shadow">
			<span class="ui-btn-inner ui-btn-corner-all">
				<span class="ui-btn-text">Browse More Cool Quizzes</span>
			</span>
		</a>
	</div>
</div>

<script src="<?php echo base_url();?>js/jquery-1.9.1.js"></script>	
<script src="<?php echo base_url();?>js/jquery.mobile-1.3.0.js"></script>

<div class="ui-loader ui-body-a ui-corner-all" style="top: 363.5px;">
	<span class="ui-icon ui-icon-loading spin"></span>
	<h1>loading</h1>
</div>
</body>
</html>