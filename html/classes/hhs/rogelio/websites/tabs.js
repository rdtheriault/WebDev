//home
var home1 = document.getElementById("home");
function ifClickHome() {
window.location.assign("home.php");
}
 home1.addEventListener("click", ifClickHome);


//about
var about1 = document.getElementById("about");
function ifClickAbout() {
window.location.assign("about.php");
}
 about1.addEventListener("click", ifClickAbout); 

//location
var location1 = document.getElementById("location");
function ifClickLocation() {
window.location.assign("location.php");
}
 location1.addEventListener("click", ifClickLocation);  

//event
var events1 = document.getElementById("events");
function ifClickEvents() {
window.location.assign("events.php");
}
events1.addEventListener("click", ifClickEvents);  

//staff
var staff1 = document.getElementById("staff");
function ifClickStaff() {
window.location.assign("staff.php");
}
staff1.addEventListener("click", ifClickStaff); 