
		<!--Javascript used to create dropdown box in navigation bar-->
		
		<script>
		// Toggle between displaying and hiding dropdown box */
		function dropFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown box
		window.onclick = function(e) {
		  if (!e.target.matches('.dropbtn')) {

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
		
	
	
	
		
		<h1><span style="padding: 20px;">Group 24</span></h1>
		
		
		<!--Navigation Bar using a list-->
		<ul class="nav">
		
			<!--Fragment ID to further down the page-->
			<li><a href="#myPics" title="Pictures!">Pictures</a></li>
			
			
			
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn" onclick="dropFunction()">Group 24</a>
				<div class="dropdown-content" id="myDropdown">
				  <a href="member_6413040.php">Harry</a>
				  <a href="#">Ben</a>
				  <a href="#">Petar</a>
				  <a href="#">Adrien</a>
				  <a href="#">Maddie</a>
				  <a href="#">Fillip</a>
				</div>
			</li>
			
			
			
			
			
			<li><a href="Index.php" title="Index">Home</a></li>
		</ul>
		
		<img src="images/bodies.jpg" alt="Profile Shots" style="position: absolute;top:0px;height: 150px;width: relative;">
