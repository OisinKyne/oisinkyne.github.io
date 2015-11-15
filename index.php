<!-- My web design project!-->

<!--Things to fix on this page:

	Get the Body to begin on the right of the slideshow.
	Get the Slideshow to fade slowly/through white.
	Comment out the Javascript for older Browsers.
	Get My icons working on all pages.

	-->
<!DOCTYPE html>
<html>
<head>
	<title>Visit the West of Ireland</title>
	<link rel="stylesheet" type="text/css" href="globalstylesheet.css" />
	<link rel="shortcut icon" type="image/png" href="images/icon.png" />
	<script type="text/javascript">
		var image1 = new Image();
		image1.src = "images/house1.jpg";

		var image2 = new Image();
		image2.src = "images/view3.jpg";

		var image3 = new Image();
		image3.src = "images/kitchen1.jpg";

		var image4 = new Image();
		image4.src = "images/view2.jpg";

		var image5 = new Image();
		image5.src = "images/sunroom1.jpg";

		var image6 = new Image();
		image6.src = "images/bedroom3.jpg";

		var image7 = new Image();
		image7.src = "images/diningroom1.jpg";

		</script>
</head>


<body>

	<div class="CenterColumn">
	<div class="Header">
		This is where my main home image will be.
	</div>
	<br/>
	<br/>
	<br/>
	<br/>
	<nav>
		<div class="NavBar">
			<table class="NavBar"><tr>
				<td class="NavBar">
					<a href="index.php" alt="Home Page">Home</a>
				</td>
				<td class="NavBar">
					<a href="house.php" alt="View the House">The House</a>
				</td>
				<td class="NavBar">
					<a href="area.php" alt="Local Area">The Area</a>
				</td>
				<td class="NavBar">
					<a href="directions.php" alt="Getting Here">Getting Here</a>
				</td>
				<td class="NavBar">
					<a href="attractions.php" alt="Local Attractions">Local Attractions</a>
				</td>
				<td class="NavBar">
					<a href="gallery.php" alt="Image Gallery">Image Gallery</a>
				</td>
				<td class="NavBar" id="RightMostNavBar">
					<a href="contact.php" alt="Contact Us">Contact Us</a>
				</td>

			</tr></table>
		</div>
	</nav>
		
	<div class="Slideshow" id="SlideshowDiv" >
		<img class = "Slideshow" name="slideshow" src="images/house1.jpg" alt="House Slideshow">
	</div>
	<script type="text/javascript">
		
		var i = 1;
		function slide(){


			//document.images.slideshow.fadeOut(1000);
			document.images.slideshow.src = eval("image"+i+".src");	//Changing background
			//document.images.slideshow.fadeIn(1000);
			if(i < 7)
			{
				i = i + 1;
			}
			else
			{
				i = 1;
			}

			setTimeout("slide()",3000);

		};
		slide();
	</script>
	<br/>
	<div class="Body"><p>This is the column of text with which I shall be working. Anything outside of 
	this shall be whitespace for larger displays. I wonder how long I will have to type
	in order to see this text reach the far side of the page and break onto the next line.
	I should really put these widths into the stylesheet too, before I forget.</p></div>
	
	<div class="footer">
	Mountgregory,<br/>
	Pontoon Road,<br/>
	Castlebar,<br/>
	Co. Mayo.<br/>
	(086)8230133 <br/>
	<a href="mailto:oisin@sportsmanager.ie" alt="Email the Webmaster" >reservations@visitwest.ie</a><br/><br/>
	Copyrights Oisin Kyne 2014&copy;
	<br/>
	</div>
	</div>


</body>
</html>