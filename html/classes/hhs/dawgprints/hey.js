function hey() {
document.getElementById("konami").style.display="none";
document.getElementsByTagName("html")[0].style.display="block";
document.body.style.display="block";
document.body.style.width="99%";
document.body.style.height="98%";
var video = document.createElement("video");
video.src = "hey.webm";
video.autoplay = "true";
video.loop = "true";
video.style.height="100%";
video.style.width="100%";
document.body.appendChild(video);
}
