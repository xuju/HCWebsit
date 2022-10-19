<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/home.css">


<script type="text/javascript" src="<?php echo STATIC_URL;?>plugin/swiper/js/swiper.animate1.0.3.min.js"></script>

<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <section class="home-one">
                <div class="slider__shape">
                    <img class="shape triangle" src="<?php echo STATIC_URL;?>company/img/icon/slider/triangle.png" alt="triangle">
                    <img class="shape dotted-square" src="<?php echo STATIC_URL;?>company/img/icon/slider/dotted-square.png"
                        alt="dotted-square">
                    <img class="shape solid-square" src="<?php echo STATIC_URL;?>company/img/icon/slider/solid-square.png"
                        alt="solid-square">
                    <img class="shape circle" src="<?php echo STATIC_URL;?>company/img/icon/slider/circle.png" alt="circle">
                </div>
                <div class="container  home-text">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10 col-sm-10">
                            <div class="slider__content">
                                <span data-animation="fadeInUp" data-delay=".3s">我们有最先进最优秀的服务技术和团队</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">最专业的3D打印 <br> 海创三维科技(苏州)有限公司</h1>
                                <div class="slider__btn" data-animation="fadeInUp" data-delay=".7s">
                                    <a href="contact.html" class="z-btn z-btn-transparent">询 价</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2">
                            <div class="slider__play" data-animation="fadeInRight" data-delay=".9s">
                                <a href="https://youtu.be/yJg-Y5byMMw" class="slider__play-btn" data-fancybox><i
                                        class="fal fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="features__area wow fadeInUp d-none d-sm-block  	d-md-none d-md-block">
                    <div class="container">
                        <div class="features__inner fix">
                            <div class="row no-gutters">
                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                    <div class="features__item text-center">
                                        <div class="features__thumb"
                                            data-background="<?php echo STATIC_URL;?>company/img/features/features-1.jpg"></div>
                                        <div class="features__content">
                                            <div class="features__icon">
                                                <i class="icon_book_alt"></i>
                                            </div>
                                            <h3>Ifrs and Management Reporting </h3>
                                            <div class="features__btn">
                                                <a href="services-details.html" class="link-btn">
                                                    <i class="fal fa-long-arrow-right"></i>
                                                    <i class="fal fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                    <div class="features__item text-center">
                                        <div class="features__thumb"
                                            data-background="<?php echo STATIC_URL;?>company/img/features/features-1.jpg"></div>
                                        <div class="features__content">
                                            <div class="features__icon">
                                                <i class="icon_lightbulb_alt"></i>
                                            </div>
                                            <h3>See term life insurance rates </h3>
                                            <div class="features__btn">
                                                <a href="services-details.html" class="link-btn">
                                                    <i class="fal fa-long-arrow-right"></i>
                                                    <i class="fal fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                    <div class="features__item text-center">
                                        <div class="features__thumb"
                                            data-background="<?php echo STATIC_URL;?>company/img/features/features-1.jpg"></div>
                                        <div class="features__content">
                                            <div class="features__icon">
                                                <i class="icon_house_alt"></i>
                                            </div>
                                            <h3>Get health insurance quotes </h3>
                                            <div class="features__btn">
                                                <a href="services-details.html" class="link-btn">
                                                    <i class="fal fa-long-arrow-right"></i>
                                                    <i class="fal fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                    <div class="features__item text-center">
                                        <div class="features__thumb"
                                            data-background="<?php echo STATIC_URL;?>company/img/features/features-1.jpg"></div>
                                        <div class="features__content">
                                            <div class="features__icon">
                                                <i class="icon_document_alt"></i>
                                            </div>
                                            <h3>Boat and Yacht Insurance </h3>
                                            <div class="features__btn">
                                                <a href="services-details.html" class="link-btn">
                                                    <i class="fal fa-long-arrow-right"></i>
                                                    <i class="fal fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                    <div class="features__item text-center">
                                        <div class="features__thumb"
                                            data-background="<?php echo STATIC_URL;?>company/img/features/features-1.jpg"></div>
                                        <div class="features__content">
                                            <div class="features__icon">
                                                <i class="icon_lock_alt"></i>
                                            </div>
                                            <h3>Umbrella Insurance </h3>
                                            <div class="features__btn">
                                                <a href="services-details.html" class="link-btn">
                                                    <i class="fal fa-long-arrow-right"></i>
                                                    <i class="fal fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                    <div class="features__item text-center">
                                        <div class="features__thumb"
                                            data-background="<?php echo STATIC_URL;?>company/img/features/features-1.jpg"></div>
                                        <div class="features__content">
                                            <div class="features__icon">
                                                <i class="icon_ribbon_alt"></i>
                                            </div>
                                            <h3>How we think and work </h3>
                                            <div class="features__btn">
                                                <a href="services-details.html" class="link-btn">
                                                    <i class="fal fa-long-arrow-right"></i>
                                                    <i class="fal fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        <div class="swiper-slide">
            <section class="about__area">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 pr-0 col-lg-6">
                            <div class="about__thumb m-img  ani " swiper-animate-effect="fadeInUp">
                                <img src="<?php echo STATIC_URL;?>company/img/about/about-1.jpg" alt="">
                                <div class="about__shape">
                                    <img src="<?php echo STATIC_URL;?>company/img/about/red-shape.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1">
                            <div class="about__content  ani" swiper-animate-effect="fadeInRight">
                                <div class="section__title mb-25">
                                    <span>了解一下我们</span>
                                    <h2>简介</h2>
                                </div>
                                <p>
                                    <?php echo page_content(19, 1000);?>
                                </p>
                                <div class="about__list">
                                    <ul>
                                        <li swiper-animate-effect="fadeInUp" swiper-animate-delay=".6s"><span><i
                                                    class="far fa-check"></i>医疗行业</span></li>
                                        <li swiper-animate-effect="fadeInUp" swiper-animate-delay=".8s"><span><i
                                                    class="far fa-check"></i>汽车开发应用</span></li>
                                        <li swiper-animate-effect="fadeInUp" data-wow-delay="1s"
                                            swiper-animate-delay="1s"><span><i class="far fa-check"></i>航空航天应用</span>
                                        </li>
                                    </ul>
                                </div>
                                <a href="services.html" class="z-btn ani   " style="display: block;"
                                    swiper-animate-effect="fadeInUp">我们做什么<i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-slide">
            <section class="rongyu">
                <div class="rongyu-top">
                    <h2>公司荣誉</h2>
                    <div class="rongyu-engish">Company Honors</div>
                </div>
                <div class="rongyu-content">

                    <!-- <?php echo page_content(20,10000);?> -->
                    <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-delay="0s">
                        +2008年8月、卢秉恒院士被授予“苏州工业园区科技领军人才”称号;
                    </div>
                    <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-delay="0.1s">
                        +2008年11月，卢秉恒院士被评为“江苏省高层次创新创业</div>
                    <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-delay="0.2s">
                        +2008年12月，卢秉恒院士被授予“姑苏创新创业领军人才称号;</div>
                    <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-delay="0.3s">
                        +2009年1月，公司获批成立数控系统性能评测中心:</div>
                    <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-delay="0.4s">
                        +2009年1月，苏州工业园区企业博士后科研工作站秉创科技分站挂牌成立，现已有3位博士后进站工作;</div>
                    <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-delay="0.5s">
                        +2009年1月，创建了苏州工业园区快速制造公共技术服务f平台;</div>
                    <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-delay="0.6s">
                        +2009年5月，公司与奇瑞汽车股份有限公司签订战略合作协议;+2009年5月，公司加入苏州市工业设计协作联盟任副秘书长单位。</div>
                    <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-delay="0.7s">
                        +2009年5月，公司加入苏州市汽车工程学会任名誉理事长、副理事长单位。+2009年7月,公司获批成立江苏省企业院士工作站;</div>
                    <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-delay="0.8s">
                        +2009年7月，公司被评为苏州市高新技术企业;</div>
                    <div class="ani" swiper-animate-effect="fadeInUp" swiper-animate-delay="0.9s">
                        +2009年7月，公司获批成立苏州市快速成型工程技术研究中心。</div>

                </div>
            </section>
        </div>
        <div class="swiper-slide">
            <section class="hezuo">
                <div class="hezuo-top">
                    <h2>合作伙伴</h2>
                    <div class="rongyu-engish">Cooperative Partner</div>
                </div>
                <div class="hezuo-content">
                    <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'link')) {$data = $tag->link(array('field'=>'url,logo,name','limit'=>'20',));}?>
                    <?php $i=0;?>
                    <?php if(is_array($data)) foreach($data as $v) { ?>
                    <?php $i++;?>
                    <div>
                        <img src="<?php echo $v['logo'];?>" class="ani" swiper-animate-effect="fadeInUp" alt="<?php echo $v['name'];?>"
                            height="60">
                    </div>
                    <?php } ?>

                </div>
            </section>
        </div>
        <div class="swiper-slide">
            <div class="zuzhi ani" swiper-animate-effect="fadeInUp">
                <img src="<?php echo $site['organization'];?>" alt="">
            </div>
        </div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-pagination"></div>
</div>




</body>
<script src="<?php echo STATIC_URL;?>company/js/vendor/waypoints.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/jquery.meanmenu.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/slick.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/jquery.fancybox.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/jquery.counterup.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/isotope.pkgd.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/owl.carousel.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/ajax-form.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/wow.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/main.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        on: {
            init: function () {
                swiperAnimateCache(this); //隐藏动画元素 
                swiperAnimate(this); //初始化完成开始动画
            },
            slideChangeTransitionEnd: function () {
                swiperAnimate(this); //每个slide切换结束时也运行当前slide动画
                //this.slides.eq(this.activeIndex).find('.ani').removeClass('ani'); 动画只展现一次，去除ani类名
            }
        }
    });
</script>

</html>