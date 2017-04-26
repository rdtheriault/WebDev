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
  <a href="hhs.php">Hermiston High School</a><br>
  <br>
  <a href="update.php"><strong>Create Post</strong></a><br>
  <br>
</div>    		<div id="right">
    
    	<h1>Welcome to the news</h1><h2>Here are the categories:</h2> <br><h3>Football <br>Hermiston high school</h3> <br><img class='uno' src = 'http://www.eastoregonian.com/storyimage/EO/20161008/ARTICLE/161009799/EP/1/6/EP-161009799.jpg&MaxW=600'><img class='uno' src='http://www.aawielandarchitecture.com/communities/5/004/012/577/575//images/4609934040.jpg'> <br><button id='btn1'>CLICK</button>
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