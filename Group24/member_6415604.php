<!DOCTYPE html>
<html>
    <head>
	<style>
    
	
    body{
       background-image: url("images/744479.jpg");
	   background-repeat: no-repeat;
       background-attachment: fixed;
    }

    #h1add{
       font-style: italic;
    }

    #h1imptxt{
       font-size: 13px;
       color:     gray;
       font-style: italic
    }
    
	
    ul.top{
       list-style-type:none;
       margin: auto;
       overflow: hidden;
    }

    li{
       float: left;
       margin-top: 3px;
    }

    li a  {
       display: block;
       color: darkcyan;
       text-align: center;
       padding: 16px;
       text-decoration: none;
       font-family:cursive;
    }
    
    div.top {
       width: 97px;
       height: 20px;
       transition: width 1s;
       transition: width 1s;
       color:aqua
    }
   
       div.top:hover {
       width:  300px;
       opacity: 0.3;
    }

    #ah1{
       font-style: italic;
    }

    div.nav{
       list-style-type: none;
       padding: : 1em;
       float:          right;
       max-width:      230px;
       padding:        1em;
       border-left:  3px solid black;
       font-family:    monospace;
       font-size: 13px
    }

    div.link:hover{
       color:aqua;
       transition-duration: 2s;
       transform-style: flat;
       transform: scale(1.5); 
    }

    #navh1{
       color:white;
       text-align: center;
       font-family:;
    }

    div.xml{
       margin-top: 40px;
    }
  
    div.generalInfo{
	   color: aqua;   
    }
  
    .button {
       background-color: #32CD32;
       border:           1px solid black;
       color:            black;
       padding:          15px 32px;
       text-align:       center;
       text-decoration:  none;
       display:          inline-block;
       font-size:        13px;
       margin:           4px 2px;
       cursor:           pointer;
       border-radius:    9px;
	   
       transition-duration: 0.8s;
    }

    .button:hover {
       background-color: #3e8e41;
    }

    #images{
	   float: right;
	   width: 100px;
    }
	
	#myPics{
		margin-left: 20px;
	}
    
	div.table{
		color: aqua;
		margin-left: 40px;
		margin-top:  50px;
	}
	
	#mct{
		border: 1px solid #4CAF50;
	}
	
	table, td {
        border: 1px solid #4CAF50;;
	    text-align: center;
	    border-collapse: collapse;
    }
	
	th {
        background-color: #4CAF50;
        color: white;
       }
 
	
    </style>


    <meta charset="utf-8">
    <title>Petar`s website</title>
    <link rel="stylesheet" href="group.css">
 
    <!--Including the array for the cookie text-->
    <?php
	include 'pageArray.php';
	
	$cookie_name = "lastPage";
	$cookie_value = $cookieInfo['petar'];

	setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/"); //Set for use across whole website
    ?>
</head>

<body>

    <header>
	<!--Incliding the common header-->
    <?php
    include "header.php";
    ?>
    </header>
    
	<!--Setting the lower unordered list-->
	<hr>
    <ul class="top">
    <li><a target="_blank" title="University of Surrey!" href="http://www.surrey.ac.uk/"><div class="top">AboutUni</div></a></li>
    <li><a target="_blank" title="Bertolt Brecht!" href="https://egbb.org"><div class="top">AboutSchool</div></a></li>
    <li><a target="_blank" title="Bulgaria!" href="https://en.wikipedia.org/wiki/Bulgaria"><div class="top">AboutCountry</div></a></li>
    <li><a target="_blank" title="City of Pazardzhik!" href="https://en.wikipedia.org/wiki/Pazardzhik"><div class="top">AboutTown</div></a></li>
    <li><a target="_blank" title="W3Schools!" href="http://www.w3schools.com/default.asp"><div class="top">W3Tutorials</div></a></li>
    </ul>
    <hr>  
	  
	<!--Image path-->
    <img id="myPics" src="images/petar1.jpg" alt="Image not found">
    
	<!--Creating a div box	 to hold data-->
    <div class="generalInfo">
    <h2 style="margin-left:20px">Little about Petar</h2>
    <p style="margin-left:40px">Born on 16<sup>th</sup> February 1997 in the city of Pazardzhik, Bulgaria. </p>
    <p style="margin-left:40px">Member of a humble family. Only child. Graduated from Language High School Bertolt Brecht in 2016.</p>
    <p style="margin-left:40px">Started studying Computer Science at the University of Surrey in September 2016.</p>
    <h2 style="margin-left:20px">Education</h2>
    <p style="margin-left:40px">Enrolled in one of the most prestigious primary shools in Pazardzhik in 2003. Awarded for achieving excellent grade.</p>
    <p style="margin-left:40px">Enrolled in the best local professional art secondary school in 2007. Awarde for competing in art competitions.</p>
    <p style="margin-left:40px">Enrolled in the local language school "Bertolt Brecht" in 2011. Awarded for participating in shool`s Ecology club.</p>
    <h2 style="margin-left:20px">Hobbies</h2>
    <p style="margin-left:40px">Gifted artist. Loves drawing and painting. Big fan of motorcycles. True gamer devoted in fiding the cons in today`s game industry and making it better.</p>
	<h2 style="margin-left: 20px">Some additional info about Petar</h2>
	<p style="margin-left:40px">
	<?php
	$xml=simplexml_load_file("Data/member_6415604.xml") or die("Error: Cannot load file");
	echo "<br> Occupation: ";
	echo $xml->occupation . "<br> Course: ";
	echo $xml->course . "<br> Hobbies: ";
	echo $xml->hobbies . "<br>";	
	?>
	</p>
	</div>
	
	<!--Defining an array that hold info about favourite motorcycles-->
	<?php
	$mc = array(
	array("Brand"=>"Kawasaki", "Model"=>"Ninja", "Cc" =>"1000cc"),
	array("Brand"=>"Ducati", "Model"=>"Monster Evo", "Cc" =>"1200cc"),
    array("Brand"=>"Honda", "Model"=>"Hornet", "Cc" =>"1000cc"),
	array("Brand"=>"Suzuki", "Model"=>"Boulevard", "Cc" =>"1800cc")
	);
	?>
	
	<!--Defining a box which will hold the table and PHP script that reads the data from the array and prints it in a table-->
	<div class="table">
	<?php if (count($mc) > 0): ?>
	<p syle="color:aqua">Table of favourite <span style="font-size:20px">motorcycles</span></p>
    <table id="mct">
    <thead>
    <tr>
    <th><?php echo implode('</th><th>', array_keys(current($mc))); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($mc as $row): array_map('htmlentities', $row); ?>
    <tr>
    <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <?php endif; ?>
	</div>
    
	<!--Creating a div box to position the button-->
    <div class="xml" align = center>
    <button type="button" onclick="multipleTasks()" class="button">Additional info</button>
    <br><br>
    </div>
    
	<!--Creating the space in which the content of the XML file will be shown-->
	<div align = center><p id="info" style="color:aqua"> </p></div>
  
    <!--Scripting the functions to read from the corresponding XML file-->
    <script>
    function multipleTasks(){ //function that triggers two internal functions
	loadInfo();
	visibility();
	}
  
    function loadInfo() {  //function to load the data from the XML file
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myFunction(this);
    }
  };
    xmlhttp.open("GET", "Data/member_6415604.xml", true);
    xmlhttp.send();
    }

    function myFunction(xml) { //function that actually reads and visualises the data from the XML file
    var xmlDoc = xml.responseXML;
    document.getElementById("info").innerHTML =
    "Title: " +
	xmlDoc.getElementsByTagName("title")[0].childNodes[0].nodeValue + 
    "<br>Name in English: " + 
	xmlDoc.getElementsByTagName("English")[0].childNodes[0].nodeValue + 
	"<br>Name in Bulgarian: " + 
	xmlDoc.getElementsByTagName("Bulgarian")[0].childNodes[0].nodeValue + 
	"<br>Occupation: " + 
	xmlDoc.getElementsByTagName("occupation")[0].childNodes[0].nodeValue + 
	"<br>Course: " + 
	xmlDoc.getElementsByTagName("course")[0].childNodes[0].nodeValue + 
	"<br>Favourite module: " + 
	xmlDoc.getElementsByTagName("favourite-module")[0].childNodes[0].nodeValue + 
	"<br>Temporary residence: " + 
	xmlDoc.getElementsByTagName("short-term-residence")[0].childNodes[0].nodeValue + 
	"<br>Permanent residence: " + 
	xmlDoc.getElementsByTagName("permanent-residence")[0].childNodes[0].nodeValue + 
	"<br>Hobbies: " + 
	xmlDoc.getElementsByTagName("hobbies")[0].childNodes[0].nodeValue;
    }

    function visibility(){ //function that hides or shows the visualised data depending on its previous state
	var x = document.getElementById('info');
	if (x.style.visibility === 'visible') {
        x.style.visibility = 'hidden';
    } else {
        x.style.visibility = 'visible';
    }
   }
    </script>
 
    <!--The paragraph that holds the name for the previously visited page-->
    <p style = "text-align: center; padding-top: 50px; color:black;">
    <?php	
	if(isset($_COOKIE[$cookie_name]))  { 
	echo "The last page you visited was " . $_COOKIE[$cookie_name];
	}
	?>
    </p>
    
	<!--Including the common footer-->
    <footer>
    <?php
    include "footer.php"
    ?>
    </footer>
    <hr>
	
</body>
</html>