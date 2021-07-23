<?php
 
$dataPoints = array(
	array("y" => 92, "label" => "15:03:35"),
	array("y" => 93, "label" => "15:03:40"),
	array("y" => 94, "label" => "15:03:50"),
	array("y" => 92, "label" => "15:04:00"),
	array("y" => 93, "label" => "15:04:10"),

);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Oxygen Level"
	},
	data: [{
		type: "spline",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 