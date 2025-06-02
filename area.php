<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Area</title>
	  <link rel="stylesheet" href="css/style.css">
   </head>
   
   <body>
      <?php
	     $x=$_POST["length"];
		    $y=$_POST["width"];
		    settype($x,"integer");
		    settype($y,"integer");
		    $z=$x*$y;
		    echo "The area of the rectangle with length = " . $x . " and width = " . $y . " is " . $z;
	     ?>
   </body>
</html>