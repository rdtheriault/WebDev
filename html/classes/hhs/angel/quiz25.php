<html>
  <head>
     <style>
    #color{
     color:blue; 
    }
       body { 
         background-color:red;
       }
    
    
    </style>
        
        </head>
  <body>
    <form action="quiz25.php" method="POST">
    favorite city:  <input type="text" name="favcity"><br>
     favorite color: <input type="text" name="color1"><br>
    city:  <input type="text" name="city1"><br>
          <input type="submit" value="Submit"><br>
    </form>
          <?php
$city = array("hermiston", "la", "lagrande");
$color = array("blue", "red", "Green");
?>

     <?php

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $favcity = $_POST["favcity"];
            $color1 = $_POST["color1"];
            $city1 = $_POST["city1"];
          echo " Your favorite city is $favcity<br>";
          echo "Your favorite color is $color<br>";
          echo "you live in  $city1<br>";
          echo "<h1>Welcome $city1!!!<br></h1>";
          
          if ( $favcity == $city[0]){
            echo "Awesome thats my favorite city too";
          }
          else {
            echo "too bad $city[0] is better";
          }
         echo "<h1 id='color'> I dont know why i asked you for your color but mine is blue </h1>"; 
        }



//}

?>
    
		
  </body>
 
  
  
  
  
  
</html>