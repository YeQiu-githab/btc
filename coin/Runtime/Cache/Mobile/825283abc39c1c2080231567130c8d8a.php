<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>kline</title>
	<link rel="stylesheet" href="/Public/Static/css/kline.css">
	<style>
		#chart_container {
			margin: 0 auto;
			width: 100%;
			height: 500px;
		}
        .changInterval {
            margin-bottom: 10px;
            padding-left: 5px;
        }
        .interval-item{
            font-size:14px;
            padding: 2px;
        }
        .active{
            border-bottom:3px solid #FCD535;
        }
        .loding{
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 999;
            /*display: flex;*/
            justify-content: center;
            padding-top: 130px;
            display: none;
        }
        .loding img{
            width: 50px;
            height: 50px;
        }
	</style>
</head>

<body>

<div class="changInterval">
    <span class="interval-item"><?php echo L("时间");?></span>
    <span class="interval-item active" onclick="changInterval('m1',this)">1m</span>
    <span class="interval-item" onclick="changInterval('m5',this)">5m</span>
    <span class="interval-item" onclick="changInterval('m15',this)">15m</span>
    <span class="interval-item" onclick="changInterval('m30',this)">30m</span>
    <span class="interval-item" onclick="changInterval('m60',this)">1h</span>
    <span class="interval-item" onclick="changInterval('h4',this)">4h</span>
    <span class="interval-item" onclick="changInterval('d1',this)">1D</span>
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
			    volume_height:50,
				init_offset_x: window.init_offset,
				default_rise_color: '#49C043',
				default_fall_color: '#CC1414',
			},
			// customLoadingEl: customLoading,
			onTimeIntervalChanged: interval => {

				console.log("window.deedfeeds", interval);
			}
		})


		vyChart.switchChartType('KLINE')
	}
	window.addEventListener('DOMContentLoaded', initOnReady, false);
</script>

</html>