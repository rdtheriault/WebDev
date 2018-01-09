//main
var home1 = document.getElementById("home");
function ifClickHome() {
window.location.assign("index.html");
}
 home1.addEventListener("click", ifClickHome);


//shop
var shop1 = document.getElementById("shop");
function ifClickShop() {
window.location.assign("shop.php");
}
 shop1.addEventListener("click", ifClickShop); 

//cart
var cart1 = document.getElementById("cart");
function ifClickCart() {
window.location.assign("cart.php");
}
 cart1.addEventListener("click", ifClickCart);  

//contact us
var contact1 = document.getElementById("events");
function ifClickContacts() {
window.location.assign("contact.php");
}
contact.addEventListener("click", ifClickContacts);  

//promotion
var deals1 = document.getElementById("deals");
function ifClickDeals() {
window.location.assign("deals.php");
}
deals.addEventListener("click", ifClickDeals); 