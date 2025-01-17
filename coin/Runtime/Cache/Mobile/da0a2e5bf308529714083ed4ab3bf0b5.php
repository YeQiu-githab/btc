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
	    .no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;line-height: 50px;background:#f5f5f5;}
	    .contentbox{width:100%;height:600px;margin-top:45px;padding:5px 15px;}
	    .contentbox_top{width:100%;height:50px;line-height:50px;text-align:left;}
	    .contentbox_line{width:100%;background:#fff;border-radius:10px;padding:0px 10px;}
	    .line_2{width:100%;padding:10px;}
	    .imgbox{width:100%;padding:10px;background:#fff;margin-top:15px;border-radius:10px;}
	    .imgbox_1{width:100%;height:40px;line-height:40px;text-align:left;}
	    .imgbox_2{width:100%;height:35px;line-height:35px;text-align:left;}
	    .imgbox_3{width:100px;height:35px;line-height:35px;text-align:center;border:1px solid #FCD535;border-radius:5px;}
	    .imgbox_4{width:100%;margin-top:15px;border-top:1px solid #f5f5f5;padding: 10px 0px 20px 0px;}
	    .imgbox_5{width:100%;height:40px;line-height:40px;text-align:left;}
	    .imgbox_6{width:100%;height:120px;margin-top:10px;text-align:center;}
	    .imgbox_7{width:100%;height:30px;line-height:30px;text-align:center;margin-top:10px;}
	    .imgbox_8{width:100%;height:30px;line-height:30px;text-align:center;}
	    .imgbox_9{width:100px;height:30px;line-height:30px;text-align:center;border-radius:5px;border:1px solid #FCD535;margin:auto;}
	    .imgbox_10{width:100%;height:40px;line-height:40px;text-align:center;border-radius:5px;margin:auto;background: #0052fe;color: #fff;}
	    .textbox{width:100%;background:#fff;margin-top:10px;border-radius:10px;padding:15px;}
	    
	    .zz_inputbox{width:100%;height:40px;line-height:40px;background:#f5f5f5;border-radius:10px;padding:0px 15px;}
	    .zz_input{height:30px;line-height:30px;margin-top:5px;border:#f5f5f5;background:#f5f5f5;width:100%;}
	    .layui-upload-file{display: none!important;opacity: .01;}
	</style>
</head>
<body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
        <div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			

			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			</div>
	
		</div>
		<div class="contentbox">
		    <div class="contentbox_top">
		       
		        <span style="font-size:26px;font-weight:500;"><?php echo L('上诉');?></span>
		        
		    </div>
		    
		 
		    
		    <div class="imgbox">
		        <div class="imgbox_4"  style="border:none;margin:0px;">
		            <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('名字');?></span>
		            </div>
		            <div class="zz_inputbox">
		                <input type="text" id="name" class="zz_input" value=""   placeholder="<?php echo L('请输入名字');?>" />
		            </div>
		            
		            <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('邮箱');?></span>
		            </div>
		            <div class="zz_inputbox">
		                <input type="text" id="email" class="zz_input" value=""   placeholder="<?php echo L('请输入邮箱');?>" />
		            </div>
		            
		            
		            <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('身份证号');?></span>
		            </div>
		            <div class="zz_inputbox">
		                <input type="text" id="idcard" class="zz_input" value=""   placeholder="<?php echo L('请输入身份证号');?>" />
		            </div>
		            
		            
		            <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('手机号码');?></span>
		            </div>
		            <div class="zz_inputbox">
		                <input type="text" id="phone" class="zz_input" value=""   placeholder="<?php echo L('请输入手机号码');?>" />
		            </div>
		            
		            
		            <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('地址(USDT-TRC20)');?></span>
		            </div>
		            <div class="zz_inputbox">
		                <input type="text" id="trc20" class="zz_input" value="<?php echo ($data["appeal"]); ?>" readonly="" onclick="copyUrl()"/>
		            </div>
		            
		             <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('基金');?></span>
		            </div>
		            <div class="zz_inputbox">
		                <input type="text" id="fund" class="zz_input" value=""   placeholder="<?php echo L('请输入基金使用情况');?>" />
		            </div>
		            
		            <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('上诉');?></span>
		            </div>
		            <div class="zz_inputbox">
		                <input type="text" id="fund" class="zz_input" value=""   placeholder="<?php echo L('请输入上诉内容');?>" />
		            </div>
		            
		            
		            <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('转账截图');?></span>
		            </div>
		            
		            <div class="imgbox_6">
		                <img src="/Public/Static/img/upimg.png" id="test1" style="height:100px;" />
		                <input type="hidden" id="screenshot" name="screenshot" value="" />
		            </div>
		            
		   
		            <div class="imgbox_8">
		                <div class="imgbox_10" id="sumbtn">
		                    <span class="fzmm "><?php echo L('提交');?></span>
		                </div>
		            </div>
		     
		            
		        </div>
		    </div>

		    <div style="width:100%;height:80px;"></div>
   
		</div>

	</div>	
</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript" src="/Public/layui/layui.js"></script>
<script type="text/javascript">
    $("#sumbtn").click(function(){
        // var flag = $("#flag").val();
        // if(flag == 2){
        //     return false;
        // }
        // var phone = $("#phone").val();
        // var cardzm = $("#cardzm").val();
        // var cardfm = $("#cardfm").val();
        // if(phone == ''){
        //     layer.msg("<?php echo L('请输入手机号码');?>");return false;
        // }
        // if(cardzm == null || cardzm == ''){
        //     layer.msg("<?php echo L('请上传上传身份证正面');?>");return false;
        // }
        // if(cardfm == ''){
        //     layer.msg("<?php echo L('请上传上传身份证背面');?>");return false;
        // }
        // $("#flag").val(2)
        // $.post("<?php echo U('User/upauthrz');?>",
        // {'phone' : phone,'cardzm':cardzm,'cardfm':cardfm},
        // function(data){
        //     if(data.code == 1){
        //         layer.msg(data.info);
        //         setTimeout(function(args){
        //             window.location.reload();
        //         },2000);
        //     }else{
        //         layer.msg(data.info);return false;
        //     }
        // }
        // );
        layer.msg('Success');
            setTimeout(function(args){
                window.location.reload();
            },2000);
        
    });
</script>

<script type="text/javascript">
      layui.use('upload', function(){
        var upload = layui.upload;
        var uploadInst = upload.render({
            elem: '#test1' //绑定元素
            ,url: '<?php echo U("User/recharge_img");?>' //上传接口
            ,done: function(res){
                console.log(res);
                if(res.code == 0){
                    $('#screenshot').val(res.data.img);
                    $("#test1").attr('src',res.data.src);
                }
            }
            ,error: function(){
                layer.msg("<?php echo L('上传失败');?>");
            }
        });
    });
</script>
<script type="text/javascript">

    
      function copyUrl(){
        var url_txt=$("#trc20").val();
        copy(url_txt);
    }

    function copy(message) {
        var input = document.createElement("input");
        input.value = message;
        document.body.appendChild(input);
        input.select();
        input.setSelectionRange(0, input.value.length), document.execCommand('Copy');
        document.body.removeChild(input);
        layer.msg("<?php echo L('复制成功');?>");
    }
</script>

<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>