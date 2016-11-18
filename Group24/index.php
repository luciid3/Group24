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
	
	<!--Script that allows member info to be shown-->
	<script>
        function showMember(str) {
        if (str=="") {
        document.getElementById("txtHint").innerHTML="";
        return;
        }
        if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
  
        } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        //code that changes the information in the text box
        xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
        document.getElementById("txtHint").innerHTML=this.responseText;
         }
        }
       // links the getMember.php file
       xmlhttp.open("GET","getMember.php?q="+str,true);
       xmlhttp.send();
       }
       </script>
	
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
		
		#members#xmlForm.centered {
			text-align: center;
		}
		
		@keyframes colorChange{
			0%{color: #302E30; left: 0px;}
			25%{color: #BE51CA; left: 100px;}
			50%{color: #302E30; left: 0px;}
			75%{color: #BE51CA; left: -100px;}
			100%{color: #302E30; left: 0px;}
		}
		/*Code to put some space between the elements(just for visual reasons)*/
		div.xmlForm{
			margin-top: 40px;
		}
		
		div.member{
			margin-top: 40px;
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
		
		
		<h2 class="indexHeader" id="colorAnimate" title="Moving Header!">Home</h2>
		
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
		
		<p class="centered">
		Click on one of the pictures to visit their individual webpage
		</p>
		
		<br>
		
		<div class="centered">
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
					style="width: 150px; height: relative; display: block;"
					alt="Error in displaying Filip's photo"></a></td>
				
				<td><a href="member_6432380.php">
					<img src="images/benHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"
					alt="Error in displaying Ben's photo"></a></td>
				
				<td><a href="#">
					<img src="images/petarHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"
					alt="Error in displaying Petar's photo"></a></td>
					
				<td><a href="#">
					<img src="images/maddieHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"
					alt="Error in displaying Maddies's photo"></a></td>
				
				<td><a href="#">
					<img src="images/adrienHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"
					alt="Error in displaying Adrien's photo"></a></td>
					
				<td><a href="member_6413040.php">
					<img src="images/harryHomePic.jpg" 
					style="width: 150px; height: relative; display: block;"
					alt="Error in displaying Harry's photo"></a></td>
				
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
		</div>
		
		<div class="member" id="members">
		<form action="index.php" method="GET">
			<input type="radio" name="member" value="6413040"> Harry<br>
			<input type="radio" name="member" value="petar"> Petar<br>
			<input type="radio" name="member" value="adrien"> Adrien<br>
			<input type="radio" name="member" value="maddie"> Maddie<br>
			<input type="radio" name="member" value="6434647"> Filip<br>
			<input type="radio" name="member" value="6432380"> Ben<br>
			
			<input type="submit" value="Go!">
		</form>
		</div>
		
		<div class="xmlForm" id="xmlForm">
		<form>
                    Select a member:
                    <select name="members" onchange="showMember(this.value)">
                    <option value="">Select a member:</option>
                    <option value="Petar Zdravkov">Petar Zdravkov</option>
                    <option value="Harry Ware">Harry Ware</option>
                    <option value="Filip Adrian Briac">Filip Adrian Briac</option>
                    <option value="Ben Spooner">Ben Spooner</option>
                    <option value="Madeleine Frost">Madeleine Frost</option>
                    <option value="Adrien Royer">Adrien Royer</option>
                    </select>
                </form>
                <div id="txtHint"><b>Member info will be listed here...</b></div>
		</div>
		
		<br>		
		<h2>Tell us what you think about the website!</h2><br>
		
		<form action="details.php" method="post">
			Firstname:<br>
			<input type="text" name="firstname"/><br>
			Lastname:<br>
			<input type="text" name="lastname"><br>
			Gender: 
			<input type="radio"> Male
			<input type="radio"> Female<br>
			E-mail:<br>
			<input type="text" name="email"><br>
			Comments:<br>
			<textarea rows="5" cols="50" name="comment"></textarea><br><br>
			<input type="submit">
		
		
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
