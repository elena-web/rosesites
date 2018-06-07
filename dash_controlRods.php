<p>This is the Control Rods page<br/></p>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Control Rod Levels"
	},
	axisY: {
		title: ""
	},
	data: [{
		type: "column",
		showInLegend: false,
		dataPoints: [
			{ y: 12, label: "Rod Bundle 1" },
			{ y: 19,  label: "Rod Bundle 2" },
			{ y: 3,  label: "Rod Bundle 3" },
			{ y: 5,  label: "Rod Bundle 4" },
			{ y: 2,  label: "Rod Bundle 5" },
			{ y: 3, label: "Rod Bundle 6" },
		]
    backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 99, 132, 0.2)'
    ],
    borderColor: [
        'rgba(255,99,132,1)',
        'rgba(255,99,132,1)',
        'rgba(255,99,132,1)',
        'rgba(255,99,132,1)',
        'rgba(255,99,132,1)',
        'rgba(255,99,132,1)'
    ],
    borderWidth: 3
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
