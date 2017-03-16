<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>画廊</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/pgwslideshow.css">
    <!--[if IE]>
    <!--<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>-->
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="htmleaf-container">
    <div class="htmleaf-content bgcolor-3">
        <ul class="pgwSlideshow">
       {{--     <li><img src="img/san-francisco.jpg" alt="San Francisco, USA" data-description="Golden Gate Bridge"></li>
            <li><img src="img/rio.jpg" alt="Rio de Janeiro, Brazil"></li>
            <li><img src="img/london.jpg" alt="" data-large-src="img/london.jpg"></li>
            <li><img src="img/new-york.jpg" alt=""></li>
            <li><img src="img/new-delhi.jpg" alt=""></li>
            <li><img src="img/paris.jpg" alt=""></li>
            <li><img src="img/sydney.jpg" alt=""></li>
            <li><img src="img/tokyo.jpg" alt=""></li>
            <li><img src="img/honk-kong.jpg" alt=""></li>
            <li><img src="img/dakar.jpg" alt=""></li>
            <li><img src="img/toronto.jpg" alt=""></li>
            <li>
                <a href="http://en.wikipedia.org/wiki/Monaco" target="_blank">
                    <img src="img/monaco.jpg" alt="Monaco">
                </a>
            </li>

            <li><img src="img/san-francisco.jpg" alt="San Francisco, USA" data-description="Golden Gate Bridge"></li>
            <li><img src="img/rio.jpg" alt="Rio de Janeiro, Brazil"></li>
            <li><img src="img/london.jpg" alt="" data-large-src="img/london.jpg"></li>
            <li><img src="img/new-york.jpg" alt=""></li>
            <li><img src="img/new-delhi.jpg" alt=""></li>
            <li><img src="img/paris.jpg" alt=""></li>
            <li><img src="img/sydney.jpg" alt=""></li>
            <li><img src="img/tokyo.jpg" alt=""></li>
            <li><img src="img/honk-kong.jpg" alt=""></li>
            <li><img src="img/dakar.jpg" alt=""></li>
            <li><img src="img/toronto.jpg" alt=""></li>
            <li>
                <a href="http://en.wikipedia.org/wiki/Monaco" target="_blank">
                    <img src="img/monaco.jpg" alt="Monaco">
                </a>
            </li>--}}

            @foreach($images as $image)
                <li><img src="{{ getImageViewUrl($image->key,980,600,1) }}" alt=""></li>
            @endforeach


        </ul>
    </div>

</div>

<script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/pgwslideshow.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.pgwSlideshow').pgwSlideshow({
            transitionEffect:'fading',
            autoSlide:true
        });
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-88237612-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>