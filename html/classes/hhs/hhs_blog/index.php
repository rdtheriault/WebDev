<html>
  <head>
    <link rel="stylesheet" type="text/css"href="style.css">
  </head>
  <body>
    <div id="main">
      <?php include "include.php"; ?>
      <div id="right">
        <img src="hhs.png" style="width:900px"><br><br>
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