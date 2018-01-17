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
var contact1 = document.getElementById("contact");
function ifClickContacts() {
window.location.assign("contact.php");
}
contact1.addEventListener("click", ifClickContacts);  

//promotion (This is now called Custom)
var custom1 = document.getElementById("custom");
function ifClickCustom() {
window.location.assign("custom.php");
}
custom1.addEventListener("click", ifClickCustom); 

//sort hat
var sortHat = document.getElementById("sort-hats");
function ifClickSortHats() {
window.location.assign("shop.php?filter=hat");
}
sortHat.addEventListener("click", ifClickSortHats); 

//sort Shirts
var sortShirts = document.getElementById("sort-shirts");
function ifClickSortShirts() {
window.location.assign("shop.php?filter=shirt");
}
sortShirts.addEventListener("click", ifClickSortShirts); 

//sort sweater
var sortSweaters = document.getElementById("sort-sweaters");
function ifClickSortSweaters() {
window.location.assign("shop.php?filter=sweater");
}
sortSweaters.addEventListener("click", ifClickSortSweaters); 

//sort mug
var sortMugs = document.getElementById("sort-mugs");
function ifClickSortMugs() {
window.location.assign("shop.php?filter=Mugs");
}
sortMugs.addEventListener("click", ifClickSortMugs); 