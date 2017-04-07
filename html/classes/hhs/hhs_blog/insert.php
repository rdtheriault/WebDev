<html>
  <head>
  
  </head>
  <body>
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