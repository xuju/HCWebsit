<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><div class="honor">
    <div class="home-title-wrap wow fadeInUp" data-delay=".1s">
        <div class="r-title" style="margin-bottom: 30px;">Cooperative partner</div>
        <!-- <div class="r-desc d-none d-lg-block">Cooperative partner</div> -->
    </div>
    <div class="container">
        <div class="list-wrap">
            <div class="swiper honorSwiper">
                <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'link')) {$data = $tag->link(array('field'=>'logo','limit'=>'2000000',));}?>


                <div class="swiper-wrapper">
                    <?php if(is_array($data)) foreach($data as $v) { ?>

                    <div class="swiper-slide ">
                        <img src="<?php echo $v['logo'];?>" alt="">
                    </div>
                    <?php } ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>