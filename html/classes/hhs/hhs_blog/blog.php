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
			$owner = "admin";
			//id user category info title approved
            echo "<h1>Blog Posts</h1>";
            
			include "../connect.php";
			$s = "Select * From hhs_blog WHERE user = 'zackt' and category = 'Football'"; // Where owner = '".$owner."'";
		$q = mysqli_query($dbc,$s);
		if($q)
		{   
			while($row = mysqli_fetch_array($q, MYSQLI_ASSOC))
			{
				echo '<h2>'.$row['title'].'</h2><div>'.$row['info'].'</div>';
			}
	
		}
		else
		{
			echo '<p>'.mysqli_error($dbc).'</p>';
			echo 'Query issue';
		}
		mysqli_close($dbc);
        ?>
        <br><br>After
      </div>
    </div>
  </body>
</html>