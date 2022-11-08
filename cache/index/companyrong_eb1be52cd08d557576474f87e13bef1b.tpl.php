<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><div class="company-rong">
    <div class="container">
        <div class="rong-title-wrap  wow fadeInUp" data-delay=".1s">
            <div class="r-title"><?php echo get_catname(52);?></div>
            <div class="r-desc d-none d-lg-block"><?php echo get_category(52, 'entitle');?></div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-12  col-sm-12">
                <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,thumb,url,color,content,rong_id','catid'=>'52','order'=>'rong_id ASC',));}?>
                <?php $i=0?>
                <div class="time-wrap">
                    <?php if(is_array($data)) foreach($data as $v) { ?>
                    <?php $i++; ?>
                    <div class="time-item wow fadeInUp" data-delay=".<?php echo $i;?>s">
                        <div class="time-circle"></div>
                        <div class="time-text">
                            <div class="time-year">
                                <?php echo $v['title'];?>
                            </div>
                            <div class="time-desc">
                                <?php echo $v['content'];?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <img class="rongyuc  wow fadeInUp" data-delay=".2s" src="<?php echo $site['rongyuc'];?>" alt="">
                <img class="rongyue wow fadeInUp" data-delay=".3s" src="<?php echo $site['rongyue'];?>" alt="">
            </div>
        </div>
    </div>
</div>