<?php
	require("covacDB.php");
?>

<?php
/*Korea 전국 누적 $dataPoints7*/

$query = $db->query("select * from Korea order by date");
$vacDaily= array();
$dates = array();

$dataPoints7 = array();

while ($row = $query->fetch()) {

$vacDaily = $row["human"];
echo $vacDaily;
$dates = $row["date"];
echo "<br>";
echo $dates;
echo "<br>";
array_push($dataPoints7, array( "label"=>$dates, "y"=>$vacDaily));
}
?>



<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var fontFamily = "NanumGothic"

var chart = new CanvasJS.Chart("newMainGraph", {
	animationEnabled: true,
	colorSet: "colorSet1",

	title:{
		text: "일별 백신 접종 현황",
		fontSize : 20,
 		fontWeight: "normal",
		fontFamily:"sans-serif"
	},
	axisX:{
			 labelFontSize: 13,
			 labelFontWeight: "normal",
			 fontFamily:"sans-serif"
		 },
	axisY: {

		includeZero : true
	},
	dataPointMaxWidth: 70,
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>
	}]
});

chart.render();

}

</script>
</head>
<body>
<div id="newMainGraph" style="height: 400px; width: 700px;"></div>
<script src="canvasjs.min.js"></script>
</body>
</html>
