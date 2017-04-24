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
		//phpinfo();
		
		$news = "<span id='title'>Welcome to Zair's Soccer News</span>";
         
		echo "<h1>".$news."</h1>";
	?> 
      <div id="img">
     <div> <img src="https://pbs.twimg.com/profile_images/1405261581/soccernews_logo_new_400x400.png" width="500px" height="300px"/></div>
     
        <div> <img src="https://pbs.twimg.com/profile_images/1405261581/soccernews_logo_new_400x400.png" width="500px" height="300px"/></div>
      
        
      </div>
      
      <form action="upload.php" method="post">
          Title:<br>
          <input type="text" name="title" value""><br>
          post:<br>
        <textarea name="post" style="width:250px:height:150"></textarea>
        <select id="cat" name="cat">
          <?php  
      $handle = fopen("text.txt","r");
		if($handle) {
          while  (($line = fgets($handle)) !==false) {
            echo"<option value='". $line."'>".$line."<br>";
            
          }
                  fclose($handle);
        }
		else {
         "you have an error somewhere"; 
        }
      ?>
        </select>
        
          <input type="submit" value="Add Post">
        </form>
      
      
      
      
    </div>              
    After
   </div>
    
    <?php
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          include"../../connect.php";
         $error = 0;
         // echo $_POST["title"]."<br>";
          //echo $_POST["post"]."<br>";
          //echo $_POST["cat"]."<br>";
            
            
          
         }
		if (!isset($_POST["post"])OR !isset($_POST["title"])){
          echo "<br> Your screwed<br>";
          $error = 1;
          
          if($POST["post"] == ""){
            echo "<br>blank<br>";
            $error = 1;
          }
            else {
              $info = $dbc->real_escape_string($_POST["post"]);
            }
             if($POST["title"] == ""){
            echo "<br>blank<br>";
            $error = 1;
          }
            else {
              $title = $dbc->real_escape_string($_POST["title"]);
            }
            if($POST["cat"] == ""){
            echo "<br>blank<br>";
            $error = 1;
          }
            else {
              $category = $dbc->real_escape_string($_POST["cat"]);
            }
          if error == 0) {
            $name = "zair2210";
             $s3 = "Insert into hhs_blog (user,category,info,title) values ('".$name."','".$category."','".$info."','".$title."')";
            
            
            $q3 = mysqli_query($dbc,$s3);
            
            if($q3)
            {
              echo '<br>Your post has been posted thank you for posting your post one the post tab!';
            }
            else
            {
              echo '<p>'.mysql_error($dbc).'</p>':
              echo '<Query issue';
            }
          }
            mysql_close($dbc);
          
        }
          
        
        
        
        ?>
    
  </body>
</html>