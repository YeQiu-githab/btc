<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/base2.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/nologed.css" />
	<link rel="stylesheet" href="/Public/Static/Icoinfont/iconfont.css">
	<script src="/Public/Static/Icoinfont/iconfont.js"></script>
	<title><?php echo ($webname); ?></title>
	<style>
	    ::-webkit-input-placeholder {color: #b5b5b5;font-size: 12px;}
	    ::-moz-placeholder {color: #b5b5b5;font-size: 12px;}
	    input:focus{background:#f5f5f5;outline: 1px solid #f5f5f5;}
	    a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	    .no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;line-height: 50px;background:#fff;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);}
	    .contentbox{width:100%;height:600px;margin-top:45px;padding:5px 15px;}
	    .contentbox_top{width:100%;height:50px;line-height:50px;text-align:left;}
        .btitle{width:100%;height:35px;line-height:35px;text-align:center;background:#fff;margin-top:10px;border-radius:15px;}
        .addbox{width:100%;height:120px;background:#fff;margin-top:20px;border-radius:15px;}
        .addressbox{width:100%;height:40px;line-height:40px;background:#f9f9f9;padding:0px 15px;border-top-left-radius:10px;border-top-right-radius:10px;}
        .address{width:100%;height:80px;margin-top:10px;padding:10px;word-wrap:break-word;word-break:normal; }
        .btnbox{width:100%;height:70px;background:#fff;position:fixed;bottom:0px;}
        .btnaddress{width:92%;height:40px;line-height:40px;background: #0052fe;color: #fff;margin:0px auto;text-align:center;margin-top:15px;border-radius:10px;}
	</style>
</head>
<body>
	<div class="container-fluid " style="padding:0px;width:100vw;">

		<div class="no_header">
			<div class="fl allhg txtl" style="width: 10%;">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>

			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm"><?php echo L('提币地址管理');?></span>
			</div>
            
            <a href="<?php echo U('User/txcoin');?>">
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			    <span><?php echo L('添加');?></span>
			</div>
			</a>
		</div>
		
		<div class="contentbox">
            <?php if(empty($adrlist)): ?><div style="width:100%;height:300px;line-height:300px;text-align:center;">
                <span class="fzmm fch"><?php echo L('没有保存地址');?></span>
            </div>
            <?php else: ?>
            <?php if(is_array($adrlist)): foreach($adrlist as $key=>$vo): ?><div class="addbox">
                <div class="addressbox">
                    <div style="width:80%;height:40px;line-height:40px;float:left;">
                        <span class="fzmmm fch"><?php echo strtoupper($vo['name']);?>-<?php echo ($vo["czline"]); ?>  (<?php echo ($vo["remark"]); ?>)</span>
                    </div>
                    
                    <div onclick="deladdress(<?php echo ($vo["id"]); ?>);" style="width:20%;height:40px;line-height:40px;float:right;text-align:right;">
                        <i class="bi bi-x-circle fzmmm fcy"></i>
                    </div>
                    
                </div>
                <div class="address">
                    <span class="fzmmm fch"><?php echo ($vo["addr"]); ?></span>
                </div>
            </div><?php endforeach; endif; endif; ?>
		</div>
		
		<div style="width:100%;height:100px;background:#f5f5f5;"></div>
	</div>

</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function deladdress(id){
        var id = id;
        if(id <= 0){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        $.post("<?php echo U('User/deladdress');?>",
        {'aid':id},
        function(data){
            if(data.code == 1){
                layer.msg(data.info);
                setTimeout(function(){
                    window.location.reload();
                },2000);
            }else{
                layer.msg(data.info);return false;
            }
        });
    }
</script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>