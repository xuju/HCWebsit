<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<script type="text/javascript" src="<?php echo STATIC_URL;?>js/yzm-front.js"></script>
<section class="page__title p-relative d-flex align-items-center fix">
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

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12 wow fadeInUp">
            <h3 style="text-align: center;"><?php echo $title;?></h3>
        </div>
        <div class="col-lg-12 wow fadeInUp">
            <div class="description" style="text-indent: 30px">
                <?php echo $content;?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row wow fadeInUp">

        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'tag')) {$data = $tag->tag(array('field'=>'id,tag,total','limit'=>'20',));}?>
        <div class="blog__tag mb-30 wow fadeInUp col-12" data-wow-delay=".6s">
            <span>相关标签 : </span>
            <?php if(is_array($data)) foreach($data as $v) { ?>
            <a href="<?php echo tag_url($v['id']);?>" target="_blank"><?php echo $v['tag'];?>(<?php echo $v['total'];?>)</a>
            <?php } ?>
        </div>
        <div class="blog__share d-flex align-items-center mb-30 wow fadeInUp  col-12" data-wow-delay=".2s">
            <span>分享 : </span>
            <div class="blog__social theme-social d-inline-block">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fab fa-qq"></i>
                            <i class="fab fa-qq"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-weixin"></i>
                            <i class="fab fa-weixin"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>


</div>

<div class="container">

    <div class="row wow fadeInUp">

        <div class="sidebar__widget-title mb-50  col-12">
            <h4>相关文章</h4>
        </div>
        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'relation')) {$data = $tag->relation(array('field'=>'title,url,color,updatetime,thumb,catid','modelid'=>$modelid,'id'=>$id,'limit'=>'3',));}?>
        <?php if(is_array($data)) foreach($data as $v) { ?>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item  ">
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
        <!-- <div class="post-comment-form wow fadeInUp  col-12" data-wow-delay=".2s">
            <h4>留下回复 </h4>
            <span>您的联系方式不会被泄露 </span>
            <form action="<?php echo U('comment/index/init');?>" method="post" onsubmit="return check_comm(this)">
                <div class="row">
                    <input type="hidden" name="modelid" value="<?php echo $modelid;?>">
                    <input type="hidden" name="catid" value="<?php echo $catid;?>">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="hidden" name="title" value="<?php echo $title;?>">
                    <input type="hidden" name="url" value="<?php echo $url;?>">
                    <div class="col-xl-6 col-md-6">
                        <div class="post-input">
                            <input type="text" name="commonname" placeholder="姓名" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="post-input">
                            <input type="text" name="commonphone" placeholder="联系方式" required>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="post-input">
                            <textarea placeholder="请输入留言内容..." name="content" required></textarea>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="post-input">
                            <input type="submit" style="background-color: #4636FF;color: #fff;"
                                class="yzm-comment-submit" name="dosubmit" value="提交">
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="post-comments mb-95 wow fadeInUp  col-12" data-wow-delay=".6s">
            <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'comment_list')) {$data = $tag->comment_list(array('modelid'=>$modelid,'catid'=>$catid,'id'=>$id,'field'=>'commonname,inputtime,content',));}?>
            <div class="post-comment-title mb-40">
                <h3><?php echo get_comment_total($id, $catid, $modelid);?>条评论</h3>
            </div>
            <div class="latest-comments">
                <ul>
                    <?php if(is_array($data)) foreach($data as $v) { ?>

                    <li>
                        <div class="comments-box">
                            <div class="comments-avatar">
                                <img src="<?php if(!empty($v['userpic'])) { ?><?php echo $v['userpic'];?><?php } else { ?><?php echo STATIC_URL;?>images/default.gif<?php } ?>"
                                    alt="" width="35" height="35">
                            </div>
                            <div class="comments-text">
                                <div class="avatar-name">
                                    <h5><?php echo $v['commonname'];?></h5>
                                    <span class="post-meta"><?php echo date('Y-m-d H:i:s',$v['inputtime']);?></span>
                                </div>
                                <p><?php echo nl2br($v['content']);?></p>
                                <a href="javascript:toreply('<?php echo $v['id'];?>');" class="comment-reply comm_a">
                                    &nbsp;
                                </a>

                            </div>
                        </div>
                    </li>
                    <?php } ?>
                    <?php if(empty($data)) { ?><li>这篇文章还没有收到评论，赶紧来抢沙发吧~</li><?php } ?>

                </ul>
            </div>
        </div> -->

    </div>
</div>
</div>
<?php include template("index","footer"); ?>