<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/Public/Static/css/base.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Static/css/nologed.css" />
    <title><?php echo ($webname); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Dela/demo/demo.css">
    <link rel="stylesheet" href="/Public/Dela/template/dela-template.css">

    <link rel="stylesheet" href="https://lib.sinaapp.com/js/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/font-awesome/5.15.2/css/all.min.css">
    <link href="/Public/Static/slider/disk/style.css"  rel="stylesheet">


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
        }
        .lang-svg {
            padding: 10px 20px 0px 0px;
        }

        .slidercaptcha {
            margin: 0 auto;
            width: 314px;
            height: 286px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.125);
            margin-top: 40px;
        }
        .slidercaptcha .card-body {
            padding: 1rem;
        }
        .slidercaptcha canvas:first-child {
            border-radius: 4px;
            border: 1px solid #e6e8eb;
        }
        .slidercaptcha.card .card-header {
            background-image: none;
            background-color: rgba(0, 0, 0, 0.03);
        }
        .refreshIcon {
            top: -42px;
        }

        *, ::after, ::before {
            box-sizing: content-box;
        }

        .container-fluid {
            width: 100%;
            height: 100%;
            /*background:red;*/
            position: fixed;
            z-index: 999;
            display: none;
            top: 0px;
            left: 0px;
            margin: 0px;
            padding: 0px;
        }
        .mask {
            margin: 0px;
            padding: 0px;
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
                <form class="dela-preset-2-1" action="?" method="get" onclick="return false">
                    <p class="dela-form__title"><?php echo L('Robit');?></p>
                    <input type="email" name="email" id="email" placeholder="<?php echo L('邮箱');?>" required autocomplete="email">
                    <input type="password" id="lpwd" name="password" placeholder="<?php echo L('密码');?>" required>
                    <label class="dela-form__checkbox">
                        <?php echo L('记住账号');?>
                        <input type="checkbox" name="remember" value="1"><span></span>
                    </label>
                    <input type="submit" name="submit" onclick="uplogin()" value="<?php echo L('登录');?>">

                    <input type="submit" name="reg" onclick="upreg()" value="<?php echo L('注册');?>">

                    <span class="dela-form__rorgot-password" onclick="forgot_password()">
                        <a href="<?php echo U('Login/findpwd');?>"><?php echo L('忘记密码');?>?</a>
                    </span>
                </form>
            </div>

        </div>

    </div>
</div>

<div class="container-fluid">
    <div class="form-row">
        <div class="col-12" style="margin: 0px;padding: 0px;">
            <div class="slidercaptcha card">
                <div class="card-header"><span><?php echo L('请完成安全验证');?></span></div>
                <div class="card-body">
                    <div id="captcha"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
</script>


<script type="text/javascript">
    function goindex(){
        window.location.href="<?php echo U('Index/index');?>";
    }

    function upreg(){
        window.location.href="<?php echo U('Login/register');?>";
    }
    
    function forgot_password() {
        window.location.href="<?php echo U('Login/findpwd');?>";
    }
</script>

<script src="/Public/Static/slider/jquery.js"></script>
<script src="/Public/Static/slider/disk/longbow.js"></script>
<script>
    function uplogin(){
        var email = $("#email").val();
        var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
        if(email=='' || email == null){
            layer.msg("<?php echo L('请输入邮箱');?>");return false;
        }
        if(!reg.test(email)){
            layer.msg("<?php echo L('邮箱格式不正确');?>");return false;
        }
        var lpwd = $("#lpwd").val();
        if(lpwd == ''){
            layer.msg("<?php echo L('请输入密码');?>");return false;
        }

        // $('.container-fluid').show();
        // $('#captcha').sliderCaptcha(
        //     {
        //         repeatIcon: 'fa fa-redo',
        //         setSrc: function () {
        //             return ''; },
        //         onSuccess: function () {
                    $.post("<?php echo U('Login/loginsubmit');?>",
                        {'email' : email,  'lpwd' : lpwd},
                        function(data){
                            if(data.code){
                                layer.msg(data.info);
                                setTimeout(function(){
                                    window.location.href="<?php echo U('Index/index');?>";
                                },2000);
                            }else{
                                layer.msg(data.info);return false;
                            }
                        });
                    // $('.container-fluid').hide();
                // }
            // });
    }


</script>
</body>
</html>