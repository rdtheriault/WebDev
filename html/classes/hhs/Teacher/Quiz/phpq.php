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
  </body>
</html>