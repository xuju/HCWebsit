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
                <div class="page__title-content wow fadeInUp">
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
<section class="service-center " style="padding-top: 60px;">

    <div class="container">
        <div class="service-center-content wow fadeInUp">
            <div class="title"> <?php echo get_category($catid, 'catname');?></div>
            <div class="sub-title">签收/验货</div>
            <p class="desc">
                为保障您的权益，请您在收货时注意以下环节：<br />
                1.签收时在付款前与配送人员当面核对：产品名称、应付金额、产品数量及发货清单、发票（如有）等<br />
                2.如存在产品破损、产品错误、产品短缺、产品质量问题等影响签收的因素，请您拨打18018149584或18018149584和客服沟通解决<br />
                3.为了保护您的权益，建议您尽量不要委托他人代为签收；如由他人代为签收产品，而没有在配送人员在场的情况下验收，出现的一切问题，均后果自负<br />
                如果您在收到产品3日内，您发现产品有质量问题，请联系客服处理。<br />
                客服电话：18018149584（8:00-22:00）
            </p>
            <div class="sub-title">返工/退换货</div>
            <p class="desc">
                如果您在收到产品3日内，您发现产品有质量问题，请联系客服处理。<br />
                客服电话：180181495842<br />
                Email：848820348@qq.com<br />
                创毅同意退换货的情况<br />
                1.创毅生产的产品严格遵照中华人民共和国的质量标准执行；当发生质量问题经过核实为创毅原因的，我们会为您办理退货或者重新生产<br />
                2.对于需要办理退货或者重新生产的，自产品交货日（以实际收货日期为准）起3日内可以办理<br />
                创毅不予办理退换货的情况<br />
                非创毅原因造成的产品质量不良，包括：<br />
                1.产品签收后产生的受潮、变色等<br />
                2.退回产品数量不足<br />
                3.其他由于用户原因造成的<br />
                退款说明<br />
                1.退款规则：创毅同意退款后，该退款将退回原支付银行账户/支付宝<br />
                2.退款周期：退款将在10个工作日内向您提供的银行账户汇出<br />
            </p>
            <div class="sub-title">投诉建议</div>
            <p class="desc">
                创毅极为重视顾客对于产品和服务的反馈，建立了全方位客户沟通渠道。我们的客户服务团队由一支充满活力的工程师团队构成，他们拥有专业的技术知识和良好的职业素养，为您提供产品咨询、信息反馈、投诉和建议等优质服务。
                如果您对我们的体验或者服务有任何不满或建议，您可以通过电话或者Email直接和我们沟通，我们会在24小时内处理完毕，并给您回复。
                全国客户服务热线：18018149584
                工作时间：8:00-22:00
                Email：848820348@qq.com
            </p>
        </div>

    </div>
</section>
<?php include template("index","footer"); ?>