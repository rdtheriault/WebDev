<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="main"> 
    <?php 
		$handle = fopen("cat.txt" , "r");
		if ($handle) {
          while (($line = fgets($handle)) !== false) {
            //process the line read.
            echo $line. "<br>";
          }
          fclose($handle);
        }
          else {
          echo "Holy smokes Batman, you have an error...!";
          
      
        }
		include "include.php"; ?>
        <div id="right">
        <img src="../../hhs_blog/hhs.png" style="width:900px">
          <br><br>
          <form action = "insert.php" method = "post">
            Title: <br>
            <input type="text" mame="title" value=""><br>
            Post: <br>
            <textarea name="post" style="width:250xp;height:150xp"></textarea><br><br>
            <input type="submit" value="Add Post">
          </form>
        <?php 
            echo "<h1>Hello World Blog</h1>";
            //phpinfo();
            $words = "More words";
            echo "<h2>".$words."</h2>";
        ?>
        
        After
      </div>
    </div>
  </body>
</html>