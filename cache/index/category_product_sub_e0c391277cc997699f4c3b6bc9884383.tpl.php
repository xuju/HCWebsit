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
                <div class="portfolio__menu mb-40 wow fadeInUp">
                    <!-- <span>Filter by: </span> -->
                    <?php $r = get_childcat($parentid);?>
                    <div class="masonary-menu filter-button-group d-sm-inline-block">
                        <a href="<?php echo get_category($parentid, 'pclink' );?>" class="  button">全部</a>
                        <?php if(is_array($r)) foreach($r as $v) { ?>

                        <a <?php if($catid==$v['catid']) { ?> class="button  active" <?php } else { ?> class="button" <?php } ?>
                            href="<?php echo get_category($v['catid'], 'pclink');?>"><?php echo $v['catname'];?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,thumb,url,color,catid,updatetime','catid'=>$catid,'limit'=>'10','page'=>'page',));$pages = $tag->pages();}?>
        <div class="row ">
            <div class="col-xl-9">
                <div class="row ">
                    <?php $i=0;?>
                    <?php if(is_array($data)) foreach($data as $v) { ?>
                    <?php $i++;?>



                    <div <?php if($i==1) { ?> class="col-xl-8 col-lg-8 col-md-6 col-sm-6   wow fadeInUp " <?php } else { ?>
                        class="col-xl-4 col-lg-4 col-md-6 col-sm-6   wow fadeInUp " <?php } ?>>
                        <div class="portfolio__item p-relative mb-30">
                            <div class="portfolio__thumb w-img fix  thumb-real">

                                <img src="<?php echo get_thumb($v['thumb']);?>" alt="<?php echo $v['title'];?>">
                                <div class="portfolio__plus p-absolute transition-3">
                                    <a href="<?php echo get_thumb($v['thumb']);?>" data-fancybox="gallery">
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
                    <div class="col-xl-12">
                        <div class="portfolio__load mt-25">


                            <div class="basic-pagination wow fadeInUp">
                                <?php
                                 $str=$pages;
                                 $str=str_ireplace('上页','←',$str);
                               
                                 $str=str_ireplace('下页','→',$str);
                                 $str=str_ireplace('<div id="page">','',$str);
                               
                                ?>
                                <ul>
                                    <?php echo $str;?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="sidebar__widget mb-75 wow fadeInUp">
                    <div class="sidebar__widget-title mb-50">
                        <h4>分类二级</h4>
                    </div>

                    <div class="sidebar__widget-content">
                        <div class="cat-link">
                            <ul>
                                <?php $r = get_childcat($parentid);?>
                                <?php if(is_array($r)) foreach($r as $v) { ?>
                                <?php $c = get_childcat($v['catid']);?>
                                <?php if(is_array($c)) foreach($c as $k) { ?>

                                <li><a href="<?php echo get_category($k['catid'], 'pclink');?>"><?php echo $k['catname'];?></a></li>
                                <?php } ?>
                                <?php } ?>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
</section>

<?php include template("index","footer"); ?>