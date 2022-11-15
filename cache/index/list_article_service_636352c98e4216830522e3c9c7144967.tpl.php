<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<?php $listimgs=$catimg?$catimg:get_category($parentid, 'catimg')?>

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
<div class="servive-bg">
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
    <section class="service-content  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  wow fadeInUp">

                    <div class="left-menu-wrap">
                        <div class="left-menu-item  service-menu-item ">
                            3D打印文件格式规范
                        </div>
                        <div class="left-menu-item  service-menu-item">
                            部分设计规范
                        </div>
                        <div class="left-menu-item  service-menu-item">
                            选择合适的材料
                        </div>
                        <div class="left-menu-item  service-menu-item">
                            3D打印不同材料的最小壁厚要求
                        </div>
                        <div class="left-menu-item  service-menu-item">
                            空心设计中逸出孔的大小要求
                        </div>
                        <div class="left-menu-item  service-menu-item">
                            立柱的最小壁厚设计要求
                        </div>
                        <div class="left-menu-item  service-menu-item">
                            凸状和凹状的细节要求
                        </div>
                        <div class="left-menu-item  service-menu-item">
                            间隙设计要求
                        </div>
                        <div class="left-menu-item  service-menu-item">
                            螺纹的设计要求
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 ">
                    <div class="right-wrap">
                        <div class="right-content-item  wow fadeInUp ">
                            <h3>3D打印文件格式规范</h3>
                            <div class="desc">
                                以下是使用不同软件，导出STL格式文件的具体方法：
                            </div>
                            <div class="service-r-desc">
                                <img src="<?php echo STATIC_URL;?>company/images/fw01.jpg" alt="">
                            </div>
                        </div>
                        <div class="right-content-item  wow fadeInUp ">
                            <h3>部分设计规范</h3>
                            <div class="desc">
                                为了确保您的设计能够顺利打印，请您依次操作以下步骤：
                            </div>
                            <div class="service-r-desc">

                                <p class="desc">
                                    1) 根据实际使用要求，选择材料。查看材料参数<br />
                                    2) 检查您的设计的壁厚，务必满足最小壁厚要求。查看不同材料的壁厚设计要求<br />
                                    3) 如果您的设计是空心的，务必设计足够大的逸出孔。查看逸出孔设计要求<br />
                                    4) 如果您的设计中存在独立柱子，务必满足最小壁厚要求。查看独立柱子的壁厚设计要求<br />
                                    5) 如果您的设计中存在凸状或凹状细节（如凸字或凹字等），务必满足最小的宽度和高度要求。查看凸状/凹状设计要求<br />
                                    6) 如果您的设计中存在尖锐部分，该部分的角度需要满足最小要求。查看尖锐部分设计要求<br />
                                    7) 如果您的设计中包含多个零件，务必满足零件之间最小的间隙要求。查看零件间隙设计要求<br />
                                    8) 如果您的设计中存在螺纹，牙型角度和螺距务必达到最小要求。查看螺纹设计要求
                                    9) 如果您的设计中存在孔洞，其内径和深度必须满足最小的孔洞要求。查看孔洞设计要求
                                    10) 如果您的设计较为复杂，工场可能会判定为异形件，按照特殊规格报价。查看异形件示例
                                    如果您的设计遵守以上设计规范，将极大提高您的订单审核通过率。
                                </p>
                            </div>
                        </div>
                        <div class="right-content-item  wow fadeInUp ">
                            <h3>选择合适的材料</h3>
                            <div class="desc">
                                您可以根据您的实际需要选择合适的材料，下面是各种材料的重要信息。
                            </div>
                            <div class="service-r-desc">

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">材料</th>
                                            <th scope="col">特点</th>
                                            <th scope="col">应用领域</th>
                                            <th scope="col">技术工艺</th>
                                            <th scope="col">热变形温度（0.46MPa）</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8000树脂</td>

                                            <td>表面光滑、适合普通装配</td>
                                            <td>汽车、消费电子、机电、艺术品</td>
                                            <td>SLA</td>
                                            <td>46℃</td>
                                        </tr>
                                        <tr>
                                            <td>8500高韧性树脂</td>
                                            <td>韧性高、深蓝色</td>
                                            <td>汽车、消费电子、机电、艺术品</td>
                                            <td>SLA</td>
                                            <td>62℃</td>
                                        </tr>
                                        <tr>
                                            <td>透明光敏树脂</td>
                                            <td>表面光滑、防水、稳定性好</td>
                                            <td>包装、翻模、流体分析</td>
                                            <td>MJP/Objet</td>
                                            <td>45℃</td>
                                        </tr>
                                        <tr>
                                            <td>灰色类ABS</td>
                                            <td>韧表面光滑、硬度高、韧性好</td>
                                            <td>消费电子、家用电器</td>
                                            <td>SLA</td>
                                            <td>55℃</td>
                                        </tr>
                                        <tr>
                                            <td>白色尼龙</td>
                                            <td>表面有颗粒感、硬度高、韧性好</td>
                                            <td>汽车配件、家用电器、机电设备</td>
                                            <td>SLS</td>
                                            <td>140℃</td>
                                        </tr>
                                        <tr>
                                            <td>灰色玻璃纤维</td>
                                            <td>表面有颗粒感、硬度高、韧性好</td>
                                            <td>汽车配件、家用电器、机电设备</td>
                                            <td>SLS</td>
                                            <td>160℃</td>
                                        </tr>
                                        <tr>
                                            <td>AlSi10Mg</td>
                                            <td>打印产品的强度高</td>
                                            <td>零配件制造</td>
                                            <td>SLM</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>7075铝合金</td>
                                            <td>机械性能好、抗腐蚀、抗氧化</td>
                                            <td>零配件制造</td>
                                            <td>CNC</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>6061铝合金</td>
                                            <td>焊接性能好，强度高</td>
                                            <td>零配件制造</td>
                                            <td>CNC</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="right-content-item  wow fadeInUp ">
                            <h3>3D打印不同材料的最小壁厚要求</h3>
                            <div class="desc">
                                在您的3D设计文件中，模型的内、外表面闭合形成薄壁，其中：<br />至少有两个面与其他薄壁相连的，称为支撑性薄壁，如下图：
                            </div>
                            <div class="service-r-desc">

                                <img src="<?php echo STATIC_URL;?>company/images/1.jpg" alt="">
                                <p class="desc">只有一个面与其他薄壁相连的，称为非支撑型薄壁，如下图：</p>
                                <img src="<?php echo STATIC_URL;?>company/images/2.jpg" alt="">
                                <p class="desc">薄壁的厚度我们称为壁厚，相应的可分为支撑型壁厚和非支撑型壁厚。</p>
                                <p class="desc">壁厚直接决定了打印物品的强度也关系着模型能否打印。</p>
                                <p class="desc">模型打印出来后还需要经过去除支撑、打磨、喷砂等处理，这些工序决定了不同材料的最小壁厚。只有当壁厚达到最小壁厚要求模型才是可打印的。</p>
                                <p class="desc">
                                    如果您的设计中存在较薄的支撑型薄壁区域，需要根据该区域的大小调整壁厚，具体如下（如选择8000树脂材料，薄壁区域大小在5*5mm以内，其最小壁厚为0.6，其他同理）：
                                </p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">材料</th>
                                            <th scope="col">5*5mm</th>
                                            <th scope="col">10*10mm</th>
                                            <th scope="col">50*50mm</th>
                                            <th scope="col">100*100mm</th>
                                            <th scope="col">200*200mm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8000树脂</td>
                                            <td>0.6mm</td>
                                            <td>0.8mm</td>
                                            <td>1mm</td>
                                            <td>1.2mm</td>
                                            <td>1.5mm</td>
                                        </tr>
                                        <tr>

                                            <td>8500高韧性树脂</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>1.2mm</td>
                                            <td>1.5mm</td>
                                            <td>2mm</td>
                                        </tr>
                                        <tr>
                                            <td>透明光敏树脂</td>
                                            <td> 0.3mm</td>
                                            <td>0.5mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>1.2mm</td>
                                        </tr>
                                        <tr>
                                            <td>白色尼龙</td>
                                            <td>0.8mm</td>
                                            <td>0.8mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>1.2mm</td>
                                        </tr>

                                        <tr>
                                            <td>灰色玻璃纤维</td>
                                            <td>0.8mm</td>
                                            <td>0.8mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>1.2mm</td>
                                        </tr>
                                        <tr>
                                            <td>灰色高韧性类ABS树脂</td>
                                            <td>0.8mm</td>
                                            <td>0.8mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>1.2mm</td>
                                        </tr>

                                    </tbody>
                                </table>
                                <p class="desc">
                                    如果您的设计中存在非支撑型薄壁，则最小壁厚要求如下
                                </p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">材料</th>
                                            <th scope="col">8000树脂</th>
                                            <th scope="col">8500高韧性树脂</th>
                                            <th scope="col">透明光敏树脂</th>
                                            <th scope="col">白色尼龙</th>
                                            <th scope="col">灰色玻璃纤维</th>
                                            <th scope="col">灰色高韧性类ABS</th>
                                            <th scope="col">AlSi10Mg铝合金</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>壁厚</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>0.8mm</td>
                                            <td>0.8mm</td>
                                            <td>0.8mm</td>
                                            <td>1mm</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="right-content-item  wow fadeInUp ">
                            <h3>空心设计中逸出孔的大小要求</h3>
                            <div class="desc">
                                如果您的设计是空心的，需要在适当的部位设计逸出孔，用于移除打印完毕后的产品中未被使用的材料，具体如下：
                            </div>
                            <div class="service-r-desc">

                                <img src="<?php echo STATIC_URL;?>company/images/3.jpg" alt="">
                                <div class="desc">
                                    您需要确保空心部分包含足够大的逸出孔，其孔径大于2mm，使得空心部分能够清理干净。<br />
                                    如果逸出孔达不到最低要求，建议您增加现有逸出孔的大小、增加逸出孔的数量或者将空心部分填实。<br />
                                    特别的，当只有一个逸出孔时，并不能保证未被使用的材料完全逸出。<br />
                                    我们推荐使用多个逸出孔。<br />
                                </div>
                            </div>
                        </div>
                        <div class="right-content-item  wow fadeInUp ">
                            <h3>立柱的最小壁厚设计要求</h3>
                            <div class="desc">
                                模型中如果某个凸出部分的特征其长度超过宽度2倍我们称之为立柱（长度小于宽度2倍的称为凸状细节）,其中两端都和薄壁相连的称为支撑型立柱如下图：
                            </div>
                            <div class="service-r-desc">

                                <img src="<?php echo STATIC_URL;?>company/images/4.jpg" alt="">
                                <div class="desc">
                                    只有一端和薄壁相连的，称为非支撑型立柱，如下图：
                                </div>
                                <img src="<?php echo STATIC_URL;?>company/images/5.jpg" alt="">
                                <p class="desc">
                                    去除支撑、打磨、喷砂等工序决定了最小立柱壁厚要求不同材料立柱最小壁厚要求如下：
                                </p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">材料</th>
                                            <th scope="col">8000树脂</th>
                                            <th scope="col">8500高韧性树脂</th>
                                            <th scope="col">透明光敏树脂</th>
                                            <th scope="col">白色尼龙</th>
                                            <th scope="col">灰色玻璃纤维</th>
                                            <th scope="col">AlSi10Mg铝合金</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>支撑型立柱</td>
                                            <td>1.2mm</td>
                                            <td>1.2mm</td>
                                            <td>0.5mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>

                                        </tr>
                                        <tr>

                                            <td>非支撑型立柱</td>
                                            <td>1.5mm</td>
                                            <td>1.5mm</td>
                                            <td>0.5mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="right-content-item  wow fadeInUp ">
                            <h3>凸状和凹状的细节要求</h3>
                            <div class="desc">
                                模型中如果某个凸起部分的特征其高度小于宽度的2倍（若高度大于宽度的2倍我们称为独立柱子）我们称之为凸状细节，如下图：
                            </div>
                            <div class="service-r-desc">

                                <img src="<?php echo STATIC_URL;?>company/images/6.jpg" alt="">
                                <div class="desc">
                                    最小凸状细节通常是由打印机的精度决定的。不同材料的凸状细节的最小高度/宽度要求如下（例如8000树脂材料的凸字细节其高度和宽度必须大于1.2mm才能打印清楚）：
                                </div>
                                <img src="<?php echo STATIC_URL;?>company/images/7.jpg" alt="">
                                <p class="desc">
                                    去除支撑、打磨、喷砂等工序决定了最小立柱壁厚要求不同材料立柱最小壁厚要求如下：<br />

                                </p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">材料</th>
                                            <th scope="col">8000树脂</th>
                                            <th scope="col">8500高韧性树脂</th>
                                            <th scope="col">透明光敏树脂</th>
                                            <th scope="col">白色尼龙</th>
                                            <th scope="col">灰色玻璃纤维</th>
                                            <th scope="col">灰色类ABS</th>
                                            <th scope="col">AlSi10Mg铝合金</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>高度宽度</td>
                                            <td>1.2mm</td>
                                            <td>1.5mm</td>
                                            <td>0.5mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>0.8mm</td>
                                            <td>0.5mm</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="desc">
                                    最小凹状细节通常是由打印机的精度决定的。不同材料的凹状细节的最小深度/宽度要求如下（例如，8000树脂材料的凹字细节其深度和宽度必须大于1mm才能打印清楚）：</p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">材料</th>
                                            <th scope="col">8000树脂</th>
                                            <th scope="col">8500高韧性树脂</th>
                                            <th scope="col">透明光敏树脂</th>
                                            <th scope="col">白色尼龙</th>
                                            <th scope="col">灰色玻璃纤维</th>
                                            <th scope="col">灰色类ABS</th>
                                            <th scope="col">AlSi10Mg铝合金</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>深度宽度</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>0.5mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>
                                            <td>0.8mm</td>
                                            <td>0.5mm</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="desc">
                                    当凹状细节的深度或宽度小于最小凹状细节要求时，将无法准确地打印，无法进行打磨、喷洒等后处理。此时建议您增加深度/宽度、去除该部分或者选择其他合适的材料。</p>
                            </div>
                        </div>
                        <div class="right-content-item  wow fadeInUp ">
                            <h3>间隙设计要求：</h3>
                            <div class="desc">
                                间隙是指任何两个零件薄壁或者立柱之间的距离如下图：
                            </div>
                            <div class="service-r-desc">

                                <img src="<?php echo STATIC_URL;?>company/images/009.jpg" alt="">
                                <div class="desc">
                                    您的设计中，两个部分的间隙需要大于最小间距要求，才能够正确打印，不同材料的最小间隙要求如下：
                                </div>


                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">材料</th>
                                            <th scope="col">8000树脂</th>
                                            <th scope="col">8500高韧性树脂</th>
                                            <th scope="col">灰色类ABS</th>
                                            <th scope="col">透明光敏树脂</th>
                                            <th scope="col">灰色玻璃纤维</th>
                                            <th scope="col">灰色类ABS</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>间隙要求</td>
                                            <td>2mm</td>
                                            <td>2mm</td>
                                            <td>2mm</td>
                                            <td>0.5mm</td>
                                            <td>1mm</td>
                                            <td>1mm</td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="right-content-item  wow fadeInUp ">
                            <h3>间隙设计要求：</h3>
                            <div class="desc">
                                螺距是指螺纹上相邻两牙对应点之间的轴向距离如下图：
                            </div>
                            <div class="service-r-desc">

                                <img src="<?php echo STATIC_URL;?>company/images/10.jpg" alt="">
                                <div class="desc">
                                    牙型角度是指螺纹牙型两侧边的夹角。<br />
                                    打印机的精度会影响到螺距和牙型角度。<br />
                                    根据不同的材料选择，您的设计需要满足最小螺距和最小牙型角度要求，如下：<br />
                                </div>


                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">材料</th>
                                            <th scope="col">100微米白色光敏树脂</th>
                                            <th scope="col">100微米透明光敏树脂</th>
                                            <th scope="col">16微米半透明光敏树脂</th>
                                            <th scope="col">100微米灰色类ABS</th>
                                            <th scope="col">100微米白色尼龙</th>
                                            <th scope="col">100微米灰色玻璃纤维</th>
                                            <th scope="col">33微米淡蓝色光敏树脂</th>
                                            <th scope="col">25微米金属色钴铬合金</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>螺距</td>
                                            <td>0.6mm</td>
                                            <td>0.8mm</td>
                                            <td>0.5mm</td>
                                            <td>0.6mm</td>
                                            <td>0.6mm</td>
                                            <td>0.6mm</td>
                                            <td>0.5mm</td>
                                            <td>0.5mm</td>
                                        </tr>
                                        <tr>
                                            <td>牙型角度</td>
                                            <td>20°</td>
                                            <td>20°</td>
                                            <td>20°</td>
                                            <td>20°</td>
                                            <td>20°</td>
                                            <td>20°</td>
                                            <td>20°</td>
                                            <td>20°</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<?php include template("index","footer"); ?>