void setup() {
   size(800, 800);
	frameRate(30);
   background(29, 40, 115);

var xPos = 1;
var yPos = 1;
var xPos2 = 799;
var yPos2 = 799;
var xPos3 = 799;
var yPos3 = 1;
var xPos4 = 1;
var yPos4 = 799;

draw = function() {   
  background(29, 40, 115);
    fill(255, 242, 0);
    ellipse(xPos, yPos, 20, 20);
    fill(252, 0, 235);
    ellipse(xPos2, yPos2, 20, 20);
     fill(0, 242, 250);
    ellipse(xPos3, yPos3, 20, 20);
     fill(250, 158, 0);
    ellipse(xPos4, yPos4, 20, 20);
    
    xPos +=2;
    yPos +=2;
    
    xPos2 +=-2;
    yPos2 +=-2;
    
    xPos3 +=-2;
    yPos3 +=2;
    
    xPos4 +=2;
    yPos4 +=-2;
};
    
  

};

