<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
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
                <div class="page__title-content mt-100">
                    <h2><?php echo get_catname($catid);?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="<?php echo SITE_URL;?>">回到首页</a></li>
                            <li class="breadcrumb-item active" aria-current="page">常见问题解答</li> -->
                            <?php echo get_location($catid);?>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about__area pb-200 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 pr-0 col-lg-6">
                <div class="about__thumb m-img wow fadeInLeft" data-wow-delay=".2s">
                    <img src="<?php echo STATIC_URL;?>company/img/about/about-1.jpg" alt="">
                    <div class="about__shape">
                        <img src="<?php echo STATIC_URL;?>company/img/about/red-shape.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1">
                <div class="about__content wow fadeInRight" data-wow-delay=".4">
                    <div class="section__title mb-25">
                        <span>了解一下我们</span>
                        <h2>简介</h2>
                    </div>
                    <!-- <p><?php echo $content;?></p> -->
                    <div class="about__list">
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".6s"><span><i class="far fa-check"></i>医疗行业</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".8s"><span><i
                                        class="far fa-check"></i>汽车开发应用</span></li>
                            <li class="wow fadeInUp" data-wow-delay="1s"><span><i class="far fa-check"></i>航空航天应用</span>
                            </li>
                        </ul>
                    </div>
                    <a href="services.html" class="z-btn wow fadeInUp" data-wow-delay="1.2s">我们做什么<i
                            class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include template("index","footer"); ?>