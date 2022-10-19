<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<script type="text/javascript" src="<?php echo STATIC_URL;?>js/yzm-front.js"></script>
<section class="page__title p-relative d-flex align-items-center fix">
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
<div class="container">
    <div id="carousel" class="wow fadeInUp" style="margin-top:50px">
        <div class="swiper swiper-3d">
            <?php $pictures = string2array($pictures);?>
            <div class="swiper-wrapper">
                <?php if(is_array($pictures)) foreach($pictures as $v) { ?>
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?php echo $v['url'];?>">
                        <img class="rounded" src="<?php echo $v['url'];?>" alt="<?php echo $v['alt'];?>" title="<?php echo $v['alt'];?>" width="305"
                            height="211" />
                    </a>
                    <!-- <img src="<?php echo STATIC_URL;?>company/images/carousel01.png" /> -->
                    <p><?php echo $v['alt'];?></p>
                </div>
                <?php } ?>

            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<section class="blog__area pt-50">
    <div class="container">

        <div class="row">
            <div class="col-xl-9 col-lg-9">
                <h3 style="text-align: center;"><?php echo $title;?></h3>
                <div class="blog__details-wrapper mr-50">

                    <div class="description" style="text-indent: 30px">
                        <?php echo $content;?>
                    </div>

                </div>
                <div class="blog__share d-flex align-items-center mb-30 wow fadeInUp" data-wow-delay=".2s">
                    <span>分享 : </span>
                    <div class="blog__social theme-social d-inline-block">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-qq"></i>
                                    <i class="fab fa-qq"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-weixin"></i>
                                    <i class="fab fa-weixin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div class="blog__sidebar">
                    <!-- <div class="sidebar__widget mb-50 wow fadeInUp" data-wow-delay=".2s">
                        <div class="sidebar__widget-content">
                            <div class="search">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                    <div class="sidebar__widget mb-75 wow fadeInUp" data-wow-delay=".4s">
                        <div class="sidebar__widget-title mb-50">
                            <h4>相关文章</h4>
                        </div>
                        <div class="sidebar__widget-content">
                            <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'relation')) {$data = $tag->relation(array('field'=>'title,url,color,updatetime,thumb,catid','modelid'=>$modelid,'id'=>$id,'limit'=>'3',));}?>
                            <div class="rc-post">
                                <ul>
                                    <?php if(is_array($data)) foreach($data as $v) { ?>
                                    <li class="d-flex mb-20">
                                        <div class="rc-thumb mr-15">
                                            <a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>"></a>
                                        </div>
                                        <div class="rc-text">
                                            <h6><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></h6>
                                            <div class="rc-meta"><span><?php echo date('Y-m-d',
                                                    $v['updatetime']);?></span> </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-75 wow fadeInUp" data-wow-delay=".6s">
                        <div class="sidebar__widget-title mb-50">
                            <h4>标签</h4>
                        </div>
                        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'tag')) {$data = $tag->tag(array('field'=>'id,tag,total','limit'=>'20',));}?>
                        <div class="sidebar__widget-content">
                            <div class="cat-link">
                                <ul>
                                    <?php if(is_array($data)) foreach($data as $v) { ?>
                                    <li> <a href="<?php echo tag_url($v['id']);?>" target="_blank"><?php echo $v['tag'];?>(<?php echo $v['total'];?>)</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-60 wow fadeInUp" data-wow-delay=".8s">
                        <div class="sidebar__widget-title mb-50">
                            <h4>Categories</h4>
                        </div>
                        <div class="sidebar__widget-content">
                            <div class="rc__comments">
                                <ul>
                                    <li class="d-flex mb-25">
                                        <div class="rc__comments-icon mr-30">
                                            <i class="icon_comment_alt"></i>
                                        </div>
                                        <div class="rc__comments-content">
                                            <h6>Justin Case</h6>
                                            <p>My lady mush hanky panky young delinquent.!</p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-25">
                                        <div class="rc__comments-icon mr-30">
                                            <i class="icon_comment_alt"></i>
                                        </div>
                                        <div class="rc__comments-content">
                                            <h6>Eric Widget</h6>
                                            <p>My lady mush hanky panky young delinquent.!</p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-25">
                                        <div class="rc__comments-icon mr-30">
                                            <i class="icon_comment_alt"></i>
                                        </div>
                                        <div class="rc__comments-content">
                                            <h6>Penny Tool</h6>
                                            <p>My lady mush hanky panky young delinquent.!</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="sidebar__widget mb-50 wow fadeInUp" data-wow-delay="1s">
                        <div class="sidebar__widget-title mb-50">
                            <h4>Popular Tags</h4>
                        </div>
                        <div class="sidebar__widget-content">
                            <div class="tags">
                                <a href="blog-details.html">The Saas</a>
                                <a href="blog-details.html">Pix Saas 新闻中心</a>
                                <a href="blog-details.html">Landing</a>
                                <a href="blog-details.html">UI/UX Design</a>
                                <a href="blog-details.html">Branding</a>
                                <a href="blog-details.html">Animation</a>
                                <a href="blog-details.html">Design</a>
                                <a href="blog-details.html">Ideas</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php include template("index","footer"); ?>
<script>
    let slideW = 300;//一张图300px, 每面四张角度22.5（PI/8），中心角度PI/16	             
    let radius = slideW * 0.5 / Math.sin(Math.PI / 16);//半径。圆心并不是视点中心，视点在1200px

    let carouselSwiper = new Swiper('#carousel .swiper', {
        watchSlidesProgress: true,
        slidesPerView: 'auto',
        centeredSlides: false,
        loop: true,
        loopedSlides: 4,
        grabCursor: true,
        autoplay: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            //clickable :true,
        },
        on: {
            progress: function (swiper, progress) {
                for (i = 0; i < this.slides.length; i++) {
                    var slide = this.slides.eq(i);
                    var slideProgress = this.slides[i].progress;
                    translateX = (slideProgress + 1.5) * (slideW / 3 - Math.cos((slideProgress + 1.5) * 0.125 * Math.PI) * slideW * 1.1 / 3) + 'px';//调整图片间距，根据图片宽度改变数值实现自适应
                    rotateY = (slideProgress + 1.5) * 22.5;//图片角度
                    translateZ = (radius - Math.cos((slideProgress + 1.5) * 0.125 * Math.PI) * radius - 150) + 'px';//调整图片远近，刚好4个在画框内
                    slide.transform('translateX(' + translateX + ') translateZ(' + translateZ + ') rotateY(' + rotateY + 'deg)');

                }
            },
            setTransition: function (swiper, transition) {
                for (var i = 0; i < this.slides.length; i++) {
                    var slide = this.slides.eq(i)
                    slide.transition(transition);
                }

            }
        }

    })
</script>