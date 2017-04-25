<html>
  <head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
   
  </head>
  
  <body>
    <div id="main">
    	<div id="sidebar">
  <a href="football.php">Football</a><br>
  <a href="hhs.php">Hermiston High School</a><br>
  <a href="index.php">Home</a><br>
  <a href="update.php">Create Post</a><br>
</div>    		<div id="right">
    
    	<h1>World of Football</h1><h2>Here are the categories:</h2> <br><h3>Football <br>Hermiston high school</h3> <br><img class='uno' src='http://www.eastoregonian.com/storyimage/EO/20161008/ARTICLE/161009799/EP/1/6/EP-161009799.jpg&MaxW=600'><img class='uno' src='http://www.aawielandarchitecture.com/communities/5/004/012/577/575//images/4609934040.jpg'> <br><button id='btn1'>CLICK</button>    		</div>
    </div>
    $q = mysqil_query($db,$s);
    if($q)
    {
    while($row = mysqil_fetch_array($q, MYSQIL_ASSOC))
    {
    
    
  </body>
</html>