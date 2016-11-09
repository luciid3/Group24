
<br><br><br>
<p class="footer">

<?php

function footerMsg()  {
	echo "Group 24 | COM1025 | 2016";
}

if(!isset($_COOKIE[$cookie_name])) {
	footerMsg(); 	//Call user defined function
}

else {
	echo $_COOKIE[$cookie_name];
}

?>

</p>