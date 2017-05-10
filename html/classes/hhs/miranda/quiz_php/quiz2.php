<html>
  <head>
  
  </head>
  <body>
	<form action = "quiz2.php" method = "post">
    	Name: <br> <input type="text" name="name" value="<?php echo $name;?>"> <br><br>
    	Favorite City: <br> <input type="text" name="city" value="<?php echo $city;?>"> <br><br>
    	Favorite Color: <br> <input type="text" name="color" value="<?php echo $color;?>"> <br><br>
    	<input type="submit" value="Submit">
    </form> 
    <?php
		if ($name) { 
          echo  Welcome
        }
	?>
  </body>
</html>