<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <title><?php echo $seo_title;?></title>
	  <meta name="author" content="YzmCMS内容管理系统">
	  <meta name="keywords" content="<?php echo $keywords;?>" />
	  <meta name="description" content="<?php echo $description;?>" />
	  <link href="<?php echo STATIC_URL;?>css/yzm-common.css" rel="stylesheet" type="text/css" />
	  <link href="<?php echo STATIC_URL;?>css/yzm-style.css" rel="stylesheet" type="text/css" />
	  <script type="text/javascript" src="<?php echo STATIC_URL;?>js/jquery-1.8.2.min.js"></script>
	  <script type="text/javascript" src="<?php echo STATIC_URL;?>js/yzm-front.js"></script>
  </head>
  <body>
	<?php include template("index","header"); ?> 

	<div class="yzm-content-box yzm-product">
		<div class="yzm-title">
			<h2><?php echo get_catname($catid);?></h2>
			<span class="yzm-title-right">
				当前位置：<?php echo get_location($catid);?>
			</span>
		</div>
		<?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,url,color,thumb,brand,price,stock','catid'=>$catid,'limit'=>'10','page'=>'page',));$pages = $tag->pages();}?>
		<?php if(is_array($data)) foreach($data as $v) { ?>	
		<div class="yzm-product-list-box">
			<div class="yzm-product-list">
				<a href="<?php echo $v['url'];?>" class="yzm-product-img"><img src="<?php echo get_thumb($v['thumb']);?>" title="<?php echo $v['title'];?>" alt="<?php echo $v['title'];?>"></a>
				<div class="yzm-product-right">
					<a class="yzm-product-title" href="<?php echo $v['url'];?>"><?php echo title_color($v['title'], $v['color']);?></a>
					<p class="yzm-product-price">￥<?php echo $v['price'];?>元</p>
					<p class="yzm-product-stock">库存：<?php echo $v['stock'];?>个</p>
					<a class="yzm-product-details" href="<?php echo $v['url'];?>" target="_blank">查看详情</a>
				</div>
			</div>
		</div>		
		<?php } ?>
		<div class="clearfix"></div>
		<div id="page"><?php echo $pages;?></div>	
	</div>
	<?php include template("index","footer"); ?> 