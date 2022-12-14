<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<script src="//api.map.baidu.com/api?type=webgl&v=1.0&ak=ed0xbmFXAwO3FSheAGh6iTNuY12nLpr6"></script>
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
                <div class="page__title-content ">
                    <h2><?php echo get_catname($catid);?></h2>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- contact info area start -->
<section class="contact-map" style="margin-top: 20px;">
    <div class="container">
        <div class="map-wrap" id="maps">

        </div>
    </div>
</section>
<!-- contact info area end -->

<!-- contact area start -->
<section class="contact__area">
    <div class="container-fluid p-0">
        <div class="row ">
            <div class="col-xl-12">
                <div class="contact__map  wow fadeInUp">

                    <div class="contact__wrapper d-md-flex justify-content-between ">
                        <div class="contact__info mr-100">
                            <h3>给我们留言</h3>
                            <ul>
                                <li>
                                    <h4>地址</h4>
                                    <p>江苏省,苏州市,工业园区<br> 东旺路8号 </p>
                                </li>
                                <li>
                                    <h4>电话</h4>
                                    <p><a href="tel:(+86)-13771921540">(+86) 13771921540</a></p>
                                    <p><a href="tel:(+86)-13771921540">(+86) 13771921540</a></p>
                                </li>
                                <li>
                                    <h4>邮箱</h4>
                                    <p><a href="mailto:qhyft@163.com">qhyft@163.com</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">


                            <form action="<?php echo U('guestbook/index/init');?>" method="post">

                                <table class='yzm-table'>
                                    <input type="hidden" value="title" name="title" placeholder="留言主题">
                                    <input type="text" value="" name="name" placeholder="你的姓名" required>
                                    <input type="email" value="" name="email" placeholder="你的邮箱" required>
                                    <textarea name="bookmsg" value="" placeholder="请留下您的信息" required></textarea>

                                    <div>
                                        验证码 <input name="code" required type="text" class="yzm-input-text"
                                            style="width:100px;">
                                        <img src="<?php echo U('api/index/code');?>" onclick="this.src=this.src+'?'"
                                            class="yzm-code" title="看不清？点击更换">
                                    </div>
                                    <div>
                                        <input type="submit" name="dosubmit" value="确认提交" class="yzm-submit">
                                    </div>




                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include template("index","footer"); ?>
<script>
    var map = new BMapGL.Map('maps');
    map.centerAndZoom(new BMapGL.Point(120.771799, 31.296322), 20);
    map.enableScrollWheelZoom(true);
    map.setHeading(64.5);
    map.setTilt(73);
    // 创建添加点标记
    var marker = new BMapGL.Marker(new BMapGL.Point(120.771799, 31.296322));
    map.addOverlay(marker);
    // 创建图文信息窗口
    var sContent = `<div style="padding-bottom:10px">
    <h6 style='margin:0 0 5px 0;'>海创三维科技（苏州）有限公司</h6>

    <p style='margin:0;line-height:1.5;font-size:13px;'>
        苏州工业园区东旺路8号七号楼A幢F301-047室
    </p>
</div>`;
    var infoWindow = new BMapGL.InfoWindow(sContent);
    marker.openInfoWindow(infoWindow)

</script>