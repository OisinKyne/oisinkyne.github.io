var image1 = new Image();
image1.src = "images/house1.jpg";

var image2 = new Image();
image2.src = "images/view1.jpg";

var image3 = new Image();
image3.src = "images/kitchen1.jpg";

var imag4 = new Image();
image4.src = "images/bedroom3.jpg";

var image5 = new Image();
image5.src = "images/view2.jpg";

var i = 1;

function slide(){

	document.images.slideshow.src = eval("image"+i+".src");	//Changing background
	if(i > 5)
	{
		i = 1;
	}
	else
	{
		i++;
	}
	document.write(i+"<br/>");

	setInterval("slide()",3000);
};