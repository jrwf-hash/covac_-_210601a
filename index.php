<?php
	require("covacDB.php");
?>

<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale:1, minimum-scale:1 ,user-scalable=no"
		/>

		<title>COVAC</title>
		<link rel="stylesheet" href="./css/btnn.css"/>
		<link rel="stylesheet" href="./css/table.css"/>
		<link rel="stylesheet" href="./css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="./style.css" />
		<!--세로그래프 script-->
		<script src="./css/Chart.min.js"></script>
		<script src="./css/bootstrap.min.js"></script>
		<script src="./css/poppers.min.js"></script>
	  <script src="./css/jquery.min.js"></script>
		<script src="./css/bootstrap.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.0/moment.min.js"></script>
		<script type="text/javascript" src="init.js"></script>


		<script language="javascript">
			window.onload = function(){
				for (i=1; i<17; i++) {
					if ('<%=request("req")%>'==exx[i]) {
						cMuName = 'mus'+i;
						document [cMuName].src = eval(cMuName + 'on.src');
						onclick=smenu_click(cMuName);
					}
				}
			}
		</script>
	</head>

	<body>

		<div class="body_container">
			<header id="header" class="display_flex_center">
				<a href="http://www.covac.news/">
					<img src="./src/assets/logo.png" alt="covac_logo" />
				</a>
			</header>
			<div id="main" class="display_flex_center">

				<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

				<div class="main_content_wrapper">

					<nav id="nav" >
						<ul class="nav_ul" >
							<li><a href="http://www.covac.news/" class="none_low_depth selected" style="text-decoration:none">백신</a></li>
							<li>
								<div class="has_low_depth">기사</div>
								<ul class="low_depth">
									<li><a href="arti_press.php">언론사별</a></li>
									<li><a href="arti_vac.php">백신별</a></li>
								</ul>
							</li>
							<li><a href="board.php" class="none_low_depth" style="text-decoration:none">접종후기</a></li>
							<li>
								<div class="has_low_depth">공지</div>
								<ul class="low_depth">
									<li><a href="announce_1.php">공지사항</a></li>
									<li><a href="announce_2.php">문의 및 제보</a></li>
									<li><a href="announce_3.php">후원정보</a></li>
								</ul>
							</li>
							<li>
								<div class="has_low_depth">바로알기</div>
								<ul class="low_depth">
									<li><a href="check_vac.php">백신 종류별 특성</a></li>
									<li><a href="check_place.php">백신 접종 기관</a></li>
									<li><a href="check_vid.php">백신 동영상</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<article >
							<!--지도 html-->
						<section id="section_container" class="board_header_box2">
					  	<div style="clear:both; position: relative; z-index: 1; top: -40px; left: 90px; zoom:1.5;">
	              <a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus1') onmouseout=mus_off('mus1') onclick="javascript:void(0)">
								<img src='./map/m061.gif' alt='' border='0' name='mus1' class='list1'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus2') onmouseout=mus_off('mus2') onclick="javascript:void(0)">
								<img src='./map/m063.gif' alt='' border='0' name='mus2' class='list2'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus3') onmouseout=mus_off('mus3') onclick="javascript:void(0)">
								<img src='./map/m055.gif' alt='' border='0' name='mus3' class='list3'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus4') onmouseout=mus_off('mus4') onclick="javascript:void(0)">
								<img src='./map/m033.gif' alt='' border='0' name='mus4' class='list4'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus5') onmouseout=mus_off('mus5') onclick="javascript:void(0)">
								<img src='./map/m041.gif' alt='' border='0' name='mus5' class='list5'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus6') onmouseout=mus_off('mus6') onclick="javascript:void(0)">
								<img src='./map/m031.gif' alt='' border='0' name='mus6' class='list6'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus7') onmouseout=mus_off('mus7') onclick="javascript:void(0)">
								<img src='./map/m043.gif' alt='' border='0' name='mus7' class='list7'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus8') onmouseout=mus_off('mus8') onclick="javascript:void(0)">
								<img src='./map/m054.gif' alt='' border='0' name='mus8' class='list8'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus9') onmouseout=mus_off('mus9') onclick="javascript:void(0)">
								<img src='./map/m064.gif' alt='' border='0' name='mus9' class='list9'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus10') onmouseout=mus_off('mus10') onclick="javascript:void(0)">
								<img src='./map/m02.gif' alt='' border='0' name='mus10' class='list10'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus11') onmouseout=mus_off('mus11') onclick="javascript:void(0)">
								<img src='./map/m032.gif' alt='' border='0' name='mus11' class='list11'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus12') onmouseout=mus_off('mus12') onclick="javascript:void(0)">
								<img src='./map/m042.gif' alt='' border='0' name='mus12' class='list12'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus13') onmouseout=mus_off('mus13') onclick="javascript:void(0)">
								<img src='./map/m062.gif' alt='' border='0' name='mus13' class='list13'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus14') onmouseout=mus_off('mus14') onclick="javascript:void(0)">
								<img src='./map/m053.gif' alt='' border='0' name='mus14' class='list14'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus15') onmouseout=mus_off('mus15') onclick="javascript:void(0)">
								<img src='./map/m052.gif' alt='' border='0' name='mus15' class='list15'></a>
								<a href='javascript:void(0)' onfocus='this.blur()' onmouseover=mus_on('mus16') onmouseout=mus_off('mus16') onclick="javascript:void(0)">
								<img src='./map/m051.gif' alt='' border='0' name='mus16' class='list16'></a>
	            </div>

							<?php
            		$query = $db->query("select * from Covac_status");
                while ($row = $query->fetch()) {

              ?>
								<div class="maps_all">
									<div class=<?=$row["class"]?> onmouseover=mus_on(<?=$row["mus"]?>) onmouseout=mus_off(<?=$row["mus"]?>)>
									<div class="local_name_map"><?=$row["region"]?></div><div class="local_values_map"><?=$row["human"]?></div></div>

									<div class="measurement">
										<div class="measurement_wrap">
											<p style="font-size:14px;">서울을 클릭 시 아래 그래프와 연동</p>
										</div>
									</div>

								</div>
                        <?php
                        	}
                        ?>

					 	</section>
						<section id="section_container" class="board_header_box">
							<!--백신접종현황 그래프-->
							<div class="tables_name">
								<h3>백신 접종 현황</h3>
							</div>

							<!--첫번째 버튼 전체 -->
							<!-- id값 : 버튼
								전체
								0 : 일별
								1 : 주별
								2 : 누적

								백신
								3 : 종합
								4 : 화이자
								5 : AZ
							-->
							<div class="dropdown_grid" justified>
								<div class="dropdown">
							  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							    전체
							    <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							    <li><a id="0" href="javascript:void(0)" class="dropdown-item" data-value="action">일별</a></li>
									<li><a id="1" href="javascript:void(0)" class="dropdown-item" data-value="another action">월별</a></li>
							    <li><a id="2" href="javascript:void(0)" class="dropdown-item" data-value="something else here">누적</a></li>
							  </ul>
								</div>
							<!--두번째 버튼 백신 -->
							<div class="dropdown">
							<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								백신
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a id="3" href="javascript:void(0)" class="dropdown-item" data-value="something else here">종합</a></li>
								<li><a id="4" href="javascript:void(0)" class="dropdown-item" data-value="action">화이자</a></li>
								<li><a id="5" href="javascript:void(0)" class="dropdown-item" data-value="another action">AZ</a></li>
							</ul>
							</div>

							</div>

							<br>
							<body>
								<!--Ref
							http://stackoverflow.com/questions/40061862/chart-js-update-bars-of-a-bar-chart
							-->
							  <br/>
							  <div class="row">
							    <div class="col-md-1"></div>
							    <div class="col-md-10" >
							      <!--Chart.js Canvas Tag -->
							      <canvas id="forecast" width="700" height="400"></canvas>
							    </div>
							    <div class="col-md-1"></div>
							  </div>
							  <br />
							  <div class="row">
							    <div class="col-md-1"></div>
							    <div class="col-md-10"></div>
							<!--<button type="button" class="btn btn-success btn-md" onclick="addData();">Add Data </button><button type="button" class="btn btn-success btn-md" onclick="adjust2016();">Adjust 2016 </button></div> -->
							    <div class="col-md-1"></div>
							</div>

							<script>
							Chart.defaults.global.defaultFontColor = 'grey';
							Chart.defaults.global.defaultFontSize = 16;
							Chart.defaults.global.defaultFontFamily = "NanumBarunGothic";

							const today = moment();
							/*누적 60개 이하 지금은 40개 chart_labels 2*/
							var chart_labels = [

							/*50*/
							moment().subtract(49,"days").format("MM/DD"),
							moment().subtract(48,"days").format("MM/DD"),
							moment().subtract(47,"days").format("MM/DD"),
							moment().subtract(46,"days").format("MM/DD"),
							moment().subtract(45,"days").format("MM/DD"),
							moment().subtract(44,"days").format("MM/DD"),
							moment().subtract(43,"days").format("MM/DD"),
							moment().subtract(42,"days").format("MM/DD"),
							moment().subtract(41,"days").format("MM/DD"),
							moment().subtract(40,"days").format("MM/DD"),
							moment().subtract(39,"days").format("MM/DD"),
							moment().subtract(38,"days").format("MM/DD"),
							moment().subtract(37,"days").format("MM/DD"),
							moment().subtract(36,"days").format("MM/DD"),
							moment().subtract(35,"days").format("MM/DD"),
							moment().subtract(34,"days").format("MM/DD"),
							moment().subtract(33,"days").format("MM/DD"),
							moment().subtract(32,"days").format("MM/DD"),
							moment().subtract(31,"days").format("MM/DD"),
							moment().subtract(30,"days").format("MM/DD"),
							moment().subtract(29,"days").format("MM/DD"),
							moment().subtract(28,"days").format("MM/DD"),
							moment().subtract(27,"days").format("MM/DD"),
							moment().subtract(26,"days").format("MM/DD"),
							moment().subtract(25,"days").format("MM/DD"),
							moment().subtract(24,"days").format("MM/DD"),
							moment().subtract(23,"days").format("MM/DD"),
							moment().subtract(22,"days").format("MM/DD"),
							moment().subtract(21,"days").format("MM/DD"),
							moment().subtract(20,"days").format("MM/DD"),
							moment().subtract(19,"days").format("MM/DD"),
							moment().subtract(18,"days").format("MM/DD"),
							moment().subtract(17,"days").format("MM/DD"),
							moment().subtract(16,"days").format("MM/DD"),
							moment().subtract(15,"days").format("MM/DD"),
							moment().subtract(14,"days").format("MM/DD"),
							moment().subtract(13,"days").format("MM/DD"),
							moment().subtract(12,"days").format("MM/DD"),
							moment().subtract(11,"days").format("MM/DD"),
							moment().subtract(10,"days").format("MM/DD"),
							moment().subtract(9,"days").format("MM/DD"),
							moment().subtract(8,"days").format("MM/DD"),
							moment().subtract(7,"days").format("MM/DD"),
							moment().subtract(6,"days").format("MM/DD"),
							moment().subtract(5,"days").format("MM/DD"),
							moment().subtract(4,"days").format("MM/DD"),
							moment().subtract(3,"days").format("MM/DD"),
							moment().subtract(2,"days").format("MM/DD"),
							moment().subtract(1,"days").format("MM/DD"),
							moment().format("MM/DD")
						];

							/*월별 2개 chart_labels_1 1
							- 데이터 y축 값 고정, 추가 더미데이터 넣어주면 고정됨 해결
							*/
							var chart_labels_1 = [
							moment().subtract(2,"months").format("MM"),
							moment().subtract(1,"months").format("MM"),
							moment().format("MM")
						];

							/*일별 최근 5개 chart_labels_2 0 */
							var chart_labels_2 = [
							moment().subtract(4,"days").format("MM/DD"),
							moment().subtract(3,"days").format("MM/DD"),
							moment().subtract(2,"days").format("MM/DD"),
							moment().subtract(1,"days").format("MM/DD"),
							moment().format("MM/DD")
						];

							/*서울 일단 최근 5개, 월별, 일별, 누적,*/
							var chart_labels_3 = [
							moment().subtract(4,"days").format("MM/DD"),
							moment().subtract(3,"days").format("MM/DD"),
							moment().subtract(2,"days").format("MM/DD"),
							moment().subtract(1,"days").format("MM/DD"),
							moment().format("MM/DD")
						];

							/*누적 labels accum, 월별 1 monthly, 일별 2 daily,*/
							var vac_daily = ['10', '30', '61', '32', '7'];
							var vac_monthly = ['30', '60', '30', '32', '7'];
							var vac_accum = ['20', '40', '60', '32', '7','20', '40', '60', '32', '7','20', '40', '60', '32', '7','20', '40', '60', '32', '7','20', '40', '60', '32', '7','20', '40', '60', '32', '7','20', '40', '60', '32', '7','20', '40', '60', '32', '7','20', '40', '60', '32', '7','20', '40', '60', '32', '7','20', '40', '60', '32', '7','20', '40', '60', '32', '7'];
							var vac_total = ['40', '10', '60', '32', '7'];
							var vac_pz = ['60', '90', '46', '32', '7'];
							var vac_az = ['70', '30', '56', '32', '7'];
							var vac_seoul = ['30', '300', '560', '320', '70'];

							var ctx = document.getElementById("forecast").getContext('2d');
							var config = {
									type: 'bar',
									axisY:{
										viewportMinimum:0
									},
									data: {
											labels: chart_labels_2,
											datasets: [ {
													type: 'bar',
													label: "서울 접종 현황",
													yAxisID: "y-axis-1",
													backgroundColor: "#6EA24D",
													data: vac_seoul,
											}]
									},
									options: {
											scales: {
													yAxes: [{
															position: "left",
															"id": "y-axis-1",
															viewportMinimum:0
													}],
													xAxes: [{
															// x축 굵기 수정
															barPercentage: 1,
															minimum:0
													}]
											}
									}
							};


							var forecast_chart = new Chart(ctx, config);

							/*일별*/
							$("#0").click(function() {
									var data = forecast_chart.config.data;
									data.datasets[0].data = vac_daily;
									data.datasets[0].label = "일별 접종 현황"
									data.labels = chart_labels_2;
									forecast_chart.update();
							});

							/*월별*/
							$("#1").click(function() {
									var data = forecast_chart.config.data;
									data.datasets[0].data = vac_monthly;
									data.datasets[0].label = "월별 접종 현황"
									data.labels = chart_labels_1;
									forecast_chart.update();
							});

							/*누적*/
							$("#2").click(function() {
									var data = forecast_chart.config.data;
									data.datasets[0].data =  vac_accum;
									data.datasets[0].label = "누적 접종 현황"
									data.labels = chart_labels;
									forecast_chart.update();
							});
							/*백신 - 종합 최근 5일*/
							$("#3").click(function() {
									var data = forecast_chart.config.data;
									data.datasets[0].data = vac_total;
									data.datasets[0].label = "백신 종합 접종 현황"
									data.labels = chart_labels_2;
									forecast_chart.update();
							});
							/*백신 - 화이자 최근 5일*/
							$("#4").click(function() {
									var data = forecast_chart.config.data;
									data.datasets[0].data = vac_pz;
									data.datasets[0].label = "화이자 백신 접종 현황"
									data.labels = chart_labels_2;
									forecast_chart.update();
							});
							/*백신 - 아스트라 최근 5일*/
							$("#5").click(function() {
									var data = forecast_chart.config.data;
									data.datasets[0].data = vac_az;
									data.datasets[0].label = "AZ 백신 접종 현황"
									data.labels = chart_labels_2;
									forecast_chart.update();
							});

							$("#8").click(function() {
									var data = forecast_chart.config.data;
									data.datasets[0].data = vac_seoul;
									data.datasets[0].label = "서울 접종 현황"
									data.labels = chart_labels_2;
									forecast_chart.update();
							});

					</script>
					</body>

			</section>

						<!--원형 그래프 넣는 곳-->
 						<section id="section_container" class="board_header_box1">
						 	<!--원형 그래프-->
							<div class="tables_name">
								<h3>나라별 백신 접종 현황</h3>

							</div>

						    <div id="chartContainer" style="padding-left: 60px;height: 400px; max-width: 500px;"></div>
					 	</section>
							<div id="accrue" class="table_back">
								<body>
								<?php
								$query = $db->query("select * from Vac_com limit 0, 1");
								while ($row = $query->fetch()) {
								?>
									<div class="tables_name">
										<div class="table_p"><h3>&nbsp;접종 실적 총괄&nbsp;<small ><?=$row["standard"]?></small></h3></div>
									</div>
								  <div class="container">
										<table class="table table-bordered">
						          <thead>
						            <tr>
						              <th>구분</th>
						              <th class="num1">1회차 접종</th>
						              <th class="num2">2회차 접종</th>
						            </tr>
						          </thead>
									    <tbody>
									      <tr class="table-success">
									     <td>당일 누적&nbsp;<div class="circle">A</div>&nbsp;+&nbsp;<div class="circle2">B</div></td>
									        <td id="num1" style="padding-top:18px;"><?=$row["f1"]?></td>
									        <td id="num2" style="padding-top:18px;"><?=$row["f2"]?></td>
									      </tr>
									      <tr>
									        <td>당일 실적&nbsp;<div class="circle">A</div></td>
									        <td id="num3" style="padding-top:18px;"><?=$row["f3"]?></td>
									        <td id="num4" style="padding-top:18px;"><?=$row["f4"]?></td>
									      </tr>
									      <tr>
									        <td>전일 누적&nbsp;<div class="circle2">B</div></td>
									        <td id="num5" style="padding-top:18px;"><?=$row["f5"]?></td>
									        <td id="num6" style="padding-top:18px;"><?=$row["f6"]?></td>
									      </tr>
									    </tbody>
								  	</table>
								  </div>
								  <?php
									}
								  ?>
								</body>
							</div>


							  <div>
								<section>
							    <div id="footer_section_container">
									<div class="ad_wrapper_mainpage">
										<script type="text/javascript">
												var imgArray= new Array();
												imgArray[0] = "./src/assets/ad1.png";
												imgArray[1] = "./src/assets/ad2.png";
												imgArray[2] = "./src/assets/ad3.png";
												imgArray[3] = "./src/assets/ad4.png";


												window.onload = function()
												{
														var imgNum=Math.round(Math.random()*3);
														document.getElementById("introImg").src=imgArray[imgNum];
												}
										</script>
											<img id="introImg" width="650" alt="ad" src="./src/assets/ad3.png">
									</div>

							    </div>
								</section>
							</div>

							<!--서울 버튼 누르면..-->
							<script type="text/javascript">
								$("#8")
							</script>

					</article>
			</div>
			<footer id="footer">
				Copyright 2021. 1조 All pictures cannot be copied without permission.
				<br />
				yghasd@g.shingu.ac.kr
			</footer>
		</div>

