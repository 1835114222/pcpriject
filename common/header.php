<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="stylesheet" href="../../static/css/swiper-4.3.5.min.css">
    <link rel="stylesheet" href="../../static/css/bootstrap.css">
    <link rel="stylesheet" href="../../static/css/base.css">
    <link rel="stylesheet" href="../../static/css/style-one.css">


    <script src="../../static/js/swiper-4.3.5.min.js"></script>

</head>
<body>
<!--标题-->
<div class="title">
    <div class="bigBox">
        <div class="box1">
            <img src="../../static/img/one-title1.png" alt="">
        </div>

        <a href="../index/index.php"  >
            <div class="box2">
                <h4>首页</h4>
                <p>洛克商品</p>
            </div>
        </a>

        <a href="../type/core.php">
            <div class="box2"  style="text-decoration: none">
                <h4>家具产品中心</h4>
                <p>高端实木中心</p>
            </div>
        </a>

        <a href="plan.php" style="text-decoration: none">
            <div class="box2">
                <h4>软件设计中心</h4>
                <p>营造梦想家</p>
            </div>
        </a>

        <a href="../index/know.php" style="text-decoration: none">
            <div class="box2">
                <h4>了解洛克</h4>
                <p>居家软装一体化服务商</p>
            </div>
        </a>

        <a href="../index/jion.php"  style="text-decoration: none">
            <div class="box2">
                <h4>加入我们</h4>
                <p>欢迎您的加入</p>
            </div>
        </a>
        <a href="../index/seat.php">
            <div class="box2">
                <h4>门店位置</h4>
                <p>竭诚为您服务</p>
            </div>
        </a>
        <div class="icon">

        </div>
    </div>
</div>


<!--banner-->
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="../../static/img/one-banner1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="../../static/img/one-lunbo1.jpg" alt="">
            </div>
            <!--<div class="swiper-slide">-->
            <!--<img src="image/one-lunbo2.jpeg" alt="">-->
            <!--</div>-->
            <div class="swiper-slide">
                <img src="../../static/img/one-lunbo3.jpg" alt="">
            </div>
        </div>
        <!-- 如果需要分页器 -->
        <div class="swiper-pagination"></div>

        <!--&lt;!&ndash; 如果需要导航按钮 &ndash;&gt;-->
        <div class="swiper-button-prev" style="color: red;"></div>
        <div class="swiper-button-next"></div>

        <!-- 如果需要滚动条 -->
        <div class="swiper-scrollbar"></div>
    </div>
    <!--<div class="con">-->
    <!--<h1>A.R.T西区|发现生活更多可能-->
    <!--</h1>-->
    <!--<h3>年轻,心的向往</h3>-->
    <!--<div class="box">更多详情</div>-->

    <!--</div>-->
</div>

<script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        //自动轮播
        autoplay:true,
        autoplay: {
            delay: 2000,//1秒切换一次
        },

        //切换效果
        effect : 'fade',
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        },


        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // 如果需要滚动条
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    })
</script>

