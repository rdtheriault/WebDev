<html>
  <head>
    <link rel="stylesheet" type="text/css" href= "style.css">
    
    
    
    </head>
  <body>
    <div id="main">
    <?php
$handle= fopen("cat.txt","r");
if($handle){
  while(($line =fgets($handle))!==false){
  echo $line. "<br>";
    
  }
  fclose($handle);
}
else{
 echo "Holy Smokes Batman,you have an error...";
}
    include "include.php"

   ?>
      <div id="right"> 
        <img src="http://hhs.hermiston.k12.or.us/wp-content/uploads/hhs/sites/7/2015/05/HHS-Banner.png" style="width:900px"><br><br>
        <form action="insert.php" method="post">
              Title:<br>
          <input type="text" name="title" value""><br>
          Post:<br>
          <textarea name="post" style="width:250xp;height:150xp"></textarea><br><br>
          <input type= "submit" value="Add Post">
          </form>
    Before
  <?php
 echo "<h1>Welcome to my blog!</h1>";
 echo "<h1>Hello World</h1>";
   //phpinfo();
	$words="More Words";
	echo "<h2>" .$words."</h2>";


   ?>
  After
      </div>
      </div>
  </body>
  
 </html> 