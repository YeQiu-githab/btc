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
	input:focus{background:#fff;outline: 1px solid #fff;}
	a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	.no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;height: 45px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);}
	.txtl{line-height:50px;width:20%;text-align: center;border-bottom: 3px solid #FCD535;}
    .titlebox{width:100%;height:120px;background:#fff;margin-top:55px;border-top-left-radius:20px;border-top-right-radius:20px;}
    .allmoneybox{
        width:100%;
        height:200px;
        background: url("/Public/Static/img/user_bg.png") no-repeat;
        background-size: 100% 200px;
        box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);
        position: fixed;
        top: 0px;
    }
    .allmbox_1{width:100%;height:40px;line-height:40px;text-align:right;padding:0px 15px;}
    .allmbox_2{width:100%;height:20px;line-height:20px;text-align:left;padding:0px 15px;}
    .allmbox_3{width:100%;height:40px;line-height:40px;text-align:left;padding:0px 15px;}
    .allmbox_btn{width:100%;height:35px;line-height:35px;padding:0px 10px;}
    .allmbox_btn_1{width:100%;height:35px;float:left;margin-top: 50px;}
    .allmbox_cbtn{width:30%;height:35px;line-height:35px;text-align:center;float:left;border:1px solid #FCD535;border-radius:5px;}
    .allmbox_tbtn{width:30%;height:35px;line-height:35px;text-align:center;float:left;border:1px solid #e6e6e6;border-radius:5px;background:#fff;margin-left: 5%;}
    .btn_active{background: #fff;}
    .findbox{width:100%;background:#fff;margin-top:210px;}
    .findbox_1{width:100%;height:40px;line-height:40px;padding:0px 15px;border-bottom:1px solid #f5f5f5;}
    .findbox_2{width:60%;height:40px;line-height:40px;float:left;}
    .findbox_3{height:40px;background:#ffffff;border-bottom:2px solid #FCD535;float: left;text-align:center;}
    .mlistbox{width:100%;padding:5px 15px;}
    .listbox{width:100%;height:90px;background:#fff;border-bottom:1px solid #f5f5f5;}
    .listbox_title{width:100%;height:30px;line-height:30px;}
    .listbox_title_l{width:50%;height:30px;line-height:40px;float:left;text-align:left;}
    .listbox_title_r{width:50%;height:30px;line-height:40px;float:right;text-align:right;}
    .dongbox{position:fixed;z-index:9999999999;display:none;top:0px;width:100%;height:100vh;background:rgba(0,0,0,0.2);}
    .dongbox_cbox{width:75%;background:#fff;margin:50% auto;border-radius:15px;padding:10px;}
    .showbtn{width:100%;height:40px;line-height:40px;background: #0052fe;color: #fff;border-radius:5px;text-align:center;margin-top:10px;}

	</style>
  </head>
  <body>
	<div class="container-fluid " style="padding:0px;width:100vw;">

        <div class="allmoneybox">
            <div class="allmbox_1">
                <input type="hidden" id="st" value="1" />
                <i class="bi bi-eye " style="font-size:22px;color: #ffc000"  id="eyesid"></i>
            </div>
            <div class="allmbox_2">
                <span class="fzmm fch" style="color: #fff"><?php echo L('账户总资产折合');?>(USDT)</span>
                <i class="bi bi-exclamation-circle" style="font-size:16px;color: #FCD535;" id="showdongbtn"></i>
            </div>
            <div class="allmbox_3">
                <span class="fch zhehebox" style="font-size:24px;color: #fff" id="allzhehebox">--</span>
            </div>
            
            <div class="allmbox_btn">
                <div class="allmbox_btn_1">
                    <a href="<?php echo U('User/czcoin');?>">
                    <div class="allmbox_cbtn btn_active" style="width:30%">
                        <img src="/Public/Static/Icoinfont/icon/chongzhi.png" width="23" style="margin-right: 5px;" />
                        <span class="fch"><?php echo L('充币');?></span>
                    </div>
                    </a>

                    <a href="<?php echo U('User/txcoin');?>">
                    <div class="allmbox_tbtn btn_active"  style="width:30%">
                        <img src="/Public/Static/Icoinfont/icon/tixin.png" width="23" style="margin-right: 5px;"  />
                        <span class="fch"><?php echo L('提币');?></span>
                    </div>
                    </a>

                    <a href="<?php echo U('Index/uoption');?>">
                        <div class="allmbox_tbtn btn_active"  style="width:30%">
                            <img src="/Public/Static/Icoinfont/icon/user-3.png" width="23" style="margin-right: 5px;"  />
                            <span class="fch"><?php echo L('个人');?></span>
                        </div>
                    </a>

                </div>
            </div>
            
        </div>
        
        <div class="findbox">
            <div class="findbox_1">
                <div class="findbox_2">
                    <div class="findbox_3">
                        <span class="fzmm fch"><?php echo L('资产列表');?></span>
                    </div>
                </div>
            </div>
            
            <div class="mlistbox" id="moneylistbox">
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><a href="/User/coininfo?cid=<?php echo ($vo["name"]); ?>">
                    <div class="listbox">
                        <div class="listbox_title">
                            <div class="listbox_title_l">
                                <span class="fcc"  style="font-size:16px;font-weight:500;"><?php echo strtoupper($vo['name']);?></span>
                            </div>
                            <div class="listbox_title_r">
                                <i class="bi bi-chevron-right fcc" style="font-size:14px;"></i>
                            </div>
                        </div>
                        <div style="width:100%;height:60px;">
                            <div style="width:33.33%;height:60px;float:left;">
                                <div style="width:100%;height:30px;line-height:40px;">
                                    <span style="color:#cbcbcb;"><?php echo L("可用");?></span>
                                </div>
                                <div style="width:100%;height:30px;line-height:20px;">
                                    <span class="fch" id="num_<?php echo ($vo["name"]); ?>">0.000000</span>
                                </div>
                            </div>
                            <div style="width:33.33%;height:60px;float:left;">
                                <div style="width:100%;height:30px;line-height:40px;">
                                    <span style="color:#cbcbcb;"><?php echo L("冻结");?></span>
                                </div>
                                <div style="width:100%;height:30px;line-height:20px;">
                                    <span class="fch" id="numd_<?php echo ($vo["name"]); ?>">0.000000</span>
                                </div>
                            </div>
                            <div style="width:33.33%;height:60px;float:left;">
                                <div style="width:100%;height:30px;line-height:40px;text-align:right;">
                                    <span style="color:#cbcbcb;"><?php echo L("折合");?>(USDT)</span>
                                </div>
                                <div style="width:100%;height:30px;line-height:20px;text-align:right;">
                                    <span class="fch" id="zhehe_<?php echo ($vo["name"]); ?>">0.000000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a><?php endforeach; endif; ?>
                
 
            </div>
        </div>
        
        <div style="width:100%;height:80px;"></div>

	</div>	
	
	
	<!---提醒弹窗--->
	<div class="dongbox" id="dongbox" style="display:none;">
	    <div class="dongbox_cbox">
	        <div style="width:100%;height:50px;line-height:50px;text-align:center;">
	            <i class="bi bi-exclamation-circle-fill fcy" style="font-size:36px;"></i>
	        </div>
	        <div style="width:100%;;padding:5px 10px;">
	            <span class="fzmm fch"><?php echo L('由于资金统计存在延时，账户余额不一定是并非最新余额，如需准确余额请到相关账户页面进行查询');?></span>
	        </div>
	        <div class="showbtn" id="hidebtn">
	            <span class="fzmm fch"><?php echo L('确定');?></span>
	        </div>
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
                    <span class="fzm fcy"><?php echo L('资产');?></span>
                </div>
            </div>
        </a>


    </div>


</body>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function getmoney_usdt(){
        var coin = "usdt";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyusdt');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_btc(){
        var coin = "btc";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneybtc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_eth(){
        var coin = "eth";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyeth');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_eos(){
        var coin = "eos";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyeos');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_doge(){
        var coin = "doge";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneydoge');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_bch(){
        var coin = "bch";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneybch');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_ltc(){
        var coin = "ltc";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyltc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_trx(){
        var coin = "trx";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneytrx');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_xrp(){
        var coin = "xrp";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyxrp');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_iotx(){
        var coin = "iotx";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyiotx');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_fil(){
        var coin = "fil";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyfil');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_shib(){
        var coin = "shib";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyshib');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_flow(){
        var coin = "flow";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyflow');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_jst(){
        var coin = "jst";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyjst');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_itc(){
        var coin = "itc";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyitc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_ht(){
        var coin = "ht";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyht');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_ogo(){
        var coin = "ogo";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyogo');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }
    function getmoney_iota(){
        var coin = "iota";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneiota');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(numid).html(data.num);
                    $(numdid).html(data.numd);
                    $(zheheid).html(data.zhe);
                }else{
                    console.log("error");
                }
            }
        );
    }
    function getmoney_usdz(){
        var coin = "usdz";
        var numid = "#num_" + coin;
        var numdid = "#numd_" + coin;
        var zheheid = "#zhehe_" + coin;
        $.post("<?php echo U('User/getmoneyusdz');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(numid).html(data.num);
                $(numdid).html(data.numd);
                $(zheheid).html(data.zhe);
            }else{
                console.log("error");
            }
        }
        );
    }

</script>
<script type="text/javascript">
    $(function(){

        getmoney_eth();//eth 金额
        setInterval("getmoney_eth()",2000);
        getmoney_btc();//btc 金额
        setInterval("getmoney_btc()",2500);
        getmoney_eos();
        setInterval("getmoney_eos()",5000);
        getmoney_doge();
        setInterval("getmoney_doge()",5000);
        getmoney_bch();
        setInterval("getmoney_bch()",5000);
        getmoney_ltc();
        setInterval("getmoney_ltc()",5000);
        getmoney_iota();
        setInterval("getmoney_iota()",5000);
        getmoney_fil();
        setInterval("getmoney_fil()",5000);
        getmoney_flow();
        setInterval("getmoney_flow()",5000);
        getmoney_jst()
        setInterval("getmoney_jst()",5000);
        getmoney_ht();
        setInterval("getmoney_ht()",5000);
        getallzhehe(); // 总和
        setInterval("getallzhehe()",3000);
        getmoney_usdt(); //usdt

    });
</script>
<script type="text/javascript">
    function getallzhehe(){
        $.post("<?php echo U('User/getallzhehe');?>",
        function(data){
            if(data.code == 1){
                $("#allzhehebox").html(data.allzhehe);
            }
        });
    }
</script>
<!--
<script type="text/javascript">
    function getusermoney(){
        $.post("<?php echo U('User/getmoneyinfo');?>",
        function(data){
            if(data.code == 1){
                $("#moneylistbox").empty();
                var html = '';
                if(data.data == '' || data.data == null){
                    html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                           '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                           '</div>';
                    $("#moneylistbox").append(html);
                    
                }else{
                    $.each(data.data,function(key,val){
                        html += '<a href="/User/coininfo?cid='+ val.cid +'">'+
                                '<div class="listbox">'+
                                '<div class="listbox_title">'+
                                '<div class="listbox_title_l">'+
                                '<span class="fcc" style="font-size:16px;font-weight:500;">' + val.cname + '</span>'+
                                '</div>'+
                                '<div class="listbox_title_r">'+
                                '<i class="bi bi-chevron-right fcc" style="font-size:14px;"></i>'+
                                '</div>'+
                                '</div>'+
                                '<div style="width:100%;height:60px;">'+
                                '<div style="width:33.33%;height:60px;float:left;">'+
                                '<div style="width:100%;height:30px;line-height:40px;">'+
                                '<span style="color:#cbcbcb;"><?php echo l("可用");?></span>'+
                                '</div>'+
                                '<div style="width:100%;height:30px;line-height:20px;">'+
                                '<span class="fch">' + val.num + '</span>'+
                                '</div>'+
                                '</div>'+
                                '<div style="width:33.33%;height:60px;float:left;">'+
                                '<div style="width:100%;height:30px;line-height:40px;">'+
                                '<span style="color:#cbcbcb;"><?php echo l("冻结");?></span>'+
                                '</div>'+
                                '<div style="width:100%;height:30px;line-height:20px;">'+
                                '<span class="fch">' + val.numd + '</span>'+
                                '</div>'+
                                '</div>'+
                                '<div style="width:33.33%;height:60px;float:left;">'+
                                '<div style="width:100%;height:30px;line-height:40px;text-align:right;">'+
                                '<span style="color:#cbcbcb;"><?php echo l("折合");?>(USDT)</span>'+
                                '</div>'+
                                '<div style="width:100%;height:30px;line-height:20px;text-align:right;">'+
                                '<span class="fch">' + val.zhe + '</span>'+
                                '</div>'+
                                '</div>'+
                                '</div>'+
                                '</div>'+
                                '</a>';
                    });
                    $("#moneylistbox").append(html);
                }
            }else{
                html =  '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                        '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                        '</div>';
                $("#moneylistbox").append(html);
            }
        });
    }
</script>
---->

<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
    $("#eyesid").click(function(){
        var st = $("#st").val();
        if(st == 1){
            $("#eyesid").removeClass("bi-eye");
            $("#eyesid").addClass("bi-eye-slash");
            $("#st").val(2);
            $(".zhehebox").html("******.******");
            $(".zhehebox").removeAttr("id");
            
        }else if(st == 2){
            $("#eyesid").addClass("bi-eye");
            $("#eyesid").removeClass("bi-eye-slash");
            $("#st").val(1);
            $(".zhehebox").attr("id","allzhehebox");
            
        }
    });
    $("#hidebtn").click(function(){
        $("#dongbox").hide();
    });
    $("#showdongbtn").click(function(){
        $("#dongbox").show();
    });
</script>

</html>