</div>
<!--원형 그래프 -->
<?php
	$num = $_REQUEST["num"];
	$query = $db->query("select * from National where num = '$num'");
	$row = $query->fetch();
?>

<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,

	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.0'%'",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: <?=$row["national"]?>, label: "<?=$row["count"]?>"},
			{y: 20, label: "경기"},
			{y: 17.5, label: "대구"},
			{y: 10.7, label: "부산"},
			{y: 9.6, label: "대전"},
			{y: 7.1, label: "광주"},
			{y: 9.6, label: "인천"}

		]
	}]
});
chart.render();

}
</script>

  <!--*****************지도 script*****************-->
<script>
//-----------------------------------------------------------------------------------------
/* 메뉴를 늘이거나 줄일때 추가~삭제하세요. 쌍으로 구성되어있습니다. */
		mus1on  = new Image( );
		mus1off = new Image( );
		mus2on  = new Image( );
		mus2off = new Image( );
		mus3on  = new Image( );
		mus3off = new Image( );
		mus4on  = new Image( );
		mus4off = new Image( );
		mus5on  = new Image( );
		mus5off = new Image( );
		mus6on  = new Image( );
		mus6off = new Image( );
		mus7on  = new Image( );
		mus7off = new Image( );
		mus8on  = new Image( );
		mus8off = new Image( );
		mus9on  = new Image( );
		mus9off = new Image( );
		mus10on  = new Image( );
		mus10off = new Image( );
		mus11on  = new Image( );
		mus11off = new Image( );
		mus12on  = new Image( );
		mus12off = new Image( );
		mus13on  = new Image( );
		mus13off = new Image( );
		mus14on  = new Image( );
		mus14off = new Image( );
		mus15on  = new Image( );
		mus15off = new Image( );
		mus16on  = new Image( );
		mus16off = new Image( );
		/* 메뉴를 늘이거나 줄일때 추가~삭제하세요. 쌍으로 구성되어있습니다. */
		mus1off.src = './map/m061.gif';
		mus2off.src = './map/m063.gif';
		mus3off.src = './map/m055.gif';
		mus4off.src = './map/m033.gif';
		mus5off.src = './map/m041.gif';
		mus6off.src = './map/m031.gif';
		mus7off.src = './map/m043.gif';
		mus8off.src = './map/m054.gif';
		mus9off.src = './map/m064.gif';
		mus10off.src = './map/m02.gif';
		mus11off.src = './map/m032.gif';
		mus12off.src = './map/m042.gif';
		mus13off.src = './map/m062.gif';
		mus14off.src = './map/m053.gif';
		mus15off.src = './map/m052.gif';
		mus16off.src = './map/m051.gif';
		mus1on.src  = './map/m061o.gif';
		mus2on.src  = './map/m063o.gif';
		mus3on.src  = './map/m055o.gif';
		mus4on.src  = './map/m033o.gif';
		mus5on.src  = './map/m041o.gif';
		mus6on.src  = './map/m031o.gif';
		mus7on.src  = './map/m043o.gif';
		mus8on.src  = './map/m054o.gif';
		mus9on.src  = './map/m064o.gif';
		mus10on.src  = './map/m02o.gif';
		mus11on.src  = './map/m032o.gif';
		mus12on.src  = './map/m042o.gif';
		mus13on.src  = './map/m062o.gif';
		mus14on.src  = './map/m053o.gif';
		mus15on.src  = './map/m052o.gif';
		mus16on.src  = './map/m051o.gif';
		/* ----------------------------------------------------------------- */
		var cMuName="";
		/* ----------------아래내용 순서 변경 불가-------------------------------- */
		var exx = new Array("","전남","전북","경남","강원","충남","경기","충북","경북","제주","서울","인천","대전","광주","대구","울산","부산");
		function mus_on(musName) {
		  if(cMuName!=musName) {
		     document [musName].src = eval(musName + 'on.src');
		  }
		}

		function mus_off(musName) {
		  if(cMuName!=musName)
		     document [musName].src = eval(musName + 'off.src');
		}

		function smenu_click(musName){
		     cMuName=musName;
		     document [musName].src = eval(musName + 'on.src');
		}

		//-----------------------------------------------------------------------------------------
		</script>
		<!--원형그래프-->
		<script src="canvasjs.min.js"></script>
		<script>
			//Get the button
			var mybutton = document.getElementById("myBtn");

			// When the user scrolls down 100px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
			    mybutton.style.display = "block";
			  } else {
			    mybutton.style.display = "none";
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
			function downFunction() {
				document.body.scrollTop = 0;
 			 document.documentElement.scrollTop = 550;
	 		}
			</script>

			<script type="text/javascript">
				function changeBtnName()  {
				const btnElement
					= document.getElementById('btn');

				btnElement.value = "새이름!";
				}
			</script>
			<!--드롭다운버튼-->
			<script type="text/javascript">
			$(".dropdown-menu li a").click(function(){
			$(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
			$(this).parents(".dropdown").find('.btn').val($(this).data('value'));
			});
			</script>

			<script type="text/javascript">
				n =  new Date();
				y = n.getFullYear();
				m = n.getMonth() + 1;
				d = n.getDate();
				var day = new Date();
				var weekday = new Array(7);
				weekday[0] = "일요일";
				weekday[1] = "월요일";
				weekday[2] = "화요일";
				weekday[3] = "수요일";
				weekday[4] = "목요일";
				weekday[5] = "금요일";
				weekday[6] = "토요일";
				var j = weekday[day.getDay()];
				document.getElementById("date").innerHTML = "(" + m + "." + d + "." +" 12시 기준"+")";
			</script>

	</body>
</html>
