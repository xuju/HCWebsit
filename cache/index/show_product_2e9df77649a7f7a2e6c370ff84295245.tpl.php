<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>

<?php $parentids=get_category($catid, 'parentid')?>

<?php $topImg=get_category($parentids,'catimg')?>
<section class="page__title p-relative d-flex align-items-center fix" data-background="<?php echo $topImg;?>">
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
                    <h2><?php echo $title;?></h2>

                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container  production-wrap">
        <div class="row">
            <div class="col-lg-3">


                <?php $data = get_childcat($parentids);?>
                <ul class="category-wrap">
                    <li class="select">
                        <a href="<?php echo get_category($catid,'pclink');?>">部分产品展示图</a>

                    </li>
                    <?php if(is_array($data)) foreach($data as $v) { ?>
                    <li>
                        <a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="production-right">
                    <div class="location">
                        <?php echo get_location($catid);?>
                    </div>
                    <div class="list-wrap   ">
                        <div id="carousel" class="wow fadeInUp" style="margin-top:50px">
                            <div class="swiper swiper-3d">
                                <?php $pictures = string2array($pictures);?>
                                <div class="swiper-wrapper">
                                    <?php if(is_array($pictures)) foreach($pictures as $v) { ?>
                                    <div class="swiper-slide">
                                        <a data-fancybox="gallery" href="<?php echo $v['url'];?>">
                                            <img class="rounded" src="<?php echo $v['url'];?>" alt="<?php echo $v['alt'];?>" title="<?php echo $v['alt'];?>"
                                                width="305" height="211" />
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
                        <div class="desc-wrap">
                            <?php echo $content;?>
                        </div>
                    </div>
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