<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $seo_title;?></title>
    <meta name="author" content="<?php echo $site['site_name'];?>">
    <meta name="keywords" content="<?php echo $keywords;?>" />
    <meta name="description" content="<?php echo $description;?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo STATIC_URL;?>company/images/favicon.ico">

    <!-- CSS here -->
    <!-- <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/preloader.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/bootstrap.min.css"> -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/slick.css"> -->

    <!-- <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/animate.min.css">
    <!-- <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/jquery.fancybox.min.css"> -->
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/fontAwesome5Pro.css">
    <!-- <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/elegantFont.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/default.css"> -->
    <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/style.css">

    <!-- <link rel="stylesheet" type="text/css" href="<?php echo STATIC_URL;?>plugin/swiper/css/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css">
    <!-- <link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/carousel.css"> -->
    <!-- <script type="text/javascript" src="<?php echo STATIC_URL;?>plugin/swiper/js/swiper-bundle.min.js"></script> -->
    <script src="https://cdn.bootcdn.net/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>

    <!-- <script src="<?php echo STATIC_URL;?>company/js/vendor/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>



    <div class="scroll-up" id="scroll" style="display: none;">
        <a href="javascript:void(0);">
            <i class="fas fa-level-up-alt"></i>
            <!-- <img src="<?php echo STATIC_URL;?>company/images/back.jpg" alt="返回"> -->
        </a>
    </div>

    <header>
        <div class="header__area p-relative header__transparent">
            <div class="header__top d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-5 col-md-4">
                            <div class="header__social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="header__info f-right">
                                <ul>
                                    <!-- <li>
                                        <a href="tel:(+468)-254-762-443">
                                            <i class="fal fa-phone-alt"></i>
                                            (+86) 18018149584
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:qhyft@163.com">
                                            <i class="fal fa-envelope"></i>
                                            848820348@qq.com
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="search-toggle">
                                            <i class="far fa-search"></i>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div id="header__sticky" <?php if(!$catid) { ?> class="header__bottom sticky" <?php } else { ?> class=" header__bottom" <?php } ?>> -->
            <div class="header__bottom sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="logo">
                                <a href="/">
                                    <img src="<?php echo STATIC_URL;?>company/img/logo/logo.png" height="50" alt="logo">
                                </a>
                            </div>
                            <div class="logo-gradient">
                                <a href="/">
                                    <!-- <img src="<?php echo STATIC_URL;?>company/img/logo/logo-gradient.png" alt="logo"> -->
                                    <img src="<?php echo $site['site_logo'];?>" height="50" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-6 col-sm-6 col-6">
                            <div class="header__bottom-right d-flex justify-content-end align-items-center">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'nav')) {$data = $tag->nav(array('field'=>'catid,catname,arrchildid,pclink,target','where'=>"parentid=0",'limit'=>'20',));}?>
                                        <ul>
                                            <li><a <?php if(!isset($catid)) { ?> class="current" <?php } ?> href="<?php echo SITE_URL;?>">首页</a>
                                            </li>
                                            <?php if(is_array($data)) foreach($data as $v) { ?>
                                            <li>

                                                <a<?php if(isset($catid) && in_array($catid, explode(',', $v['arrchildid']))) { ?>
                                                    class="current" <?php } ?> href="<?php echo $v['pclink'];?>" target="<?php echo $v['target'];?>">
                                                    <?php echo $v['catname'];?></a>
                                                    <?php if(is_childid($v)) { ?>
                                                    <?php $r = get_childcat($v['catid']);?>
                                                    <ul class="submenu">
                                                        <?php if(is_array($r)) foreach($r as $v) { ?>
                                                        <li><a href="<?php echo $v['pclink'];?>"
                                                                target="<?php echo $v['target'];?>"><?php echo $v['catname'];?></a></li>
                                                        <?php } ?>
                                                    </ul>
                                                    <?php } ?>
                                            </li>
                                            <?php } ?>
                                            <div class="site-toggle d-none d-lg-inline-block"
                                                style="display: inline-block;">
                                                <a href="">中文</a>/
                                                <a href="">英文</a>
                                            </div>


                                        </ul>
                                    </nav>
                                </div>
                                <!-- <div class="header__btn d-none d-sm-block d-lg-none d-xl-block ml-50">
                                    <a href="contact.html" class="z-btn z-btn-white">询 价</a>
                                </div> -->
                                <div class="sidebar__menu d-lg-none">
                                    <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__search-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <form action="#">
                                <input type="text" placeholder="Your Keywords">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body-overlay-2"></div>
        </div>
    </header>
    <!-- header area end -->

    <!-- sidebar area start -->
    <section class="sidebar__area">
        <div class="sidebar__wrapper">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <span><i class="fal fa-times"></i></span>
                    <span>close</span>
                </button>
            </div>
            <div class="sidebar__tab">
                <ul class="nav nav-tabs" id="sidebar-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="menu-tab" data-toggle="tab" href="#menu" role="tab"
                            aria-controls="menu" aria-selected="true">菜单</a>
                    </li>
                    <li class="nav-item toggle-lang">
                        <a href="" class="nav-link" aria-selected="false">中文</a>
                        <a href="" class="nav-link" aria-selected="false">英文</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar__content">
                <div class="tab-content" id="sidebar-tab-content">
                    <div class="tab-pane fade show active" id="menu" role="tabpanel" aria-labelledby="menu-tab">
                        <!-- <div class="logo mb-40">
                            <a href="index.html">
                                <img src="<?php echo $site['site_logo'];?>" alt="logo">
                            </a>
                        </div> -->
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="sidebar__info">
                            <div class="logo mb-40">
                                <a href="index.html">
                                    <img src="<?php echo $site['site_logo'];?>" alt="logo">
                                </a>
                            </div>

                            <a href="contact.html" class="z-btn z-btn-white">联系我们</a>
                            <div class="sidebar__search">
                                <form action="#">
                                    <input type="text" placeholder="Your Keywords..">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__contact mt-30">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <span><?php echo $site['address'];?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="text ">
                                            <span><a href="mailto:<?php echo $site['email'];?>"><?php echo $site['email'];?></a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="text">
                                            <span><a href="tel:(+86)-13375184697"><?php echo $site['phone'];?></a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="body-overlay"></div>
    <!-- sidebar area end -->