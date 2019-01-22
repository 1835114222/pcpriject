<?php
include '../../db/db.php';
//$sql = "select * from type";
$sql="SELECT * FROM type";
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
    <title>家具产品中心</title>
    <link rel="stylesheet" href="../../static/css/swiper-4.3.5.min.css">
    <link rel="stylesheet" href="../../static/css/bootstrap.css">
    <link rel="stylesheet" href="../../static/css/base.css">
    <link rel="stylesheet" href="../../static/css/style-2.css">
    <style>
        .F{
        font-size: 14px;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
        /*margin-left: 60px;*/
        }
    </style>
</head>
<body>
<!--标题-->
<div class="title">
    <div class="bigBox">
        <div class="box1">
            <img src="../../static/img/one-title1.png" alt="">
        </div>

        <a href="../index/index.php">
            <div class="box2">
                <h4>首页</h4>
                <p>洛克商品</p>
            </div>
        </a>


        <a href="core.php">
            <div class="box2" style="text-decoration: none">
                <h4>家具产品中心</h4>
                <p>高端实木中心</p>
            </div>
        </a>

        <a href="../index/plan.php" style="text-decoration: none">
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

        <a href="../index/jion.php" style="text-decoration: none">
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


<!--首页导航-->
<div class="texttitle">
    首页 / 家居产品中心 / 北美之家 / 空间 / SPACE / 客厅空间 / 沙发
</div>

<div class="imgBox">
    <div class="leftbox">
        <dl>
            <dt>空间SPACE</dt>
            <dd><a href="../index/centent/break.php" class="F">课间空间</a></dd>
            <dd><a href="../index/centent/dining.php" class="F">餐厅空间</a></dd>
            <dd><a href="../index/centent/bedroom.php" class="F">卧室空间</a></dd>
            <dd><a href="../index/centent/study.php" class="F">书房空间</a></dd>
        </dl>
    </div>
<!--    <div class="rightbox">-->
<!--                <div class="swiper-slide">-->
<!--                <div class="img">-->
<!--                    <img src="../../static/img/t1.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="text">沙发椅</div>-->
<!--               </div>-->
<!--                <div class="swiper-slide">-->
<!--            <div class="img">-->
<!--                <img src="../../static/img/t2.jpg" alt="">-->
<!--            </div>-->
<!--            <div class="text">沙发椅</div>-->
<!---->
<!--        </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="img">-->
<!--                        <img src="../../static/img/t3.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="text">沙发椅</div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="img">-->
<!--                        <img src="../../static/img/t4.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="text">沙发椅</div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="img">-->
<!--                        <img src="../../static/img/t5.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="text">沙发椅</div>-->
<!---->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="img">-->
<!--                        <img src="../../static/img/t6.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="text">沙发椅</div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="img">-->
<!--                        <img src="../../static/img/t7.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="text">沙发椅</div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="img">-->
<!--                        <img src="../../static/img/t8.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="text">沙发椅</div>-->
<!---->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="img">-->
<!--                        <img src="../../static/img/t9.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="text">沙发椅</div>-->
<!--                </div>-->
<!--    </div>-->

    <div class="rightbox">
        <ul>
            <?php
                foreach ($res as $k=>$v){
            ?>
            <li>
                <div class="img">
                    <img src="<?php echo $v['src'] ?>" alt="">
                </div>
                <div class="text"><?php echo $v['title'] ?></div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
    <div class="rightbox">
     <ul>
        <li>
            <div class="img">
                <img src="../../static/img/t10.jpg" alt="">
            </div>
            <div class="text">FBDHFHFD沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t11.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t12.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t1.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t2.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t3.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t4.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>

        <li>
            <div class="img">
                <img src="../../static/img/t8.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t11.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t5.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t6.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t7.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>

        </ul>
    </div>

    <div class="rightbox">
        <ul>
        <li>
            <div class="img">
                <img src="../../static/img/t7.jpg" alt="">
            </div>
            <div class="text">dgsd沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t8.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t9.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t1.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>

        <li>
            <div class="img">
                <img src="../../static/img/t4.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t5.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t6.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t2.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t3.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>

        <li>
            <div class="img">
                <img src="../../static/img/t12.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t13.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t11.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        </ul>
    </div>


    <div class="rightbox" >
        <ul>
        <li>
            <div class="img">
                <img src="../../static/img/t13.jpg" alt="">
            </div>
            <div class="text">3DFD沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t11.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t12.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t1.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t2.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t3.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t4.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>

        <li>
            <div class="img">
                <img src="../../static/img/t8.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t9.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t5.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t6.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>
        <li>
            <div class="img">
                <img src="../../static/img/t7.jpg" alt="">
            </div>
            <div class="text">沙发椅</div>
        </li>

        </ul>
    </div>
<div class="null"></div>
</div>

<!--预约部分-->
<div class="bespeak">
    <div class="box leftbox">
        <img src="../../static/img/one-biaodan-1.png" alt="">
        <p>ENJOY THE DESIGN OF LOVE LIFE</p>
        <div class="gg"></div>
    </div>
    <div class="box box1">
        <input type="text" placeholder="您的称呼" class="form-control">
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
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <h2>美克A.R.T.</h2>
            <p>Add：成都市蓉都大道将军路68号</p>
            <p>Tel ：028-63169338 028-61369337</p>
            <p>Add：成都红星美凯龙双楠商场二楼</p>
            <p>Tel ：028-66600337</p>


        </li>
        <li>
            <h2>A.R.T.西区</h2>
            <p>add：红星美凯龙双楠商场四楼</p>
            <p>Tel：028-65104599</p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
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
            <p></p>
            <p></p>
            <p></p>
            <p></p>
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
            <p>Tel：028-85215586 </p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
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
<script src="../../static/js/jquery-3.3.1.min.js"></script>
<!--<script src="../../static/js/swiper.js"></script>-->
<script>
    let dds = $(".imgBox dl dd");
    let imgs = $(".imgBox .rightbox");
    console.log(dds, imgs);
    console.log(dds.eq(0).index());
    console.log(imgs.eq(0).index());


    dds.mouseenter(function () {
        let i = $(this).index() - 1;
        console.log(i);
        imgs.css({display: "none"}).eq(i).css({display: "block"});

    })
</script>
<!--<script>-->
<!--    var swiper = new Swiper('.swiper-container', {-->
<!---->
<!--            slidesPerView: 3,-->
<!---->
<!--    });-->
<!--</script>-->
</html>

