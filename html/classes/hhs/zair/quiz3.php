<html>
  <body>
    <form action="quiz3.php" method="post">
    Favorite city:  <input type="text" name="favoriteCity"><br>
     Favorite color: <input type="text" name="favoriteColor"><br>
    City:  <input type="text" name="city"><br>
          <input type="submit" value="Submit"><br>
                <select id="cit" name="cit"/>
  
          <?php
	$city[0] = "Hermiston";
	$city[1] = "Zacapu";
	$city[2] = "RivieraMaya";
  
	

?>

     <?php

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $favCity = $_POST["favoriteCity"];
            $favColor = $_POST["favoriteColor"];
            $ciry = $_POST["city"];
          echo " Your favorite city is $favCity";
          echo "Your favorite color is$favColor";
          echo "you live in  $city";



?>

    
  </body>
  
  
  
  
  
</html>