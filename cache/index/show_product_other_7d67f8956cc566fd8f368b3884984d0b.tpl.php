<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>

<?php $parentids=get_category($catid, 'parentid')?>

<?php $topImg=get_category($parentids,'catimg')?>

<link href="<?php echo STATIC_URL;?>css/yzm-style.css" rel="stylesheet" type="text/css" />

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
                    <h2><?php echo $title;?></h2>

                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container  production-wrap">
        <div class="row">
            <div class="col-lg-3">


                <?php $data = get_childcat($parentids);?>
                <ul class="category-wrap">
                    <?php $parent=get_category($catid,'parentid')?>
                    <a href="<?php echo get_category($parent,'pclink');?>">部分产品展示图</a>
                    <?php if(is_array($data)) foreach($data as $v) { ?>

                    <a <?php if($catid===$v[catid]) { ?> class="select" <?php } ?> href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="production-right">
                    <div class="location">
                        <?php echo get_location($catid);?>
                    </div>
                    <div class="list-wrap   ">
                        <div class="desc-title">
                            <?php echo $title;?>
                        </div>
                        <div class="desc-wrap">
                            <?php echo $content;?>
                        </div>
                        <div class="pics-wrap">
                            <?php $pictures = string2array($pictures);?>
                            <div class="yzm-image" id="bigpics">
                                <!-- 获取产品图集第一张的图片地址 -->
                                <img
                                    src="<?php if(!isset($pictures[0])) { ?><?php echo STATIC_URL;?>images/nopic.jpg<?php } else { ?><?php echo $pictures['0']['url'];?><?php } ?>" />
                            </div>
                            <div class="yzm-switch" style="display: flex;">
                                <div class="yzm-icon1"><a href="javascript:;" title="上一个" onfocus="this.blur();">上一个</a>
                                </div>
                                <div class="yzm-switch-center" id="pics">
                                    <ul>
                                        <?php if(is_array($pictures)) foreach($pictures as $v) { ?>
                                        <li><a href="javascript:;"><img src="<?php echo $v['url'];?>" alt="<?php echo $v['alt'];?>"
                                                    title="<?php echo $v['alt'];?>"></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="yzm-icon2"><a href="javascript:;" title="下一个" onfocus="this.blur();">下一个</a>
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
<script type="text/javascript" src="<?php echo STATIC_URL;?>js/yzm-product-img.js"></script>