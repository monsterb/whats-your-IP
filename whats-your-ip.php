<!DOCTYPE html>
<html>
<!-- 
	Maintainer: monsterb
	Contact: UNIX.S3C (at) gmail (dot) com
	URL: http://monsterb.github.io/ -->
<head>
<title>monsterb | daemons, gnus, and penguins. Oh my! | What's your ip?</title>
  </head>
   <body>
   
   
<?php echo "Your IP Address: ";
		echo $_SERVER['REMOTE_ADDR'];
		echo "<br /><br />Reported User Agent is: " ;
		echo $_SERVER["HTTP_USER_AGENT"];
	  ?>
	  
	  
	  
	  </body>
	  </html>
