<html>
  <head>
    <link rel="stylesheet" type="text/css"href="style.css">
  </head>
  <body>
    <div id="main">
      
      <?php include "include.php"; ?>
      
      <div id="right">
        Before
        <?php
            $handle = fopen("inputfile.txt", "r");
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
        After
      </div>
    </div>
 
    
    
    
    
    
    <?php


		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
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
		else {
          
          
        }

	?>
    
    
  </body>
</html>