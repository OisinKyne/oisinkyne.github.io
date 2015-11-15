<!-- My web design project!-->

<!--Things to fix on this page:

	Textual directions and Google Maps Directions to house.
	Get My icons working on all pages.

	-->
<!DOCTYPE html>
<html>
<head>
	<title>Visit the West of Ireland</title>
	<link rel="stylesheet" type="text/css" href="globalstylesheet.css" />
	<link rel="shortcut icon" type="image/png" href="images/icon.png" />
	

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVBIT5-AodDgdOPuxrW_UeTR9To2BoeUY&sensor=true">
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
	
	<div class="Body">
		<div class="JavascriptMap" id="map-canvas">
			<script type="text/javascript">
	      function initialize() {
	        var mapOptions = {
	          center: new google.maps.LatLng(-34.397, 150.644),
	          zoom: 8
	        };
	        var map = new google.maps.Map(document.getElementById("map-canvas"),
	            mapOptions);
	      }
	      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
		</div>



<br/>


		<iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/view?zoom=15&center=53.8744%2C-9.2815&key=AIzaSyCVBIT5-AodDgdOPuxrW_UeTR9To2BoeUY">
		</iframe>
	</div>
	
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