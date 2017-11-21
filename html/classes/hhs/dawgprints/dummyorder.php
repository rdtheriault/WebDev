<html>
  <head>
    <style>
      body {
      color: lime;
      background-color: purple;
      }
      #spit {
      color: purple;
      background-color: lime;
      }
    </style>
    <script src='items.js'></script>
  </head>
  <body>
    
    <div id='spit'>
    </div>
    <form>
      Quantity:
      <input type="text" id='quantity'><br>
      Type:
      <input type="text" id='type'><br>
      <select id='size'>
        <option value='small'>Small</option>
        <option value='medium'>Medium</option>
        <option value='small'>Large</option>
      </select>
      <input id='btn' type="submit" value='Add To Cart'>
    </form>
    <div id='items'>
    </div>
    
    
    
    
    <script>
      
      var itemEl = document.getElementById('items');
      var fill = "";
      var count = 0;
      function createItem(product) {
        //fill += "<form>";
        fill += "Quantity:<input type='text' id='quant" + product.number + "'><br>";
        fill += product.productname;
        fill += "<br>";
        fill += "<img src='" + product.imgsrc + "' width='200px'>";
        fill += "<br>";
        fill += "<select>";
        for (var i = 0; i < product.size.length; i++) {
          fill += "<option value='" + product.size[i] + "'>" + product.size[i] + "</option>"; 
        }
        fill += "</select>";
        var pn = product.number;
        fill += "<input id='btn" + count + "' type='submit' value='Add To Cart' onClick='cart(" + pn + ")'>";
        //fill += "</form>";
        count++;
        //var btnholder = "btn" + count; 
        //document.getElementById(btnholder).addEventListener('click', cart(e,product.number));
      }
      
      createItem(cup);
      fill += "<br>";
      createItem(shirt);
      
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
      
      //for (var i=0; i < count; i++) {
       //var btnholder = "btn" + i; 
       //document.getElementById(btnholder).addEventListener('click', cart(e,));
      //}
      
      
      
      
      
      document.getElementById("btn").addEventListener('click', cart);
      function cart(purchase) {
        //purchase is item being added to cart, didn't want to over use the words item, product etc.
        //e.preventDefault();
        var product = item;
        product.quantity = document.getElementById("quantity").value;
        items.push(product);
        document.getElementById("spit").innerHTML = product.quantity;
  	} 
      
    </script>
   </body>
</html>