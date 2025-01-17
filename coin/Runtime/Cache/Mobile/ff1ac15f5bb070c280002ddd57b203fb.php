<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
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
	.no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;background: #f5f5f5;}
	.txtl{line-height:50px;width:10%;}
	.findbox{width:90%;height:40px;margin:0px auto;background:#ebecf0;border-radius:20px;}
	.findbox_l{width:15%;height:40px;line-height:40px;float:left;text-align: center;}
	.findbox_r{width:80%;height:40px;line-height:40px;float:right;}
	.symbol_t{height:30px;border:none;background: #ebecf0;}
	.titlebox{width:100%;height:40px;position: fixed;z-index: 9999;top:50px;background: #f5f5f5}
	.txt_style{display:inline-block;height:40px;line-height:40px;border-bottom:3px solid #FCD535;color:#000000;font-size: 18px;font-weight: bold;}
	.symboltitle{width:100%;height:50px;background:#fff;border-top-right-radius:20px;border-top-left-radius:20px;position: fixed;z-index: 9999;top:90px;padding: 0px 15px;}
	.listbox{width:100%;background: #fff;margin-top:130px;z-index: -9999;padding: 0px 10px;min-height:100vh;}
	.stitle_l{width:30%;height:50px;line-height:60px;float:left;text-align: left;}
	.stitle_c{width:40%;height:50px;line-height:60px;float:left;text-align: center;}
	.stitle_r{width:30%;height:50px;line-height:60px;float:left;text-align: right;}
	.emptybox{width:100%;height:40px;background:#fff;height:15px;}
    .bgfcc{background:#f5f5f5;}
	.bgreen{background:#0ecb81;}
    .bred{background:#f5465c;}
    .green{color:#0ecb81;}
    .red{color:#f5465c;}
    .list_open{width:40%;height:50px;line-height:50px;float:left;text-align:center;}
    .list_cname{width:30%;height:50px;line-height:50px;float:left;}
    .list_change{width:30%;height:50px;line-height:50px;float:left;text-align:right;}
	</style>
  </head>
  <body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>

			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm"><?php echo L('币币交易市场');?></span>
			</div>

			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			</div>
		</div>
		
		<div class="titlebox">
			<div style="width:70%;margin:0px auto;">
				<span class="txt_style fzmmm"><?php echo L('USDT市场');?></span>
			</div>
		</div>
		
		<div class="symboltitle">
			<div class="stitle_l">
				<span class="fcc fzmmm"><?php echo L('交易对');?></span>
			</div>
			<div class="stitle_c">
				<span class="fcc fzmmm"><?php echo L('最新价格');?></span>
			</div>
			<div class="stitle_r">
				<span class="fcc fzmmm"><?php echo L('24h涨跌');?></span>
			</div>
		</div>
		
		<div class="listbox">
			<div class="emptybox"></div>
            
            <div style="width:100%;" id="tradebox">
                <?php if(is_array($market)): foreach($market as $key=>$vo): ?><a href="/Trade/trans.html?sytx=<?php echo strtoupper($vo['coinname']);?>/USDT">
		            <div style="width:100%;height:50px;">
                        <div class="list_cname">
                            <span  class="fzmmm fcc cn_<?php echo ($vo["coinname"]); ?>"><?php echo strtoupper($vo['coinname']);?>/USDT</span>
                        </div>
                        <div class="list_open cpr_<?php echo ($vo["coinname"]); ?>">
                            <span  class='fzmmm fcc'>--.--</span></div>
                        <div class="list_change cch_<?php echo ($vo["coinname"]); ?>">
                            <span  class='fzmm bgfcc' style='color:#fff;border-radius: 2px;width:70px;height:35px;line-height:35px;text-align:center;display:inline-block;'>0%</span>
                        </div>
                    </div>
                    </a><?php endforeach; endif; ?>
                
            </div>

			<div style="width:100%;height:60px;"></div>
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
    function goback(){
        window.history.go(-1);
    }
</script>
<script type="text/javascript">
    function obtain_btc(){
        var coin = "btc";
        var nameclass = ".cn_btc";
        var priceclass = ".cpr_btc";
        var changeclass = ".cch_btc";
        $.post("<?php echo U('Ajaxtrade/obtain_btc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_eth(){
        var coin = "eth";
        var nameclass = ".cn_eth";
        var priceclass = ".cpr_eth";
        var changeclass = ".cch_eth";
        $.post("<?php echo U('Ajaxtrade/obtain_eth');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>

<script type="text/javascript">
    function obtain_eos(){
        var coin = "eos";
        var nameclass = ".cn_eos";
        var priceclass = ".cpr_eos";
        var changeclass = ".cch_eos";
        $.post("<?php echo U('Ajaxtrade/obtain_eos');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>

<script type="text/javascript">
    function obtain_doge(){
        var coin = "doge";
        var nameclass = ".cn_doge";
        var priceclass = ".cpr_doge";
        var changeclass = ".cch_doge";
        $.post("<?php echo U('Ajaxtrade/obtain_doge');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_bch(){
        var coin = "bch";
        var nameclass = ".cn_bch";
        var priceclass = ".cpr_bch";
        var changeclass = ".cch_bch";
        $.post("<?php echo U('Ajaxtrade/obtain_bch');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_ltc(){
        var coin = "ltc";
        var nameclass = ".cn_ltc";
        var priceclass = ".cpr_ltc";
        var changeclass = ".cch_ltc";
        $.post("<?php echo U('Ajaxtrade/obtain_ltc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_iota(){
        var coin = "iota";
        var nameclass = ".cn_iota";
        var priceclass = ".cpr_iota";
        var changeclass = ".cch_iota";
        $.post("<?php echo U('Ajaxtrade/obtain_iota');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_fil(){
        var coin = "fil";
        var nameclass = ".cn_fil";
        var priceclass = ".cpr_fil";
        var changeclass = ".cch_fil";
        $.post("<?php echo U('Ajaxtrade/obtain_fil');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_flow(){
        var coin = "flow";
        var nameclass = ".cn_flow";
        var priceclass = ".cpr_flow";
        var changeclass = ".cch_flow";
        $.post("<?php echo U('Ajaxtrade/obtain_flow');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_jst(){
        var coin = "jst";
        var nameclass = ".cn_jst";
        var priceclass = ".cpr_jst";
        var changeclass = ".cch_jst";
        $.post("<?php echo U('Ajaxtrade/obtain_jst');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_itc(){
        var coin = "itc";
        var nameclass = ".cn_itc";
        var priceclass = ".cpr_itc";
        var changeclass = ".cch_itc";
        $.post("<?php echo U('Ajaxtrade/obtain_itc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_ht(){
        var coin = "ht";
        var nameclass = ".cn_ht";
        var priceclass = ".cpr_ht";
        var changeclass = ".cch_ht";
        $.post("<?php echo U('Ajaxtrade/obtain_ht');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_usdz(){
        var coin = "usdz";
        var nameclass = ".cn_usdz";
        var priceclass = ".cpr_usdz";
        var changeclass = ".cch_usdz";
        $.post("<?php echo U('Ajaxtrade/obtain_usdz');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html("USDZ/USDT");
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
	// 访问币信息 暂时注销
     $(function(){
        obtain_btc();
        setInterval("obtain_btc()",3000);
        obtain_eth();
        setInterval("obtain_eth()",3000);
        obtain_eos();
        setInterval("obtain_eos()",3000);
        obtain_doge();
        setInterval("obtain_doge()",3000);
        obtain_bch();
        setInterval("obtain_bch()",3000);
        obtain_ltc();
        setInterval("obtain_ltc()",6000);
        obtain_iota();
        setInterval("obtain_iota()",6000);
        obtain_fil();
        setInterval("obtain_fil()",6000);
        obtain_flow();
        setInterval("obtain_flow()",6000);
        obtain_jst();
        setInterval("obtain_jst()",6000);
        obtain_ht();
        setInterval("obtain_ht()",6000);

        //getallsymbol();
        //setInterval("getallsymbol()",2000);
		//  obtain_itc();
		//  setInterval("obtain_itc()",21000);
		//  obtain_usdz();
		//  setInterval("obtain_usdz()",25000);
    });
</script>

<!----
<script type="text/javascript">
    function getallsymbol(){
        $.post("<?php echo U('Ajaxtrade/getallsymbol');?>",
        function(data){
            if(data.code == 1){
                $("#tradebox").empty();
                var html = '';
                if(data.data == '' || data.data == null){
                    html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                           '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                           '</div>';
                    $("#tradebox").append(html);
                    
                }else{
                    $.each(data.data,function(key,val){
                        html += '<a href="/Trade/trans.html?sytx='+ val.cname +'">'+
                                '<div style="width:100%;height:50px;">'+
                                '<div class="list_cname">'+
                                '<span  class="fzmmm fcc">'+ val.cname +'</span>'+
                                '</div>'+
                                '<div class="list_open">' + val.open + '</div>'+
                                '<div class="list_change">' + val.change +'</div>'+
                                '</div>'+
                                '</a>';
                             
                    });
                    $("#tradebox").append(html);
                }
            }else{
                html =  '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                        '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                        '</div>';
                $("#tradebox").append(html);
            }
        });
    }
</script>
--->
</html>