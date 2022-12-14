<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<?php $listimgs=$catimg?$catimg:get_category($parentid, 'catimg')?>

<section class="page__title p-relative d-flex align-items-center fix" data-background="<?php echo $listimgs;?>">
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
<section class="service-category">
    <div class="container">
        <div class="service-category-wrap wow fadeInUp">
            <?php $catids=$parentid?$parentid:$catid?>
            <?php $data = get_childcat($catids);?>
            <div class="left">
                <?php if(is_array($data)) foreach($data as $v) { ?>
                <div class="left-item  select">
                    <a href="<?php echo $v['pclink'];?>"><?php echo $v['catname'];?></a>
                </div>
                <?php } ?>
            </div>
            <div class="right">
                <?php echo get_location($catid);?>
            </div>
        </div>
    </div>
</section>
<section class="service-center" style="padding-top: 60px;">
    <div class="container ">
        <div class="service-center-content wow fadeInUp">
            <div class="title"> <?php echo get_category($catid, 'catname');?></div>
            <div class="sub-title">交货周期</div>
            <p class="desc">
                为保证准确交货，用户须注意：本公司为客户在与我们沟通时，提供三维设计图，我们第一时间提供报价与周期，一般模型2个工作日发货，特殊模型发货时间与客服沟通。 
            </p>
            <div class="sub-title">发票说明</div>
            <p class="desc">
                发票内容：<br />
                1.发票将与货物一并邮寄，特殊情况我们客服会与您沟通，敬请大家了解并注；<br />
                2.开具发票的金额以实际支付的金额为准（具体需与客服沟通）；<br />
                3.正常情况我们将以收货地址作为发票的邮寄地址，以便及时与您联系，如有特殊情况请与客服联系；<br />
                4.提供的发票发票资质信息。<br />
                —单位名称（必须是您公司营业执照上的全称）<br />
                —纳税人识别号（必须是您公司《税务登记证》的编号<br />
                —注册地址（必须是您公司营业执照上的注册地址）<br />
                —电话（请提供能与您公司保持联系的有效电话）<br />
                —开户银行（必须是您公司银行开户许可证上的开户银行）<br />
                —银行账号（必须是您公司开户许可证上的银行账号）<br />
            </p>
            <div class="sub-title">配送/支付</div>
            <p class="desc">
                <strong>配送方式</strong> <br />
                为了保障交货速度，公司目前仅支持顺丰速递。不在顺丰配送范围内的订单，将由顺丰公司安排转寄。<br />
                <strong>支付方式</strong> <br />
                目前提供支付宝、微信支付、银行转账、对公转账四种支付方式，需要转账的请与客服沟通。<br />
            </p>
        </div>

    </div>
</section>
<?php include template("index","footer"); ?>