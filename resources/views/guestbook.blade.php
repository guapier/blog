<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>留言墙</title>
	<link rel="stylesheet" href="./css/index.css" />
	<link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	@if(isset($site_css) && $site_css)
		<link href="{{ $site_css }}" rel="stylesheet">
	@else
		<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
	@endif
	<script type="text/javascript" src='./js/jquery.min.js'></script>
	<script type="text/javascript" src='./js/index.js'></script>
</head>
<body>
	<div id='top'>
		<span id="send" class="btn btn-success"></span>
	</div>
	<div id='main'>
		<dl class='paper a1'>
			<dt>
				<span class='username'>后盾网</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<dl class='paper a2'>
			<dt>
				<span class='username'>后盾网</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<dl class='paper a3'>
			<dt>
				<span class='username'>后盾网</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<dl class='paper a4'>
			<dt>
				<span class='username'>后盾网</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<dl class='paper a5'>
			<dt>
				<span class='username'>后盾网</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
	</div>

	<div id='send-form'>
		<p class='title'><span>留下你的脚步</span><a href="" id='close'></a></p>
		<form action="" name='wish' method="post">
			<div class="form-group">
				<label for="username">昵称：</label>
				<input type="text" name='username' class="form-control" id='username'/>
			</div>
			<div class="form-group">
				<label for="content">留言：(您还可以输入&nbsp;<span id='font-num'>500</span>&nbsp;个字)</label>
				<textarea name="content" class="form-control" id='content'></textarea>
			</div>
			<button class="btn btn-success" type="submit">提交</button>
		</form>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="./js/iepng.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-88237612-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
</body>
</html>