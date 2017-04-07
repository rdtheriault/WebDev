<html>
  <head>
    <style>
      #News{
        text-align:center;
        width:100%;
        color:red;
      }

   
      </style>
  </head>
  <body>
    <?php include "include.php"; ?>
    Before
    <div id="News" >
    <?php
		
		//phpinfo();
		
		$news = "<span id='title'>Welcome to Zair's Super News</span>";
         
		echo "<h1>".$news."</h1>";
	?>
    </div>
    After
    
    
    
    
    
    
  </body>
</html>