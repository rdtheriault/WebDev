<html>
  <head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
   
  </head>
  
  <body>
    <div id="main">
    	<div id="sidebar">
  <a href="index.php">Home</a><br>
  <br>
  <a href="football.php">Football</a><br>
  <br>
  <a href="basketball.php">Hermiston High School</a><br>
  <br>
  <a href="update.php"><strong>Create Post</strong></a><br>
  <br>
</div>    		<div id="right">
    
    	<h1>Welcome to the news</h1><h2>Here are the categories:</h2> <br><h3>Football <br>Basketball</h3> <br><img class='uno' src = 'http://www.charlotteobserver.com/sports/nfl/carolina-panthers/f5kgsz/picture23782843/alternates/FREE_640/0612PANTHERS_30.JPG'><img class='uno' src='https://cdn.nba.net/nba-drupal-prod/styles/tile_640w/s3/2017-02/GettyImages-642989146.jpg?itok=jXAdkUpS'> <br><button id='btn1'>CLICK</button>
        <br>
       	<form action="update.php" method="post">
        Title:
          <input type="text" name="title" value""><br>
          Post:<br>
          <textarea name="post" style="width:250px;height:300px;"></textarea><br><br>
          
          
          <select id="cat" name="cat">
                          
		<option value='Football
'>Football
</option><option value='Hermiston High School'>Hermiston High School</option>            
            
          </select>
          
         
          <input type="submit" value="Add Post">
        </form>
                        
          
      
      
      
      
      
      
      
      
       </div>
    </div>

  </body>
</html>