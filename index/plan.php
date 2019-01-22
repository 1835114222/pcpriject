<?php
include '../../db/db.php';
//$sql = "select * from product";
$sql="SELECT * FROM product";
$r=$db->query($sql);
$res = $r->fetch_all(MYSQLI_ASSOC);
//var_dump($res);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>设计中心</title>
    <link rel="stylesheet" href="../../static/css/swiper-4.3.5.min.css">
    <link rel="stylesheet" href="../../static/css/bootstrap.css">
    <link rel="stylesheet" href="../../static/css/base.css">
    <link rel="stylesheet" href="../../static/css/style-3.css">

    <script src="../../static/js/swiper-4.3.5.min.js"></script>

</head>
<body>
<!--标题-->
<div class="title">
    <div class="bigBox">
        <div class="box1">
            <img src="../../static/img/one-title1.png" alt="">
        </div>


        <a href="../index/index.php"  style="text-decoration: none">
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
        <a href="know.php" style="text-decoration: none">
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

        <!-- 如果需要导航按钮 -->
        <div class="swiper-button-prev"></div>
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

<!--设计师部分-->
<div class="designer">
    <a href="../../static/js/jin.html" class="img col-xs-12 col-sm-9 ">

    </a>
    <div class="text col-xs-12 col-sm-3 ">
        <img src="../../static/img/3-designer-1.png" alt="">
        <dl>
            <dt>马景琨</dt>
            <dd>软件设计4年经验</dd>
            <dd>崇尚以人为本</dd>
            <dd>做空间的灵魂塑造者</dd>
        </dl>
        <p>了解更多</p>
    </div>

</div>


<!--经典案例-->
<div class="con">
    <h2>经典案例</h2>
    <div class="line"></div>
    <h5>CLASSIC CASE</h5>
    <p>西派国际/金碧天下/天誉/环球时代中心等…</p>

</div>



<!--案例展示-->

<div class="anlib">
    <?php
        foreach ($res as $k=>$v){
    ?>
    <a href="../../static/js/jin.html">
        <div class="imgbox" style="background-image: url(<?php echo $v['src'] ?>)">
        <div class="text">
            <h2><?php echo $v['title'] ?></h2>
            <div class="line"></div>
            <p>美式风格设计的粗矿大气</p>
        </div>
    </div>
    </a>
    <?php
    }
    ?>
<!--    <div class="anbox">-->
<!--        <h2>天府长城</h2>-->
<!--        <p>-->
<!--            美式风格倡导“回归自然”的一种感觉，在室内环境中力求表现悠闲、舒畅、自然的田园生活情趣…-->
<!--        </p>-->
<!--    </div>-->
<!--    <a href="../../static/js/jin.html">-->
<!--    <div class="imgbox">-->
<!--        <div class="text">-->
<!--            <h2>天府长城</h2>-->
<!--            <div class="line"></div>-->
<!--            <p>美式风格倡导“回归自然”的一种感觉，在室内环境中力求表现悠闲、舒畅、自然的田园生活情趣…</p>-->
<!--        </div>-->
<!--    </div></a>-->
<!--    <div class="anbox">-->
<!--        <h2>天府长城</h2>-->
<!--        <p>-->
<!--            美式风格倡导“回归自然”的一种感觉，在室内环境中力求表现悠闲、舒畅、自然的田园生活情趣…-->
<!--        </p>-->
<!--    </div>-->
<!---->
<!--    <a href="../../static/js/jin.html">-->
<!--    <div class="imgbox">-->
<!--        <div class="text">-->
<!--            <h2>凤凰城</h2>-->
<!--            <div class="line"></div>-->
<!--            <p>美式乡村风格摒弃了繁华与奢华，并将不同风格的优秀元素汇聚在一起。</p>-->
<!--        </div>-->
<!--    </div></a>-->
<!--    <div class="anbox">-->
<!--        <h2>凤凰城</h2>-->
<!--        <p>-->
<!--            美式乡村风格摒弃了繁华与奢华，并将不同风格的优秀元素汇聚在一起。-->
<!--        </p>-->
<!--    </div>-->
<!---->
<!--    <a href="../../static/js/jin.html">-->
<!--    <div class="imgbox">-->
<!--        <div class="text">-->
<!--            <h2>万科天逸</h2>-->
<!--            <div class="line"></div>-->
<!--            <p>橡木威士忌的特点也是有赖于优质的取材和精工的手艺创造出来一种舒适感</p>-->
<!--        </div>-->
<!--    </div></a>-->
<!--    <div class="anbox">-->
<!--        <h2>万科天逸</h2>-->
<!--        <p>-->
<!--            橡木威士忌的特点也是有赖于优质的取材和精工的手艺创造出来一种舒适感-->
<!--        </p>-->
<!--    </div>-->
<!---->
<!--    <a href="../../static/js/jin.html">-->
<!--    <div class="imgbox">-->
<!---->
<!--        <div class="text">-->
<!--            <h2>世茂御金湾</h2>-->
<!--            <div class="line"></div>-->
<!--            <p>美式风格有着欧罗巴的奢华与贵气，但又结合了美洲大陆这块水土</p>-->
<!--        </div>-->
<!---->
<!--    </div></a>-->
<!--    <div class="anbox">-->
<!--        <h2>世茂御金湾</h2>-->
<!--        <p>-->
<!--            美式风格有着欧罗巴的奢华与贵气，但又结合了美洲大陆这块水土-->
<!--        </p>-->
<!--    </div>-->
<!---->
<!--    <a href="../../static/js/jin.html">-->
<!--    <div class="imgbox">-->
<!--        <div class="text">-->
<!--            <h2>中粮祥云</h2>-->
<!--            <div class="line"></div>-->
<!--            <p>以奢华气派为主，柔美与温馨并集。</p>-->
<!--        </div>-->
<!--    </div></a>-->
<!--    <div class="anbox">-->
<!--        <h2>中粮祥云</h2>-->
<!--        <p>-->
<!--            以奢华气派为主，柔美与温馨并集。-->
<!--        </p>-->
<!--    </div>-->
</div>



