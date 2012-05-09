<?php

	//send contact form by email
	if (isset($_GET['action']) == "send") { //message formatting
		$message = "
		<html>
		<head>
			<title>Contact Form Email</title>
		</head>
			<body>
				<ul>
					<li>Name: ".$_POST['name']."</li>
					<li>Email: ".$_POST['email']."</li>
					<li>Phone: ".$_POST['phone']."</li>
					<li>Message: ".$_POST['message']."</li>
				</ul>
			</body>
		</html>";
		
	//end message formatting
	//set headers
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		if (mail("james.johnson@excellentingenuity.com", "Contact Form Email", $message, $headers)==1){
			$show = true;
			$modal = "<script>$('#confirmation').modal('show')</script>";
			//"Mail has been sent";
		} else {
			echo "Mail did not send";	
		}
	}
?>
<html lang="en">
<head>

<!-- Page designed and coded by James Johnson of Excellent InGenuity LLC, 2012 under contract for ERF Marketing -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Caesar's Mediterranean Cuisine - About Us</title>


<link rel="stylesheet" media="all" href="css/bootstrap.css">
<link rel="stylesheet" media="all" href="css/bootstrap-responsive.css">
<link rel="stylesheet" media="screen" href="css/phone.css">
<link rel="stylesheet" media="screen and (min-width: 330px) and (max-width: 590px)" href="css/phone-hz.css"> 
<link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 800px)" href="css/tablet.css">
<link rel="stylesheet" media="screen and (min-width: 801px) and (max-width: 1280px)" href="css/desktop.css">
<link rel="stylesheet" media="screen and (min-width: 1280px)" href="css/widescreen.css">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--javascript includes -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap-carousel.js"></script>
  <script src="js/bootstrap-button.js"></script>
  <script src="js/bootstrap-dropdown.js"></script>
  <script src="js/bootstrap-transition.js"></script>
  <script src="js/bootstrap-alert.js"></script>
  <script src="js/bootstrap-modal.js"></script>


<!-- insert google analytics code here-->

