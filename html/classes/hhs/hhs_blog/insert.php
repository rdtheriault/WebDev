<html>
  <head>
    <link rel="stylesheet" type="text/css"href="style.css">
  </head>
  <body>
    <div id="main">
      
      <?php include "include.php"; ?>
      
      <div id="right">
        Before<br><br>
        <?php
            $handle = fopen("cat.txt", "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    // process the line read.
                  echo $line."<br>";
                }

                fclose($handle);
            } else {
                // error opening the file.
            } 
        ?> 
        <br><br>
        <form action="/insert.php" method="post">
          Title:<br>
          <input type="text" name="title" value=""><br>
          Post:<br>
          <textarea name="post" style="width:250px;height:150px;"></textarea><br><br>
          <input type="submit" value="Add Post">
        </form>
      </div>
    </div>
 
    
    
    
    
    
    <?php


		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          $error = 1;
          
          
          
          if ($error == 0) {
            $s3 = "Insert into hhs_blog (user, category, info, title) Values ('".$name."','".$category."','".$info."-".$title."')";

            $q3 = mysqli_query($dbc,$s3);
            if($q3)
            {
                echo '<br>Your work sample has been archived'.$counter; 
                $counter = $counter + 1;
                $_SESSION['counter'] = $counter;
            }
            else
            {
                echo '<p>'.mysqli_error($dbc).'</p>';
                echo 'Archive Query issue';
            }
          }
        }
		else {
          
          
        }

	?>
    
    
  </body>
</html>