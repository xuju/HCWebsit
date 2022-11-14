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
            <div class="col-lg-3 wow fadeInUp">


                <!-- <?php $data = get_childcat($parentid);?> -->
                <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,url,thumb','catid'=>$catid,'limit'=>'90',));}?>
                <ul class="category-wrap">
                    <a href="<?php echo get_category($catid,'url');?>" class="select">部分生产工艺展示<?php print_r($catid)?></a>
                    <?php if(is_array($data)) foreach($data as $v) { ?>

                    <a <?php if($catid===$v[catid]) { ?> class="select" <?php } ?> href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="production-right">
                    <div class="location wow fadeInUp">
                        <?php echo get_location($catid);?>
                    </div>
                    <div class="list-wrap">

                        <div class="row ">
                            <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'get')) {$data = $tag->get(array('sql'=>"SELECT * FROM hc_article",'where'=>"1=1",));}?>
                            <?php print_r($data)?>
                            <?php if?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include template("index","footer"); ?>