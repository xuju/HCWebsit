<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<?php $listimgs=$catimg?$catimg:get_category($parentid, 'catimg')?>
<?php $select=$catid?>
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
                <div class="page__title-content wow fadeInUp">
                    <h2><?php echo get_catname($catid);?></h2>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="servive-bg">
    <section class="service-category">
        <div class="container">
            <div class="service-category-wrap wow fadeInUp">
                <?php $catids=$parentid?$parentid:$catid?>
                <?php $data = get_childcat(82);?>
                <div class="left">
                    <?php if(is_array($data)) foreach($data as $v) { ?>
                    <div class="left-item  <?php if($v[catid]===$parentid) { ?>  select<?php } ?>">
                        <a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a>
                    </div>
                    <?php } ?>
                </div>
                <div class="right d-none d-lg-block">
                    <?php echo get_location($catid);?>
                </div>
            </div>
        </div>
    </section>
    <section class="service-content  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  wow fadeInUp">
                    <?php $data = get_childcat($parentid);?>

                    <?php if(is_array($data)) foreach($data as $v) { ?>

                    <div class="left-menu-wrap">
                        <div class="left-menu-item  <?php if($v[catid]===$catid) { ?> service-menu-item <?php } ?> ">
                            <a href="<?php echo $v['pclink'];?>"> <?php echo $v['catname'];?></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-lg-9 ">
                    <div class="right-wrap">

                        <div class="right-content-item  wow fadeInUp ">
                            <h3> <?php echo $title;?></h3>
                            <div class="desc">
                                <?php echo $content;?>
                            </div>
                        </div>




                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<?php include template("index","footer"); ?>