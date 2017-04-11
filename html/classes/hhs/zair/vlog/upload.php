<html>
  <head>
    <link rel="stylesheet" type="text/css"href="style.css">     
  </head>
  <body>
    <div id="main">
      
    <?php include "include.php"; ?>
    Before
    <div id="News" >  
      <?php  
      $handle = fopen("text.txt","r");
		if($handle) {
          while  (($line = fgets($handle)) !==false) {
            echo $line."<br>";
            
          }
                  fclose($handle);
        }
		else {
         "you have an error somewhere"; 
        }
      ?>
    <?php		
		//phpinfo();
		
		$news = "<span id='title'>Welcome to Zair's Soccer News</span>";
         
		echo "<h1>".$news."</h1>";
	?> 
      <div id="img">
     <div> <img src="https://pbs.twimg.com/profile_images/1405261581/soccernews_logo_new_400x400.png" width="500px" height="300px"/></div>
     
        <div> <img src="https://pbs.twimg.com/profile_images/1405261581/soccernews_logo_new_400x400.png" width="500px" height="300px"/></div>
      
        
      </div>
      
      <form action="insert.php" method="post">
          Title:<br>
          <input type="text" name="title" value""><br>
          post:<br>
        <textarea name="post" style="width:250px:height:150"></textarea>
          <input type="submit" value="Add Post">
        </form>
      
      
      
      
    </div>              
    After
   </div>
    
    
    
  </body>
</html>