<!--预约部分-->
<div class="bespeak">
    <div class="box leftbox">
        <img src="../../static/img/one-biaodan-1.png" alt="">
        <p>ENJOY THE DESIGN OF LOVE LIFE</p>
        <div class="gg"></div>
    </div>
    <div class="box box1">
        <input type="text" placeholder="您的称呼"  class="form-control">
        <input type="password" placeholder="您的手机号码" class="form-control">
        <select name="" id="">
            <option value="">设计新房</option>
            <option value="">旧房改造</option>

        </select>

        <button>立即预约</button>

    </div>



    <div class="box rightbox">
        <img src="../../static/img/one-biaodan-2.png" alt="">
        <p>官方微信公众号</p>
    </div>

</div>


<!--底部-->
<div class="bottom">
    <ul>
        <li>
            <h2>洛克尚品家居文化总部</h2>
            <p>Add：四川省成都市武侯区</p>
            <p>交子大道88号中航国际广场B座1104</p>
            <p>Tel：028-65470017</p>
            <p>  </p>
            <p>  </p>
            <p>  </p>
            <p>  </p>
            <h2>美克A.R.T.</h2>
            <p>Add：成都市蓉都大道将军路68号</p>
            <p>Tel ：028-63169338     028-61369337</p>
            <p>Add：成都红星美凯龙双楠商场二楼</p>
            <p>Tel ：028-66600337</p>


        </li>
        <li>
            <h2>A.R.T.西区</h2>
            <p>add：红星美凯龙双楠商场四楼</p>
            <p>Tel：028-65104599</p>
            <p>  </p>
            <p>  </p>
            <p>  </p>
            <p>  </p>
            <h2>迦南99.自然家</h2>
            <p>add：南门富森美家具MALL三楼</p>
            <p>Tel ：028-62495586</p>
            <p>add：红星.欧丽洛雅环球家居博览中心五楼</p>
            <p>Tel ：028-63160258</p>

        </li>
        <li>
            <h2>北美之家</h2>
            <p>add：红星美凯龙金牛商场四楼</p>
            <p>Tel ：028-66267277</p>
            <p>add：南门富森美家具MALL三楼3092A</p>
            <p>Tel ：028-61559368</p>
            <p>add：红星美凯龙双楠商场四楼</p>
            <p>Tel ：028-65052648</p>
            <p>  </p>
            <p>  </p>
            <p>  </p>
            <p>  </p>
            <p>add：北门富森家具馆楠木厅四楼</p>
            <p>Tel：028-63169578</p>
            <h2>迦南99.时尚家</h2>
            <p>Add：红星美凯龙双楠商场5楼</p>
            <p>Tel：028-65176288</p>

        </li>
        <li>
            <h2>迦南美术</h2>
            <p>add：红星美凯龙双楠商场5楼</p>
            <p>Tel：028-65974488</p>
            <p>add：南门富森美家居MALL四楼4001</p>
            <p>Tel：028-85215586  </p>
            <p>  </p>
            <p>  </p>
            <p>  </p>
            <p>  </p>
            <h2>洛克尚品家居文化售后部</h2>
            <p>Add：成都市蓉都大道将军路68号</p>
            <p>Add：四川省成都市武侯区文昌路258号7</p>
            <p>Tel：028-85202938</p>
        </li>
    </ul>
    <div class="box">
        洛克尚品 · 精品家居
    </div>
</div>
</body>
</html>
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