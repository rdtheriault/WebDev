<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <script src='items.js'></script>
    <link rel="stylesheet" type="text/css" href="item2.css">
  </head>
  <body>
    <div id='main'>
      <img  id="banner" src='pics/dawg-banner.png'>
      <div id='nav'>
        <div id='home' class='btn'>
          Main
          </div>
        <div id='shop' class='btn'>
          Shop
          </div>
        <div id='custom' class='btn'>
          Custom
          </div>
        <div id='contact' class='btn'>
          Contact Us
          </div>
        <div id='cart' class='btn'>
          Cart
          </div>
      </div>
       <div id="items_wrapper">

        <div id="buttons_shop">
               <div class="side_button_outer" id="sort-hats"><h1 class="side_button">Hats</h1></div>
               <div class="side_button_outer" id="sort-shirts"><h1 class="side_button">Shirts</h1></div>
               <div class="side_button_outer" id="sort-sweaters"><h1 class="side_button">Sweaters</h1></div>
               <div class="side_button_outer" id="sort-mugs"><h1 class="side_button">Mugs</h1></div>
               
        </div>



        <div id='items'></div>

       



       
    </div>
    <div id="footer"><img id="footer_s" src="pics/footer_statement.png"></div>
    
    
    
    <script>
      
      var url = window.location.href;
      var res = url.split("="); //array  res[1];
      
      
      
      var masterArray = [];
      var itemEl = document.getElementById('items');
      var fill = "";
      var count = 0;
      if (localStorage.getItem("cart") == null ){
        
        
      }
      else if(localStorage.getItem("cart") == "") {
        
      }
      else {
        masterArray.push(localStorage.getItem("cart"));
      }
      
      
      
      
      function createItem(product) {
          fill += "<div class='outeri'>";
          fill += "<div class='pici'>";
          fill += "<img src='" + product.imgsrc + "' width='300px'>";
          fill += "</div>";
          fill += "<div class='infoi'>";
          fill += "<div class='conti'>";
          fill += "<div class='colori'>";
          //fill += "<div class='colouri' class='color1i'></div><div class='colour' class='color2i'></div><div class='colour'class='color3i'></div><div class='colour'class='color4i'></div>";
          fill += "</div>";
          fill += "<div class='dropdowni'>";
          fill += "<div class='datai'>" + product.productname + "<br>Total: $" + product.price + "</div><br>";
          fill += "<div class='selecti'>";

           fill += "<select class='sizei' id='size"+ count +"'>";
          for (var i = 0; i < product.size.length; i++) {
            fill += "<option value='" + product.size[i] + "'>" + product.size[i] + "</option>"; 
          }
          fill += "</select></div><br>";

          fill += "<div class='selecti'>";

           fill += "<select class='sizei' id='colorz"+ count +"'>";
          for (var i = 0; i < product.color.length; i++) {
            fill += "<option value='" + product.color[i] + "'>" + product.color[i] + "</option>"; 
          }
          fill += "</select></div><br>";

          fill += "<div class='selecti'>";

          //fill += "Quantity:<input type='text' id='quant" + product.number + "'><br>";
          //fill += product.productname;
          //fill += "<br>";

          //fill += "<br>";


          fill += "<select class='quanti' id='quant"+ count +"'>";
          for (var i = 0; i < 10; i++) {
            fill += "<option value='" + i + "'>" + i + "</option>"; 
          }
          fill += "</select></div><br>";

          fill += "<img class='button-round' style='padding-top: 15px' id='addtocart"+ count +"' onmouseover='changepic("+count+")' onmouseout='changepicback("+count+")' onClick='cart(" + count + ",\""+ product.productname +"\","+ product.price +" ," + product.number + ", \"" + product.color +"\")' src='pics/addcart.png' width='150px'>";
          //var pn = product.number;
          //fill += "<input id='btn" + count + "' type='submit' value='Add To Cart' onClick='cart(" + pn + ")'>";

          fill += "</div>";
          fill += "</div>";
          fill += "<div id='pix'>";
          fill += "</div>";
          fill += "</div>";
          fill += "</div>";

          count++;
          //var btnholder = "btn" + count; 
          //document.getElementById(btnholder).addEventListener('click', cart(e,product.number));
      }
      
      if (res[1] == null) {
        createItem(hat);fill += "<br>";
        createItem(shirt);fill += "<br>";
        createItem(sweatshirt1);fill += "<br>";
        createItem(sweatshirt2);fill += "<br>";
        
        
        fill += "<br><br><br><br><br><br><br><br><br><br>";
      }
      else {
        if (hat.type == res[1]){createItem(hat);fill += "<br>";}
        if (shirt.type == res[1]){createItem(shirt);fill += "<br>";}
        if (sweatshirt1.type == res[1]){createItem(sweatshirt1);fill += "<br>";}
        if (sweatshirt2.type == res[1]){createItem(sweatshirt2);fill += "<br>";}
        
        
        fill += "<br><br><br><br><br><br><br><br><br><br>";
      }
      itemEl.innerHTML = fill;
      
      
      
      var items = [];
      
      var item = {
        productname:"",
        size:"",
        quantity:"",
        number:"",
        color:"",
        type:"",
        imgsrc:"",
        price:""
      };
      
      function cart(count, productname, price, itemNum, color) {
        var itemArray = [];
        var quant = document.getElementById('quant' + count).value;
        var size = document.getElementById('size' + count).value;
        var colorz = document.getElementById('colorz' + count).value;
        itemArray.push(quant);
        itemArray.push(size);
        itemArray.push(productname);
        itemArray.push(price*quant);
        itemArray.push(colorz);
        masterArray.push(itemArray);
        localStorage.setItem("cart", masterArray);
        alert("You added "+ quant +" of " + productname + " in size " + size + " color of "+ colorz +". Your total is $" +(quant*price)+".");
      }
      function changepic(count) { 
       	 document.getElementById('addtocart' + count).src="pics/addcart.gif";
      }
      function changepicback(count) { 
       	 document.getElementById('addtocart' + count).src="pics/addcart.png";
      }
      </script>
		<script src="scripts.js"></script>
		<script src="scripts2.js"></script>
    </div>
  </body>
</html>