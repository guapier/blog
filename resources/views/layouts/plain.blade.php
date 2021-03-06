<!DOCTYPE html>
<html lang="Zh_cn" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ $author or '' }}">
    <meta name="baidu-site-verification" content="vPSmDVRn0C" />
    <title>@yield('title') {{ $site_title or '瓜皮的个人博客' }} </title>
    <meta name="keywords" content="{{ $site_keywords or '瓜皮的个人博客' }}">
    <meta name="description" content="@yield('description') {{ $site_description or '瓜皮的个人博客' }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $site_title or '瓜皮的个人博客' }}">
    <meta property="og:site_name" content="{{ $site_title or '瓜皮的个人博客' }}">
    <meta property="og:description" content="{{ $site_description or '瓜皮的个人博客' }}">
    <meta name="theme-color" content="#52768e">
    <link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ elixir('css/home.css') }}" rel="stylesheet">
    @include('widget.google_analytics')
</head>
<body>

<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>
