<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/home.css">


<!-- <script type="text/javascript" src="<?php echo STATIC_URL;?>plugin/swiper/js/swiper.animate1.0.3.min.js"></script> -->

<?php include template("index","/home/homeSwiper"); ?>
<?php include template("index","./home/companydesc"); ?>
<?php include template("index","./home/companyrong"); ?>
<?php include template("index","./home/honor"); ?>
<?php include template("index","./home/organization"); ?>
<?php include template("index","./home/news"); ?>
<?php include template("index","./home/footer"); ?>




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
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
        });
        console.log(honorSwiper);
    }

</script>

</html>