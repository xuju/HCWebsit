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
<section class="services__area pt-115 pb-10ss0">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="section__title section__title-3 text-center mb-90">
                    <span>我们的服务</span>
                    <h2>好的设备让我们提供更优质的服务</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="services__item mb-90 wow fadeInUp" data-wow-delay=".2s">
                    <div class="services__icon mb-35">
                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-1.png" alt="services">
                    </div>
                    <div class="services__content">
                        <h3><a href="services-details.html">Expense reporting</a></h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="services__item mb-90 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__icon mb-35">
                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-2.png" alt="services">
                    </div>
                    <div class="services__content">
                        <h3><a href="services-details.html">Tax Advisory</a></h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="services__item mb-90 wow fadeInUp" data-wow-delay=".6s">
                    <div class="services__icon mb-35">
                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-3.png" alt="services">
                    </div>
                    <div class="services__content">
                        <h3><a href="services-details.html">Consulting</a></h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="services__item mb-90 wow fadeInUp" data-wow-delay=".8s">
                    <div class="services__icon mb-35">
                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-4.png" alt="services">
                    </div>
                    <div class="services__content">
                        <h3><a href="services-details.html">Audit & Assurance</a></h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="services__item mb-90 wow fadeInUp" data-wow-delay="1s">
                    <div class="services__icon mb-35">
                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-5.png" alt="services">
                    </div>
                    <div class="services__content">
                        <h3><a href="services-details.html">Finance Analytics</a></h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="services__item mb-90 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="services__icon mb-35">
                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-6.png" alt="services">
                    </div>
                    <div class="services__content">
                        <h3><a href="services-details.html">Cord Processing</a></h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="services__item mb-90 wow fadeInUp" data-wow-delay="1.4s">
                    <div class="services__icon mb-35">
                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-7.png" alt="services">
                    </div>
                    <div class="services__content">
                        <h3><a href="services-details.html">Development</a></h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="services__item mb-90 wow fadeInUp" data-wow-delay="1.6s">
                    <div class="services__icon mb-35">
                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-8.png" alt="services">
                    </div>
                    <div class="services__content">
                        <h3><a href="services-details.html">Financial audit</a></h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services area end -->

<!-- capabilities area strar -->
<section class="capabilities__area p-relative black-bg-2 pt-180 pb-155 fix">
    <div class="capabilities__thumb p-absolute"
        data-background="<?php echo STATIC_URL;?>company/img/capabilities/capabilities-img.jpg"></div>
    <div class="capabilities__shape p-absolute wow fadeInLeft" data-wow-delay=".2s">
        <img src="<?php echo STATIC_URL;?>company/img/capabilities/capabilities-shape.png" alt="shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="capabilities__content wow fadeInUp" data-wow-delay=".4s">
                    <div class="section__title section__title-2 mb-60">
                        <span class="white-color">能力</span>
                        <h2 class="white-color">每一个细节都以战略为导向</h2>
                    </div>
                    <div class="capabilities__list">
                        <ol>
                            <li class="wow fadeInUp" data-wow-delay=".6s">医疗行业</li>
                            <li class="wow fadeInUp" data-wow-delay=".8s">汽车开发应用</li>
                            <li class="wow fadeInUp" data-wow-delay="1s">航空航天应用</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- capabilities area end -->

