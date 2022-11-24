<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>

<?php $parentids=get_category($catid, 'parentid')?>

<?php $topImg=get_category($parentids,'catimg')?>
<link href="<?php echo STATIC_URL;?>css/yzm-common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo STATIC_URL;?>css/yzm-style.css" rel="stylesheet" type="text/css" />
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
                <div class="page__title-content wow fadeInUp ">
                    <h2><?php echo get_catname($catid);?></h2>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="show-wrap">
    <div class="show-menu-wrap">
        <?php $parid=get_category($catid, 'parentid')?>
        <div class="container">
            <?php $data = get_childcat($parid);?>
            <?php if(is_array($data)) foreach($data as $v) { ?>
            <li class="show-menu-item <?php if($catid===$v[catid]) { ?>  select <?php } ?>  wow fadeInUp">
                <a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a>
            </li>
            <?php } ?>
        </div>
    </div>
    <div class="show-desc-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  col-lg-6" style="overflow: hidden;">
                    <?php $pictures = string2array($pictures);?>
                    <div class="yzm-image" id="bigpics">
                        <!-- 获取产品图集第一张的图片地址 -->
                        <img
                            src="<?php if(!isset($pictures[0])) { ?><?php echo STATIC_URL;?>images/nopic.jpg<?php } else { ?><?php echo $pictures['0']['url'];?><?php } ?>" />
                    </div>
                    <div class="yzm-switch" style="display: flex;">
                        <div class="yzm-icon1"><a href="javascript:;" title="上一个" onfocus="this.blur();">上一个</a></div>
                        <div class="yzm-switch-center" id="pics">
                            <ul>
                                <?php if(is_array($pictures)) foreach($pictures as $v) { ?>
                                <li><a href="javascript:;"><img src="<?php echo $v['url'];?>" alt="<?php echo $v['alt'];?>" title="<?php echo $v['alt'];?>"></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="yzm-icon2"><a href="javascript:;" title="下一个" onfocus="this.blur();">下一个</a></div>
                    </div>
                </div>
                <div class="col-sm-12  col-lg-6 desc-text-wrap">
                    <div class="title"><?php echo $title;?></div>
                    <div class="desc-text"><?php echo $content;?></div>
                </div>
                <div class="col-12  params-wrap">
                    <div class="params-title"><?php echo $title;?></div>
                    <div class="params-content-wrap">
                        <?php echo $shebei;?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php include template("index","footer"); ?>