<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1.0,initial-scale=1,user-scalable=no,viewport-fit=true" data-shuvi-head="true">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	    <link rel="stylesheet" type="text/css" href="/Public/Home/static/css/base.css" />
	    <title><?php echo ($webname); ?></title>
	    <style>
            .css-1wr4jig {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-flex: 1;
                -ms-flex: 1;
                flex: 1;
            }
            .css-1odg5z2 {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                height: 260px;
                background-color: #1E2329;
                position: -webkit-sticky;
                position: sticky;
                top: -256px;
                z-index: 1;
                padding: 0;
            }
            .css-1odg5z2::before {
                content: "";
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-image: url(/Public/Home/static/imgs/bannerissue.png);
                position: absolute;
                z-index: -1;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                -webkit-transform: none;
                -ms-transform: none;
                transform: none;
            }
            .css-1xrgo9z {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: start;
                -webkit-justify-content: flex-start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                font-size: 26px;
                color: white;
                z-index: 1;
                height: 100%;
                padding-bottom: 48px;
            }.css-1xrgo9z {
                -webkit-box-pack: start;
                -webkit-justify-content: flex-start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                font-size: 40px;
                padding-bottom: 64px;
            }
            .css-1xrgo9z {
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
            .css-uliqdc {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .progress-bar {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                -ms-flex-pack: center;
                justify-content: center;
                overflow: hidden;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                background-color: #007bff;
                transition: width .6s ease;
            }
            .progress-bar {
                color: #000;
                background-color: #f3c420;
            }
            ::-webkit-input-placeholder {color: #b5b5b5;font-size: 12px;}
	        ::-moz-placeholder {color: #b5b5b5;font-size: 12px;}
	        input:focus{background:#f5f5f5;outline: 1px solid #f5f5f5;}
	        .allbtn {
                width: 100%;
                height: 50px;
                line-height: 50px;
                text-align: center;
                background: #ccc;
                border-radius: 5px;
                background: linear-gradient(to left,#eeb80d,#ffe35b);
                margin-top: 20px;
            }
            .css-bhso1m {
                box-sizing: border-box;
                margin: 0px;
                min-width: 0px;
                display: inline-block;
                border-radius: 4px;
                padding-left: 8px;
                padding-right: 8px;
                font-size: 14px;
                background-color: rgba(240, 185, 11, 0.19);
                color: rgb(240, 185, 11);
            }
            .css-1ax9bc0 {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                background: rgba(255,255,255,0.08);
                box-shadow: inset 0px 1px 0px rgb(255 255 255 / 8%);
                margin-top: -64px;
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 2;
            }
            .css-6mr8u2 {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                width: 100%;
                margin: 0 auto;
                max-width: 1200px;
                padding-left: 0;
                padding-right: 0;
                margin-left: auto;
                margin-right: auto;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                width: 100%;
                padding-left: 0;
                padding-right: 0;
            }
            .css-abpumn {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                overflow-y: auto;
                font-weight: 500;
            }
            .css-1m3syfi {
                box-sizing: border-box;
                margin: 0px;
                min-width: 0px;
                flex-shrink: 0;
                cursor: pointer;
                text-align: center;
                border-color: rgb(240, 185, 11);
                border-bottom-style: solid;
                border-bottom-width: 2px;
                background: rgba(255, 255, 255, 0.1);
                padding: 14px 16px;
                line-height: 20px;
                font-size: 14px;
                text-decoration: none !important;
            }
            .css-1m3syfi {
                border-bottom-width: 4px;
            }
            .css-1m3syfi {
                padding: 20px 24px;
                font-size: 20px;
            }
            .css-cbipbt {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                color: #f5f5f5;
            }
            .css-lk1png {
                box-sizing: border-box;
                margin: 0px;
                min-width: 0px;
                flex-shrink: 0;
                cursor: pointer;
                text-align: center;
                border-color: rgb(240, 185, 11);
                border-bottom-style: solid;
                border-bottom-width: 0px;
                padding: 14px 16px;
                line-height: 20px;
                font-size: 14px;
                text-decoration: none !important;
            }
            .css-lk1png {
                padding: 20px 24px;
                font-size: 20px;
            }

	    </style>
	</head>
	<body>
	    <div class="App">
	        <div class="css-tq0shg">
	            <header class="css-jmskxt">
	 <a href="<?php echo U('Index/index');?>" clss="css-1mvf8us">
	     <img src="/Upload/public/<?php echo get_config('waplogo');?>" class="css-1jgk2rg" style="height:50px;width:50px;border-radius:5px;margin-left: 30px;" />
	 </a>
	<div class="css-1tp5kus header-title">
		<div class="css-vurnku  f22 fw header-title"><?php echo L('PNSCX');?></div>
	</div>
	 <div class="css-1tp5kus">
	     <a href="<?php echo U('Index/index');?>" class="css-1smf7ma">
	         <div class="css-vurnku"><?php echo L('首页');?></div>
	     </a>
	 </div>


	<div class="css-1tp5kus">
		<a href="<?php echo U('Finance/index');?>" class="css-1smf7ma">
			<div class="css-vurnku"><?php echo L('充币');?> </div>
		</a>
	</div>
	<div class="css-1tp5kus">
		<a href="<?php echo U('Contract/index');?>" class="css-1smf7ma">
			<div class="css-vurnku"><?php echo L('秒合约');?> </div>
		</a>
	</div>
	<div class="css-1tp5kus">
		<a href="<?php echo U('Trade/index');?>" class="css-1smf7ma">
			<div class="css-vurnku"><?php echo L('币币交易');?> </div>
		</a>
	</div>


	 <div class="css-1tp5kus">
	     <a href="<?php echo U('Issue/index');?>" class="css-1smf7ma">
	         <div class="css-vurnku"><img src="/Public/Home/static/imgs/hot-2.svg" class="hot-2">IEO</div>
	     </a>
	 </div>
	 <div class="css-1tp5kus">
	     <a href="<?php echo U('Orepool/index');?>" class="css-1smf7ma">
	         <div class="css-vurnku"> <img src="/Public/Home/static/imgs/hot-2.svg" class="hot-2">DeFi</div>
	     </a>
	 </div>
	 <div class="css-1tp5kus">
	     <a href="<?php echo U('Index/gglist');?>" class="css-1smf7ma">
	         <div class="css-vurnku"><?php echo L('公告中心');?></div>
	     </a>
	 </div>
	 <div class="css-11y6cix"></div>
	 
	 <ul id="nav" class="nav">
	 <div class="css-wu6zme">
	     
	     <?php if($uid != 0): ?><div class="css-mu7imd nav">
	         <div class="css-1smf7ma">
	             <a href="<?php echo U('Finance/index');?>">
	             <div class="css-15owl46"  style="padding: 0px 5px;">
	                 <div class="css-vurnku" style="color:#fff;"><?php echo L('钱包');?></div>
	             </div>
	             </a>
	         </div>
	         <div class="css-1smf7ma">
	             <li class="nLi">
	                 <div class="css-15owl46"  style="padding: 0px 5px;">
	                     <div class="css-vurnku"><?php echo L('订单');?>
	                         <i class="bi bi-caret-down-fill css-1x1srvk" style="font-size:12px;"></i>
	                     </div>
	                 </div>
	                 <ul class="sub" style="padding:0px;display:none;z-index: 999999;">
	                 <!--<div class="order_navlist" style="transform: translate(972px, 64px);">-->
	                 <div class="order_navlist" style="top: 50px;right:180px;">
	                     
	                         <li style="list-style:none;">
	                             <a href="<?php echo U('Trade/bborder');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-ui-checks" style="color:#00b897;font-size:18px;"></i>
	                                 <span style="color:#EAECEF;"><?php echo L('币币交易订单');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('Contract/contractjc');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-sliders" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('合约交易订单');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('Issue/normalissue');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-ui-radios" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('认购订单');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('Orepool/normalmin');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-hammer" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('矿机订单');?></span>
	                             </div>
	                             </a>
	                         </li>
	                     
	                 </div>
	                 </ul>
	             </li>
	         </div>
	         
	         
	         <div class="css-1smf7ma">
	             <li class="nLi">
	                 <div class="css-15owl46" style="padding: 0px 5px;">
	                     <div class="css-vurnku">
	                         <a href="<?php echo U('User/index');?>" style="color: #fff;">
	                         <i class="bi bi-person-circle" style="font-size:20px;"></i>
	                         </a>
	                     </div>
	                 </div>
	                 <ul class="sub" style="padding:0px;display:none;z-index: 999999;">
	                 <div class="order_navlist" style="min-width:220px;top: 60px;right:60px;">
	                     
	                         <li style="list-style:none;">
	                             <div style="width:100%;height:50px;line-height:50px;text-align:left;padding:0px 15px;">
	                                 <span style="font-size:16px;font-weight:bold;color:#EAECEF;"><?php echo ($username); ?></span>
	                                 <?php if($rzstatus == 2): ?><span class="f12 fgreen"><?php echo L('已认证');?></span>
	                                 <?php else: ?>
	                                 <span class="f12 fred"><?php echo L('未认证');?></span><?php endif; ?>
	                             </div>
	                         </li>

	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('User/index');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-person-fill" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('账户总览');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('User/respwd');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-gear" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('安全设置');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('User/authrz');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-shield-fill" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('身份认证');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('User/tgcode');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-person-plus-fill" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('推荐返佣');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('Login/loginout');?>">
	                             <div class="optionli" style="border-top:1px solid #f5f5f5;">
	                                 <i class="bi bi-box-arrow-right" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('退出账号');?></span>
	                             </div>
	                             </a>
	                         </li>
	                     
	                 </div>
	                 </ul>
	                 
	             </li>
	             
	         </div>
	         <div class="css-1smf7ma">
	             
	             <div class="css-15owl46" style="padding: 0px 5px;"> 
	                 <a href="<?php echo U('User/notice');?>" style="color: #fff;">
	                 <div class="css-vurnku">
	                     <i class="bi bi-bell css-6px2js" style="font-size:20px;"></i>
	                     <?php if($sum >= 1): ?><div class="css-1rch7es"><?php echo ($sum); ?></div><?php endif; ?>
	                 </div>
	                 </a>
	             </div>
	         </div>
	     </div>
	     <?php else: ?>
	     <div class="css-mu7imd">
	         <a href="<?php echo U('Login/index');?>">
	         <div class="css-1smf7ma">
	             <div class="css-15owl46"  style="padding: 0px 5px;">
	                 <div class="css-vurnku"><?php echo L('登陆');?></div>
	                 
	             </div>
	         </div>
	         </a>
	     </div>
	     <div class="css-mu7imd" style="border: 2px solid #00b897;border-radius: 5px;">
	         <a href="<?php echo U('Login/register');?>">
	         <div class="css-1smf7ma">
	             <div class="css-15owl46"  style="padding: 0px 5px;">
	                 <div class="css-vurnku" style="color: #00b897"><?php echo L('注册');?></div>
	             </div>
	         </div>
	         </a>
	     </div><?php endif; ?>
	     
	 </div>

	 <div class="css-wu6zme">
	     <li class="nLi">
	     <div class="css-1ql2hru" style="padding: 0px 5px;">
	         <div class="css-1smf7ma"><?php echo L('下载');?></div>
	         <ul class="sub" style="padding:0px;display:none;z-index: 999999;">
	             <div class="order_navlist" style="min-width:220px;top: 50px;right: 60px;">
	                 <div style="width:140px;height:140px;margin:10px auto;">
	                     <img src="/Public/Static/qrcode/FanamLa.png" style="width:100%;border-radius:10px;" />
	                 </div>
	                 <div style="width:100%;height:30px;line-height:30px;text-align:center;">
	                     <span style="color:#fff;font-size:12px;"><?php echo L('自动识别设备');?></span>
	                 </div>
	             </div>
	         </ul>
	     </div>
	     </li>
	     <li class="nLi">
	     <div class="css-1ql2hru" style="padding: 0px 5px;">
	         
	        <?php if(LANG_SET=='zh-cn'){?>
			<div class="css-1smf7ma">中文简体&nbsp;&nbsp;</div>
			<?php }elseif(LANG_SET=='en-us'){?>
			<div class="css-1smf7ma">English&nbsp;&nbsp;</div>	
			<?php }elseif(LANG_SET=='fr-fr'){?>
			<div class="css-1smf7ma">Français&nbsp;&nbsp;</div>	
			<?php }elseif(LANG_SET=='de-de'){?>
			<div class="css-1smf7ma">Deutsch&nbsp;&nbsp;</div>	
			<?php }elseif(LANG_SET=='it-it'){?>
			<div class="css-1smf7ma">Italiano&nbsp;&nbsp;</div>	
			<?php }elseif(LANG_SET=='ja-jp'){?>
            <div class="css-1smf7ma">日本語&nbsp;&nbsp;</div>
            <?php }elseif(LANG_SET=='ko-kr'){?>
            <div class="css-1smf7ma">한국어&nbsp;&nbsp;</div>
            <?php }elseif(LANG_SET=='tr-tr'){?>
            <div class="css-1smf7ma">Türk&nbsp;&nbsp;</div>	
			<?php }?>
			
	     </div>
	     <ul class="sub" style="padding:0px;display:none;">
	        <!--<div class="order_navlist" style="min-width:160px;transform: translate(1161px, 64px);">-->
	        <div class="order_navlist" style="min-width:160px;top:50px;right: 10px;">
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=zh-cn');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">简体中文</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=en-us');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">English</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=fr-fr');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">Français</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=de-de');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">Deutsch</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=ja-jp');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">日本語</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=it-it');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">Italiano</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=ko-kr');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">한국어</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=tr-tr');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">Türk</span>
	                </div>
	                </a>
	            </li>
	       </div>
	     </li>
	 </div>
	 </ul>
</header> 
	            <div class="css-ogtd7z">
	                <div class="css-jrzkh7">
	                    <div id="header_global_js_wxgy34nj" class="css-1aac2e"></div>
	                 </div>
	            </div>
	            <main class="css-1wr4jig" style="background: #fff;">
                    <div class="css-1odg5z2">
                        <div class="css-1xrgo9z"><?php echo L('矿机商城');?></div>
                    </div>
                    <div class="css-1ax9bc0">
                        <div class="css-6mr8u2">
                            <div class="css-abpumn">
                                <span data-bn-type="text" id="allminbtn" class="css-1m3syfi">
                                    <div class="css-cbipbt"><?php echo L('总览');?></div>
                                </span>
                                <span data-bn-type="text" id="dzminbtn" class="css-lk1png">
                                    <div class="css-cbipbt"><?php echo L('独资');?></div>
                                </span>
<!--                                <span data-bn-type="text" id="gxminbtn" class="css-lk1png">-->
<!--                                    <div class="css-cbipbt"><?php echo L('共享');?></div>-->
<!--                                </span>-->
                                <span data-bn-type="text" id="myminbtn" class="css-lk1png">
                                    <div class="css-cbipbt"><?php echo L('我的矿机');?></div>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="css-uliqdc">
                        
                        <!--我的矿机开始-->
                        <div id="myminerbox" style="width:100%;min-height:500px;background:#f5f5f5;padding:20px 50px;display:none;">
                            <?php if(empty($mylist)): ?><div style="width:100%;height:400px;line-height:400px;text-align:center;">
	                            <svg style="height:100px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" fill="none" class="mirror css-1lzksdc"><path fill-rule="evenodd" clip-rule="evenodd" d="M64 8H26v80h58V28L64 8zM36 37h38v4H36v-4zm0 9h38v4H36v-4zm38 9H36v4h38v-4z" fill="url(#not-found-data-light_svg__paint0_linear)"></path><path d="M62 71l4-4 4 4-4 4-4-4z" fill="#fff"></path><path d="M86 50l3-3 3 3-3 3-3-3zM47 21l3-3 3 3-3 3-3-3zM84 28H64V8l20 20z" fill="#E6E8EA"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.171 73.171l14.5-14.5 5.657 5.658-14.5 14.5-5.657-5.657z" fill="url(#not-found-data-light_svg__paint1_linear)"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M51 48c0-8.837-7.163-16-16-16s-16 7.163-16 16 7.163 16 16 16 16-7.163 16-16zm4 0c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20z" fill="url(#not-found-data-light_svg__paint2_linear)"></path><defs><linearGradient id="not-found-data-light_svg__paint0_linear" x1="84" y1="10.162" x2="84" y2="88" gradientUnits="userSpaceOnUse"><stop stop-color="#F5F5F5"></stop><stop offset="1" stop-color="#E6E8EA"></stop></linearGradient><linearGradient id="not-found-data-light_svg__paint1_linear" x1="4.171" y1="68.75" x2="24.328" y2="68.75" gradientUnits="userSpaceOnUse"><stop stop-color="#929AA5"></stop><stop offset="1" stop-color="#76808F"></stop></linearGradient><linearGradient id="not-found-data-light_svg__paint2_linear" x1="15" y1="48" x2="55" y2="48" gradientUnits="userSpaceOnUse"><stop stop-color="#929AA5"></stop><stop offset="1" stop-color="#76808F"></stop></linearGradient></defs></svg>
	                         </div>
	                         <?php else: ?>
                            <?php if(is_array($mylist)): foreach($mylist as $key=>$vo): ?><div style="width:100%;height:250px;background:#fff;margin-bottom:20px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);border-radius:5px;">
                                <div style="width:100%;height:240px;">
                                    <div style="width:50%;height:240px;float:left;padding:5px;">
                                        <div style="width:100%;height:240px;background:#fff;">
                                            <div style="width:100%;height:230px;">
                                                <div style="width:25%;heigth:230px;line-height:150px;text-align:center;float:left;">
                                                    <img src="/Upload/public/<?php echo ($vo["imgs"]); ?>" style="width:60%;">
                                                </div>
                                                <div style="width:75%;padding:10px 0px 10px 10px;float:right;">
                                                    <div style="width:100%;min-height:30px;">
                                                        <span class="f16 fch"><?php echo ($vo["title"]); ?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('购买时间');?>：<?php echo ($vo["addtime"]); ?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('产出币种');?>：<?php echo strtoupper($vo['outcoin']);?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('矿机类型');?>：
                                                        <?php if($vo["type"] == 1): ?><span class="f16 fcy fw"><?php echo L('独资机型');?></span>
                                                        <?php elseif($vo["type"] == 2): ?>    
                                                            <span class="f16 fcy fw"><?php echo L('共享机型');?></span><?php endif; ?>
                                                        </span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('收益类型');?>：
                                                        <?php if($vo["type"] == 1): echo L('按产值');?>
                                                        <?php elseif($vo["type"] == 2): ?>    
                                                            <?php echo L('按产量'); endif; ?>
                                                        </span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('收益方式');?>：<?php echo L('自动收益');?></span>
                                                    </div>
                                                    <?php if($vo["type"] == 2): endif; ?>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('份额占比');?>：<?php echo ($vo["sharebl"]); ?>%</span>
                                                    </div>
                                                       
                                                    </if>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>

                                
                                    <div style="width:40%;height:240px;float:left;padding:5px;">
                                        <div style="width:100%;height:240px;">
                                            <div style="width:100%;height:240px;padding:10px 0px 10px 10px;">
                                                <div style="width:100%;height:30px;">
                                                    <span class="f16 fch"><?php echo L('矿机详情');?></span>
                                                </div>
                                                
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('收益次数');?> ：
                                                    <?php echo ($vo["synum"]); ?> <?php echo L('次');?>
                                                    </span>
                                                </div>
  
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('产出说明');?> ：
                                                    <?php if($vo["outtype"] == 1): echo L('按产值');?>：<?php echo ($vo["outusdt"]); ?>USDT
				                                    <?php elseif($vo["outtype"] == 2): ?>
				                                    <?php echo L('按币量');?>：<?php echo ($vo["outnum"]); ?> <?php echo strtoupper($vo['outcoin']); endif; ?>
                                                    </span>
                                                </div>

                                                
                                                <div style="width:100%;min-height:30px;marin-top:30px;">
                                                    <?php if($vo["status"] == 1): ?><span style="background:#0ecb81;padding:5px 10px;border-radius: 5px;color:#fff;"><?php echo L('正常');?></span>
                                                    <?php elseif($vo["status"] == 2): ?>
                                                    <span style="background:#f5465c;padding:5px 10px;border-radius: 5px;color:#fff;"><?php echo L('停止');?></span>
                                                    <?php elseif($vo["status"] == 3): ?>
                                                    <span style="background:#f5465c;padding:5px 10px;border-radius: 5px;color:#fff;"><?php echo L('过期');?></span><?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div style="width:10%;height:240px;float:left;padding:5px;">
                                        <a href="<?php echo U('Orepool/profitlist');?>" style="text-decoration:none;">
                                        <div style="width:100%;height:240px;line-height:240px;cursor:pointer;">
                                            <span class="f14 fcy fw"><?php echo L('收益账单');?></span>
                                            <i class="bi bi-chevron-right fcy fw" style="font-size:18px;"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                
                            </div><?php endforeach; endif; endif; ?>
                        </div>
                        <!------------------全部共享矿机结束------------------------>
                        
                        <!--共享矿机开始-->
                        <div id="gxminerbox" style="width:100%;min-height:500px;background:#f5f5f5;padding:20px 50px;display:block;">
                            <?php if(empty($clist)): ?><div style="width:100%;height:400px;line-height:400px;text-align:center;">
	                            <svg style="height:100px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" fill="none" class="mirror css-1lzksdc"><path fill-rule="evenodd" clip-rule="evenodd" d="M64 8H26v80h58V28L64 8zM36 37h38v4H36v-4zm0 9h38v4H36v-4zm38 9H36v4h38v-4z" fill="url(#not-found-data-light_svg__paint0_linear)"></path><path d="M62 71l4-4 4 4-4 4-4-4z" fill="#fff"></path><path d="M86 50l3-3 3 3-3 3-3-3zM47 21l3-3 3 3-3 3-3-3zM84 28H64V8l20 20z" fill="#E6E8EA"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.171 73.171l14.5-14.5 5.657 5.658-14.5 14.5-5.657-5.657z" fill="url(#not-found-data-light_svg__paint1_linear)"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M51 48c0-8.837-7.163-16-16-16s-16 7.163-16 16 7.163 16 16 16 16-7.163 16-16zm4 0c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20z" fill="url(#not-found-data-light_svg__paint2_linear)"></path><defs><linearGradient id="not-found-data-light_svg__paint0_linear" x1="84" y1="10.162" x2="84" y2="88" gradientUnits="userSpaceOnUse"><stop stop-color="#F5F5F5"></stop><stop offset="1" stop-color="#E6E8EA"></stop></linearGradient><linearGradient id="not-found-data-light_svg__paint1_linear" x1="4.171" y1="68.75" x2="24.328" y2="68.75" gradientUnits="userSpaceOnUse"><stop stop-color="#929AA5"></stop><stop offset="1" stop-color="#76808F"></stop></linearGradient><linearGradient id="not-found-data-light_svg__paint2_linear" x1="15" y1="48" x2="55" y2="48" gradientUnits="userSpaceOnUse"><stop stop-color="#929AA5"></stop><stop offset="1" stop-color="#76808F"></stop></linearGradient></defs></svg>
	                         </div>
	                         <?php else: ?>
                            <?php if(is_array($clist)): foreach($clist as $key=>$vo): ?><div style="width:100%;height:290px;background:#fff;margin-bottom:20px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);border-radius:5px;">
                                <div style="width:100%;height:240px;">
                                    <div style="width:50%;height:240px;float:left;padding:5px;">
                                        <div style="width:100%;height:240px;background:#fff;">
                                            <div style="width:100%;height:230px;">
                                                <div style="width:25%;heigth:230px;line-height:150px;text-align:center;float:left;">
                                                    <img src="/Upload/public/<?php echo ($vo["imgs"]); ?>" style="width:60%;">
                                                </div>
                                                <div style="width:75%;padding:10px 0px 10px 10px;float:right;">
                                                    <div style="width:100%;min-height:30px;">
                                                        <span class="f16 fch"><?php echo ($vo["title"]); ?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('上市时间');?>：<?php echo ($vo["addtime"]); ?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('产出币种');?>：<?php echo strtoupper($vo['outcoin']);?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('矿机类型');?>：
                                                        <?php if($vo["type"] == 1): ?><span class="f16 fcy fw"><?php echo L('独资机型');?></span>
                                                        <?php elseif($vo["type"] == 2): ?>    
                                                            <span class="f16 fcy fw"><?php echo L('共享机型');?></span><?php endif; ?>
                                                        </span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('收益类型');?>：
                                                        <?php if($vo["type"] == 1): echo L('按产值');?>
                                                        <?php elseif($vo["type"] == 2): ?>    
                                                            <?php echo L('按产量'); endif; ?>
                                                        </span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('收益方式');?>：<?php echo L('自动收益');?></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>

                                
                                    <div style="width:50%;height:240px;float:left;padding:5px;">
                                        <div style="width:100%;height:240px;">
                                            <div style="width:100%;height:240px;padding:10px 0px 10px 10px;">
                                                <div style="width:100%;height:30px;">
                                                    <span class="f16 fch"><?php echo L('矿机详情');?></span>
                                                </div>
                                                
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('矿机单价');?> ：
                                                    <?php echo ($vo["pricenum"]); ?> <?php echo strtoupper($vo['pricecoin']);?>
                                                    </span>
                                                </div>
                                                
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('产出说明');?> ：
                                                    <?php if($vo["outtype"] == 1): echo L('按产值');?>：<?php echo ($vo["dayoutnum"]); ?>USDT
				                                    <?php elseif($vo["outtype"] == 2): ?>
				                                    <?php echo L('按币量');?>：<?php echo ($vo["dayoutnum"]); ?> <?php echo strtoupper($vo['outcoin']); endif; ?>
                                                    </span>
                                                </div>
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('购买条件');?> ：
                                                    <?php if($vo["buyask"] == 1): echo L('最低持仓');?>：<?php echo ($vo["asknum"]); echo L('平台币');?>    
                                                    <?php elseif($vo["buyask"] == 2): ?> 
                                                    <?php echo L('要求直推'); echo ($vo["asknum"]); echo L('人'); endif; ?>
                                                    </span>
                                                </div>

                                                <div style="width:100%;min-height:30px;">
                                                    <span class="f14 fcc"><?php echo ($vo["content"]); ?></span>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div style="width:100%;height:50px;margin-top:10px;padding:0px 20px;">
                                    <div style="width:80%;height:40px;float:left;">
                                        <div class="progress">
					  			    		<?php if(strtotime($vo['starttime']) <= time()){?>
					                        <div class="progress-bar" role="progressbar" style="width:<?php echo ($vo['ycnum'] + $vo['sellnum']) / $vo['allnum'] * 100;?>%;" aria-valuenow="<?php echo ($vo['ycnum'] + $vo['sellnum']) / $vo['allnum'] * 100;?>" aria-valuemin="0" aria-valuemax="100"><?php echo ($vo['ycnum'] + $vo['sellnum']) / $vo['allnum'] * 100;?>%</div>
					                        <?php }elseif(strtotime($vo['starttime']) > time()){?>
					                        <div class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
					                           <?php }?>
					                    </div>
                                    </div>
                                    <div style="width:20%;height:40px;float:left;">
                                        <div style="width:100%;height:40px;text-align:center;">
                                            <a href="<?php echo U('Orepool/kjinfo');?>?id=<?php echo ($vo["id"]); ?>" class="css-bhso1m" style="padding:5px 15px;	        "><?php echo L('立即购买');?></a>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; endif; ?>
                        </div>
                        <!------------------全部共享矿机结束------------------------>
                        
                        
                        <!--独资矿机开始-->
                        <div id="dzminerbox" style="width:100%;min-height:500px;background:#f5f5f5;padding:20px 50px;display:none;">
                            <?php if(empty($blist)): ?><div style="width:100%;height:400px;line-height:400px;text-align:center;">
	                            <svg style="height:100px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" fill="none" class="mirror css-1lzksdc"><path fill-rule="evenodd" clip-rule="evenodd" d="M64 8H26v80h58V28L64 8zM36 37h38v4H36v-4zm0 9h38v4H36v-4zm38 9H36v4h38v-4z" fill="url(#not-found-data-light_svg__paint0_linear)"></path><path d="M62 71l4-4 4 4-4 4-4-4z" fill="#fff"></path><path d="M86 50l3-3 3 3-3 3-3-3zM47 21l3-3 3 3-3 3-3-3zM84 28H64V8l20 20z" fill="#E6E8EA"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.171 73.171l14.5-14.5 5.657 5.658-14.5 14.5-5.657-5.657z" fill="url(#not-found-data-light_svg__paint1_linear)"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M51 48c0-8.837-7.163-16-16-16s-16 7.163-16 16 7.163 16 16 16 16-7.163 16-16zm4 0c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20z" fill="url(#not-found-data-light_svg__paint2_linear)"></path><defs><linearGradient id="not-found-data-light_svg__paint0_linear" x1="84" y1="10.162" x2="84" y2="88" gradientUnits="userSpaceOnUse"><stop stop-color="#F5F5F5"></stop><stop offset="1" stop-color="#E6E8EA"></stop></linearGradient><linearGradient id="not-found-data-light_svg__paint1_linear" x1="4.171" y1="68.75" x2="24.328" y2="68.75" gradientUnits="userSpaceOnUse"><stop stop-color="#929AA5"></stop><stop offset="1" stop-color="#76808F"></stop></linearGradient><linearGradient id="not-found-data-light_svg__paint2_linear" x1="15" y1="48" x2="55" y2="48" gradientUnits="userSpaceOnUse"><stop stop-color="#929AA5"></stop><stop offset="1" stop-color="#76808F"></stop></linearGradient></defs></svg>
	                         </div>
	                         <?php else: ?>
                            <?php if(is_array($blist)): foreach($blist as $key=>$vo): ?><div style="width:100%;height:290px;background:#fff;margin-bottom:20px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);border-radius:5px;">
                                <div style="width:100%;height:240px;">
                                    <div style="width:50%;height:240px;float:left;padding:5px;">
                                        <div style="width:100%;height:240px;background:#fff;">
                                            <div style="width:100%;height:230px;">
                                                <div style="width:25%;heigth:230px;line-height:150px;text-align:center;float:left;">
                                                    <img src="/Upload/public/<?php echo ($vo["imgs"]); ?>" style="width:60%;">
                                                </div>
                                                <div style="width:75%;padding:10px 0px 10px 10px;float:right;">
                                                    <div style="width:100%;min-height:30px;">
                                                        <span class="f16 fch"><?php echo ($vo["title"]); ?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('上市时间');?>：<?php echo ($vo["addtime"]); ?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('产出币种');?>：<?php echo strtoupper($vo['outcoin']);?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('矿机类型');?>：
                                                        <?php if($vo["type"] == 1): ?><span class="f16 fcy fw"><?php echo L('独资机型');?></span>
                                                        <?php elseif($vo["type"] == 2): ?>    
                                                            <span class="f16 fcy fw"><?php echo L('共享机型');?></span><?php endif; ?>
                                                        </span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('收益类型');?>：
                                                        <?php if($vo["type"] == 1): echo L('按产值');?>
                                                        <?php elseif($vo["type"] == 2): ?>    
                                                            <?php echo L('按产量'); endif; ?>
                                                        </span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('收益方式');?>：<?php echo L('自动收益');?></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>

                                
                                    <div style="width:50%;height:240px;float:left;padding:5px;">
                                        <div style="width:100%;height:240px;">
                                            <div style="width:100%;height:240px;padding:10px 0px 10px 10px;">
                                                <div style="width:100%;height:30px;">
                                                    <span class="f16 fch"><?php echo L('矿机详情');?></span>
                                                </div>
                                                
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('矿机单价');?> ：
                                                    <?php echo ($vo["pricenum"]); ?> <?php echo strtoupper($vo['pricecoin']);?>
                                                    </span>
                                                </div>
                                                
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('产出说明');?> ：
                                                    <?php if($vo["outtype"] == 1): echo L('按产值');?>：<?php echo ($vo["dayoutnum"]); ?>USDT
				                                    <?php elseif($vo["outtype"] == 2): ?>
				                                    <?php echo L('按币量');?>：<?php echo ($vo["dayoutnum"]); ?> <?php echo strtoupper($vo['outcoin']); endif; ?>
                                                    </span>
                                                </div>
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('购买条件');?> ：
                                                    <?php if($vo["buyask"] == 1): echo L('最低持仓');?>：<?php echo ($vo["asknum"]); echo L('平台币');?>    
                                                    <?php elseif($vo["buyask"] == 2): ?> 
                                                    <?php echo L('要求直推'); echo ($vo["asknum"]); echo L('人'); endif; ?>
                                                    </span>
                                                </div>

                                                <div style="width:100%;min-height:30px;">
                                                    <span class="f14 fcc"><?php echo ($vo["content"]); ?></span>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div style="width:100%;height:50px;margin-top:10px;padding:0px 20px;">
                                    <div style="width:80%;height:40px;float:left;">
                                        <div class="progress">
					  			    		<?php if(strtotime($vo['starttime']) <= time()){?>
					                        <div class="progress-bar" role="progressbar" style="width:<?php echo ($vo['ycnum'] + $vo['sellnum']) / $vo['allnum'] * 100;?>%;" aria-valuenow="<?php echo ($vo['ycnum'] + $vo['sellnum']) / $vo['allnum'] * 100;?>" aria-valuemin="0" aria-valuemax="100"><?php echo ($vo['ycnum'] + $vo['sellnum']) / $vo['allnum'] * 100;?>%</div>
					                        <?php }elseif(strtotime($vo['starttime']) > time()){?>
					                        <div class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
					                           <?php }?>
					                    </div>
                                    </div>
                                    <div style="width:20%;height:40px;float:left;">
                                        <div style="width:100%;height:40px;text-align:center;">
                                            <a href="<?php echo U('Orepool/kjinfo');?>?id=<?php echo ($vo["id"]); ?>" class="css-bhso1m" style="padding:5px 15px;	        "><?php echo L('立即购买');?></a>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; endif; ?>
                        </div>
                        <!------------------全部独资矿机结束------------------------>
                        
                        
                        
                        <!--全部的矿机-->
                        <div id="allminerbox" style="width:100%;min-height:500px;background:#f5f5f5;padding:20px 50px;display:none;">
                            <?php if(empty($alist)): ?><div style="width:100%;height:400px;line-height:400px;text-align:center;">
	                            <svg style="height:100px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" fill="none" class="mirror css-1lzksdc"><path fill-rule="evenodd" clip-rule="evenodd" d="M64 8H26v80h58V28L64 8zM36 37h38v4H36v-4zm0 9h38v4H36v-4zm38 9H36v4h38v-4z" fill="url(#not-found-data-light_svg__paint0_linear)"></path><path d="M62 71l4-4 4 4-4 4-4-4z" fill="#fff"></path><path d="M86 50l3-3 3 3-3 3-3-3zM47 21l3-3 3 3-3 3-3-3zM84 28H64V8l20 20z" fill="#E6E8EA"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.171 73.171l14.5-14.5 5.657 5.658-14.5 14.5-5.657-5.657z" fill="url(#not-found-data-light_svg__paint1_linear)"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M51 48c0-8.837-7.163-16-16-16s-16 7.163-16 16 7.163 16 16 16 16-7.163 16-16zm4 0c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20z" fill="url(#not-found-data-light_svg__paint2_linear)"></path><defs><linearGradient id="not-found-data-light_svg__paint0_linear" x1="84" y1="10.162" x2="84" y2="88" gradientUnits="userSpaceOnUse"><stop stop-color="#F5F5F5"></stop><stop offset="1" stop-color="#E6E8EA"></stop></linearGradient><linearGradient id="not-found-data-light_svg__paint1_linear" x1="4.171" y1="68.75" x2="24.328" y2="68.75" gradientUnits="userSpaceOnUse"><stop stop-color="#929AA5"></stop><stop offset="1" stop-color="#76808F"></stop></linearGradient><linearGradient id="not-found-data-light_svg__paint2_linear" x1="15" y1="48" x2="55" y2="48" gradientUnits="userSpaceOnUse"><stop stop-color="#929AA5"></stop><stop offset="1" stop-color="#76808F"></stop></linearGradient></defs></svg>
	                         </div>
	                         <?php else: ?>
                            <?php if(is_array($alist)): foreach($alist as $key=>$vo): ?><div style="width:100%;height:290px;background:#fff;margin-bottom:20px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);border-radius:5px;">
                                <div style="width:100%;height:240px;">
                                    <div style="width:50%;height:240px;float:left;padding:5px;">
                                        <div style="width:100%;height:240px;background:#fff;">
                                            <div style="width:100%;height:230px;">
                                                <div style="width:25%;heigth:230px;line-height:150px;text-align:center;float:left;">
                                                    <img src="/Upload/public/<?php echo ($vo["imgs"]); ?>" style="width:60%;">
                                                </div>
                                                <div style="width:75%;padding:10px 0px 10px 10px;float:right;">
                                                    <div style="width:100%;min-height:30px;">
                                                        <span class="f16 fch"><?php echo ($vo["title"]); ?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('上市时间');?>：<?php echo ($vo["addtime"]); ?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('产出币种');?>：<?php echo strtoupper($vo['outcoin']);?></span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('矿机类型');?>：
                                                        <?php if($vo["type"] == 1): ?><span class="f16 fcy fw"><?php echo L('独资机型');?></span>
                                                        <?php elseif($vo["type"] == 2): ?>    
                                                            <span class="f16 fcy fw"><?php echo L('共享机型');?></span><?php endif; ?>
                                                        </span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('收益类型');?>：
                                                        <?php if($vo["type"] == 1): echo L('按产值');?>
                                                        <?php elseif($vo["type"] == 2): ?>    
                                                            <?php echo L('按产量'); endif; ?>
                                                        </span>
                                                    </div>
                                                    <div style="width:100%;height:30px;">
                                                        <span class="f14 fcc"><?php echo L('收益方式');?>：<?php echo L('自动收益');?></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>

                                
                                    <div style="width:50%;height:240px;float:left;padding:5px;">
                                        <div style="width:100%;height:240px;">
                                            <div style="width:100%;height:240px;padding:10px 0px 10px 10px;">
                                                <div style="width:100%;height:30px;">
                                                    <span class="f16 fch"><?php echo L('矿机详情');?></span>
                                                </div>
                                                
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('矿机单价');?> ：
                                                    <?php echo ($vo["pricenum"]); ?> <?php echo strtoupper($vo['pricecoin']);?>
                                                    </span>
                                                </div>
                                                
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('产出说明');?> ：
                                                    <?php if($vo["outtype"] == 1): echo L('按产值');?>：<?php echo ($vo["dayoutnum"]); ?>USDT
				                                    <?php elseif($vo["outtype"] == 2): ?>
				                                    <?php echo L('按币量');?>：<?php echo ($vo["dayoutnum"]); ?> <?php echo strtoupper($vo['outcoin']); endif; ?>
                                                    </span>
                                                </div>
                                                <div style="width:100%;height:30px;">
                                                    <span class="f14 fcc"><?php echo L('购买条件');?> ：
                                                    <?php if($vo["buyask"] == 1): echo L('最低持仓');?>：<?php echo ($vo["asknum"]); echo L('平台币');?>    
                                                    <?php elseif($vo["buyask"] == 2): ?> 
                                                    <?php echo L('要求直推'); echo ($vo["asknum"]); echo L('人'); endif; ?>
                                                    </span>
                                                </div>

                                                <div style="width:100%;min-height:30px;">
                                                    <span class="f14 fcc"><?php echo ($vo["content"]); ?></span>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div style="width:100%;height:50px;margin-top:10px;padding:0px 20px;">
                                    <div style="width:80%;height:40px;float:left;">
                                        <div class="progress">
					  			    		<?php if(strtotime($vo['starttime']) <= time()){?>
					                        <div class="progress-bar" role="progressbar" style="width:<?php echo ($vo['ycnum'] + $vo['sellnum']) / $vo['allnum'] * 100;?>%;" aria-valuenow="<?php echo ($vo['ycnum'] + $vo['sellnum']) / $vo['allnum'] * 100;?>" aria-valuemin="0" aria-valuemax="100"><?php echo ($vo['ycnum'] + $vo['sellnum']) / $vo['allnum'] * 100;?>%</div>
					                        <?php }elseif(strtotime($vo['starttime']) > time()){?>
					                        <div class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
					                           <?php }?>
					                    </div>
                                    </div>
                                    <div style="width:20%;height:40px;float:left;">
                                        <div style="width:100%;height:40px;text-align:center;">
                                            <a href="<?php echo U('Orepool/kjinfo');?>?id=<?php echo ($vo["id"]); ?>" class="css-bhso1m" style="padding:5px 15px;	        "><?php echo L('立即购买');?></a>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; endif; ?>
                        </div>
                        <!------------------全部矿机总览结束------------------------>
                        
                        
                        
                    </div>
	            </main>

	            <footer class="css-4qtnb6" style="height: 200px !important;">
    <div style="width:100%;height:150px;background: #181A20;padding:10px 48px;">
        <div style="width:100%;height:60px;">
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: left">
                <span
                        style="color: #fff;
                                font-size: 36px;
                                font-weight: 600;"
                ><?php echo L('PNSCX');?></span>
            </div>
            <!--<div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('privacy')">-->
            <!--    <a href="avascript:void(0)"  class="footer-box-span"  style="color:#848E9C;"><?php echo L('隐私政策申明');?></a>-->
            <!--</div>-->
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('service')">
                <a href="avascript:void(0)"  class="footer-box-span"  style="color:#848E9C;"><?php echo L('用户服务协议');?></a>
            </div>
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('msb')">
                <a href="avascript:void(0)"  class="footer-box-span"  style="color:#848E9C;"><?php echo L('MSB认证');?></a>
            </div>
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('about')">
                <a href="javascript:void(0)" class="footer-box-span" style="color:#848E9C;"><?php echo L('关于我们');?></a>
            </div>
        </div>
        <div style="width:100%;height:60px;line-height:90px;text-align:center;border-top:1px solid #848E9C;">
            <span style="color:#848E9C;">CopyRight © 2017 - 2022 PNSCX. All Rights Reserved.</span>
        </div>
    </div>
</footer>


<div class="pop-box" id="pop-box" style="display: none" onclick="pop_box_hide()">
    <div class="pop-content">
        <div class="pop-content-desc" style="color: #2c3e50 !important;">

        </div>
    </div>
</div>

<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
<script src="/Public/Home/static/js/layer/layer.js"></script>
<script>

    let text_obj = {
        "privacy" : "<div data-v-73cf4925=\"\"><p>(\"The Company\") understands the importance of including customers' personal information, and will comply with the provisions of the \"Personal Information Protection Act\" (\"Act\"), and endeavor to handle in an appropriate manner in accordance with the provisions of this privacy policy (\"Privacy Policy\") And protect personal information.</p>\n" +
            "<p>1. Definition</p>\n" +
            "<p>In the privacy policy, personal information refers to the “personal information” defined in the first paragraph of Article 2 of the Act, that is, information related to living individuals. This information can use the name, date of birth or other information contained in the information (including easy association To other information, so as to identify a specific individual) in the description to identify a specific individual.</p>\n" +
            "<p>2. Purpose of use</p>\n" +
            "<p>The company uses customers’ personal information for the following purposes:</p>\n" +
            "<p>Provide and improve the company's products or services;</p>\n" +
            "<p>Notify the company's products, services or activities;</p>\n" +
            "<p>Carry out marketing, survey or analysis to expand the scope of the company's products or services or improve their quality;</p>\n" +
            "<p>Provide maintenance or support for the company's services;</p>\n" +
            "<p>Notify the company of revisions to the terms of use, policies, etc. (\"Terms\") related to the services provided.</p>\n" +
            "<p>Deal with violations of the terms of the company's services;</p>\n" +
            "<p>Verify the account held by the user;</p>\n" +
            "<p>Verify the transfer to the user's account; or communicate in emergency situations.</p>\n" +
            "<p>Any other purpose related to the above purpose.</p>\n" +
            "<p>3. Change the purpose of use</p>\n" +
            "<p>The company can change the purpose of use of personal information so that the changed purpose of use can be reasonably regarded as related to the original purpose of use. After the purpose of use is changed, the company shall notify the user or publicly announce the changed purpose of use.</p>\n" +
            "<p>4. Restrict use</p>\n" +
            "<p>Without the consent of the relevant customer, the company shall not use personal information beyond the scope necessary for the realization of the purpose of use, unless permitted by the Act or other laws or regulations; however, this provision does not apply to the following situations:</p>\n" +
            "<p>Use personal information in accordance with laws and regulations;</p>\n" +
            "<p>The use of personal information is necessary to protect personal life, body or property, and it is difficult to obtain the consent of relevant customers;</p>\n" +
            "<p>The use of personal information is necessary to improve public health or promote the physical and mental health of children, and it is difficult to obtain the consent of relevant customers;</p>\n" +
            "<p>Or the use of personal information is necessary for the national government, local government, or individuals or entities entrusted to perform affairs prescribed by laws and regulations, and obtaining the consent of relevant customers may hinder the execution of related affairs.</p>\n" +
            "<p>5. Appropriate collection</p>\n" +
            "<p>The company may use appropriate means to collect personal information, but will not use deception or other improper means to collect personal information.</p>\n" +
            "<p>6. Security Control</p>\n" +
            "<p>The company fully and appropriately supervises its employees to ensure safe control of personal information to deal with the risk of loss, destruction, tampering or leakage.</p>\n" +
            "<p>7. If the customer requests the company to correct, add or delete personal information on the grounds that the personal information is contrary to the facts in accordance with the provisions of the Act, the company should first confirm that the request was made by the person in charge, and then immediately make use of the purpose of use Carry out necessary investigations within the necessary scope, and then correct according to the investigation results, add or delete personal information, and notify the customer of the relevant situation (the company decides not to perform the correction, and the company shall notify the customer of the relevant situation when adding or deleting); but According to the provisions of the Act or other laws and regulations, the company is not obliged to perform corrections. When adding or deleting, the provisions do not apply.</p>\n" +
            "<p>8. Forbidden</p>\n" +
            "<p>If the customer requests the company to stop using or delete personal information on the grounds that the company’s processing of personal information exceeds the previously announced purpose of use or obtains personal information by deception or other improper means in accordance with the provisions of the Act, and the investigation proves that If the request is reasonable, the company should first confirm that the request was made by the person in charge, and then immediately stop using or delete personal information and notify the customer of the relevant situation; however, the company is not obliged to stop according to the Act or other laws and regulations. This rule does not apply when using or deleting personal information.</p>\n" +
            "<p>9. Use information recording procedures and other technologies</p>\n" +
            "<p>The services provided by the company may use information recording procedures or similar technologies. These technologies help the company understand the use of the company's services, etc. and continue to improve services. When the user wants to disable the information recording program, the user can change the settings of the web browser to disable the information recording program. Please note that after the information logging program is disabled, users will no longer be able to use some parts of the service.</p></div>",
        "service" : "<div data-v-73cf4925=\"\"><p>The IDCIex Global user agreement is the relevant rights and obligations stipulated by the user and the IDCIex Global platform for various services, and is contractual.</p>\n" +
            "<p>By registering and using this website, the user means that he accepts and agrees to all the conditions and terms of the \"User Agreement\". Both IDCIex Global and the user have carefully read all the terms in this \"User Agreement\" and the legal statements and operations issued by IDCIex Global The content of the rules, this agreement and the aforementioned terms of service, legal statements and operating rules have been known, understood and accepted, and agreed to use them as the basis for determining the rights and obligations of both parties.</p>\n" +
            "<p>The IDCIex Global \"legal statement\" is an essential part of this agreement. When the user accepts this agreement, it shall be deemed to have accepted the entire content of the IDCIex Global \"legal statement\". The content of this agreement includes the body of this agreement and the published or Various rules, statements, and instructions that may be released in the future. All rules, statements, and instructions are an integral part of the agreement and have the same legal effect as the body of the agreement.</p>\n" +
            "<p>1. User service</p>\n" +
            "<p>1.1 IDCIex Global provides online trading platform services for users to conduct encrypted digital currency transactions through the platform. IDCIex Global does not participate in the buying and selling of any digital currency itself as a buyer or seller.</p>\n" +
            "<p>1.2 Users have the right to browse real-time digital currency market quotations and transaction information on IDCIex Global, and have the right to submit digital currency transaction instructions and complete digital currency transactions through the IDCIex Global platform.</p>\n" +
            "<p>1.3 Users have the right to view their information under the platform member account in IDCIex Global, and have the right to use the functions provided by IDCIex Global to operate.</p>\n" +
            "<p>1.4 Users have the right to participate in website activities organized by the platform in accordance with the activity rules published by IDCIex Global.</p>\n" +
            "<p>1.5 Users should abide by laws, regulations, regulatory documents and policy requirements, ensure the legitimacy of all funds and digital currency sources in the account, and must not engage in illegal or other damage to the platform or the third party in IDCIex Global or use IDCIex Global services. The activities of tripartite rights, such as sending or receiving any information that violates laws, regulations, public order and good customs, or infringes on the rights and interests of others, sending or receiving pyramid schemes or other harmful information or speech, using or forging IDCIex Global electronics without the authorization of IDCIex Global Email header information, etc.</p>\n" +
            "<p>1.6 Users should abide by laws and regulations, and should properly use and keep their IDCIex Global platform account and password, fund transaction password, mobile phone number bound to the registration time, and the security of the mobile phone verification code received by the mobile phone. The user is fully responsible for any operations and consequences performed using his platform account and password, capital password, and mobile phone verification code. When the user discovers that the IDCIex Global platform account, password or fund password, verification code is used by a third party without its authorization, or there are other account security issues, the IDCIex Global platform will be notified immediately and effectively, and the platform will be required to suspend the service IDCIex Global of the platform account. The IDCIex Global platform has the right to take action on the user’s request within a reasonable time, but it does not assume any responsibility for the losses that the user has suffered before the IDCIex Global platform takes action. The user shall not give, borrow, rent, transfer or otherwise dispose of the IDCIex Global platform account to others without the consent of the IDCIex Global platform.</p>\n" +
            "<p>1.7 The user shall abide by the user agreement and other terms of service and operating rules published and updated by the IDCIex Global platform from time to time.</p>\n" +
            "<p>Second, the rights and obligations of users</p>\n" +
            "<p>2.1 The user has the right to accept the digital currency trading platform services provided by IDCIex Global in accordance with this agreement.</p>\n" +
            "<p>2.2 The user has the right to terminate the use of IDCIex Global platform services at any time.</p>\n" +
            "<p>2.3 Users have the right to withdraw the balance of funds in IDCIex Global at any time, but they need to pay the corresponding withdrawal fees to the IDCIex Global platform.</p>\n" +
            "<p>2.4 The user is responsible for the authenticity, validity and security of the personal information provided during registration.</p>\n" +
            "<p>2.5 When users conduct digital currency transactions on the IDCIex Global platform, they must not maliciously interfere with the normal conduct of digital currency transactions and disrupt the order of transactions.</p>\n" +
            "<p>2.6 Users must not interfere with the normal operation of the IDCIex Global platform or interfere with other users' use of the IDCIex Global platform services by any technical means or other means.</p>\n" +
            "<p>2.7 If users have litigation with other users due to online transactions, they must not request the IDCIex Global platform to provide relevant data through judicial or administrative channels.</p>\n" +
            "<p>2.8 Users shall not maliciously slander the reputation of the IDCIex Global platform by fabricating facts or other means.</p>\n" +
            "<p>Third, the rights and obligations of the IDCIex Global platform</p>\n" +
            "<p>3.1 If the user does not have the registration qualifications stipulated in this agreement, the IDCIex Global platform has the right to refuse the user to register, and the registered user has the right to cancel his IDCIex Global platform member account. The IDCIex Global platform suffers losses due to this. The right to claim compensation from the aforementioned users or their legal representatives. At the same time, the IDCIex Global platform reserves the right to decide whether to accept user registration under any other circumstances.</p>\n" +
            "<p>When the IDCIex Global platform finds that the account user is not the initial registrant of the account, it has the right to suspend the use of the account.</p>\n" +
            "<p>3.2 When the IDCIex Global platform reasonably suspects that the information provided by the user is incorrect, false, invalid or incomplete through technical testing, manual sampling and other testing methods, it has the right to notify the user to correct, update the information or suspend, and terminate the provision of the IDCIex Global platform. service.</p>\n" +
            "<p>3.3 The IDCIex Global platform has the right to correct any information displayed on the IDCIex Global platform when there are obvious errors.</p>\n" +
            "<p>The platform reserves the right to modify, suspend or terminate the IDCIex Global platform services at any time. The IDCIex Global platform exercises the right to modify or suspend the services without prior notice to the user. If the IDCIex Global platform terminates one or more services of the IDCIex Global platform, The termination will take effect on the day when the IDCIex Global platform publishes the termination announcement on the website.</p>\n" +
            "<p>3.4 The IDCIex Global platform shall adopt necessary technical means and management measures to ensure the normal operation of the IDCIex Global platform, and provide necessary and reliable trading environment and transaction services to maintain the order of digital currency transactions.</p>\n" +
            "<p>3.5 If the user has not used the IDCIex Global platform member account and password to log in to the IDCIex Global platform for three consecutive years, the IDCIex Global platform has the right to cancel the user's IDCIex Global platform account. After the account is cancelled, the IDCIex Global platform has the right to open the corresponding member name to other users for registration.</p>\n" +
            "<p>3.7 The IDCIex Global platform guarantees the safety of users' RMB funds and digital currency custody by strengthening technical investment and improving security precautions. It is obliged to notify users in advance when there are foreseeable security risks in user funds.</p>\n" +
            "<p>3.8 The IDCIex Global platform has the right to delete all kinds of content and information on the IDCIex Global platform website that do not comply with national laws and regulations, regulatory documents or reports stipulated by the IDCIex Global platform website. The IDCIex Global platform does not need to notify in advance to exercise this right user.</p>\n" +
            "<p>Four, special statement</p>\n" +
            "<p>To the extent permitted by law, under any circumstances, the IDCIex Global platform is protected against maintenance of information network equipment, information network connection failures, computer, communications or other system failures, power failures, strikes, labor disputes, riots, and uprisings. , Riots, insufficient productivity or production data, fires, floods, storms, explosions, wars, government actions, orders from judicial administrative organs, other force majeure or third-party inactions caused by inability to service or delayed services, and users suffered as a result The loss is not liable.</p>\n" +
            "<p>Five, customer service</p>\n" +
            "<p>The IDCIex Global platform has established a professional customer service team and established a complete customer service system to ensure the smooth flow of user questions and complaint channels in terms of technology, personnel and systems, and provide users with timely troubleshooting and complaint feedback.</p>\n" +
            "<p>Six, intellectual property</p>\n" +
            "<p>6.1 All intellectual achievements contained in the IDCIex Global platform include but are not limited to website logos, databases, website design, text and graphics, software, photos, videos, music, sounds and the foregoing combinations, software compilation, related source codes and software applications The intellectual property rights of programs and scripts are owned by the IDCIex Global platform. Users shall not copy, change, copy, send or use any of the aforementioned materials or content for commercial purposes.</p>\n" +
            "<p>6.2 All rights (including but not limited to goodwill and trademarks, logos) contained in the name of the IDCIex Global platform belong to the IDCIex Global platform.</p>\n" +
            "<p>6.3 The user's acceptance of this agreement shall be deemed as the user's initiative to have the copyright of any form of information published on the IDCIex Global platform, including but not limited to: reproduction rights, distribution rights, rental rights, exhibition rights, performance rights, projection rights, broadcasting rights Rights, information network communication rights, filming rights, adaptation rights, translation rights, compilation rights and other transferable rights attributable to the copyright owner are exclusively transferred to the IDCIex Global platform for free, and the IDCIex Global platform has the right to infringe on any subject Individually file a lawsuit and obtain full compensation. This agreement is a written agreement stipulated in Article 25 of the \"United Nations Copyright Law\", and its validity is applicable to the content of any copyright law-protected works published by users on the IDCIex Global platform, regardless of the formation of the content Before signing this agreement or after signing this agreement.</p>\n" +
            "<p>6.4 Users shall not illegally use the IDCIex Global platform or the intellectual property rights of others when using the IDCIex Global platform services.</p>\n" +
            "<p>Seven, privacy policy</p>\n" +
            "<p>7.1 When a user registers an IDCIex Global platform account or payment account, the user provides personal registration information according to the requirements of the IDCIex Global platform, including but not limited to identity card information.</p>\n" +
            "<p>7.2 When the user uses the IDCIex Global platform service or visits the IDCIex Global platform webpage, the IDCIex Global platform automatically receives and records the server value on the user’s browser, including but not limited to data such as IP address and user requirements for access Web records of.</p>\n" +
            "<p>7.3 Relevant data collected by the IDCIex Global platform of users' transactions on the IDCIex Global platform, including but not limited to records of bids and purchases.</p>\n" +
            "<p>7.4 The personal information of other users obtained by the IDCIex Global platform through legal means.</p>\n" +
            "<p>7.5 The IDCIex Global platform will not sell or lend the user's personal information to anyone unless the user's permission is obtained in advance. The IDCIex Global platform does not allow any third party to collect, edit, sell or disseminate the user's personal information by any means.</p>\n" +
            "<p>7.6 The IDCIex Global platform keeps the obtained customer identity data and transaction information confidential, and must not provide customer identity data and transaction information to any unit or individual, unless otherwise provided by laws and regulations.</p>\n" +
            "<p>Eight, anti-money laundering</p>\n" +
            "<p>8.1 The IDCIex Global platform complies with and implements the provisions of the \"Anti-Money Laundering Law of the People's Republic of China\" to identify users, maintain a system for customer identity data and transaction history records, as well as a system for large and suspicious transaction reports.</p>\n" +
            "<p>8.2 When users register and modify their real-name information, they should provide and upload necessary evidence such as a copy of their ID card. The IDCIex Global platform will identify and compare the ID card information provided by the user. The IDCIex Global platform has reasonable grounds to suspect that when a user registers with a false identity, it has the right to refuse to register or cancel the registered account.</p>\n" +
            "<p>8.3 The IDCIex Global platform refers to the provisions of the “Measures for the Administration of Large-Value Transactions and Suspicious Transaction Reports of Financial Institutions” to keep historical records of large-value transactions and transactions suspected of money laundering. When regulatory agencies require records of large-value transactions and suspicious transactions, Provide to regulatory agencies.</p>\n" +
            "<p>8.4 The IDCIex Global platform saves user identity information, large-value transactions, and historical records of suspicious transactions, assists in accordance with the law, cooperates with judicial and administrative law enforcement agencies in combating money laundering activities, and assists judicial agencies, customs, taxation and other departments to inquire in accordance with laws and regulations , Freezing and deducting customer deposits.</p>\n" +
            "<p>8.5 According to the national anti-money laundering policy and the protection of customer assets, the name of the remitter must be the same as the real-name certified name.</p>\n" +
            "<p>Nine. Liability for breach of contract</p>\n" +
            "<p>9.1 The violation of the IDCIex Global platform or the user of this agreement constitutes a breach of contract, and the breaching party shall be liable for breach of contract to the observant party.</p>\n" +
            "<p>9.2 If the IDCIex Global platform causes losses to the IDCIex Global platform due to untrue, incomplete or inaccurate information provided by the user, the IDCIex Global platform has the right to request the user to compensate the IDCIex Global platform for losses.</p>\n" +
            "<p>9.3 If a user engages in illegal activities on the IDCIex Global platform or using the IDCIex Global platform services due to violation of laws and regulations or the provisions of this agreement, the IDCIex Global platform has the right to immediately terminate the continued provision of IDCIex Global platform services to them, and cancel them Account and demand compensation for the losses caused to the IDCIex Global platform.</p>\n" +
            "<p>9.4 If User interferes with the operation of IDCIex Global Platform by technical means or interferes with the use of IDCIex Global Platform by other Users, IDCIex Global shall have the right to immediately cancel the account of the User on IDCIex Global Platform and claim compensation for the losses caused to IDCIex Global.</p>\n" +
            "<p>9.5 If users maliciously slander the reputation of the IDCIex Global platform by fabricating facts, etc., the IDCIex Global platform has the right to request the user to publicly apologize to the IDCIex Global platform, compensate for the losses caused to the IDCIex Global platform, and have the right to terminate it Provide IDCIex Global platform services.</p>\n" +
            "<p>Ten. Entry into force and interpretation of the agreement</p>\n" +
            "<p>This agreement takes effect when the user clicks on the IDCIex Global platform registration page to agree to register and complete the registration process, and obtains the IDCIex Global platform account and password, and is binding on the IDCIex Global platform and users.</p>\n" +
            "<p>Eleven. Modification and termination of the agreement</p>\n" +
            "<p>11.1 Changes to the agreement: the IDCIex Global platform has the right to change the content of this agreement or other terms of service and operating rules published by the IDCIex Global platform at any time. When the change is made, the IDCIex Global platform will publish an announcement in a prominent place on the IDCIex Global platform. , The change takes effect when the announcement is released. If the user continues to use the services provided by the IDCIex Global platform, it is deemed that the user agrees to the content changes. If the user does not agree with the content after the change, the user has the right to cancel the IDCIex Global platform account and stop Use IDCIex Global platform services.</p>\n" +
            "<p>11.2 Termination of the agreement</p>\n" +
            "<p>11.2.1 The IDCIex Global platform has the right to cancel the user's IDCIex Global platform account in accordance with this agreement, and this agreement terminates on the date of account cancellation.</p>\n" +
            "<p>11.2.2 The IDCIex Global platform has the right to terminate all IDCIex Global platform services in accordance with this agreement, and this agreement terminates on the day when all IDCIex Global platform services are terminated.</p>\n" +
            "<p>11.2.3 After the termination of this agreement, the user has no right to require the IDCIex Global platform to continue to provide it with any services or perform any other obligations, including but not limited to requiring the IDCIex Global platform to retain or disclose its original IDCIex Global platform to the user Any information in the account, forward any information that has not been read or sent to the user or a third party.</p>\n" +
            "<p>11.2.4 The termination of this agreement does not affect the observant party to the breaching party to pursue liability for breach of contract.</p>\n" +
            "<p>&nbsp;</p></div>",
        "msb" : '<img src="/Public/Home/static/imgs/1.jpeg" style="width: 45%">\n' +
            '            <img src="/Public/Home/static/imgs/2.jpeg" style="width: 45%">',
        "about" : "<div data-v-73cf4925=\"\"><p>&nbsp; &nbsp; &nbsp; Robitl cryptocurrency exchange is headquartered in Singapore. In addition, there are three operation centers in the United States, South Korea, and Hong Kong. The scope of services is vast and the market radiates all over the world.</p>\n" +
            "<p>&nbsp; &nbsp; &nbsp; Robitl has a professional, efficient and experienced blockchain technology and operation team with decades of experience in Internet development and services. A group of Internet experts with unique insights and foresight are committed to providing a safe, convenient, stable and low transaction cost platform for global cryptocurrency contract trading users. The main members of the team come from well-known companies such as Google, Amazon and Alibaba.</p>\n" +
            "<p>&nbsp;</p>\n" +
            "<p><strong>A. Strength</strong></p>\n" +
            "<p>Robitl is committed to building a safe and reliable cryptocurrency trading platform. The team has decades of experience in financial risk control. The core members graduated from prestigious universities such as Harvard University, Stanford University, University of California, Berkeley, Hong Kong University, Seoul University and Tsinghua University. Robitl is headquartered in Singapore and holds dual financial licenses. The platform is stable for a long time and venture capital is guaranteed.</p>\n" +
            "<p><strong>B, focus</strong></p>\n" +
            "<p>Robitl focuses on cryptocurrency intraday trading, contract trading, second contract trading, ICO and cloud mining. The exchange provides systematic technology and service solutions for contract transactions, and selects the world's mainstream cryptocurrencies.</p>\n" +
            "<p><strong>C, smooth</strong></p>\n" +
            "<p>The exchange system fully optimizes the user experience, the load multi-point shunt technology maximizes the smoothness of the system and provides multi-level servers to guarantee the transaction speed! The trading system experience satisfaction is benchmarked against the world's top trading system.</p>\n" +
            "<p><strong>D, safety</strong></p>\n" +
            "<p>Robitl's financial-level security protects user assets, digital asset storage is intelligently separated from hot and cold, ERC20 digital wallets, and account encryption technologies are fully applied.</p>\n" +
            "<p><strong>E, service</strong></p>\n" +
            "<p>Robitl has an independent and complete user service system, provides the most complete and convenient management system support, 7*24h quick response, and truly creates a fair, just and open data trading market</p>\n" +
            "<p><strong>F, platform advantages</strong></p>\n" +
            "<p>1. Features two - way trading, leveraged contracts, second contracts.</p>\n" +
            "<p>2. The interface is simple and clear, easy to operate.</p>\n" +
            "<p>3. The deposit and withdrawal is convenient and fast, and can be transferred in major exchanges and wallets.</p>\n" +
            "<p>4.ICO(Initial IDCIex Offering): Use blockchain to combine rights and cryptocurrency to finance projects to develop, maintain, and exchange related products or services</p></div>"
    }

    function pop_box_show(type) {
        let pop_text = '';
        let pop_title = '';
        if (type == 'privacy') {
            pop_text = text_obj.privacy;
            pop_title = 'Privacy';
        }
        if (type == 'service') {
            pop_text = text_obj.service;
            pop_title = 'Service';
        }
        if (type == 'msb') {
            pop_text = text_obj.msb;
            pop_title = 'Msb';
        }
        if (type == 'about') {
            pop_text = text_obj.about;
            pop_title = 'About';
        }
        // $('#pop-box').show();
        $('.pop-content-desc').html(pop_text)
        layer.open({
            type: 1,
            area: ['80%', '80vh'],
            shadeClose: true,
            title: pop_title,
            content: $('#pop-box') //这里content是一个DOM，注意：最好该元素要存放在body最外层，否则可能被其它的相对元素所影响
        });
    }
    
    function pop_box_hide() {
        $('#pop-box').hide();
    }

    $('.pop-content').on('click',function(event){
        event.stopPropagation();
        console.log('btn2被点击了')
    })

    $('.footer-box-span').hover(
        function () {
            $(this).css('color', '#fff');
        },
        function () {
            $(this).css('color', '#848E9C');
        }
    )


</script>
	        </div>   
	    </div>
	    
	</body>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/Home/static/js/layer/layer.js" ></script>
    <script type="text/javascript" src="/Public/Home/static/js/jquery.SuperSlide.2.1.1.js" ></script>
    <script type="text/javascript">
    	$("#allminbtn").click(function(){
    		$("#allminbtn").addClass("css-1m3syfi");
    		$("#allminbtn").removeClass("css-lk1png");
    		
    		$("#dzminbtn").addClass("css-lk1png");
    		$("#dzminbtn").removeClass("css-1m3syfi");

    		$("#gxminbtn").addClass("css-lk1png");
    		$("#gxminbtn").removeClass("css-1m3syfi");

    		$("#myminbtn").addClass("css-lk1png");
    		$("#myminbtn").removeClass("css-1m3syfi");
    		
    		$("#allminerbox").show();
    		$("#dzminerbox").hide();
    		$("#gxminerbox").hide();
    		$("#myminerbox").hide();

    	});
    	$("#dzminbtn").click(function(){
    		$("#dzminbtn").addClass("css-1m3syfi");
    		$("#dzminbtn").removeClass("css-lk1png");
    		
    		
    		$("#allminbtn").addClass("css-lk1png");
    		$("#allminbtn").removeClass("css-1m3syfi");

    		$("#gxminbtn").addClass("css-lk1png");
    		$("#gxminbtn").removeClass("css-1m3syfi");

    		$("#myminbtn").addClass("css-lk1png");
    		$("#myminbtn").removeClass("css-1m3syfi");
    		
    		$("#allminerbox").hide();
    		$("#dzminerbox").show();
    		$("#gxminerbox").hide();
    		$("#myminerbox").hide();
    	});
    	$("#gxminbtn").click(function(){
    		$("#gxminbtn").addClass("css-1m3syfi");
    		$("#gxminbtn").removeClass("css-lk1png");
    		
    		
    		$("#allminbtn").addClass("css-lk1png");
    		$("#allminbtn").removeClass("css-1m3syfi");

    		$("#dzminbtn").addClass("css-lk1png");
    		$("#dzminbtn").removeClass("css-1m3syfi");

    		$("#myminbtn").addClass("css-lk1png");
    		$("#myminbtn").removeClass("css-1m3syfi");
    		
    		$("#allminerbox").hide();
    		$("#dzminerbox").hide();
    		$("#gxminerbox").show();
    		$("#myminerbox").hide();
    	});
    	$("#myminbtn").click(function(){
    		$("#myminbtn").addClass("css-1m3syfi");
    		$("#myminbtn").removeClass("css-lk1png");
    		
    		$("#allminbtn").addClass("css-lk1png");
    		$("#allminbtn").removeClass("css-1m3syfi");

    		$("#dzminbtn").addClass("css-lk1png");
    		$("#dzminbtn").removeClass("css-1m3syfi");

    		$("#gxminbtn").addClass("css-lk1png");
    		$("#gxminbtn").removeClass("css-1m3syfi");
    		
    		$("#allminerbox").hide();
    		$("#dzminerbox").hide();
    		$("#gxminerbox").hide();
    		$("#myminerbox").show();
    	});
    </script>
    <script type="text/javascript">
		$("#nav").slide({ 
			type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
			titCell:".nLi", //鼠标触发对象
			targetCell:".sub", //titCell里面包含的要显示/消失的对象
			effect:"slideDown", //targetCell下拉效果
			delayTime:300 , //效果时间
			triggerTime:0, //鼠标延迟触发时间（默认150）
			returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
		});
	</script>

    
</html>