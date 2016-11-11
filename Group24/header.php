
		<!--Javascript used to create dropdown box in navigation bar-->
		
		<script>
		// Toggle between displaying and hiding dropdown box 
		function dropFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown box
		window.onclick = function(click) {
		  if (!click.target.matches('.dropbtn')) {

			var dropdowns = document.getElementsByClassName("dropdown-content");
			for (var d = 0; d < dropdowns.length; d++) {
			  var openDropdown = dropdowns[d];
			  if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			  }
			}
		  }
		}
		</script>
		
	
		<?php
			function getName($number) {
				
				$names = array(
					'1' => 'Harry',
					'2' => 'Ben',
					'3' => 'Petar',
					'4' => 'Adrien',
					'5' => 'Maddie',
					'6' => 'Fillip',
				);
				
				echo $names[$number];
			}
		?>
	
		
		<h1><span style="padding: 20px;">Group 24</span></h1>
		
		
		<!--Navigation Bar using a list-->
		<ul class="nav">
		
			<!--Fragment ID to further down the page-->
			<li><a href="#myPics" title="Pictures!">Pictures</a></li>
			
			
			
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn" onclick="dropFunction()">Group 24</a>
				<div class="dropdown-content" id="myDropdown">
				  <a href="member_6413040.php"> <?php getName('1'); ?> </a>
				  <a href="member_6432380.php"> <?php getName('2'); ?> </a>
				  <a href="#"> <?php getName('3'); ?> </a>
				  <a href="#"> <?php getName('4'); ?> </a>
				  <a href="#"> <?php getName('5'); ?> </a>
				  <a href="#"> <?php getName('6'); ?> </a>
				</div>
			</li>
			
			
			
			
			
			<li><a href="Index.php" title="Index">Home</a></li>
		</ul>
		
		<img src="/images/bodies.jpg" alt="Profile Shots" style="position: absolute;top:0px;height: 150px;width: relative;">
