<html>
<head>
	<meta charset="UTF-8">
	<title>Form Submitted!</title>
	<link href="group.css" rel="stylesheet" type="text/css"/>
	
	<style>
		p{
			text-align: center;
		}
		body  {
			font-family: Roboto,arial,sans-serif;
			background-color: #D7DCD1;
		}
	</style>
	
</head>
<body>

<div id="hold">
	<div id="top">
		<?php
			include 'header.php';
			$to      = 'bs00430@surrey.ac.uk';
			$subject = 'Group 24';
			$message = $_POST["comments"];

			mail($to, $subject, $message, 'something here');
			
		?>
		
		<br><br><br>
		<p>Thank you <?php echo ' '. $_POST["firstname"] ?> for submitting your feedback</p>
		<p>Your comments have been sent to an email address</p>
		
		<?php
			include 'footer.php';
		?>
	</div>
</div>
</body>
</html>