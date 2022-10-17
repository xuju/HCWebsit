<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
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


<!-- contact info area start -->
<section class="contact__help p-relative pt-115 pb-150">
    <div class="contact__shape">
        <img class="dot" src="<?php echo STATIC_URL;?>company/img/icon/contact/dot.png" alt="">
        <img class="shape" src="<?php echo STATIC_URL;?>company/img/icon/contact/shape.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 offset-xl-1">
                <div class="section__title section__title-3 mb-55">
                    <span class="fadeInUp wow" data-wow-delay=".2s">联 系</span>
                    <h2 class="fadeInUp wow" data-wow-delay=".4s">帮助中心</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-6 offset-xl-1">
                <div class="contact__help-item white-bg text-center mb-30 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="contact__icon mb-35">
                        <img src="<?php echo STATIC_URL;?>company/img/icon/contact/headset.png" alt="">
                    </div>
                    <div class="contact__text">
                        <h3>客户支持</h3>
                        <p>来一次愉快的合作，面对面交流，咖啡供上。</p>
                        <a href="contact.html" class="z-btn z-btn-border">定位导航到现场</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="contact__help-item white-bg text-center mb-30 wow fadeInLeft" data-wow-delay=".6s">
                    <div class="contact__icon mb-35">
                        <img src="<?php echo STATIC_URL;?>company/img/icon/contact/msg.png" alt="">
                    </div>
                    <div class="contact__text">
                        <h3>任何问题</h3>
                        <p>请把你的遇到的问题,难题都甩给我们吧.</p>
                        <a href="contact.html" class="z-btn z-btn-border">联系支持人员</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact info area end -->

<!-- contact area start -->
<section class="contact__area">
    <div class="container-fluid p-0">
        <div class="row ">
            <div class="col-xl-12">
                <div class="contact__map  wow fadeInUp">

                    <div class="contact__wrapper d-md-flex justify-content-between ">
                        <div class="contact__info mr-100">
                            <h3>给我们留言</h3>
                            <ul>
                                <li>
                                    <h4>地址</h4>
                                    <p>江苏省,苏州市,工业园区<br> 东旺路8号 </p>
                                </li>
                                <li>
                                    <h4>电话</h4>
                                    <p><a href="tel:(+86)-13771921540">(+86) 13771921540</a></p>
                                    <p><a href="tel:(+86)-13771921540">(+86) 13771921540</a></p>
                                </li>
                                <li>
                                    <h4>邮箱</h4>
                                    <p><a href="mailto:qhyft@163.com">qhyft@163.com</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">


                            <form action="<?php echo U('guestbook/index/init');?>" method="post">

                                <table class='yzm-table'>
                                    <input type="hidden" value="title" name="title" placeholder="留言主题">
                                    <input type="text" value="" name="name" placeholder="你的姓名" required>
                                    <input type="email" value="" name="email" placeholder="你的邮箱" required>
                                    <textarea name="bookmsg" value="" placeholder="请留下您的信息" required></textarea>

                                    <div>
                                        验证码 <input name="code" required type="text" class="yzm-input-text"
                                            style="width:100px;">
                                        <img src="<?php echo U('api/index/code');?>" onclick="this.src=this.src+'?'"
                                            class="yzm-code" title="看不清？点击更换">
                                    </div>
                                    <div>
                                        <input type="submit" name="dosubmit" value="确认提交" class="yzm-submit">
                                    </div>




                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include template("index","footer"); ?>