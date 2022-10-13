<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<section class="page__title p-relative d-flex align-items-center fix" data-background="<?php echo $catimg;?>">
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
<!-- portfolio area start -->
<section class="portfolio__area pt-110 pb-160">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">


                <div class="sidebar__widget mb-50 wow fadeInUp">

                    <?php $r = get_childcat($parentid);?>
                    <div class="sidebar__widget-content submenu-wrap">
                        <div class="tags">
                            <a href="<?php echo get_category($parentid, 'pclink');?>">全部</a>
                            <?php if(is_array($r)) foreach($r as $v) { ?>

                            <a href="<?php echo get_category($v['catid'], 'pclink');?>" <?php if($v['catid']==$catid) { ?>
                                class="sub-menu-btn  active" <?php } else { ?> class="sub-menu-btn  " <?php } ?>><?php echo $v['catname'];?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,thumb,url,color,catid,updatetime','catid'=>$catid,'limit'=>'10','page'=>'page',));$pages = $tag->pages();}?>
        <div class="row grid">
            <?php $i=0;?>
            <?php if(is_array($data)) foreach($data as $v) { ?>
            <?php $i++;?>
            <!-- <?php print_r($v)?> -->


            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item   ">
                <div class="portfolio__item p-relative mb-30">
                    <div class="portfolio__thumb w-img fix  thumb-real">
                        <!-- <img src="<?php echo STATIC_URL;?>company/img/portfolio/port-1.jpg" alt=""> -->
                        <img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>">
                        <div class="portfolio__plus p-absolute transition-3">
                            <a href="<?php echo $v['thumb'];?>" data-fancybox="gallery">
                                <i class="fal fa-plus"></i>
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-m"><?php echo get_catname($v['catid']);?></div>
                    </div>
                    <div class="portfolio__content">
                        <h4><a href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],40);?></a></h4>
                        <p class="title-time"><i class="far fa-calendar-alt"></i> <?php echo date('Y-m-d',
                            $v['updatetime']);?>

                        </p>
                        <div class="portfolio__more p-absolute transition-3">
                            <a href="<?php echo get_category($v['catid'], 'pclink');?>" class="link-btn-2">
                                更多
                                <i class="fal fa-long-arrow-right"></i>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
        <div class="row">
            <div class="col-xl-2">
                <div class="portfolio__load mt-25">
                    <a href="portfolio.html" class="z-btn z-btn-border"><i class="fal fa-redo"></i> Load
                        more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio area end -->
<?php include template("index","footer"); ?>