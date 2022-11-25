<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<script type="text/javascript" src="<?php echo STATIC_URL;?>js/yzm-front.js"></script>
<?php $parentids=get_category($catid, 'parentid')?>
<!-- <?php print_r($parentids)?> -->
<?php $topImg=get_category($catid,'catimg')?>
<!-- <?php print_r($topImg)?> -->
<?php print_r($catid)?>
<script type="text/javascript" src="<?php echo STATIC_URL;?>js/yzm-product-img.js"></script>
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
                    <h2><?php echo get_catname($catid);?></h2>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="container" style="margin: 20px  auto;">
    <div class="row">
        <div class="col-lg-12 wow fadeInUp">
            <h3 style="text-align: center;"><?php echo $title;?></h3>
        </div>
        <div class="col-lg-12 wow fadeInUp">
            <div class="description" style="text-indent: 30px">
                <?php echo $content;?>
            </div>
        </div>
    </div>
</div>
<?php include template("index","footer"); ?>