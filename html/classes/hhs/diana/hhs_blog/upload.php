<html>
  <head>
    <link rel="stylesheet" type="text/css" href= "style.css">
    
    
    
    </head>
  <body>
    <div id="main">
	<?php
   	 include "include.php"
	?>

      <div id="right"> 
        <img src="http://hhs.hermiston.k12.or.us/wp-content/uploads/hhs/sites/7/2015/05/HHS-Banner.png" style="width:900px"><br><br>
        <form action="upload.php" method="post">
              Title:<br>
          <input type="text" name="title" value""><br>
          Post:<br>
          <textarea name="post" style="width:250xp;height:150xp"></textarea><br><br>
        
          <input type= "submit" value="Add Post">
          <select id="cat" name="txt">
             <?php
$handle= fopen("cat.txt","r");
if($handle){
  while(($line =fgets($handle))!==false){
  echo $line. "<br>";
   echo"<option value='".$line."'>".$line."</option>";
  }
  fclose($handle);
}
else{
 echo "Holy Smokes Batman,you have an error...";
}
    

   ?>
            
            
            </select>
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
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 $error=1;
  echo $_POST["title"]."<br>";
  echo $_POST["post"]."<br>";
  echo $_POST["txt"]."<br>";
}


?>
  </body>
  
 </html> 