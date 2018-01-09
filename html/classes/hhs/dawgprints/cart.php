<html>
  <head>
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
      #cartlist {
        margin: 10px;
      }
      .cartstyle {
        display: flex;
        
      }
      .itemstyle {
        margin: 10px;
      }
      
    </style>
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
      
      <div id='cartlist'></div>
      <div class='spacer'></div>
<div id="footer">
  <img id="footer_s" src="pics/footer_statement.png">
      </div>
    </div>
          <script src="scripts.js"></script>
     

    
    <script>
      
      
      
      function loadCart() {
          var masterArray = localStorage.cart;
          var fill = "";
          var count = 0;
          var masterSplit = masterArray.split(',');
          var totalPrice = 0;
        if(masterSplit.length > 1) {

          for(var i = 0; i < masterSplit.length; i++) {
            //fill += "<div class='cartstyle'>";
            if (count===4) { 
              count = 0;
              //fill += " | <button id='remove' onClick='remove("+ i +")'>Remove Item</button></div>";
            }//reset

            if (count===0) {
             fill += "<div class='itemstyle'><button id='remove' onClick='remove("+ i +")'>Remove Item</button> | Quantity: " + masterSplit[i];//quantity 
            }
            if (count===1) {
              fill += " - Size: " + masterSplit[i];//size
            }
            if (count===2) {
              fill += " - Name: " +masterSplit[i];//proudctname
            }
            if (count===3) {
              fill += " - Price: $" + masterSplit[i]+"</div>";//price
              //getTotal();
            }

            //fill += "</div>";
            count++;
          }
          fill += "<a href='checkout.php'><img src='checkoutbutton.png' width='200px'></a>";
        }
        else {
         fill = "You have nothing in your cart. Please buy our products to proceed to checkout."; 
        }
        document.getElementById('cartlist').innerHTML = fill;
      }
      //document.getElementById('cartlist').innerHTML = fill;
      function remove(index) {
       var masterArray = localStorage.cart;
        var masterSplit = masterArray.split(',');
       masterSplit.splice(index, 4); 
          localStorage.setItem("cart", masterSplit); 
        loadCart();
      }
      loadCart();
      
    </script>
    
        
  </body>
</html>