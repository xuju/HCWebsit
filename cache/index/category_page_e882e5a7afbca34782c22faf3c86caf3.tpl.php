<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<script src="//api.map.baidu.com/api?type=webgl&v=1.0&ak=ed0xbmFXAwO3FSheAGh6iTNuY12nLpr6"></script>
<link rel="stylesheet" href="<?php echo STATIC_URL;?>plugin/iShare/style/fonts/iconfont.css">
<link rel="stylesheet" href="<?php echo STATIC_URL;?>plugin/iShare/style/css/ishare.css">
<!-- <script src="<?php echo STATIC_URL;?>/plugin/iShare/iShare.js"></script> -->
<script src="<?php echo STATIC_URL;?>/plugin/iShare/iShare_tidy.js"></script>
<script src="<?php echo STATIC_URL;?>/plugin/iShare/qrcode.min.js"></script>
<section class="page__title p-relative d-flex align-items-center fix" data-background="<?php echo $catimg;?>">
    <div class="slider__shape">
        <img class="shape triangle" src="<?php echo STATIC_URL;?>company/img/icon/slider/triangle.png" alt="triangle">
        <img class="shape dotted-square" src="<?php echo STATIC_URL;?>company/img/icon/slider/dotted-square.png"
            alt="dotted-square">
        <img class="shape solid-square" src="<?php echo STATIC_URL;?>company/img/icon/slider/solid-square.png" alt="solid-square">
        <img class="shape circle-2" src="<?php echo STATIC_URL;?>company/img/icon/slider/circle.png" alt="circle">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__title-content wow fadeInUp ">
                    <h2><?php echo get_catname($catid);?></h2>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- contact info area start -->
<section class="contact-map">
    <div class="contact-map-container">
        <div class="row">
            <div class="map-left  col-lg-7  col-sm-12  wow fadeInUp">
                <div class="map-wrap" id="maps">

                </div>
            </div>
            <div class="map-right  col-lg-5  col-sm-12  wow fadeInUp">
                <div class="map-right-wrap">
                    <h1>海创三维科技（苏州）有限公司</h1>
                    <div class="company-info-wrap">
                        <p>地址：<?php echo $site['address'];?></p>
                        <p> </p>
                        <p>电话：<a href="tel:(+86)-18018149584"><?php echo $site['phone'];?></a></p>

                        <p>邮箱：<a href="mailto:848820348@qq.com"><?php echo $site['email'];?></a></p>
                    </div>
                    <div class="iShare iShare1" style="margin-top:30px;">

                        <a href="#" class="iShare_weibo"><img src="<?php echo STATIC_URL;?>plugin/iShare/images/share-weibo.png"
                                width="30" alt="微博"></a>

                        <a href="#" class="iShare_wechat"><img src="<?php echo STATIC_URL;?>plugin/iShare/images/share-wechat.png"
                                width="30" alt="微信"></a>

                        <a href="#" class="iShare_qq"><img src="<?php echo STATIC_URL;?>plugin/iShare/images/share-qq.png"
                                width="30" alt="QQ"></a>

                        <a href="#" class="iShare_qzone"><img src="<?php echo STATIC_URL;?>plugin/iShare/images/share-qzone.png"
                                width="30" alt="分享到QQ空间"></a>

                        <!-- <a href="#" class="iShare_copy clipboard-copy"><img
                                src="<?php echo STATIC_URL;?>plugin/iShare/images/share-copyLink.png" width="30" alt="复制链接"></a> -->




                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<section class="message-wrap">
    <h1>欢迎给我们留言</h1>
    <div class="ly-wrap">
        <form action="<?php echo U('guestbook/index/init');?>" method="post">
            <input type="hidden" value="title" name="title" placeholder="留言主题">
            <div class="row justify-content-center">
                <div class="col-lg-6  col-sm-6">

                    <input type="text" value="" name="name" placeholder-class="placeholderStyle " class="name"
                        placeholder="你的姓名" required>
                </div>
                <div class="col-lg-6  col-sm-6">

                    <input type="email" value="" name="email" class="email" placeholder="你的邮箱" required>
                </div>
                <div class="col-lg-6  col-sm-6">

                    <textarea name="bookmsg" value="" class="bookmsg" placeholder="请留下您的信息" required></textarea>
                </div>

                <div class="col-lg-6  col-sm-6">

                    <div class="code-wrap">
                        <input name="code" placeholder="请输入验证码" required type="text" class="yzm-input-text">
                        <img src="<?php echo U('api/index/code');?>" onclick="this.src=this.src+'?'" class="yzm-code"
                            title="看不清？点击更换">
                    </div>
                </div>
                <div class="col-lg-6  col-sm-6">

                    <div>
                        <input type="submit" name="dosubmit" value="确认提交" class="yzm-submit">
                    </div>
                </div>


            </div>

        </form>
    </div>
</section>

<?php include template("index","footer"); ?>
<script>
    window.iShare_config = {
        container: '.iShare1', config: {

            title: document.title,

            description: document.description,

            url: location.href,
            qrcode: "/common/static/plugin/iShare/qrcode.min.js",
            WXoptions: {
                evenType: 'click',
                isTitleVisibility: true,
                title: "扫一扫分享到朋友圈",
                isTipVisibility: true,
                tip: document.title,
                qrcodeW: 240,
                qrcodeH: 240,
                qrcodeBgc: '#e1bee7',
                qrcodeFgc: '#4a148c',
                bgcolor: '#2BAD13'

            }

        }
    };
    // new iShare(iShare_config)

    (new iShare());
    const map = new BMapGL.Map('maps');
    map.centerAndZoom(new BMapGL.Point(120.771799, 31.296322), 20);
    map.enableScrollWheelZoom(true);
    map.setHeading(64.5);
    map.setTilt(73);
    // 创建添加点标记
    const marker = new BMapGL.Marker(new BMapGL.Point(120.771799, 31.296322));
    map.addOverlay(marker);
    // 创建图文信息窗口
    const sContent = `<div style="padding-bottom:10px">
    <h6 style='margin:0 0 5px 0;'>海创三维科技（苏州）有限公司</h6>

    <p style='margin:0;line-height:1.5;font-size:13px;'>
        苏州工业园区东旺路
    </p>
</div>`;
    const infoWindow = new BMapGL.InfoWindow(sContent);
    marker.openInfoWindow(infoWindow)

</script>