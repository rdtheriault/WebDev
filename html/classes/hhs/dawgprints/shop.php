<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <script src='items.js'></script>
    <link rel="stylesheet" type="text/css" href="item.css">
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
        <div id='cart' class='btn'>
          Cart
          </div>
        <div id='contact' class='btn'>
          Contact Us
          </div>
        <div id='deals' class='btn'>
          Promotions
          </div>
      </div>
       <div id='items'>
    </div>
    <div id="footer"><img id="footer_s" src="pics/footer_statement.png"></div>
    
    
    
    <script>
      
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
        fill += "<div class='datai'><br>" + product.productname + "<br>Total: $" + product.price + "</div><br>";
        fill += "<div class='styled-selecti blacki roundedi'>";
        
         fill += "<select class='sizei' id='size"+ count +"'>";
        for (var i = 0; i < product.size.length; i++) {
          fill += "<option value='" + product.size[i] + "'>" + product.size[i] + "</option>"; 
        }
        fill += "</select></div><br>";
        
        fill += "<div class='styled-selecti blacki roundedi'>";
        
        //fill += "Quantity:<input type='text' id='quant" + product.number + "'><br>";
        //fill += product.productname;
        //fill += "<br>";
        
        //fill += "<br>";
        
        
        fill += "<select class='quanti' id='quant"+ count +"'>";
        for (var i = 0; i < 10; i++) {
          fill += "<option value='" + i + "'>" + i + "</option>"; 
        }
        fill += "</select></div><br>";
 		
        fill += "<button id='addtocart"+ count +"' onClick='cart(" + count + ",\""+ product.productname +"\","+ product.price +" ," + product.number + ")'>Add To Cart</button>";
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
      
      createItem(hat);
      fill += "<br>";
      createItem(shirt);
      fill += "<br>";
      createItem(sweatshirt1);
      fill += "<br>";
      createItem(sweatshirt2);
      fill += "<br><br><br><br><br><br><br><br><br><br>";
      
      
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
      
      function cart(count, productname, price, itemNum) {
        var itemArray = [];
        var quant = document.getElementById('quant' + count).value;
        var size = document.getElementById('size' + count).value;
        itemArray.push(quant);
        itemArray.push(size);
        itemArray.push(productname);
        itemArray.push(price*quant);
        masterArray.push(itemArray);
        localStorage.setItem("cart", masterArray);
      	alert("You added "+ quant +" of " + productname + " in size " + size + ". Your total is $" +(quant*price)+".");
      }
      </script>
          <script src="scripts.js"></script>
    </div>
  </body>
</html>