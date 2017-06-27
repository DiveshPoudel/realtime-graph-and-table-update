<?php
	include 'db.php';
?>
<html>
<head>
	<title>PN Trade</title>
	<link rel="stylesheet" href="stylhe.css" media="all">
	<style>
		.load {
			height:200px;
			display:block;
			overflow:scroll;
		}
		.chart-container{
				width: 640px;
				height: auto;
			}
	</style>
	<script>
		function ajax(){
			
			var req = new XMLHttpRequest();
			
			req.onreadystatechange = function(){
				if(req.readyState == 4 && req.status == 200){
						
					document.getElementById('load').innerHTML = req.responseText;
				}
			}
			
			req.open('GET','table.php',true);
			req.send();
		}
		
		setInterval(function(){
			ajax()
		},1000 );
						
	</script>
</head>
	<body>
	<h1>USDJPY live tick test</h1>
		<div id="container">
			
			<div id="tick">
				<div id="load"></div>
			</div>
			
		</div>
		<div class="chart-container">
			<canvas id="mycanvas"></canvas>
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/Chart.min.js"></script>
		<script type="text/javascript" src="js/linegraph.js"></script>
		
	</body>
</html>