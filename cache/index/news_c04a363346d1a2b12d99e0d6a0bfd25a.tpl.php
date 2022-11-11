<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><div class="news">
    <div class="home-title-wrap  wow fadeInUp" data-delay=".1s">
        <div class="r-title"><?php echo get_catname(53);?></div>
        <div class="r-desc d-none d-lg-block"><?php echo get_category(53, 'entitle');?></div>
    </div>
    <div class="news-wrap">
        <div class="container">
            <div class="row">
                <div class=" col-lg-6   d-none d-lg-block">
                    <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,thumb,url,color,updatetime,content','catid'=>'53','limit'=>'1','order'=>'updatetime
                    DESC',));}?>
                    <div class="news-left ani" data-delay=".1s">
                        <?php if(is_array($data)) foreach($data as $v) { ?>
                        <img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>">
                        <div class="news-left-bottom">
                            <div class="news-l-b">
                                <div class="new-l-b-left">
                                    <div class="news-day">
                                        <?php echo date('d', $v['updatetime']);?>
                                    </div>
                                    <div class="news-month">
                                        <?php echo date('m', $v['updatetime']);?>
                                    </div>
                                </div>
                                <div class="new-l-b-right">
                                    <div class="new-left-title">
                                        <a href="<?php echo $v['url'];?>"> <?php echo $v['title'];?></a>
                                    </div>
                                    <div class="new-left-desc">
                                        <?php echo $v['content'];?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class=" col-lg-6">
                    <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,thumb,url,color,updatetime,content','catid'=>'53','limit'=>'4','order'=>'updatetime
                    DESC',));}?>
                    <?php $i=0;?>

                    <div class="news-right  ani">
                        <?php if(is_array($data)) foreach($data as $v) { ?>
                        <?php $i++; ?>
                        <?php if($i!=1) { ?>
                        <div class="news-right-item ani" data-delay=".<?php echo $i;?>s">
                            <div class="news-item-left">
                                <img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>">
                            </div>
                            <div class="news-item-right">
                                <div class="news-right-title">
                                    <a href="<?php echo $v['url'];?>"> <?php echo $v['title'];?></a>
                                </div>
                                <div class="news-right-time">
                                    <?php echo date('Y-m-d',$v['updatetime']);?>
                                </div>
                                <div class="news-right-desc">
                                    <?php echo $v['content'];?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>