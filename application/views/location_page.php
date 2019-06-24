<!DOCTYPE html>
<html>
   <body style="background-color: #001a33;">
   <head>
	<title>Location</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/location_page.css')?> " >

   <STYLE>A {text-decoration: none;} </STYLE><!--Remove the Underline from All Hyperlinks-->

<div class="top-bar">

	<center>
		
		<div class="top-bar-links">

		<ul>
			
			<li><a href="sign_in">SIGN IN</a></li>
			<li><a href="shop_item">SHOP ITEMS</a></li>
			<li><a href="register">REGISTER</a></li>
			<li><a href="location">SHOPS LOCATIONS</a></li>

		</ul>
	
		</div><!--top-bar-links-->

	</center>
	
</div><!--top-bar-->
<!--<img src="?php echo base_url('assets/images/background.jpg');?>" alt="" style="width : 1900px;"-->


      <script src = "https://maps.googleapis.com/maps/api/js"></script>
      
      <script>
         function loadMap() {
			
            var mapOptions = {
               center:new google.maps.LatLng(17.609993, 83.221436), 
               zoom:12, 
               mapTypeId:google.maps.MapTypeId.ROADMAP
            };
				
            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
         }
			
         google.maps.event.addDomListener(window, 'load', loadMap);
      </script>
      
   </head>
   
   <body>
      <div id = "sample" style = "width:1440px; height:600px;"></div>



       <h1><b>Hours of Operation</h1>

      <hr><hr>
 
<p><h2>
   

        Tuesday - Sunday       
<hr>

       09:30am – 7:00pm   <br>        <br>      

 WE ARE CLOSED

<hr>
 Monday & Poya Days



<hr><hr><hr>
Address:

No:123/A,Ballapitiya,
Horana
<br>Contact us:
07771543318
</b></h2>
</p>
   </body>
   
</html>
