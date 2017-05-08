<html>
  <head>
  </head>
  <body>
    <form action="phpquiz.php" method="post">
        Hermiston:<input type="text" name="title" value""><br>
        Football:<input type="password" name="sport"><br>
          <select id="cat" name="cat">               
		<option value="1">Awesome</option><option value="2">Alright</option><option value="3">Wait</option><option value="4">Nah...</option>  
          </select>
          <input type="submit" value="Add Post">
        </form>
    <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $car = $_POST["title"];
  $why = $_POST["why"];
  $rate = $_POST["cat"];
  
}
?>
  </body>
</html>