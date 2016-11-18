<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ben's Webpage</title>
	<link href="group.css" rel="stylesheet" type="text/css"/>
	
	<?php
			/*Calls the pageArray file's contents to be used here*/
			include 'pageArray.php';
			/*Uses variables from pageArray and sets with the correct string*/
			$cookie_name = "lastPage";
			$cookie_value = $cookieInfo['ben'];
			/*Set cookie function used to initialize the cookie and the expire time set to 15 days*/
			setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/");
			
			/*Setting up the displayInfo function for holidays to be used later in the document*/
			function displayInfo(){
				/*Sets a variable to read in the xml file stored in the data folder that is about member_6432380*/
				$xml=simplexml_load_file("data/member_6432380.xml");
				/*Echo will output the following onto the webpage. The html is inside the quotes and the data is represented by $xml->'data name'*/
				/*Everything is separated with '.' to concatenate everything together*/
				echo "<li><b>Full Name:</b> ". $xml->firstname .' '. $xml->middlename .' '. $xml->lastname ."</li>";
				echo "<li><b>University ID:</b> ". $xml->urn ."</li>";
				echo "<li><b>DOB:</b> ". $xml->dob ."</li>";
				echo "<li><b>Place of Birth:</b> ". $xml->placeofbirth ."</li>";
				echo "<li><b>Height:</b> ". $xml->height ."</li>";
				echo "<li><b>Nationality:</b> ". $xml->nationality ."</li>";
			}
	?>
	
	<!-- Using an internal style sheet to overwrite and make my own styles -->
	<style>
		body  {
			font-family: Roboto,arial,sans-serif;
			background-color: #D7DCD1;
		}
		#hold{
		}
		#menu{
			width: 15%;
			float:left;
			margin: 1%;
			height: 600px;
			border: 2px solid black;
			border-radius:5px;
			display: inline-block;
			background-color: #cdd3c5;
		}
		/* :hover will become active and add the styles to the parent (#menu) when the mouse hovers over the top of the parent element */
		#menu:hover{
			background-color: #b4bda8;
		}
		#content{
			width: 80%;
			float:right;
			margin: 1%;
			display: inline-block;
		}
		#top{
			width: 90%;
			margin: 1%;
			margin-left: 5%;
			margin-right: 5%;
		}
		/* The ',' selects both the first element and second together and applies the same styles */
		h2, h3{
			text-decoration: underline;
			text-align: center;
		}
		h2{
			font-size: 30px;
		}
		h3{
			font-size: 22px;
		}
		ul {
			list-style: none;
		}
		.menuLi{
			text-align: center;
			font-size: 18px;
		}
		/* Selects all anchors that are inside the .menuLi class */
		.menuLi a{
			text-decoration: none;
			padding: 10px 0px;
			color: #272c21;
		}
		.menuLi a:hover{
			text-decoration: underline;
			color: #81916e;
		}
		table{
			border-collapse: collapse;
			vertical-align: top;
			text-align: center;
		}
		td, th{
			border: 1px solid black;
			padding: 5px 20px 5px 20px;
		}
		hr{
			border-width:2px;
			margin-left: 20px;
			margin-right:20px;
		}
		.hover{
			transition: width 1s, height 1s;
			box-shadow: 5px 5px 5px #1a1d16;
			margin: 2%;
			border-radius: 1%;
		}
		.hover:hover{
			width: 400px;
			height:400px;
		}
		.musicList{
			font-size:14px; 
			text-align: center; 
			padding:10px;
			text-decoration:underline;
		}
		/* This css3 style is added to the .animation class. It sets the default name,duration and makes it repeat forever */
		.animation{
			animation-name: animate;
			animation-duration: 3s;
			animation-iteration-count: infinite;
		}
		/* Sets the keyframes of the animate style. Percentages are used to create a more accurate animation. The time is set in the style that the animation is called from */
		@keyframes animate {
			0%   {color:#004d00;}
			25%  {color:#00b300;}
			50%  {color:#00e600;}
			75%  {color:#00b300;}
			100% {color:#004d00;}
		}
		.button{
			width:175px; 
			height:50px; 
			font-size:16px; 
			background-color: #687458; 
			color:#e6e9e2; 
			border:none;
		}
	</style>
	
</head>

<body>
	<!-- Script tags open so I can write code inside. The type attribute is set to javascript -->
	<script type="text/javascript">
		
		//The playPause function is passed the videoId so it can be used for many videos without having to "hard-code" for each individual video
		function playPause(vidId) {
			//The vid variable is set to get the element ID of the passed ID
			var vid = document.getElementById(vidId);
			//Checking if the video is alreading playing or has been paused 
			if(vid.paused){
			//If the video is paused it will play the video
				vid.play();
			}
			//If the video has not be paused (so it is playing) it will pause the video
			else{
				vid.pause();
			}
		}
		
		//The biggersmaller function is passed the video id as well as its default with and height
		function biggerSmaller(vidId, defaultWidth, defaultHeight){
			//the vid variable is set to to get the element ID of the passed ID
			var vid = document.getElementById(vidId);
			//Checking if the width is the same as its original starting width
			if(vid.width == defaultWidth){
			//If the size is the original size it started from it will double the width and height so it still remains the same resolution
				vid.width = defaultWidth*2;
				vid.height = defaultHeight*2;
			}
			else{
			//If the size is not the original size (it has already been enlarged) it will reduce the size back down to the original width;
				vid.width = defaultWidth;
				vid.height = defaultHeight;
			}
		}
	</script>
	
	<div id="hold">
	
		<!-- using the header footer(bottom of document) created by the group -->
		<?php
			include 'header.php';
		?>
		
		<br>
		<div id="top">
			<h2>Ben's Webpage</h2>
			<br>
			<p style="text-align: center;">
			My name is Ben Spooner and this webpage is a brief summary of myself, my hobbies and what I get up to in my spare time. 
			Use the contents menu on the left panel to navigate easily throughout the page.
			</p>
		</div>
		
		<hr><br>
		
		<div id="menu" title="Menu">
			<br>
			<h3>Contents</h3>
			<br>
			<ul class="menuLi">
			<!-- All of the lists are surrounded in an anchor tag so can reference an address. The hypertext reference uses an ID. This is called a fragment ID. When the link is clicked it will add #'name' to the URL and 
			will move the window down towards the linked ID that has been created. If no ID has been created it will not move. -->  
				<li><a href="#about">About Me</a></li>
				<li><a href="#hobbies">Hobbies</a></li>
				<li><a href="#music">Music</a></li>
				<li><a href="#holidays">Holidays</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="#cookie">Cookie Information</a></li>
			</ul>
		</div>
			
		<div id="content">
		
			<!-- ABOUT ME -->
			<!-- H3 is given the 'about' id and also the 'animation' class. A hybrid selector-->
			<h3 id="about" class="animation">About Me</h3>
			<br>
			<p style="float:right; margin-right: 7%; font-size:14px">"Hover to enlarge"</p>
			<br>
			<img src="/images/benHomePic.jpg" alt="Ben's Picture" height="200" width="200" class="hover" style="float:right; margin-top: 0px;">
			
			<div style="margin-left:15%;">
			<h4 style="padding: 10px; text-decoration: underline;">Information:</h4>
			<ol style="text-align: left; list-style-type: disc;">
			
			<!-- The displayInfo function is being called which was made at the top of the document. -->
			<?php
			displayInfo();
			?>
			
			</ol>
			</div>
			
			<br><br>
			
			<p>
				I attended <span style="color:blue;">Pirbright Primary School</span> and went to <span style="color:green;">Guildford County School</span> at the age of 11 for 8 years as there was a 6th Form college. In 2016 I moved to the University of Surrey
				to study Computer Science. It is a 4 year course (placement year included) and covers a wide range of topics inside the computer science field. The first year does not count towards
				the final grade but with high scores for coursework and exams, companies are more inclined to take you. At the moment I dont have anything planned for the future but i believe that 
				over the next few years I will work that out.
			</p>
			<br><br>
			<hr><br>
			
			<!-- HOBBIES -->
			<h3 id="hobbies">Hobbies</h3>
			<br>
			
			<p>
				I used to play a lot of football when i was younger. Every Sunday there would be a match and sometime during the week there would be a training session. Only recently have I stopped playing
				football on a regular basis. Woking Cougars, Mayford Athletic and Farncombe were the teams I used to play for.
			</p>
			<br>
			<img src="/images/Jimmy_Page_Ben.jpg" alt="Jimmy Page" class="hover" height="200" width=200 style="float:left;">
			<br><br>
			<p>
				Playing guitar is something I enjoy a lot. Starting from classical guitar at an early age, I took lessons and eventually passed grade 4 with a merit at the age of 11. I began to play more 
				popular music with other people who could sing, play drums and many other instruments. My favourite song to play/listen to is Stairway to Heaven by Led Zeppelin. My idol is Jimmy Page (who
				also plays for Led Zeppelin), and is considered one of the best guitarists of all time.
			</p>
			<br>
			
			
			<br><br><br><br><br><br>
			<hr><br>
			<!-- MUSIC -->
			<h3 id="music">Music</h3>
			<br>
			<p>I listen to a lot of different genres of music. Here are a few of my favourites: </p>
			<p class="musicList">"Stairway to Heaven - Led Zeppelin (Studio Version)"</p>
			
			<audio controls style="width: 80%; margin: 0 auto; display:block;">
				<source src="/music/stairway.mp3" type="audio/mpeg">
				<!-- The following will be displayed if the browser is old and therefore not supporting the newer HTML5 audio element -->
				This browser does not support audio
			</audio>
			
			<br>
			
			<p class="musicList">"Stairway to Heaven - Led Zeppelin (Live Version)"</p>
			<video id="stairway" width="640" height="360" controls style="margin: 0 auto; display:block;">
				<source src="/music/stairway.mp4" type="video/mp4">
			</video>
			<br>
			<div style="margin: 0 auto; text-align:center;">
			<button onclick="playPause('stairway')" class="button">Play/Pause</button>
			<button onclick="biggerSmaller('stairway',640,360)" class="button">Bigger/Smaller Player</button>
			</div>
			<br>
			
			<p class="musicList">"White Noise - Disclosure"</p>
			<video id="whitenoise" width="640" height="360" controls style="margin: 0 auto; display:block;">
				<source src="/music/whitenoise.mp4" type="video/mp4">
			</video>
			<br>
			<div style="margin: 0 auto; text-align:center;">
			<button onclick="playPause('whitenoise')" class="button">Play/Pause</button>
			<button onclick="biggerSmaller('whitenoise',640,360)" class="button">Bigger/Smaller Player</button>
			</div>
			
			<br><br>
			<hr><br>
			<!-- HOLIDAYS -->
			<h3 id="holidays">Holidays</h3>
			<br>
			<div style="text-align: center;">
			<ol style="list-style-type: none;">
			
			<?php
				/* A holidays array has been created that stores all of the foreign countries that I have visited.*/
				$holidays = array("Mexico", "Thailand", "Italy", "France", "New Zealand", "America", "Sri Lanka", "Egypt", "Morocco", "Tunisia", "Czech Republic");
				
				/* A foreach will loop for how many values there are stored in the array. The current value stored for each time the loop increments
				is stored in the $holiday variable which is then used inside the loop*/
				foreach($holidays as $holiday){
					/*Every time it loops the code will echo into a list item the temporary value of holiday which is taken from looping the array
					If any values are added to the holiday array, the loop will adjust and just create a bigger list*/
					echo '<li>'. $holiday . '</li>';
				}
			?>
			
			</ol>
			</div>
			<br><br>
			
			<hr><br>
			<!-- CONTACT -->
			<h3 id="contact">Contact Me</h3>
			<br>
			<div style="width: 50%; margin: 0 auto; text-align: center;">
			
			<!-- The action is set to this current page as I do not want to redirect anyone to a different page. The method is set to Get as the 
			data submitted is not needed to be hidden-->
			<!-- An email using mailto: or php's mail() function was not implemented as this is hosted from the localhost and cannot be changed to send
			mail -->
			<form id="contactForm" action = "member_6432380.php" method = "GET">
				<p style="display:inline;">Firstname:</p>
				<input type="text" name="firstname"><br>
				<p style="display:inline;">Lastname:</p>
				<input type="text" name="lastname"><br><br>
				<p>Comments:</p>
				<textarea name="comments" style="width:240px ; height:200px;">Enter text here...</textarea><br>
				<input type="submit" value="Go!" class="button">
		    </form>
			<br>
			<?php 
			/*Uses the isset function to see if a value for firstname has been submitted.*/
			if (isset($_GET["firstname"]) && $_GET["firstname"] != null) {
			/*If firstname has been set from the form, it will echo a thank you message*/
				echo 'Thank you ' . $_GET["firstname"] . ' ' . $_GET["lastname"] . ' for submitting your feedback!';
			}
			 ?>
			</div>
			<br><br>
			
			<hr><br>
		
		<table style="margin: 0 auto" id="cookie">
			<tr style="text-decoration: underline; font-size: 20px;">
				<th>Cookies Enabled: </th>
				<th>Current Page: </th>
				<th>Last Page: </th>
			</tr>
			<tr>
				<th>
				<!-- Outputs the value of the cookies in the 2nd row -->
				<?php
				/* If there is atleast 1 or more cookies, then execute whatever is inside the if statement. Count gets the number of values inside
				the cookie array */
					if(count($_COOKIE) > 0) {
					echo "True";
					} else {
					echo "False";
					} 
					/*It will echo true if there are 1 or more cookies. If not it will output false */
				?>
				</th>
				<th>
				<?php
					/*outputting cookie information*/
					echo $cookie_value;
				?>
				</th>
				<th>
				<?php
					/*Isset makes sure there is atleast a value inside the cookie_name index inside the array so it wont output null or an error*/
					if(isset($_COOKIE[$cookie_name]))  {
					echo $_COOKIE[$cookie_name];
					}
				?>
				</th>
			</tr>
		</table>
		
		<br><hr>
		<br><br><br><br>
		</div>
		
		<?php
			include 'footer.php';
		?>
		
	</div>
</body>

</html>