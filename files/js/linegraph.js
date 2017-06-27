function getChart() {
	$.ajax({
		url: "http://localhost/trade/graph/data.php",
		type: "GET",
		success: function(data){
			
			console.log(data);
			
			var date = [];
			var bid = [];
			var ask = [];
			var open = [];
		
		for (var i in data){
			date.push(data[i].date);
			bid.push(data[i].bid);
			ask.push(data[i].ask);
			open.push(data[i].open);
		}
		
		var chartdata={
			labels: date,
			datasets: [
					{
						label: "bid",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: bid
					},
					{
						label: "ask",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(29, 202, 255, 0.75)",
						borderColor: "rgba(29, 202, 255, 1)",
						pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
						pointHoverBorderColor: "rgba(29, 202, 255, 1)",
						data: ask
					},
					{
						label: "open",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: open
					}
				]
		};
		
		var ctx = $("#mycanvas");

		var LineGraph = new Chart(ctx, {
			type: 'line',
			data: chartdata
		});
			
		
		setTimeout(getChart, 5000);
		
		},

		error: function(data){
			
		}
	});
}


$(document).ready(function(){
	setTimeout(getChart, 5000);
});