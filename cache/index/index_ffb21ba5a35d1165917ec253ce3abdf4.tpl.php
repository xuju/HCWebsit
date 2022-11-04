<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/home.css">


<script type="text/javascript" src="<?php echo STATIC_URL;?>plugin/swiper/js/swiper.animate1.0.3.min.js"></script>


<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <?php include template("index","/home/homeSwiper"); ?>
        </div>
        <div class="swiper-slide">
            <?php include template("index","./home/companydesc"); ?>
        </div>
        <div class="swiper-slide">
            <?php include template("index","./home/companyrong"); ?>
        </div>
        <div class="swiper-slide honor-silder">
            <?php include template("index","./home/honor"); ?>
        </div>
        <div class="swiper-slide">
            <?php include template("index","./home/organization"); ?>
        </div>
        <div class="swiper-slide"><?php include template("index","./home/news"); ?></div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">

        </div>
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
</body>
<script>
    window.onload = function () {
        let swiper = new Swiper(".mySwiper", {
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
                },
                slideChange: function () {
                    const dom = $('.home-types-item');
                    dom.removeClass('select')
                    dom.eq(this.activeIndex).addClass('select')

                }
            }
        });



        const dom = document.getElementsByClassName('home-types-item');
        $('.home-types-item').on("click", function () {
            let index = $(this).index();
            swiper.slideTo(index, 1000, false);
        })



        let companyDescSwiper = new Swiper(".company-Swiper", {
            autoplay: true
        });



        let honorSwiper = new Swiper(".honorSwiper", {
            slidesPerView: 5,
            grid: {
                rows: 4,
                fill: 'row'
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        console.log(honorSwiper);
    }

</script>

</html>