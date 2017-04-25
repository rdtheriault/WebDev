<html>
  <head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
   
  </head>
  
  <body>
    <div id="main">
    	<?php include "include.php" ?>
    		<div id="right">
    
    	<?php
			echo "<h1>World of Football</h1><br>";
			$owner = "zackt";
			echo "<h2>Blog Posts</h2>";
			include "../../connect.php";
			$s = "select * from hhs_blog WHERE user like '". $owner. "' and category like 'Football'";
	        $q = mysqli_query($dbc, $s);
			if($q) {
              while($row = mysqli_fetch_array($q, MYSQLI_ASSOC)){
                echo '<h2>'.$row['title'].'</h2><div>'.$row['info'].'</div>';
              }
            } 
			else {
              echo '<p>'. mysqli_error($dbc).'</p>';
              echo 'query issue';
            }
		?>
              
    		</div>
    </div>
    
    
  </body>
</html>