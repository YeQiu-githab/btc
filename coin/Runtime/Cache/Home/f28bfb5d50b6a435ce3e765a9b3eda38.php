<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>kline-demo</title>
	<link rel="stylesheet" href="/Public/Static/css/kline.css">
	<style>
		#chart_container {
			margin: 0 auto;
			width: 100%;
			height: 544px;
			position: relative;
		}
        #interval_tool_bar.dark .interval-item{
            background-color: #E4E4E4 ;
            color:black;
            border: none;
        }
        #interval_tool_bar.dark .interval-item.active, #interval_tool_bar.dark .interval-item:hover{
            background: #FADB84 ;
        }
        .changInterval {
            margin-bottom: 10px;
        }
        .interval-item{
            margin-right: 10px;
            padding: 4px 10px;
            outline: none;
            transition: all .25s;
            border: 1px solid #f5f5f5;
            cursor: pointer;
            vertical-align: top;
            background-color: #fff;
            border-radius: 5px;
        }
        .active{
            background-color: #f5f5f5;
            border:1px solid #FCD535;
            border-radius: 5px;
        }
        .loding{
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 999;
            /*display: flex;*/
            align-items: center;
            justify-content: center;
            display: none;
        }
	</style>
</head>


<body>
<div class="changInterval">
    <span class="interval-item" style="border:none:font-size:14px;"><?php echo L("时间");?></span>
    <button type="button" class="interval-item active" onclick="changInterval('m1',this)">1 M</button>
    <button type="button" class="interval-item" onclick="changInterval('m5',this)">5 M</button>
    <button type="button" class="interval-item" onclick="changInterval('m15',this)">15 M</button>
    <button type="button" class="interval-item" onclick="changInterval('m30',this)">30 M</button>
    <button type="button" class="interval-item" onclick="changInterval('m60',this)">60 M</button>
    <button type="button" class="interval-item" onclick="changInterval('h4',this)">4 H</button>
    <button type="button" class="interval-item" onclick="changInterval('d1',this)">1 Day</button>
<!--    <button type="button" class="interval-item" onclick="changInterval('w1',this)">1 Week</button>-->
</div>
<div id="chart_container">
    <div class="loding" data-type="0">
        <img src="/Public/Static/img/loading.gif" alt="" />
    </div>
</div>
<div id="chart_container1" style="display:none"></div>
</body>
<script>

	window.SYMBOL = "<?php echo ($market); ?>"
	window.fenshi = "Time sharing"
	window.fen = "M"
	window.xiaoshi = "H"
	window.tian = "Day"
	window.zhou = "Week"

	window.kai = "   S"
	window.gao = "   High"
	window.di = "   Low"
	window.shou = "   Collect"
	window.labels=["Time:","   S:","   Collect:","   High:","   Low:","Finished:"]
	window.plots=[{
			key: "ma5",
			title: "MA5: ",
			type: "line"
		}, {
			key: "ma10",
			title: "MA10: ",
			type: "line"
		}, {
			key: "ma30",
			title: "MA30: ",
			type: "line"
		}, {
			key: "ma60",
			title: "MA60: ",
			type: "line"
		}]
	window.title="MA20: "
	window.title1="VOLUME: "
// 	console.log("btcusdt")

</script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript"  src="/Public/Static/js/kline.min.js"></script>
<script type="text/javascript"  src="/Public/Static/js/pako.min.js"></script>
<script type="text/javascript"  src="/Public/Static/js/klinecharts.min.js"></script>
<script type="text/javascript"  src="/Public/Static/js/ws-deedfeeds.js"></script>
<script>
	function initOnReady() {
	    loading()
		window.init_offset = 10
		VyKline.bootstrap({
			container: document.getElementById('chart_container1'), // 容器
			deedfeeds: window.deedfeeds, // 数据反馈对象
			showIntervalToolbar: true,
			defaultInterval: 'm1',
			interval: [ 'm1','m5','m15','m30','m60','h4','d1', 'w1'],
			theme: 'light',
			customChart: {
				init_offset_x: window.init_offset,
				default_rise_color: '#49C043',
				default_fall_color: '#CC1414',
			},
			// customLoadingEl: customLoading,
			onTimeIntervalChanged: interval => {

				console.log("window.deedfeeds", interval);
			}
		})

        // window.deedfeeds.intervalChanged('m5')
		vyChart.switchChartType('KLINE')
		console.info(window.deedfeeds)
		
	}
	window.addEventListener('DOMContentLoaded', initOnReady, false);
</script>

</html>