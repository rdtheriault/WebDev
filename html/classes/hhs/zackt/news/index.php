<html>
  <head>
    
    
    <style>
      body {
      	background-color: gray;
      	color: yellow;
        text-align: center;
      }
      .uno {
        width: 35%;
        border: 5px ridge blue;
        margin: 1px;
      }
    </style>
    
   
  </head>
  
  <body>
    <?php include "include.php" ?>
    
    <?php
		echo "<h1>Welcome to the news</h1>";
		$words = "Here are the categories:";
		echo "<h2>".$words."</h2> <br>";
		echo "<h3><a href='football.php'>Football</a> <br>";
        echo "<a href='hhs.php'>Hermiston high school</a></h3> <br>";
		echo "<img class='uno' src='http://www4.pictures.zimbio.com/gi/Jacquizz+Rodgers+Oregon+v+Oregon+State+0PaUXemKDtYl.jpg'>";
		echo "<img class='uno' src='http://www.aawielandarchitecture.com/communities/5/004/012/577/575//images/4609934040.jpg'> <br>";
		echo "<button id='btn1'>CLICK</button>";
	?>
    
    
  </body>
</html>