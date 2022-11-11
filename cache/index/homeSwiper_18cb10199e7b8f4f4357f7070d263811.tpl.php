<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><div class="swiper home-swiper">

    <div class="home-types d-none d-lg-block">
        <div class="container">
            <div class="home-types-wrap">
                <div class="select home-types-item  wow fadeInUp" data-delay=".1s">
                    <img src="<?php echo STATIC_URL;?>company/images/公司介绍.png" alt="">
                    <div class="text">公司介绍</div>
                </div>
                <div class="home-types-item  wow fadeInUp" data-delay=".2s">
                    <img src="<?php echo STATIC_URL;?>company/images/公司荣誉.png" alt="">
                    <div class="text">公司荣誉</div>
                </div>
                <div class="home-types-item  wow fadeInUp" data-delay=".3s">
                    <img src="<?php echo STATIC_URL;?>company/images/合作伙伴.png" alt="">
                    <div class="text">合作伙伴</div>
                </div>
                <div class="home-types-item  wow fadeInUp" data-delay=".4s">
                    <img src="<?php echo STATIC_URL;?>company/images/组织架构.png" alt="">
                    <div class="text">组织架构</div>
                </div>
                <div class="home-types-item  wow fadeInUp" data-delay=".5s">
                    <img src="<?php echo STATIC_URL;?>company/images/新闻中心.png" alt="">
                    <div class="text">新闻中心</div>
                </div>
            </div>

        </div>
    </div>
    <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'banner')) {$data = $tag->banner(array('field'=>'title,image,url,typeid,status','limit'=>'10','typeid'=>'1',));}?>
    <?php $i=0?>
    <div class="swiper-wrapper">
        <?php if(is_array($data)) foreach($data as $v) { ?>

        <?php $i++?>
        <?php if($i===1) { ?>
        <div class="swiper-slide">

            <section class="home-one" style="background-image: url(<?php echo $v['image'];?>);">
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
                                <!-- <span swiper-animate-effect="fadeInUp" class="ani"
                                    swiper-animate-delay=".3s">我们有最先进最优秀的服务技术和团队</span> -->
                                <h1 swiper-animate-effect="fadeInUp" class="ani" swiper-animate-delay=".1s">最专业的3D打印
                                    <br>
                                    海创三维科技(苏州)有限公司
                                </h1>
                                <div class="home-one-desc ani" swiper-animate-effect="fadeInUp"
                                    swiper-animate-delay=".2s" style="margin-top: 59px;">

                                    <span>我们有最新进最优秀的服务技术和团队</span>
                                </div>
                                <div class="slider__play ani" style="margin-top:83px ;"
                                    swiper-animate-effect="fadeInRight" swiper-animate-delay=".3s">
                                    <a href="https://youtu.be/yJg-Y5byMMw" class="slider__play-btn" data-fancybox><i
                                            class="fal fa-play"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <?php } else { ?>
        <div class="swiper-slide">
            <section class="home-two">
                <img src="<?php echo $v['image'];?>" alt="" style="width: 100%;height:100%;">
            </section>
        </div>
        <?php } ?>
        <?php } ?>
        <!-- <div class="swiper-slide">
            <section class="home-two">
               
            </section>
        </div> -->
        <!-- <div class="swiper-slide">
            <section class="home-three">
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
                            
                                <h1 swiper-animate-effect="fadeInUp" class="ani" swiper-animate-delay=".1s">工业级高精度
                                    <br>
                                    3D打印机
                                </h1>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div> -->

    </div>

</div>


<script>

    let swiper1 = new Swiper(".home-swiper", {
        autoplay: false,
        on: {
            init: function () {
                // swiperAnimateCache(this); //隐藏动画元素 
                // swiperAnimate(this); //初始化完成开始动画
            },
            slideChangeTransitionEnd: function () {
                // swiperAnimate(this); //每个slide切换结束时也运行当前slide动画
                //this.slides.eq(this.activeIndex).find('.ani').removeClass('ani'); 动画只展现一次，去除ani类名
            }
        }
    });

</script>