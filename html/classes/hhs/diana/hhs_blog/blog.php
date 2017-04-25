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
    Before
  <?php
$owner = "dianag";
			//id user category info title approved
            echo "<h1>Blog Posts</h1>";
            
			include "../../connect.php";
			$s = "Select * From hhs_blog"; // Where owner = '".$owner."'";
		$q = mysqli_query($dbc,$s);
	if($q){
     while($row= myqli_fetch_array($q,MYQLI_ASSOC)) 
     {
       echo '<h2>'.$row['title'].'</h2><div>'.$row['info'].'</div>';
			
     }
      
    }


   ?>
  After
      </div>
      </div>
  </body>
  
 </html> 