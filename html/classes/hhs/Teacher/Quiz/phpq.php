<html>
  <head>
  </head>
  <body>
  	<form action="phpq.php" method="post">
          Fav Car:<input type="text" name="title" value=""><br>
          Why do you like it?<input type="password" name="why"><br><br>
          <select id="cat" name="cat">
            
          <?php
				$ratings = array("Awesome Posume","Great","Meh","Garbage");
				$arrLeng = count($ratings);
				for($x = 0; $x < $arrLeng; $x++){
                 	echo  '<option value="'.($x+1).'">'.$ratings[$x].'</option>';
                }
       	 ?> 
          
          </select>
          <input type="submit" value="Select">
        </form>
    <?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
          	$car = $_POST["title"];
          	$why = $_POST["why"];
          	$rate = $_POST["cat"];
          	echo "Your favorite car is $car <br>";
            echo "You like this car because:<br>$why";
            echo "<br>You gave it a rating of $cat";

        }
	?>
  </body>
</html>