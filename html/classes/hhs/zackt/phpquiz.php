<html>
  <head>
  </head>
  <body>
    <form action="phpquiz.php" method="post">
        Fav Car:<input type="text" name="title" value""><br>
        Why?:<input type="password" name="why"><br>
          <select id="cat" name="cat">               
		<?php 
			$ratings = array("cool", "aight", "whaaaa", "bad");
			$arrleng = count($ratings);
			for($x = 0; $x < count($ratings); $x++) {
              echo '<option value="'.($x+1).'">'.$ratings[$x].'</option>';
            }
        ?>  
          </select>
          <input type="submit" value="Add Post">
        </form>
    <?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $car = $_POST['title'];
          $why = $_POST['why'];
          $rate = $_POST['cat'];
          echo $rate;
        }
	?>
  </body>
</html>