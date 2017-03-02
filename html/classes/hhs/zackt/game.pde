void setup() {
  size(500, 400);
  frameRate(30);
  background(0, 212, 244);
  fill(0, 188, 31);
  rect(-1, 300, 501, 100);

}
var scene = 1;

      // @pjs preload must be used to preload the image 

    /* @pjs preload="https://upload.wikimedia.org/wikipedia/commons/d/d4/Scratchcat.svg"; */

    PImage b;

    b = loadImage("https://upload.wikimedia.org/wikipedia/commons/d/d4/Scratchcat.svg");

    image(b, 0, 225, 75, 75);
xPos = 0;
yPos = 225;
jump = 0;
void draw() {
  if(scene == 1) {
  fill(0, 150, 150);
  rect(100, 100, 150, 50, 5);
  fill(0,0,0);
  textSize(19);
  text("begin", 110, 133);
         
  }
  else if (scene == 2) {
  jumped();
  object1();
  }
}
funtion jumped() {
    if(keyPressed == true) {
    background(0, 212, 244);
  fill(0, 188, 31);
  rect(-1, 300, 501, 100);
    image(b, xPos, yPos+jump, 75, 75);
    if (jump > -100) {
     
    jump -= 10;
    }
    text(jump, 10, 10);
  } else {
    if (jump < 0) {
      
      jump += 10;
      background(0, 212, 244);
  fill(0, 188, 31);
  rect(-1, 300, 501, 100);
      image(b, xPos, yPos+jump, 75, 75);
      text(jump, 10, 10);
    } else {
      background(0, 212, 244);
  fill(0, 188, 31);
  rect(-1, 300, 501, 100);
      image(b, xPos, yPos+jump, 75, 75);
      text(jump, 10, 10);
    }
  }
}
var o1xPos = 500;
var o1yPos = 275;
function object1() {
  fill(250, 0, 0);
  ellipse(o1xPos, o1yPos, 25, 25);
  o1xPos -= 10;
  
}
void mousePressed() {
  if (mouseX >= 100 && mouseX <= 250 && mouseY >= 100 && mouseY <= 150 && scene != 2) {
    println("useless. told you");
    scene = 2;
  } else {
  
  }
}