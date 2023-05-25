<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/base.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/nologed.css" />
	<title><?php echo ($webname); ?></title>
	<style>
		::-webkit-input-placeholder { /* WebKit browsers */
		  color: #b5b5b5;
		  font-size: 18px;
		}

		::-moz-placeholder { /* Mozilla Firefox 19+ */
		  color: #b5b5b5;
		  font-size: 18px;
		}
		input:focus{background:#F5F5F5;outline: 1px solid #F5F5F5;}
		a:hover,a:link,a:visited,a:active{color:#FCD535;text-decoration:none;}
		.lbox{width:100%;height:60px;}
		.lbox_l{width:70%;height:60px;line-height:60px;text-align:left;float:left;}
		.lbox_r{width:30%;height:60px;line-height:60px;text-align:right;float:left;}
	</style>
  </head>
  <body>
	<div class="container-fluid ctbox">
		<div class="no_header">
			<div class="fl bhalf allhg txtl" style="line-height:50px;">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 26px;"></i>
			</div>
			<div class="fr bhalf allhg txtr" style="line-height:50px;">
			</div>
		</div>

		<div class="no_content">

			<div class="no_title" style="background: rgb(245, 245, 245);padding-left:15px;">
				<span class="title_txt fch"><?php echo L('帮助中心');?></span>
			</div>

			<div class="no_inbox">

				<?php if($uid > 0){?>
				<div class="lbox">
					<div class="lbox_l">
						<span class="fcc fzmmm" style="font-size:18px;">&nbsp;&nbsp;<?php echo L("重置密码"); ?></span>	
					</div>
					<a href="<?php echo U('Index/respwd');?>">
					<div class="lbox_r">
						<i class="bi bi-chevron-right fcc fw" style="font-size: 22px;"></i>
					</div>
					</a>
				</div>
				<?php }?>

				<div class="lbox">
					<div class="lbox_l">
						<span class="fcc fzmmm" style="font-size:18px;">&nbsp;&nbsp;<?php echo L('公告中心');?></span>	
					</div>	
					<a href="<?php echo U('Index/gglist');?>">
					<div class="lbox_r">
						<i class="bi bi-chevron-right fcc fw" style="font-size: 22px;"></i>
					</div>
					</a>
				</div>

			</div>

		</div>

	</div>		
</body>

<body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>