<!DOCTYPE html>
<html lang="Zh_cn" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ $author or '' }}">
    <meta name="baidu-site-verification" content="vPSmDVRn0C" />
    <title>@yield('title') {{ $site_title or '' }} </title>
    <meta name="keywords" content="@yield('keywords') {{ $site_keywords or '' }}">
    <meta name="description" content="@yield('description') {{ $site_description or '' }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $site_title or '' }}">
    <meta property="og:site_name" content="{{ $site_title or '' }}">
    <meta property="og:description" content="{{ $site_description or '' }}">
    <meta name="theme-color" content="#52768e">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    @if(isset($site_css) && $site_css)
        <link href="{{ $site_css }}" rel="stylesheet">
    @else
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    @endif
    @yield('css')
    <script>
        window.XblogConfig = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                'github_username' => isset($github_username) ? $github_username :  '',
        ]); ?>
    </script>
    @include('widget.google_analytics')
</head>
<body id="body">
@include('layouts.header')

<div id="content-wrap">
    <div class="container">
        @include('partials.errors')
        @include('partials.success')
    </div>
    @yield('content')
</div>
@include('layouts.footer')
@if(isset($site_js) && $site_js)
    <script src="{{ $site_js }}"></script>
@else
    <script src="{{ elixir('js/app.js') }}"></script>
@endif
@yield('script')
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260952791'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260952791' type='text/javascript'%3E%3C/script%3E"));</script>
</body>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-88237612-1', 'auto');
    ga('send', 'pageview');

</script>

</html>
