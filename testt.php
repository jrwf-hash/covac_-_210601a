<?php
	require("covacDB.php");
?>
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



		$(".m02").click(function(){

			downFunction();
			alert("dfsdf");
		});

	</script>

<?php
	$query = $db->query("select * from Covac_status");
	/*
	$query2 = $db->query("select mus from Covac_status where class = ");
	*/
	while ($row = $query->fetch()) {

?>
	<div class="maps_all">
		<div class=<?=$row["class"]?> onmouseover=mus_on( <?=$row["mus"]?>) onmouseout=mus_off( <?=$row["mus"]?>)>
		<div class="local_name_map" >
			<?=$row["region"]?>
		</div>
		<div class="local_values_map" >
			<?=$row["human"]?>
		</div>
	</div>
	</div>
					<?php

						echo($row["class"]);
						echo($row["mus"]);


						}
					?>
					<div class="measurement">
						<div class="measurement_wrap">
							<p style="font-size:11px; font-weight:500;">※서울을 클릭 시 아래 그래프와 연동</p>
						</div>
					</div>
