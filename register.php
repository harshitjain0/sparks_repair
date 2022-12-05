<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sparks Repair </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
    .new{
        display: inline;
    }
  
            #why{ 
                background-image:URL("ab.jpg");
            }
            #font5{
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
     <h1 id="font5">REGISTRATION</h1>
     </section>

<!------------------contact us content------------------> 
<section class="contact-us">
    <div class="contact-col">
        <form action="backenddata.php" method="post" name="Registration FORM"> 
            <input type="text" placeholder="ENTER YOUR NAME" name="n1"> 
           <br><br> 
           <input type="email" placeholder="ENTER EMAIL ADDRESS" name="e1" required> 
           <br><br> 
           <input type="text" placeholder="ENTER YOUR ADDRESS" name="a1" required> 
           <br><br>
           <input type="number" placeholder="ENTER PINCODE" name="p1" required> 
           <br><br> 
           <input type="number" placeholder="ENTER PHONE NUMBER " name="s1" required> 
           <br><br>
           <input type="SUBMIT" class="hero-btn red-btn" value="SUBMIT INFORMATION" name="s" required> 
           </form>
<?php
echo '<script type="text/javascript">
       window.onload = function () { alert("Welcome!! Click ok to register yourself"); } 
</script>'; 
?> 		   
    </div>
</section>

<!------------------footer------------------> 
<section class="footer">
<h4>ABOUT US</h4>
<p>
The certified technicians of Sparks Repair are committed to providing superior quality repair services. <br>Our professional and experienced experts can repair and service all brands.
</p>
<div class="icons">
<ul >
<li class="new"><a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i></a></li>
<li class="new"><a href="https://www.instagram.com/" target="blank"><i class="fa fa-instagram"></i></a></li>
<li class="new"><a href="https://www.twitter.com/" target="blank"><i class="fa fa-twitter"></i></a></li>
<li class="new"><a href="https://www.linkedin.com/" target="blank"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
<p>© 2022 Sparks Repair — sparksrepair@gmail.com</p>
</section>
</body>
</html>