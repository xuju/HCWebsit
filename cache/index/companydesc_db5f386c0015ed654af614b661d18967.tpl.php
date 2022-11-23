<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><div class="swiper-company-desc">
    <div class="container">
        <div class="row">
            <div class=" col-sm-12 col-lg-6 d-none d-lg-block">

                <div class="company-desc-swiper wow fadeInUp " data-delay=".3s">
                    <div class="company-rotate">
                        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'banner')) {$data = $tag->banner(array('field'=>'title,image,url,typeid,status','limit'=>'10','typeid'=>'2',));}?>
                        <?php if(is_array($data)) foreach($data as $v) { ?>
                        <img src="<?php echo $v['image'];?>" alt="">
                        <?php } ?>
                        <div class="company-desc-bg"></div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-lg-6">
                <div class="company-title  d-none d-lg-block wow fadeInUp" data-delay=".1s">
                    <span class="company-title-text">
                        <?php echo get_category(96, 'catname');?>
                    </span>
                    <span class="company-title-desc"><?php echo get_category(96, 'entitle');?></span>
                </div>
                <div class="company-desc wow fadeInUp" data-delay=".2s">
                    <span><?php echo $site['site_name'];?></span><?php echo $site['comanydesc'];?>
                </div>
                <div class="faq__wrapper">
                    <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'id,title,content','catid'=>'96','order'=>'inputtime ASC',));}?>
                    <?php $i=0;?>

                    <div id="accordion">
                        <?php if(is_array($data)) foreach($data as $v) { ?>
                        <?php $i++;?>
                        <?php $coll="collapse".$v[id]?>

                        <div class="card company-card wow fadeInUp" data-delay=".3s">
                            <div class="card-header" id="heading<?php echo $v['id'];?>">
                                <h5 class="mb-0">
                                    <button class="btn   btn-link <?php if($i!=1) { ?> collapsed <?php } ?>" data-toggle="collapse"
                                        data-target="#collapse<?php echo $v['id'];?>" aria-expanded="true"
                                        aria-controls="collapse<?php echo $v['id'];?>">
                                        <?php echo $v['title'];?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse<?php echo $v['id'];?>" class="collapse <?php if($i==1) { ?> show <?php } ?>"
                                aria-labelledby="heading<?php echo $v['id'];?>" data-parent="#accordion">
                                <div class="card-body " data-delay=".4s">
                                    <?php echo $v['content'];?>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>