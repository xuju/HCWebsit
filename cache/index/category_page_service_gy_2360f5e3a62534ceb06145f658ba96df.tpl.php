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
<?php $flag=count(get_childcat($catid))>0?>
<?php $ids=$flag?$catid:get_category($catid, 'parentid')?>
<section>
    <div class="container  production-wrap">
        <div class="row">
            <div class="col-lg-3 wow fadeInUp list-width">


                <?php $data = get_childcat($ids);?>
                <?php $i=0;?>
                <ul class="category-wrap">
                    <a href="">部分生产工艺方法展示</a>
                    <?php if(is_array($data)) foreach($data as $v) { ?>
                    <?php $i++;?>
                    <?php if($flag) { ?>
                    <a <?php if($i==1) { ?> class="select" <?php } ?> href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a>
                    <?php } else { ?>
                    <a <?php if($catid===$v[catid]) { ?> class="select" <?php } ?> href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="production-right">
                    <div class="location wow fadeInUp">
                        <?php echo get_location($catid);?>
                    </div>
                    <div class="list-wrap">


                        <?php if($flag) { ?>
                        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'get')) {$data = $tag->get(array('sql'=>"select * from hc_page where catid=71",'limit'=>'1',));}?>
                        <?php if(is_array($data)) foreach($data as $v) { ?>

                        <div class="desc-title">
                            <?php echo $v['title'];?>
                        </div>
                        <div class="desc-wrap">
                            <?php echo $v['content'];?>
                        </div>
                        <?php } ?>
                        <?php } else { ?>

                        <div class="desc-title">
                            <?php echo $title;?>
                        </div>
                        <div class="desc-wrap">
                            <?php echo $content;?>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include template("index","footer"); ?>