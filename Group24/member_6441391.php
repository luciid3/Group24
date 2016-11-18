<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <style>
        .text {
            font-family: "Georgia", serif;
        }
        .centered {
           margin-left: 200px;
        }
        #welcomeMessage.text {
            padding-left: 40px;
            font-size: 20pt;
            text-align: center;
        }
        #AdrienPhoto {
            padding-top: 0px;
            padding-left: 80px;
            padding-right: 10px;
            float: left;
        }
        #backToHome {
            padding-top: 50px;
            padding-right: 30px;
            padding-bottom: 50px;
            padding-left: 80px;
        }
        #biography {
            padding-right: 1000px;
            padding-bottom: 50px;
            margin-left: 80px;
            font-size: 15pt;
            font-style: italic;
            font: arial;
        }
        #textBox {
          margin-left: 80px;
          width: 320px;
        }
        table, th, td {
            width: 300px;
            border: 5px solid black;
            padding: 10px solid black;
        }
        body {
            background-color: #cc99ff;
        }
    </style>

    <title> Adrien</title>

    <link rel="stylesheet " type="text/css" href="group.css" />

    <?php include 'pageArray.php';
    $cookie_name="lastPage";
    $cookie_value=$cookieInfo['adrien'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/"); //Set for use across whole website
    ?>

    <script type="text/javascript">
        function save() {
            var fieldValue = document.getElementById("textBox").value;
            localStorage.setItem("name", fieldValue);
            document.getElementById("userName").innerHTML = fieldValue;
        }
        function load() {
            var storedValue = localStorage.getItem("name");
            if (storedValue) {
                document.getElementById("textBox").value = storedValue;
                document.getElementById("userName").innerHTML = storedValue;
                document.getElementById("back").innerHTML = "back ";
            }
            else {
              document.getElementById("textBox").value = "Enter your name here, click save, and reload the page:)"
            }
        }
        function remove() {
            document.getElementById("textBox").value = "";
            localStorage.removeItem("name");
            document.getElementById("userName").innerHTML = "";
            document.getElementById("back").innerHTML = "";
        }
    </script>

</head>

<body onload="load()">

    <?php include 'header.php'; ?>

    <h1 id="Yep"> Adrien's page</h1>
    <br>
    <input type="text" id="textBox" />
    <input type="button" value="save" onClick="save()" />
    <input type="button" value="remove" onClick="remove()" />
    <br>
    <a href="../index.php" id="backToHome">Back to home</a>
    <br>
    <span style="margin-left: 80px;"> Click <a href="#fragment"> here </a> to redirect to the fragment </span>
    <br>
    <br>
    <p class="text" style="text-align: center; font-size: 20pt;">Welcome <span id="back"></span><span id="userName"></span>!</p>
    <br>
    <img src="images/adrienHomePic.jpg" title="yes, this is Adrien :)" style="width: 150px; height: relative; display: block;" id="AdrienPhoto" alt="Sorry, there seems to be an error in the display of the image:/">
    <p id="biography" class="text"> <span style="color:lime;"> Hello there visitor. </span> I'm Adrien. My hobbies are various and include
    running, climbing, parkour, trampoline, longboarding and volleyball. I also like to watch the NBA, and support the Detroit Pistons and
    the Miami Heat. Furthermore, I would like to thank group 24 for being such a <strong>wonderful</strong> team and I have enjoyed being a part of it. Feel
    free to roam this website. If you have any questions you can contact me on my work mobile at +447572355963. </p>
    <br>

    <table id="table" class="centered">
        <tbody>
            <tr>
                <th>Longboard Brands</th>
                <td>Original</td>
                <td>Arbor</td>
                <td>Loaded</td>
            </tr>
            <tr>
                <th>Popular Board</th>
                <td>Apex 40</td>
                <td>Axis</td>
                <td>Tan Tien</td>
            </tr>
            <tr>
                <th>Famous Riders</th>
                <td>Mike Virgin</td>
                <td>Sid Melvin</td>
                <td>Lofti Lamaali</td>
            </tr>
        </tbody>
    </table>
<br>
<br>
<ul class="centered">
  <li>This</li>
  <li>is</li>
  <li>a</li>
  <li>list</li>
  <li>:)</li>
</ul>
<br>
<br>
<p style="padding-top: 50px;" id="fragment" class="centered"> hello, the fragment brings you aroud here</p>
<br>
<div style="text-align: center;">
<?php
        $xml = simplexml_load_file('member_6441391.xml');
        echo "My name is ".$xml->NAME[0]." ".$xml->SURNAME[0].". I was born on ".$xml->BIRTHDAY[0]." in ".$xml->BIRTHPLACE[0]."."
?>
</div>
<br>

<div style="text-align: center">
<?php
        function favColors() {
          $colors=array (
             "Color1"=> "Blue",
             "Color2" => "Red",
             "Color3" => "Green",
             "Color4" => "Yellow",
             "Color5" => "Orange",
             "Color6" => "Purple" );
          $output = "The colors I like are: ";
          foreach ($colors as $value) {
            $output .= $value;
            $output .= " ";
           }
            $output .= ".";
            echo "$output";
        }
     favColors();
?>
</div>

<br>

<div style="text-align: center;">
<?php
         if (isset($_COOKIE[$cookie_name])) { echo "The last page you visited was " . $_COOKIE[$cookie_name]; }
?>
</div>

<?php
          include 'footer.php';
?>
</body>
</html>
