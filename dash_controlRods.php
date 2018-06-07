<p>This is the Control Rods page<br/></p>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Control Rod Levels"
	},
	axisY: {
		title: ""
	},
	data: [{
		type: "column",
		showInLegend: true,
		dataPoints: [
			{ y: 12, label: "Rod Bundle 1" },
			{ y: 19,  label: "Rod Bundle 2" },
			{ y: 3,  label: "Rod Bundle 3" },
			{ y: 5,  label: "Rod Bundle 4" },
			{ y: 2,  label: "Rod Bundle 5" },
			{ y: 3, label: "Rod Bundle 6" },
		]
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
