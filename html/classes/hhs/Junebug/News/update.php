<html>
  <head>
    <title></title>
    <style>
    </style>
  </head>
  <body>
    <?php
	echo "<h1>Hello World</h1>";
		//phpinfo();
		$words = "Here are the Categories";
		echo "<h2>".$words."</h2>";
		echo "a href ="Football.php">Football</a>";
		echo "a href ="Track&Field.php">Track&Field
?>
		<?php
        $handle = fopen("cat.txt", "r");
        if ($handle) {
        } else {
        // error opening the file.
        echo "error bro come back later";}
        while (($line = fgets($handle)) !== false) {
        // process the line road.
        echo $line."<br>";
        }
        
  </body>
</html>
  