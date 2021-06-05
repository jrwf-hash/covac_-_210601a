<?php
	require("covacDB.php");
?>

<?php
	$query = $db->query("select * from National");
	$arrayNationals = array();
	$arrayCounts = array();
	$dataPoints = array();

	while ($row = $query->fetch()) {
		$arrayNationals = $row["national"];
		echo $arrayNationals;
		$arrayCounts = $row["count"];
		echo $arrayCounts;

		array_push($dataPoints, array("label"=>$arrayNationals, "y"=>$arrayCounts));

	}
?>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {



	var chart = new CanvasJS.Chart("chartContainer1", {
		animationEnabled: true,

		data: [{
			type: "pie",
			startAngle: 240,
			yValueFormatString: "##0.0'%'",
			indexLabel: "{label} {y}",
			dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();




var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Usage Share of Desktop Browsers"
	},
	subtitles: [{
		text: "November 2017"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
<script src="canvasjs.min.js"></script>
</body>
</html>
