<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><div class="company-rong">
    <div class="container">
        <div class="rong-title-wrap  ani" swiper-animate-effect="fadeInUp" swiper-animate-delay=".1s">
            <div class="r-title"><?php echo get_catname(52);?></div>
            <div class="r-desc d-none d-lg-block"><?php echo get_category(52, 'entitle');?></div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-12  col-sm-12">
                <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,thumb,url,color,content','catid'=>'52',));}?>
                <?php $i=0?>
                <div class="time-wrap">
                    <?php if(is_array($data)) foreach($data as $v) { ?>
                    <?php $i++; ?>
                    <div class="time-item ani" swiper-animate-effect="fadeInUp" swiper-animate-delay=".<?php echo $i;?>s">
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
                    <!-- <div class="time-item">
                        <div class="time-circle"></div>
                        <div class="time-text">
                            <div class="time-year">
                                2009年5月
                            </div>
                            <div class="time-desc">
                                加入苏州市汽车工程学会任名誉理事长、副理事单位。 <br /> 加入苏州市工业设计协作联盟任副秘书长单位， <br /> 与奇瑞汽车股份有限公司签订战略合
                            </div>
                        </div>
                    </div>
                    <div class="time-item">
                        <div class="time-circle"></div>
                        <div class="time-text">
                            <div class="time-year">
                                2009年1月
                            </div>
                            <div class="time-desc">
                                获批成立数控系统性能评测中心；创建苏州工业园区快速制造公共技术服务f平台；<br /> 苏州工业园区企业博士后科研工作站秉创科技分站挂牌成
                            </div>
                        </div>
                    </div>
                    <div class="time-item">
                        <div class="time-circle"></div>
                        <div class="time-text">
                            <div class="time-year">
                                2009年12月
                            </div>
                            <div class="time-desc">
                                卢秉恒院士被授予"姑苏创新创业领军人才称号"
                            </div>
                        </div>
                    </div>
                    <div class="time-item">
                        <div class="time-circle"></div>
                        <div class="time-text">
                            <div class="time-year">
                                2008年11月
                            </div>
                            <div class="time-desc">
                                卢秉恒院士被授予"江苏省高层次创新创业"
                            </div>
                        </div>
                    </div>
                    <div class="time-item">
                        <div class="time-circle"></div>
                        <div class="time-text">
                            <div class="time-year">
                                2008年8月
                            </div>
                            <div class="time-desc">
                                卢秉恒院士被授予"苏州工业园区科技领军人才"称号
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <img class="rongyuc  ani" swiper-animate-effect="fadeInUp" swiper-animate-delay=".2s"
                    src="<?php echo $site['rongyuc'];?>" alt="">
                <img class="rongyue ani" swiper-animate-effect="fadeInUp" swiper-animate-delay=".3s"
                    src="<?php echo $site['rongyue'];?>" alt="">
            </div>
        </div>
    </div>
</div>