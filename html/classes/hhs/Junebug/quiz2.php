<html>
  <head>
    <style>
    body  {
     background-color:Cyan;  
      color:Purple;
      }
    </style>
  </head>
  <body>
    <form action="quiz2.php" method="post">
       Name:<input type="text" name="title" value""><br>
        City:<input type="text" name="city" value""><br>
      Color:<input type="text" name="color" value""><br>
      <input type="Submit" value="Submit"><br>
      <select>
      <option value="1">Awesome</option><option value="2">Alright</option><option value="3">Wait</option><option value="4">Nah...</option>
      </select>
      
      
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

 
		
    <p><strong>Charlotte is the largest city in the state of North Carolina. It is the county seat of Mecklenburg County and the second-largest city in the southeastern United States, just behind Jacksonville, Florida. Charlotte is the third-fastest growing major city in the United States.<i>It is the place where the Carolina Panthers have their Bank of America Football Stadium.</i></strong></p>
  </body>
</html>