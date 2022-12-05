<!DOCTYPE html>
<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title> Sparks Repair </title>
       <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <style>
            #why{ 
                background-image:URL("ab.jpg");
            }
            #font{
                font-size:70px;
            }

        </style>
    </head>
    <body>
        <section class = "sub-header" id="why">
        <nav> 
        <div class="nav-links">
        <ul>
           <li><a href="home.php">HOME</a></li>
           <li><a href="about.php">ABOUT</a></li>
           <li><a href="services.php">SERVICES</a></li>
           <li><a href="rate-cards.php">RATE CARDS</a></li>
           <li><a href="product.php">PRODUCT</a></li>
           <li><a href="contact.php">CONTACT</a></li>
		   
        </ul>
        </div>
        </nav>
        <h1 id="font">ABOUT US</h1>
        </section>

<!------------------about us content------------------> 
<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>SPARKS REPAIR</h1>
            <p>Sparks Repair was formed to take away all these hassles of repair services with its transparent pocket friendly Rate Card and State-of-The-Art Lab stations. <br> <br>
                We pick-repair-drop your device, supply you with a reliable and prompt repair service and facilitate you with reduced costs and efforts. <br> <br>
                And most important we offer peace of mind. Be it Apple-Mac, Dell, Lenovo, Acer or HP, our team is trained and competent to repair them all.<br><br>
                The certified technicians of Sparks Repair are committed to providing superior quality laptop repair services. <br><br>
                Our professional and experienced experts can repair and service all brands of Laptop.</p>
            <a href="services.php" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="https://images.pexels.com/photos/326501/pexels-photo-326501.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=920">
        </div>
    </div>
</section>

<!------------------comment box------------------> 
<section class="comment">
    <div class="comment-box">
    <h3>Leave a Comment</h3>
        <form class="comment-form" action="backenddata1.php" method="post" name="COMMENT FORM">
            <input type="text" placeholder="Enter Name" name="n2" required>
			<br><br>
            <input type="email" placeholder="Enter Email" name="e2" required>
			<br><br>
            <input type="text" placeholder="Your Comment"   name="c1" required>
			<br><br>
            <button type="submit" class="hero-btn red-btn" name="s" required>Post Comment</button>
        </form>
    </div>
</section>
<!------------------footer------------------> 
<section class="footer">
<h4>ABOUT US</h4>
<p>
The certified technicians of Sparks Repair are committed to providing superior quality repair services. <br>Our professional and experienced experts can repair and service all brands.
</p>
<div class="icons">
    <i class="fa fa-facebook"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-linkedin"></i>
</div>
<p>© 2022 Sparks Repair — sparksrepair@gmail.com</p>
</section>
</body>
</html>