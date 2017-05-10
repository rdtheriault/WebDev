<html>
  <head>
   	<style>
		body {
          background-color: black;
          color: white;
        }
    </style>
  </head>
  <body>
	<form action='phpq2.php' method='post'>
      Name: <input type='text' name='name'>
      <br>
      Favorite City: <input type='text' name='city'>
      <br>
      Favorite Color: <input type='text' name='color'>
      <br>
      <input type='submit' value='Submit' id='btn'>
      
    </form>

      
      <?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $name = $_POST['name'];
          $city = $_POST['city'];
          $color = $_POST['color'];
          echo "<p>Welcome $name.</p>";
          ?>
       <div id="phone">
    	</div>
    <?php
          echo "<script>
          var city = '$city';
              	if (city == 'Corvallis') {
              		document.getElementById('phone').innerHTML = 'Awesome, I chose $city as well!';
              	} else {
               		document.getElementById('phone').innerHTML = 'Too bad, $city is not as cool as my city.';
               	}
      		</script>";
          echo "<p>I don't know why I asked you, but your favorite color is $color.</p><br>";
        }
    ?>
    <hr>
    <p>Attractions in my favorite city, Corvallis, are:
    <?php 
		$ratings = array("Oregon State University!", "Grandpas House!", "Cresent Valley High School!", "Izzy's and Cold Stone!");
		$arrleng = count($ratings);
		for($x = 0; $x < count($ratings); $x++) {
        echo '<option value="'.($ratings[$x]).'">'.$ratings[$x].'</option>';
       }
    ?>
    <p>Corvallis is rainy. Corvallis is wet. Corvallis is "The Valley of Sadness." It is in central Oregon. There are a lot of people in corvallis.
      I love corvallis. There is a college, waterparks, and many bread places. Corvallis is awesome!</p>
    
  </body>
</html>