<html>

  <head>
    
  </head>
  
  
  <body>
    <form action="quiz3.php" method="post">
      Name;<input type="text" name="name"><br>
      Fav city;<input type="text" name="city" value=""><br>
      Fav color;<input type="text" name="color"><br><br>
      <select id="cat" name="cat">
      
      
      </select>
      <input type="submit" value="select">
    </form>
    <?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $_POST["name"];
     $city = $_POST["city"];
     $color = $_POST["color"];
     echo "your name is $name<br>";
     echo "your favorite city is $city<br>";
     echo "<br>your favorite color is $color";
     
     
     
   }
?>
  </body>
  
  
  
</html>