</head>
<body>
	<div class="container-fluid">
		<header class="row-fluid" id="header">
        	<div class="span5" id="logo">
    			<a href="index.html" class="logo"><img class="logo" src="http://placehold.it/275x100"></a>
                <p class="tagline">Fine Mediterranean Cuisine</p>
            </div>
            <div class="span7"><!-- nav block -->
            	<span class="visible-phone">
                	<ul class="nav nav-pills nav-stacked" id="nav_menu">
                    	<li id="nav_item">
                        	<a id="menu_link"href="index.html">Home</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="menu.html">Menu</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="find.html">Find Us</a>
                        </li>
                        <li class="active" id="active_nav">
                        	<a id="menu_link_active" href="about.php">About Us</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="reserve.php">Reservations</a>
                        </li>
                    </ul>
                </span>
                <span class="visible-tablet">
                	<ul class="nav nav-pills" id="nav_menu">
                    	<li id="nav_item">
                        	<a id="menu_link"href="index.html">Home</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="menu.html">Menu</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="find.html">Find Us</a>
                        </li>
                        <li class="active" id="active_nav">
                        	<a id="menu_link_active" href="about.php">About Us</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="reserve.php">Reservations</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="http://facebook.com"><img src="img/facebook.png" alt="facebook" /></a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="http://twitter.com"><img src="img/twitter.png" alt="twitter" /></a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="http://yelp.com"><img src="img/yelp.png" alt="yelp" /></a>
                        </li>
                    </ul>
                </span>	
              	<span class="visible-desktop">
                	<ul class="nav nav-pills" id="nav_menu">
                    	<li id="nav_item">
                        	<a id="menu_link"href="index.html">Home</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="menu.html">Menu</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="find.html">Find Us</a>
                        </li>
                        <li class="active" id="active_nav">
                        	<a id="menu_link_active" href="about.php">About Us</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="reserve.php">Reservations</a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="http://facebook.com"><img src="img/facebook.png" alt="facebook" /></a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="http://twitter.com"><img src="img/twitter.png" alt="twitter" /></a>
                        </li>
                        <li id="nav_item">
                        	<a id="menu_link" href="http://yelp.com"><img src="img/yelp.png" alt="yelp" /></a>
                        </li>
                    </ul>
                </span>
            </div>
    	</header>
    </div>
    <div class="modal hide fade" id="confirmation">
    	<div class="modal-header">
        	<button class="close" data-dismiss="modal">x</button>
            <h3>Thank you</h3>
        </div>
        <div class="modal-body">
        	<p class="confirmation">
            	Thank you for contacting us we will reply shortly.
            </p>
        </div>
       	<div class="modal-footer">
        	<a href="#" class="btn btn-primary" data-dismiss="modal" id="confirmation_close">Close</a>
        </div>
    </div>
    <div class="container-fluid">
    	<div class="row-fluid">
            
                <div class="span3" id="contact_form">
                <p class="form_info">
                
                </p>
                <p class="form_info">
                
                </p>
                <div class="my_contact">
                <form id="contact_form" class="form-verical" method="post" action="about.php?action=send"> <!--/caesars/ -->
                    <fieldset>
                        <legend id="contact_form_para">Contact Us <br />
                        <small id="contact_small">All fields are Required</small>
                        </legend>
                        <div class="control-group">
                            <label class="control-label" for="name">Name:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" id="name" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="email">Email:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="email" id="email" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="phone">Phone:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="phone" id="phone" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="message">Message:</label>
                            <div class="controls">
                                <textarea class="input-xlarge" name="message" id="message" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-actions" id="form_button_group">
                            <button type="submit" id="form_submit" class="btn btn-primary btn-large">Submit</button>
                            <button type="reset" id="form_cancel" class="btn btn-large">Cancel</button>
                        </div>
                    </fieldset>
                </form>
                </div>
            </div>
            <div class="span6 offset1" id="about">
             <h2>About Us</h2>
            	<p>
                	After 30 years of combined experience with some of the top names in the hospitality industry, Islam and Tina Abu-Sal decided to pursue their dream of bringing something deliciously different to the Greenville restaurant market.
                </p>
                <p>
                	They envisioned a place combining Mediterranean flavors with Southern hospitality. A place where top-quality ingredients come together in ways both new and familiar. A place offering generous portions at reasonable prices. A place where customers become friends, and friends become family.
                </p>
                <p>
                	That place was Caesar’s, and the year was 2000. It’s hard to believe that we’ve been here for a dozen years now – a lifetime in the fickle restaurant business!
                </p>
                <p>
                	Sure, we’ve updated our look, expanded our menu, and introduced popular features such as brunch, big-screen sports and belly dancing nights. But at our core, we’re still the comfortable neighborhood spot where a big menu and a broad smile will always be waiting for you.
                </p>
                <p>
                	If you’re a part of our family, we thank you for your support. If you haven’t tried us yet, we invite you to pull up a chair, tuck in a napkin, and see what you’ve been missing.
                </p>
                <p>
                	We look forward to seeing you soon!
                </p>
          </div>
       </div><br /><br />
       <div class="row-fluid">
       		<div class="span10 offset1">
            	<p class="sub_tag">
                	We are <b>Caesar's</b> Mediterranean, in Greenville.<br />
                    We know good food, and we like to share.
                </p>
            </div>
          </div>
      </div>
	</div><br /><br />
    <div class="container-fluid" id="footer_container">
		<footer class="row-fluid" id="footer">
        	<div class="span10 offset1" id="footer_blocks">
            	<div class="row-fluid">
                	<address class="span4" id="address">
                    	<em>Caesar's</em><br />
                        225 South Pleasantburg Drive<br />
                        Greenville, SC 29607<br />
                    </address>
                    <div class="span4 offset2" id="contact">
                    	<em>Contact Caesar's</em><br />
                        <a class="btn btn-medium" id="email_link" href="#">Email</a>
                    </div>
                </div>
    		</div>
    	</footer>
        <div class="row-fluid" id="bottom_bar">
        	<p class="span10 offset1" id="copyright">
            	&copy;&nbsp;Caesar's Resaurant, All Rights Reserved. - <a href="http;//erfmarketing.com" id="erf_link">ERF Marketing</a>
            </p>
        </div>
	</div>
   <?php
	if (show == true){
		echo $modal;
	}
	?>
</body>
</html>