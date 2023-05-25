<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/Public/Static/css/base.css?v=2" />
    <link rel="stylesheet" type="text/css" href="/Public/Static/css/nologed.css" />
    <title><?php echo ($webname); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Dela/demo/demo.css">
    <link rel="stylesheet" href="/Public/Dela/template/dela-template.css">
<!--    <link rel="stylesheet" href="/Public/btn/style.css">-->
    <link rel="stylesheet" href="/Public/build/css/countrySelect.css">

    <style>
        .header_box {
            background: #0052fe;
            position: fixed;
        }
        .txtl {
            text-align: left;
        }
        .no_headers{
            width: 100%;
            height: 50px;
            z-index: 999;
        }
        .lang-svg {
            padding: 10px 20px 0px 0px;
        }
        button {
            appearance: auto;
            writing-mode: horizontal-tb !important;
            font-style: ;
            font-variant-ligatures: ;
            font-variant-caps: ;
            font-variant-numeric: ;
            font-variant-east-asian: ;
            font-weight: ;
            font-stretch: ;
            font-size: ;
            font-family: ;
            text-rendering: auto;
            color: buttontext;
            letter-spacing: normal;
            word-spacing: normal;
            line-height: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: center;
            align-items: flex-start;
            cursor: default;
            box-sizing: border-box;
            background-color: buttonface;
            margin: 0em;
            padding: 1px 6px;
            border-width: 2px;
            border-style: outset;
            border-color: buttonborder;
            border-image: initial;
        }
        .btn-hover {
            width: 100%;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            height: 30px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .btn-hover.color-1 {
            background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
            box-shadow: 0 4px 15px 0 rgb(49 196 190 / 75%);
        }
        .btn-hover.color-6 {
            background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
            box-shadow: 0 4px 15px 0 rgb(83 176 57 / 75%);
        }
        .btnl {
            float: left;
            margin-bottom:1.1em;
        }
        .btnr {
            float: right;
            margin-bottom:1.1em;
        }
        .code {
            width: 100% !important;
        }
        .send-btn {
            width: 20%;
            height: 1.8em;
            position: absolute;
            top: 480px;
            left: 220px;

        }
        .mobile_input {
            width: 70% !important;
            float: right;
        }

        .btn-hover.color-4 {
            background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
            box-shadow: 0 4px 15px 0 rgb(252 104 110 / 75%);
        }
        .main_demo {
            width: 28% !important;
            float: left;
        }

        .dela-presets-container-2 .dela-preset-2-2 {
            position: relative;
            font-size: 16px;
            width: 14.4em;
            min-width: 11em;
            padding: 5.6em 3.68em 6.1em 3.68em;
            box-shadow: 0 0 1em rgb(0 0 0 / 20%);
            font-family: Roboto;
            background: linear-gradient(to top, #0052fe 0, #40cded 100%);
        }


    </style>
</head>
<body>

<div class="no_headers header_box" >
    <div class="fl bhalf allhg txtl" style="line-height:50px;">
        <i class="bi bi-x fw"  onclick="goindex()" style="font-size:36px;color: #fff"></i>
    </div>
    <div class="fr bhalf allhg txtr" style="line-height:50px;">
        <a href="<?php echo u('Login/setlang');?>">
            <svg t="1654176737678" class="lang-svg" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="34611" width="26" ><path d="M782 912H242c-71.68 0-130-58.32-130-130V242c0-71.68 58.32-130 130-130h540c71.68 0 130 58.32 130 130v540c0 71.68-58.32 130-130 130zM242 172c-38.59 0-70 31.41-70 70v540c0 38.59 31.41 70 70 70h540c38.59 0 70-31.41 70-70V242c0-38.59-31.41-70-70-70H242z" p-id="34612" fill="#ffffff"></path><path d="M455.49 621.78c-3.97-1.08-8.51-1.71-13.51-1.9-4.32-0.15-8.84-0.21-13.6-0.21h-100.5v-86.64h107.87c9.01 0 15.72-1.65 20.48-4.99 4.09-2.86 8.98-8.65 8.98-20.14 0-9.2-2.82-16.12-8.37-20.56-4.91-3.93-11.8-5.86-21.09-5.86H327.89V404.8h112.2c8.39 0 14.92-1.69 19.96-5.14 4.34-2.94 9.51-8.88 9.5-20.98-0.48-9.18-3.66-15.97-9.53-20.18-4.96-3.53-11.48-5.25-19.93-5.25H302.76c-10.47 0-18.01 2.31-23.07 7.09-5.17 4.93-7.69 12.25-7.69 22.36v259.06c0 11.11 3.15 19.06 9.36 23.65 5.28 3.91 12.28 5.82 21.4 5.82h139.93c9.38 0 16.37-1.54 21.44-4.74 4.45-2.83 9.75-8.84 9.75-21.26 0-8.19-3.11-13.24-5.7-16.01-3.26-3.53-7.52-6.03-12.69-7.44zM745.3 356.36c-4.74-5.25-11.96-7.91-21.46-7.91-9.85 0-17.18 3.02-21.79 8.99-3.95 5.1-5.94 11.4-5.94 18.74v188.1L559.8 364.97c-2.85-3.45-5.68-6.6-8.5-9.41-3.24-3.24-9.06-7.11-18.51-7.11-11.87 0-17.89 5.16-20.85 9.5-3.42 4.99-5.14 11.13-5.14 18.23v271.21c0 7.47 2.22 13.94 6.59 19.23 3.36 4.06 9.75 8.93 21.13 8.93 11.23 0 17.72-4.74 21.17-8.72 4.64-5.33 6.99-11.89 6.99-19.44v-184.6l135.35 195.08c3.18 4.61 6.73 8.5 10.59 11.63 5.01 4.02 10.86 6.05 17.39 6.05 11.9 0 17.92-5.18 20.85-9.5 3.42-4.99 5.14-11.13 5.14-18.23V376.19c0-8.19-2.24-14.85-6.7-19.83z" p-id="34613" fill="#ffffff"></path></svg>
        </a>
    </div>
</div>
<div id="page-container">
    <div class="all-dela-presets-container"  >
        <!-- Preset Begin-->
        <div class="dela-presets-container-2" style="padding: 0px;">
            <div class="dela-preset-container">
                <form class="dela-preset-2-2" onclick="return false" method="get">
                    <p class="dela-form__title"><?php echo L('注册');?></p>
                    <button class="btn-hover color-6 btnr" onclick="stype(2)"  ><?php echo L('邮箱');?></button>
                  
                    <input type="hidden" name="type" id="type" value="2">
                    <input type="hidden" name="account" id="account" >
                    <input type="email" name="email" id="email" placeholder="<?php echo L('邮箱');?>" required="" autocomplete="email" >
                    <div id="main_demo" style="margin-bottom:1.1em;display:none" >
                        <div class="container">
                            <div class="form-item">
                                <input id="country_selector" type="text">
                                <label for="country_selector" style="display:none;">Select a country here...</label>
                            </div>
                            <button type="submit" style="display:none;">Submit</button>
                        </div>
                    </div>
                    <input type="password" name="password" id="lpwd" placeholder="<?php echo L('密码');?>" required="">
                    <input type="password" name="repeat" placeholder="<?php echo L('确认密码');?>" oninput="this.setCustomValidity(this.value != document.getElementById('pass-'+2).value ? 'Passwords are not the same.' : '')" required="">
                    <input type="text" name="invite" id="invit"  placeholder="<?php echo L('邀请码');?>" required="" value="<?php echo ($qrcode); ?>">
                    <div>
                        <input type="text" id="ecode" name="code" placeholder="<?php echo L('验证码');?>"  class="code"  required=""  value="">
                        <button  class="btn-hover color-4 send-btn" onclick="getCode()"> <?php echo L('发送');?> </button>
                    </div>
                    <input type="submit" name="submit"  onclick="upreg()" value="<?php echo L('注册');?>">
                    <input type="submit" name="submit" onclick="uplogin()" value="<?php echo L('登录');?>">

                </form>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function upreg(){
        var  type = $('#type').val();
        if (type != 1 && type != 2) {
            layer.msg("<?php echo L('请选择注册类型');?>");return false;
        }
        var account = $("#email").val();
        // console.log(account);
        // return false;
        var email = $("#email").val();
        var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
        if(email=='' || email == null){
            layer.msg("<?php echo L('请输入邮箱');?>");return false;
        }
        if(!reg.test(email)){
            layer.msg("<?php echo L('邮箱格式不正确');?>");return false;
        }
        var ecode = $("#ecode").val();
        if(ecode == ''){
            layer.msg("<?php echo L('请输入邮箱验证码');?>");return false;
        }
        var lpwd = $("#lpwd").val();
        
        if(lpwd == ''){
            layer.msg("<?php echo L('请输入密码');?>");return false;
        }
        var invit = $("#invit").val();
        if( invit == ''){
            layer.msg("<?php echo L('请输入邀请码');?>");return false;
        }
      
        $.post("<?php echo U('Login/upregister');?>",
            {'email' : email, 'ecode' : ecode, 'lpwd' : lpwd, 'invit' : invit},
            function(data){
                if(data.code == 1){
                    layer.msg(data.info);
                    setTimeout(function(){
                        window.location.href="<?php echo U('Login/index');?>";
                    },2000);
                }else{
                    layer.msg(data.info);return false;
                }
            }
        );


    }
    
    
        //获取验证码
    function getCode(){
        var  type = $('#type').val();
        if (type != 1 && type != 2) {
            layer.msg("<?php echo L('请选择注册类型');?>");return false;
        }
        
        
        if(type == 1){
            //获取手机验证码
            var account = $("#country_selector").val();
            var phone = account.split(' ')[1]
            console.log(phone)
            if(phone==''){
                layer.msg("<?php echo L('请输入手机号');?>");return false;
            }
            $.post("<?php echo U('Login/sendpcode');?>",
                    {'email' : account},
                    function(data){
                        if(data.code == 1){
                            layer.msg(data.info);
                            
                        }else{
                            layer.msg(data.info);return false;
                        }
                    }
                );
            
        }
        
        
        if(type == 2){
            //获取邮箱验证码
            var account = $("#email").val();
            // console.log(account)
            var email = $("#email").val();
            var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
            if(email=='' || email == null){
                layer.msg("<?php echo L('请输入邮箱');?>");return false;
            }
            if(!reg.test(email)){
                layer.msg("<?php echo L('邮箱格式不正确');?>");return false;
            }
            
             $.post("<?php echo U('Login/sendcode');?>",
                {'email' : email},
                function(data){
                    if(data.code == 1){
                        layer.msg(data.info);
                        
                    }else{
                        layer.msg(data.info);return false;
                    }
                }
            );
        }
        
    }
</script>


<script type="text/javascript">
    
    function stype(type) {
        if (type == 2) {
            $('#email').show();
            $('#main_demo').hide();
        }
        if (type == 1) {
            $('#email').hide();
            $('#main_demo').show();
        }
        $('#type').val(type);

    }
    
    function goindex(){
        window.location.href="<?php echo U('Index/index');?>";
    }

    function uplogin(){
        window.location.href="<?php echo U('Login/index');?>";
    }

    function forgot_password() {
        window.location.href="<?php echo U('Login/findpwd');?>";
    }


</script>
<script src="/Public/build/js/jquery-1.9.1.min.js"></script>
<script src="/Public/build/js/countrySelect.js"></script>
<script>
    $("#country_selector").countrySelect({
        preferredCountries: ["jp","us"]
        // preferredCountries: ["us","jp","kr","vn"]
    });
</script>

</body>
</html>