<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" style="background:#fff;">
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
	input:focus{background:#fff;outline: 1px solid #fff;}
	a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	.no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;background: #fff;}
	.txtl{line-height:50px;width:30%;}
	.contentbox{width:100%;background:#fff;padding:10px;}
	.content_title{width:100%;height:40px;line-height:40px;margin-top:50px;position: fixed;z-index: 9999;top:0px;padding:0px 10px;background:#fff;border-bottom:1px solid #f5f5f5;}
	.content_title_l{width:70%;height:40px;line-height:40px;float:left;}
	.content_title_r{width:30%;height:40px;line-height:40px;float:right;padding:0px 5px;}
	.tleft{text-align:left;}
	.tright{text-align:right;}
	.tradebox{width:100%;height:400px;background:#fff;}
	.tradebox_l{width:58%;height:400px;float:left;}
	.tradebox_r{width:40%;height:400px;float:right;}
	.tradebox_l_btn{width:100%;height:36px;}
	.tradebox_l_buybtn{width:48%;height:36px;line-height:36px;float:left;text-align:center;border-radius:5px;}
	.tradebox_l_sellbtn{width:48%;height:36px;line-height:36px;float:right;text-align:center;border-radius:5px;}
	.bggreen{background:#0ecb81;}
	.green{color:#0ecb81;}
    .bgred{background:#f5465c;}
    .red{color:#f5465c;}
    .bghc{background:#f5f5f5;}
    .cfff{color:#fff;}
    .c000{color:#000;}
    .formbox{width:100%;height:350px;margin-top:15px;}
    .formbox_op{width:100%;height:30px;}
    .formbox_op_list{width:50%;height:30px;line-height:30px;float:left;text-align:center;}
    .inputbox{width:100%;height:36px;border:1px solid #f5f5f5;border-radius:5px;margin-top:10px;}
	.inputbox_float{width:60%;height:36px;float:left;}
	.xjinput{width:90%;background:#fff;border:#fff;margin-top:7px;padding:0px 10px;}
	.input_bi{width:50%;height:26px;line-height:26px;float:left;text-align:center;margin-top:5px;}
	.borderright{border-right:1px solid #f5f5f5;}
	.bistyle{font-size:24px;font-weight:bold;}
	.blbox{width:100%;height:30px;margin-top:15px;}
	.blbox_1{width:20%;height:30px;float:left;margin-right:6%;}
	.blbox_2{width:20%;height:30px;float:left;}
	.blbox_3{width:100%;height:10px;}
	.bgf5{background:#f5f5f5;}
	.blbox_4{width:100%;height:20x;line-height:20px;text-align:center;}
	.tradebox_title{width:50%;height:20px;line-height:20px;float:left;}
	.tl{text-align:left;}
	.tr{text-align:right;}
	.tc{text-align:center;}
	.fl{float:left;}
	.fr{float:right;}
	.trade_listbox{width:100%;height:160px;padding:5px;overflow:hidden;}
	.trade_listpricebox{width:100%;height:40px;line-height:40px;padding:0px 10px;}
	.trade_list{width:50%;height:30px;line-height:30px;float:left;}
	.dongbox{position:fixed;z-index:9999;display:none;top:0px;width:100%;height:100vh;background:rgba(0,0,0,0.2);}
	.dong_con{width:80%;height:100vh;background:#fff;margin-top:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;padding:20px 15px 10px 20px;float:left;}
	.dong_title{width:100%;height:40px;line-height:40px;}
	.dong_title_span{font-size:18px;font-weight:500;}
	.dong_find_box{width:100%;height:30px;background:#f5f5f5;border-radius:10px;}
	.dong_find_box_img{width:20%;height:30px;line-height:30px;float:left;text-align:center;}
	.dong_input_box{width:80%;height:30px;float:left;}
	.dong_symbox{width:90%;height:20px;border:none;background:#f5f5f5;margin-top:5px;}
	.dong_sel_box{width:100%;height:30px;border-bottom:1px solid #f5f5f5;}
	.dong_sel_span{display:block;width:35px;height:30px;line-height:30px;border-bottom:2px solid #FCD535;font-size:14px;text-align:center;font-size:14px;}
	.symbol_list{width:100%;height:450px;overflow-y: scroll;margin-top:10px;}
	.sy_list_box{width:100%;height:30px;}
	.sy_list_boxl{width:35%;height:30px;line-height:30px;float:left;text-align:left;}
	.sy_list_boxr{width:30%;height:30px;line-height:30px;float:right;text-align:right;}
	.order_title{display: inline-block;margin-right: 20px;font-weight: 1000;}
	.FCD535{border-bottom: 2px solid #FCD535;}
	.fccbox{width:100%;height:15px;background:#f5f5f5;}
	.wtlistbox{width:100%;padding:0px 10px;} 
	.o_title_box{width:50%;height:40px;line-height:40px;border-bottom:1px solid #f5f5f5;}
	.tlistbox{width:100%;clear:both;padding:10px 0px;}
	.tlistbox_1{width:100%;height:100px;border-bottom:1px solid #f5f5f5;}
	.tlistbox_2{width:100%;height:30px;}
	.tlistbox_3{width:80%;height:30px;line-height:30px;}
	.tlistbox_4{width:20%;height:30px;line-height:30px;}
	.tlistbox_5{padding:5px 10px;background:#fcfcfc;border-radius:5px;}
	.tlistbox_6{width:100%;height:60px;}
	.tlistbox_7{width:33.33%;height:60px;}
	.tlistbox_8{width:100%;height:30px;line-height:30px;}
	.tlistbox_9{width:100%;height:30px;line-height:20px;}
	</style>
  </head>
  <body style="background:#fff;">
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
            <div class="fl allhg txtl">
				<span style="font-size:20px;font-weight:bold;color:#000;"><?php echo L('币币交易');?></span>
			</div>
			<div class="fl allhg" style="width:30%;"></div>
			<div class="fr allhg txtr" style="line-height:50px;width:10%;"></div>
		</div>
		<div class="content_title">
		    <div  class="content_title_l tleft">
		 
		        <i class="bi bi-text-indent-left fch" style="font-size:22px;" id="centerbox"></i>
		        
		        <span style="font-size:18px;font-weight:bold;color:#000;" id="marketbox"><?php echo ($coinname); ?></span>
		        <span style="color:#f5465c;" id="changebox">--</span>
		    </div>
		    
		    <a href="/Trade/trans.html?sytx=<?php echo ($coinname); ?>" >
		    <div  class="content_title_r tright">
		        <i class="bi bi-bar-chart-line" style="font-size:22px;color:#FCD535;"></i>
		    </div>
		    </a>
		</div>
		
		
		<div class="contentbox" style="margin-top:90px;">
		    <div class="tradebox">
		        <div class="tradebox_l">
		            
		            <div class="tradebox_l_btn">
		                <div class="tradebox_l_buybtn bggreen" id="buybtn">
		                    <span class="fzmm cfff" id="buybtnspan"><?php echo L('买入');?></span>
		                </div>
		                <div class="tradebox_l_sellbtn bghc" id="sellbtn">
		                    <span  class="fzmm c000" id="sellbtnspan"><?php echo L('卖出');?></span>
		                </div>
		            </div>
		            
		            <!--买入框-->
		            <div class="formbox" id="buycoinbox" style="display:block;">
		                <div class="formbox_op">
		                    <div class="formbox_op_list" id="buyxjbtn">
		                        <span class="fzmm fcy" id="xjspan"><?php echo L('限价委托');?></span>
		                    </div>
		                    <div class="formbox_op_list" id="buysjbtn">
		                        <span class="fzmm fcc" id="sjspan"><?php echo L('市价委托');?></span>
		                    </div>
		                </div>
		                
		                <!--限价委托单价框-->
		                <div class="inputbox" id="xjbox">
		                    <div class="inputbox_float">
		                        <input type="text" id="newprice" class="fcc xjinput" value=""  />
		                    </div>
		                    <div class="inputbox_float" style="width:40%;">
		                        <div class="input_bi borderright" id="dash_buyprice">
		                            <i class="bi bi-dash bistyle"></i>
		                        </div>
		                        <div class="input_bi" id="plus_buyprice">
		                            <i class="bi bi-plus bistyle"></i>
		                        </div>
		                    </div>
		                </div>
		                
		                <div class="inputbox" style="background: #f5f5f5;display:none" id="sjbox">
		                    <div class="inputbox_float">
		                        <input type="text"  class="fcc xjinput" placeholder="<?php echo L('按市场最优价');?>" style="background:#f5f5f5;"  />
		                    </div>
		                </div>
		                
		                <div class="inputbox" id="sjnumbox" style="display:none;border:none;"></div>
		                
		                <div class="inputbox" id="xjnumbox" style="display:block;">
		                    <div class="inputbox_float">
		                        <input type="text" id="buynum" oninput="buynumfc();" class="fcc xjinput" value="" placeholder="<?php echo L('输入数量');?>"  autocomplete="off" step="1"  min="0" onkeyup="this.value= this.value.match(/\d+(\.\d{0,6})?/) ? this.value.match(/\d+(\.\d{0,6})?/)[0] : ''" />
		                    </div>
		                    <div class="inputbox_float" style="width:40%;">
		                        <div class="input_bi borderright" id="dash_buynum">
		                            <i class="bi bi-dash bistyle"></i>
		                        </div>
		                        <div class="input_bi" id="plus_buynum">
		                            <i class="bi bi-plus bistyle"></i>
		                        </div>
		                    </div>
		                </div>
		                
		                
		                <div class="blbox">
		                    <div class="blbox_1" onclick="buyblfc(1,25);">
		                        <div class="blbox_3 bgf5" id="buybl_1"></div>
		                        <div class="blbox_4">
		                            <span class="fzm fcc">25%</span>
		                        </div>
		                    </div>
		                    <div class="blbox_1" onclick="buyblfc(2,50);">
		                        <div class="blbox_3 bgf5" id="buybl_2"></div>
		                        <div class="blbox_4">
		                            <span class="fzm fcc">50%</span>
		                        </div>
		                    </div>
		                    <div class="blbox_1" onclick="buyblfc(3,75);">
		                        <div class="blbox_3 bgf5" id="buybl_3"></div>
		                        <div class="blbox_4">
		                            <span class="fzm fcc">75%</span>
		                        </div>
		                    </div>
		                    <div class="blbox_2" onclick="buyblfc(4,100);">
		                        <div class="blbox_3 bgf5" id="buybl_4"></div>
		                        <div class="blbox_4">
		                            <span class="fzm fcc">100%</span>
		                        </div>
		                    </div>
		                </div>
		                
		                <div style="width:100%;height:30px;margin-top:20px;">
		                    <div style="width:30%;height:30px;line-height:30px;float:left;">
		                        <span class="fzm fcc"><?php echo L('可用');?></span>
		                    </div>
		                    <div style="width:70%;height:30px;line-height:30px;float:left;text-align:right;">
		                        <span class="fzm fcc"><?php echo ($usdt_blance); ?></span>
		                        <span class="fzm fcc">USDT</span>
		                    </div>
		                </div>
		                
		                <div class="inputbox">
		                    <div class="inputbox_float">
		                        <input type="text" id="buyusdt" oninput="buyusdtfc();" class="fcc xjinput" value="" placeholder="<?php echo L('交易额');?>"  autocomplete="off" step="1"  min="0" onkeyup="this.value= this.value.match(/\d+(\.\d{0,6})?/) ? this.value.match(/\d+(\.\d{0,6})?/)[0] : ''" />
		                    </div>
		                    <div class="inputbox_float" style="width:40%;text-align:center;line-height:36px;">
		                        <span class="fzmm fcc">USDT</span>
		                    </div>
		                </div>
		                
		                <?php if($uid >= 1): ?><div onclick="bb_buycoin(1);" style="width:100%;height:36px;line-height:36px;background:#0ecb81;text-align:center;color:#fff;border-radius:5px;margin-top:20px;">
		                    <span class="fzmm" style="color:#fff;"><?php echo L('买入');?></span>
		                </div>
		                <?php else: ?>
		                <a href="<?php echo U('Login/index');?>">
		                <div style="width:100%;height:36px;line-height:36px;background:#0ecb81;text-align:center;color:#fff;border-radius:5px;margin-top:20px;">
		                    <span class="fzmm" style="color:#fff;"><?php echo L('登陆');?></span>
		                </div>
		                </a><?php endif; ?>
		                
		                
		            </div>
		            
		            
		            
		            <!--卖出框-->
		            <div class="formbox" id="sellcoinbox" style="display:none;">
		                <div class="formbox_op">
		                    <div class="formbox_op_list" id="sell_xjbtn">
		                        <span class="fzmm fcy" id="sell_xjspan"><?php echo L('限价委托');?></span>
		                    </div>
		                    <div class="formbox_op_list" id="sell_sjbtn">
		                        <span class="fzmm fcc" id="sell_sjspan"><?php echo L('市价委托');?></span>
		                    </div>
		                </div>
		                
		                <!--限价委托单价框-->
		                <div class="inputbox" id="sell_xjbox">
		                    <div class="inputbox_float">
		                        <input type="text" id="sell_newprice" class="fcc xjinput" value=""  />
		                    </div>
		                    <div class="inputbox_float" style="width:40%;">
		                        <div class="input_bi borderright" id="dash_sellprice">
		                            <i class="bi bi-dash bistyle"></i>
		                        </div>
		                        <div class="input_bi" id="plus_sellprice">
		                            <i class="bi bi-plus bistyle"></i>
		                        </div>
		                    </div>
		                </div>
		                
		                <div class="inputbox" style="background: #f5f5f5;display:none" id="sell_sjbox">
		                    <div class="inputbox_float">
		                        <input type="text"  class="fcc xjinput" placeholder="<?php echo L('按市场最优价');?>" style="background:#f5f5f5;"  />
		                    </div>
		                </div>
		                
		                <div class="inputbox" id="sell_sjnumbox" style="display:none;border:none;"></div>
		                
		                <div class="inputbox" id="sell_xjnumbox" style="display:block;">
		                    <div class="inputbox_float">
		                        <input type="text" id="sell_num" oninput="sellnumfc();" class="fcc xjinput" value="" placeholder="<?php echo L('输入数量');?>" autocomplete="off" step="1"  min="0" onkeyup="this.value= this.value.match(/\d+(\.\d{0,6})?/) ? this.value.match(/\d+(\.\d{0,6})?/)[0] : ''" />
		                    </div>
		                    <div class="inputbox_float" style="width:40%;">
		                        <div class="input_bi borderright" id="dash_sellnum">
		                            <i class="bi bi-dash bistyle"></i>
		                        </div>
		                        <div class="input_bi" id="plus_sellnum">
		                            <i class="bi bi-plus bistyle"></i>
		                        </div>
		                    </div>
		                </div>
		                
		                
		                <div class="blbox">
		                    <div class="blbox_1" onclick="sellblfc(1,25);">
		                        <div class="blbox_3 bgf5" id="sellbl_1"></div>
		                        <div class="blbox_4">
		                            <span class="fzm fcc">25%</span>
		                        </div>
		                    </div>
		                    <div class="blbox_1" onclick="sellblfc(2,50);">
		                        <div class="blbox_3 bgf5" id="sellbl_2"></div>
		                        <div class="blbox_4">
		                            <span class="fzm fcc">50%</span>
		                        </div>
		                    </div>
		                    <div class="blbox_1" onclick="sellblfc(3,75);">
		                        <div class="blbox_3 bgf5" id="sellbl_3"></div>
		                        <div class="blbox_4">
		                            <span class="fzm fcc">75%</span>
		                        </div>
		                    </div>
		                    <div class="blbox_2" onclick="sellblfc(4,100);">
		                        <div class="blbox_3 bgf5" id="sellbl_4"></div>
		                        <div class="blbox_4">
		                            <span class="fzm fcc">100%</span>
		                        </div>
		                    </div>
		                </div>
		                
		                <div style="width:100%;height:30px;margin-top:20px;">
		                    <div style="width:30%;height:30px;line-height:30px;float:left;">
		                        <span class="fzm fcc"><?php echo L('可用');?></span>
		                    </div>
		                    <div style="width:70%;height:30px;line-height:30px;float:left;text-align:right;">
		                        <span class="fzm fcc"><?php echo ($coin_blance); ?></span>
		                        <span class="fzm fcc"><?php echo ($symbol); ?></span>
		                    </div>
		                </div>
		                
		                <div class="inputbox" id="sellxjusdt">
		                    <div class="inputbox_float">
		                        <input type="text" id="sell_usdt" oninput="sellusdtfc();" class="fcc xjinput" value="" placeholder="<?php echo L('交易额');?>" autocomplete="off" step="1"  min="0" onkeyup="this.value= this.value.match(/\d+(\.\d{0,6})?/) ? this.value.match(/\d+(\.\d{0,6})?/)[0] : ''" />
		                    </div>
		                    <div class="inputbox_float" style="width:40%;text-align:center;line-height:36px;">
		                        <span class="fzmm fcc">USDT</span>
		                    </div>
		                </div>
		                
		                <div class="inputbox" id="sellxjcoin" style="display:none;">
		                    <div class="inputbox_float">
		                        <input type="text" id="sell_coin" oninput="sellcoinfc();" class="fcc xjinput" value="" placeholder="<?php echo L('交易额');?>"  autocomplete="off" step="1"  min="0" onkeyup="this.value= this.value.match(/\d+(\.\d{0,6})?/) ? this.value.match(/\d+(\.\d{0,6})?/)[0] : ''" />
		                    </div>
		                    <div class="inputbox_float" style="width:40%;text-align:center;line-height:36px;">
		                        <span class="fzmm fcc"><?php echo ($symbol); ?></span>
		                    </div>
		                </div>
		                
		                
		                <?php if($uid >= 1): ?><div  onclick="bb_sellcoin(2);" style="width:100%;height:36px;line-height:36px;background:#f5465c;text-align:center;color:#fff;border-radius:5px;margin-top:20px;">
		                    <span class="fzmm" style="color:#fff;"><?php echo L('卖出');?></span>
		                </div>
		                <?php else: ?>
		                <a href="<?php echo U('Login/index');?>">
		                <div style="width:100%;height:36px;line-height:36px;background:#f5465c;text-align:center;color:#fff;border-radius:5px;margin-top:20px;">
		                    <span class="fzmm" style="color:#fff;"><?php echo L('登陆');?></span>
		                </div>
		                </a><?php endif; ?>
		            
		            </div>
 
		        </div>
		        
		        <div class="tradebox_r">
		            <div style="width:100%;height:20px;padding:0px 5px;">
		                <div class="tradebox_title tl">
		                    <span class="fcc fzm"><?php echo L('价格');?></span>
		                </div>
		                <div class="tradebox_title tr">
		                    <span class="fcc fzm"><?php echo L('数量');?></span>
		                </div>
		            </div>
		            
		            <div class="trade_listbox" id="tradesellbox">
		                <div style="width:100%;height:30px;">
		                    <div class="trade_list tl">
		                        <span class="red fzm">--</span>
		                    </div>
		                    <div class="trade_list tr">
		                        <span class="red fzm">--</span>
		                    </div>
		                </div>
		            </div>
		            <div class="trade_listpricebox" id="closeprice">
		                <span>--</span>
		            </div>
		            <div class="trade_listbox" id="tradebuybox">
		                <div style="width:100%;height:30px;">
		                    <div class="trade_list tl">
		                        <span class="green fzm">--</span>
		                    </div>
		                    <div class="trade_list tr">
		                        <span class="green fzm">--</span>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    
		    
		</div>
		
		<div class="fccbox"></div>
		
		
		<div class="wtlistbox">
		    <div class="o_title_box fl">
		        <span class="fzmmm order_title FCD535"><?php echo L('限价委托');?></span>
		    </div>
		    
		    
		    <div class="o_title_box fr tr">
		        <a href="<?php echo U('Trade/tradebill');?>">
		        <i class="bi bi-journal-text fccm" style="font-weight:bold;font-size:18px;"></i>
		        <span class="fzmm fcc"><?php echo L('全部委托');?></span>
		        </a>
		    </div>
		    
		    <?php if(empty($list)): ?><div style="width:100%;height:200px;line-height:200px;text-align:center;">
		        <span class="fcc fzmmm"><?php echo L('没有委托订单');?></span>
		    </div>
		    <?php else: ?>
		    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="tlistbox">
		        <div class="tlistbox_1">
		            <div class="tlistbox_2">
		                <div class="tlistbox_3 fl">
		                    <?php if($vo["type"] == 1): ?><span class="fzmmm green"><?php echo L('购买');?></span>
		                    <?php elseif($vo["type"] == 2): ?>
		                    <span class="fzmmm red"><?php echo L('出售');?></span><?php endif; ?>
		                    <span class="fzmmm fch" style="font-weight:bold;"><?php echo ($vo["symbol"]); ?></span>
		                    <span class="fzm fcc"><?php echo ($vo["addtime"]); ?></span>
		                </div>
		                
		                <div class="tlistbox_4 fr tr" onclick="clearorder(<?php echo ($vo["id"]); ?>);">
		                    <span class="tlistbox_5 fcy"><?php echo L('取消');?></span>
		                </div>
		            </div>
		            <div class="tlistbox_6">
		                <div class="tlistbox_7 fl">
		                    <div class="tlistbox_8 tl">
		                        <span class="fzm fcc"><?php echo L('价格');?>(USDT)</span>
		                    </div>
		                    <div class="tlistbox_9 tl">
		                        <span class="fzmm fcc"><?php echo ($vo["xjprice"]); ?></span>
		                    </div>
		                </div>
		                <?php if($vo["type"] == 1): ?><div class="tlistbox_7 fl">
		                    <div class="tlistbox_8 tc">
		                        <span class="fzm fcc"><?php echo L('数量');?>(USDT)</span>
		                    </div>
		                    <div class="tlistbox_9 tc">
		                        <span class="fzmm fcc"><?php echo ($vo["usdtnum"]); ?></span>
		                    </div>
		                </div>
		                <?php elseif($vo["type"] == 2): ?>
		                <div class="tlistbox_7 fl">
		                    <div class="tlistbox_8 tc">
		                        <span class="fzm fcc"><?php echo L('数量');?>(<?php echo ($vo["coin"]); ?>)</span>
		                    </div>
		                    <div class="tlistbox_9 tc">
		                        <span class="fzmm fcc"><?php echo ($vo["coinnum"]); ?></span>
		                    </div>
		                </div><?php endif; ?>
		                
		                <div class="tlistbox_7 fl">
		                    <div class="tlistbox_8 tr">
		                        <span class="fzm fcc"><?php echo L('实际成交');?>(<?php echo ($vo["coin"]); ?>)</span>
		                    </div>
		                    <div class="tlistbox_9 tr">
		                        <span class="fzmm fcc"><?php echo ($vo["coinnum"]); ?></span>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div><?php endforeach; endif; endif; ?>
		</div>
		
		<div style="width:100%;height:120px;"></div>
		


	</div>
	
	
		<!---------交易选择弹窗---------->
	<div class="dongbox"  id="showdong" style="display:none;">
	    <div class="dong_con">
	        <div style="width:100%;position:relative;z-index:9999999;top:0px;">
	            <div class="dong_title">
	                <span class="dong_title_span" style="font-weight: bold;"><?php echo L('币币市场');?></span>
	            </div>

	            <div class="dong_sel_box">
	                <span class="fcc dong_sel_span"><?php echo L('全部');?></span>
	            </div>
	        </div>
	        
	        
	        <div class="symbol_list" id="smybolbox">
	            <div style="width:100%;height:100px;line-height:100px;text-align:center;">
                    <span class="fzmm fcc"><?php echo L('没有获取数据');?></span>
                </div>
	        </div>
	    </div>
	    
	    <div style="width:20%;height:100vh;float:left;" id="hidedong"></div>
	</div>


    <input type="hidden" id="buy_usermoney" value="<?php echo ($usdt_blance); ?>" />
    <input type="hidden" id="buy_usercoin" value="<?php echo ($coin_blance); ?>" />
    
    <input type="hidden" id="symbolbox" value="<?php echo ($coinname); ?>"  />
    <!--交易限价单价-->
	<input type="hidden" id="mprice" value="" />
	<!--交易限价买卖币的数量-->
	<input type="hidden" id="mnum" value="" />
	<!--交易限价买卖USDT的数量-->
	<input type="hidden" id="musdt" value="" />
	<!--购买类型，1限价2市价-->
	<input type="hidden" id="buytype" value="1" />
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
					<span class="fzm fcy"><?php echo L('行情');?></span>
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
					<span class="fzm fcch"><?php echo L('交易');?></span>
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
    function clearorder(id){
        var oid = id;
        $.post("<?php echo U('Trade/clearorder');?>",
        {"oid":oid},
        function(data){
            if(data.code == 1){
                layer.msg(data.info);
                setTimeout(function(args){
                    window.location.reload();
                },2000);
            }else{
                layer.msg(data.info);return false;
            }    
        });
    }
</script>
<script type="text/javascript">
    function bb_sellcoin(type){
        var type = type;
        if(type <= 0){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        var symbol = $("#symbolbox").val();
        var mprice = $("#sell_newprice").val();
        var musdt = $("#musdt").val();
        var selltype = $("#buytype").val();
        if(selltype == 1){
            var mnum = $("#sell_num").val();
            if(mprice < 0){
                layer.msg("<?php echo L('缺少重要参数');?>");return false;
            }
            if(mnum <= 0){
                layer.msg("<?php echo L('请输入出售数量');?>");return false;
            }
        }else if(selltype == 2){
            var mnum = $("#sell_coin").val();
            if(mnum <= 0){
                layer.msg("<?php echo L('请输入出售数量');?>");return false;
            }
        }
        $.post("<?php echo U('Trade/upbbsell');?>",
        {'symbol':symbol,'mprice':mprice,'mnum':mnum,'musdt':musdt,'selltype':selltype,'type':type},
        function(data){
            if(data.code == 1){
                layer.msg(data.info);
                setTimeout(function(args){
                    window.location.reload();
                },2000);
            }else{
                layer.msg(data.info);return false; 
            }
        });
    }
</script>
<script type="text/javascript">
    function bb_buycoin(type){
        var type = type;
        if(type <= 0){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        var symbol = $("#symbolbox").val();
        var mprice = $("#newprice").val();
        var mnum = $("#mnum").val();
        var musdt = $("#musdt").val();
        var buytype = $("#buytype").val();
        if(buytype == 1){
            if(mnum <= 0){
                layer.msg("<?php echo L('输入数量');?>");return false;
            }
        }else if(buytype == 2){
            if(musdt <= 0){
                layer.msg("<?php echo L('输入USDT数量');?>");return false;
            }
        }
        $.post("<?php echo U('Trade/upbbbuy');?>",
        {'symbol':symbol,'mprice':mprice,'mnum':mnum,'musdt':musdt,'buytype':buytype,'type':type},
        function(data){
            if(data.code == 1){
                layer.msg(data.info);
                setTimeout(function(args){
                    window.location.reload();
                },2000);
            }else{
               layer.msg(data.info);return false; 
            }
        });
    }
</script>
<script type="text/javascript">
    function getallsmybol(){
        $.post("<?php echo U('Ajaxtrade/getallcoin');?>",
        function(data){
            if(data.code == 1){
                $("#smybolbox").empty();
                var html = '';
                if(data.data == '' || data.data == null){
                    html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                           '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                           '</div>';
                    $("#smybolbox").append(html);
                    
                }else{
                    $.each(data.data,function(key,val){
                        html += '<a href="/Trade/transinfo.html?symbol='+ val.coin +'&type=buy">'+
                                '<div class="sy_list_box">'+
                                '<div class="sy_list_boxl">'+
                                '<span  class="fzmm fcc">'+ val.cname +'</span>'+
                                '</div>'+
                                '<div class="sy_list_boxl" style="text-align:center;">' + val.open + '</div>'+
                                '<div class="sy_list_boxr">' + val.change +'</div>'+
                                '</div>'+
                                '</a>';
                    });
                    
                    $("#smybolbox").append(html);
                }
            }else{
                html =  '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                        '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                        '</div>';
                $("#smybolbox").append(html);
            }
        });
    }
</script>
<script type="text/javascript">
    $("#hidedong").click(function(){
        $("#showdong").fadeOut("slow");
    });
    $("#centerbox").click(function(){
        getallsmybol()
        $("#showdong").fadeIn("slow");
        
        
    });
</script>
<script type="text/javascript">
    $(function(){
        gettradbuy();
        gettradsell();
        setInterval("gettradbuy()",2000);
        setInterval("gettradsell()",2000);
    });
</script>
<script type="text/javascript">
    function gettradsell(){
        var symbol = $("#symbolbox").val();
        $.post("<?php echo U('Ajaxtrade/gettradsell');?>",
        {'symbol':symbol},
        function(data){
            if(data.code == 1){
                $("#tradebuybox").empty();
                var html = '';
                if(data.data == '' || data.data == null){
                    html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                           '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                           '</div>';
                    $("#tradebuybox").append(html);
                    
                }else{
                    $.each(data.data,function(key,val){
                        html += '<div style="width:100%;height:30px;">'+
		                        '<div class="trade_list tl">'+
		                        '<span class="red fzm">'+ val.price +'</span>'+
		                        '</div>'+
		                        '<div class="trade_list tr">'+
		                        '<span class="red fzm">'+ val.amount +'</span>'+
		                        '</div>'+
		                        '</div>';
                    });
                    $("#tradebuybox").append(html);
                }
            }
        });
    }
</script>
<script type="text/javascript">
    function gettradbuy(){
        var symbol = $("#symbolbox").val();
        $.post("<?php echo U('Ajaxtrade/gettradbuy');?>",
        {'symbol':symbol},
        function(data){
            if(data.code == 1){
                $("#tradesellbox").empty();
                var html = '';
                if(data.data == '' || data.data == null){
                    html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                           '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                           '</div>';
                    $("#tradesellbox").append(html);
                    
                }else{
                    $.each(data.data,function(key,val){
                        html += '<div style="width:100%;height:30px;">'+
		                        '<div class="trade_list tl">'+
		                        '<span class="green fzm">'+ val.price +'</span>'+
		                        '</div>'+
		                        '<div class="trade_list tr">'+
		                        '<span class="green fzm">'+ val.amount +'</span>'+
		                        '</div>'+
		                        '</div>';
                    });
                    $("#tradesellbox").append(html);
                }
            }
        });
    }
</script>
<script type="text/javascript">
    $(function(){
        getcoinprice();
        setInterval("getcoinprice()",2000);
    });
</script>
<script type="text/javascript">
    function getcoinprice(){
        var symbol = $("#symbolbox").val();
        $.post("<?php echo U('Ajaxtrade/getcoinprice');?>",
        {'symbol':symbol},
        function(data){
            if(data.code == 1){
                $("#changebox").html(data.change);
                $("#closeprice").html(data.price);
            }else{
                console.log("<?php echo L('未获取数据');?>");
            }
        });
    }
</script>
<script type="text/javascript">
    $("#buybtn").click(function(){
        $("#buybtn").addClass("bggreen");
        $("#buybtn").removeClass("bghc");
        $("#sellbtn").addClass("bghc");
        $("#sellbtn").removeClass("bggreen");
        $("#buycoinbox").show();
        $("#sellcoinbox").hide();
        $("#buybtnspan").addClass("cfff");
        $("#buybtnspan").removeClass("c000");
        $("#sellbtnspan").addClass("c000");
        $("#sellbtnspan").removeClass("cfff");
    });
    $("#sellbtn").click(function(){
        $("#buybtn").removeClass("bgred");
        $("#buybtn").addClass("bghc");
        $("#sellbtn").removeClass("bghc");
        $("#sellbtn").addClass("bgred");
        $("#buycoinbox").hide();
        $("#sellcoinbox").show();
        $("#buybtnspan").addClass("c000");
        $("#buybtnspan").removeClass("cfff");
        $("#sellbtnspan").addClass("cfff");
        $("#sellbtnspan").removeClass("c000");
    });
</script>
<script type="text/javascript">
    //出售框
    $("#sell_xjbtn").click(function(){
        $("#sell_xjspan").addClass("fcy");
        $("#sell_xjspan").removeClass("fcc");
        $("#sell_sjspan").addClass("fcc");
        $("#sell_sjspan").removeClass("fcy");
        $("#sell_xjbox").show();
        $("#sell_sjbox").hide();
        $("#buytype").val(1);
        $("#sell_sjnumbox").hide();
        $("#sell_xjnumbox").show();
        $("#sellxjusdt").show();
        $("#sellxjcoin").hide();
        
        
    });
    $("#sell_sjbtn").click(function(){
        $("#sell_sjspan").addClass("fcy");
        $("#sell_sjspan").removeClass("fcc");
        $("#sell_xjspan").addClass("fcc");
        $("#sell_xjspan").removeClass("fcy");
        $("#sell_sjbox").show();
        $("#sell_xjbox").hide();
        $("#buytype").val(2);
        $("#sell_xjnumbox").hide();
        $("#sell_sjnumbox").show();
        $("#sellxjusdt").hide();
        $("#sellxjcoin").show();
    });

    //买入框
    $("#buyxjbtn").click(function(){
        $("#xjspan").addClass("fcy");
        $("#xjspan").removeClass("fcc");
        $("#sjspan").addClass("fcc");
        $("#sjspan").removeClass("fcy");
        $("#xjbox").show();
        $("#sjbox").hide();
        $("#buytype").val(1);
        $("#sjnumbox").hide();
        $("#xjnumbox").show();
    });
    $("#buysjbtn").click(function(){
        $("#sjspan").addClass("fcy");
        $("#sjspan").removeClass("fcc");
        $("#xjspan").addClass("fcc");
        $("#xjspan").removeClass("fcy");
        $("#sjbox").show();
        $("#xjbox").hide();
        $("#buytype").val(2);
        $("#xjnumbox").hide();
        $("#sjnumbox").show();
    });
</script>
<script type="text/javascript">
    function sellusdtfc(){
        var newprice = parseFloat($("#newprice").val()); //单价
        var buyusdt = parseFloat($("#sell_usdt").val()); //输入的USDT数量
        var usermoney = parseFloat($("#buy_usercoin").val());//币的数量
        var coinnum = parseFloat(buyusdt / newprice).toFixed(4);
        
        if(coinnum > usermoney){
            layer.msg("<?php echo L('余额不足');?>");return false;
        }else{
            $("#sell_num").val(coinnum);
            $("#musdt").val(buyusdt);
        }
    }
    function buyusdtfc(){
        var newprice = parseFloat($("#newprice").val());
        var buyusdt = parseFloat($("#buyusdt").val());
        var usermoney = parseFloat($("#buy_usermoney").val());
        var num = parseFloat(buyusdt / newprice).toFixed(4);
        if(buyusdt > usermoney){
            layer.msg("<?php echo L('余额不足');?>");return false;
        }else{
            var buynum = parseFloat(buyusdt / newprice).toFixed(4);
            $("#buynum").val(buynum);
            $("#musdt").val(buyusdt);
            $("#mnum").val(num);
        }
    }
</script>
<script type="text/javascript">
    function sellnumfc(){
        var newbuynum = $("#sell_num").val();
        var newprice = $("#sell_newprice").val();
        var buyusdt = parseFloat((newprice * newbuynum)).toFixed(4);
        var usermoney = parseFloat($("#buy_usercoin").val());
        if(newbuynum > usermoney){
            layer.msg("<?php echo L('余额不足');?>");return false;
        }else{
            $("#sell_usdt").val(buyusdt);
            $("#mnum").val(newbuynum);
            $("#musdt").val(buyusdt);
        }
        
    }
    function buynumfc(){
        var newbuynum = $("#buynum").val();
        var newprice = $("#newprice").val();
        var buyusdt = parseFloat((newprice * newbuynum)).toFixed(4);
        var usermoney = parseFloat($("#buy_usermoney").val());
        if(buyusdt > usermoney){
            layer.msg("<?php echo L('余额不足');?>");return false;
        }else{
            $("#buyusdt").val(buyusdt);
            $("#mnum").val(newbuynum);
            $("#musdt").val(buyusdt);
        }
        
    }
</script>
<script type="text/javascript">
    $(function(){
        var symbol = $("#symbolbox").val();
        $.post("<?php echo U('Ajaxtrade/getnewprice');?>",
        {'symbol':symbol},
        function(data){
            if(data.code == 1){
                $("#newprice").val(data.price);
                $("#mprice").val(data.price);
                $("#sell_newprice").val(data.price);
            }else{
                console.log("<?php echo L('未获取数据');?>");
            }
        });
    });
</script>
<script type="text/javascript">
    function sellcoinfc(){
        var sell_coin = parseFloat($("#sell_coin").val());
        if(sell_coin < 0){
            layer.msg("<?php echo L('请输入正确数量');?>");return false;
        }
        var buy_usercoin = parseFloat($("#buy_usercoin").val());
        if(sell_coin > buy_usercoin){
            layer.msg("<?php echo L('余额不足');?>");return false;
        }
    }
    
    
    
    function sellblfc(type,num){
        var type = type;
        var num = num;
        var usermoney = $("#buy_usercoin").val();
        var musdt = parseFloat((usermoney * num / 100)).toFixed(4);
        var newprice = $("#newprice").val();
        var buynum = parseFloat((musdt * newprice)).toFixed(4);
        
        $("#sell_usdt").val(buynum);
        $("#sell_num").val(musdt);
        
        $("#musdt").val(buynum);
        $("#mnum").val(musdt);
        $("#sell_coin").val(musdt);
        
        
        if(type == 1){
            $('#sellbl_1').addClass("bgred");
            $('#sellbl_1').removeClass("bgf5");
            $('#sellbl_2').addClass("bgf5");
            $('#sellbl_2').removeClass("bgred");
            $('#sellbl_3').addClass("bgf5");
            $('#sellbl_3').removeClass("bgred");
            $('#sellbl_4').addClass("bgf5");
            $('#sellbl_4').removeClass("bgred");
            
        }else if(type == 2){
            $('#sellbl_2').addClass("bgred");
            $('#sellbl_2').removeClass("bgf5");
            $('#sellbl_1').addClass("bgf5");
            $('#sellbl_1').removeClass("bgred");
            $('#sellbl_3').addClass("bgf5");
            $('#sellbl_3').removeClass("bgred");
            $('#sellbl_4').addClass("bgf5");
            $('#sellbl_4').removeClass("bgred");
        }else if(type == 3){
            $('#sellbl_3').addClass("bgred");
            $('#sellbl_3').removeClass("bgf5");
            $('#sellbl_1').addClass("bgf5");
            $('#sellbl_1').removeClass("bgred");
            $('#sellbl_2').addClass("bgf5");
            $('#sellbl_2').removeClass("bgred");
            $('#sellbl_4').addClass("bgf5");
            $('#sellbl_4').removeClass("bgred");
        }else if(type == 4){
            $('#sellbl_4').addClass("bgred");
            $('#sellbl_4').removeClass("bgf5");
            $('#sellbl_1').addClass("bgf5");
            $('#sellbl_1').removeClass("bgred");
            $('#sellbl_2').addClass("bgf5");
            $('#sellbl_2').removeClass("bgred");
            $('#sellbl_3').addClass("bgf5");
            $('#sellbl_3').removeClass("bgred");
        }
    }
    function buyblfc(type,num){
        var type = type;
        var num = num;
        var usermoney = $("#buy_usermoney").val();
        var musdt = parseFloat((usermoney * num / 100)).toFixed(4);
        var newprice = $("#newprice").val();
        var buynum = parseFloat((musdt / newprice)).toFixed(4);
        $("#buyusdt").val(musdt);
        $("#buynum").val(buynum);
        $("#musdt").val(musdt);
        $("#mnum").val(buynum);
        if(type == 1){
            $('#buybl_1').addClass("bggreen");
            $('#buybl_1').removeClass("bgf5");
            $('#buybl_2').addClass("bgf5");
            $('#buybl_2').removeClass("bggreen");
            $('#buybl_3').addClass("bgf5");
            $('#buybl_3').removeClass("bggreen");
            $('#buybl_4').addClass("bgf5");
            $('#buybl_4').removeClass("bggreen");
            
        }else if(type == 2){
            $('#buybl_2').addClass("bggreen");
            $('#buybl_2').removeClass("bgf5");
            $('#buybl_1').addClass("bgf5");
            $('#buybl_1').removeClass("bggreen");
            $('#buybl_3').addClass("bgf5");
            $('#buybl_3').removeClass("bggreen");
            $('#buybl_4').addClass("bgf5");
            $('#buybl_4').removeClass("bggreen");
        }else if(type == 3){
            $('#buybl_3').addClass("bggreen");
            $('#buybl_3').removeClass("bgf5");
            $('#buybl_1').addClass("bgf5");
            $('#buybl_1').removeClass("bggreen");
            $('#buybl_2').addClass("bgf5");
            $('#buybl_2').removeClass("bggreen");
            $('#buybl_4').addClass("bgf5");
            $('#buybl_4').removeClass("bggreen");
        }else if(type == 4){
            $('#buybl_4').addClass("bggreen");
            $('#buybl_4').removeClass("bgf5");
            $('#buybl_1').addClass("bgf5");
            $('#buybl_1').removeClass("bggreen");
            $('#buybl_2').addClass("bgf5");
            $('#buybl_2').removeClass("bggreen");
            $('#buybl_3').addClass("bgf5");
            $('#buybl_3').removeClass("bggreen");
        }
    }
</script>
<script type="text/javascript">
    
    $("#dash_sellprice").click(function(){
        var newprice =  parseFloat($("#sell_newprice").val());
        if(newprice > 0){
            var buyprice = (newprice - 0.001).toFixed(4);
        }else{
            var buyprice = 0;
        }
        $("#sell_newprice").val(buyprice);
        $("#mprice").val(buyprice);
    });
    
    $("#plus_sellprice").click(function(){
        var newprice = parseFloat($("#sell_newprice").val());
        var buyprice = (newprice + 0.001).toFixed(4);
        $("#sell_newprice").val(buyprice);
        $("#mprice").val(buyprice);
    });
    
    $("#dash_sellnum").click(function(){
        var buynum = parseFloat($("#sell_num").val());
        if(buynum > 0){
            var newbuynum = (buynum - 0.001).toFixed(4);
        }else{
            newbuynum = 0
        }
        $("#sell_num").val(newbuynum);
        $("#mnum").val(newbuynum);
        var newprice = $("#newprice").val();
        var buyusdt = (newprice * newbuynum).toFixed(4);
        $("#sell_usdt").val(buyusdt);
        $("#musdt").val(buyusdt);
        
    });
    $("#plus_sellnum").click(function(){
        var buynum = parseFloat($("#sell_num").val());
        if(buynum > 0){
            var newbuynum = (buynum + 0.001).toFixed(4);
        }else{
            var newbuynum = 0.01;
        }
        $("#sell_num").val(newbuynum);
        $("#mnum").val(newbuynum);
        var newprice = $("#newprice").val();
        var usermoney = parseFloat($("#buy_usercoin").val());
        var buyusdt = parseFloat((newprice * newbuynum)).toFixed(4);
        if(newbuynum > usermoney){
            layer.msg("<?php echo L('余额不足');?>");return false;
        }else{
            $("#sell_usdt").val(buyusdt);
            $("#musdt").val(buyusdt);
        }
    });

    
    $("#dash_buyprice").click(function(){
        var newprice =  parseFloat($("#newprice").val());
        if(newprice > 0){
            var buyprice = (newprice - 0.001).toFixed(4);
        }else{
            var buyprice = 0;
        }
        $("#newprice").val(buyprice);
        $("#mprice").val(buyprice);
    });
    $("#plus_buyprice").click(function(){
        var newprice = parseFloat($("#newprice").val());
        var buyprice = (newprice + 0.001).toFixed(4);
        $("#newprice").val(buyprice);
        $("#mprice").val(buyprice);
    });
    $("#dash_buynum").click(function(){
        var buynum = parseFloat($("#buynum").val());
        if(buynum > 0){
            var newbuynum = (buynum - 0.001).toFixed(4);
        }else{
            newbuynum = 0
        }
        $("#buynum").val(newbuynum);
        $("#mnum").val(newbuynum);
        var newprice = $("#newprice").val();
        var buyusdt = (newprice * newbuynum).toFixed(4);
        $("#buyusdt").val(buyusdt);
        $("#musdt").val(buyusdt);
        
    });
    $("#plus_buynum").click(function(){
        var buynum = parseFloat($("#buynum").val());
        if(buynum > 0){
            var newbuynum = (buynum + 0.001).toFixed(4);
        }else{
            var newbuynum = 0.01;
        }
        $("#buynum").val(newbuynum);
        $("#mnum").val(newbuynum);
        var newprice = $("#newprice").val();
        var usermoney = parseFloat($("#buy_usermoney").val());
        var buyusdt = parseFloat((newprice * newbuynum)).toFixed(4);
        if(buyusdt > usermoney){
            layer.msg("<?php echo L('余额不足');?>");return false;
        }else{
            $("#buyusdt").val(buyusdt);
            $("#musdt").val(buyusdt);
        }
    });
</script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>

</html>