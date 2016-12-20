<!DOCTYPE HTML>
<head>
    <title>A gift to Azhi</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <style type="text/css">
        @font-face {
            font-family: digit;
            src: url('/fonts/digital-7_mono.ttf') format("truetype");
        }
    </style>
    <link href="/css/default_dev.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/garden_dev.js"></script>
    <script type="text/javascript" src="/js/functions_dev.js"></script>
</head>

<body>
<div id="mainDiv">
    <div id="content">
        {{--

        又到了你的生日了，时间过的真快，大二暑假相识，如今转眼已快两年半了，
        一路有你这小逗比的陪伴，感觉真好，大学认识了这么逗的一个小学妹，
        感觉就像平静的水池投入了一块美玉，整个大学都水波荡漾了，
        偶尔还挂一阵风，感觉就要风起云涌了，偶尔还来一阵雨，
        感觉就是大雨滂沱了，随之而来的一缕阳光，感觉就像深圳的天气，
        一年四季都阳光明媚了。还有本来不文艺的学长都变得文艺起来了。😂😂😂
    这两年的日子也变得充实起来了，一起度过的一个暑假，一起学过的java，
    还有小学妹带的早餐，都如回忆一般涌来。让人猝不及防。
    时间是让人猝不及防的东西
        晴时有风阴有时雨
        争不过朝夕
        又念着往昔
        偷走了青丝却留住一个你
        岁月是一场有去无回的旅行
        好的坏的都是风景
        别怪我贪心
        只是不愿醒
        因为你只为你愿和我一起
        看云淡风轻
        --}}
        <div id="code">
            <span class="comments">致老学长的阿芝小学妹😂</span><br />
            <span class="space">又到了你的生日了</span><br />
            <span class="space">感觉时间过得真快</span><br />
            <span class="space">大二暑假相识</span><br />
            <span class="space"/>如今转眼已两年半了<br />
    {{--        <span class="space"/>一路有你这小逗比的陪伴<br />
            <span class="space"/>感觉真好<br />
            <span class="space"/>大学认识了你<br />
            <span class="space"/>感觉有点小幸运<br />
            <span class="space"/>毕竟这么逗的小学妹<br />
            <span class="space"/>可遇而不可求<br />
            <span class="space"/>与你相识<br />
            <span class="space"/>感觉就像平静的湖面投入了一块美玉<br />
            <span class="space"/>瞬间整个大学就水波荡漾了<br />
            <span class="keyword">偶尔刮来一阵清风<br />
				<span class="space"/>感觉就要风起云涌了<br />
				<span class="space"/>偶尔飘来的一阵雨<br />
				<span class="space"/>感觉就要大雨滂沱了<br />
                <span class="space"/>随之而来的一缕阳光<br />
                <span class="space">感觉就像深圳的天气</span><br />
                <span class="space">一年四季都阳光明媚了</span><br />
                <span class="space">还有本来不文艺的学长都变得文艺起来了</span><br />
                <span class="space">与你相识的这两年</span><br />
                <span class="space">感觉日子都过得比较充实</span><br />
                <span class="space">偶尔一起去吃吃饭</span><br />
                <span class="space">一起出去耍</span><br />
                <span class="space">还有暑假一起学过的java</span><br />
                <span class="space">都如回忆一般涌来</span><br />
                <span class="space">时间是让人猝不及防的东西</span><br />
                <span class="space">晴时有风阴有时雨</span><br />
                <span class="space">偷走了青丝却留住了一个小学妹</span><br />
                <span class="space">岁月是一场有去无回的旅行</span><br />
                <span class="space">好的坏的都是风景</span><br />
                <span class="space">那逗比小学妹应该是我大学里的最靓丽的一道风景线了</span><br />
                <span class="space">😂😂😂😂😂😂</span><br />
                <span class="space">😂😂😂😂😂😂</span><br />
                <span class="space">😂😂😂😂😂😂</span><br />
				<span class="space"/>祝逗比小学妹生日快乐！！！<br />------与君初相识，犹如故人归。</span> <br />--}}
            <br />
        </div>
        <div id="loveHeart">
            <canvas id="garden"></canvas>
            <div id="words">
                <div id="messages">
                    to 逗比阿芝小学妹
                    <div id="elapseClock"></div>
                </div>
                <div id="loveu">
                    祝逗比小学妹生日快乐！愿身体健康，天天开心，开过年来找到一份满意的工作！！！<br/>
                    <div class="signature">- from 逗比老学长</div>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    var offsetX = $("#loveHeart").width() / 2;
    var offsetY = $("#loveHeart").height() / 2 - 55;
    var together = new Date();
    together.setFullYear(2014, 7, 5);
    together.setHours(20);
    together.setMinutes(0);
    together.setSeconds(0);
    together.setMilliseconds(0);

    if (!document.createElement('canvas').getContext) {
        var msg = document.createElement("div");
        msg.id = "errorMsg";
        msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+";
        document.body.appendChild(msg);
        $("#code").css("display", "none")
        $("#copyright").css("position", "absolute");
        $("#copyright").css("bottom", "10px");
        document.execCommand("stop");
    } else {
        setTimeout(function () {
            startHeartAnimation();
        }, 5000);

        timeElapse(together);
        setInterval(function () {
            timeElapse(together);
        }, 500);

        adjustCodePosition();
        $("#code").typewriter();
    }
</script>
</body>
</html>
