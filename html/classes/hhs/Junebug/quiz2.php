<html>
  <head>
    <style>
      
    </style>
  </head>
  <body>
    <form action="quiz2.php" method="post">
       Name:<input type="text" name="title" value""><br>
        City:<input type="text" name="city" value""><br>
      Color:<input type="text" name="color" value""><br>
      <input type="Submit" value="Submit"><br>
      <option value="1">Awesome</option><option value="2">Alright</option><option value="3">Wait</option><option value="4">Nah...</option>
      
      
      
    <?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name =  $_POST['title'];
    $city =  $_POST['city'];
    $color =  $_POST['color'];
    
   echo "<h1>Welcome <p id='title'> $name</p> </h1><br>";
   echo "Awesome,I choose $city as well!";
   echo "Too bad, $city is not as cool as my city";
   echo "I don’t know why I asked you for your favorite color but it is $color";
      
    }
      ?>
    
  </body>
</html>