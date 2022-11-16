<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<link rel="stylesheet" href="<?php echo STATIC_URL;?>company/css/home.css">




<?php include template("index","/home/homeSwiper"); ?>
<?php include template("index","./home/companydesc"); ?>
<?php include template("index","./home/companyrong"); ?>
<?php include template("index","./home/honor"); ?>
<?php include template("index","./home/organization"); ?>
<?php include template("index","./home/news"); ?>
<?php include template("index","footer"); ?>

<script>
    window.onload = function () {



        const dom = document.getElementsByClassName('home-types-item');
        $('.home-types-item').on("click", function () {
            let index = $(this).index();
            $(document).scrollTop(index * 900)
            if (index === 0) {
                $(document).scrollTop(0)
            } else {
                $(document).scrollTop(index * 900 + 900)
            }
            // if (index === 1) {
            //     $(document).scrollTop(1800)
            // }
        })



        let companyDescSwiper = new Swiper(".company-Swiper", {
            autoplay: true
        });


        const isMobile = () => {
            return /(iPhone|iPad|iPod|iOS|Android|Linux armv8l|Linux armv7l|Linux aarch64)/i.test(navigator.platform);
        };
        if (isMobile()) {
            let honorSwiper = new Swiper(".honorSwiper", {
                slidesPerView: 2,
                autoplay: true,
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
        } else {
            let honorSwiper = new Swiper(".honorSwiper", {
                slidesPerView: 5,
                autoplay: true,
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
        }


    }

</script>