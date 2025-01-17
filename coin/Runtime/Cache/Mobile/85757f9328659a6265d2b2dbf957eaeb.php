<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"  style="background:#fff;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/base2.css" />
	<link rel="stylesheet" href="/Public/Static/Icoinfont/iconfont.css">
	<script src="/Public/Static/Icoinfont/iconfont.js"></script>
	<title><?php echo ($webname); ?></title>
	<style>
	    ::-webkit-input-placeholder {color: #b5b5b5;font-size: 12px;}
	    ::-moz-placeholder {color: #b5b5b5;font-size: 12px;}
	    input:focus{background:#f5f5f5;outline: 1px solid #f5f5f5;}
	    a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
        .topbox{width:100%;height:50px;border-bottom:1px solid #f5f5f5;padding:5px 10px;position: fixed;top: 0px;background: #fff;}
        .topbox_1{width:80%;height:40px;float:left;padding:0px 10px;}
        .topbox_1_b{width:100%;height:30px;margin-top:5px;background:#f5f5f5;border-radius:15px;padding:0px 5px;}
        .topbox_2{width:20%;height:40px;line-height:40px;float:left;text-align:center;}
        .sybolc{width:80%;height:25px;line-height:25px;margin-top:2px;border:#f5f5f5;background:#f5f5f5;}
        .topbox_1_c{width:20%;height:30px;line-height:30px;text-align:center;float:left;}
        .topbox_1_d{width:80%;height:30px;line-height:30px;float:right;}
        .lmcoin{width:20%;height:30px;line-height:30px;float:left;text-align:center;border:1px solid #000000;border-radius:5px;margin-right:5%;}
        .coinlistbox{width:100%;margin-top:10px;padding:10px;}
        .coinlistbox_top{width:100%;height:30px;line-height:30px;}
        .coinlistbox_info{width:100%;padding:10px 0px;;padding:5px;}
        .coinlistbox_info_list{width:100%;height:40px;border-bottom:1px solid #f5f5f5;margin-top:10px;}
        .coinlistbox_info_list_l{width:30%;height:40px;line-height:40px;float:left;}
        .coinlistbox_info_list_c{width:30%;height:40px;line-height:40px;float:left;}
        .coinlistbox_info_list_r{width:40%;height:40px;line-height:40px;float:right;text-align:right;}
        
	</style>
</head>
<body style="background:#fff;">
	<div class="container-fluid " style="padding:0px;width:100vw;">
        <div class="topbox">
            <div class="topbox_1" style="">
                <div class="topbox_1_b">
                    <div class="topbox_1_c">
                        <i class="bi bi-search"></i>
                    </div>
                    <div class="topbox_1_d">
                        <input type="text" oninput="findc();" id="symbol" class="sybolc" placeholder="<?php echo L('搜索您需要的币种');?>" />
                    </div>
                </div>
            </div>
            <div class="topbox_2" onclick="goback();">
                <span class="fzmmm fch"><?php echo L('取消');?></span>
            </div>
        </div>
        
        <div style="width:100%;height:100px;margin-top:50px;padding:10px;">
            <div style="width:100%;height:30px;line-height:30px;">
                <span class="fzmmm fch" style="padding:5px;border-bottom:3px solid #FCD535;"><?php echo L('热门币种');?></span>
            </div>
            <div style="width:100%;height:70px;padding:20px;">
                <a href="<?php echo U('User/czpage');?>?id=4">
                <div class="lmcoin">
                    <span class="fzmm fch">USDT</span>
                </div>
                </a>
                
                <a href="<?php echo U('User/czpage');?>?id=6">
                <div class="lmcoin">
                    <span class="fzmm fch">BTC</span>
                </div>
                </a>
                
                <a href="<?php echo U('User/czpage');?>?id=7">
                <div class="lmcoin">
                    <span class="fzmm fch">ETH</span>
                </div>
                </a>
                
                <a href="<?php echo U('User/czpage');?>?id=16">
                <div class="lmcoin">
                    <span class="fzmm fch">TRX</span>
                </div>
                </a>
            </div>
        </div>
       
        
        <div class="coinlistbox">
            <div class="coinlistbox_top">
                <span class="fzmmm fch" style="padding:5px;border-bottom:3px solid #FCD535;"><?php echo L('币种列表');?></span>
            </div>
            <div class="coinlistbox_info" id="coinbox">
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><a href="<?php echo U('User/czpage');?>?id=<?php echo ($vo["id"]); ?>">
                <div class="coinlistbox_info_list">
                    <div class="coinlistbox_info_list_l">
                        <span class="fzmmm fcc"><?php echo strtoupper($vo['name']);?></span>
                    </div>
                    <div class="coinlistbox_info_list_c">
                        <span class="fzmm fcc"><?php echo L($vo['title']);?></span>
                    </div>
                    <div class="coinlistbox_info_list_r">
                        <?php if($vo["czstatus"] != 1): ?><span class="fzm fcc"><?php echo L('不支持充币');?></span><?php endif; ?>
                        <i class="bi bi-chevron-right fcc"></i>
                    </div>
                </div>
                </a><?php endforeach; endif; ?>

            </div>
        </div>
        
	</div>	
</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function findc(){
        var symbol = $("#symbol").val();
        $.post("<?php echo U('User/getsymbol');?>",
        {'symbol' : symbol},
        function(data){
            if(data.code == 1){
                $("#coinbox").empty();
                var html = '';
                if(data.info != '' || data.info != null){
                    html += '<a href="/User/czpage.html?id='+ data.info.id +'">'+
                            '<div class="coinlistbox_info_list">'+
                            '<div class="coinlistbox_info_list_l">'+
                            '<span class="fzmmm fcc">' + data.info.uname + '</span>'+
                            '</div>'+
                            '<div class="coinlistbox_info_list_c">'+
                            '<span class="fzmm fcc">' + data.info.title + '</span>'+
                            '</div>'+
                            '<div class="coinlistbox_info_list_r">'+
                            '<i class="bi bi-chevron-right fcc"></i>'+
                            '</div>'+
                            '</div>'+
                            '</a>';
                    $("#coinbox").append(html);        
                }
            }
        });
    }
</script>
<script type="text/javascript">
    function goback(){
        window.location.href = "<?php echo U('User/index');?>";
    }
</script>
</html>