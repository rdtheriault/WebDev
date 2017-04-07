<html>
  <head>
    <style>
      #News{
        text-align:center;
        width:100%;
        color:blue;
      }

   
      </style>
  </head>
  <body>
    <?php include "include.php"; ?>
    Before
    <div id="News" >
    <?php
		
		//phpinfo();
		
		$news = "<span id='title'>Welcome to Angel's News</span>";
         
		echo "<h1>".$news."</h1>";
	?>
    </div>
    After
    
    
    
    
    
    
  </body>
</html>