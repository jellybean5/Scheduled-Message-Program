<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Day of the week messaging system!</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>

    <?php
	  
	$servername = "localhost";
	$username	=	"root";
	$password = "root";
	
	// CREATE CONNECTION
	
	$conn = new MySQLi($servername, $username, $password);
	
	// CHECK CONNECTION
	if ($conn->connect_error) {
		die("Connection Failed: " . $conn->connect_error);
	}
	
	echo "<strong><h2>Connected Successfully</h2></strong>";
	
	  
      //This is a PHP script that knows which day of the week it is

      //First we get the week day as an integer using a build-in PHP function
      $dayofweek = date("w");
      $timeoftheday = date("l jS \of F Y h:i:s A");

      //Then we use a switch to give a message depending on the day it is
      switch ($dayofweek) {
        case 1:
         echo "<h1>$timeoftheday</h1>
          <p>Have a great day today!</p>";
          break;
        case 2:
          echo "<h1>$timeoftheday</h1>
          <p>Have a great day today!</p>";
          break;
        case 3:
          echo "<h1>$timeoftheday</h1>
          <p>Have a great day today!</p>";
          break;
        case 4:
          echo "<h1>$timeoftheday</h1>
          <p>Have a great day today!</p>";
          break;
        case 5:
          echo "<h1>$timeoftheday</h1>
          <p>Have a great day today!</p>";
          break;
        case 6:
          echo "<h1>$timeoftheday</h1>
          <p>Have a great day today!</p>";
          break;
        case 0:
          echo "<h1>$timeoftheday</h1>
          <p>Have a great day today!</p>";
          break;
        default:
          echo "Error!";
          break;
      }
    ?>
  </body>
</html>
