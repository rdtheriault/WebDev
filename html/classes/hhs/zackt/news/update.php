<html>
  <head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
   
  </head>
  
  <body>
    <div id="main">
    	<?php include "include.php" ?>
    		<div id="right">
    
    	<?php
			echo "<h1>Welcome to the news</h1>";
			$words = "Here are the categories:";
			echo "<h2>".$words."</h2> <br>";
			echo "<h3>Football <br>";
        	echo "Hermiston high school</h3> <br>";
			echo "<img class='uno' src='http://www4.pictures.zimbio.com/gi/Jacquizz+Rodgers+Oregon+v+Oregon+State+0PaUXemKDtYl.jpg'>";
			echo "<img class='uno' src='http://www.aawielandarchitecture.com/communities/5/004/012/577/575//images/4609934040.jpg'> <br>";
			echo "<button id='btn1'>CLICK</button>";
		?>
		<?php 
			$handle = fopen("category.txt", "r");    
			if ($handle) {
              while (($line = fgets($handle)) !== false) {
                echo "<br>".$line."<br>";
              } 
              fclose($handle);
        	} else {
              echo "Oops! You messed up, ya doofus!";
            }
        ?>
        <br>
       	<form action="update.php" method="post">
        Title:
          <input type="text" name="title" value""><post><br>
          Post:<br>
          <textarea name="post" style="width:250px;height:300px;"></textarea><br><br>
          <input type="submit" value="Add Post">
        </form>
          
       </div>
    </div>
  </body>
</html>