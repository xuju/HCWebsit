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
                <div class="page__title-content wow fadeInUp">
                    <h2><?php echo get_catname($catid);?></h2>

                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container  production-wrap">
        <div class="row">
            <div class="col-lg-3  list-width wow fadeInUp">


                <?php $data = get_childcat($parentid);?>
                <ul class="category-wrap">
                    <a href="<?php echo get_category($parentid,'pclink');?>">Part of the device</a>
                    <?php if(is_array($data)) foreach($data as $v) { ?>

                    <a <?php if($catid===$v[catid]) { ?> class="select" <?php } ?> href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="production-right">
                    <div class="location wow fadeInUp d-none d-lg-block">
                        <?php echo get_location($catid);?>
                    </div>
                    <div class="list-wrap">
                        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,url,thumb','catid'=>$catid,'limit'=>'9','page'=>'page',));$pages = $tag->pages();}?>
                        <div class="row ">
                            <?php if(is_array($data)) foreach($data as $v) { ?>
                            <div class=" col-lg-4 col-sm-6  col-md-6 wow fadeInUp">
                                <a href="<?php echo $v['url'];?>">
                                    <div class="list-item">
                                        <div class="img-wrap">
                                            <img src="<?php echo get_thumb($v['thumb']);?>" alt="<?php echo $v['title'];?>">
                                        </div>
                                        <span class="title"><?php echo $v['title'];?></span>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                            <div class="col-xl-12">
                                <div class="portfolio__load mt-25">


                                    <div class="basic-pagination wow fadeInUp">
                                        <!-- <?php
                                         $str=$pages;
                                         $str=str_ireplace('上页','←',$str);
                                       
                                         $str=str_ireplace('下页','→',$str);
                                         $str=str_ireplace('<div id="page">','',$str);
                                       
                                        ?> -->

                                        <ul>
                                            <?php echo $pages;?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include template("index","footer"); ?>