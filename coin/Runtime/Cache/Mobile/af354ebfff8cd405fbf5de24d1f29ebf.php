<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/Public/Static/css/base.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Static/css/nologed.css" />
    <title><?php echo ($webname); ?></title>
    <style>
        ::-webkit-input-placeholder { /* WebKit browsers */
            color: #b5b5b5;
            font-size: 18px;
        }

        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color: #b5b5b5;
            font-size: 18px;
        }
        input:focus{background:#F5F5F5;outline: 1px solid #F5F5F5;}
        a:hover,a:link,a:visited,a:active{color:#FCD535;text-decoration:none;}
        .bmbtn{width:100%;height:60px;position:fixed;bottom:0px;padding:10px;}
        .bmbtn_l{width:45%;height:40px;float:left;background:#ebecf0;border-radius:5px;line-height:40px;text-align:center;}
        .bmbtn_r{width:45%;height:40px;float:right;background: #0052fe;color: #fff;border-radius:5px;line-height:40px;text-align:center;}
        .badge-light {
            background-color: #FCD535;
            position: relative;
            left: 15px;
            top: -35px;
        }
        .badge{
            line-height: 0.4;
            border-radius: .5rem;
        }

        .box_content {
            padding-top: 60px;
            margin: 0px 10px;
        }
        .title {
            text-align: center;
        }
        .content {
            text-indent: 2em;

        }
        .logo {
            text-align: center;

        }
        .img_logo {
            width: 150px;
        }
    </style>
</head>
<body>
<div class="container-fluid ctbox"  style="padding:0px;width:100vw;">
    <div class="no_header"  style="position: fixed;z-index: 9999;background: #fff;padding:0px 10px;top:0px;">

        <div class="fl allhg txtl" style="line-height:50px;width:10%;">
            <i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
        </div>
        <div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
            <span class="fcc fzmmm"><?php echo L('关于我们');?></span>
        </div>


    </div>
    <div class="box_content">
        <div class="logo">
            <img src="<?php echo ($waplogo); ?>" class="img_logo">
        </div>
        <h1 class="title">Welcome to PNSCX</h1>
        <p class="content">The PNSCX digital currency exchange was registered in Singapore in 2018 and is a global digital asset financial service platform. Its founding team is composed of senior financial technology professionals from New York and Singapore. The core developers all have the background of top traditional stock exchanges and have independently developed a complete set of exchanges and customer service systems. Adopt the world's leading: more stable, safer and more transparent "spot 3.0 system".
            PNSCX adheres to the "user first" principle, and constantly iterates the underlying technical architecture to improve user experience. Focusing on the development strategy of "spot + contract + wealth management", we provide global users with digital asset financial services focusing on "spot, contract, leverage, binary options, investment and wealth management".
            PNSCX is an international digital asset financial service platform. Its users come from 177 countries around the world, and it has branches in 13 cities including New York, London, Singapore, Ho Chi Minh City, Seoul, and Tokyo. With media resources covering more than 4,000 worldwide, Bitcoin Cash is the world's fastest-growing global station in 2020. Since January this year, 1.65 million new registered users have been added, and the total number of registered users has reached 18 million.
            PNSCX is committed to creating a digital financial service platform with a good customer experience, more new registered users, and a stable and secure technical architecture!
        </p>
    </div>

</div>
</body>

<body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function alldel(){
        var st = 1;
        $.post("<?php echo U('Index/delall');?>",
            {'st' :st},
            function(data){
                if(data.code = 1){
                    layer.msg(data.info);
                    setTimeout(function(args){
                        window.location.reload();
                    },2000);
                }else{
                    layer.msg(data.info);return false;
                }
            });
    }
    function allread(){
        var st = 1;
        $.post("<?php echo U('Index/readall');?>",
            {'st' :st},
            function(data){
                if(data.code = 1){
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
    $("#showid").click(function(){
        $("#centerbox").show();
        $("#h1title").hide();
        $("#bmbtn").show();
        $("#hideid").show();
        $("#showid").hide();
    });
    $("#hideid").click(function(){
        $("#centerbox").hide();
        $("#h1title").show();
        $("#bmbtn").hide();
        $("#hideid").hide();
        $("#showid").show();
    });
</script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>