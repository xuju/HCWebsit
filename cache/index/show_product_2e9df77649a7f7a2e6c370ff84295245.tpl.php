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
                    <?php if($jgxt) { ?>
                    <?php $jgxts=explode(',',$jgxt)?>
                    <div class="params-content-wrap">
                        <div class="left">激光系统 </div>
                        <div class="right">
                            <?php if(is_array($jgxts)) foreach($jgxts as $v) { ?>
                            <?php echo $v;?><br />
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if($ctxt) { ?>
                    <?php $ctxts=explode(',',$ctxt)?>
                    <div class="params-content-wrap">
                        <div class="left">重涂系统 </div>
                        <div class="right">
                            <?php if(is_array($ctxts)) foreach($ctxts as $v) { ?>
                            <?php echo $v;?><br />
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if($gxsmxt) { ?>
                    <?php $gxsmxts=explode(',',$gxsmxt)?>
                    <div class="params-content-wrap">
                        <div class="left">光学扫描系统 </div>
                        <div class="right">
                            <?php if(is_array($gxsmxts)) foreach($gxsmxts as $v) { ?>
                            <?php echo $v;?><br />
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if($sjxt) { ?>
                    <?php $sjxts=explode(',',$sjxt)?>
                    <div class="params-content-wrap">
                        <div class="left">升降系统 </div>
                        <div class="right">
                            <?php if(is_array($sjxts)) foreach($sjxts as $v) { ?>
                            <?php echo $v;?><br />
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if($szc) { ?>
                    <?php $szcs=explode(',',$szc)?>
                    <div class="params-content-wrap">
                        <div class="left">树脂槽 </div>
                        <div class="right">
                            <?php if(is_array($szcs)) foreach($szcs as $v) { ?>
                            <?php echo $v;?><br />
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if($bhxt) { ?>
                    <?php $bhxts=explode(',',$bhxt)?>
                    <div class="params-content-wrap">
                        <div class="left">保护系统 </div>
                        <div class="right">
                            <?php if(is_array($bhxts)) foreach($bhxts as $v) { ?>
                            <?php echo $v;?><br />
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if($zzg) { ?>
                    <?php $zzgs=explode(',',$zzg)?>
                    <div class="params-content-wrap">
                        <div class="left">制作缸 </div>
                        <div class="right">
                            <?php if(is_array($zzgs)) foreach($zzgs as $v) { ?>
                            <?php echo $v;?><br />
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if($cpcspic) { ?>
                    <div class="params-img">
                        <img src="<?php echo $cpcspic;?>" style="width: 100%;" alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include template("index","footer"); ?>