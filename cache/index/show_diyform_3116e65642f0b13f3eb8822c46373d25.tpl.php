<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <title><?php echo $seo_title;?></title>
	  <meta name="author" content="YzmCMS内容管理系统">
	  <meta name="keywords" content="<?php echo $keywords;?>" />
	  <meta name="description" content="<?php echo $description;?>" />
	  <link href="<?php echo STATIC_URL;?>css/yzm-common.css" rel="stylesheet" type="text/css" />
	  <link href="<?php echo STATIC_URL;?>css/yzm-form.css" rel="stylesheet" type="text/css" />
	  <link href="<?php echo STATIC_URL;?>plugin/Hui-iconfont/iconfont.min.css" rel="stylesheet" type="text/css" />
	  <script type="text/javascript" src="<?php echo STATIC_URL;?>js/jquery-1.8.2.min.js"></script>
	  <script type="text/javascript" src="<?php echo STATIC_URL;?>js/yzm-front.js"></script>
	  <script type="text/javascript" src="<?php echo STATIC_URL;?>plugin/layer/layer.js"></script>
	  <script type="text/javascript" src="<?php echo STATIC_URL;?>js/yzm_common.js"></script>
  </head>
  <body>
	<?php include template("index","header"); ?> 
			 <div class="yzm-content-box yzm-form-box">
		 		<div class="yzm-title">
		 			<h2><?php echo $title;?></h2>
		 			<span class="yzm-title-right">
		 				当前位置：<?php echo $location;?>
		 			</span>
		 		</div>
				<form action="<?php echo U('diyform/index/post');?>" method="post" onsubmit="return checkall()">
					<input type="hidden" name="modelid" value="<?php echo $modelid;?>">
					<table class='yzm-table'>
						<?php if(is_array($fieldstr)) foreach($fieldstr as $val) { ?>		
						 <tr><?php echo $val;?></tr>
						<?php } ?>
						<?php if($modelinfo['check_code']) { ?>
				        <tr>
				            <td class="yzm-table-title"><span class="required">*</span>验证码</td>
				            <td>
				            	<input name="code" type="text" class="yzm-input-text" style="width:100px;">
				            	<img src="<?php echo U('api/index/code');?>" onclick="this.src=this.src+'?'" class="yzm-code" title="看不清？点击更换">
				            </td>
				        </tr>
						<?php } ?>		
						<tr>
							<td></td>
							<td><input type="submit" name="dosubmit" value="确认提交" class="yzm-submit"></td>
						</tr>
					</table>
				</form> 
			</div>
		</div>
	<script type="text/javascript">

		function checkall(){

			//form必填字段的验证
			<?php if(is_array($field_check)) foreach($field_check as $k=>$v) { ?>
				<?php if(($v['isrequired'] && in_array($v['fieldtype'], array('input', 'textarea')))) { ?>
				if($("<?php echo $v['fieldtype'];?>[name='<?php echo $k;?>']").val()==''){
					layer.msg("<?php echo $v['errortips'];?>", {icon:2});
					return false;
				}
				<?php } ?>		
			<?php } ?>
				
			//验证码的验证
			if($("input[name='code']").val()==''){
				layer.msg("验证码不能为空!", {icon:2});
				return false;
			}
			return true;
		}
	</script>		 
	<?php include template("index","footer"); ?> 