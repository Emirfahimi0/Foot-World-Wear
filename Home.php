<?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['username'])) {

$user =  $_SESSION['username'];
$email =  $_SESSION['email'];
$status="Sign Out";
 ?>
 <?php

}
else{
$user="Guest";
$email="@support.mail.com";
$status="Log in";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="css/home.css?v=<<?php echo time(); ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- SLick Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Home</title>
    <style media="screen">
    /* slick dots styling */

    .slick-dots{
     text-align: left;
     left:80px;
     bottom: 30px;
   }
   .slick-dots li {
   margin: 6;
   }
   .slick-dots li button:before{
     font-size:12px;
   }
   .slick-dots li.slick-active button:before{
     color:#00EE9E;
   }
   .slick-track{
     padding:10px;
   }
     /* End slick dots styling */
    </style>
  </head>
  <body>
<!-- TOP LAYER SECTION -->
<header>
<div class="logo">
  <h2>FOOT WORLD <br> WEAR</h2>
</div>
<div class="menu">
  <ul>
    <li> <a href="#about-us">ABOUT</a></li>
    <li> <a href="contact-us.php" target="_blank">CONTACT</a></li>
    <li> <a href="#featured">FEATURED</a></li>
    <li> <a href="#Trending">TRENDING</a></li>
  </ul>
</div>

<div class="Drop-Menu">
  <div class="profile-icon">
  <div class="navbar">
    <div class="right">
          <ul>
            <li>
              <h5 class="cart"></h5>
                 <a href="cart.html"><i class="fas fa-shopping-cart"  id="cartIcon" style="font-size:30px;"></i></a>
              <div class="dropmenu">
                <a href="#">
                <img src="img/user.png" alt="Admin" width="40"><i class="fas fa-angle-down"></i>
                </a>
                <div class="dropdown">
                <?php

                      if (isset($_SESSION['email']) && isset($_SESSION['username'])) : ?>
                     
                      <ul>
                      <li><p href="#"><i class="fas fa-user"></i> <?php echo $user; ?></p></li>
                      <li><p href="#"><i class="fas fa-at"></i><?php echo $email; ?></p></li>
                      <li><a href="Sign-out.php"><i class="fas fa-sign-out-alt"></i><?php echo $status; ?></a></li>
                  </ul>
                  
                    <?php
                    else: ?>
                       <ul>
                      <li><p href="#"><i class="fas fa-user"></i> <?php echo $user; ?></p></li>
                      <li><p href="#"><i class="fas fa-at"></i><?php echo $email; ?></p></li>
                      <li><a href="index.php"><i class="fas fa-sign-out-alt"></i><?php echo $status; ?></a></li>
                  <?php endif; ?>
                </div>
              </div>
            </li>
        </ul>
      </div>
  </div>
</div>
</div>
<script type="text/javascript">
document.querySelector(".right .dropmenu").addEventListener("click", function(){
    this.classList.toggle("active");
});

</script>
</header>
  <div class="wrapper">
  </div>
  <div class="slider-wrap">
    <div class="slider">
      <div class="item">
        <div class="text">
          <h1>CONVERSE X<br>AMBUSH</h1>
          <p>A unique reworking of the iconic Chuck Taylor, Converse joins forces with Japanese label AMBUSH to imbue the street-ready silhouette with utilitarian undertones. Taking design cues from military-issued Bunny boots, this white pair is constructed entirely from rubber and uses a contemporary exaggerated sole underfoot to capture the true avant-garde style of Tokyo.</p>
          <button class="add-cart"><i class="fas fa-shopping-cart" style="color:white;font-size:20px;padding-right:10px"></i>Buy Now</button class="add-cart">
        </div>
        <div class="img">
        <img src="img/display/converse.jpg" alt="">
      </div>
      </div>
      <div class="item">
        <div class="text">
          <h1>NIKE ACG <br>GORE-TEX</h1>
          <p>Fast, rugged and just as at home in the city as it is rocky trails, the Nike ACG GORE-TEX "Mountain Fly" is ready for whatever you throw at it. The lightweight upper uses GORE-TEX technology to help keep the weather out and has a gator for on-the-go personalisation.We know it'll take you everywhere, we've paired plush Nike React foam with Vaporfly technology for undisputed comfort.</p>
          <button class="add-cart"><i class="fas fa-shopping-cart" style="color:white;font-size:20px;padding-right:10px"></i>Buy Now</button>
        </div>
        <div class="img">
        <img src="img/display/nike-pegasus.png" alt="">
      </div>
      </div>
      <div class="item">
        <div class="text">
          <h1>JORDAN REACT<br>ELEVATION</h1>
          <p>Play with flair, but focus on the fundamentals. The Jordan React Elevation is inspired by team players who beat opponents with their grit and tenacity at both ends of the court. Light and durable, it offers a secure, supportive fit. An underfoot combination of responsive cushioning and herringbone traction helps keep you on your game during clutch moments.</p>
          <button class="add-cart"><i class="fas fa-shopping-cart" style="color:white;font-size:20px;padding-right:10px;"></i>Buy Now</button>
        </div>
        <div class="img">
        <img src="img/display/jordan-react.jpg" alt="">
      </div>
      </div>
        </div>
          </div>
<!-- END TOP LAYER SECTION -->

<!-- ARRIVAL SECTION -->
<section id="Top-layer">
  <div class="home " id="home">
    <h2>NEW ARRIVAL</h2>
      <div class="home-container rbd-grid" >
        <div class="home-sneaker">
          <div class="home-shape" ></div>
          <img src="img/display/nikewomen.jpg" alt="" class="home-img"  >
        </div>
        <div class="home_data">
          <span class="home-new">MYR 299.70</span>
          <h1 class="home-title">Nike Ryz <br>"365 2"</h1>
          <p class="home-description">The radiance lives on in the Nike RYZ 365 2, the b-ball OG that puts a fresh spin on what you know best. The Nike RYZ 365 2 brings you a futuristic take to classic '90s sneakers. The eye-catching midsole with stylised cut-outs modernises the chunky style with an airy aesthetic. A rich mixture of materials on the upper adds texture and style versatility. To top it off, the DIY lacing lets you personalise your style—wrap under the midsole or through webbing on the side and heel for a delicate touch to your bold look.</p>
          <button class="add-cart">ORDER NOW</button>
        </div>
      </div>
      <div class="home-container rbd-grid">
        <div class="home-sneaker">
          <div class="home-shape"></div>
          <img src="img/nike-women.jpg" alt="" class="home-img">
        </div>
        <div class="home_data">
          <span class="home-new">MYR 600.00</span>
          <h1 class="home-title">Nike SuperRep <br>  Go</h1>
          <p class="home-description">Conquer doubt and make a statement in the Nike Air Force 1 Pixel, a re-imagined off-court style made by and for women. Its crisp leather upper features clean lines and subtle texturing for a fresh look that's easy to style. The distorted outsole and midsole have large, pixelated details for a modern edge, while the new logo and inverted Swoosh design are an act of unflinching boldness.The perfect amount of flash to make you shine..You're not just in the game. You're leading it</p>
          <button class="add-cart">ORDER NOW</button>
        </div>
      </div>
      <div class="home-container rbd-grid">
        <div class="home-sneaker">
          <div class="home-shape"></div>
          <img src="img/jordan-zoom.jpg" alt="" class="home-img">
        </div>
        <div class="home_data">
          <span class="home-new">MYR 689.90</span>
          <h1 class="home-title" >Jordan Zoom<br>Trunner Ultimate</h1>
          <p class="home-description">The less friction the shoe, more training effiecient.The Jordan Zoom Trunner Ultimate is for athletes who want a shoe they can run or train in. Breathable and ultralight, it features full-length cushioning plus an extra forefoot unit to give you more responsiveness on your runs. A diamond-like cage provides side-to-side stability and works with the cushioning to help you feel faster.</p>
          <button class="add-cart">ORDER NOW</button>
        </div>
      </div>
      <div class="home-container rbd-grid">
        <div class="home-sneaker">
          <div class="home-shape"></div>
          <img src="img/air-jordan-xxx.jpg" alt="" class="home-img">
        </div>
        <div class="home_data">
          <span class="home-new">MYR 689.90</span>
          <h1 class="home-title" >Air Jordan <br>XXXV PF</h1>
          <p class="home-description">The lighter the shoe, the less weight to carry, the faster players can go. Evolving last year's release, the Air Jordan XXXV features a stabilising Eclipse plate 2.0, visible cushioning and new Flightwire cables. Lightweight and responsive, it's designed to help players get the most from their power and athleticism. This PF version uses an extra-durable outsole that's ideal for outdoor courts.</p>
          <button class="add-cart">ORDER NOW</button>
        </div>
      </div>

  </div>

</section>
<!-- END ARRIVAL SECTION -->
<!-- FEATURED SECTION -->

<section class="featured-section" id="featured">
  <h2 class="section-title" >FEATURED</h2>
  <div class="featured-container bd-grip">
    <div class="container-face">
      <article class="sneaker">
        <div class="sneaker-sale">Sale</div>
        <img src="img/display/nike4.jpg" alt="" class="sneaker-img">
        <span class="sneaker-name">JORDAN ZOOM </span>
        <span class="sneaker-price">MYR 149.90</span>
        <button  class="add-cart">Add to Cart&nbsp;&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </article>
    </div>
    <div class="container-face">
      <article class="sneaker">
        <div class="sneaker-sale">Sale</div>
        <img src="img/display/nike5.jpg" alt="" class="sneaker-img" >
        <span class="sneaker-name">NIKE SUPERREP SURGE</span>
        <span class="sneaker-price">MYR 589.00</span>
        <button  class="add-cart">Add to Cart&nbsp;&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </article>
    </div>
    <div class="container-face">
      <article class="sneaker">
        <div class="sneaker-sale">Sale</div>
        <img src="img/display/nike6.jpg" alt="" class="sneaker-img" >
        <span class="sneaker-name">ZOOM X REP</span>
        <span class="sneaker-price">MYR 495.00</span>
        <button  class="add-cart">Add to Cart&nbsp;&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </article>
    </div>
    <div class="container-face">
      <article class="sneaker">
        <div class="sneaker-sale">Sale</div>
        <img src="img/display/alexander.jpg" alt="" class="sneaker-img">
        <span class="sneaker-name">ALEXANDER MCQUEEN</span>
        <span class="sneaker-price">MYR 1479.90</span>
        <button  class="add-cart">Add to Cart&nbsp;&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </article>
    </div>
    <div class="container-face">
      <article class="sneaker">
        <div class="sneaker-sale">Sale</div>
        <img src="img/converse-green.jpg" alt="" class="sneaker-img">
        <span class="sneaker-name">CONVERSE FOREST MAX</span>
        <span class="sneaker-price">MYR 765.00</span>
        <button class="add-cart">Add to Cart&nbsp;&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </article>
    </div>
    <div class="container-face">
      <article class="sneaker">
        <div class="sneaker-sale">Sale</div>
        <img src="img/display/nike7.jpg" alt="" class="sneaker-img">
        <span class="sneaker-name">NIKE RAINMAKER</span>
        <span class="sneaker-price">MYR 245.00</span>
        <button  class="add-cart">Add to Cart&nbsp;&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </article>
    </div>
    <div class="container-face">
      <article class="sneaker">
        <div class="sneaker-sale">Sale</div>
        <img src="img/display/converse2.jpg" alt="" class="sneaker-img">
        <span class="sneaker-name">CONVERSE WHITE CHUCK 70S</span>
        <span class="sneaker-price">MYR 599.00</span>
        <button class="add-cart">Add to Cart<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </article>
    </div>
    <div class="container-face">
      <article class="sneaker">
        <div class="sneaker-sale">Sale</div>
        <img src="img/display/airjordan-retro.jpg" alt="" class="sneaker-img" >
        <span class="sneaker-name">NIKE JORDAN ALLSTAR</span>
        <span class="sneaker-price">MYR 712.00</span>
        <button class="add-cart">Add to Cart&nbsp;&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </article>
    </div>
    <div class="container-face">
      <article class="sneaker">
        <div class="sneaker-sale">Sale</div>
        <img src="img/display/nike8.jpg" alt="" class="sneaker-img">
        <span class="sneaker-name">NIKE ALL RUN</span>
        <span class="sneaker-price">MYR 700.00</span>
        <button class="add-cart">Add to Cart&nbsp;&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </article>
    </div>

  </div>
</section>

<!-- END FEATURED SECTION -->

<br><br>
<!-- OFFER SECTION -->
<section class="offer-section" id="Trending">
  <h2>TRENDING</h2>
  <div class="offer-container bd-grip" style="background-image: url('img/display/ctaboot.jpg');">
    <div class="offer-data">
      <h3 class="offer-title">50% OFF</h3>
      <p class="offer-description">Black Friday Sale</p>
      <button class="add-cart">Shop Now</button>
    </div>
  </div>
  <div class="offer-container bd-grip"  style="background-image: url('img/wallpaper3.jpg');">
    <div class="offer-data">
      <h3 class="offer-title">50% OFF</h3>
      <p class="offer-description">In Pandemic Time!</p>
      <button class="add-cart" >Shop Now</button>
    </div>
  </div>
</section>
<!--END OFFER SECTION -->




<!-- ABOUT US SECTION -->
<section class="about-us" id="about-us">
  <div class="about">
         <div class="inner-section">
             <h1>ABOUT US</h1>
             <p class="text">
             Welcome to Foot World Wear, your number one source for all things Foot wear. We're dedicated to providing you the very best of Foot wear, with an emphasis on online payment, safety assured and fast and reliable.
Founded in 2020 by EMIR FAHIMI, Foot World Wear has come a long way from its beginnings in Chendering, Kuala Terengganu. When Emir and Danish first started out, their passion for  "safety buying products during pandemic" drove them to start their own business.
We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
Sincerely,
EMIR FAHIMI
             </p>
             <div class="skills">
                 <a href="team.html">SEE MORE</a>
             </div>
         </div>
     </div>
</section>
<!-- END ABOUT US SECTION -->


<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- SLICK CAROUSEL JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="js/main.js"></script>
<script>

$(function(){

//jscode here

$('.slider').slick(
  {
dots:true,
infinite:true,
slidesToShow:1,
fade:true,
  });
});

</script>
  </body>
  <!-- FOOTER SECTION -->
    <footer class="footer theme-bg-primary " id="foot">
  <div class="inner-footer">
<div class="footer" style="margin-left:50px;">
  <div class="footer-items">
    <h4 class="col-heading">Highlights</h4>
    <ul>
      <li><a href="">Our Story</a></li>
        <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
            <li><a href="">DropShip</a></li>
    </ul>
  </div>
  <div class="footer-items">
    <h4 class="col-heading">Resources</h4>
    <ul>
      <li><a href="">FAQs</a></li>
        <li><a href="">News</a></li>
          <li><a href="">Support</a></li>
            <li><a href="">Developer Profile</a></li>
    </ul>
  </div>
  <div class="footer-items">
    <h4 >legal</h4>
    <ul>
      <li><a href="">Privacy</a></li>
        <li><a href="">Terms of security</a></li>
          <li><a href="">Security</a></li>
    </ul>
  </div>
  <div class="footer-items">
    <h4 class="col-heading">Stay Connected</h4>
    <ul class="social-list">
      <li class="list-inline-item"><a href=""><i id="instagram"class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li class="list-inline-item"><a href=""><i id="twitter"class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li class="list-inline-item"><a href=""><i id="facebook"class="fa fa-facebook" aria-hidden="true"></i></a></li>
    </ul>

    <div class="mb-2">
      Foot World Wear <br>
      2419 Ayah Pin <br>
      Alam Brazer, CA 9827
    </div>
    <a href="#" class="email">support<span>@FootWorldWear</span>.com</a>
  </div>
</div>
  </div>
</footer>
<div class="footer-bottom">
  <p>© 2020 Foot World Wear, Inc. All Rights Reserved.
    <br>This Website is for educational purposes only.All copyright are reserved to their rightful owner.</p>
</div>
    <!-- END FOOTER SECTION -->

</html>
