<!DOCTYPE html>

<head>

	<meta lang='en'>
	<meta charset = 'UTF-8'>
	
	<title>Group 24 Index</title>
	
	<link href="group.css" rel="stylesheet" type="text/css"/>
	
	<!--Set the cookie to a value specific to this webpage-->
	<?php
	//Set cookie
	include 'pageArray.php';
	
	$cookie_name = "lastPage";
	$cookie_value = $cookieInfo['home'];

	setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/"); //Set for use across whole website
	
	
	if (isset($_GET["member"])) {
		header("location: member_" . $_GET['member'] . ".php");
	}
	?>
	
	<style>
	
		table, th, td {
			border-collapse: collapse;
			border: 3px solid black;
		}
		
		body  {
			background-color: #D7DCD1;
		}
		
		/*Use absolute positioning to place image alongside header*/
		#headPics {
			position: absolute;
			top:0px;
			height: 150px;
			width: relative;
		}
		
		#colorAnimate {
			color: #302E30;
			position: relative;
			font-size: 60px;
			
			animation-name: colorChange;
			animation-duration: 5s;
			animation-iteration-count: infinite;
			width: 200px;
			margin: 0 auto;
		}
		
		@keyframes colorChange{
			0%{color: #302E30; left: 0px;}
			25%{color: #BE51CA; left: 100px;}
			50%{color: #302E30; left: 0px;}
			75%{color: #BE51CA; left: -100px;}
			100%{color: #302E30; left: 0px;}
		}
		
	</style> 
	
	
</head>

<body>

	<div id="hold">

		<!--Include common header into webpage-->
		<?php
			include 'header.php';
		?>
		
		<br><br>
		
		
		<h2 class="indexHeader" id="colorAnimate">Home</h2>
		
		<br>
		
		<p style="font-size: 20px;">
			<?php
			$grp = "Group 24!";
			echo "Welcome to the homepage for $grp";
			?>
			This is the index where
			you can find links to all the individual webpages of each member 
			in the group. This website is a peice of coursework that was set
			by Shujun Li for the COM1025 module, web publishing and databases. 
			We hope that you enjoy the website!
		</p>
		
		<br><hr><br>
		
		<h2 class="indexHeader" id = "myPics">Meet the group!</h2>
		
		<br><br>
		
		<p align=center>
		Click on one of the pictures to visit their individual webpage
		</p>
		
		<br>
		
		<div align = center>
		<table>
			<tr style="background-color:#E6D69F;">
				<th>Filip</th>
				<th>Ben</th>
				<th>Petar</th>
				<th>Maddie</th>
				<th>Adrien</th>
				<th>Harry</th>
			</tr>
			
			<tr>
				<td><a href="member_6434647.php">
					<img src="images/filipHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"></a></td>
				
				<td><a href="#">
					<img src="images/benHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"></a></td>
				
				<td><a href="#">
					<img src="images/petarHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"></a></td>
					
				<td><a href="#">
					<img src="images/maddieHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"></a></td>
				
				<td><a href="#">
					<img src="images/adrienHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"></a></td>
					
				<td><a href="member_6413040.php">
					<img src="images/harryHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"></a></td>
				
			</tr>
		</table>
		
		<br><hr><br>
		
		<p>
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
			This is some writing.
		</p>
		
		
		
		<form action="index.php" method="GET">
			<input type="radio" name="member" value="6413040"> Harry<br>
			<input type="radio" name="member" value="petar"> Petar<br>
			<input type="radio" name="member" value="adrien"> Adrien<br>
			<input type="radio" name="member" value="maddie"> Maddie<br>
			<input type="radio" name="member" value="6434647"> Filip<br>
			<input type="radio" name="member" value="ben"> Ben<br>
			
			<input type="submit" value="Go!">
		</form>
		
		
		
		</div>
		
		
		<!--Output which page was last visited by accessing the value of the cookie-->
		<!--This uses a website-wide cookie to determine which page was most recently visted by this user-->
		<p style = "text-align: center; padding-top: 50px;">
		<?php
		
			if(isset($_COOKIE[$cookie_name]))  {
				echo "The last page you visited was " . $_COOKIE[$cookie_name];
			}
		?>
		</p>
		
			
		<?php
			include 'footer.php';
		?>
		
	
	</div>

</body>

</html>
