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
                    <h2>关于我们</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo SITE_URL;?>">回到首页</a></li>
                            <li class="breadcrumb-item active" aria-current="page">常见问题解答</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio area start -->
<section class="portfolio__area pt-110 pb-160">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="portfolio__menu mb-40 wow fadeInUp" data-wow-delay=".3s">
                    <span>筛选: </span>
                    <?php $r = get_childcat($catid);?>
                    <?php $i=0;?>
                    <div class="masonary-menu filter-button-group d-sm-inline-block">
                        <button class="active" data-filter="*">全部</button>
                        <?php if(is_array($r)) foreach($r as $v) { ?>
                        <?php $i++;?>
                        <button data-filter=".cat<?php echo $i;?>"><?php echo $v['catname'];?></button>
                        <!-- <button data-filter=".cat2">Facilitation</button>
                        <button data-filter=".cat3">Strategy</button>
                        <button data-filter=".cat4">Design</button> -->
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row grid">
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6 grid-item cat1 cat3  ">
                <div class="portfolio__item p-relative mb-30">
                    <div class="portfolio__thumb w-img fix">
                        <img src="<?php echo STATIC_URL;?>company/img/portfolio/port-1.jpg" alt="">
                        <div class="portfolio__plus p-absolute transition-3">
                            <a href="<?php echo STATIC_URL;?>company/img/portfolio/port-1.jpg" data-fancybox="gallery">
                                <i class="fal fa-plus"></i>
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__content">
                        <h4><a href="portfolio-details.html">New Landing Screen</a></h4>
                        <p>UI Design</p>
                        <div class="portfolio__more p-absolute transition-3">
                            <a href="portfolio-details.html" class="link-btn-2">
                                Show Project
                                <i class="fal fa-long-arrow-right"></i>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat2 ">
                <div class="portfolio__item p-relative mb-30">
                    <div class="portfolio__thumb w-img fix">
                        <img src="<?php echo STATIC_URL;?>company/img/portfolio/port-2.jpg" alt="">
                        <div class="portfolio__plus p-absolute transition-3">
                            <a href="<?php echo STATIC_URL;?>company/img/portfolio/port-2.jpg" data-fancybox="gallery">
                                <i class="fal fa-plus"></i>
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__content">
                        <h4><a href="portfolio-details.html">Dinamica Lifestyle</a></h4>
                        <p>UI Design</p>
                        <div class="portfolio__more p-absolute transition-3">
                            <a href="portfolio-details.html" class="link-btn-2">
                                Show Project
                                <i class="fal fa-long-arrow-right"></i>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat4 cat1  ">
                <div class="portfolio__item p-relative mb-30">
                    <div class="portfolio__thumb w-img fix">
                        <img src="<?php echo STATIC_URL;?>company/img/portfolio/port-3.jpg" alt="">
                        <div class="portfolio__plus p-absolute transition-3">
                            <a href="<?php echo STATIC_URL;?>company/img/portfolio/port-3.jpg" data-fancybox="gallery">
                                <i class="fal fa-plus"></i>
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__content">
                        <h4><a href="portfolio-details.html">A Classic Cup</a></h4>
                        <p>Photography</p>
                        <div class="portfolio__more p-absolute transition-3">
                            <a href="portfolio-details.html" class="link-btn-2">
                                Show Project
                                <i class="fal fa-long-arrow-right"></i>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat3">
                <div class="portfolio__item p-relative mb-30">
                    <div class="portfolio__thumb w-img fix">
                        <img src="<?php echo STATIC_URL;?>company/img/portfolio/port-4.jpg" alt="">
                        <div class="portfolio__plus p-absolute transition-3">
                            <a href="<?php echo STATIC_URL;?>company/img/portfolio/port-4.jpg" data-fancybox="gallery">
                                <i class="fal fa-plus"></i>
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__content">
                        <h4><a href="portfolio-details.html">Full Branding Crew</a></h4>
                        <p>Photography</p>
                        <div class="portfolio__more p-absolute transition-3">
                            <a href="portfolio-details.html" class="link-btn-2">
                                Show Project
                                <i class="fal fa-long-arrow-right"></i>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat4 cat3">
                <div class="portfolio__item p-relative mb-30">
                    <div class="portfolio__thumb w-img fix">
                        <img src="<?php echo STATIC_URL;?>company/img/portfolio/port-5.jpg" alt="">
                        <div class="portfolio__plus p-absolute transition-3">
                            <a href="<?php echo STATIC_URL;?>company/img/portfolio/port-5.jpg" data-fancybox="gallery">
                                <i class="fal fa-plus"></i>
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__content">
                        <h4><a href="portfolio-details.html">New Landing Screen</a></h4>
                        <p>UI UX Design</p>
                        <div class="portfolio__more p-absolute transition-3">
                            <a href="portfolio-details.html" class="link-btn-2">
                                Show Project
                                <i class="fal fa-long-arrow-right"></i>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat3">
                <div class="portfolio__item p-relative mb-30">
                    <div class="portfolio__thumb w-img fix">
                        <img src="<?php echo STATIC_URL;?>company/img/portfolio/port-6.jpg" alt="">
                        <div class="portfolio__plus p-absolute transition-3">
                            <a href="<?php echo STATIC_URL;?>company/img/portfolio/port-6.jpg" data-fancybox="gallery">
                                <i class="fal fa-plus"></i>
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__content">
                        <h4><a href="portfolio-details.html">Landing Animation</a></h4>
                        <p>UI UX Design</p>
                        <div class="portfolio__more p-absolute transition-3">
                            <a href="portfolio-details.html" class="link-btn-2">
                                Show Project
                                <i class="fal fa-long-arrow-right"></i>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat4">
                <div class="portfolio__item p-relative mb-30">
                    <div class="portfolio__thumb w-img fix">
                        <img src="<?php echo STATIC_URL;?>company/img/portfolio/port-7.jpg" alt="">
                        <div class="portfolio__plus p-absolute transition-3">
                            <a href="<?php echo STATIC_URL;?>company/img/portfolio/port-7.jpg" data-fancybox="gallery">
                                <i class="fal fa-plus"></i>
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__content">
                        <h4><a href="portfolio-details.html">Branding New Clock</a></h4>
                        <p>Photography</p>
                        <div class="portfolio__more p-absolute transition-3">
                            <a href="portfolio-details.html" class="link-btn-2">
                                Show Project
                                <i class="fal fa-long-arrow-right"></i>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat3">
                <div class="portfolio__item p-relative mb-30">
                    <div class="portfolio__thumb w-img fix">
                        <img src="<?php echo STATIC_URL;?>company/img/portfolio/port-8.jpg" alt="">
                        <div class="portfolio__plus p-absolute transition-3">
                            <a href="<?php echo STATIC_URL;?>company/img/portfolio/port-8.jpg" data-fancybox="gallery">
                                <i class="fal fa-plus"></i>
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__content">
                        <h4><a href="portfolio-details.html">Diseno de Moda</a></h4>
                        <p>UI Design</p>
                        <div class="portfolio__more p-absolute transition-3">
                            <a href="portfolio-details.html" class="link-btn-2">
                                Show Project
                                <i class="fal fa-long-arrow-right"></i>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-xl-2">
                <div class="portfolio__load mt-25">
                    <a href="portfolio.html" class="z-btn z-btn-border"><i class="fal fa-redo"></i> Load more</a>
                </div>
            </div> -->



        </div>
    </div>
</section>
<!-- portfolio area end -->
<?php include template("index","footer"); ?>