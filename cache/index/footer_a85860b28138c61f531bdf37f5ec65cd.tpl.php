<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!-- footer area start -->
<footer class="footer-center">
    <div class="footer__area grey-bg  ">
        <div class="footer__top  ani" swiper-animate-effect="fadeInUp" swiper-animate-delay=".1s">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-top-item    wow fadeInUp" data-delay=".1s">
                        <div class="footer-item-left">
                            <img src="<?php echo STATIC_URL;?>company/images/tel.png" alt="联系电话">
                        </div>
                        <div class="footer-item-right">
                            <span class="footer-item-name">联系电话:</span>
                            <span class="footer-item-value"><?php echo $site['phone'];?></span>
                        </div>
                    </div>
                    <div class="footer-top-item    wow fadeInUp" data-delay=".1s">
                        <div class="footer-item-left">
                            <img src="<?php echo STATIC_URL;?>company/images/location.png" alt="联系电话">
                        </div>
                        <div class="footer-item-right">
                            <span class="footer-item-name">地址:</span>
                            <span class="footer-item-value"><?php echo $site['address'];?></span>
                        </div>
                    </div>
                    <div class="footer-top-item    wow fadeInUp" data-delay=".1s">
                        <div class="footer-item-left">
                            <img src="<?php echo STATIC_URL;?>company/images/email.png" alt="联系电话">
                        </div>
                        <div class="footer-item-right">
                            <span class="footer-item-name">邮箱:</span>
                            <span class="footer-item-value"><?php echo $site['email'];?></span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-4  d-none d-lg-block ">
                        <div class="footer__widget mb-45  ani " swiper-animate-effect="fadeInUp"
                            swiper-animate-delay=".2s">
                            <div class="footer__widget-title">
                                <h4>海创三维</h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <ul>
                                        <li><a href="#">公司介绍</a></li>
                                        <li><a href="#">公司荣誉</a></li>
                                        <li><a href="#">合作伙伴</a></li>
                                        <li><a href="#">组织架构</a></li>
                                        <li><a href="#">新闻中心</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2  col-lg-2  col-md-4  d-none d-lg-block ">
                        <div class="footer__widget mb-45  ani" swiper-animate-delay=".4s">
                            <div class="footer__widget-title">
                                <h4><?php echo get_catname(70);?></h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <?php $data = get_childcat(70);?>
                                    <ul>
                                        <?php if(is_array($data)) foreach($data as $v) { ?>
                                        <li><a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2  col-lg-2  col-md-4  d-none d-lg-block ">
                        <div class="footer__widget mb-45   ani" swiper-animate-delay=".6s">
                            <div class="footer__widget-title">
                                <h4><?php echo get_catname(6);?></h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <ul>
                                        <?php $data = get_childcat(6);?>
                                        <ul>
                                            <?php if(is_array($data)) foreach($data as $v) { ?>
                                            <li><a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2  col-lg-2  col-md-4  d-none d-lg-block ">
                        <div class="footer__widget mb-45 ani" swiper-animate-delay=".6s">
                            <div class="footer__widget-title">
                                <h4><?php echo get_catname(41);?></h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <ul>
                                        <?php $data = get_childcat(41);?>
                                        <ul>
                                            <?php if(is_array($data)) foreach($data as $v) { ?>
                                            <li><a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2  col-lg-2  col-md-4  d-none d-lg-block ">
                        <div class="footer__widget mb-45   ani" swiper-animate-delay=".8s">
                            <div class="footer__widget-title">
                                <h4><?php echo get_catname(10);?></h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <?php $data = get_childcat(10);?>
                                    <ul>
                                        <?php if(is_array($data)) foreach($data as $v) { ?>
                                        <li><a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2  col-lg-2  col-md-4  d-none d-lg-block ">
                        <div class="footer__widget mb-45   ani" swiper-animate-delay=".8s">
                            <div class="footer__widget-title">
                                <h4><?php echo get_catname(82);?></h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <?php $data = get_childcat(82);?>
                                    <ul>
                                        <?php if(is_array($data)) foreach($data as $v) { ?>
                                        <li><a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="footer__copyright-text">
                            <p>
                                <!-- &copy; -->
                                <?php echo $site['site_copyright'];?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- JS here -->

<!-- <script src="<?php echo STATIC_URL;?>company/js/vendor/waypoints.min.js"></script> -->
<!-- <script src="<?php echo STATIC_URL;?>company/js/bootstrap.bundle.min.js"></script> -->
<!-- jQuery and JavaScript Bundle with Popper -->

<script src="https://cdn.bootcdn.net/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/jquery.meanmenu.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/slick.min.js"></script>
<!-- <script src="https://cdn.bootcdn.net/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script> -->
<!-- <script src="<?php echo STATIC_URL;?>company/js/jquery.fancybox.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/jquery.counterup.min.js"></script>
<script src="<?php echo STATIC_URL;?>company/js/isotope.pkgd.min.js"></script> -->
<!-- <script src="<?php echo STATIC_URL;?>company/js/owl.carousel.min.js"></script> -->
<!-- <script src="<?php echo STATIC_URL;?>company/js/ajax-form.js"></script> -->
<!-- <script src="<?php echo STATIC_URL;?>company/js/wow.min.js"></script> -->
<script src="https://cdn.bootcdn.net/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- <script src="<?php echo STATIC_URL;?>company/js/imagesloaded.pkgd.min.js"></script> -->
<script src="<?php echo STATIC_URL;?>company/js/main.js"></script>
</body>

</html>