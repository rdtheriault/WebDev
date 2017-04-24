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
            echo "<h1>Blog Posts</h1>";
            //phpinfo();
            $words = "More words";
            echo "<h2>".$words."</h2>";
			include "../connect.php";
			$s = "Select * From touchntalkpro Where owner = '".$owner."'";
		$q = mysqli_query($dbc,$s);
		if($q)
		{   
			while($row = mysqli_fetch_array($q, MYSQLI_ASSOC))
			{
				
			}
	
		}
		else
		{
			echo '<p>'.mysqli_error($dbc).'</p>';
			echo 'Query issue';
		}
		mysqli_close($dbc);
        ?>
        After
      </div>
    </div>
  </body>
</html>