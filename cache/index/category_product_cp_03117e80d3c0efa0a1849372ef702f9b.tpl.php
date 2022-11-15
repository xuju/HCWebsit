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
            <div class="col-lg-3 list-width">


                <?php $data = get_childcat($catid);?>
                <ul class="category-wrap wow fadeInUp">
                    <a class="select" href="<?php echo get_category($catid, 'pclink');?>">
                        部分产品展示图
                    </a>
                    <?php if(is_array($data)) foreach($data as $v) { ?>
                    <!-- <li>
                        <a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a>
                    </li> -->
                    <a href="<?php echo $v['pclink'];?>">
                        <?php echo $v['catname'];?>
                    </a>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="production-right">
                    <div class="location wow fadeInUp d-none d-lg-block">
                        <?php echo get_location($catid);?>
                    </div>
                    <div class="list-wrap">
                        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,url,thumb,description','catid'=>$catid,'limit'=>'9','page'=>'page',));$pages = $tag->pages();}?>
                        <?php $i=0?>

                        <div class="row">
                            <p class=" cp-desc  wow fadeInUp"><?php echo $site['pcdesc'];?></p>
                            <div class="time-wrap cp-wrap">

                                <?php if(is_array($data)) foreach($data as $v) { ?>
                                <?php $i++; ?>
                                <div class="time-item wow fadeInUp" data-delay=".<?php echo $i;?>s">
                                    <div class="time-circle"></div>
                                    <div class="time-text">
                                        <div class="time-year">
                                            <a href="<?php echo get_category(51, 'pclink');?>"> <?php echo $v['title'];?></a>
                                        </div>
                                        <div class="time-desc">
                                            <!-- <?php echo $v['description'];?> -->
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                            </div>
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