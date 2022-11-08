<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<?php $listimgs=$catimg?$catimg:get_category($parentid, 'catimg')?>
<section class="page__title p-relative d-flex align-items-center fix" data-background="<?php echo $listimgs;?>">
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
<section class="service-category">
    <div class="container">
        <div class="service-category-wrap">
            <?php $data = get_childcat($parentid);?>
            <div class="left">
                <?php if(is_array($data)) foreach($data as $v) { ?>
                <div class="left-item  select">
                    <a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a>
                </div>
                <?php } ?>
            </div>
            <div class="right">
                <?php echo get_location($catid);?>
            </div>
        </div>
    </div>
</section>
<section class="service-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php $data = get_childcat($parentid);?>
                <div class="left-menu-item">
                    <?php echo $v['catname'];?>
                </div>
            </div>
            <div class="col-lg-9">right</div>
        </div>
    </div>
</section>
<?php include template("index","footer"); ?>