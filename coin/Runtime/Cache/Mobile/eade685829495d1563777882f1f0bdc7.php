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
	input:focus{background:#ebecf0;outline: 1px solid #ebecf0;}
	a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	.no_header{position: fixed;z-index: 9999;background:#fff;padding:0px 10px;top:0px;}
	.txtl{line-height:50px;width:10%;}
	.oreimgbox{width:100%;height:150px;margin-top:50px;}
	.oplist{width:100%;height:50px;background:#000;padding:0px 15px;}
	.listbox{height:50px;line-height:50px;float:left;}
	.emptybox{width:30px;height:50px;float:left;}
	.hsborder{border-bottom:3px solid #FCD535;}
	.btmbox{width:100%;height:60px;background:#f5f5f5;}
	.orebox{width:100%;margin:0px auto;background:#fff;margin-bottom:20px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);padding: 10px;}
	.progress-bar{color: #000;background-color: #f3c420;}
	.progress{height:0.9rem;background-color: #f5f5f5;border-radius: .5rem;}
	.obbox{width:33.33%;height:80px;float:left;}
	.obbox_h{width:100%;height:40px;line-height:40px;}
	</style>
  </head>
  <body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>

			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm"><?php echo L('矿机市场');?></span>
			</div>
            
            <a href="<?php echo U('Orepool/profitlist');?>">
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			    <i class="bi bi-funnel fcy" style="font-size:20px;"></i>
			</div>
			</a>
		</div>

		<div class="oreimgbox">
			<img src="/Upload/public/<?php echo ($webkj); ?>" class="d-block w-100" style="height:150px;" />
		</div>

		<div class="oplist">
			<div class="listbox hsborder" id="zlbtn">
				<span class="fzmm fcc" id="zlbtn_span" style="color:#fff;"><?php echo L('总览');?></span>
			</div>
			<div class="emptybox"></div>
			<div class="listbox" id="dzbtn">
				<span class="fzmm fcc" id="dzbtn_span"><?php echo L('独资');?></span>
			</div>
			<div class="emptybox"></div>
			<div class="listbox" id="gxbtn">
				<span class="fzmm fcc" id="gxbtn_span"><?php echo L('共享');?></span>
			</div>
			<div class="emptybox"></div>
			<div  class="listbox" id="myorebtn">
				<span class="fzmm fcc"  id="myorebtn_span"><?php echo L('我的矿机');?></span>
			</div>
		</div>


        <!--全部矿机-->
		<div id="zlbox" style="width:100%;height:500px;background:#f5f5f5;padding:10px 0px;">
			<?php if(is_array($alist)): foreach($alist as $key=>$av): ?><div class="orebox">
				<div style="width:100%;height:120px;">
					<div style="width:30%;height:120px;line-height: 120px;float:left;text-align: center;">
						<img src="/Upload/public/<?php echo ($av["imgs"]); ?>" style="width:100%;"/>
					</div>
					<div style="width:70%;height:120px;float:left;padding:5px;">
						<p class="fzmmm fcc fw" style="margin-bottom:2px;"><?php echo ($av["title"]); ?></p>
						<p class="fzmm fcc" style="margin-bottom:2px;"><?php echo L('上市时间');?>：<?php echo date("Y-m-d",strtotime($av['addtime']));?></p>
						<p class="fzmm fcc" style="margin-bottom:2px;"><?php echo L('产出币种');?>：<?php echo strtoupper($av['outcoin']);?></p>
						<a href="<?php echo U('Orepool/kjinfo');?>?oid=<?php echo ($av["id"]); ?>">
						<p class="fzmm fcc" style="margin-bottom:0px;text-align:right;">
							<span style="background: #0052fe;color: #fff;padding: 10px;border-radius: 5px;"><?php echo L('立即购买');?></span>
						</p>
						</a>
					</div>
				</div>
				<div style="width:100%;">
					<div class="progress">
					  <div class="progress-bar" role="progressbar" style="width:<?php echo ($av['ycnum'] + $av['sellnum']) / $av['allnum'] * 100;?>%;" aria-valuenow="<?php echo ($av['ycnum'] + $av['sellnum']) / $av['allnum'] * 100;?>" aria-valuemin="0" aria-valuemax="100"><?php echo ($av['ycnum'] + $av['sellnum']) / $av['allnum'] * 100;?>%</div>
					</div>
				</div>
				<div style="width:100%;height:80px;margin-top:15px;padding:0px 15px;">
					<div class="obbox" style="width:40%;">
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo L('矿机单价');?></span>
						</div>
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo ($av["pricenum"]); ?> <?php echo strtoupper($av['pricecoin']);?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo L('矿机产权');?></span>
						</div>
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo ($av["cycle"]); ?> <?php echo L('天');?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo L('矿机类型');?></span>
						</div>
						<div class="obbox_h" style="text-align:right;">
						    <?php if($av["type"] == 1): ?><span class="fzmmm fcy" style="font-weight:bold;"><?php echo L('独资机型');?></span>
						    <?php elseif($av["type"] == 2): ?>
						    <span class="fzmmm fcy" style="font-weight:bold;"><?php echo L('共享机型');?></span><?php endif; ?>
						</div>
					</div>
				</div>
			</div><?php endforeach; endif; ?>
			<div class="btmbox"></div>
		</div>
        

        <!--独资矿机-->
		<div id="dzbox" style="width:100%;padding:10px 0px;display:none;">
			
			<?php if(is_array($blist)): foreach($blist as $key=>$bv): ?><div class="orebox">
				<div style="width:100%;height:120px;">
					<div style="width:30%;height:120px;line-height: 120px;float:left;text-align: center;">
						<img src="/Upload/public/<?php echo ($bv["imgs"]); ?>" style="width:100%;"/>
					</div>

					<div style="width:70%;height:120px;float:left;padding:5px;">
						<p class="fzmmm fcc fw" style="margin-bottom:2px;"><?php echo ($bv["title"]); ?></p>
						<p class="fzmm fcc" style="margin-bottom:2px;"><?php echo L('上市时间');?>：<?php echo date("Y-m-d",strtotime($bv['addtime']));?></p>
						<p class="fzmm fcc" style="margin-bottom:2px;"><?php echo L('产出币种');?>：<?php echo strtoupper($bv['outcoin']);?></p>
						<a href="<?php echo U('Orepool/kjinfo');?>?oid=<?php echo ($bv["id"]); ?>">
						<p class="fzmm fcc" style="margin-bottom:0px;text-align:right;" onclick="buykuangji(<?php echo ($bv["id"]); ?>)">
							<span style="background: #0052fe;color: #fff;padding: 10px;border-radius: 5px;"><?php echo L('立即购买');?></span>
						</p>
						</a>
					</div>

				</div>
				
				<div style="width:100%;">
					<div class="progress">
					  <div class="progress-bar" role="progressbar" style="width:<?php echo $bv['ycnum'] / $bv['allnum'] * 100;?>%;" aria-valuenow="<?php echo $bv['ycnum'] / $bv['allnum'] * 100;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $bv['ycnum'] / $bv['allnum'] * 100;?>%</div>
					</div>
				</div>

				<div style="width:100%;height:80px;margin-top:15px;padding:0px 15px;">
					<div class="obbox" style="width:40%;">
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo L('矿机单价');?></span>
						</div>
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo ($bv["pricenum"]); ?> <?php echo strtoupper($bv['pricecoin']);?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo L('矿机产权');?></span>
						</div>
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo ($bv["cycle"]); ?> <?php echo L('天');?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo L('矿机类型');?></span>
						</div>
						<div class="obbox_h" style="text-align:right;">
							<?php if($bv["type"] == 1): ?><span class="fzmmm fcy" style="font-weight:bold;"><?php echo L('独资机型');?></span>
						    <?php elseif($bv["type"] == 2): ?>
						    <span class="fzmmm fcy" style="font-weight:bold;"><?php echo L('共享机型');?></span><?php endif; ?>
						</div>
					</div>
				</div>
			</div><?php endforeach; endif; ?>
			
			<div class="btmbox"></div>
		</div>

        <!--共享矿机-->
		<div id="gxbox" style="width:100%;height:500px;padding:10px 0px;display:none;">
			
			<?php if(is_array($clist)): foreach($clist as $key=>$cv): ?><div class="orebox">
				<div style="width:100%;height:120px;">
					<div style="width:30%;height:120px;line-height: 120px;float:left;text-align: center;">
						<img src="/Upload/public/<?php echo ($cv["imgs"]); ?>" style="width:100%;"/>
					</div>
					<div style="width:70%;height:120px;float:left;padding:5px;">
						<p class="fzmmm fcc fw" style="margin-bottom:2px;"><?php echo ($cv["title"]); ?></p>
						<p class="fzmm fcc" style="margin-bottom:2px;"><?php echo L('上市时间');?>：<?php echo date("Y-m-d",strtotime($cv['addtime']));?></p>
						<p class="fzmm fcc" style="margin-bottom:2px;"><?php echo L('产出币种');?>：<?php echo strtoupper($cv['outcoin']);?></p>
						<a href="<?php echo U('Orepool/kjinfo');?>?oid=<?php echo ($cv["id"]); ?>">
						<p class="fzmm fcc" style="margin-bottom:0px;text-align:right;" onclick="buykuangji(<?php echo ($cv["id"]); ?>)">
							<span style="background: #0052fe;color: #fff;padding: 10px;border-radius: 5px;"><?php echo L('立即购买');?></span>
						</p>
						</a>
					</div>
				</div>
				<div style="width:100%;">
					<div class="progress">
					  <div class="progress-bar" role="progressbar" style="width:<?php echo $cv['ycnum'] / $cv['allnum'] * 100;?>%;" aria-valuenow="<?php echo $cv['ycnum'] / $cv['allnum'] * 100;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $cv['ycnum'] / $cv['allnum'] * 100;?>%</div>
					</div>
				</div>
				<div style="width:100%;height:80px;margin-top:15px;padding:0px 15px;">
					<div class="obbox" style="width:40%;">
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo L('矿机单价');?></span>
						</div>
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo ($bv["pricenum"]); ?> <?php echo strtoupper($bv['pricecoin']);?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo L('矿机产权');?></span>
						</div>
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo ($bv["cycle"]); ?> <?php echo L('天');?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo L('矿机类型');?></span>
						</div>
						<div class="obbox_h" style="text-align:right;">
							<?php if($cv["type"] == 1): ?><span class="fzmmm fcy" style="font-weight:bold;"><?php echo L('独资机型');?></span>
						    <?php elseif($cv["type"] == 2): ?>
						    <span class="fzmmm fcy" style="font-weight:bold;"><?php echo L('共享机型');?></span><?php endif; ?>
						</div>
					</div>
				</div>
			</div><?php endforeach; endif; ?>
			
			<div class="btmbox"></div>
		</div>

        <!--我的矿机-->
		<div id="myorebox" style="width:100%;height:500px;padding:10px 0px;display:none;">
			<?php if(empty($mylist)): ?><div class="orebox">
			    <div style="width:100%;height:120px;line-height:120px;text-align:center;">
			        <span class="fzmm fcc"><?php echo L('暂时没有矿机');?></span>
			    </div>
			</div>
			<?php else: ?>
			<?php if(is_array($mylist)): foreach($mylist as $key=>$myvo): ?><a href="<?php echo U('Orepool/profitline');?>?id=<?php echo ($myvo["id"]); ?>">
			<div class="orebox">
				<div style="width:100%;height:120px;">
					<div style="width:30%;height:120px;line-height: 120px;float:left;text-align: center;">
						<img src="/Upload/public/<?php echo ($myvo["imgs"]); ?>" style="width:100%;"/>
					</div>
					<div style="width:70%;height:120px;float:left;padding:5px;">
						<p class="fzmmm fcc fw" style="margin-bottom:2px;"><?php echo ($myvo["kjtitle"]); ?></p>
						<p class="fzmm fcc" style="margin-bottom:2px;"><?php echo L('购买时间');?>：<?php echo date("Y-m-d",strtotime($myvo['addtime']));?></p>
						<p class="fzmm fcc" style="margin-bottom:2px;"><?php echo L('到期时间');?>：<?php echo date("Y-m-d",strtotime($myvo['endtime']));?></p>
						<?php if($myvo["status"] == 1): ?><p class="fzmm fcc" style="margin-bottom:0px;text-align:right;margin-top: 5px;">
							<span style="background:#0ecb81;padding:5px 10px;border-radius: 5px;color:#fff;"><?php echo L('正常');?></span>
						</p>
						<?php elseif($myvo["status"] == 2): ?>
						<p class="fzmm fcc" style="margin-bottom:0px;text-align:right;margin-top: 5px;">
							<span style="background:#f5465c;padding:5px 10px;border-radius: 5px;color:#fff;"><?php echo L('停止');?></span>
						</p>
						<?php elseif($myvo["status"] == 3): ?>
						<p class="fzmm fcc" style="margin-bottom:0px;text-align:right;margin-top: 5px;">
							<span style="background:#f5465c;padding:5px 10px;border-radius: 5px;color:#fff;"><?php echo L('过期');?></span>
						</p><?php endif; ?>
					</div>
				</div>

				<div style="width:100%;height:80px;margin-top:15px;padding:0px 15px;">
					<div class="obbox" style="width:30%;">
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo L('产出币种');?></span>
						</div>
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo strtoupper($myvo['outcoin']);?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo L('收益类型');?></span>
						</div>
						<div class="obbox_h" style="text-align:center;">
						    <?php if($myvo["outtype"] == 1): ?><span class="fzmm fcc"><?php echo L('按产值');?></span>
							<?php elseif($myvo["outtype"] == 2): ?>
							<span class="fzmm fcc"><?php echo L('恒定币量');?></span><?php endif; ?>
						</div>
					</div>
					<?php if($myvo["outtype"] == 1): ?><div class="obbox" style="width:40%;">
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo L('日产值');?></span>
						</div>
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo ($myvo["outusdt"]); ?> USDT</span>
						</div>
					</div>   
					<?php elseif($myvo["outtype"] == 2): ?>
					<div class="obbox" style="width:40%;">
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo L('日产币量');?></span>
						</div>
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo ($myvo["outnum"]); ?> <?php echo strtoupper($myvo['outcoin']);?></span>
						</div>
					</div><?php endif; ?>
				</div>

			</div>
			</a><?php endforeach; endif; endif; ?>
			
			<div class="btmbox"></div>
		</div>




	</div>	



	
	<!--底部-->
	<div class="footer">

		<a href="<?php echo U('Index/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height: 35px;" >
					<?php
 if($select == 'index') { echo '<img src="/Public/Static/Icoinfont/icon/nav-1-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-1.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('首页');?></span>
				</div>
			</div>
		</a>

		<a href="<?php echo U('Trade/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'trade') { echo '<img src="/Public/Static/Icoinfont/icon/nav-2-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-2.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('行情');?></span>
				</div>
			</div>
		</a>

		<a href="/Trade/trans?sytx=BTC/USDT">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'trans') { echo '<img src="/Public/Static/Icoinfont/icon/nav-3-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-3.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcy"><?php echo L('交易');?></span>
				</div>
			</div>
		</a>

		<a href="<?php echo U('Contract/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'contract') { echo '<img src="/Public/Static/Icoinfont/icon/nav-4-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-4.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('合约');?></span>
				</div>
			</div>
		</a>

		<a href="<?php echo U('User/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'user') { echo '<img src="/Public/Static/Icoinfont/icon/nav-5-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-5.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('资产');?></span>
				</div>
			</div>
		</a>


	</div>


</body>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>

<script type="text/javascript">
	$("#zlbtn").click(function(){
		$("#zlbtn").addClass("hsborder");
		$("#zlbtn_span").css("color","#fff");
		$("#zlbox").show();
		$("#dzbtn").removeClass("hsborder");
		$("#dzbtn_span").css("color","#000000");
		$("#dzbox").hide();
		$("#gxbtn").removeClass("hsborder");
		$("#gxbtn_span").css("color","#000000");
		$("#gxbox").hide();
		$("#myorebtn").removeClass("hsborder");
		$("#myorebtn_span").css("color","#000000");
		$("#myorebox").hide();
	});
	$("#dzbtn").click(function(){
		$("#dzbtn").addClass("hsborder");
		$("#dzbtn_span").css("color","#fff");
		$("#zlbox").hide();
		$("#zlbtn").removeClass("hsborder");
		$("#zlbtn_span").css("color","#000000");
		$("#dzbox").show();
		$("#gxbtn").removeClass("hsborder");
		$("#gxbtn_span").css("color","#000000");
		$("#gxbox").hide();
		$("#myorebtn").removeClass("hsborder");
		$("#myorebtn_span").css("color","#000000");
		$("#myorebox").hide();
	});
	$("#gxbtn").click(function(){
		$("#dzbtn").removeClass("hsborder");
		$("#dzbtn_span").css("color","#000000");
		$("#zlbox").hide();
		$("#zlbtn").removeClass("hsborder");
		$("#zlbtn_span").css("color","#000000");
		$("#dzbox").hide();
		$("#gxbtn").addClass("hsborder");
		$("#gxbtn_span").css("color","#fff");
		$("#gxbox").show();
		$("#myorebtn").removeClass("hsborder");
		$("#myorebtn_span").css("color","#000000");
		$("#myorebox").hide();
	});
	$("#myorebtn").click(function(){
		$("#dzbtn").removeClass("hsborder");
		$("#dzbtn_span").css("color","#000000");
		$("#zlbox").hide();
		$("#zlbtn").removeClass("hsborder");
		$("#zlbtn_span").css("color","#000000");
		$("#dzbox").hide();
		$("#gxbtn").removeClass("hsborder");
		$("#gxbtn_span").css("color","#000000");
		$("#gxbox").hide();
		$("#myorebtn").addClass("hsborder");
		$("#myorebtn_span").css("color","#fff");
		$("#myorebox").show();
	});
</script>

<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>