<!-- services area start -->
<section class="services__area-3 pt-140 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="section-title section__title-3 mb-70">
                    <h2>We Help <br> Clients Make Profit</h2>
                    <p>We help you weather today's uncertainty through our best team.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="services__nav wow fadeInUp" data-wow-delay=".4s">
                    <ul class="nav nav-pills " id="services-tab" role="tablist">
                        <li class="nav-item mb-45">
                            <a class="nav-link active" id="share-tab" data-toggle="pill" href="#share" role="tab"
                                aria-controls="share" aria-selected="true">
                                <i class="icon_ribbon_alt"></i>Share Knowledge
                            </a>
                        </li>
                        <li class="nav-item mb-30">
                            <a class="nav-link" id="customer-tab" data-toggle="pill" href="#customer" role="tab"
                                aria-controls="customer" aria-selected="true">
                                <i class="icon_tools"></i> Customer Service
                            </a>
                        </li>
                        <li class="nav-item mb-30">
                            <a class="nav-link" id="social-tab" data-toggle="pill" href="#social" role="tab"
                                aria-controls="social" aria-selected="true">
                                <i class="icon_heart_alt"></i> Social Media
                            </a>
                        </li>
                        <li class="nav-item mb-30">
                            <a class="nav-link" id="financial-tab" data-toggle="pill" href="#financial" role="tab"
                                aria-controls="financial" aria-selected="true">
                                <i class="icon_bag_alt"></i> Financial
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="services__tab grey-bg-18">
                    <div class="tab-content wow fadeInUp" data-wow-delay=".6s" id="services-content">
                        <div class="tab-pane fade show active" id="share" role="tabpanel" aria-labelledby="share-tab">
                            <div class="services__nav-content pt-90 pb-90">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-6">
                                        <div class="services__thumb text-lg-right m-img">
                                            <img src="<?php echo STATIC_URL;?>company/img/services/services-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-6">
                                        <div class="services__content-3 pl-70 pr-70">
                                            <h3>Customer Service</h3>
                                            <p>The bee's knees cockup loo cracking goal hotpot bits and bobs a load of
                                                old tosh bubble and squeak arse over tit twit, excuse my French bevvy
                                                Eaton argy-bargy amongst codswallop.</p>
                                            <div class="services__icon-wrapper d-md-flex mb-35">
                                                <div class="services__icon-item d-flex mr-60 mb-30">
                                                    <div class="icon mr-20">
                                                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-9.png"
                                                            alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h3>Acquisitions Finance Consulting</h3>
                                                    </div>
                                                </div>
                                                <div class="services__icon-item d-flex mb-30">
                                                    <div class="icon mr-20">
                                                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-10.png"
                                                            alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h3>Private Placement Consulting</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="about.html" class="z-btn">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                            <div class="services__nav-content pt-90 pb-90">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-6">
                                        <div class="services__thumb text-lg-right m-img">
                                            <img src="<?php echo STATIC_URL;?>company/img/services/services-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-6">
                                        <div class="services__content-3 pl-70 pr-70">
                                            <h3>Customer Service</h3>
                                            <p>The bee's knees cockup loo cracking goal hotpot bits and bobs a load of
                                                old tosh bubble and squeak arse over tit twit, excuse my French bevvy
                                                Eaton argy-bargy amongst codswallop.</p>
                                            <div class="services__icon-wrapper d-md-flex mb-35">
                                                <div class="services__icon-item d-flex mr-60 mb-30">
                                                    <div class="icon mr-20">
                                                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-9.png"
                                                            alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h3>Acquisitions Finance Consulting</h3>
                                                    </div>
                                                </div>
                                                <div class="services__icon-item d-flex mb-30">
                                                    <div class="icon mr-20">
                                                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-10.png"
                                                            alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h3>Private Placement Consulting</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="about.html" class="z-btn">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                            <div class="services__nav-content pt-90 pb-90">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-6">
                                        <div class="services__thumb text-lg-right m-img">
                                            <img src="<?php echo STATIC_URL;?>company/img/services/services-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-6">
                                        <div class="services__content-3 pl-70 pr-70">
                                            <h3>Customer Service</h3>
                                            <p>The bee's knees cockup loo cracking goal hotpot bits and bobs a load of
                                                old tosh bubble and squeak arse over tit twit, excuse my French bevvy
                                                Eaton argy-bargy amongst codswallop.</p>
                                            <div class="services__icon-wrapper d-md-flex mb-35">
                                                <div class="services__icon-item d-flex mr-60 mb-30">
                                                    <div class="icon mr-20">
                                                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-9.png"
                                                            alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h3>Acquisitions Finance Consulting</h3>
                                                    </div>
                                                </div>
                                                <div class="services__icon-item d-flex mb-30">
                                                    <div class="icon mr-20">
                                                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-10.png"
                                                            alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h3>Private Placement Consulting</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="about.html" class="z-btn">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="financial" role="tabpanel" aria-labelledby="financial-tab">
                            <div class="services__nav-content pt-90 pb-90">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-6">
                                        <div class="services__thumb text-lg-right m-img">
                                            <img src="<?php echo STATIC_URL;?>company/img/services/services-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-6">
                                        <div class="services__content-3 pl-70 pr-70">
                                            <h3>Customer Service</h3>
                                            <p>The bee's knees cockup loo cracking goal hotpot bits and bobs a load of
                                                old tosh bubble and squeak arse over tit twit, excuse my French bevvy
                                                Eaton argy-bargy amongst codswallop.</p>
                                            <div class="services__icon-wrapper d-md-flex mb-35">
                                                <div class="services__icon-item d-flex mr-60 mb-30">
                                                    <div class="icon mr-20">
                                                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-9.png"
                                                            alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h3>Acquisitions Finance Consulting</h3>
                                                    </div>
                                                </div>
                                                <div class="services__icon-item d-flex mb-30">
                                                    <div class="icon mr-20">
                                                        <img src="<?php echo STATIC_URL;?>company/img/icon/services/services-10.png"
                                                            alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h3>Private Placement Consulting</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="about.html" class="z-btn">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services area end -->


<!-- cta area start -->
<section class="cta__area pt-180 pb-155" data-background="<?php echo STATIC_URL;?>company/img/cta/cta-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="cta__content text-center">
                    <span class="wow fadeInUp" data-wow-delay=".2s">我们有最先进最优秀的服务技术和团队</span>
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">你 有 需 要 帮 助 的 地 方 吗? 请 联 系 我 们</h1>
                    <div class="cta__btn wow fadeInUp" data-wow-delay=".6s">
                        <a href="contact.html" class="z-btn z-btn-white mb-30">联 系 我 们</a>
                        <a href="contact.html" class="z-btn z-btn-transparent mb-30">加 入 我 们</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include template("index","footer"); ?>