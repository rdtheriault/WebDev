<html>
  <head>
    
    
    
    </head>
  
  <body>
          <form action="quiz2.php" method="post">
              Name:<br>
          <input type="text" name="name" value""><br>
          Favorite Color:<br>
         <textarea name="color" style="width:250xp;height:150xp"></textarea><br><br>
            
             Favorite City:<br>
          <input type="text" name="city" value""><br>
        
          <input type= "submit" value="Add Post">
            
    </form>
    Welcome <?php echo $_POST["name"]; ?> !<br>
    
    Your favorite color is... <?php echo $_POST["color"]; ?><br>
    
    Your favorite city is... <?php echo $_POST["city"]; ?><br>
    <?php
    if($_POST["city"]=="San Francisco"){
      echo "Awesome, I choose San Francisco as well";
    }


?>
    Too bad  <?php echo $_POST["city"]; ?> is not as cool as my city<br>
    I don't know why I asked you for your favorite color but it is <?php echo $_POST["color"]; ?><br>
    </body> 
  
  </html>