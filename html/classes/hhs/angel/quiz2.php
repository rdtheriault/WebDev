<html>
 <head>
   
  </head>
  <body>
    <?php
 $cars = "<span> Post Your Favorite Cars!! </span>";
		echo "<h1>".$cars."</h1>";
   ?>
   <div id="img">
     <div> <img src="http://buyersguide.caranddriver.com/media/assets/submodel/7728.jpg" width="500px"/></div>
     
        <div> <img src="http://www.diseno-art.com/news_content/wp-content/uploads/2013/03/Subaru-WRX-Concept-1.jpg"  width="468px"/></div>
      
        
      </div>
      
    


          
      <form action="quiz2.php" method="post">
          Title:<br>
          <input type="Favorite Car" name="Why do you like it" value""><br>
          post:<br>
        <textarea name="post" style="width:250px:height:150"></textarea>
        <select id="cat" name="cat">
     <?php
        $ratings = array("Awesome","Great","eh","ew");
	$arrLeng = count($ratings);
           for($x = 0; $x < $arrLeng; $x++){
             echo '<option value="'.($x+1).'">'.$ratings[$x].'</options>';
           }
          ?>
          <?php




?>
 <p>
      </select>
        
        
          <input type="submit" value="Add Post">
        </form>
    <select
    
			</select>
			</p>
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
  
  </body>
  <style>
    #img {
      display:flex;
    }
    
    body {
     background-color:red; 
    }
    
    
  </style>
</html>