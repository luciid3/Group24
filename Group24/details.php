<html>
<head>
<title>Submitted!</title>
<style>
body {
	background-color: #cbd0d8;
}
p {
	margin-top: 15;
	color: white;
	font-family: Verdana;
	font-size: 100%;
	border-style: solid;
    border-color: white;
	background-color: #6d6d6d;
	border-width: 3px;
	padding-left: 25px;
	padding-right: 25px;
	padding-top: 25px;
	padding-bottom: 25px;
}

.bold {
	font-weight: bold;
	color: #cbd0d8;
} 

</style>
</head>
<body>

<p><span class="bold">Welcome, </span><?php echo $_POST["firstname"]; ?> <?php echo $_POST["lastname"]; ?>! <br><br>
<span class="bold">Your email address is:</span> <?php echo $_POST["email"]; ?> <br><br>
<span class="bold">Your comment is:</span> <?php echo $_POST["comment"]; ?> </p>


<form action="index.php">
    <input type="submit" value="Go back to the home page" />
</form>

</body>
</html>

