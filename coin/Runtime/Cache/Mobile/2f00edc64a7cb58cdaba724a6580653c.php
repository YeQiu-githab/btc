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
	input:focus{background:#f5f5f5;outline: 1px solid #f5f5f5;}
	a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	.no_header{position: fixed;z-index: 9999;background:#fff;padding:0px 10px;top:0px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);}
	.txtl{line-height:50px;width:10%;}
	.klinebox{width:100%;height:550px;margin-top:55px;}
	.klinetitle{width:100%;height:80px;background:#fff;padding:0px 20px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 5%);}
	.klinetitle_l{width:45%;height:80px;float:left;}
	.klinetitle_r{width:55%;height:80px;float:left;}
	.newpricebox{height:40px;line-height:60px;margin-bottom:0px;color:#2ebd85;font-size:22px;font-weight:bold;}
	.changebox{height:40px;line-height:40px;margin-bottom:0px;color:#2ebd85;font-weight:bold;}
	.klr3_box{width:100%;height:30px;}
	.klr2_box{width:100%;height:25px;}
	.klr3_box_dl{width:45%;height:30px;line-height:40px;float:left;text-align:left;}
	.klr3_box_dr{width:55%;height:30px;line-height:40px;float:right;text-align:right;}
	.klr2_box_dl{width:45%;height:25px;line-height:25px;float:left;text-align:left;}
	.klr2_box_dr{width:55%;height:25px;line-height:25px;float:right;text-align:right;}
	.dongbox{position:fixed;z-index:9999;display:none;top:0px;width:100%;height:100vh;background:rgba(0,0,0,0.2);}
	.dong_con{width:80%;height:86vh;background:#fff;margin-top:20px;border-top-right-radius:20px;border-bottom-right-radius:20px;padding:20px 15px 10px 20px;float:left;}
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
	.btnbox{width:100%;height:40px;padding:10px 20px;}
	.btnbox_l{width:45%;height:40px;line-height:40px;float:left;text-align:center;border-radius:10px;background:#0ecb81;}
	.btnbox_r{width:45%;height:40px;line-height:40px;float:right;text-align:center;border-radius:10px;background:#f5465c;}
	.dong_order_c{width:90%;height:450px;background:#fff;margin:60px auto;border-radius:10px;padding:10px;}
	.dong_order_x{width:100%;height:20px;line-height:20px;text-align:right;}
	.dong_order_title{width:100%;height:30px;line-height:20px;text-align:center;border-bottom: 1px solid #f5f5f5;}
	.dong_order_option{width:100%;height:80px;;overflow: hidden;overflow-x: scroll;margin-top:5px;}
	.dong_order_option_list{width:100px;height:80px;background:#f5f5f5;float:left;margin-right:10px;border-radius:10px;padding:5px;}
	.option_list_active{border:1px solid #FCD535;}
	.dong_order_p{width:100%;margin-bottom: 0rem;margin-top:10px;padding-left:5px;}
	.dong_money_list{width:100%;height:40px;}
	.dong_money_list_box{width:70%;height:40px;float:left;overflow: hidden;overflow-x: scroll;}
	.dong_money_list_box_l{width:1000px;height:40px;}
	.dong_money_list_box_option{width:70px;height:40px;line-height:40px;background:#f5f5f5;float:left;margin-right:5px;border-radius:5px;text-align:center;}
	.green{color:#0ecb81;}
    .red{color:#f5465c;}
    .bggreen{background:#0ecb81;}
    .bgred{background:#f5465c;}
    .transbtnbox{width:100%;height:60px;background:rgb(245, 245, 245);position: fixed;bottom: 0px;padding:0px 15px;}
    .transbtn{width:45%;height:40px;line-height:40px;text-align:center;margin-top:10px;border-radius:10px;}
    .tradlist{width:100%;margin-top:10px;}
	.tradetitle{width:33.33%;height:30px;line-height:30px;float:left;}
	.tleft{text-align:left;}
	.tright{text-align:right;}
	.tcenter{text-align:center;}
	</style>
  </head>
  <body style="background:#fff;">
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>

			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<i class="bi bi-text-indent-left fw" style="font-size:22px;color:#000;"></i>
				<span class="fzmmm fw"  style="color:#000;" id="symbolbox"><?php echo ($upmarket); ?></span>
				<span class="fzmmm fw"  style="color:#000;"><?php echo L('币币交易');?></span>
			</div>
            
            <a href="<?php echo U('Trade/tradebill');?>">
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
				<i class="bi bi-funnel fcy fw" style="font-size:20px;"></i>
			</div>
			</a>
			
		</div>

		<div class="klinebox">
		    
			<div class="klinetitle">
				<div class="klinetitle_l">
				    <p class="newpricebox" id="newpricebox" style="font-size:24px;">--</p>
				    <p class="changebox"  id="changebox">--</p>
				</div>
				<div class="klinetitle_r">
				    <div class="klr3_box">
				        <div class="klr3_box_dl">
				            <span class="fzmm fcc"><?php echo L('最低');?></span>
				        </div>
				        <div class="klr3_box_dr">
				            <span class="fzmm fch" id="minmoney">--</span>
				        </div>
				    </div>
				    <div class="klr2_box">
				        <div class="klr2_box_dl">
				            <span class="fzmm fcc"><?php echo L('最高');?></span>
				        </div>
				        <div class="klr2_box_dr">
				            <span class="fzmm fch" id="maxmoney">--</span>
				        </div>
				    </div>
				    <div class="klr2_box">
				        <div class="klr2_box_dl">
				            <span class="fzmm fcc">24h<?php echo L('量');?></span>
				        </div>
				        <div class="klr2_box_dr">
				            <span class="fzmm fch" id="allvol">--</span>
				        </div>
				    </div>
				    
				</div>
			</div>
			<input type="hidden" id="coinname" value="<?php echo ($smybol); ?>" />
			<div style="width:100%;height:540px;">
			    <iframe id="iframeid" width="100%" scrolling="no" height="540" src="/Trade/ordinary?market=<?php echo ($market); ?>"  noresize="noresize" frameborder="0" >不支持IFRAME，请升级</iframe>
			</div>
			
			
			<div style="width:100%;height:500px;background:#fff;padding:5px 15px;">
			    <div style="width:100%;height:30px;line-height:30px;">
			        <span class="fzmmm fch" style="padding:5px 0px;border-bottom:2px solid #FCD535;"><?php echo L('最近成交');?></span>
			    </div>
			    
			    <div class="tradlist">
			        <div style="width:100%;height:30px;">
			            <div class="tradetitle tleft">
			                <span calss="fzm fcc"><?php echo L('时间');?></span>
			            </div>
			            <div class="tradetitle tcenter">
			                <span calss="fzm fcc"><?php echo L('价格');?></span>
			            </div>
			            <div class="tradetitle tright">
			                <span calss="fzm fcc"><?php echo L('数量');?></span>
			            </div>
			        </div>
			        <!--最新交易记录-->
			        <div style="width:100%;height:30px;" id="tradbox"></div>
			    </div>
			</div>
			
			<?php if($state == 1): ?><div class="transbtnbox">
			        <a href="/Trade/transinfo.html?symbol=<?php echo ($smybol); ?>&type=buy">
			        <div class="transbtn bggreen fl">
			            <span class="fzmm" style="color:#fff;"><?php echo L('买入');?></span>
			        </div>
			        </a>
			        <a href="/Trade/transinfo.html?symbol=<?php echo ($smybol); ?>&type=sell">
			        <div class="transbtn bgred fr">
			            <span class="fzmm" style="color:#fff;"><?php echo L('卖出');?></span>
			        </div>
			        </a>
			    </div>
			<?php elseif($state == 2): endif; ?>
		</div>
		
		<!---------交易选择弹窗---------->
	<div class="dongbox"  id="showdong">
	    <div class="dong_con">
	        <div style="width:100%;position:relative;z-index:9999999;top:0px;">
	            <div class="dong_title">
	                <span class="dong_title_span">USDT <?php echo L('币币市场');?></span>
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
		

	</div>	


</body>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function getcoin_data(){
        var coinname = $("#coinname").val();
        $.post("<?php echo U('Ajaxtrade/getcoin_data');?>",
        {'coinname':coinname},
        function(data){
            if(data.code == 1){
                $("#newpricebox").html(data.close);
                $("#ordernewprice").html(data.close);
                $("#changebox").html(data.change);
                $("#minmoney").html(data.low);
                $("#maxmoney").html(data.high);
                $("#allvol").html(data.amount);
            }
        });
    }
</script>
<script type="text/javascript">
    function gettradlist(){
        var coinname = $("#coinname").val();
        $.post("<?php echo U('Ajaxtrade/gettradlist');?>",
        {'coinname':coinname},
        function(data){
            if(data.code == 1){
                $("#tradbox").empty();
                var html = '';
                if(data.data == '' || data.data == null){
                    html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                           '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                           '</div>';
                    $("#tradbox").append(html);
                    
                }else{
                    $.each(data.data,function(key,val){
                        html += '<div class="tradetitle tleft">'+ val.strtype +'</div>'+
                                '<div class="tradetitle tcenter">' + val.price + '</div>'+
                                '<div class="tradetitle tright">' + val.amount + '</div>';
                    });
                    $("#tradbox").append(html);
                }
            }
        });
    }
</script>

<script type="text/javascript">
      $(function(){
          gettradlist();
          setInterval("gettradlist()",3000); 
          getcoin_data();
          setInterval("getcoin_data()",3000);
      });
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
                        html += '<a href="/Trade/trans.html?sytx='+ val.cname +'">'+
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
        getallsmybol();
        $("#showdong").fadeIn("slow");
    });
</script>

<script type="text/javascript">
    function goback(){
		window.history.go(-1);
    }
</script>
</html>